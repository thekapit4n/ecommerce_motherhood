<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class ProductComment extends ObjectModel
{
	public $id;

	/** @var integer Product's id */
	public $id_product;

	/** @var integer Customer's id */
	public $id_customer;

	/** @var integer Guest's id */
	public $id_guest;

	/** @var integer Customer name */
	public $customer_name;

	/** @var string Title */
	public $title;

	/** @var string Content */
	public $content;

	/** @var integer Grade */
	public $grade;

	/** @var boolean Validate */
	public $validate = 0;

	public $deleted = 0;

	/** @var string Object creation date */
	public $date_add;

	/** @var boolean Highlight */
	public $highlight = 0;

	public $img_url;


	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'product_comment',
		'primary' => 'id_product_comment',
		'fields' => array(
			'id_product' =>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
			'id_customer' =>	array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
			'id_guest' =>		array('type' => self::TYPE_INT),
			'customer_name' =>	array('type' => self::TYPE_STRING),
			'title' =>			array('type' => self::TYPE_STRING),
			'content' =>		array('type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 65535, 'required' => true),
			'grade' =>			array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
			'validate' =>		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'deleted' =>		array('type' => self::TYPE_BOOL),
			'date_add' =>		array('type' => self::TYPE_DATE),
			'highlight' =>		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'img_url' => 		array('type' => self::TYPE_STRING),
		)
	);

	/**
	 * Get comments by IdProduct
	 *
	 * @return array Comments
	 */
	public static function getByProduct($id_product, $p = 1, $n = null, $id_customer = null)
	{
		if (!Validate::isUnsignedId($id_product))
			return false;
		$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');
		$p = (int)$p;
		$n = (int)$n;
		if ($p <= 1)
			$p = 1;
		if ($n != null && $n <= 0)
			$n = 5;

		$cache_id = 'ProductComment::getByProduct_'.(int)$id_product.'-'.(int)$p.'-'.(int)$n.'-'.(int)$id_customer.'-'.(bool)$validate;
		if (!Cache::isStored($cache_id))
		{
			$query='
			SELECT pc.`id_product_comment`,
			(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment` AND pcu.`usefulness` = 1) as total_useful,
			(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment`) as total_advice, '.
			((int)$id_customer ? '(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcuc WHERE pcuc.`id_product_comment` = pc.`id_product_comment` AND pcuc.id_customer = '.(int)$id_customer.') as customer_advice, ' : '').
			((int)$id_customer ? '(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_report` pcrc WHERE pcrc.`id_product_comment` = pc.`id_product_comment` AND pcrc.id_customer = '.(int)$id_customer.') as customer_report, ' : '').'
			IF(c.id_customer, CONCAT(c.`firstname`, \' \',  LEFT(c.`lastname`, 1)), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pc.title, tcd.approved AS  isTester
			, pc.highlight, pc.img_url
			  FROM `'._DB_PREFIX_.'product_comment` pc
			LEFT JOIN `'._DB_PREFIX_.'customer` c ON c.`id_customer` = pc.`id_customer`
			LEFT JOIN ps_tester_campaign_header tch ON ( tch.tester_product_id=pc.id_product OR tch.tester_real_product_id=pc.id_product )
			LEFT JOIN ps_tester_campaign_detail tcd ON tcd.customer_id = c.id_customer AND tcd.tester_id=tch.tester_id AND tcd.approved=1
			WHERE pc.deleted=0 AND (pc.`id_product` = '.(int)($id_product)." OR tch.tester_real_product_id= ".(int)($id_product).".) ".($validate == '1' ? ' AND pc.`validate` = 1' : '').'
			
UNION
SELECT 1000000+crawl_id,
\'\' AS useful,
\'\' AS total_adv,'.
((int)$id_customer ? "'' AS customer_advice,":'').
((int)$id_customer ? "'' AS customer_report,":'').'
customer_name,
content,
grade,
date_add,
title,0 ,0, null
FROM ps_product_comment_crawl
WHERE id_product = '.(int)($id_product).'

			ORDER BY highlight DESC, `date_add` DESC
			'.($n ? 'LIMIT '.(int)(($p - 1) * $n).', '.(int)($n) : '');
			//echo $query;
			$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
		
			//if ($id_product==9394)
			//	echo $query;
			Cache::store($cache_id, $result);
		}
		return Cache::retrieve($cache_id);
	}

	public static function getUploadedImage($id_product, $id_customer){
		$query = ' 
			SELECT img_url FROM ps_product_comment WHERE id_product = '.$id_product.' AND id_customer = '.$id_customer.' ';
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
		return $result;
	}

	/**
	 * Return customer's comment
	 *
	 * @return arrayComments
	 */
	public static function getByCustomer($id_product, $id_customer, $get_last = false, $id_guest = false)
	{
		$cache_id = 'ProductComment::getByCustomer_'.(int)$id_product.'-'.(int)$id_customer.'-'.(bool)$get_last.'-'.(int)$id_guest;
		if (!Cache::isStored($cache_id))
		{
			$results = Db::getInstance()->executeS('
				SELECT *
				FROM `'._DB_PREFIX_.'product_comment` pc
				WHERE pc.`id_product` = '.(int)$id_product.'
				AND '.(!$id_guest ? 'pc.`id_customer` = '.(int)$id_customer : 'pc.`id_guest` = '.(int)$id_guest).'
				ORDER BY pc.`date_add` DESC '
				.($get_last ? 'LIMIT 1' : '')
			);

			if ($get_last && count($results))
				$results = array_shift($results);

			Cache::store($cache_id, $results);
		}
		return Cache::retrieve($cache_id);
	}

	/**
	 * Get Grade By product
	 *
	 * @return array Grades
	 */
	public static function getGradeByProduct($id_product, $id_lang)
	{
		if (!Validate::isUnsignedId($id_product) ||
			!Validate::isUnsignedId($id_lang))
			return false;
		$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

		return (Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT pc.`id_product_comment`, IFNULL(pcg.`grade`,pc.`grade`) AS grade, IFNULL(pccl.`name`,\'Quality\') AS name, IFNULL(pcc.`id_product_comment_criterion`, 1) AS id_product_comment_criterion
		FROM (SELECT id_product_comment, id_product, validate,grade FROM `'._DB_PREFIX_.'product_comment` 
				UNION SELECT 1000000+crawl_id,id_product,1,grade FROM `'._DB_PREFIX_.'product_comment_crawl`) pc
		LEFT JOIN `'._DB_PREFIX_.'product_comment_grade` pcg ON (pcg.`id_product_comment` = pc.`id_product_comment`)
		LEFT JOIN `'._DB_PREFIX_.'product_comment_criterion` pcc ON (pcc.`id_product_comment_criterion` = pcg.`id_product_comment_criterion`)
		LEFT JOIN `'._DB_PREFIX_.'product_comment_criterion_lang` pccl ON (pccl.`id_product_comment_criterion` = pcg.`id_product_comment_criterion` AND pccl.`id_lang` = '.(int)$id_lang.')
		WHERE (pc.`id_product` = '. (int)$id_product . ' OR pc.`id_product` IN (SELECT tester_product_id FROM motherhood_presta.ps_tester_campaign_header WHERE tester_real_product_id = ' . (int)$id_product . ')) ' . 
		($validate == '1' ? ' AND pc.`validate` = 1' : '')));
	}

	public static function getRatings($id_product)
	{
		$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

		$sql = 'SELECT (SUM(pc.`grade`) / COUNT(pc.`grade`)) AS avg,
				MIN(pc.`grade`) AS min,
				MAX(pc.`grade`) AS max
		FROM (SELECT grade, id_product, deleted, validate FROM `'._DB_PREFIX_.'product_comment` 
			WHERE `id_product` = '.(int)$id_product.'		
				UNION SELECT grade, id_product, IF(active=1,0,1),1 FROM `'._DB_PREFIX_.'product_comment_crawl`
			WHERE `id_product` = '.(int)$id_product.'
				) pc
			WHERE pc.`deleted` = 0'.
			($validate == '1' ? ' AND pc.`validate` = 1' : '');


		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);

	}

	public static function getAverageGrade($id_product)
	{
		$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
		SELECT (SUM(pc.`grade`) / COUNT(pc.`grade`)) AS grade
		FROM `'._DB_PREFIX_.'product_comment` pc
		WHERE (pc.`id_product` = '.(int)$id_product.' OR pc.`id_product` IN (SELECT tester_product_id FROM motherhood_presta.ps_tester_campaign_header WHERE tester_real_product_id = '. (int)$id_product . '))
		AND pc.`deleted` = 0'.
		($validate == '1' ? ' AND pc.`validate` = 1' : ''));
	}

	public static function getAveragesByProduct($id_product, $id_lang)
	{
		/* Get all grades */
		$grades = ProductComment::getGradeByProduct((int)$id_product, (int)$id_lang);
        $total = ProductComment::getGradedCommentNumber((int)$id_product);
		if (!count($grades) || (!$total))
			return array();

		/* Addition grades for each criterion */
		$criterionsGradeTotal = array();
		$count_grades = count($grades);
		for ($i = 0; $i < $count_grades; ++$i)
			if (array_key_exists($grades[$i]['id_product_comment_criterion'], $criterionsGradeTotal) === false)
				$criterionsGradeTotal[$grades[$i]['id_product_comment_criterion']] = (int)($grades[$i]['grade']);
			else
				$criterionsGradeTotal[$grades[$i]['id_product_comment_criterion']] += (int)($grades[$i]['grade']);

		/* Finally compute the averages */
		$averages = array();
		foreach ($criterionsGradeTotal as $key => $criterionGradeTotal)
			$averages[(int)($key)] = (int)($total) ? ((int)($criterionGradeTotal) / (int)($total)) : 0;
		return $averages;
	}

	/**
	 * Return number of comments and average grade by products
	 *
	 * @return array Info
	 */
	public static function getCommentNumber($id_product)
	{
		if (!Validate::isUnsignedId($id_product))
			return false;
		$validate = (int)Configuration::get('PRODUCT_COMMENTS_MODERATE');
		$cache_id = 'ProductComment::getCommentNumber_'.(int)$id_product.'-'.$validate;
		if (!Cache::isStored($cache_id))
		{
			$result = (int)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
			SELECT COUNT(`id_product_comment`) AS "nbr"
			FROM `'._DB_PREFIX_.'product_comment` pc
			WHERE `id_product` = '.(int)($id_product).($validate == '1' ? ' AND `validate` = 1' : ''));
			Cache::store($cache_id, $result);
		}
		return Cache::retrieve($cache_id);
	}

	/**
	 * Return number of comments and average grade by products
	 *
	 * @return array Info
	 */
	public static function getGradedCommentNumber($id_product)
	{
		if (!Validate::isUnsignedId($id_product))
			return false;
		$validate = (int)Configuration::get('PRODUCT_COMMENTS_MODERATE');

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
		SELECT COUNT(pc.`id_product`) AS nbr
		FROM (SELECT id_product, validate, grade FROM `'._DB_PREFIX_.'product_comment` 
			UNION ALL SELECT id_product, 1, grade FROM `'._DB_PREFIX_.'product_comment_crawl`)  pc
		WHERE (`id_product` = ' . (int)($id_product) . ' OR `id_product` IN (SELECT tester_product_id FROM motherhood_presta.ps_tester_campaign_header WHERE tester_real_product_id = ' . (int)($id_product) . '))' . 
		
		($validate == '1' ? ' AND `validate` = 1' : '').'
		AND `grade` > 0');
		return (int)($result['nbr']);
	}

	/**
	 * Get comments by Validation
	 *
	 * @return array Comments
	 */
	public static function getByValidate($validate = '0', $deleted = false)
	{
		
		$additionalWhere="";
		if (Tools::getIsset('submitFilterproductcomments')) {
			if (Tools::getIsset('productcommentsFilter_id_product_comment') && Tools::getValue('productcommentsFilter_id_product_comment')) {
				$additionalWhere.= " AND id_product_comment= ".(int)Tools::getValue('productcommentsFilter_id_product_comment');
			}
			if (Tools::getIsset('productcommentsFilter_title') && Tools::getValue('productcommentsFilter_title')) {
				$additionalWhere.= " AND title like '%".Tools::getValue('productcommentsFilter_title')."%' ";
			}
			if (Tools::getIsset('productcommentsFilter_content') && Tools::getValue('productcommentsFilter_content')) {
				$additionalWhere.= " AND content like '%".Tools::getValue('productcommentsFilter_content')."%' ";
			}
			if (Tools::getIsset('productcommentsFilter_customer_name') && Tools::getValue('productcommentsFilter_customer_name')) {
				$additionalWhere.= " AND customer_name like '%".Tools::getValue('productcommentsFilter_customer_name')."%' ";
			}
			if (Tools::getIsset('productcommentsFilter_name') && Tools::getValue('productcommentsFilter_name')) {
				$additionalWhere.= " AND pl.name like '%".Tools::getValue('productcommentsFilter_name')."%' ";
			}
			if (Tools::getIsset('productcommentsFilter_grade') && Tools::getValue('productcommentsFilter_grade')) {
				$additionalWhere.= " AND grade = '".Tools::getValue('productcommentsFilter_grade')."' ";
			}
			if (Tools::getIsset('productcommentsFilter_id_customer') && Tools::getValue('productcommentsFilter_id_customer')) {
				$additionalWhere.= " AND pc.id_customer = '".Tools::getValue('productcommentsFilter_id_customer')."' ";
			}
		}
	
		$sql  = '
			SELECT pc.id_customer, pc.`id_product_comment`, pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \' \',  c.`lastname`), pc.customer_name) customer_name, pc.`title`, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`, highlight AS highlighted, if(img_url="null" or trim(img_url)="","",img_url) as img_url
			FROM `'._DB_PREFIX_.'product_comment` pc
			LEFT JOIN `'._DB_PREFIX_.'customer` c ON (c.`id_customer` = pc.`id_customer`)
			LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = '.(int)Context::getContext()->language->id.Shop::addSqlRestrictionOnLang('pl').')
			WHERE pc.`validate` = '.(int)$validate . ' AND pc.`deleted` = ' . (int)$deleted." $additionalWhere ";

		$sql .= ' ORDER BY pc.`date_add` DESC';
		

		return (Db::getInstance()->executeS($sql));
	}

	/**
	 * Get all comments
	 *
	 * @return array Comments
	 */
	public static function getAll()
	{
		return (Db::getInstance()->executeS('
		SELECT pc.`id_product_comment`, pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \' \',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`, if(img_url="null" or trim(img_url)="","",img_url) as img_url
		FROM `'._DB_PREFIX_.'product_comment` pc
		LEFT JOIN `'._DB_PREFIX_.'customer` c ON (c.`id_customer` = pc.`id_customer`)
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = '.(int)Context::getContext()->language->id.Shop::addSqlRestrictionOnLang('pl').')
		ORDER BY pc.`date_add` DESC'));
	}

	/**
	 * Validate a comment
	 *
	 * @return boolean succeed
	 */
	public function validate($validate = '1')
	{
		if (!Validate::isUnsignedId($this->id))
			return false;

		$success = (Db::getInstance()->execute('
		UPDATE `'._DB_PREFIX_.'product_comment` SET
		`validate` = '.(int)$validate.'
                ,`date_validate` = CURRENT_TIMESTAMP

		WHERE `id_product_comment` = '.(int)$this->id));

		Hook::exec('actionObjectProductCommentValidateAfter', array('object' => $this));
		return $success;
	}

    /**
	 * Highlight a comment
	 *
	 * @return boolean succeed
	 */
	public function highlight()
	{
		if (!Validate::isUnsignedId($this->id))
			return false;

		$success = (Db::getInstance()->execute(
            'UPDATE `'._DB_PREFIX_.'product_comment` 
            SET `highlight` = CASE WHEN highlight=1 THEN 0 ELSE 1 END,`date_validate` = CURRENT_TIMESTAMP
    		WHERE `id_product_comment` = '.(int)$this->id));

		return $success;
	}

	/**
	 * Delete a comment, grade and report data
	 *
	 * @return boolean succeed
	 */
	public function delete()
	{
		(Db::getInstance()->execute('
		UPDATE `'._DB_PREFIX_.'product_comment` SET
		`deleted` = 1,
		`validate` = 1,
		`date_validate` = CURRENT_TIMESTAMP
		WHERE `id_product_comment` = '.(int)$this->id));
		//parent::delete();
		//ProductComment::deleteGrades($this->id);
		//ProductComment::deleteReports($this->id);
		//ProductComment::deleteUsefulness($this->id);
	}

	/**
	 * Delete Grades
	 *
	 * @return boolean succeed
	 */
	public static function deleteGrades($id_product_comment)
	{
		if (!Validate::isUnsignedId($id_product_comment))
			return false;
		return (Db::getInstance()->execute('
		DELETE FROM `'._DB_PREFIX_.'product_comment_grade`
		WHERE `id_product_comment` = '.(int)$id_product_comment));
	}

	/**
	 * Delete Reports
	 *
	 * @return boolean succeed
	 */
	public static function deleteReports($id_product_comment)
	{
		if (!Validate::isUnsignedId($id_product_comment))
			return false;
		return (Db::getInstance()->execute('
		DELETE FROM `'._DB_PREFIX_.'product_comment_report`
		WHERE `id_product_comment` = '.(int)$id_product_comment));
	}

	/**
	 * Delete usefulness
	 *
	 * @return boolean succeed
	 */
	public static function deleteUsefulness($id_product_comment)
	{
		if (!Validate::isUnsignedId($id_product_comment))
			return false;

		return (Db::getInstance()->execute('
		DELETE FROM `'._DB_PREFIX_.'product_comment_usefulness`
		WHERE `id_product_comment` = '.(int)$id_product_comment));
	}

	/**
	 * Report comment
	 *
	 * @return boolean
	 */
	public static function reportComment($id_product_comment, $id_customer)
	{
		return (Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'product_comment_report` (`id_product_comment`, `id_customer`)
			VALUES ('.(int)$id_product_comment.', '.(int)$id_customer.')'));
	}

	/**
	 * Comment already report
	 *
	 * @return boolean
	 */
	public static function isAlreadyReport($id_product_comment, $id_customer)
	{
		return (bool)Db::getInstance()->getValue('
			SELECT COUNT(*)
			FROM `'._DB_PREFIX_.'product_comment_report`
			WHERE `id_customer` = '.(int)$id_customer.'
			AND `id_product_comment` = '.(int)$id_product_comment);
	}

	/**
	 * Set comment usefulness
	 *
	 * @return boolean
	 */
	public static function setCommentUsefulness($id_product_comment, $usefulness, $id_customer)
	{
		return (Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'product_comment_usefulness` (`id_product_comment`, `usefulness`, `id_customer`)
			VALUES ('.(int)$id_product_comment.', '.(int)$usefulness.', '.(int)$id_customer.')'));
	}

	/**
	 * Usefulness already set
	 *
	 * @return boolean
	 */
	public static function isAlreadyUsefulness($id_product_comment, $id_customer)
	{
		return (bool)Db::getInstance()->getValue('
			SELECT COUNT(*)
			FROM `'._DB_PREFIX_.'product_comment_usefulness`
			WHERE `id_customer` = '.(int)$id_customer.'
			AND `id_product_comment` = '.(int)$id_product_comment);
	}

	/**
	 * Get reported comments
	 *
	 * @return array Comments
	 */
	public static function getReportedComments()
	{
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT DISTINCT(pc.`id_product_comment`), pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \' \',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`, pc.`title`, if(img_url="null" or trim(img_url)="","",img_url) as img_url
		FROM `'._DB_PREFIX_.'product_comment_report` pcr
		LEFT JOIN `'._DB_PREFIX_.'product_comment` pc
			ON pcr.id_product_comment = pc.id_product_comment
		LEFT JOIN `'._DB_PREFIX_.'customer` c ON (c.`id_customer` = pc.`id_customer`)
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = '.(int)Context::getContext()->language->id.' AND pl.`id_lang` = '.(int)Context::getContext()->language->id.Shop::addSqlRestrictionOnLang('pl').')
		ORDER BY pc.`date_add` DESC');
	}

};
