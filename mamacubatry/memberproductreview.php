<?php
require_once _PS_MODULE_DIR_ . 'enlineamixmod/enlineamixmod.php';

class enlineamixmodmemberproductreviewModuleFrontController extends ModuleFrontController
{
	public function __construct()
	{
		parent::__construct();
		
		# this id belong to haiqal.halim@nurengroup.com from table ps_customer
		/**  
		* 175933 => haiqal.halim@nurengroup.com
		* 6794   => tina.hassan@nurengroup.com
		* 3143   => st.leong@nurengroup.com
		**/
		$this->arry_id_test = array(175933, 6794, 3143);

		$this->context = Context::getContext();
	}
	
    public function init()
    {
        parent::init();
    }

    public function initContent()
    {
        parent::initContent();

        $this->assignMetaTags();
        $this->assignMedia();
        
        $productlist =  $this->getProductReviewList();
		
		$newProductList = array();
		foreach($productlist as $oneProduct){
				
			$product = new Product($oneProduct['id_product']);
			$image = Product::getCover((int)$oneProduct['id_product']);
			$cover_image = $this->context->link->getImageLink($product->link_rewrite[1], $image['id_image'], 'medium_default');
			$oneProduct['productcomment_cover_image']=$cover_image;
			$newProductList[]=$oneProduct;
		}
		
		$this->secure_key = Tools::encrypt('productcomments');
		
		
		
		//if (stripos($this->context->customer->email,'nurengroup')>1 ){
			$testerlist =  $this->getTesterProductList();
			$newTesterList = array();
			foreach($testerlist as $oneProduct){
					
				$product 						   = new Product($oneProduct['id_product']);
				$image 							   = Product::getCover((int)$oneProduct['id_product']);
				$cover_image 					   = $this->context->link->getImageLink($product->link_rewrite[1], $image['id_image'], 'medium_default');
				$oneProduct['tester_cover_image']  = $cover_image;
				$newTesterList[]				   = $oneProduct;
				
				//print_r($oneProduct);
			}
		
			$productreviewheader = new CMS(55);
			$testerCMS = new CMS(56);
				
			if ($this->context->customer->birthday)
				$birthday = explode('-', $this->context->customer->birthday);
			else
				$birthday = array('-', '-', '-');
			
			$sql = '
			SELECT * FROM ps_customer_additional_info WHERE id_customer='.$this->context->customer->id.'
			';
			$customerAdditionalInfo = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			/* Generate years, months and days */
			$this->context->smarty->assign(array(
					'years' => Tools::dateYears(),
					'sl_year' => $birthday[0],
					'months' => Tools::dateMonths(),
					'sl_month' => $birthday[1],
					'days' => Tools::dateDays(),
					'sl_day' => $birthday[2],
					'errors' => $this->errors,
					'genders' => Gender::getGenders(),
				));
			if ($customerAdditionalInfo){
				$this->context->smarty->assign(array(
					'additionalInfo' => $customerAdditionalInfo[0],
				));
				
			}else{
				$this->context->smarty->assign(array(
					'additionalInfo' => array(
											'children_under_12'=>'',
											'annual_income_range'=>'',
											'children_born_year'=>'',
											'occupation'=>'',
											'edd'=>'',
											'insta_url'=>'',
											),
				));
			}
			//print_r($customerAdditionalInfo);
		//}
		
		$currentAddressId = $this->context->cart->id_address_delivery;
		
		
        $this->context->smarty->assign(array(
			'currentAddressId'=> $currentAddressId,
			'ajaxToken' => Tools::getToken(false),
			'customerid' => $this->context->customer->id,
			'productlist' => $newProductList,
			'testerlist' => $newTesterList,
			'productreviewheader' => $productreviewheader,
			'testerCMS' => $testerCMS,
			'secure_key' => $this->secure_key,
			'logged' => $this->context->customer->isLogged(true),
			'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),
			'productcomments_controller_url' => $this->context->link->getModuleLink('productcomments',null, array(), true),
			'productcomments_url_rewriting_activated' => Configuration::get('PS_REWRITING_SETTINGS', 0),
			'moderation_active' => (int)Configuration::get('PRODUCT_COMMENTS_MODERATE')
        ));
		
		#live using this tpl
		$this->setTemplate('membersproductreview.tpl');
		
    }
    
	public function getProductReviewList() 
    {
        $sql = '
			SELECT p.id_product, p.reference AS prodreference, pp.name, pp.id_product, po.reference, po.date_add, pc.title, pc.content, IFNULL(pc.grade,dd.grade) as grade ,pp.description, IFNULL(pc.grade,IFNULL(dd.grade,"missing")) AS havegrade
			FROM `ps_orders` po JOIN `ps_order_detail` pd ON po.id_order=pd.id_order JOIN `ps_product_lang` pp ON pd.product_id = pp.id_product AND pp.id_lang=1 JOIN `ps_product` p ON p.id_product = pp.id_product 
			LEFT JOIN `ps_product_comment` pc ON pc.id_product=pd.product_id AND pc.id_customer=po.id_customer 
			LEFT JOIN (
			SELECT tcd.tester_product_id,  pc2.grade FROM ps_product_comment pc2 
			JOIN ps_tester_campaign_header tch ON tch.tester_real_product_id=pc2.id_product 
			JOIN ps_tester_campaign_detail tcd ON  tcd.tester_id=tch.tester_id AND tcd.customer_id=pc2.id_customer
			WHERE tcd.customer_id="'.(int)$this->context->customer->id.'"
			) dd ON dd.tester_product_id=p.id_product
			WHERE po.id_customer="'.(int)$this->context->customer->id.'" AND current_state IN (4,5) ORDER BY po.date_add DESC
			';

        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		
		//echo $sql;
		return $result;
	}
	
	
	public function getTesterProductList() 
    {
		
		#testing purpose
		if(in_array($this->context->customer->id, $this->arry_id_test))
		{
			$sql = '
			SELECT a.*, b.reference AS prodreference, pb.link_rewrite, pb.name, pb.id_product, d.active AS applied, d.approved , pb.description_short, pb.description
			FROM ps_tester_campaign_header a
			JOIN ps_product b ON b.id_product=a.tester_product_id
			LEFT JOIN ps_product_lang pb ON b.id_product=pb.id_product AND pb.id_lang=1
			LEFT JOIN ps_tester_campaign_detail d ON a.tester_id=d.tester_id AND d.customer_id="'.(int)$this->context->customer->id.'"
			WHERE
			a.active=1
			';
		}
		else
		{
			#live using this sql
			$sql = '
			SELECT a.*, b.reference AS prodreference, pb.link_rewrite, pb.name, pb.id_product, d.active AS applied, d.approved , pb.description_short, pb.description
			FROM ps_tester_campaign_header a
			JOIN ps_product b ON b.id_product=a.tester_product_id
			LEFT JOIN ps_product_lang pb ON b.id_product=pb.id_product AND pb.id_lang=1
			LEFT JOIN ps_tester_campaign_detail d ON a.tester_id=d.tester_id AND d.customer_id="'.(int)$this->context->customer->id.'"
			WHERE
			 CURRENT_DATE BETWEEN tester_registration_start AND tester_registration_end
			AND CURRENT_DATE BETWEEN tester_start_date AND tester_end_date
			AND a.active=1
			';
		}
        
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		//echo $sql;
		return $result;
	}
	
	
	
	
	
    public function postProcess()
    {
        return parent::postProcess();
    }

    protected function assignMetaTags()
    {
        /*if (Configuration::get('AFFILIATE_META_TITLE', $this->context->language->id)) {
            $meta_title = Configuration::get('AFFILIATE_META_TITLE', $this->context->language->id);
            $this->context->smarty->assign('meta_title', str_replace(array('%SHOP_NAME%'), array(Configuration::get('PS_SHOP_NAME')), $meta_title));
        } else {
            $this->context->smarty->assign('meta_title', $this->module->l('BrandsReview'));
        }

        if (Configuration::get('AFFILIATE_META_DESCRIPTION', $this->context->language->id)) {
            $meta_title = Configuration::get('AFFILIATE_META_DESCRIPTION', $this->context->language->id);
            $this->context->smarty->assign('meta_description', str_replace(array('%SHOP_NAME%'), array(Configuration::get('PS_SHOP_NAME')), $meta_title));
        }*/
    }
    
    protected function assignMedia() {
		$this->context->controller->addJS('/modules/productcomments/js/jquery.rating.pack.js');
		$this->context->controller->addJS('/modules/productcomments/js/jquery.textareaCounter.plugin.js');
        $this->context->controller->addJS('/themes/default-bootstrap/js/modules/productcomments/js/productcomments.js');
		
    }
}
