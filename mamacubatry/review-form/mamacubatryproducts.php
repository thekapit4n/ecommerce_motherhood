<?php
require_once _PS_MODULE_DIR_ . 'enlineamixmod/enlineamixmod.php';


class enlineamixmodmamacubatryproductsModuleFrontController extends ModuleFrontController
{
	public $msg = array();
	
	public function __construct()
	{
		parent::__construct();

		$this->context = Context::getContext();
	}
	
    public function init()
    {
		
        $sql = '
			SELECT *
FROM `'._DB_PREFIX_.'tester_campaign_header` a join ps_product_lang b
on a.tester_product_id=b.id_product and b.id_lang=1
WHERE link_rewrite="'.pSQL(Tools::getValue('product_slug')).'"';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
		if (empty($result[0])){
			Tools::redirect('https://www.motherhood.com.my/productreview');
			die('ggg');
			
		}
		
		$meta_title="MamaCubaTry: ".$result[0]['name'];
		$event_meta_description=$result[0]['meta_description'];
		$event_meta_keyword=$result[0]['meta_keyword'];
		
		parent::init();
		if(isset($meta_title)){
		$this->context->smarty->tpl_vars['meta_title']->value = $meta_title;}
		if(isset($event_banner) && !empty($event_banner)){
				$this->context->smarty->tpl_vars['meta_image']->value = $event_banner;
		}
		if(isset($event_meta_description)){
		$this->context->smarty->tpl_vars['meta_description']->value = $event_meta_description;}
		if(isset($event_meta_keyword)){
		$this->context->smarty->tpl_vars['meta_keywords']->value = $event_meta_keyword;}
			
		$this->context->smarty->assign(array('meta_title' => $meta_title));
		$this->context->smarty->assign(array('meta_image' => $event_banner));
		$this->context->smarty->assign(array('meta_description' => $event_meta_description));
		$this->context->smarty->assign(array('meta_keywords' => $event_meta_keyword));
		$this->context->smarty->assign(array('event_id' => $event_id));
    }

    public function initContent()
    {
        parent::initContent();
		
		$this->context->controller->addJS('themes/default-bootstrap/dashboard-assets/form-wizard-5/js/jquery.steps.js');
		
        $sql = '
			SELECT *
			FROM `'._DB_PREFIX_.'tester_campaign_header` a join ps_product_lang b
			on a.tester_product_id=b.id_product and b.id_lang=1
			JOIN ps_product c ON b.id_product=c.id_product
			WHERE link_rewrite="'.pSQL(Tools::getValue('product_slug')).'"';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		
		$product 	 = new Product((int)$result[0]['id_product']);
		$image 		 = Product::getCover((int)$result[0]['id_product']);
		$cover_image = $this->context->link->getImageLink($product->link_rewrite[1], $image['id_image'], 'medium_default');
		
		$result[0]['tester_cover_image'] = $cover_image;
		$customer = new Customer($this->context->customer->id);
		
		$sql 					= 'SELECT * FROM ps_customer_additional_info WHERE id_customer = '.$this->context->customer->id;
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
		
		$productCategory = new Category($result[0]['id_category_default']);
		
		$sqlstate 	 = "SELECT * FROM motherhood_presta.ps_postcode_state ORDER BY state_name ASC";
		$resultState = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlstate);
		
		$arr_race   = array("Malay", "Chinese", "Indian", "Others");
		$arr_salary = array("36,000 and below", "36,000 - 60,000", "60,000 - 120,000", "120,000 and above");
		
        $this->context->smarty->assign(array(
			'campaign'		  => $result[0],
			'customer'		  => $customer,
			'productCategory' => $productCategory,
			'mediumSize' 	  => Image::getSize(ImageType::getFormatedName('medium')),
			'liststate'	 	  => $resultState,
			'arr_race'		  => $arr_race,
			'arr_salary'	  => $arr_salary,
        ));
		
		// print_r($result[0]);
		// print_r($customer);
		// print_r($productCategory);
		
		
		
		$this->setTemplate('mamacubatryproducts.tpl');
        return parent::postProcess();
    }

    public function setMedia() {
        parent::setMedia();
        //$this->context->controller->addCSS(_PS_MODULE_DIR_.'enlineamixmod/views/css/enlineaevents.css');
    }
	

}
