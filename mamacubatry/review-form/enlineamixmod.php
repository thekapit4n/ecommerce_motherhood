<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class enlineamixmod extends Module
{
    private $html = '';
    public $validation_errors = array();

    public static $cfg_prefix = 'ENLINEA_';
    protected static $cache_best_seller_products;
    
    public function __construct()
    {
        $this->name = 'enlineamixmod';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Enlinea';
        $this->need_instance = 0;
        $this->is_configurable = 1;
        $this->ps_versions_compliancy['min'] = '1.5.6.0';
        $this->ps_versions_compliancy['max'] = _PS_VERSION_;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->module_key = 'cd28301fc4a10bee8d611b337d9883c0';

        parent::__construct();

        $this->displayName = $this->l('Enlinea Mix Module');
        $this->description = $this->l('Enlinea Mix module');

        $this->confirmUninstall = $this->l('Are you sure you want to delete this module ?');        
    }

    public function getDefaults()
    {
        return array(
            'BEST_SELLER_NBR' => 48,
            'GDEX_SEND_SHIPMENT_URL' => '',
            'GDEX_TRACK_SHIPMENT_URL' => '',
            'GDEX_TRACK_FULL_SHIPMENT_URL' => '',
            'DHL_API_URL' => '',
            'DHL_CLIENT_ID' => '',
            'DHL_PASSWORD' => '',
            'DHL_SOLDTO_ACC' => '',
            'DHL_SHIPMENT_PREFIX' => '',
        );
    }

    public function install()
    {
        $this->_clearCache('*');

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        // Hooks & Install
        return (parent::install() && $this->prepareModuleSettings());
    }

	public function hookModuleRoutes($params)
	{
		return [
		'module-enlineamixmod-enlineaevents' => [
		'controller' => 'enlineaevents',
		'rule' => 'events{/:event_name}',
		'keywords' => [
		'event_name' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'event_name']
		],
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ], 
		'module-enlineamixmod-mamacubatryproducts' => [
		'controller' => 'mamacubatryproducts',
		'rule' => 'mamacubatry{/:product_slug}',
		'keywords' => [
		'product_slug' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'product_slug']
		],
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ], 
		'module-enlineamixmod-enlineaevents2' => [
		'controller' => 'enlineaevents',
		'rule' => 'mobile/events{/:event_name}',
		'keywords' => [
		'event_name' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'event_name']
		],
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ],
		'module-enlineamixmod-enlineaofflinewarehousesale2' => [
		'controller' => 'enlineaofflinewarehousesale',
		'rule' => 'mobile/warehouse-sale',
		'keywords' => array(),
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ],
		'module-enlineamixmod-enlineavipdeals2' => [
		'controller' => 'enlineavipdeals',
		'rule' => 'mobile/rewards',
		'keywords' => array(),
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ],
		'module-enlineamixmod-warehouserewardsubmission2' => [
		'controller' => 'warehouserewardsubmission',
		'rule' => 'mobile/scan',
		'keywords' => array(),
		'params' => [
		'fc' => 'module',
		'module' => 'enlineamixmod'
		]
        ],
        'module-enlineamixmod-motherhoodchoicevotingdetails' => [
            'controller' => 'motherhoodchoicevotingdetails',
            'rule' => 'motherhood-award-voting-detail{/:product_name}',
            'keywords' => [
            'product_name' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'product_name']
            ],
            'params' => [
            'fc' => 'module',
            'module' => 'enlineamixmod'
            ]
            ]
        ];
	}
	
    public function prepareModuleSettings()
    {
        /**

            Default configuration

        **/
        foreach ($this->getDefaults() as $key => $value) {
            Configuration::updateValue(self::$cfg_prefix.$key, $value, true);
        }

        return true;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        if (!parent::uninstall()) {
            return false;
        }

        foreach ($this->getDefaults() as $key => $value) {
            Configuration::deleteByName(self::$cfg_prefix.$key);
        }

        return true;
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache('home.tpl');
        parent::_clearCache('hookDisplayTopColumn.tpl');
        parent::_clearCache('hookDisplayHomeTab.tpl', 'enlineamixmod-tab');
        parent::_clearCache('hookDisplayHomeTabContent.tpl');   
    }

    public function getContent()
    {
        $id_shop = (int)$this->context->shop->id;

        $this->initFieldsForm();
        
        $output = '';
        if (Tools::getIsset('save'.$this->name)) {
            if (!($productNbr = Tools::getValue(self::$cfg_prefix.'BEST_SELLER_NBR')) || empty($productNbr))
				 $output .= $this->displayError($this->l('Please complete the "best seller products to display" field.'));
			elseif ((int)($productNbr) == 0)
				$output .= $this->displayError($this->l('Invalid number.'));
			else
			{
				Configuration::updateValue(self::$cfg_prefix.'BEST_SELLER_NBR', (int)(Tools::getValue(self::$cfg_prefix.'BEST_SELLER_NBR')));
				Configuration::updateValue(self::$cfg_prefix.'GDEX_SEND_SHIPMENT_URL', (Tools::getValue(self::$cfg_prefix.'GDEX_SEND_SHIPMENT_URL')));
                Configuration::updateValue(self::$cfg_prefix.'GDEX_TRACK_SHIPMENT_URL', (Tools::getValue(self::$cfg_prefix.'GDEX_TRACK_SHIPMENT_URL')));
                Configuration::updateValue(self::$cfg_prefix.'GDEX_TRACK_FULL_SHIPMENT_URL', (Tools::getValue(self::$cfg_prefix.'GDEX_TRACK_FULL_SHIPMENT_URL')));
                
                Configuration::updateValue(self::$cfg_prefix.'DHL_API_URL', (Tools::getValue(self::$cfg_prefix.'DHL_API_URL')));
                Configuration::updateValue(self::$cfg_prefix.'DHL_CLIENT_ID', (Tools::getValue(self::$cfg_prefix.'DHL_CLIENT_ID')));
                Configuration::updateValue(self::$cfg_prefix.'DHL_PASSWORD', (Tools::getValue(self::$cfg_prefix.'DHL_PASSWORD')));
                Configuration::updateValue(self::$cfg_prefix.'DHL_SOLDTO_ACC', (Tools::getValue(self::$cfg_prefix.'DHL_SOLDTO_ACC')));
                Configuration::updateValue(self::$cfg_prefix.'DHL_SHIPMENT_PREFIX', (Tools::getValue(self::$cfg_prefix.'DHL_SHIPMENT_PREFIX')));
                
                $this->_clearCache('*');
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			}
        }

        $helper = $this->initForm();
        foreach ($this->getDefaults() as $key => $value) {
            $helper->fields_value[self::$cfg_prefix.$key] = Configuration::get(self::$cfg_prefix.$key);
        }
        
        return $output.$this->html.$helper->generateForm($this->fields_form);
    }

    protected function initFieldsForm()
    {
        $i = 0;
        $this->fields_form[$i]['form'] = array(
            'legend' => array(
                'title' => $this->l('General Settings'),
            ),
            'input' => array(
			    array(
                    'type' => 'text',
                    'label' => $this->l('Best Sellers Products to display:'),
                    'name' => self::$cfg_prefix.'BEST_SELLER_NBR',
                    'desc' => $this->l('Number of best seller products to display.')
		        ),
          //      array(
          //          'type' => 'text',
          //          'label' => $this->l('GDEX Account No:'),
          //          'name' => self::$cfg_prefix.'GDEX_ACCOUNT_NO',
          //          'desc' => $this->l('GDEX API account number')
		        //),
                array(
                    'type' => 'text',
                    'label' => $this->l('GDEX Add Shipment URL:'),
                    'name' => self::$cfg_prefix.'GDEX_SEND_SHIPMENT_URL',
                    'desc' => $this->l('URL for GDEX to add new shipment job')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('GDEX Track Latest Shiment URL:'),
                    'name' => self::$cfg_prefix.'GDEX_TRACK_SHIPMENT_URL',
                    'desc' => $this->l('URL for GDEX latest delivery status (Use {GDEXCN} as GDEX number')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('GDEX Track Full Shipment URL:'),
                    'name' => self::$cfg_prefix.'GDEX_TRACK_FULL_SHIPMENT_URL',
                    'desc' => $this->l('URL for GDEX full delivery statuses (Use {GDEXCN} as GDEX number')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('DHL API URL:'),
                    'name' => self::$cfg_prefix.'DHL_API_URL',
                    'desc' => $this->l('DHL API URL')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('DHL Client ID:'),
                    'name' => self::$cfg_prefix.'DHL_CLIENT_ID',
                    'desc' => $this->l('DHL API Client ID')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('DHL Password:'),
                    'name' => self::$cfg_prefix.'DHL_PASSWORD',
                    'desc' => $this->l('DHL API Password')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('DHL SOLDTO Account:'),
                    'name' => self::$cfg_prefix.'DHL_SOLDTO_ACC',
                    'desc' => $this->l('DHL SOLDTO Account')
		        ),
                array(
                    'type' => 'text',
                    'label' => $this->l('DHL Shipment ID Prefix:'),
                    'name' => self::$cfg_prefix.'DHL_SHIPMENT_PREFIX',
                    'desc' => $this->l('DHL Shipment ID Prefix')
		        )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'button'
            )
        );
        $i++;        
    }

    protected function initForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'save'.$this->name;
        $helper->toolbar_btn =  array(
            'save' =>
            array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
            )
        );
        return $helper;
    }

    public function assignModuleVariables()
    {
        foreach ($this->getDefaults() as $key => $value) {
            $this->smarty->assign(Tools::strtolower($key), Configuration::get(self::$cfg_prefix.$key));
        }
    }

    public function getConfigPrefix()
    {
        return self::$cfg_prefix;
    }
    
    // Hook called in tab AdminOrder
	public function hookDisplayAdminOrder($params)
	{
		$smarty_values = array(
			'orderId' => $params['id_order']
		);
		$this->context->smarty->assign($smarty_values);
        
        return $this->display(__FILE__, 'views/templates/hook/adminorders_button.tpl');
	}
    
    public function hookDisplayTopColumn() {
        if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'index')
			return ;
            
        $sql = 'SELECT p.id_product,pl.name,pl.link_rewrite,round(p.price * (1 + (IFNULL(t.rate,0)/100)),2) AS price, p.new_product, p.best_seller, p.free_deliver, p.best_price, p.custom_tag,'.
                    'i.id_image,MIN(id_specific_price_rule) AS catalog,'.
	                'CASE WHEN sp.reduction_type="percentage" THEN (p.price * (1 + (IFNULL(t.rate,0)/100))) * (1 - sp.reduction) ELSE (p.price * (1 + (IFNULL(t.rate,0)/100))) - sp.reduction END FinalPrice,'.
	                'sp.`to`, CASE WHEN sp.reduction_type="percentage" THEN sp.reduction * 100 ELSE ROUND(sp.reduction * 100 / (p.price * (1 + (IFNULL(t.rate,0)/100)))) END AS reductionPercent '.
                ' FROM ps_product p INNER JOIN ps_specific_price sp ON p.id_product = sp.id_product'.
                ' INNER JOIN ps_product_lang pl ON p.id_product = pl.id_product AND pl.id_lang='.(int)$this->context->language->id.
                ' LEFT JOIN ps_image i ON p.id_product=i.id_product AND i.cover=1'.
                ' LEFT JOIN ps_tax_rule tr ON p.id_tax_rules_group = tr.id_tax_rules_group'.
                ' LEFT join ps_tax t ON tr.id_tax = t.id_tax '.
                ' INNER join ps_category_product cp ON cp.id_product = p.id_product '.
                ' WHERE sp.reduction > 0 AND p.active = 1 AND sp.`to` <>"0000-00-00" AND'.
                ' sp.`from`<=NOW() AND sp.`to`>=NOW() AND DATEDIFF(sp.`to`, NOW()) < 100 AND cp.id_category=339'.
                ' GROUP BY p.id_product ORDER BY rand() LIMIT 15';
				
				// previously was, AND p.limited_offer=1, now only category 339 OMG
                
        $result = Db::getInstance()->ExecuteS($sql);
        
        $productList = array();
        
        foreach($result as $r) {
            $p = array();
            $p["id_product"] = $r["id_product"];
            $p["product_name"] = $r["name"];
            $p["ori_price"] = $r["price"];
            $p["final_price"] = $r["FinalPrice"];
            $p["promo_to"] = $r["to"];
            $p["reduction_percent"] = round($r["reductionPercent"],2);
            
            $p["id_image"] = $r['id_image'];
            $p["link_rewrite"] = $r['link_rewrite'];
            
            $p["new_product"] = $r['new_product'];
            $p["best_seller"] = $r['best_seller'];
            $p["free_deliver"] = $r['free_deliver'];
            $p["best_price"] = $r['best_price'];
            $p["custom_tag"] = $r['custom_tag'];
            
            $productList[] = $p;
        }

        $this->context->smarty->assign(array(
		    'limitedoffer' => $productList,
            "homeSize"=> Image::getSize("home_default"),
		));

        return $this->display(__FILE__, 'hookDisplayTopColumn.tpl'); 
    }
    
    public function hookDisplayHeader($params)
	{
        //if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'index') {
        //}
        //else {
            $this->context->controller->addCSS(($this->_path).'views/css/flexisel.css', 'all');
    		$this->context->controller->addCSS(($this->_path).'views/css/enlineamixmod.css', 'all');
            //$this->context->controller->addCSS(($this->_path).'views/css/dscountdown.css', 'all');
            
            $this->context->controller->addJS(($this->_path).'views/js/jquery.flexisel.js');
            $this->context->controller->addJS(($this->_path).'views/js/dscountdown.min.js');
            $this->context->controller->addJS(($this->_path).'views/js/enlineamixmod.js');
	    //}
        
        $this->context->controller->addCSS(($this->_path).'views/css/hookDisplayProductListFooter.css', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/hookDisplayProductListFooter.js');
   
    }
    
    public function hookDisplayHomeTab($params) {
        return $this->display(__FILE__, 'hookDisplayHomeTab.tpl'); 
    }
    
    public function hookDisplayHomeTabContent($params)
	{
        if (!$this->isCached('hookDisplayHomeTabContent.tpl', $this->getCacheId('enlineamixmod-hometab')))
		{		
            if (!isset(enlineamixmod::$cache_best_seller_products))
	            enlineamixmod::$cache_best_seller_products = $this->getBestSellerProducts();
                
            $this->smarty->assign(
			    array(
				    'bestsellerproducts' => enlineamixmod::$cache_best_seller_products,
				    'homeSize' => Image::getSize(ImageType::getFormatedName('home')),
			    )
		    );
        }
        
        //if(enlineamixmod::$cache_best_seller_products === false)
        //    return false;
            
		return $this->display(__FILE__, 'hookDisplayHomeTabContent.tpl', $this->getCacheId('enlineamixmod-hometab'));
	}
    
    public function getBestSellerProducts() {
        $displayNo = Configuration::get(self::$cfg_prefix.'BEST_SELLER_NBR');
        if (!$displayNo)
			return;
        $bestSellerProducts = false;
		$bestSellerProducts = Product::getBestSellerProducts((int) $this->context->language->id, 0, (int)$displayNo);

		return $bestSellerProducts;
    }
    
    public function ajaxCallEmail($type, $orderId) 
    {
        $result = false;
        switch($type) {
            case "1":
            case "3":
                $result = $this->sendOrderSuccessEmail($orderId, $type);
                break;
            case "2":
                $result = $this->sendOrderCancelEmailToVendor($orderId, $type);;
                break;
            case "11":
                $result = $this->submitGDEXShipment($orderId);
                break;
            case "12":
                $result = $this->submitZoomShipment();
                break;
            case "13":
                $result = $this->submitDHLShipment($orderId);
                break;
            case "14":
                $result = $this->payCommission($orderId);
                break;
        }
        
        return $result;
    }
	
    public function payCommission($id_seller) 
    {
		$paid_amt=$_REQUEST["amount"];
		$date_add=$_REQUEST["date"];
		$pay_desc=$_REQUEST["desc"];
		
		require_once(_PS_ROOT_DIR_ . "/modules/agilesellercommission/SellerCommission.php");
			
		$commission=new SellerCommission();
		
		$commission->id=0;
		$commission->id_seller=$id_seller;
		$commission->id_currency=$currency->id;
		$commission->sales_amount=0;
		$commission->base_commission=0;
		$commission->range_commission=0;
		$commission->seller_sales=0;
		$commission->payment_txn_id=$pay_desc;
		$commission->memo="Offline Payment";
		$commission->record_type=102;
		$commission->record_balance=-$paid_amt;
		$commission->balance=0;
		$commission->save();
		
		
		$sql =  
			"
				UPDATE ps_seller_commission SET date_add = '".pSQL($date_add)."' WHERE id_seller='".(int)$id_seller."' AND id_seller_commission = '".(int)$commission->id."'
		   ";   
        $result = Db::getInstance()->executeS($sql);
		$originalId=$commission->id;
		
		$sql =  
			"
				SELECT min(id_seller_commission) AS id_seller_commission FROM ps_seller_commission WHERE date_add>='".$date_add."' AND id_seller_commission >0 
		   ";   
		$result = Db::getInstance()->executeS($sql);
		if (sizeof($result)>0){
			$oneResult=$result[0];
			$minId=$oneResult['id_seller_commission'];
			if ($minId > 1000){
				Db::getInstance()->executeS("LOCK TABLE ps_seller_commission ;");
				Db::getInstance()->executeS("ALTER TABLE ps_seller_commission CHANGE COLUMN id_seller_commission id_seller_commission INT NOT NULL;");
				Db::getInstance()->executeS("ALTER TABLE ps_seller_commission DROP PRIMARY KEY;");

				Db::getInstance()->executeS("UPDATE ps_seller_commission SET id_seller_commission=id_seller_commission+1 WHERE id_seller_commission >= $minId");
				Db::getInstance()->executeS("ALTER TABLE ps_seller_commission ADD PRIMARY KEY (id_seller_commission);");
				Db::getInstance()->executeS("ALTER TABLE ps_seller_commission CHANGE COLUMN id_seller_commission id_seller_commission INT AUTO_INCREMENT;");
				
				$sql =  
					"
						UPDATE ps_seller_commission SET id_seller_commission = ".$minId." WHERE id_seller_commission = '".($originalId+1)."'
				   ";   
				$result = Db::getInstance()->executeS($sql);
				$originalId=$minId;
				Db::getInstance()->executeS("UNLOCK TABLE ps_seller_commission ;");
			}
		}
		
		$sql =  
			"
				SELECT id_seller_commission FROM ps_seller_commission WHERE id_seller='".$id_seller."' AND id_seller_commission>=".$originalId." ORDER BY date_ADD ASC
		   ";   
        $result = Db::getInstance()->executeS($sql);
		foreach($result as $r)
		{
			SellerCommission::updateBalance($id_seller,$r['id_seller_commission']);
		}
		
		echo "OK";
	}
	
    public function submitZoomShipment() 
    {
		
        $zoomURL = Configuration::get('ENLINEA_ZOOM_SEND_SHIPMENT_URL');
        $zoomVendorID = Configuration::get('ENLINEA_ZOOM_VENDOR_API');
        $zoomVendorID_S = Configuration::get('ENLINEA_ZOOM_VENDOR_API_S');
        $zoomVendorID_M = Configuration::get('ENLINEA_ZOOM_VENDOR_API_M');
        $zoomVendorID_L = Configuration::get('ENLINEA_ZOOM_VENDOR_API_L');

		if ($zoomURL)
			$url=$zoomURL;
		else
			$url="http://zoom.trus.co.id/api/zoomapi.php";
		
		
		$reference=Tools::getValue("reference");
		$DeliveryDate=Tools::getValue("DeliveryDate");
		$DeliveryPickUpAdd=Tools::getValue("DeliveryPickUpAdd");
		$DeliverySize=Tools::getValue("DeliverySize");
		$DeliveryInstruction=Tools::getValue("DeliveryInstruction");
		$DeliveryShift=Tools::getValue("DeliveryShift");
		
		if (!$DeliverySize)
			$DeliverySize='M';
		if (!$reference)
			$reference='JINVYRWGY';
		if (!$DeliveryShift)
			$DeliveryShift=2;
		
		if (!$DeliveryDate){
			$DeliveryDate = date('Y-m-d');
		}
		
		$DeliveryDateNew=str_ireplace("-","",$DeliveryDate);
		
		switch($DeliveryPickUpAdd){
			case 2:
				$PickupName='Lizz';
				$PickupPhone='+011-36662663';
				$PickupAddress='12, Jalan TK 2/1c, Taman Kinrara, Puchong, Selangor';
				$PickupDetail='';
				$PickupCity='Puchong';
				$PickupPostalCode=47100;
				$PickupCountry='Malaysia';
				break;
			case 3:
				$PickupName='KEDAI UBAT & RUNCIT JIN CHEONG-Ah Loong';
				$PickupPhone='+603 8949 9174';
				$PickupAddress='8, Jalan BS 5/26, Taman Bukit Serdang, Seri Kembangan, Selangor';
				$PickupDetail='';
				$PickupCity='Seri Kembangan';
				$PickupPostalCode=43300;
				$PickupCountry='Malaysia';
				break;
				
			case 4:
				$PickupName='Wedding.com.my (HANA)';
				$PickupPhone='+603-27214870';
				$PickupAddress='72A Jalan Universiti,46200 Petaling Jaya, Selangor';
				$PickupDetail='BLOCK H-89-1 ';
				$PickupCity='Petaling Jaya';
				$PickupPostalCode=46200;
				$PickupCountry='Malaysia';
			
			case 5:
				$PickupName='Pharma Ace (CHRIS)';
				$PickupPhone='+010-2321078';
				$PickupAddress='22, Jalan PJU 3/46, Sunway Damansara, 47810 Petaling Jaya, Selangor';
				$PickupDetail='';
				$PickupCity='Petaling Jaya';
				$PickupPostalCode=47810;
				$PickupCountry='Malaysia';
				
			default:
				$PickupName='Motherhood.com.my (EE-MUN)';
				$PickupPhone='+603-27214870';
				$PickupAddress='72A Jalan Universiti,46200 Petaling Jaya, Selangor';
				$PickupDetail='100.5.049, 129 Offices, Block J, Jaya One';
				$PickupCity='Petaling Jaya';
				$PickupPostalCode=46200;
				$PickupCountry='Malaysia';
		}
		
		
		switch($DeliverySize){
			case 'S':
				if ($zoomVendorID_S)
					$vendor=$zoomVendorID_S;
				else
					$vendor="93f271ad5efd7ea64a800c9acfe0b34fc19f58e3";
				break;
			case 'M':
				if ($zoomVendorID_M)
					$vendor=$zoomVendorID_M;
				else
					$vendor="918fc64d3247435e25e80875ecaa5b39e3ed48c2";
				break;
			case 'L':
				if ($zoomVendorID_L)
					$vendor=$zoomVendorID_L;
				else
					$vendor="e1c03d2c445ffd0b7d000b732c8108a2e9145245";
				break;
			default:
				$DeliverySize='M';
				if ($zoomVendorID)
					$vendor=$zoomVendorID;
				else
					$vendor="d2578a848888259fc29e19f4770e0f27690a02ea";
				break;
		}
		
		
		
		
		/*
		DeliveryShift Valid value :
		'1' = 10:00 – 12:00
		'2' = 12:00 – 15:00
		'3' = 15:00 – 18:00
		'4' = 18:00 – 20:00
		'5' = 20:00 – 22:00
		*/
		
		$sql =  
			"
	 
	SELECT reference, CONCAT(firstname, ' ',lastname) AS delivery_name, CONCAT(address1, ',', address2) AS address,
	city, IF(phone='',phone_mobile,phone) AS phone, postcode, c.name AS countryname, a.id_order ,a.current_state
	 FROM ps_orders a
	JOIN ps_address b ON a.id_address_delivery=b.id_address
	JOIN ps_country_lang c ON b.id_country=c.id_country AND c.id_lang=1
	WHERE a.reference='".pSQL($reference)."'

		   ";       
		   
		   
		$r = Db::getInstance()->getRow($sql);
		
		$sql2 =  
			"
	SELECT SUM(product_weight*product_quantity) AS ttl_weight
	 FROM ps_orders a
	 JOIN ps_order_detail b ON a.id_order=b.id_order
	WHERE a.reference='".pSQL($reference)."'

		   ";       
		   
		   
		$r2 = Db::getInstance()->getRow($sql2);
		
	   
		$reference=$r['reference'];
		$delivery_name=$r['delivery_name'];
		$phone=$r['phone'];
		$address=$r['address'];
		$city=$r['city'];
		$address=$r['address'];
		$postcode=$r['postcode'];
		$countryname=$r['countryname'];
		$order_id=$r['id_order'];
		$weight=$r2['ttl_weight'];
		if (!$weight)
			$weight=0;
		
		$post = [
			'RequestId' => '2',
			'VendorId' => $vendor,
			'TransactionDate'   => $DeliveryDateNew,
			'PickupName'   => $PickupName,
			'PickupPhone'   => $PickupPhone,
			'PickupAddress'   => $PickupAddress,
			'PickupDetail'   => $PickupDetail,
			'PickupCity'   => $PickupCity,
			'PickupPostalCode'   => $PickupPostalCode,
			'PickupCountry'   => $PickupCountry,
			'DeliveryName'   => $delivery_name,
			'DeliveryPhone'   => $phone,
			'DeliveryAddress'   => $address,
			'DeliveryDetail'   => '',
			'DeliveryInstruction'   => $DeliveryInstruction,
			'DeliveryCity'   => $city,
			'DeliveryPostalCode'   => $postcode,
			'DeliveryCountry'   => $countryname,
			'DeliverySize'   => $DeliverySize,
			'OrderReferenceId'   => $reference,
			'DeliveryShift' => $DeliveryShift,
			'Weight' => $weight,
		];
		
		
		

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		// execute!
		$response = curl_exec($ch);

		// close the connection, release resources used
		curl_close($ch);

		// do anything you want with your response
		//print_r($response);
		

		$resultJSON = json_decode($response);
		/*
		

	DROP TABLE IF EXISTS ps_order_shipping_zoom;
	CREATE TABLE `ps_order_shipping_zoom` (
	  `id_order_shipping_zoom` INT(11) NOT NULL AUTO_INCREMENT,
	  `id_order` INT(11) UNSIGNED NOT NULL,
	  `zoom_id` VARCHAR(64) DEFAULT NULL,
	  `zoom_tracking_id` VARCHAR(64) DEFAULT NULL,
	  `zoom_size` VARCHAR(5) DEFAULT NULL,
	  `zoom_instruction` TEXT DEFAULT NULL,
	  `zoom_shift` SMALLINT(2) DEFAULT NULL,
	  `zoom_status` VARCHAR(64) DEFAULT NULL,
	  `zoom_err_msg` TEXT DEFAULT NULL,
	  `date_add` DATETIME NOT NULL,
	  PRIMARY KEY (`id_order_shipping_zoom`),
	  KEY `id_order` (`id_order`)
	) ENGINE=INNODB  DEFAULT CHARSET=utf8
		*/
		
		if ($resultJSON->ZoomOrderId){
			$sql =  
				"
		 INSERT INTO ps_order_shipping_zoom (id_order,zoom_id,zoom_size,zoom_instruction,zoom_shift,zoom_status,zoom_err_msg,date_add, zoom_tracking_id,
		 zoom_delivery_date,zoom_pickup_address)
		 VALUES ($order_id
				,'".$resultJSON->ZoomOrderId."'
				,'".pSQL($DeliverySize)."'
				,'".pSQL($DeliveryInstruction)." Weight:".$weight."'
				,'".pSQL($DeliveryShift)."'
				,'".$resultJSON->StatusRequest."'
				,'".$resultJSON->ErrorMessages."'
				,current_timestamp
				,'".dechex($resultJSON->ZoomOrderId)."'
				,'".$DeliveryDate."'
				,'".$PickupName.")".$PickupAddress."'
				)
			   ";       
			   
			$result=Db::getInstance()->execute($sql);
			 
			if($r['current_state'] == 2 || $r['current_state'] == 3)
				$this->ajaxUpdateOrderStatus(4, $order_id);
			
			$this->updateOrderGDEXTrackingNumber($order_id, dechex($resultJSON->ZoomOrderId),'Zoom');
		
			 return "OK";

		}else{
			print_r($post);
			$msg= "NOT OK: ".$resultJSON->ErrorMessages;
			return $msg.". Please Check Customer Address";
			
		}
	
	}
    
    public function submitGDEXShipment($orderId) 
    {
        $sql = "SELECT A.id_order,A.current_state,A.reference, A.id_customer,".
	                "B.company, B.lastname, B.firstname,". 
                    "B.address1, B.address2,".
                    "B.postcode, B.city,". 
                    "B.phone, B.phone_mobile,".
                    "B.id_state, IFNULL(D.name, '') AS state_name,".
                    "B.id_country, C.name AS country_name ".
                "FROM "._DB_PREFIX_."orders A ".
                "INNER JOIN "._DB_PREFIX_."address B ON A.id_address_delivery = B.id_address ".
                "INNER JOIN "._DB_PREFIX_."country_lang C ON B.id_country = C.id_country AND C.id_lang = 1 ".
                "LEFT JOIN "._DB_PREFIX_."state D ON B.id_state = D.id_state ".
                "where id_order=".(int)$orderId;
        $order = Db::getInstance()->getRow($sql);
        //$accountNo = Configuration::get('ENLINEA_GDEX_ACCOUNT_NO');
        $gdexURL = Configuration::get('ENLINEA_GDEX_SEND_SHIPMENT_URL');
        $pieces = Tools::getValue("pieces");
        $updatestatus = Tools::getValue("updatestatus");
        $weight = Tools::getValue("weight");
        if($weight == "") { $weight = 0; }
        $height = Tools::getValue("height");
        if($height == "") { $height = 0; }
        $width = Tools::getValue("width");
        if($width == "") { $width = 0; }
        $length = Tools::getValue("length");
        if($length == "") { $length = 0; }
        
        //// check still got gdex_cn available
        $gdexCounter = Db::getInstance()->getValue('SELECT COUNT(1) FROM `'._DB_PREFIX_.'gdex_cn` WHERE id_order IS NULL');
        if($gdexCounter == 0) {
            return false;
        }
		
		$getFlashCard = '
			SELECT count(1) AS total_count, sum(IF(product_name LIKE \'Flash Card%\',1,0)) AS total_flash FROM ps_order_detail 
			WHERE  id_order = "'.(int)$orderId.'"
			';
        $resultFlashCard = Db::getInstance()->executeS($getFlashCard);
        $rowFlashCard = $resultFlashCard[0];
		if ($rowFlashCard['total_flash']==$rowFlashCard['total_count']){
			$hasOnlyFlash=true;
		}else
			$hasOnlyFlash=false;
		
        
        Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'gdex_cn` SET id_order='.(int)$orderId.' WHERE id_order IS NULL LIMIT 1');
        $gdexData = Db::getInstance()->getRow('SELECT gdex_cn, gdex_acc FROM `'._DB_PREFIX_.'gdex_cn` WHERE id_order='.(int)$orderId.' ORDER BY id_gdex_cn DESC');
        $gdexCN = $gdexData['gdex_cn'];
        $accountNo = $gdexData['gdex_acc'];
        $data = array();
        
        $data["GdexCN"] = $gdexCN;
        $data["AccountNumber"] = $accountNo;
        $data["ConsignmentDate"] = date("Y-m-d");
        
        $data["Product"] = "00001";
		if ($hasOnlyFlash)
			$data["ShipmentType"] = "D";
		else
			$data["ShipmentType"] = "P";
		
        $data["CODPayment"] = "0.00";
        $data["PickupType"] = "PICKUP";

        $data["Pieces"] = $pieces;
        $data["Weight"] = $weight;
        $data["Height"] = $height;
        $data["Width"] = $width;
        $data["Length"] = $length;
        
        $data["SendingAgentItemNumber"] = $order["id_order"];
        $data["ReferenceID"] = $order["reference"];
        $data["ConsigneeCompany"] = $order["company"];
        $data["ConsigneeName"] = $order["lastname"] ." ". $order["firstname"];
        $data["ConsigneeAddress1"] = $order["address1"];
        $data["ConsigneeAddress2"] = $order["address2"];
        $data["ConsigneeAddress3"] = "";
     
        $data["Town"] = $order["city"];
        
        if($order["state_name"] != "") 
            $data["State"] = $order["state_name"] .", ".$order["country_name"];
        else   
            $data["State"] = $order["country_name"];
            
        $data["Postcode"] = $order["postcode"];
        $data["ConsigneeContactNumber1"] = $order["phone_mobile"];
        $data["ConsigneeContactNumber2"] = $order["phone"];
        
        $data["Remarks"] = "";
        $data["ProductDesc"] = "Reference: ".$order["reference"];

        $result = Tools::GDEXSubmitDelivery($gdexURL, $orderId, $data);
  
        $gdex_status = "";
        $return_status = false;
        
        if($result === true) {
            $gdex_status = "Success";
            $return_status = true;
                
            Db::getInstance()->execute(
                'INSERT `'._DB_PREFIX_.'order_shipping`(id_order, weight, height, width, length, pieces, tracking_number, date_add, date_update,update_order_status)'.
                'VALUES ('.(int)$orderId.','.(float)$weight.','.(float)$height.','.(float)$width.','.(float)$length.','.(float)$pieces.',"'.pSQL($gdexCN).'",NOW(),NOW(), '.$updatestatus.')'
            );
        }
        else if ($result === false) {
            $gdex_status = "Failed";
        }
        else {
            $gdex_status = $result;
        }
        
        $update_sql = 'UPDATE `'._DB_PREFIX_.'gdex_cn` SET status="'.str_replace('"','\"',(string)$gdex_status).'" WHERE id_order='.(int)$orderId.' AND gdex_cn="'.pSQL($gdexCN).'"';
        Db::getInstance()->execute($update_sql);
        
        if($result === true) {
            if($order['current_state'] == 2)
                $this->ajaxUpdateOrderStatus(4, $orderId); 
            
            $this->updateOrderGDEXTrackingNumber($orderId, $gdexCN);
        }
        
        return $return_status;
    }
    
    public function submitDHLShipment($orderId) 
    {
        $sql = "SELECT A.id_order,A.current_state,A.reference,L.def_cat,A.id_customer,M.email AS recipient_email,".
	                "A.payment,A.module,A.total_products_wt,A.total_shipping_tax_incl,A.total_discounts_tax_incl,".
	                "B.company AS recipient_company, B.lastname AS recipient_lastname, B.firstname AS recipient_firstname,".
                    "B.address1 AS recipient_address1, B.address2 AS recipient_address2,".
                    "B.postcode AS recipient_postcode, B.city AS recipient_city,".
                    "B.phone AS recipient_phone, B.phone_mobile AS recipient_mobile,".
                    "B.id_state AS recipient_id_state, IFNULL(D.name, '') AS recipient_state_name,".
                    "B.id_country AS recipient_id_country, C.iso_code AS recipient_country_code,".
                    "IFNULL(J.email,'') AS sender_email,IFNULL(I.company,'') AS sender_company,".
                    "IFNULL(J.firstname,'') AS sender_firstname,IFNULL(J.lastname,'') AS sender_lastname,".
                    "IFNULL(I.address1,'') AS sender_address1, IFNULL(I.address2,'') AS sender_address2,".
                    "IFNULL(F.postcode,'') AS sender_postcode, IFNULL(I.city,'') AS sender_city,".
                    "IFNULL(F.phone,'') AS sender_phone,".
                    "IFNULL(F.id_state,'') AS sender_id_state, IFNULL(H.name, '') AS sender_state_name,".
                    "IFNULL(F.id_country,'') AS sender_id_country, IFNULL(G.iso_code,'') AS sender_country_code,".
                    "IFNULL(K.iso_code,'') AS currency_code,IFNULL(I.ams_custom_text6,'') AS pickup_acc ".
                "FROM "._DB_PREFIX_."orders A ".
                "INNER JOIN "._DB_PREFIX_."customer M ON A.id_customer=M.id_customer ".
                "INNER JOIN ( ".
                    "SELECT GROUP_CONCAT(DISTINCT IFNULL(C.name,A.product_name)) AS def_cat, A.id_order ".
                    "FROM "._DB_PREFIX_."order_detail A ".
                    "LEFT JOIN "._DB_PREFIX_."product B ON A.product_id = B.id_product ".
                    "LEFT JOIN "._DB_PREFIX_."category_lang C ON B.id_category_default=C.id_category and C.id_lang=1 ".
                    "WHERE A.id_order=".(int)$orderId.
                ") L ON A.id_order=L.id_order ".
                "INNER JOIN "._DB_PREFIX_."address B ON A.id_address_delivery = B.id_address ".
                "INNER JOIN "._DB_PREFIX_."country C ON B.id_country = C.id_country ".
                "LEFT JOIN "._DB_PREFIX_."state D ON B.id_state = D.id_state ".
                "LEFT JOIN "._DB_PREFIX_."order_owner E ON A.id_order = E.id_order ".
                "LEFT JOIN "._DB_PREFIX_."sellerinfo F ON E.id_owner = F.id_seller ".
                "LEFT JOIN "._DB_PREFIX_."sellerinfo_lang I ON I.id_sellerinfo = F.id_sellerinfo AND I.id_lang = 1 ".
                "LEFT JOIN "._DB_PREFIX_."country G ON F.id_country = G.id_country ".
                "LEFT JOIN "._DB_PREFIX_."state H ON F.id_state = H.id_state ".
                "LEFT JOIN "._DB_PREFIX_."employee J ON J.id_employee = F.id_seller ".
                "LEFT JOIN "._DB_PREFIX_."currency K ON A.id_currency = K.id_currency ".
                "WHERE A.id_order=".(int)$orderId;

        $order = Db::getInstance()->getRow($sql);

        $DHLURL = Configuration::get(self::$cfg_prefix.'DHL_API_URL');
        $DHLClientId = Configuration::get(self::$cfg_prefix.'DHL_CLIENT_ID');
        $DHLPassword = Configuration::get(self::$cfg_prefix.'DHL_PASSWORD');
        $DHLSoldToAcc = Configuration::get(self::$cfg_prefix.'DHL_SOLDTO_ACC');
        $DHLShipmentPrefix = Configuration::get(self::$cfg_prefix.'DHL_SHIPMENT_PREFIX');
        
        $updatestatus = Tools::getValue("updatestatus");
        $pickupacc = Tools::getValue("pickupacc");
        $weight = Tools::getValue("weight");
		if ($pickupacc)
			$order['pickup_acc'] = $pickupacc;
		
		
        if($weight == "") { $weight = 0; }
        
        if (!class_exists('DHL')) {
            include(dirname(__FILE__).'/DHL/DHL.php');
        }
 
        $dhl = new DHL($DHLClientId, $DHLPassword, $DHLSoldToAcc, $DHLShipmentPrefix, $DHLURL);
        $dhl->getAccessToken();

        Db::getInstance()->execute(
            'INSERT `'._DB_PREFIX_.'order_shipping_dhl`(id_order,pickup_acc, weight, tracking_number, date_add, date_update,update_order_status)'.
            'VALUES ('.(int)$orderId.',"'.pSQL($order['pickup_acc']).'",'.(float)$weight.',"",NOW(),NOW(),'.$updatestatus.')'
        );
        
        $id_shipping = Db::getInstance()->Insert_ID(); 
        $height = 0; 
        $width = 0; 
        $length = 0;
        
        $returnResult = $dhl->shippingLabel($order, $id_shipping, $DHLShipmentPrefix, $weight, $height, $width, $length);
        
        if($returnResult['valid'] === true) {
            if($order['current_state'] == 2)
                $this->ajaxUpdateOrderStatus(4, $orderId);
            
            $this->updateOrderGDEXTrackingNumber($orderId, $returnResult['tracking'], "DHL");
        }else if(isset($returnResult['errorMsg'])){
			echo $returnResult['errorMsg'];
			
		}
        
        return $returnResult['valid'];
    } 
    
    public function cronUpdateDHLTrackingNumber() {
        $sql = "SELECT A.id_order_shipping, A.id_order, A.pickup_acc, A.tracking_number, A.deliveryConfirmationNo FROM "._DB_PREFIX_."order_shipping_dhl A ".
                "INNER JOIN "._DB_PREFIX_."orders B ON A.id_order = B.id_order WHERE B.current_state IN (3,4) AND A.tracking_number <> ''";
        
        $result = Db::getInstance()->executeS($sql);
      
        if($result && count($result) > 0) 
        {
            $DHLURL = Configuration::get(self::$cfg_prefix.'DHL_API_URL');
            $DHLClientId = Configuration::get(self::$cfg_prefix.'DHL_CLIENT_ID');
            $DHLPassword = Configuration::get(self::$cfg_prefix.'DHL_PASSWORD');
            $DHLSoldToAcc = Configuration::get(self::$cfg_prefix.'DHL_SOLDTO_ACC');
            $DHLShipmentPrefix = Configuration::get(self::$cfg_prefix.'DHL_SHIPMENT_PREFIX');
        
            if (!class_exists('DHL')) {
                include(dirname(__FILE__).'/DHL/DHL.php');
            }
        
            $dhl = new DHL($DHLClientId, $DHLPassword, $DHLSoldToAcc, $DHLShipmentPrefix, $DHLURL);
            $dhl->getAccessToken();

            foreach($result as $r)
            {
                $returnResult = $dhl->getTracking($r["tracking_number"], $r["pickup_acc"]);
                print_r("Tracking #:".$r["tracking_number"]);
                print_r($returnResult);
                print_r("<br />");
                if($returnResult['valid']) 
                {
                    $update_sql = 'UPDATE `'._DB_PREFIX_.'order_shipping_dhl` '.
                                    'SET status="'.$returnResult['tracking']['status'].'"'.
                                        ',status_desc="'.$returnResult['tracking']['description'].'"'.
                                        ',status_date="'.$returnResult['tracking']['dateTime'].'"'.
                                        ',date_update="'.date('Y-m-d H:i:s').'" '.
                                    'WHERE id_order_shipping='.$r['id_order_shipping'];
                    Db::getInstance()->execute($update_sql);
                }
            }
        }

        $sql = "SELECT A.id_order, B.payment, SUM(CASE WHEN A.status='77093' THEN 1 ELSE 0 END) delivered, COUNT(1) AS shipped, MAX(status_date) AS status_date ".
                    "FROM "._DB_PREFIX_."order_shipping_dhl A ".
                    "INNER JOIN "._DB_PREFIX_."orders B ON A.id_order = B.id_order ".
                    "WHERE A.update_order_status=1 AND B.current_state IN (3,4) ".
                    "AND tracking_number IS NOT NULL AND tracking_number <> '' ".
                    "GROUP BY A.id_order";
        $result = Db::getInstance()->executeS($sql);
 
        print_r("<br />Check for delivered order<br />");
        foreach($result as $r) {
            print_r("Order Id:".$r["id_order"]. "|Shipped count:".$r['shipped']."|Delivered count:".$r['delivered']."|Delivered date:".$r['status_date']);
            print_r("<br />");
            
            if($r['delivered'] == $r['shipped'])
            {
                if($r['payment'] == DHL::$codString) {
                    $this->ajaxUpdateOrderStatus(2, $r['id_order'], $r['status_date']);
                }
                
                $this->ajaxUpdateOrderStatus(5, $r['id_order'], $r['status_date']);
            }
        }
    }
    
    public function updateOrderGDEXTrackingNumber($orderId, $tracking_number,$prefix='') 
    {
		if ($prefix)
			$tracking_number = $prefix.": ". $tracking_number;
		else
			$tracking_number = "GDEX: ". $tracking_number;
        $id_order_carrier = Db::getInstance()->getValue('SELECT id_order_carrier FROM `'._DB_PREFIX_.'order_carrier` WHERE id_order='. (int)$orderId);
        $order_carrier = new OrderCarrier($id_order_carrier);
  
        if (Validate::isLoadedObject($order_carrier))
        {
            $order = new Order($orderId); 
			$oldShippingNumber=$order->shipping_number;
            $order->shipping_number = ($order->shipping_number == "" || $order->shipping_number == null) ? $tracking_number : $order->shipping_number.",".$tracking_number;
		    $order->update();

		    // Update order_carrier
		    $order_carrier->tracking_number = ($order_carrier->tracking_number == "" || $order_carrier->tracking_number == null) ? pSQL($tracking_number) 
                            : $order_carrier->tracking_number.",".pSQL($tracking_number);
		    if ($order_carrier->update() && trim($oldShippingNumber)=='' && !($oldShippingNumber == $tracking_number) )
		    {
                // Send mail to customer
			    $customer = new Customer((int)$order->id_customer);
			    $carrier = new Carrier((int)$order->id_carrier, $order->id_lang);
			    if (!Validate::isLoadedObject($customer))
				    return;
			    if (!Validate::isLoadedObject($carrier))
				    return;
			    $templateVars = array(
				    '{followup}' => str_replace('@', $order->shipping_number, $carrier->url),
				    '{firstname}' => $customer->firstname,
				    '{lastname}' => $customer->lastname,
				    '{id_order}' => $order->id,
				    '{shipping_number}' => $order->shipping_number,
				    '{order_name}' => $order->getUniqReference()
			    );
							
			    require_once("SMSHelper.php"); 
							
			    $addresses = $customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
							
			    foreach ($addresses as $address)
			    {
				    $obj = new Address((int)$address['id_address']);

				    if ($obj->phone_mobile)
					    $smsPhone=$obj->phone_mobile;
				    else 
				    if ($obj->phone)
					    $smsPhone=$obj->phone;
				    $smsPhone = str_ireplace("+","",$smsPhone);
				    $smsPhone = str_ireplace("-","",$smsPhone);
				    $result=SMSHelper::sendTemplate( "sms-in-transit",$smsPhone,array( 'OrderID' => $order->getUniqReference(),'Shipping_Number' => $order->shipping_number ));
								
				    break;
			    }
							
			    if (@Mail::Send((int)$order->id_lang, 'in_transit', Mail::l('Package in transit', (int)$order->id_lang), $templateVars,
				    $customer->email, $customer->firstname.' '.$customer->lastname, null, null, null, null,
				    _PS_MAIL_DIR_, true, (int)$order->id_shop))
			    {
				    Hook::exec('actionAdminOrdersTrackingNumberUpdate', array('order' => $order, 'customer' => $customer, 'carrier' => $carrier), null, false, true, false, $order->id_shop);
			    }
            }
        }
    }
    
    public function cronUpdateGDEXTrackingNumber() {
        $sql = "SELECT A.id_order_shipping, A.id_order, A.tracking_number FROM "._DB_PREFIX_."order_shipping A ".
                "INNER JOIN "._DB_PREFIX_."orders B ON A.id_order = B.id_order WHERE B.current_state IN (3,4)";
        
        $result = Db::getInstance()->executeS($sql);
        $gdexTrackURL = Configuration::get('ENLINEA_GDEX_TRACK_SHIPMENT_URL');
 
        foreach($result as $r)
        {
            $tempURL = str_replace("{GDEXCN}", $r["tracking_number"],$gdexTrackURL);
            $response = Tools::GDEXTrackDelivery($tempURL, $r["id_order"], $r["tracking_number"] ); 
            
            print_r("Tracking #:".$r["tracking_number"]);
            print_r($response);
            print_r("<br />");
            if($response !== false) {
                $update_sql = 'UPDATE `'._DB_PREFIX_.'order_shipping` '.
                                'SET status="'.$response['r']['StatusCode'].'"'.
                                    ',status_date="'.$response['r']['StatusDateTime'].'"'.
                                    ',date_update="'.date('Y-m-d H:i:s').'" '.
                                'WHERE id_order_shipping='.$r['id_order_shipping'];
                Db::getInstance()->execute($update_sql);
            }
        }
            
        $sql = "SELECT A.id_order, SUM(CASE WHEN A.status='FD' THEN 1 ELSE 0 END) delivered, COUNT(1) AS shipped, MAX(status_date) AS status_date ".
                    "FROM "._DB_PREFIX_."order_shipping A ".
                    "INNER JOIN "._DB_PREFIX_."orders B ON A.id_order = B.id_order ".
                    "WHERE A.update_order_status=1 AND B.current_state IN (3,4) ".
                    "GROUP BY A.id_order";
					
        $result = Db::getInstance()->executeS($sql);
 
        print_r("<br />Check for delivered order<br />");
        foreach($result as $r) {
            print_r("Order Id:".$r["id_order"]. "|Shipped count:".$r['shipped']."|Delivered count:".$r['delivered']."|Delivered date:".$r['status_date']);
            print_r("<br />");
            
            if($r['delivered'] == $r['shipped'])
            {
				echo "<br>updating to delivered ".$r['id_order']." start";
                $this->ajaxUpdateOrderStatus(5, $r['id_order'], $r['status_date']);
				echo "<br>updating to delivered ".$r['id_order']." done";
            }
        }
    }
	
    public function cronUpdateZoomTrackingNumber() {
		echo "start";
        $sql = "SELECT A.id_order_shipping_zoom, A.id_order, A.zoom_id, A.zoom_tracking_id, A.zoom_size,current_timestamp  FROM "._DB_PREFIX_."order_shipping_zoom A ".
                "INNER JOIN "._DB_PREFIX_."orders B ON A.id_order = B.id_order WHERE B.current_state IN (3,4)";
        echo $sql;
		
        $zoomURL = Configuration::get('ENLINEA_ZOOM_SEND_SHIPMENT_URL');
        $zoomVendorID = Configuration::get('ENLINEA_ZOOM_VENDOR_API');
        $zoomVendorID_S = Configuration::get('ENLINEA_ZOOM_VENDOR_API_S');
        $zoomVendorID_M = Configuration::get('ENLINEA_ZOOM_VENDOR_API_M');
        $zoomVendorID_L = Configuration::get('ENLINEA_ZOOM_VENDOR_API_L');
		
		if ($zoomURL)
			$url=$zoomURL;
		else
			$url="http://zoom.trus.co.id/api/zoomapi.php";
		
        $result = Db::getInstance()->executeS($sql);
        $gdexTrackURL = Configuration::get('ENLINEA_GDEX_TRACK_SHIPMENT_URL');
 
        foreach($result as $r)
        {
			
			switch($r["zoom_size"]){
				case 'S':
					if ($zoomVendorID_S)
						$vendor=$zoomVendorID_S;
					else
						$vendor="93f271ad5efd7ea64a800c9acfe0b34fc19f58e3";
					break;
				case 'M':
					if ($zoomVendorID_M)
						$vendor=$zoomVendorID_M;
					else
						$vendor="918fc64d3247435e25e80875ecaa5b39e3ed48c2";
					break;
				case 'L':
					if ($zoomVendorID_L)
						$vendor=$zoomVendorID_L;
					else
						$vendor="e1c03d2c445ffd0b7d000b732c8108a2e9145245";
					break;
				default:
					$DeliverySize='M';
					if ($zoomVendorID)
						$vendor=$zoomVendorID;
					else
						$vendor="d2578a848888259fc29e19f4770e0f27690a02ea";
					break;
			}
			
			
			$post = [
				'RequestId' => '3',
				'VendorId' => $vendor,
				'ZoomOrderId' => trim($r["zoom_id"]),
			];
			
			print_r($post);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

			// execute!
			$response = curl_exec($ch);

			// close the connection, release resources used
			curl_close($ch);

			// do anything you want with your response
			//print_r($response);
			

			$resultJSON = json_decode($response);
			
            
            print_r("Tracking #:".$r["tracking_number"]);
            print_r($resultJSON);
			
			if ($resultJSON->OrderStatus==3){
                $this->ajaxUpdateOrderStatus(5, $r['id_order'], $r['current_timestamp']);
			}
            print_r("<br />");
        }
    }
	
    
    public function ajaxCartBeforePayment($cartId, $deliveryId) 
    {
        if($cartId > 0 && $deliveryId > 0) {
            $sql = 'UPDATE `'._DB_PREFIX_.'cart` SET id_address_delivery='.(int)$deliveryId.' WHERE id_cart='.(int)$cartId;
            Db::getInstance()->execute($sql);
            
            $sql = 'UPDATE `'._DB_PREFIX_.'cart_product` SET id_address_delivery='.(int)$deliveryId.' WHERE id_cart='.(int)$cartId;
            Db::getInstance()->execute($sql);
        }
        
        //// log cart's products and cart's cartrule
        $cart = new Cart($cartId);
        $cart->logCartProduct();
        
        return true;
    }
    
    public function ajaxUpdateOrderStatus($id_order_state, $orderId, $deliveryDate = null) 
    {
        $order = new Order($orderId);
		$thisEmpId=1;
        
        if($this->context && isset($this->context)) {
            if($this->context->employee && isset($this->context->employee) && $this->context->employee->id > 0) {
                $thisEmpId = $this->context->employee->id;
            }
            else if($this->context->customer && isset($this->context->customer) && $this->context->customer->id > 0) {
                $thisCust=$this->context->customer->email;
		        $tempEmp = new Employee();
                $tempEmp=$tempEmp->getByEmail($thisCust);
                
                if ($tempEmp)
		            $thisEmpId=(int)$tempEmp->id;
            }
        }
        
        if (Validate::isLoadedObject($order)) {
            $new_history = new OrderHistory();
		    $new_history->id_order = (int)$orderId;
            $new_history->id_employee = $thisEmpId;
            $new_history->changeIdOrderState((int)$id_order_state, $order, false, $deliveryDate);
            if($deliveryDate == null) {
                $new_history->addWithemail(true, false);
            }
            else {
                $new_history->date_add = $deliveryDate;
                $new_history->addWithemail(false, false);
            }
        }
    }
    
    public function ajaxISISUpdateTrackingNumber()
    {
        $orderTrackingList = $this->getOrderTrackingList();
        
        if($orderTrackingList != null && count($orderTrackingList) > 0) {
            foreach($orderTrackingList as $o) {
                if($o['current_state'] != 3) 
                {
                    $remark = "OrderId=".$o["id_order"]."|CurrentStatus=".$o["current_state"];
                    $sql = "UPDATE `". _DB_PREFIX_ ."order_isis_tracking` ".
                            "SET recStatus=-2,".
                            "remarks='".$remark."' ".
                            "WHERE recStatus=1 AND dealOrderId='".$o["reference"]."' ".
                            "AND courierServiceNo='".$o["courierServiceNo"]."' ".
                            "AND trackingCode='".$o["trackingCode"]."'";
                    Db::getInstance(_PS_USE_SQL_SLAVE_)->Execute($sql);
                    print_r("Invalid Order Status.".$remark."<br /><br />");
                }
                else 
                {
                    $order_carrier = new OrderCarrier($o["id_order_carrier"]);
				    $tracking_number = $o["courierServiceNo"]." : ".$o["trackingCode"];
                
                    if (!Validate::isLoadedObject($order_carrier))
					    print_r('The order carrier ID is invalid.<br /><br />');
                    elseif (!Validate::isTrackingNumber($tracking_number))
					    print_r('The tracking number is incorrect.<br /><br />');
				    else
				    {
					    // update shipping number
					    // Keep these two following lines for backward compatibility, remove on 1.6 version
					    $order = new Order($o["id_order"]);
						$oldShippingNumber=$order->shipping_number;
                        $order->shipping_number = ($order->shipping_number == "" || $order->shipping_number == null) ? $tracking_number 
                                        : $order->shipping_number.",".$tracking_number;
					    $order->update();

					    // Update order_carrier
					    $order_carrier->tracking_number = ($order_carrier->tracking_number == "" || $order_carrier->tracking_number == null) ? pSQL($tracking_number) 
                                        : $order_carrier->tracking_number.",".pSQL($tracking_number);
					    if ($order_carrier->update())
					    {
                            if($order->current_state == 3) {
                                $this->ajaxUpdateOrderStatus(4, $o["id_order"]);
                            }
                            
                            $sql = "UPDATE `". _DB_PREFIX_ ."order_isis_tracking` ".
                                "SET recStatus=2 ".
                                "WHERE recStatus=1 AND dealOrderId='".$o["reference"]."' ".
                                "AND courierServiceNo='".$o["courierServiceNo"]."' ".
                                "AND trackingCode='".$o["trackingCode"]."'";
                            Db::getInstance(_PS_USE_SQL_SLAVE_)->Execute($sql);
                            
						    // Send mail to customer
						    $customer = new Customer((int)$order->id_customer);
						    $carrier = new Carrier((int)$order->id_carrier, $order->id_lang);
						    if (!Validate::isLoadedObject($customer))
							    print_r('Can\'t load Customer object<br /><br />');
						    if (!Validate::isLoadedObject($carrier))
							    print_r('Can\'t load Carrier object<br /><br />');
						    $templateVars = array(
							    '{followup}' => str_replace('@', $order->shipping_number, $carrier->url),
							    '{firstname}' => $customer->firstname,
							    '{lastname}' => $customer->lastname,
							    '{id_order}' => $order->id,
							    '{shipping_number}' => $order->shipping_number,
							    '{order_name}' => $order->getUniqReference()
						    );
							
							
							if (trim($oldShippingNumber)==''){
								require_once("SMSHelper.php");
								
								$addresses = $customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
								
								foreach ($addresses as $address)
								{
									$obj = new Address((int)$address['id_address']);

									if ($obj->phone_mobile)
										$smsPhone=$obj->phone_mobile;
									else 
									if ($obj->phone)
										$smsPhone=$obj->phone;
									$smsPhone = str_ireplace("+","",$smsPhone);
									$smsPhone = str_ireplace("-","",$smsPhone);
									$result=SMSHelper::sendTemplate( "sms-in-transit",$smsPhone,array( 'OrderID' => $order->getUniqReference(),'Shipping_Number' => $order->shipping_number ));
									
									break;
								}
								
								
								if (@Mail::Send((int)$order->id_lang, 'in_transit', Mail::l('Package in transit', (int)$order->id_lang), $templateVars,
									$customer->email, $customer->firstname.' '.$customer->lastname, null, null, null, null,
									_PS_MAIL_DIR_, true, (int)$order->id_shop))
								{
									Hook::exec('actionAdminOrdersTrackingNumberUpdate', array('order' => $order, 'customer' => $customer, 'carrier' => $carrier), null, false, true, false, $order->id_shop);
								}
								else
									print_r('An error occurred while sending an email to the customer.<br /><br />');
							}
					    }
					    else
						    print_r('The order carrier cannot be updated.<br /><br />');
				    }
                }
            }
        }
    }
    
    private function getOrderTrackingList() {
        //// check is the cart exist in the order
        $sql = 'SELECT DISTINCT A.id_order, B.courierServiceNo, B.trackingCode, C.id_order_carrier, A.reference, A.current_state '.
                'FROM `'. _DB_PREFIX_ .'orders` A '.
                'INNER JOIN `'. _DB_PREFIX_ .'order_isis_tracking` B ON A.reference=B.dealOrderId '.
                'INNER JOIN `'. _DB_PREFIX_ .'order_carrier` C ON A.id_order = C.id_order '.
                'WHERE B.recStatus = 1';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);
       
        $orderTrackingList = array();
	    foreach ($result as $row)
			$orderTrackingList[] = $row;
		
        return $orderTrackingList;
    }
    
    public function sendOrderSuccessEmail($id_order, $type)
	{
        $order = new Order($id_order);
   	
		$cart = new Cart($order->id_cart);
        $products = $cart->getProducts();
        $currency = new Currency($order->id_currency);

	    if (isset($order->id))
		{
			// Construct order detail table for the email
			$products_list = '';
			$virtual_product = true;

			$product_var_tpl_list = array();
			foreach ($products as $product)
			{
				$price = Product::getPriceStatic((int)$product['id_product'], false, ($product['id_product_attribute'] ? (int)$product['id_product_attribute'] : null), 6, null, false, true, $product['cart_quantity'], false, (int)$order->id_customer, (int)$order->id_cart, (int)$order->{Configuration::get('PS_TAX_ADDRESS_TYPE')});
				$price_wt = Product::getPriceStatic((int)$product['id_product'], true, ($product['id_product_attribute'] ? (int)$product['id_product_attribute'] : null), 2, null, false, true, $product['cart_quantity'], false, (int)$order->id_customer, (int)$order->id_cart, (int)$order->{Configuration::get('PS_TAX_ADDRESS_TYPE')});
				$product_price = Product::getTaxCalculationMethod() == PS_TAX_EXC ? Tools::ps_round($price, 2) : $price_wt;

				$product_var_tpl = array(
					'reference' => $product['reference'],
					'name' => $product['name'].(isset($product['attributes']) ? ' - '.$product['attributes'] : ''),
					'unit_price' => Tools::displayPrice($product_price, $currency, false),
					'price' => Tools::displayPrice($product_price * $product['quantity'], $currency, false),
					'quantity' => $product['quantity'],
					'customization' => array()
				);

				$customized_datas = Product::getAllCustomizedDatas((int)$order->id_cart);
				if (isset($customized_datas[$product['id_product']][$product['id_product_attribute']]))
				{
					$product_var_tpl['customization'] = array();
					foreach ($customized_datas[$product['id_product']][$product['id_product_attribute']][$order->id_address_delivery] as $customization)
					{
						$customization_text = '';
						if (isset($customization['datas'][Product::CUSTOMIZE_TEXTFIELD]))
							foreach ($customization['datas'][Product::CUSTOMIZE_TEXTFIELD] as $text)
								$customization_text .= $text['name'].': '.$text['value'].'<br />';

                        if (isset($customization['datas'][Product::CUSTOMIZE_FILE]))
							$customization_text .= sprintf(Tools::displayError('%d image(s)'), count($customization['datas'][Product::CUSTOMIZE_FILE])).'<br />';

						$customization_quantity = (int)$product['customization_quantity'];

						$product_var_tpl['customization'][] = array(
							'customization_text' => $customization_text,
							'customization_quantity' => $customization_quantity,
							'quantity' => Tools::displayPrice($customization_quantity * $product_price, $currency, false)
						);
					}
				}

				$product_var_tpl_list[] = $product_var_tpl;
				// Check if is not a virutal product for the displaying of shipping
				if (!$product['is_virtual'])
					$virtual_product &= false;

			} // end foreach ($products)

			$product_list_txt = '';
			$product_list_html = '';
			if (count($product_var_tpl_list) > 0)
			{
				$product_list_txt = $this->getEmailTemplateContent('order_conf_product_list.txt', Mail::TYPE_TEXT, $product_var_tpl_list);
				$product_list_html = $this->getEmailTemplateContent('order_conf_product_list.tpl', Mail::TYPE_HTML, $product_var_tpl_list);
			}
            
            $cart_rules = $cart->getCartRules();
			$cart_rules_list = array();
			$total_reduction_value_ti = 0;
			$total_reduction_value_tex = 0;
			foreach ($cart_rules as $cart_rule)
			{
                $package = array('id_carrier' => $order->id_carrier, 'id_address' => $order->id_address_delivery, 'products' => $order->product_list);
	            $values = array(
					'tax_incl' => $cart_rule['obj']->getContextualValue(true, $this->context, CartRule::FILTER_ACTION_ALL_NOCAP, $package),
					'tax_excl' => $cart_rule['obj']->getContextualValue(false, $this->context, CartRule::FILTER_ACTION_ALL_NOCAP, $package)
				);
				
				$cart_rules_list[] = array(
					'voucher_name' => $cart_rule['obj']->name,
					'voucher_reduction' => ($values['tax_incl'] != 0.00 ? '-' : '').Tools::displayPrice($values['tax_incl'], $currency, false)
				);
			}

			$cart_rules_list_txt = '';
			$cart_rules_list_html = '';
			if (count($cart_rules_list) > 0)
			{
				$cart_rules_list_txt = $this->getEmailTemplateContent('order_conf_cart_rules.txt', Mail::TYPE_TEXT, $cart_rules_list);
				$cart_rules_list_html = $this->getEmailTemplateContent('order_conf_cart_rules.tpl', Mail::TYPE_HTML, $cart_rules_list);
			}
				
			// Send an e-mail to customer (one order = one email)
			if ($order->id_customer)
			{
                $customer = new Customer((int)($order->id_customer));
                $carrier = new Carrier($order->id_carrier, $cart->id_lang);
				$invoice = new Address($order->id_address_invoice);
				$delivery = new Address($order->id_address_delivery);
				$delivery_state = $delivery->id_state ? new State($delivery->id_state) : false;
				$invoice_state = $invoice->id_state ? new State($invoice->id_state) : false;

				$data = array(
			    	'{firstname}' => $customer->firstname,
				    '{lastname}' => $customer->lastname,
				    '{email}' => $customer->email,
					'{delivery_block_txt}' => $this->_getFormatedAddress($delivery, "\n"),
					'{invoice_block_txt}' => $this->_getFormatedAddress($invoice, "\n"),
					'{delivery_block_html}' => $this->_getFormatedAddress($delivery, '<br />', array(
						'firstname'	=> '<span style="font-weight:bold;">%s</span>',
						'lastname'	=> '<span style="font-weight:bold;">%s</span>'
					)),
					'{invoice_block_html}' => $this->_getFormatedAddress($invoice, '<br />', array(
							'firstname'	=> '<span style="font-weight:bold;">%s</span>',
							'lastname'	=> '<span style="font-weight:bold;">%s</span>'
					)),
					'{delivery_company}' => $delivery->company,
					'{delivery_firstname}' => $delivery->firstname,
					'{delivery_lastname}' => $delivery->lastname,
					'{delivery_address1}' => $delivery->address1,
					'{delivery_address2}' => $delivery->address2,
					'{delivery_city}' => $delivery->city,
					'{delivery_postal_code}' => $delivery->postcode,
					'{delivery_country}' => $delivery->country,
					'{delivery_state}' => $delivery->id_state ? $delivery_state->name : '',
					'{delivery_phone}' => ($delivery->phone) ? $delivery->phone : $delivery->phone_mobile,
					'{delivery_other}' => $delivery->other,
					'{invoice_company}' => $invoice->company,
					'{invoice_vat_number}' => $invoice->vat_number,
					'{invoice_firstname}' => $invoice->firstname,
					'{invoice_lastname}' => $invoice->lastname,
					'{invoice_address2}' => $invoice->address2,
					'{invoice_address1}' => $invoice->address1,
					'{invoice_city}' => $invoice->city,
					'{invoice_postal_code}' => $invoice->postcode,
					'{invoice_country}' => $invoice->country,
					'{invoice_state}' => $invoice->id_state ? $invoice_state->name : '',
					'{invoice_phone}' => ($invoice->phone) ? $invoice->phone : $invoice->phone_mobile,
					'{invoice_other}' => $invoice->other,
					'{order_name}' => $order->getUniqReference(),
					'{order_id}' => $order->id,
                    '{date}' => Tools::displayDate(date('Y-m-d H:i:s'), null, 1),
					'{carrier}' => ($virtual_product || !isset($carrier->name)) ? Tools::displayError('No carrier') : $carrier->name,
					'{payment}' => Tools::substr($order->payment, 0, 32),
					'{products}' => $product_list_html,
					'{products_txt}' => $product_list_txt,
					'{discounts}' => $cart_rules_list_html,
					'{discounts_txt}' => $cart_rules_list_txt,
					'{total_paid}' => Tools::displayPrice($order->total_paid, $currency, false),
					'{total_products}' => Tools::displayPrice($order->total_paid - $order->total_shipping - $order->total_wrapping + $order->total_discounts, $currency, false),
					'{total_discounts}' => Tools::displayPrice($order->total_discounts, $currency, false),
					'{total_shipping}' => Tools::displayPrice($order->total_shipping, $currency, false),
					'{total_wrapping}' => Tools::displayPrice($order->total_wrapping, $currency, false),
					'{total_tax_paid}' => Tools::displayPrice(($order->total_products_wt - $order->total_products) + ($order->total_shipping_tax_incl - $order->total_shipping_tax_excl), $currency, false));

				if (is_array($extra_vars))
					$data = array_merge($data, $extra_vars);

					// Join PDF invoice
				if ((int)Configuration::get('PS_INVOICE') && $order->invoice_number)
				{
					$pdf = new PDF($order->getInvoicesCollection(), PDF::TEMPLATE_INVOICE, $this->context->smarty);
					$file_attachement['content'] = $pdf->render(false);
					$file_attachement['name'] = Configuration::get('PS_INVOICE_PREFIX', (int)$order->id_lang, null, $order->id_shop).sprintf('%06d', $order->invoice_number).'.pdf';
					$file_attachement['mime'] = 'application/pdf';
					
					$pdfVendor = new PDF($order->getInvoicesCollection(), PDF::TEMPLATE_VENDOR_PACKING, $this->context->smarty);
					$file_attachementVendor['content'] = $pdfVendor->render(false);
					$file_attachementVendor['name'] = Configuration::get('PS_INVOICE_PREFIX', (int)$order->id_lang, null, $order->id_shop).sprintf('%06d', $order->invoice_number).'.pdf';
					$file_attachementVendor['mime'] = 'application/pdf';
				}
				else{
					$file_attachement = null;
					$file_attachementVendor=null;
				}

     //           if (Validate::isEmail($customer->email))
					//Mail::Send(
					//	(int)$order->id_lang,
					//	'order_conf',
					//	Mail::l('Order confirmation', (int)$order->id_lang),
					//	$data,
					//	$customer->email,
					//	$customer->firstname.' '.$customer->lastname,
					//	null,
					//	null,
					//	$file_attachement,
					//	null, _PS_MAIL_DIR_, false, (int)$order->id_shop
					//);
               
                // send email to vendor and customer
                if($type == "1") {    
                    $this->sendOrderSuccessEmailToCustomer(
                        (int)$order->id_lang,
					    'order_conf',
					    Mail::l('Order confirmation', (int)$order->id_lang),
					    $data,
					    $customer->email,
					    $customer->firstname.' '.$customer->lastname,
					    $file_attachement,
					    _PS_MAIL_DIR_, 
                        false, 
                        (int)$order->id_shop);
                }
                // send email to vendor
                else if ($type == "3") {
                    $this->sendOrderSuccessEmailToVendor(
                        (int)$order->id_lang,
					    'order_conf',
					    Mail::l('Order confirmation', (int)$order->id_lang),
					    $data,
					    $customer->email,
					    $customer->firstname.' '.$customer->lastname,
					    $file_attachementVendor,
					    _PS_MAIL_DIR_, 
                        false, 
                        (int)$order->id_shop);
                }
                
			}
	    }
		
		return true;
	}
    
    protected function sendOrderSuccessEmailToCustomer($id_lang, $template, $subject, $templateVars, $to, $toName = NULL, $fileAttachment = NULL, $templatePath = _PS_MAIL_DIR_, $die = false, $id_shop = NULL) 
    {
        if (Validate::isEmail($to))
			Mail::Send($id_lang, 'order_conf', $subject, $templateVars,	$to, $toName, null, null, $fileAttachment, null, _PS_MAIL_DIR_, false, $id_shop);
    }
    
    protected function sendOrderSuccessEmailToVendor($id_lang, $template, $subject, $templateVars, $to, $toName = NULL, $fileAttachment = NULL, $templatePath = _PS_MAIL_DIR_, $die = false, $id_shop = NULL) 
    {
        if(Module::isInstalled('agilemultipleseller'))
		{ 
			require_once(_PS_ROOT_DIR_ . "/modules/agilemultipleseller/agilemultipleseller.php");
			AgileMultipleSeller::sendNewOrderMail($id_lang, $templateVars, null, null, $fileAttachment, null, $die,$id_shop, null);
		}
    }
    
    protected function sendOrderCancelEmailToVendor($id_order, $type) 
    {
        if(Module::isInstalled('agilemultipleseller')) {
            require_once(_PS_ROOT_DIR_ . "/modules/agilemultipleseller/agilemultipleseller.php");
            $order = new Order($id_order);
            $id_seller = AgileSellerManager::getObjectOwnerID('order',$id_order);
            $seller = new Employee($id_seller);
            $templateVars = array('{order_name}' => $order->getUniqReference());
            $configuration = Configuration::getMultiple(array('PS_SHOP_EMAIL', 'PS_MAIL_METHOD', 'PS_MAIL_SERVER', 'PS_MAIL_USER', 'PS_MAIL_PASSWD', 'PS_SHOP_NAME'));

            Mail::Send(
                (int)$order->id_lang, 
                'vendor-order-cancel', 
                "Order cancelled", 
                $templateVars, 
                $seller->email, 
                NULL, 
                $configuration['PS_SHOP_EMAIL'], 
                $configuration['PS_SHOP_NAME'],
                null, 
                null, 
                _PS_THEME_DIR_.'modules/'.$this->name.'/modules/enlineamixmod/mails/', 
                false, 
                (int)$order->id_shop,
                $configuration['PS_SHOP_EMAIL']); 
        }
        
        return true;
    }
    
    protected function _getFormatedAddress(Address $the_address, $line_sep, $fields_style = array())
	{
		return AddressFormat::generateAddress($the_address, array('avoid' => array()), $line_sep, ' ', $fields_style);
	}
    
    protected function getEmailTemplateContent($template_name, $mail_type, $var)
	{
		$email_configuration = Configuration::get('PS_MAIL_TYPE');
		if ($email_configuration != $mail_type && $email_configuration != Mail::TYPE_BOTH)
			return '';

		$theme_template_path = _PS_THEME_DIR_.'mails'.DIRECTORY_SEPARATOR.$this->context->language->iso_code.DIRECTORY_SEPARATOR.$template_name;
		$default_mail_template_path = _PS_MAIL_DIR_.$this->context->language->iso_code.DIRECTORY_SEPARATOR.$template_name;

		if (Tools::file_exists_cache($theme_template_path))
			$default_mail_template_path = $theme_template_path;

		if (Tools::file_exists_cache($default_mail_template_path))
		{
			$this->context->smarty->assign('list', $var);
			return $this->context->smarty->fetch($default_mail_template_path);
		}
		return '';
	}
    
    public function getAverageProductRating($id_seller)
    {
        if(!$this->active) return;
        if($id_seller < 0) return;
        $this->smarty->assign($this->getAverageRatingData($id_seller));

        $idlang = $this->context->language->id;
        $customerid = $this->context->customer->id;
        $id_product = Tools::getValue('id_product');
        if(!$id_product && isset($_GET['id_product'])){
            $id_product = $_GET['id_product'];
        }

        $sellernames = '
        SELECT b.company
        FROM ps_sellerinfo a
        LEFT JOIN ps_sellerinfo_lang b ON b.id_sellerinfo = a.id_sellerinfo
        WHERE id_seller = '.$id_seller.' AND id_lang = '.$idlang.'
        ';
        $sellername = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sellernames);
        $sellername = $sellername[0]['company'];

        $date = $this->getLastOnlineDate($id_seller);
		$datenow = date('Y-m-d H:i:s');
		$interval = strtotime($datenow) - strtotime($date);
        $onlineStatus = $this->checkTimeInterval($interval);
        
        $this->smarty->assign(array(
            'company' => $sellername,
            'id_customer' => $customerid,
            'onlineStatus' => $onlineStatus,
            'idProduct' => $id_product
        ));
        return($this->display(__FILE__,"/views/templates/hook/hookAverageProductRating.tpl"));
    }

    public function getLastOnlineDate($sellerid)
	{ 
		$sql='
		SELECT max(d.date_add) as maxdate FROM ps_sellerinfo a
		LEFT JOIN ps_guest b ON (a.id_customer = b.id_customer)
		LEFT JOIN ps_guest c ON (b.id_customer = c.id_customer)
		LEFT JOIN ps_connections d ON (c.id_guest = d.id_guest)
		WHERE a.id_seller = '.$sellerid.'
		';
		$date = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		$date = $date[0]['maxdate'];
		return $date;
	}

    public function checkTimeInterval($inputSeconds)
	{
	$secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;
    // extract days
    $days = floor($inputSeconds / $secondsInADay);
    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);
    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);
    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
	$seconds = ceil($remainingSeconds);
	
	if($days > 2){
        $time = "Active 2 days ago";
    }else if($days >= 1){
		$time = "Active ".$days." Days ".$hours." Hours ".$minutes." Minutes ago";
	}else if($hours >= 1){
		$time = "Active ".$hours." Hours ".$minutes." Minutes ago";
	}else if($minutes >= 15){
		$time = "Active ".$minutes." Minutes ago";
	}else if($minutes < 15 ){
		$time = "Online";
	}else{
		$time = "";
	}
    return $time;
	}
    
    private function getAverageRatingData($id_seller) 
    {
        $sql = 'SELECT SUM(total_votes) AS total_votes,SUM(total_value) AS total_value '.
                'FROM `'._DB_PREFIX_.'ratings` A '.
                'INNER JOIN `'._DB_PREFIX_.'product_owner` B ON A.id=B.id_product '.
                'WHERE B.id_owner='. (int)$id_seller;
        $voted  = Db::getInstance()->GetRow($sql);
        $units =  Configuration::get('RATING_NUMBER');
        
        if($voted['total_votes'] > 0) {
            $average =  $voted['total_value'] / $voted['total_votes'];
            $average_perc = $average * 100 / $units;  
        }
        else {
            $average = 0;
            $average_perc = 0;
        }
        
        return array(
            'name_rating_target' => $this->getTargetName($id_seller),
            'average_percentage' => $average_perc,
            'bn_rating_target' => $voted['total_votes'],
            'stars_target' => $this->getStarsImages($average),
            'link2sellerpage' =>$this->context->link->getAgileSellerLink($id_seller),
        );
    }
    
    private static function getTargetName($id_target)
    {
        global$cookie;
        include_once(_PS_ROOT_DIR_."/modules/agilemultipleseller/SellerInfo.php");
        
        $sellerinfo=new SellerInfo(SellerInfo::getIdBSellerId($id_target),$cookie->id_lang);
        
        if(Validate::isLoadedObject($sellerinfo)AND!empty($sellerinfo->company))
            return$sellerinfo->company;
            
        $seller=new Employee(id_target);
        
        if(!Validate::isLoadedObject($seller)) return"";
        return $seller->firstname." ".$seller->lastname;
    }
    
    private function getStarsImages($rating)
    {
        $stars="";
        for($idx=1;$idx<=5;$idx++)
        {
            if($rating>$idx)
            {
                $stars.='<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'/enlineamixmod/img/star4.png" alt="stars"/>';
            }
            else
            {
                $tenth=($rating+1-$idx)*100;
                if($tenth<10)   $stars.='<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'enlineamixmod/img/star0.png" alt="0 Stars"/>';
                elseif($tenth<35)   $stars.='<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'enlineamixmod/img/star1.png" alt="1 Stars"/>';
                elseif($tenth<65)   $stars.='<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'enlineamixmod/img/star2.png" alt="2 Stars"/>';
                elseif($tenth<85)   $stars.='<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'enlineamixmod/img/star3.png" alt="3 Stars"/>';
                else    $stars=$stars.'<img src="https://'._MEDIA_SERVER_1_._MODULE_DIR_.'enlineamixmod/img/star4.png" alt="4 Stars"/>';
            }
        }
        
        return"<span style=\"display: inline-block\">".$stars."</span>";
    }
    
    public function hookDisplayRightColumnProduct($params){
        global$smarty,$cookie;
        
        if(!$this->active)return;
        
        $id_product=Tools::getValue("id_product");
        $sql="SELECT id_owner FROM `"._DB_PREFIX_."product_owner` WHERE id_product=".(int)$id_product;
        $oid=Db::getInstance()->getRow($sql);
        
        $id_target=isset($oid["id_owner"])?intval($oid["id_owner"]):0;
        
        return$this->getAverageProductRating($id_target);
    }
    
    public function hookDisplayAdminProductsExtra($params)
    {
        $id_product = Tools::getValue('id_product');
        $crawlers = $this->getCrawlerData($id_product);
        $no_crawler = Db::getInstance()->getValue('SELECT no_crawler FROM `'._DB_PREFIX_.'product` WHERE id_product='. (int)$id_product);
        
		$suggestionGoogle=Db::getInstance()->ExecuteS(
                    'SELECT g_name, g_price, g_vendor, g_link, g_picture FROM ps_compare_product_google WHERE id_product='.(int)$id_product
                    );
		
        $this->context->smarty->assign(array(
            'crawlers' => $crawlers,
			'suggestionGoogle' => $suggestionGoogle,
            'no_crawler' => $no_crawler
        ));
        return $this->display(__FILE__, 'views/templates/hook/hookPriceCrawler.tpl');
    } 
    
    private function getCrawlerData($id_product) {
        return Db::getInstance()->ExecuteS(
                    'SELECT A.id_crawler, A.crawler_site, A.crawler_site_type '.
                    'FROM '._DB_PREFIX_.'product_crawler A WHERE A.recStatus=2 AND A.id_product='.(int)$id_product
                    );
    }
    
    public function hookActionProductAdd($params)
    {
         $this->updateExtraProductField($params);
    }

    public function hookActionProductUpdate($params)
    {
         $this->updateExtraProductField($params);
    }
    
    protected function updateExtraProductField($params) {
        $id_product_current = (int)Tools::getValue('id_product');
        $is_valid = true;
        $processDuplicate = false;
        
        if(isset($params['product']))
        {
            $id_product = $params['product']->id;
        }
        else
        {
            $id_product = $id_product_current;
        }
        
        if($id_product_current != $id_product && $id_product_current != 0)
        {
            $processDuplicate = true;
        }
        
        if(!$processDuplicate)
        {
            $validate = false;
            if(Tools::getValue('hasCrawler') == '1')
            {
                $validate = true;
                $crawlers = Tools::getValue('crawlers');
                $no_crawler = Tools::getValue('nocrawler');
            }
            
            if($validate)
            {
                if($no_crawler=="1") 
                {
                    Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'product_crawler SET recStatus=0 WHERE id_product='.(int)$id_product);
                    Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'product SET no_crawler=1 WHERE id_product='.(int)$id_product);
                }
                else 
                {
                    $this->context->controller->temp_value["crawlers"] = $crawlers;
                
                    $crawler_type_sql = 'SELECT crawler_site_type,crawler_site_url FROM '._DB_PREFIX_.'product_crawler_type';
			        $crawler_type = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($crawler_type_sql);
                
                    $id_crawlers = [];
                    for($i = count($crawlers) - 1; $i>=0; $i--)
                    {
                        if(isset($crawlers[$i]["crawler_site"]) && trim($crawlers[$i]["crawler_site"]) <> '')
                        {
                            $crawlers[$i]["crawler_site_type"] = 0;
                            $matched = false;
                            $totalCrawlerType = count($crawler_type);
                            $j = 0;
                        
                            while (!$matched && $j < $totalCrawlerType) {
                                $crawler_site_urls = explode(",", $crawler_type[$j]["crawler_site_url"]);
                            
                                for($k = 0; $k < count($crawler_site_urls); $k++) 
                                {
                                    if(trim($crawler_site_urls[$k]) != "" && !$matched)
                                    {
                                        if(strpos($crawlers[$i]["crawler_site"], $crawler_site_urls[$k]) !== false) 
                                        {
                                            $crawlers[$i]["crawler_site_type"] = $crawler_type[$j]["crawler_site_type"];
                                            $matched = true;
                                        }
                                    }
                                }
                            
                                $j++;
                            }
                        
                            //if(strpos($crawlers[$i]["crawler_site"], "lazada.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 1;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "gemfive.com") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 2;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "shoppu.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 3;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "11street.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 4;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "babydash.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 5;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "aventstore.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 6;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "lelong.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 7;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "lmall.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 8;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "blipmy.com") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 9;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "babyneeds-cheras.com") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 10;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "shopee.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 11;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "mydear.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 12;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "tesco.com.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 13;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "logon.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 14;
                            //}else if(strpos($crawlers[$i]["crawler_site"], "iprice.my") !== false) {
                            //    $crawlers[$i]["crawler_site_type"] = 15;
                            //}
                        
                            $id_crawlers[] = $crawlers[$i]["id_crawler"];
                        }
                        else 
                        {
                            unset($crawlers[$i]);
                        }
                    }

                    Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'product SET no_crawler=0 WHERE id_product='.(int)$id_product);
                    if($is_valid)
                    {                                
                        if(isset($id_crawlers) && count($id_crawlers) > 0) 
                        {
                            Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'product_crawler SET recStatus=0 WHERE id_product='.(int)$id_product.' AND id_crawler NOT IN ('.implode(",",$id_crawlers).')');     
                        }
                        else 
                        {
                            Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'product_crawler SET recStatus=0 WHERE id_product='.(int)$id_product);     
                        }
                    
                        foreach ($crawlers as $c)
                        {
                            $crawlerId = $c["id_crawler"];
                        
                            if(isset($crawlerId) && $crawlerId != 0)
                            {
                                if(!Db::getInstance()->update('product_crawler', array('crawler_site'=> pSQL($c['crawler_site']), 'crawler_site_type'=> pSQl($c['crawler_site_type']), 'recStatus' => 2) ,' id_crawler = ' .$crawlerId ))
                                {
                                    $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                                }
                            }
                            else
                            {
                                $sql = "SELECT id_crawler,recStatus ".
                                    "FROM "._DB_PREFIX_."product_crawler A ".
                                    "WHERE id_product=".(int)$id_product .' AND crawler_site="'.$c['crawler_site'].'" AND crawler_site_type='.$c['crawler_site_type'];
                                $t_crawler = Db::getInstance()->getRow($sql);
                            
                                if(isset($t_crawler) && $t_crawler['id_crawler'] > 0) 
                                {
                                    if($t_crawler['recStatus'] == 0) 
                                    {
                                        if(!Db::getInstance()->update('product_crawler', array('crawler_site'=> pSQL($c['crawler_site']), 'crawler_site_type'=> pSQl($c['crawler_site_type']), 'recStatus' => 2) ,' id_crawler = ' .$t_crawler['id_crawler']))
                                        {
                                            $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                                        }
                                    }
                                }
                                else 
                                {
                                    if(!Db::getInstance()->insert('product_crawler', array('id_product'=> pSQL($id_product), 'crawler_site'=> pSQL($c['crawler_site']), 'crawler_site_type'=> pSQl($c['crawler_site_type']))))
                                    {
                                        $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        else
        {
            $crawlers = $this->getCrawlerData($id_product_current);
            foreach ($crawlers as $c)
            {
                if(!Db::getInstance()->insert('product_crawler', array('id_product'=> pSQL($id_product), 'crawler_site'=> pSQL($c['crawler_site']), 'crawler_site_type'=> pSQl($c['crawler_site_type']))))
                {
                    $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                }
            }
        }
    }
    
    public function hookDisplayProductListFooter($params) {
        $nb = (int)Configuration::get('HOME_FEATURED_NBR');
        $nb = $nb ? $nb : 8;
        // you may like (need logic)
        $recommendedProds = $this->getRecommendedProd($params);
       
        // brands on sale (theme configuration)
        $brandOnSales = $this->getBrandsOnSale($nb);
        
        // features products (random)
        //$featured_products = $this->getFeaturedProd($params);
        $featured_products = null;
        
        $bestSellerProd = $this->getBestSellerProducts();
		$categoryBrands = $this->getBrandsInCategory($params);
		
        $this->context->smarty->assign(array(
            'categoryBrands' => $categoryBrands,
			'recommendProd' => $recommendedProds,
            'brandOnSales' => $brandOnSales,
            'featuresProd' => $featured_products,
            'bestSellerProd' => $bestSellerProd,
            'crossDisplayPrice' => Configuration::get('CROSSSELLING_DISPLAY_PRICE')
        ));
        $this->context->controller->addJS(($this->_path).'views/js/hookDisplayProductListFooter.js');
        
        return $this->display(__FILE__, 'hookDisplayProductListFooter.tpl'); 
    }
    
	protected function getBrandsInCategory($params){
		
        $displayPage = $params["displayPage"];
        $id = $params["id"];
		
		if ($id){
			$sql = '
				SELECT DISTINCT b.id_manufacturer,b.name 
					FROM '._DB_PREFIX_.'product a
					JOIN '._DB_PREFIX_.'manufacturer b ON a.id_manufacturer=b.id_manufacturer
					WHERE id_product IN
					(
					SELECT id_product FROM ps_category_product
					WHERE id_category='.(int)$id.'
			) ORDER BY RAND() LIMIT 15
			';
			
			$order_products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		}
			
		return $order_products;
		
	}
    
    protected function getRecommendedProd($params) {
        $displayPage = $params["displayPage"];
        $id = $params["id"];
        
        $sql = "";
        switch($displayPage)
        {
            case "category":
                $q_orders = 'SELECT od.id_order FROM '._DB_PREFIX_.'order_detail od '.
                            'INNER JOIN '._DB_PREFIX_.'category_product cp ON cp.id_product = od.product_id '.
                            'WHERE cp.id_category='.(int)$id;
                $orders = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($q_orders);

                if (count($orders))
			    {
                    $list = '';
				    foreach ($orders as $order)
					    $list .= (int)$order['id_order'].',';
				    $list = rtrim($list, ',');

                    $sql = 'SELECT DISTINCT od.product_id, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
						    FROM '._DB_PREFIX_.'order_detail od
					        INNER JOIN '._DB_PREFIX_.'product p ON (p.id_product = od.product_id)
    					    '.Shop::addSqlAssociation('product', 'p').'
	    				    INNER JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = od.product_id'.Shop::addSqlRestrictionOnLang('pl').')
		    			    INNER JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = product_shop.id_category_default'.Shop::addSqlRestrictionOnLang('cl').')
			    		    INNER JOIN '._DB_PREFIX_.'image i ON (i.id_product = od.product_id)
				    	    INNER JOIN `'._DB_PREFIX_.'product_owner` a_po ON p.id_product=a_po.id_product 
                            WHERE od.id_order IN ('.$list.')
					    	    AND pl.id_lang = '.(int)$this->context->language->id.'
						        AND cl.id_lang = '.(int)$this->context->language->id.'
						        AND od.product_id NOT IN (SELECT id_product FROM '._DB_PREFIX_.'category_product WHERE id_category='.(int)$id.' or id_category=240)
						        AND i.cover = 1
						        AND product_shop.active = 1
                                AND a_po.approved = 1
					        ORDER BY RAND()
					        LIMIT '.(int)Configuration::get('CROSSSELLING_NBR');
                }
            break;
            case "manufacturer":
                $q_orders = 'SELECT od.id_order FROM '._DB_PREFIX_.'order_detail od '.
                            'INNER JOIN '._DB_PREFIX_.'product p ON p.id_product = od.product_id '.
                            'WHERE p.id_manufacturer='.(int)$id;
                $orders = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($q_orders);

                if (count($orders))
			    {
                    $list = '';
				    foreach ($orders as $order)
					    $list .= (int)$order['id_order'].',';
				    $list = rtrim($list, ',');

                    $sql = 'SELECT DISTINCT od.product_id, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
						    FROM '._DB_PREFIX_.'order_detail od
					        INNER JOIN '._DB_PREFIX_.'product p ON (p.id_product = od.product_id)
    					    '.Shop::addSqlAssociation('product', 'p').'
	    				    INNER JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = od.product_id'.Shop::addSqlRestrictionOnLang('pl').')
		    			    INNER JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = product_shop.id_category_default'.Shop::addSqlRestrictionOnLang('cl').')
			    		    INNER JOIN '._DB_PREFIX_.'image i ON (i.id_product = od.product_id)
                            INNER JOIN `'._DB_PREFIX_.'product_owner` a_po ON p.id_product=a_po.id_product 
				    	    WHERE od.id_order IN ('.$list.')
					    	    AND pl.id_lang = '.(int)$this->context->language->id.'
						        AND cl.id_lang = '.(int)$this->context->language->id.'
						        AND od.product_id NOT IN (SELECT id_product FROM '._DB_PREFIX_.'product WHERE id_manufacturer='.(int)$id.')
						        AND od.product_id NOT IN (SELECT id_product FROM '._DB_PREFIX_.'category_product WHERE id_category=240)
						        AND i.cover = 1
						        AND product_shop.active = 1
                                AND a_po.approved = 1
					        ORDER BY RAND()
					        LIMIT '.(int)Configuration::get('CROSSSELLING_NBR');
                }
            break;
            
        }
        
        $order_products = null;
        
        if($sql != "") {
            $order_products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
            
            $tax_calc = Product::getTaxCalculationMethod();
			foreach ($order_products as &$order_product)
			{
				$order_product['image'] = $this->context->link->getImageLink($order_product['link_rewrite'], (int)$order_product['product_id'].'-'.(int)$order_product['id_image'], ImageType::getFormatedName('home'));
				$order_product['link'] = $this->context->link->getProductLink((int)$order_product['product_id'], $order_product['link_rewrite'], $order_product['category'], $order_product['ean13']);
				if (Configuration::get('CROSSSELLING_DISPLAY_PRICE') && ($tax_calc == 0 || $tax_calc == 2))
					$order_product['displayed_price'] = Product::getPriceStatic((int)$order_product['product_id'], true, null);
				elseif (Configuration::get('CROSSSELLING_DISPLAY_PRICE') && $tax_calc == 1)
					$order_product['displayed_price'] = Product::getPriceStatic((int)$order_product['product_id'], false, null);
			}
        }
        
        
        return $order_products;
    }
    
    protected function getBrandsOnSale($nb) {
        $r1 = Db::getInstance()->ExecuteS('
		    SELECT *
		    FROM `'._DB_PREFIX_.'themeconfigurator`
		    WHERE id_shop = '.(int)$this->context->shop->id.' AND id_lang = '.(int)$this->context->language->id.'
		    AND hook = \'top\' AND active = 1
		    ORDER BY item_order ASC LIMIT 3');
            
        $excludeIds = array();

        foreach($r1 as $r) {
            $excludeIds[] = $r["id_item"];
        }
       
        $r2 = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'themeconfigurator`'.
		        ' WHERE id_shop = '.(int)$this->context->shop->id.' AND id_lang = '.(int)$this->context->language->id.
		        ' AND hook = \'top\' AND active = 1'.
                ($excludeIds != null && count($excludeIds) > 0 ? ' AND id_item NOT IN ('.implode(',', $excludeIds).')' : '').
		        ' ORDER BY rand() LIMIT '.$nb);
            
        return $r2;
    }
    
    protected function getFeaturedProd($params) {
        $displayPage = $params["displayPage"];
        $id = $params["id"];
        $featured_cat = Configuration::get('HOME_FEATURED_CAT');
        
        $sql = "";
        switch($displayPage)
        {
            case "category":
                $sql = 'SELECT DISTINCT p.id_product, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
						    FROM `'._DB_PREFIX_.'category_product` cp 
                            INNER JOIN `'._DB_PREFIX_.'product` p ON p.`id_product` = cp.`id_product` 
                            INNER JOIN '._DB_PREFIX_.'product_shop product_shop ON (product_shop.id_product = p.id_product AND product_shop.id_shop = 1)
                            INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON (product_shop.`id_category_default` = cl.`id_category` AND cl.`id_lang` = 1 AND cl.id_shop = 1 ) 
                            INNER JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = 1 AND pl.id_shop = 1 )
                            INNER JOIN `'._DB_PREFIX_.'product_owner` a_po ON p.id_product=a_po.id_product 
                            INNER JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
                            WHERE product_shop.`id_shop`=1 AND a_po.approved=1 
                                AND p.id_product NOT IN (SELECT id_product FROM `'._DB_PREFIX_.'category_product` WHERE id_category='.(int)$id. ')
                                AND cp.`id_category` = '.(int)$featured_cat.' AND product_shop.`active` = 1 
                                AND product_shop.`visibility` IN ("both", "catalog") AND i.cover = 1
                            GROUP BY product_shop.id_product ORDER BY RAND() LIMIT '.(int)Configuration::get('CROSSSELLING_NBR');
                break;
            case "manufacturer":
                $sql = 'SELECT DISTINCT p.id_product, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
						    FROM `'._DB_PREFIX_.'category_product` cp 
                            INNER JOIN `'._DB_PREFIX_.'product` p ON p.`id_product` = cp.`id_product` 
                            INNER JOIN '._DB_PREFIX_.'product_shop product_shop ON (product_shop.id_product = p.id_product AND product_shop.id_shop = 1)
                            INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON (product_shop.`id_category_default` = cl.`id_category` AND cl.`id_lang` = 1 AND cl.id_shop = 1 ) 
                            INNER JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = 1 AND pl.id_shop = 1 )
                            INNER JOIN `'._DB_PREFIX_.'product_owner` a_po ON p.id_product=a_po.id_product 
                            INNER JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
                            WHERE product_shop.`id_shop`=1 AND a_po.approved=1 AND p.id_manufacturer!='.(int)$id. '
                                AND cp.`id_category` = '.(int)$featured_cat.' AND product_shop.`active` = 1 
                                AND product_shop.`visibility` IN ("both", "catalog") AND i.cover = 1
                            GROUP BY product_shop.id_product ORDER BY RAND() LIMIT '.(int)Configuration::get('CROSSSELLING_NBR');
                break;
            case "seller":
                $sql = 'SELECT DISTINCT p.id_product, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
						    FROM `'._DB_PREFIX_.'category_product` cp 
                            INNER JOIN `'._DB_PREFIX_.'product` p ON p.`id_product` = cp.`id_product` 
                            INNER JOIN '._DB_PREFIX_.'product_shop product_shop ON (product_shop.id_product = p.id_product AND product_shop.id_shop = 1)
                            INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON (product_shop.`id_category_default` = cl.`id_category` AND cl.`id_lang` = 1 AND cl.id_shop = 1 ) 
                            INNER JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = 1 AND pl.id_shop = 1 )
                            INNER JOIN `'._DB_PREFIX_.'product_owner` a_po ON p.id_product=a_po.id_product 
                            INNER JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
                            WHERE product_shop.`id_shop`=1 AND a_po.approved=1 AND a_po.id_owner != '.(int)$id. ' 
                                AND cp.`id_category` = '.(int)$featured_cat.' AND product_shop.`active` = 1 
                                AND product_shop.`visibility` IN ("both", "catalog") AND i.cover = 1
                            GROUP BY product_shop.id_product ORDER BY RAND() LIMIT '.(int)Configuration::get('CROSSSELLING_NBR');
                break;
        }
        
        $order_products = null;

        if($sql != "") {
            $order_products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
         
            $tax_calc = Product::getTaxCalculationMethod();
			foreach ($order_products as &$order_product)
			{
				$order_product['image'] = $this->context->link->getImageLink($order_product['link_rewrite'], (int)$order_product['id_product'].'-'.(int)$order_product['id_image'], ImageType::getFormatedName('home'));
				$order_product['link'] = $this->context->link->getProductLink((int)$order_product['id_product'], $order_product['link_rewrite'], $order_product['category'], $order_product['ean13']);
				if (Configuration::get('CROSSSELLING_DISPLAY_PRICE') && ($tax_calc == 0 || $tax_calc == 2))
					$order_product['displayed_price'] = Product::getPriceStatic((int)$order_product['id_product'], true, null);
				elseif (Configuration::get('CROSSSELLING_DISPLAY_PRICE') && $tax_calc == 1)
					$order_product['displayed_price'] = Product::getPriceStatic((int)$order_product['id_product'], false, null);
       	    }
        }

        return $order_products;
    }
    
    public function cronUpdateProductSellingPrice() 
    {
        set_time_limit(300);
        
        $sql_attribute = "update ps_product p
                            inner join (
	                            select p.id_product,p.cache_default_attribute, pa.id_product_attribute
	                            from ps_product p
	                            inner join ps_product_owner po ON p.id_product = po.id_product
	                            left join ps_product_attribute pa ON p.id_product = pa.id_product AND pa.default_on = 1
	                            where p.active = 1 and po.approved = 1
	                            and p.cache_default_attribute <> IFNULL(pa.id_product_attribute,0)
                            ) p_t ON p.id_product = p_t.id_product
                            set p.cache_default_attribute = IFNULL(p_t.id_product_attribute,0)";
        Db::getInstance()->execute($sql_attribute);       
        
        $sql_attribute_shop = "update ps_product_shop p
                            inner join (
	                            select p.id_product,p.cache_default_attribute, pa.id_product_attribute
	                            from ps_product_shop p
	                            inner join ps_product_owner po ON p.id_product = po.id_product
	                            left join ps_product_attribute pa ON p.id_product = pa.id_product AND pa.default_on = 1
	                            where p.active = 1 and po.approved = 1
	                            and p.cache_default_attribute <> IFNULL(pa.id_product_attribute,0)
                            ) p_t ON p.id_product = p_t.id_product
                            set p.cache_default_attribute = IFNULL(p_t.id_product_attribute,0)";
        Db::getInstance()->execute($sql_attribute_shop);       
        
        $sql = 'SELECT p.id_product,p.cache_default_attribute AS id_product_attribute'.
                ' FROM `'._DB_PREFIX_.'product` p INNER JOIN `'._DB_PREFIX_.'product_owner` po ON p.id_product=po.id_product'.
                ' WHERE p.active = 1 AND po.approved = 1';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        //$finalResults = Product::getProductsProperties(1, $result);
        $usetax = Tax::excludeTaxeOption();
        $counter = 1;
        print_r(sizeof($result));  
        print_r("<br />");

        for($i = 0; $i < sizeof($result); $i++) 
        {
            echo ($counter ++)."Update product ". $result[$i]['id_product'];
            $result[$i]['price_tax_exc'] = Product::getPriceStatic(
			    (int)$result[$i]['id_product'],
			    false,
			    ((isset($result[$i]['id_product_attribute']) && !empty($result[$i]['id_product_attribute'])) ? (int)$result[$i]['id_product_attribute'] : null),
			    6
		    );
            
            $result[$i]['price'] = Tools::ps_round(
				Product::getPriceStatic(
					(int)$result[$i]['id_product'],
					true,
					((isset($result[$i]['id_product_attribute']) && !empty($result[$i]['id_product_attribute'])) ? (int)$result[$i]['id_product_attribute'] : null),
					2
				),
				6
			);

			$result[$i]['price_without_reduction'] = Product::getPriceStatic(
				(int)$result[$i]['id_product'],
				true,
				((isset($result[$i]['id_product_attribute']) && !empty($result[$i]['id_product_attribute'])) ? (int)$result[$i]['id_product_attribute'] : null),
				6,
				null,
				false,
				false
			);
            
            if($result[$i]['price_without_reduction'] == 0) {
                $result[$i]['discount'] = 0;
            }
            else {
                $result[$i]['discount'] = Tools::ps_round(($result[$i]['price_without_reduction'] - $result[$i]['price']) * 100.0 / $result[$i]['price_without_reduction'], 1);
            }
      //      $result[$i]['reduction'] = Product::getPriceStatic(
			   // (int)$result[$i]['id_product'],
			   // (bool)$usetax,
			   // (int)$result[$i]['id_product_attribute'],
			   // 6,
			   // null,
			   // true,
			   // true,
			   // 1,
			   // true,
			   // null,
			   // null,
			   // null,
			   // $specific_prices
		    //);
            
      //      $result[$i]['specific_prices'] = $specific_prices;
      
            echo "|Product Price:".$result[$i]['price_without_reduction'].
                    "|Selling Price:".$result[$i]['price'].
                    "|Discount %:".$result[$i]['discount'];
            print_r("<br />");
            $updateSQL = 'UPDATE  `'._DB_PREFIX_.'product` '.
                            'SET cron_sellingprice='. $result[$i]['price'].','.
                                'cron_discount='.$result[$i]['discount'].' '.
                         'WHERE id_product='. $result[$i]['id_product'];
             Db::getInstance()->execute($updateSQL);       
        }
        
        echo "Update completed";
    }

    public function getCustomerId(){
        $customerid = $this->context->customer->id;

        return $customerid;
    }

    public function getSellerId(){
        $sellerid = AgileSellerManager::getLinkedSellerID($this->context->customer->id);

        return $sellerid;
    }
}
