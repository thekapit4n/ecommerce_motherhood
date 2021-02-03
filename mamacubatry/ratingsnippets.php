<?php
/**
 * StorePrestaModules SPM LLC.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 *
 /*
 * 
 * @author    StorePrestaModules SPM
 * @category seo
 * @package ratingsnippets
 * @copyright Copyright StorePrestaModules SPM
 * @license   StorePrestaModules SPM
 */

class ratingsnippets extends Module
{
	private $_hooks_avaiable = array(1 => 'rightColumn',  //ok
									 2 => 'leftColumn', // ok
									 5 => 'extraRight', // ok
									 6 => 'productfooter', // ok
									 7 => 'footer', //ok
									 8 => 'productActions', // ok
									 9 => 'extraLeft' // ok
									 );
	private $_is16;		
	private $_is15;	
	private $_id_shop;
	private $_table_name_product_reviews;
	
	public function __construct()
	{
		$this->name = 'ratingsnippets';
		$this->tab 	= 'seo';
		$this->version = '1.3.3';
		$this->author = 'SPM';
		$this->module_key  = '2e55d832d3749feabd6c4cbd07d8658a';
		
		require_once(_PS_MODULE_DIR_.$this->name.'/backward_compatibility/backward.php');

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $this->bootstrap = true;
            $this->need_instance = 0;
        }
 	 	
 	 	$this->_table_name_product_reviews = "ratings";
 	 	
		if(version_compare(_PS_VERSION_, '1.5', '>')){
			$this->_id_shop = Context::getContext()->shop->id;
			$this->_is15 = 1;
		}else{
			$this->_is15 = 0;
			$this->_id_shop = 0;
		}
 	 	
		if(version_compare(_PS_VERSION_, '1.6', '>')){
 	 		$this->_is16 = 1;
 	 	} else {
 	 		$this->_is16 = 0;
 	 	}

		$this->l_rating	= $this->l('Give your rating now');
		$this->l_rating	= $this->l('Rating');
		$this->l_cast	= $this->l('cast');
		$this->l_votes	= $this->l('votes');
		$this->l_vote	= $this->l('vote');
		$this->l_out	= $this->l('out of');
		$this->l_thank	= $this->l('Thanks for voting!');	

		parent::__construct(); // The parent construct is required for translations

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Product Rating + Google Snippets, Breadcrumb, Rich Pins');
		$this->description = $this->l('Add Product Rating + Google Snippets, Breadcrumb, Rich Pins');
		$this->confirmUninstall = $this->l('Are you sure you want to remove it ? Be careful, all your configuration and your data will be lost');
		
		$this->initContext();
	}
	
	private function initContext()
	{
        $this->context = Context::getContext();
        if (version_compare(_PS_VERSION_, '1.5', '>')){
            $this->context->currentindex = isset(AdminController::$currentIndex)?AdminController::$currentIndex:'index.php?controller=AdminModules';
        } else {
            $variables14 = variables_ratingsnippets14();
            $this->context->currentindex = $variables14['currentindex'];

        }
	}
	
	public function traduz($termo)
	{
		return $this->l($termo);
	}

	public function install()
	{
		
		// breadcrambs
		Configuration::updateValue($this->name.'breadvis_on', 1);
		// breadcrambs
		
		// pinterest
		Configuration::updateValue($this->name.'pinvis_on', 1);
		Configuration::updateValue($this->name.'pinterestbuttons', 'threeon');
		Configuration::updateValue($this->name.'_extraLeft', 'extraLeft');
		// pinterest
		
		if (!parent::install() 
			OR !$this->registerHook('extraRight') 
			OR !$this->registerHook('header')
			OR !$this->registerHook('leftColumn') 
			OR !$this->registerHook('rightColumn')
			OR !$this->registerHook('extraRight')
			OR !$this->registerHook('productfooter')
			OR !$this->registerHook('footer')
			OR !$this->registerHook('productActions')
			OR !$this->registerHook('extraLeft')
            OR !((version_compare(_PS_VERSION_, '1.6', '>'))? $this->registerHook('displayProductListReviews') : true)
			)
			return false;
		
		Configuration::updateValue('RATING_SHOW_CATEGORY', 0);
		Configuration::updateValue('RATING_NUMBER', 5);
		Configuration::updateValue('RATING_STAR', '0001.gif');
		Configuration::updateValue('RATING_BGCL', 'f1f2f4');
		Configuration::updateValue('RATING_BDCL', 'd0d3d8');
		Configuration::updateValue($this->name.'is_category', 1);
		
		
		Configuration::updateValue($this->name.'svis_on', 1);
		
		Configuration::updateValue($this->name.'rvis_on', 1);
		
		
		if(version_compare(_PS_VERSION_, '1.6', '<')){
		Configuration::updateValue($this->name.'gsnipblock', 1);
	 	Configuration::updateValue($this->name.'gsnipblock_width', 'auto');
	 	Configuration::updateValue($this->name.'gsnipblocklogo', 1);
	 	Configuration::updateValue($this->name.'id_hook_gsnipblock', 1);
		}
		
		if (!Db::getInstance()->Execute('
		CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ratings` (
  			`id` INT(10) unsigned NOT NULL PRIMARY KEY,
  			`total_votes` INT(10) unsigned NOT NULL default 0,
  			`total_value` INT(10) unsigned NOT NULL default 0,
  			`used_ips` LONGTEXT
			) ENGINE='.(defined(_MYSQL_ENGINE_)?_MYSQL_ENGINE_:"MyISAM").' DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci')
		)
	 		return false;
		
		return true;
	}

	public function uninstall()
    {
		Configuration::deleteByName('RATING_SHOW_CATEGORY');
		Configuration::deleteByName('RATING_NUMBER');
		Configuration::deleteByName('RATING_STAR');
		Configuration::deleteByName('RATING_BGCL');
		Configuration::deleteByName('RATING_BDCL');
	 	if (!Db::getInstance()->Execute('DROP TABLE IF EXISTS '._DB_PREFIX_.'ratings'))
	 		return false;
		return parent::uninstall();
    }


    public function hookdisplayProductListReviews($params){

        if(Configuration::get($this->name.'is_category') == 1 && Configuration::get ( $this->name . 'rvis_on' ) == 1) {
            $smarty = $this->context->smarty;
            $id_product = (int)$params['product']['id_product'];


            $data = array('svis_on' => Configuration::get($this->name.'svis_on'),
                          'is16_snippet'=> $this->_is16,
            );


            $data_rating	= $this->rating_bar_ratingsnippets( $id_product, Configuration::get('RATING_NUMBER'),'',$data);
            $data_static	= $this->rating_bar_ratingsnippets( $id_product, Configuration::get('RATING_NUMBER'), 'static',$data);

            $rating = isset($data_rating['rater'])?$data_rating['rater']:'';
            $static = isset($data_static['rater'])?$data_static['rater']:'';

            $rating1 = $data_rating['rating1']==0?0:$data_rating['rating1'];
            $count = $data_rating['count']==0?0:$data_rating['count'];

            $smarty->assign(array(
                'onllog' => Configuration::get('RATING_ONLG'),
                'rating' => $rating,
                'result' => $static
            ));




            $smarty->assign(
                array(
                    'id_product' => $id_product,
                    'avg_rating' => round($rating1),
                    'count_review' => $count,
                )
            );


            return $this->display(dirname(__FILE__) . '/ratingsnippets.php', 'views/templates/hooks/liststars.tpl');
        }
    }
	

	public function hookHeader($params)
	{
		$smarty = $this->context->smarty;
		$cookie = $this->context->cookie;
		
		
		$smarty->assign($this->name.'is15', $this->_is15);
		$smarty->assign($this->name.'is16', $this->_is16);
		
		$smarty->assign($this->name.'rn', Configuration::get('RATING_NUMBER'));
		
		$_product_id = (int)Tools::getValue('id_product');
		$gsnipblock = Configuration::get($this->name.'gsnipblock');
		
		if(version_compare(_PS_VERSION_, '1.5', '>')){
			$this->context->controller->addJS($this->_path.'views/js/behavior.js');
			$this->context->controller->addJS($this->_path.'views/js/rating.js');
    		$this->context->controller->addCSS(($this->_path).'views/css/rating.css', 'all');
    		
    		if($_product_id != 0 && $gsnipblock == 1){
    			$this->context->controller->addCSS(($this->_path).'views/css/snippets-css.css', 'all');
    		}
    		
    	} 
    	
    	if (Configuration::get('PS_SSL_ENABLED') == 1)
			$url_ssl = "https://";
		else
			$url_ssl = "http://";
			
			
		$smarty->assign($this->name.'url_ssl', $url_ssl);
    	
		
		$smarty->assign(array(
			'rating_show_category' => Configuration::get('RATING_SHOW_CATEGORY'),
			'bdcolor' => Configuration::get('RATING_BDCL'),
			'bgcolor' => Configuration::get('RATING_BGCL'), 
			'star' => Configuration::get('RATING_STAR')
		));
		
		
		
		
		$smarty->assign($this->name."gsnipblock",$gsnipblock);  
		$smarty->assign($this->name."_product_id",$_product_id);
		
		
		if($_product_id != 0 ){
		//// new ///
    	
		$product = new Product($_product_id,false,(int)($cookie->id_lang));
		$currency = new Currency((int)($params['cart']->id_currency));
		if (!$currency) {
			try {
				$currency = Currency::getCurrencyInstance($cookie->id_currency);
			} catch (Exception $e) {
			}
		}
		$qty = $product->getQuantity($_product_id);
		$desc = ($product->description_short != "") ? $product->description_short : $product->description;
		
                try{
		$data_picture = $this->_getPicture();
		$picture = $data_picture['picture'];
		}catch(Exception $e){}
		$smarty->assign(array(
			'product_name' => $product->name,
			'product_image' => $picture,
			'product_price_custom' => number_format($product->getPrice(),2,".",","),
			'product_description' => Tools::htmlentitiesUTF8(strip_tags($desc)),
			//'product_category' => $this->_getDefaultCategory($product->id_category_default),
			'currency_custom' => $currency->iso_code,
			'quantity' => $qty,
			'stock_string' => ($qty > 0) ? 'in_stock' : 'out_of_stock'
		));
		
		}
		
		
		// pinterest
    	$smarty->assign($this->name.'is_product_page', $_product_id);
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		// pinterest
		
		
		$is_category = Configuration::get($this->name.'is_category');
    	
		$smarty->assign($this->name.'is_category', $is_category);
		
		$smarty->assign($this->name.'rvis_on', Configuration::get($this->name.'rvis_on'));
		
		if($is_category == 1 && Configuration::get($this->name.'rvis_on') == 1  && version_compare(_PS_VERSION_, '1.6.0.7', '<')){
		
		### product list ####
		
		
		$id_supplier = Tools::getValue('id_supplier');
		$id_manufacturer = Tools::getValue('id_manufacturer');
		$id_category = Tools::getValue('id_category');
		$id_product = Tools::getValue('id_product');
		
		$id_lang = (int)($cookie->id_lang);
		
		
		$step = (int)Configuration::get('PS_PRODUCTS_PER_PAGE');
		$start = (int)Tools::getValue('p');
		
		
		$db = Db::getInstance();
		
		$is_category = 0;
		$is_search = 0;
		
		if($id_supplier){
			$is_category = 1;
			
			if(version_compare(_PS_VERSION_, '1.5', '>')){
			$sql = 'SELECT p.id_product
					FROM ' . _DB_PREFIX_ . 'product p 
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).' 
					AND pl.id_shop = '.$this->_id_shop.') 
					LEFT JOIN '._DB_PREFIX_.'product_shop ps ON(p.id_product = ps.id_product AND ps.id_shop = '.$this->_id_shop.') 
					WHERE ps.active = 1
					AND p.id_supplier = '.$id_supplier.' LIMIT 100
					';
			}else {
				$sql = 'SELECT p.id_product FROM '._DB_PREFIX_.'product p
	            LEFT JOIN '._DB_PREFIX_.'product_lang pl 
	            ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).')
	            WHERE p.active = 1 AND p.id_supplier = '.$id_supplier.'  LIMIT 100';
			}
		
		}elseif($id_manufacturer){
				$is_category = 1;
		
			if(version_compare(_PS_VERSION_, '1.5', '>')){
			$sql = 'SELECT p.id_product
					FROM ' . _DB_PREFIX_ . 'product p 
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).' 
					AND pl.id_shop = '.$this->_id_shop.') 
					LEFT JOIN '._DB_PREFIX_.'product_shop ps ON(p.id_product = ps.id_product AND ps.id_shop = '.$this->_id_shop.') 
					WHERE ps.active = 1
					AND p.id_manufacturer = '.$id_manufacturer.'  LIMIT 100
					';
			}else {
				$sql = 'SELECT p.id_product FROM '._DB_PREFIX_.'product p
	            LEFT JOIN '._DB_PREFIX_.'product_lang pl 
	            ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).')
	            WHERE p.active = 1 AND p.id_manufacturer = '.$id_manufacturer.'  LIMIT 100';
			}
			
		}elseif($id_category){
			
				$is_category = 1;
		
			
		if(version_compare(_PS_VERSION_, '1.5', '>')){
			$sql = 'SELECT p.id_product
					FROM 
					' . _DB_PREFIX_ . 'product p
					JOIN ' . _DB_PREFIX_ . 'category_product cp
					ON cp.id_category = '.$id_category.' 
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).' 
					AND pl.id_shop = '.$this->_id_shop.') 
					LEFT JOIN '._DB_PREFIX_.'product_shop ps ON(p.id_product = ps.id_product AND ps.id_shop = '.$this->_id_shop.') 
					WHERE ps.active = 1  LIMIT 100
					';
			}else {
				$sql = 'SELECT p.id_product FROM '._DB_PREFIX_.'product p
				JOIN ' . _DB_PREFIX_ . 'category_product cp
				ON cp.id_category = '.$id_category.' 
	            LEFT JOIN '._DB_PREFIX_.'product_lang pl 
	            ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).')
	            WHERE p.active = 1  LIMIT 100';
			}

		}elseif((strrpos($_SERVER['SCRIPT_NAME'], 'search.php') || strrpos($_SERVER['SCRIPT_NAME'], 'prices-drop.php') || (Tools::getValue('controller') && (Tools::getValue('controller') == 'search' || Tools::getValue('controller') == 'prices-drop')))){
				$is_category = 1;
				$is_search = 1;
		
		if(version_compare(_PS_VERSION_, '1.5', '>')){
			$sql = 'SELECT p.id_product
					FROM 
					' . _DB_PREFIX_ . 'product p
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).' 
					AND pl.id_shop = '.$this->_id_shop.') 
					LEFT JOIN '._DB_PREFIX_.'product_shop ps ON(p.id_product = ps.id_product AND ps.id_shop = '.$this->_id_shop.') 
					WHERE ps.active = 1  LIMIT 100
					';
			}else {
				$sql = 'SELECT p.id_product FROM '._DB_PREFIX_.'product p
				LEFT JOIN '._DB_PREFIX_.'product_lang pl 
	            ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).')
	            WHERE p.active = 1  LIMIT 100';
			}
		}
		
		
	   	
		$data_products = array();
		
		if(isset($sql)){

            if(version_compare(_PS_VERSION_, '1.4', '>') && ($is_category==1) && ($is_search==0)){

                $PS_PRODUCTS_ORDER_BY = Configuration::get('PS_PRODUCTS_ORDER_BY');

                if($PS_PRODUCTS_ORDER_BY){

                    switch($PS_PRODUCTS_ORDER_BY){
                        case 0:
                            $PS_PRODUCTS_ORDER_BY = 'name';
                            break;
                        case 1:
                            $PS_PRODUCTS_ORDER_BY = 'price';
                            break;
                        case 2:
                            $PS_PRODUCTS_ORDER_BY = 'date_add';
                            break;
                        case 3:
                            $PS_PRODUCTS_ORDER_BY = 'date_upd';
                            break;
                        case 4:
                            $PS_PRODUCTS_ORDER_BY = 'position';
                            break;
                        case 5:
                            $PS_PRODUCTS_ORDER_BY = 'manufacturer_name';
                            break;
                        case 6:
                            $PS_PRODUCTS_ORDER_BY = 'quantity';
                            break;
                        case 7:
                            $PS_PRODUCTS_ORDER_BY = 'reference';
                            break;
                        default:
                            $PS_PRODUCTS_ORDER_BY = 'name';
                            break;
                    }
                } else {
                    $PS_PRODUCTS_ORDER_BY = Tools::getValue('orderby');
                }


                $PS_PRODUCTS_ORDER_WAY = Configuration::get('PS_PRODUCTS_ORDER_WAY');

                if($PS_PRODUCTS_ORDER_WAY)
                    $PS_PRODUCTS_ORDER_WAY = 'desc';
                else
                    $PS_PRODUCTS_ORDER_WAY = 'asc';


                $cookie = $this->context->cookie;
                $id_lang = (int)$cookie->id_lang;
                //Context::getContext()->language->id

                $_category = new Category($id_category, $id_lang);
                $items =  $_category->getProducts($id_lang, (int)$start, (int)$step,$PS_PRODUCTS_ORDER_BY,$PS_PRODUCTS_ORDER_WAY);
            } else {
					$items = $db->ExecuteS($sql);
			}
				
				$items = isset($items)?$items:array();
				if(sizeof($items)>0){
					foreach(@$items as $item){
						$id_product = $item['id_product'];
						
						$data_product = $this->getProduct(array('id'=>$id_product));
						foreach($data_product['product'] as $_item_product){
	    					$link_product = isset($_item_product['link'])?$_item_product['link']:'';
	    				}
	
	    				$count_review = $this->getCountReviews(array('id_product' => $id_product));
						$avg_rating = $this->getAvgReview(array('id_product' => $id_product));
				    	
						
						$data_products[$id_product] = array('id_product'=>$id_product, 
															'link'=>$link_product,
															'avg_rating'=>$avg_rating,
															'count_review'=>$count_review
															);
					}
				}
				
		}
		$smarty->assign($this->name.'_data_products', $data_products);
		
		#### product list ####
		
    	}
		
		return $this->display(__FILE__, 'views/templates/hooks/ratingsnippets-header.tpl');
	}
	
public function getAvgReview($data){
		$id_product = $data['id_product'];
		
		if (!Validate::isUnsignedId($id_product))
			die(Tools::displayError());
		
		
		$result = Db::getInstance()->getRow('
		SELECT total_value as "avg_rating", total_votes AS "count"
		FROM `'._DB_PREFIX_.$this->_table_name_product_reviews.'` pc
		WHERE `id` = '.(int)($id_product)
		);
		
		$avg_rating = 0;
		$count_rating = isset($result['count'])?$result['count']:0;
		if($count_rating){
			$avg_rating = number_format($result['avg_rating']/$count_rating,2);
		}
		
		return $avg_rating;
	}
	
	public function getCountReviews($data){
		$id_product = $data['id_product'];
		
		if (!Validate::isUnsignedId($id_product))
			die(Tools::displayError());
		
			
		if (($result = Db::getInstance()->getRow('
		SELECT total_votes AS "count"
		FROM `'._DB_PREFIX_.$this->_table_name_product_reviews.'` pc
		WHERE `id` = '.(int)($id_product).'
		'
		)) === false)
			return 0;
		return (int)($result['count']);
	}

	private function getProduct($data){
		
		$id = (int) $data['id'];
		$cookie = $this->context->cookie;
		
		$id_lang = (int)($cookie->id_lang);
		$result = Db::getInstance()->ExecuteS('
	            SELECT p.id_product, pl.`link_rewrite`, pl.`name`
	            FROM `'._DB_PREFIX_.'product` p
	            LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.(int)($id_lang).')
	            WHERE p.`active` = 1 AND p.`id_product` = '.$id.' limit 1');
		
	    $data_all = array();
		foreach($result as $products){
			
			$id_product= isset($products['id_product'])?$products['id_product']:'';
			$link_rewrite= isset($products['link_rewrite'])?$products['link_rewrite']:'';
			$_category= isset($products['category'])?$products['category']:'';
			$_category = htmlspecialchars($_category); 
			//$_ean13= isset($products['ean13'])?$products['ean13']:'';
			
			$link = new Link();
			$_url = $link->getProductLink($id_product, 
										  $link_rewrite, 
										  $_category 
										  //$_ean13
										  );
		
			
			$_name = isset($products['name'])?Tools::stripslashes($products['name']):'';
			$_name = addslashes($_name);
			$_url = isset($_url)?$_url:'';
			
			$data_all[] = array('link' => $_url, 'name' => $_name);
		
		}
		
		
		
		return array('product' => $data_all);
	}

	
	public function rating_bar_ratingsnippets($id, $units='', $static='', $data = null)
	{
		$rating_unitwidth = 22;
		$id = (int)$id;
		$units = (int)$units;
	
		
		//set some variables
		$ip = $_SERVER['REMOTE_ADDR'];
		if (!$units)
			$units = 10;
		if (!$static)
			$static = FALSE;
	
		// get votes, values, ips for the current rating bar
		$sql = "SELECT `total_votes`, `total_value`, `used_ips` FROM `"._DB_PREFIX_."ratings` WHERE `id` = '$id'";
		$data_ratings = Db::getInstance()->GetRow($sql);
		
		// insert the id in the DB if it doesn't exist already
		if (!$data_ratings)
		{
			$sql = "INSERT INTO `"._DB_PREFIX_."ratings` (`id`,`total_votes`, `total_value`, `used_ips`) VALUES ('$id', '0', '0', '')";
			Db::getInstance()->Execute($sql);
		}
	
		$numbers = $data_ratings;
	
		if ($numbers['total_votes'] < 1)
			$count = 0;
		else
			$count = $numbers['total_votes']; // how many votes total
            
		$current_rating = $numbers['total_value']; // total number of rating added together and stored
		$tense = ($count == 1) ? $this->traduz('vote') : $this->traduz('votes') ; //plural form votes/vote
	
		// determine whether the user has voted, so we know how to draw the ul/li
		$sql = "SELECT `used_ips` FROM `"._DB_PREFIX_."ratings` WHERE `used_ips` LIKE '%".$ip."%' AND `id` = '".$id."'";
		$voted  = Db::getInstance()->GetRow($sql);
		
		// now draw the rating bar
		$rating_width = @number_format($current_rating / $count, 2) * $rating_unitwidth;
		$rating1 = @number_format($current_rating / $count, 1);
		$rating2 = @number_format($current_rating / $count, 2);
	
	
		if ($static == 'static')
		{
			$static_rater = array();
			$static_rater[] .= "\n".'<div class="ratingblock kapitan-rating-product-detail">';
			$static_rater[] .= '<div id="unit_long'.$id.'">';
			$static_rater[] .= '<ul id="unit_ul'.$id.'" class="unit-rating" style="width:'.$rating_unitwidth*$units.'px;">';
			$static_rater[] .= '<li class="current-rating" style="width:'.$rating_width.'px;">Currently '.$rating2.'/'.$units.'</li>';
			$static_rater[] .= '</ul>';
			$static_rater[] .= '<p>'.$this->traduz('Rating').': <strong> '.$rating1.'</strong>/'.$units.' ('.$count.' '.$tense.')</p>';
			$static_rater[] .= '</div>';
			$static_rater[] .= '</div>'."\n\n";
	
			return join("\n", $static_rater);
		}
		else
		{
			$svis_on = isset($data['svis_on'])?$data['svis_on']:0;
			$is16_snippet = isset($data['is16_snippet'])?$data['is16_snippet']:0;
			 
			$is_snippet_for16 = 0;
			if($svis_on == 1 && $is16_snippet == 1 && $count!=0){
				$is_snippet_for16 = 1;
			}
	
			$rater ='';
			 
			if($is_snippet_for16) {
				$rater .= '<span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">';
                $rater .= '<span >';
            }
			 
			$rater .= '<div class="ratingblock kapitan-rating-product-detail2" style="padding-top:1px">';
	
			$rater .= '<div id="unit_long'.$id.'">';
			$ncount = 0; // resets the count
			$rater .= '<table>';
			$rater .= '<tr>';
			$rater .= '<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; padding-right: 3px; width: 100px">' . $this->traduz('Product Review') . "</td>";
			$rater .= '<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px;font-weight:700;">';
			// $rater .= '<ul id="unit_ul'.$id.'" class="unit-rating" style="width: '.$rating_unitwidth * $units.'px;">';
			// $rater .= '<li class="current-rating" style="width: '.$rating_width.'px;">Currently '.$rating2.'/'.$units.'</li>';
						// /* for ($ncount = 1; $ncount <= $units; $ncount++)
						// {
						// loop from 1 to the number of units
							// if(!$voted)
							// {
							# if the user hasn't yet voted, draw the voting stars
								// $uri_ssl = _PS_BASE_URL_SSL_;
								// $rater.='<li><a href="'.$uri_ssl.'/modules/'.$this->name.'/rating/db.php?j='.$ncount.'&amp;q='.$id.'&amp;t='.$ip.'&amp;c='.$units.'" title="'.$this->traduz('Give your rating now').': '.$ncount.' '.$this->traduz('out of').' '.$units.'" class="r'.$ncount.'-unit rater" rel="nofollow">'.$ncount.'</a></li>';
							// }
						// } 
			// $rater .= '</ul>';
			$rater .= $rating1 . "</font>/" . $units . " (" . $count . " " . $tense . ")</td>";
			$rater .= '</tr>';
			$rater .= '</table>';
			
			
			// $rater .= '<p';
			// if ($voted){
				// $rater .= ' class="voted"';
			// }
				// $rater .= '>'.$this->traduz('Rating').': <strong>'.(($is_snippet_for16 == 1)?'<span>':'').' '.$rating1.''.(($is_snippet_for16 == 1)?'</span>':'').'</strong>/'.(($is_snippet_for16 == 1)?'<span>':'').''.$units.''.(($is_snippet_for16 == 1)?'</span>':'').' ('.(($is_snippet_for16 == 1)?'<span>':'').''.$count.''.(($is_snippet_for16 == 1)?'</span>':'').' '.$tense.')';
						// $rater .= '</p>';
			
			$rater .= '</div>';
			$rater .= '</div>';
	
			if($is_snippet_for16)
				// $rater .= '</span>';
	
			return array('rater'=>$rater, 'rating1'=>$rating1,'rating2'=>$rating2,'count'=>$count);
		}
	}
	
	public function hookextraRight($params)
	{
		$smarty = $this->context->smarty;
		
		$data = array('svis_on' => Configuration::get($this->name.'svis_on'),
					  'is16_snippet'=> $this->_is16,	
					 );
	
		$data_rating	= $this->rating_bar_ratingsnippets( Tools::getValue('id_product'), Configuration::get('RATING_NUMBER'),'',$data);
		$data_static	= $this->rating_bar_ratingsnippets( Tools::getValue('id_product'), Configuration::get('RATING_NUMBER'), 'static',$data);

		$rating = isset($data_rating['rater'])?$data_rating['rater']:'';
		$static = isset($data_static['rater'])?$data_static['rater']:'';
		
		$rating1 = $data_rating['rating1']==0?0:$data_rating['rating1'];
		$count = $data_rating['count']==0?0:$data_rating['count'];

        $smarty->assign(array(
			'onllog' => Configuration::get('RATING_ONLG'),
			'rating' => $rating,
			'result' => $static
		));

		
		$smarty->assign($this->name.'count', $count);
		$smarty->assign($this->name.'total', round($rating1));
		
		$smarty->assign($this->name.'rvis_on', Configuration::get($this->name.'rvis_on'));
		
		
		$_product_id = (int)Tools::getValue('id_product');
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 5) &&
		  $_product_id
		  && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
				$smarty->assign($this->name.'extrarightsnippet', 
								$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
								);
		  } else {
		  	$smarty->assign($this->name.'extrarightsnippet','');
		  }
		  
		 // pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_extraRight', Configuration::get($this->name.'_extraRight'));
		// pinterest 
    	
		return $this->display(__FILE__, 'views/templates/hooks/ratingsnippets.tpl');
	}
	
	
	public function hookLeftColumn($params)
	{
		$smarty = $this->context->smarty;
		
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 2) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		
		 	$smarty->assign($this->name.'leftsnippet',
		 				 $this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
		 				 );
		
		} else {
			$smarty->assign($this->name.'leftsnippet','');
		}
				
		
		// pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_leftColumn', Configuration::get($this->name.'_leftColumn'));
		// pinterest
		
		return $this->display(__FILE__, 'views/templates/hooks/leftColumn.tpl');
	}
	
	public function hookRightColumn($params)
	{
		$smarty = $this->context->smarty;
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 1) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		
			$smarty->assign($this->name.'rightsnippet', 
							$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
							);
		  
		  } else {
			  	$smarty->assign($this->name.'rightsnippet','');
			  }
		  
		// pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_rightColumn', Configuration::get($this->name.'_rightColumn'));
		// pinterest
		
		return $this->display(__FILE__, 'views/templates/hooks/rightColumn.tpl');
	}
	
	
public function hookextraLeft($params)
	{
		$smarty = $this->context->smarty;
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 9) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		
		$smarty->assign($this->name.'extraleftsnippet', 
						$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
						);
		} else {
			  	$smarty->assign($this->name.'extraleftsnippet','');
		}		
		
		// pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_extraLeft', Configuration::get($this->name.'_extraLeft'));
		// pinterest
		
		return $this->display(__FILE__, 'views/templates/hooks/extraLeft.tpl');		
	}
	
	public function hookproductActions($params)
	{
		$smarty = $this->context->smarty;
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 8) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		
		$smarty->assign($this->name.'productactions',
						$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
						);
		} else {
		  	$smarty->assign($this->name.'productactions','');
		}		
		
		// pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_productActions', Configuration::get($this->name.'_productActions'));
		// pinterest 
		
		return $this->display(__FILE__, 'views/templates/hooks/productActions.tpl');		
	}
	
	public function hookproductfooter($params)
	{
		$smarty = $this->context->smarty;
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 6) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		
		$smarty->assign($this->name.'productfooter', 
						$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
						);
		} else {
			  	$smarty->assign($this->name.'productfooter','');
		}		
		
		  
		// pinterest
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		$smarty->assign($this->name.'pinterestbuttons', Configuration::get($this->name.'pinterestbuttons'));
		$smarty->assign($this->name.'_productFooter', Configuration::get($this->name.'_productFooter'));
		// pinterest
		
		return $this->display(__FILE__, 'views/templates/hooks/productFooter.tpl');	
	}
	
	
	
	public function hookFooter($params){
		$smarty = $this->context->smarty;
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if(Configuration::get($this->name.'gsnipblock') &&
		  (Configuration::get($this->name.'id_hook_gsnipblock') == 7) &&
		  $_product_id && (Configuration::get($this->name.'rvis_on') == 1)
		  ){
		$smarty->assign($this->name.'footersnippet', 
						$this->snippetBlockSettings(array('product_id'=>$_product_id,'params'=>$params))
						);
		
		} else {
			$smarty->assign($this->name.'footersnippet','');
		}	
		
		$smarty->assign($this->name.'is_product_page', $_product_id);
		$smarty->assign($this->name.'pinvis_on', Configuration::get($this->name.'pinvis_on'));
		
	if(Configuration::get($this->name.'breadvis_on')==1){
			
		if(version_compare(_PS_VERSION_, '1.4', '<'))
			$getTemplateVars_functions = 'get_template_vars';
		else
			$getTemplateVars_functions = 'getTemplateVars';
			
		if(!is_callable($smarty, $getTemplateVars_functions)){
			//$getTemplateVars = 'get_template_vars';
			$getTemplateVars = $getTemplateVars_functions;
		}
		if($smarty->{$getTemplateVars}('path')) {
			$path = $smarty->${'getTemplateVars'}('path');
			$output = $path;
			
			$path = preg_split('/<span class=\"navigation-pipe\">><\/span>/', $path);
			
			foreach($path as $key => $value) {
				$path[$key] = preg_replace('/^(<a href=\")([^>]*)([^<]*)(<\/a>)/', '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">\1\2 itemprop="url"><span itemprop="title"\3</span>\4</span>', $value);
			}

			$returnTo = $this->l('return to');
			$home = $this->l('Home');
			$home = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'._PS_BASE_URL_.__PS_BASE_URI__.'" title="'.$returnTo.' '.$home.'" itemprop="url"><span itemprop="title">'.$home.'</span></a></span>';
			
			$output = '<div style="display:none">'.$home.implode('', $path).'</div>';
			
			$smarty->assign($this->name.'breadcrambcustom',$output);
		} else {
				$smarty->assign($this->name.'breadcrambcustom','');
		}
		
		} else {
			$smarty->assign($this->name.'breadcrambcustom','');
		}
		
		return $this->display(__FILE__, 'views/templates/hooks/footer.tpl');
	}
	
public function snippetBlockSettings($data){
		$smarty = $this->context->smarty;
		$cookie = $this->context->cookie;
		
		$_product_id = $data['product_id'];
		$params = $data['params'];
		
		$id_lang = (int)($params['cookie']->id_lang);
    	
    	$_obj_product = new Product($_product_id);
    	
    	
    	$data_product = $this->_productData(array('product'=>$_obj_product));	
		$picture = $data_product['image_link'];
    	
    	$productname = addslashes($_obj_product->name[$id_lang]);
		
		
	     
		$smarty->assign($this->name.'picture', isset($picture)?$picture:'');
    	$smarty->assign($this->name.'productname', $productname);
    	
		
    	//// new ///
    	
		$product = new Product($_product_id,false,(int)($cookie->id_lang));
		$currency = new Currency((int)($params['cart']->id_currency));
		if (!$currency) {
			try {
				$currency = Currency::getCurrencyInstance($cookie->id_currency);
			} catch (Exception $e) {
			}
		}
		$qty = $product->getQuantity($_product_id);
		$desc = ($product->description_short != "") ? $product->description_short : $product->description;
		
		$smarty->assign(array(
			'product_brand' => Manufacturer::getNameById($product->id_manufacturer),
			'product_name' => $product->name,
			'product_image' => $picture,
			'product_price_custom' => number_format($product->getPrice(),2,".",","),
			'product_description' => Tools::htmlentitiesUTF8(strip_tags($desc)),
			'product_category' => $this->_getDefaultCategory($product->id_category_default),
			'currency_custom' => $currency->iso_code,
			'quantity' => $qty,
			'stock_string' => ($qty > 0) ? 'in_stock' : 'out_of_stock'
		));
		
		if (isset($product->upc) && !Tools::isEmpty($product->upc)) {
			$smarty->assign(array('show_identifier' => true,'identifier_type' => 'upc', 'identifier_value' => $product->upc));
		}
		elseif (!Tools::isEmpty($product->ean13)) {
			$smarty->assign(array('show_identifier' => true,'identifier_type' => 'sku', 'identifier_value' => $product->ean13));
		} else {
			$smarty->assign(array('show_identifier' => false));
		}
		
		if (Configuration::get('GPROFILE_ID') != "") {
			$smarty->assign("gprofile_id",Configuration::get('GPROFILE_ID'));
		} else {
			$smarty->assign("gprofile_id",false);
		}
		/// end new ///
		
		
		$smarty->assign($this->name.'gsnipblock', Configuration::get($this->name.'gsnipblock'));
    	$smarty->assign($this->name.'id_hook_gsnipblock', Configuration::get($this->name.'id_hook_gsnipblock'));
    	$smarty->assign($this->name.'gsnipblock_width', Configuration::get($this->name.'gsnipblock_width'));
    	$smarty->assign($this->name.'gsnipblocklogo', Configuration::get($this->name.'gsnipblocklogo'));
    	
    	
    	$data_rating	= $this->rating_bar_ratingsnippets( Tools::getValue('id_product'), Configuration::get('RATING_NUMBER'));
		
		$rating1 = $data_rating['rating1']==0?0:$data_rating['rating1'];
		$count = $data_rating['count']==0?0:$data_rating['count'];
		
		$smarty->assign($this->name.'count', $count);
		$smarty->assign($this->name.'total', round($rating1));
		
		
    	if($product->getPrice()==0 || Configuration::get($this->name.'svis_on') == 0)
			return '';
		else
			return $this->display(__FILE__, 'views/templates/hooks/snippet.tpl');		
	}
	
	private function _getProducts()
	{
		$cookie = $this->context->cookie;
		
		$language = (int)($cookie->id_lang);
		$products = Product::getProducts($language, 0, 99999999, 'id_product','asc',false,true);
		return $products;
	}
	
	private function _getDefaultCategory($id_category)
	{
		$cookie = $this->context->cookie;
		
		$_category = new Category($id_category);
		return $_category->getName((int)($cookie->id_lang));
	}

    protected function addBackOfficeMedia()
    {
        $this->context->controller->addCSS($this->_path.'views/css/font-custom.min.css');

        // JS files
        $this->context->controller->addJs($this->_path.'views/js/menu16.js');


    }
	
	public function getContent()
    {
        $this->_html = '';

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $this->addBackOfficeMedia();
        }


        if (Tools::isSubmit('submit'))
        {
        	Configuration::updateValue($this->name.'gsnipblock', Tools::getValue('gsnipblock'));
			Configuration::updateValue($this->name.'id_hook_gsnipblock', Tools::getValue('id_hook_gsnipblock'));
			Configuration::updateValue($this->name.'gsnipblock_width', Tools::getValue('gsnipblock_width'));
			Configuration::updateValue($this->name.'gsnipblocklogo', Tools::getValue('gsnipblocklogo'));
			
			Configuration::updateValue($this->name.'svis_on', Tools::getValue('svis_on'));
			Configuration::updateValue($this->name.'is_category', Tools::getValue('is_category'));
        	
			Configuration::updateValue($this->name.'rvis_on', Tools::getValue('rvis_on'));
				
			
			
			// rich pins
			Configuration::updateValue($this->name.'pinvis_on', Tools::getValue('pinvis_on'));
	        Configuration::updateValue($this->name.'pinterestbuttons', Tools::getValue('pinterestbuttons'));
	        	
	        Configuration::updateValue($this->name.'_leftColumn', Tools::getValue('leftColumn'));
	        Configuration::updateValue($this->name.'_extraLeft', Tools::getValue('extraLeft'));
	        Configuration::updateValue($this->name.'_productFooter', Tools::getValue('productFooter'));
	        Configuration::updateValue($this->name.'_rightColumn', Tools::getValue('rightColumn'));
	        Configuration::updateValue($this->name.'_extraRight', Tools::getValue('extraRight'));
	        Configuration::updateValue($this->name.'_productActions', Tools::getValue('productActions'));
			// rich pins
			
	        // breadcramb
	        Configuration::updateValue($this->name.'breadvis_on', Tools::getValue('breadvis_on'));
	        // breadcramb

            $this->_html .= '<script>init_tabs(1);</script>';
        }
		
        

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $this->_displayForm16();
        } else {
            $this->_displayForm13_14_15();
        }
        
        return $this->_html;
    }

    private function _displayForm16(){

        $this->_html .= '<div class="row">
    	<div class="col-lg-12">
    	<div class="row">';

        $this->_html .= '<div class="col-lg-12 col-md-3">

						<div class="list-group">';
        $this->_html .= '<ul class="nav nav-pills" id="navtabs16">

							    <li class="active"><a href="#welcome" data-toggle="tab" class="list-group-item"><i class="fa fa-home fa-lg"></i>&nbsp;'.$this->l('Welcome').'</a></li>
							    <li><a href="#modulesettings" data-toggle="tab" class="list-group-item"><i class="fa fa-cogs fa-lg"></i>&nbsp;'.$this->l('Main Settings').'</a></li>
							    <li><a href="#info" data-toggle="tab" class="list-group-item"><i class="fa fa-question-circle fa-lg"></i>&nbsp;'.$this->l('Help / Documentation').'</a></li>
							    <li><a href="http://addons.prestashop.com/en/2_community-developer?contributor=61669" target="_blank"  class="list-group-item"><img src="../modules/'.$this->name.'/views/img/spm-logo.png"  />&nbsp;&nbsp;'.$this->l('Other SPM Modules').'</a></li>


							</ul>';
        $this->_html .= '</div>
    				</div>';


        $this->_html .= '<div class="tab-content col-lg-12 col-md-9">';
        $this->_html .= '<div class="tab-pane active" id="welcome">'.$this->_welcome().'</div>';
        $this->_html .= '<div class="tab-pane" id="modulesettings">'.$this->_modulesettings16().'</div>';
        $this->_html .= '<div class="tab-pane" id="info">'.$this->_help_documentation().'</div>';
        $this->_html .= '</div>';



        $this->_html .= '</div></div></div>';

    }


    private function _modulesettings16(){



         $fields_form0 = array(
             'form'=> array(
                 'legend' => array(
                     'title' => $this->l('Enable or Disable Product Ratings'),
                     'icon' => 'fa fa-star fa-lg'
                 ),
                 'input' => array(

                     array(
                         'type' => 'switch',
                         'label' => $this->l('Enable or Disable Product Ratings'),
                         'name' => 'rvis_on',
                         'desc' => $this->l('Enable or Disable Product Ratings'),
                         'values' => array(
                             array(
                                 'id' => 'active_on',
                                 'value' => 1,
                                 'label' => $this->l('Yes')
                             ),
                             array(
                                 'id' => 'active_off',
                                 'value' => 0,
                                 'label' => $this->l('No')
                             )
                         ),
                     ),

                 ),



             ),


         );

        $fields_form = array(
            'form'=> array(
                'legend' => array(
                    'title' => $this->l('Product star ratings in category and search pages'),
                    'icon' => 'fa fa-bars fa-lg'
                ),
                'input' => array(

                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable or Disable stars on the category and search pages'),
                        'name' => 'is_category',
                        'desc' => $this->l('Product star ratings in category pages.'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),

                ),



            ),


        );


        $fields_form1 = array(
            'form'=> array(
                'legend' => array(
                    'title' => $this->l('Google rich snippets settings'),
                    'icon' => 'fa fa-snippets fa-lg'
                ),
                'input' => array(



                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable or Disable Google Rich Snippets'),
                        'name' => 'svis_on',
                        //'desc' => $this->l('Enable or Disable Google Rich Snippets'),
                        'hint' => $this->l('Enable or Disable Google Rich Snippets'),
                        'desc' => $this->l('Enable or Disable Google Rich Snippets').
                            '<br/><br/><b>'.$this->l('Snippets based on the').'</b>:<br/><br/>'.
                            '<b>'.$this->l('Aggregate Ratings').'</b>:&nbsp;
                            '.$this->l('More info').':&nbsp;<a href="https://developers.google.com/structured-data/rich-snippets/reviews#aggregate_ratings" target="_blank">https://developers.google.com/structured-data/rich-snippets/reviews#aggregate_ratings</a>',



                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),



                ),


            ),


        );


        $fields_form2 = array(
            'form'=> array(
                'legend' => array(
                    'title' => $this->l('Google Breadcrumbs settings'),
                    'icon' => 'fa fa-snippets fa-lg'
                ),
                'input' => array(



                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable or Disable Google Breadcrumbs'),
                        'name' => 'breadvis_on',
                        'hint' => $this->l('Enable or Disable Google Breadcrumbs'),
                        'desc' => $this->l('Enable or Disable Google Breadcrumbs').
                            '<br/><br/>'.
                            '<b>'.$this->l('Breadcrumbs').'</b>:'.
                            '&nbsp;'.$this->l('More info').':&nbsp;<a href="https://developers.google.com/structured-data/breadcrumbs" target="_blank">https://developers.google.com/structured-data/breadcrumbs</a>',



                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),



                ),


            ),


        );


        $fields_form3 = array(
            'form'=> array(
                'legend' => array(
                    'title' => $this->l('Rich Pins Settings'),
                    'icon' => 'fa fa-richpins fa-lg'
                ),
                'input' => array(



                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable or Disable Rich Pins'),
                        'name' => 'pinvis_on',
                        'desc' => $this->l('Enable or Disable Rich Pins'),
                        'hint' => $this->l('Enable or Disable Rich Pins'),

                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),

                    array(
                        'type' => 'checkbox_custom',
                        'label' => $this->l('Position Pinterest Button'),
                        'name' => 'pos_pin_button',
                        'hint' => $this->l('Position Pinterest Button'),
                        'values' => array(
                            'query' => array(
                                array(
                                    'id' => 'leftColumn',
                                    'name' => $this->l('Left column, only product page'),
                                    'val' => 'leftColumn'
                                ),
                                array(
                                    'id' => 'rightColumn',
                                    'name' => $this->l('Right column, only product page'),
                                    'val' => 'rightColumn'
                                ),
                                array(
                                    'id' => 'extraLeft',
                                    'name' => $this->l('displayRightColumnProduct (Extra Left)'),
                                    'val' => 'extraLeft'
                                ),
                                array(
                                    'id' => 'extraRight',
                                    'name' => $this->l('displayLeftColumnProduct (Extra right)'),
                                    'val' => 'extraRight'
                                ),
                                array(
                                    'id' => 'productFooter',
                                    'name' => $this->l('displayFooterProduct (Product footer)'),
                                    'val' => 'productFooter'
                                ),
                                array(
                                    'id' => 'productActions',
                                    'name' => $this->l('displayProductButtons (Product actions)'),
                                    'val' => 'productActions'
                                ),


                            ),
                            'id' => 'id',
                            'name' => 'name'
                        ),

                    ),

                    array(
                        'type' => 'block_radio_buttons_custom',
                        'label' => $this->l('Pinterest Button style'),

                        'name' => 'block_radio_buttons_custom',
                        'values'=> array(
                            'style' => Configuration::get($this->name.'pinterestbuttons')
                        ),

                    ),


                ),



            ),


        );


        $fields_form4 = array(
            'form' => array(


                'submit' => array(
                    'title' => $this->l('Update Settings'),
                )
            ),
        );




        $helper = new HelperForm();



        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getConfigFieldsValuesStarslistandsearchSettings(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        $_html = '';
        $_html .= "<script type=\"text/javascript\">
    	$('document').ready( function() {

    		$( \"label[for='pinvis_on_on']\" ).click(function() {
                $( \".block_radio_buttons_custom\" ).parent().show(200);
                $( \".pos_pin_button\" ).parent().show(200);
                $( \"#block-pin-help\" ).show(200);

			});

            $( \"label[for='pinvis_on_off']\" ).click(function() {
    	        $( \".block_radio_buttons_custom\" ).parent().hide(200);
    	        $( \".pos_pin_button\" ).parent().hide(200);
    	        $( \"#block-pin-help\" ).hide(200);
    	    });

    	    if(".(int)Configuration::get($this->name.'pinvis_on')." == 0){
    	        $( \".block_radio_buttons_custom\" ).parent().hide(200);
    	        $( \".pos_pin_button\" ).parent().hide(200);
    	        $( \"#block-pin-help\" ).hide(200);
    	    }



    	    $( \"label[for='rvis_on_on']\" ).click(function() {
                $( \"#fieldset_1_1\" ).show(200);
                $( \"#fieldset_2_2\" ).show(200);
        	});

            $( \"label[for='rvis_on_off']\" ).click(function() {
    	        $( \"#fieldset_1_1\" ).hide(200);
                $( \"#fieldset_2_2\" ).hide(200);
    	    });

    	    if(".(int)Configuration::get($this->name.'rvis_on')." == 0){
    	        $( \"#fieldset_1_1\" ).hide(200);
                $( \"#fieldset_2_2\" ).hide(200);
    	    }

    	});

    	</script>";



        return $_html. $helper->generateForm(array($fields_form0, $fields_form,$fields_form1,$fields_form2,$fields_form3,$fields_form4)). $this->_helpPinterestRichPins();
    }

    public function getConfigFieldsValuesStarslistandsearchSettings(){

        $data_config = array(
            'rvis_on' =>(int)Configuration::get($this->name.'rvis_on'),
            'is_category' => (int)Configuration::get($this->name.'is_category'),
            'svis_on' =>(int)Configuration::get($this->name.'svis_on'),
            'breadvis_on'=>(int)Configuration::get($this->name.'breadvis_on'),

            'pinvis_on' => Configuration::get($this->name.'pinvis_on'),

            'leftColumn' => Configuration::get($this->name.'_leftColumn'),
            'extraLeft' => Configuration::get($this->name.'_extraLeft'),
            'productFooter' => Configuration::get($this->name.'_productFooter'),
            'rightColumn' => Configuration::get($this->name.'_rightColumn'),
            'extraRight' => Configuration::get($this->name.'_extraRight'),
            'productActions' => Configuration::get($this->name.'_productActions'),


        );

        return $data_config;

    }


	private function _jsandcss(){
    	$_html = '';
    	
    	if(version_compare(_PS_VERSION_, '1.6', '>')){
    	$_html .=  '<link rel="stylesheet" media="screen" type="text/css" href="../modules/'.$this->name.'/views/css/prestashop16.css" />';
    		
    	}
    	
    	
    	$_html .= '<style type="text/css">';
        $_html .= '.update-button{border: 1px solid #EBEDF4;}';
    	$_html .= '</style>';
    	
    	return $_html;
    }
    
	private function _displayForm13_14_15()
     {
       $this->_html = '';
       $this->_html .= $this->_jsandcss();
       
        $this->_html .= $this->_drawSettingsForm(); 
        
        
		
    }
    
	private function _drawSettingsForm(){
    	$_html = '';
    	
    	
    	if(version_compare(_PS_VERSION_, '1.6', '<')){
    	$_html .= '
        <form action="http://www.google.com/webmasters/tools/richsnippets" target="_blank" method="GET">';
    	$_html .= '<fieldset>
					<legend><img src="../modules/'.$this->name.'/logo.gif" />'.$this->l('Google Snippets Testing Tools').'</legend>
					
					';
    	
		
    	$data_products = $this->_getProductsList();
    	
		if(sizeof($data_products['products'])>0){
    	$_html .= '<label>'.$this->l('Check Product URL:').'</label>
    			
    				<div class="margin-form">';
    				
    				
    	
    				$_html .= '<select name="url">';
    				foreach($data_products['products'] as $_item){
    					$name = isset($_item['name'])?Tools::stripslashes($_item['name']):'';
    					$link = isset($_item['link'])?$_item['link']:'';
    					if(Tools::strlen($name)==0) continue;
						$_html .= '<option  value="'.$link.'">'.$name.'</option>';
    				}
    				$_html .= '</select>';
    				
			        $_html .= '<input type="submit" value="'.$this->l('Check URL').'" 
                		   			  class="button"
                		   			  style="margin-left:10px"  />
					<p class="clear">'.$this->l('Select Product URL to view Snippet in test mode.').'</p>
					
				</div>';
		} else {
			$_html .= '<div style="text-align:center;font-weight:bold;color:red">'.$this->l('Products not found!').'</div>';
		}
		
		$_html .=	'</fieldset>';
		$_html .=	'</form>'; 
		
		
	
		$_html .= '<br/>';
    	}
		
    	
    	
    	$_html .= '
        <form action="'.$_SERVER['REQUEST_URI'].'" method="post" >';
		
    	
    	
		
		$_html .= '
		<fieldset>
					<legend><img src="../modules/'.$this->name.'/logo.gif"  />
					'.$this->l('Product Ratings').'</legend>';
					
			// Enable or Disable Google Rich Snippets
			$_html .= '<label>' . $this->l ( 'Enable or Disable Product Ratings' ) . ':</label>
			<div class="margin-form">
			
			<input type="radio" value="1" id="text_list_on" name="rvis_on" onclick="enableOrDisableRating(1)"
			' . (Tools::getValue ( 'rvis_on', Configuration::get ( $this->name . 'rvis_on' ) ) ? 'checked="checked" ' : '') . '>
			<label for="dhtml_on" class="t">
			<img alt="' . $this->l ( 'Enabled' ) . '" title="' . $this->l ( 'Enabled' ) . '" src="../img/admin/enabled.gif">
			</label>
				
			<input type="radio" value="0" id="text_list_off" name="rvis_on" onclick="enableOrDisableRating(0)"
			' . (! Tools::getValue ( 'rvis_on', Configuration::get ( $this->name . 'rvis_on' ) ) ? 'checked="checked" ' : '') . '>
			<label for="dhtml_off" class="t">
			<img alt="' . $this->l ( 'Disabled' ) . '" title="' . $this->l ( 'Disabled' ) . '" src="../img/admin/disabled.gif">
			</label>
			
		<p class="clear">' . $this->l ( 'Enable or Disable Product Ratings' ) . '.</p>
		</div>';
		
		$_html .= '<script type="text/javascript">
			function enableOrDisableRating(id)
			{
				if(id==0){
				$("#block-rating-settings").hide(200);
				$("#block-rating-settings-snip").hide(200);
				} else {
				$("#block-rating-settings").show(200);
				$("#block-rating-settings-snip").show(200);
				}
				
			}
		</script>';
			
		$_html .= '<div id="block-rating-settings" '.(Configuration::get($this->name.'rvis_on')==1?'style="display:block"':'style="display:none"').'>';
		 
		
		$_html .= '<label>'.$this->l('Enable or Disable stars on the category and search pages').':</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="is_category" 
							'.(Tools::getValue('is_category', Configuration::get($this->name.'is_category')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="is_category" 
						   '.(!Tools::getValue('is_category', Configuration::get($this->name.'is_category')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Product star ratings in category pages').'.</p>
				</div>';
		
		$_html .= '</div>';
		
    	$_html .= '</fieldset>	';
    	
    	
		
		$_html .= '<br/>';
		
		$_html .= '<div id="block-rating-settings-snip" '.(Configuration::get($this->name.'rvis_on')==1?'style="display:block"':'style="display:none"').'>';
		
		
		$_html .= '<fieldset>
					<legend><img src="../modules/'.$this->name.'/logo.gif"  />
						'.$this->l('Google Snippets Settings').'</legend>';
			
		
		
		// Enable or Disable Google Rich Snippets
    	$_html .= '<label style="width:29%">'.$this->l('Enable or Disable Google Rich Snippets').':</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="svis_on" onclick="enableOrDisableSnip(1)"
							'.(Tools::getValue('svis_on', Configuration::get($this->name.'svis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="svis_on" onclick="enableOrDisableSnip(0)"
						   '.(!Tools::getValue('svis_on', Configuration::get($this->name.'svis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Enable or Disable Google Rich Snippets').'.</p>
				</div>';
    	
		
		
		
		if(version_compare(_PS_VERSION_, '1.6', '<')){
		
		
    	
		
		 $_html .= '<label>'.$this->l('Display Google Rich Snippets Block').'</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="gsnipblock" onclick="enableOrDisableSnippets(1)"
							'.(Tools::getValue('gsnipblock', Configuration::get($this->name.'gsnipblock')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="gsnipblock" onclick="enableOrDisableSnippets(0)"
						   '.(!Tools::getValue('gsnipblock', Configuration::get($this->name.'gsnipblock')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Enable or Disable Google Rich Snippets Block. You need to activate this option if you want the Google Rich Snippets functionality to work correctly. It will display a nice visual badge with summary information about your product and its ratings on each product page, as well as aggregate ratings on product category pages and your homepage.').'</p>
				</div>';
		 
		 $_html .= '<script type="text/javascript">
			    	function enableOrDisableSnippets(id)
						{
						if(id==0){
							$("#block-snip-settings").hide(200);
						} else {
							$("#block-snip-settings").show(200);
						}
							
						}
					</script>';
		 
		 $_html .= '<div id="block-snip-settings" '.(Configuration::get($this->name.'gsnipblock')==1?'style="display:block"':'style="display:none"').'>';
    	
		 
		 $_html .= '<label>'.$this->l('Width Google Rich Snippets Block').':</label>
    			
    				<div class="margin-form">
					<input type="text" name="gsnipblock_width"  style="width:200px"
			                		value="'.Tools::getValue('gsnipblock_width', Configuration::get($this->name.'gsnipblock_width')).'"> px
			    	<p class="clear">'.$this->l('Width Google Rich Snippets Block in pixel.').'</p>
				
					</div>';
		 
		 $_html .= '<label>'.$this->l('Enable Logo in Google Rich Snippets Block').'</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="gsnipblocklogo"
							'.(Tools::getValue('gsnipblocklogo', Configuration::get($this->name.'gsnipblocklogo')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="gsnipblocklogo"
						   '.(!Tools::getValue('gsnipblocklogo', Configuration::get($this->name.'gsnipblocklogo')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Enable Logo in Google Rich Snippets Block').'.</p>
				</div>';
		 
		$_html .= '<label>'.$this->l('Select Hook where displayed Google Rich Snippets Block').':</label>
    					<div class="margin-form" style="margin-bottom:20px">';
    		
			$data_hooks = $this->_hooks_avaiable;

			    	
			   $_html .= '<select name="id_hook_gsnipblock">';
						foreach($data_hooks as $id_hook => $name_hook){
		    					
								
			    			if($id_hook == Configuration::get($this->name.'id_hook_gsnipblock')){
			    					$_html .= '<option  value="'.$id_hook.'" selected="selected">'.$name_hook.'</option>';
							}else{
									$_html .= '<option  value="'.$id_hook.'">'.$name_hook.'</option>';
 			    			}
							}
			    		$_html .= '</select>';
 			$_html .= '</div>';	
 			
 			$_html .= '</div>';
 			
 			
 			
    	}
    	
    	$_html .= '</fieldset>';
    	
    	$_html .= '</div>';
 			
 			$_html .= $this->_drawBreadCrumbsSettings();
		
			// rich pins
			$_html .= $this->_drawPinterestSettings();
			// rich pins

 			$_html .= '<p class="center" style="text-align:center">
							<input type="submit" name="submit" value="'.$this->l('Update settings').'" 
		                		   class="button"  />
		               	</p>';
	    	
    		$_html .=	'</form>';
    		
    		// rich pins settings help
	    	$_html .= $this->_helpPinterestRichPins();
			// rich pins settings help
    	
		
		return $_html;
    }
    
    
    private function _drawBreadCrumbsSettings(){
    	
    	$_html = '';
    	$_html .= '<br/>';
    	
    	$_html .= '<fieldset>
					<legend><img src="../modules/'.$this->name.'/views/img/ico-google.gif"  />
						'.$this->l('Rich Snippets for Breadcrumb Settings').'</legend>';
    	
    	// Enable or Disable Rich Pins
    	$_html .= '<label style="width:29%">'.$this->l('Enable or Disable Rich Snippets for Breadcrumb').':</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="breadvis_on" 
							'.(Tools::getValue('breadvis_on', Configuration::get($this->name.'breadvis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="breadvis_on" 
						   '.(!Tools::getValue('breadvis_on', Configuration::get($this->name.'breadvis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Enable or Disable Rich Snippets for Breadcrumb').'.</p>
				</div>';
    	
    	$_html .= '</fieldset>';
    	
    	return $_html;
    }
    
    private function _drawPinterestSettings(){
    	$_html = '';
    	$_html .= '<br/>';
    	
    	$_html .= '<fieldset>
					<legend><img src="../modules/'.$this->name.'/views/img/ico-pinterest.png"  />
						'.$this->l('Rich Pins Settings').'</legend>';
    	
    	// Enable or Disable Rich Pins
    	$_html .= '<label style="width:29%">'.$this->l('Enable or Disable Rich Pins').':</label>
				<div class="margin-form">
				
					<input type="radio" value="1" id="text_list_on" name="pinvis_on" onclick="enableOrDisablePin(1)"
							'.(Tools::getValue('pinvis_on', Configuration::get($this->name.'pinvis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_on" class="t"> 
						<img alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" src="../img/admin/enabled.gif">
					</label>
					
					<input type="radio" value="0" id="text_list_off" name="pinvis_on" onclick="enableOrDisablePin(0)"
						   '.(!Tools::getValue('pinvis_on', Configuration::get($this->name.'pinvis_on')) ? 'checked="checked" ' : '').'>
					<label for="dhtml_off" class="t">
						<img alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" src="../img/admin/disabled.gif">
					</label>
					
					<p class="clear">'.$this->l('Enable or Disable Rich Pins').'.</p>
				</div>';
    	
    	$_html .= '<script type="text/javascript">
			    	function enableOrDisablePin(id)
						{
						if(id==0){
							$("#block-pin-settings").hide(200);
							$("#block-pin-help").hide(200);
						} else {
							$("#block-pin-settings").show(200);
							$("#block-pin-help").show(200);
						
						}
							
						}
					</script>';
    	
    	
    	
    	$_html .= '<div id="block-pin-settings" '.(Configuration::get($this->name.'pinvis_on')==1?'style="display:block"':'style="display:none"').'>';
    	

    	
    	 
  	 $_html .= '<label>'.$this->l('Pinterest Button style').'</label>
				<div class="margin-form">';
  		$_html .= '<table style="width:50%;" cellpadding="0" cellspacing="0">';
    	$_html .= '<tr>
	    			   <td style="">
	    			   		<input type="radio" value="firston" id="pinterestbuttons" name="pinterestbuttons"
								'.(Tools::getValue('pinterestbuttons', Configuration::get($this->name.'pinterestbuttons')) == "firston" ? 'checked="checked" ' : '').'>
					   </td>
	    			   <td>
	    			   	<img src="../modules/'.$this->name.'/views/img/p-top.png" />
					   </td>
    			   ';
    	$_html .= '<td style="">
	    			   		<input type="radio" value="secondon" id="pinterestbuttons" name="pinterestbuttons"
								'.(Tools::getValue('pinterestbuttons', Configuration::get($this->name.'pinterestbuttons')) == "secondon" ? 'checked="checked" ' : '').'>
					   </td>
	    			   <td>
	    			   	<img src="../modules/'.$this->name.'/views/img/p-horizontal.png" />
					   </td>';
		$_html .= '<td style="">
	    			   		<input type="radio" value="threeon" id="pinterestbuttons" name="pinterestbuttons"
								'.(Tools::getValue('pinterestbuttons', Configuration::get($this->name.'pinterestbuttons')) == "threeon" ? 'checked="checked" ' : '').'>
					   </td>
	    			   <td>
	    			   	<img src="../modules/'.$this->name.'/views/img/p-none.png" />
					   </td>
					</tr>';
		$_html .= '</table>';
		
		$_html .= '</div>';
		
		
		$leftColumn = Configuration::get($this->name.'_leftColumn');
		$extraLeft = Configuration::get($this->name.'_extraLeft');
		$productFooter = Configuration::get($this->name.'_productFooter');
		$rightColumn = Configuration::get($this->name.'_rightColumn');
		$extraRight = Configuration::get($this->name.'_extraRight');
		$productActions = Configuration::get($this->name.'_productActions');
		
		ob_start();?>
<style>
.choose_hooks input {
	margin-bottom: 10px
}
</style>

<label>Position:</label>
<div class="margin-form choose_hooks">
	<table style="width: 80%;">
		<tr>

			<td style="width: 33%"><?= $this->l('Left column, only product page')?></td>
			<td style="width: 33%"><?= $this->l('Extra left')?></td>
			<td style="width: 33%"><?= $this->l('Product footer')?></td>
		</tr>
		<tr>

			<td><input type="checkbox" name="leftColumn"
				<?=($leftColumn == 'leftColumn' ? 'checked="checked"' : ''); ?>
				value="leftColumn" /></td>
			<td><input type="checkbox" name="extraLeft"
				<?=($extraLeft == 'extraLeft' ? 'checked="checked"' : ''); ?>
				value="extraLeft" /></td>
			<td><input type="checkbox" name="productFooter"
				<?= ($productFooter == 'productFooter' ? 'checked="checked"' : ''); ?>
				value="productFooter" /></td>
		</tr>
		<tr>
			<td><?= $this->l('Right column, only product page')?></td>
			<td><?= $this->l('Extra right')?></td>
			<td><?= $this->l('Product actions')?></td>
		</tr>
		<tr>

			<td><input type="checkbox" name="rightColumn"
				<?= ($rightColumn == 'rightColumn' ? 'checked="checked"' : ''); ?>
				value="rightColumn" /></td>
			<td><input type="checkbox" name="extraRight"
				<?= ($extraRight == 'extraRight' ? 'checked="checked"' : ''); ?>
				value="extraRight" /></td>
			<td><input type="checkbox" name="productActions"
				<?= ($productActions == 'productActions' ? 'checked="checked"' : '') ?>
				value="productActions" /></td>
		</tr>

	</table>
</div>


<?php 	$_html .= ob_get_contents();
		ob_end_clean();
		
    	$_html .= '</div>';
    	
    	$_html .= '</fieldset>';
    	
    	
    	
    	return $_html;
    }
    
    
    private function _helpPinterestRichPins(){
    	$_html = '';
    	
    	
    	
    	$_html .= '<div id="block-pin-help" '.(Configuration::get($this->name.'pinvis_on')==1?'style="display:block"':'style="display:none"').'>';

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '<div class="panel">

				<div class="panel-heading"><i class="fa fa-info fa-lg"></i>&nbsp;'.$this->l('Help').'</div>';
        } else {
            $_html .= '<fieldset>
					<legend><img src="../modules/'.$this->name.'/views/img/ico-pinterest.png"  />
						'.$this->l('Help').'</legend>';
            $_html .= '<h3 class="title-block-content">'.$this->l('Help').'</h3>';
        }



    	

    	
    	$_html .= '<b>'.$this->l('To validate your shop, please follow these steps').':</b><br/><br/>

	    - '.$this->l('Create an account or login to pinterest on').' <a href="http://www.pinterest.com" style="text-decoration:underline" target="_blank">http://www.pinterest.com</a><br/><br/>
	    - '.$this->l('Open another tab in your browser and go to').' <a href="http://developers.pinterest.com/rich_pins/validator/" style="text-decoration:underline" target="_blank">http://developers.pinterest.com/rich_pins/validator/</a><br/><br/>
	    - '.$this->l('Insert the url of one of your shop products in the text field and press "Validate" button').'<br/><br/>
	    - '.$this->l('Once your url has been processed you will see a page similar to the screenshot below with the data of your rich pin, now press on the "Apply now" button just below "Validate"').'<br/><br/>
	    	<img src="../modules/'.$this->name.'/views/img/pinterest-help/p-help1.png" />
			<br/><br/>    	
	    - '.$this->l('Now you will be prompted to insert the domain where the rich pins will be validated and the data format for the rich pins.').'
	    	<br/> <br/> 
	    	'.$this->l('The domain and the data format should be precompiled, just check if the domain is correct and that data format is "HTML Tags" and then click "Apply now"').' 
	    <br/><br/>
	    <img src="../modules/'.$this->name.'/views/img/pinterest-help/p-help2.png" />
	    <br/><br/>
	    - '.$this->l('The process is complete, now it\'s only a matter of time to get your site enabled for rich pins.').'
	    <br/><br/>
	    <img src="../modules/'.$this->name.'/views/img/pinterest-help/p-help3.png" />
	    <br/><br/>
	    '.$this->l('Remember that you need to validate only 1 pin to enable rich pins on your whole domain.').'
	    <br/><br/>
		'.$this->l('All your old pins will be converted automatically to rich pins when the first pin is verified.').'
	    ';

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '</div>';
        } else {
            $_html .= '</fieldset>';
        }
    	
		$_html .= '</div>';
		
		
		
		return $_html;
    		
    }
    
    
	
private function _getProductsList(){
		
		$cookie = $this->context->cookie;
		
		$id_lang = (int)($cookie->id_lang);
		if(version_compare(_PS_VERSION_, '1.5', '>')){
			
			$sql = 'SELECT p.id_product, pl.`link_rewrite`, pl.`name`, ps.id_shop FROM '._DB_PREFIX_.'product p 
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).' 
					AND pl.id_shop = '.Context::getContext()->shop->id.') 
					LEFT JOIN '._DB_PREFIX_.'product_shop ps ON(p.id_product = ps.id_product AND ps.id_shop = '.Context::getContext()->shop->id.') 
					WHERE ps.active = 1';
		} else {
		$sql = 'SELECT p.id_product, pl.`link_rewrite`, pl.`name` FROM '._DB_PREFIX_.'product p
	            LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)($id_lang).')
	            WHERE p.active = 1';
		}
		$result = Db::getInstance()->ExecuteS($sql);
		
	    $data_all = array();
		foreach($result as $products){
			
			$id_product= isset($products['id_product'])?$products['id_product']:'';
			$link_rewrite= isset($products['link_rewrite'])?$products['link_rewrite']:'';
			$_category= isset($products['category'])?$products['category']:'';
			$_category = htmlspecialchars($_category); 
			$_ean13= isset($products['ean13'])?$products['ean13']:'';
			
			$link = new Link();
			if(version_compare(_PS_VERSION_, '1.5', '>')){
			
			$force_routes = false;
			if(Configuration::get('PS_REWRITING_SETTINGS')==1)
				$force_routes = true;
				
			$_url = $link->getProductLink($id_product, 
										  $link_rewrite, 
										  $_category,
										  $_ean13,
										  $id_lang,
										  Context::getContext()->shop->id,
										  0,
										  $force_routes 
										  );

			} else {
				$_url = $link->getProductLink($id_product, 
										  $link_rewrite, 
										  $_category
										 
										  );
			}
			
			
			$_name = isset($products['name'])?$products['name']:'';
			$_name = addslashes($_name);
			$_url = isset($_url)?$_url:'';
			
			$data_all[] = array('link' => $_url, 'name' => $_name);
		
		}
		
		
		
		return array('products' => $data_all);
	}
	
private function _getPicture(){
		
		$_product_id = (int)Tools::getValue('id_product');
		
		if($_product_id!=0){
		
		$_obj_product = new Product($_product_id);
    	
    	$data_product = $this->_productData(array('product'=>$_obj_product));	
		$picture = $data_product['image_link'];
		
		
		} else {
			$picture = '';
		} 
		
		return array('picture'=>$picture);
	}
	
	
private function _productData($data){
		$product = $data['product'];
		
		$cookie = $this->context->cookie;
		$id_lang = (int)($cookie->id_lang);	
		
			/* Product URL */
			if (version_compare(_PS_VERSION_, '1.5', '>'))
				$link = Context::getContext()->link;
			else
				$link = new Link();
				
			$category = new Category((int)($product->id_category_default), $id_lang);

            if (version_compare(_PS_VERSION_, '1.5.5', '>=')) {
                   $product_url = $link->getProductLink((int)$product->id, null, null, null, 
                    									 $id_lang, null, 0, false);
             }
             elseif (version_compare(_PS_VERSION_, '1.5', '>')) {
               if (Configuration::get('PS_REWRITING_SETTINGS')) {
                     $product_url = $link->getProductLink((int)$product->id, null, null, null, 
                     									 $id_lang, null, 0, true);
               }
                else {
                    $product_url = $link->getProductLink((int)$product->id, null, null, null, 
                     									 $id_lang, null, 0, false);
                 }
            }
            else {
                  $product_url = $link->getProductLink((int)$product->id, @$product->link_rewrite[$id_lang], 
                 									 $category->link_rewrite, $product->ean13, $id_lang);
            }
            
            
			if (version_compare(_PS_VERSION_, '1.5', '>'))
				$link = Context::getContext()->link;
			else
				$link = new Link();

			/* Image */
			$image = Image::getCover((int)($product->id));

			if ($image)
			{
				$available_types = ImageType::getImagesTypes('products');
				
				foreach ($available_types as $type){
					$width = $type['width'];
					if($width>400){
						$type_img = $type['name'];
						break;
					}
				}
				
				
				$image_link = $link->getImageLink(@$product->link_rewrite[$id_lang], (int)($product->id).'-'.(int)($image['id_image']),$type_img);
					
					
				
				/* version 1.4 */
				if (strpos($image_link, 'http://') === FALSE && strpos($image_link, 'https://') === FALSE && version_compare(_PS_VERSION_, '1.4', '<'))
				{
					$image_link = 'http://'.$_SERVER['HTTP_HOST'].$image_link;
				}
			}
			else
			{
				$image_link = false;
				
			}
            
            return array('product_url'=>$product_url,'image_link'=>$image_link);
	}


    private function _welcome(){

        $_html  = '';

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '<div class="panel">

                <div class="panel-heading"><i class="fa fa-home fa-lg"></i>&nbsp;'.$this->l('Welcome').'</div>';
        } else {
            $_html .= '<h3 class="title-block-content"><img src="../modules/'.$this->name.'/logo.gif" />'.$this->l('Welcome').'</h3>';
        }


        $_html .=  '<p class="alert alert-info">'.$this->l('Welcome and thank you for purchasing our module.').'</p>'.
            '<br/>';




        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '</div>';
        }

        return $_html;



    }

    private function _help_documentation(){
        $_html = '';

        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '<div class="panel">

				<div class="panel-heading"><i class="fa fa-question-circle fa-lg"></i>&nbsp;'.$this->l('Help / Documentation').'</div>';
        } else {
            $_html .= '<h3 class="title-block-content">'.$this->l('Help / Documentation').'</h3>';
        }

        $_html .= '<b style="text-transform:uppercase">'.$this->l('MODULE DOCUMENTATION ').':</b>&nbsp;<a target="_blank" href="../modules/'.$this->name.'/Installation_Guid.pdf" style="text-decoration:underline;font-weight:bold">Installation_Guid.pdf</a>
        <br/><br/>'.
            '<b style="text-transform:uppercase">'.$this->l('GOOGLE RICH SNIPPETS TEST TOOL ').':</b>&nbsp;<a target="_blank" href="https://developers.google.com/structured-data/testing-tool/" style="text-decoration:underline;font-weight:bold">https://developers.google.com/structured-data/testing-tool/</a>
    			
    			';
        if(version_compare(_PS_VERSION_, '1.6', '>')){
            $_html .= '</div>';
        }
        return $_html;
    }

    public function clearSmartyCache(){
        if(version_compare(_PS_VERSION_, '1.6', '>')) {
            $smarty = Context::getContext()->smarty;
            //Tools::clearSmartyCache();
            $smarty->clearAllCache();
        }
    }
}
