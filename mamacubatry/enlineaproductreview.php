<?php
require_once _PS_MODULE_DIR_ . 'enlineamixmod/enlineamixmod.php';
define('UNFRIENDLY_ERROR', false);

class enlineamixmodenlineaproductreviewModuleFrontController extends ModuleFrontController
{
	public $msg = array();
	
	public function __construct()
	{
		parent::__construct();

		$this->context = Context::getContext();
	}
	
    public function init()
    {
        parent::init();
    }

    public function initContent()
    {
        parent::initContent();
		
		$seller_id=0;
		$company="";
		if (Shop::$id_shop_owner){
			$this->id_seller= Shop::$id_shop_owner;
	
			$this->seller 		= new Employee($this->id_seller);
			$this->seller_info 	= new SellerInfo(SellerInfo::getIdBSellerId($this->id_seller), self::$cookie->id_lang);

			$id_shopurl 		= Shop::get_main_url_id($this->seller_info->id_shop);
			$this->shop_url		= new ShopUrl($id_shopurl);
			
			$seller_id=$this->seller_info->id_seller;
			$company=$this->seller_info->company;
			
		}
        
		$this->secure_key = Tools::encrypt('productcomments');
		
		$count=$this->getReviewsBySeller($seller_id);
		$counts = count($count);
		
		$this->pagination($counts);
		$p = $this->p;
		$n = $this->n;
		
		$comments=$this->getReviewsBySeller($seller_id, $p, $n);
		$count=0;
		while($count < sizeof($comments)){
			$productId=$comments[$count]['id_product'];
			$thisProduct=new Product($productId);
			
			$productArr=array();
			$categoryname = new Category($thisProduct->id_category_default, $this->context->language->id);
			
			$productArr['new_product']=$thisProduct->new_product;
			$productArr['best_seller']=$thisProduct->best_seller;
			$productArr['free_deliver']=$thisProduct->free_deliver;
			$productArr['best_price']=$thisProduct->best_price;
			$productArr['custom_tag']=$thisProduct->custom_tag;
			$productArr['category'] = Category::getLinkRewrite($thisProduct->id_category_default, $this->context->language->id);
			$productArr['link']= $this->context->link->getProductLink($thisProduct->id, $thisProduct->link_rewrite[$this->context->language->id],$productArr['category'], $thisProduct->ean13);;
			$productArr['name']=$thisProduct->name[$this->context->language->id];
			$productArr['imgLink']=$this->context->link->getImageLink($thisProduct->link_rewrite[1], $comments[$count]['id_image'], 'cart_default');
			$productArr['id_image']=$comments[$count]['id_image'];
			$productArr['legend']=$thisProduct->legend;
			$productArr['fullProduct']=$thisProduct;
			$productArr['categoryname']=$categoryname->name;
			
			$comments[$count]['product']=$productArr;
			
			$count++;
		}
	
        $this->context->smarty->assign(array(
			'comments' => $comments,
			'link' => $this->context->link,
			'sellername' => $company,
        ));
		
		$commentno = count($comments);
		/*$this->pagination($commentno);*/
			$this->setTemplate('enlineaproductreview.tpl');
    }
    
	
	public static function getReviewsBySeller($id_seller, $p = 1, $n = null, $id_customer = null)
	{
		$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');
		$p = (int)$p;
		if ($p <= 1)
			$p = 1;
		if ($n != null && $n <= 0)
			$n = 20;

		if ($id_seller)
			$whereSeller=" AND po.id_owner = ".$id_seller;
		else
			$whereSeller="";
		
		$cache_id = 'ProductComment::getByProduct_s'.(int)$id_seller.'-'.(int)$p.'-'.(int)$n.'-'.(int)$id_customer.'-'.(bool)$validate;
		if (!Cache::isStored($cache_id))
		{
			$query='
			SELECT pc.`id_product_comment`,
			(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment` AND pcu.`usefulness` = 1) as total_useful,
			(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment`) as total_advice, '.
			((int)$id_customer ? '(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_usefulness` pcuc WHERE pcuc.`id_product_comment` = pc.`id_product_comment` AND pcuc.id_customer = '.(int)$id_customer.') as customer_advice, ' : '').
			((int)$id_customer ? '(SELECT count(*) FROM `'._DB_PREFIX_.'product_comment_report` pcrc WHERE pcrc.`id_product_comment` = pc.`id_product_comment` AND pcrc.id_customer = '.(int)$id_customer.') as customer_report, ' : '').'
			IF(c.id_customer, CONCAT(c.`firstname`, \' \',  LEFT(c.`lastname`, 1)), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pc.title
			,pc.id_product,
			i.id_image
			  FROM `'._DB_PREFIX_.'product_comment` pc
			LEFT JOIN `'._DB_PREFIX_.'customer` c ON c.`id_customer` = pc.`id_customer`
			JOIN `'._DB_PREFIX_.'product` p ON pc.id_product = p.id_product
			JOIN `'._DB_PREFIX_.'product_owner` po ON po.id_product = p.id_product
			LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product`)'.
			Shop::addSqlAssociation('image', 'i', true, 'image_shop.cover=1').'
			WHERE pc.deleted=0 '.($validate == '1' ? ' AND pc.`validate` = 1' : '').'
			AND p.active=1 '.$whereSeller.'
			
UNION
SELECT 1000000+crawl_id,
\'\' AS useful,
\'\' AS total_adv,'.
((int)$id_customer ? "'' AS customer_advice,":'').
((int)$id_customer ? "'' AS customer_report,":'').'
customer_name,
content,
grade,
ps_product_comment_crawl.date_add,
title,
p.id_product,
i.id_image
FROM ps_product_comment_crawl
			JOIN `'._DB_PREFIX_.'product` p ON ps_product_comment_crawl.id_product = p.id_product AND p.active=1
			JOIN `'._DB_PREFIX_.'product_owner` po ON po.id_product = p.id_product
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product`)'.
		Shop::addSqlAssociation('image', 'i', true, 'image_shop.cover=1').' WHERE 1=1 '.$whereSeller.'
			ORDER BY `date_add` DESC
			'.($n ? 'LIMIT '.(int)(($p - 1) * $n).', '.(int)($n) : '');
			
			$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
			//if ($id_product==9394)
			//echo $query;
		
			Cache::store($cache_id, $result);
		}
		
		return Cache::retrieve($cache_id);
	}

    protected function assignMedia() 
	{
		
    }
	
	
public function postProcess()
    {
	}
}
