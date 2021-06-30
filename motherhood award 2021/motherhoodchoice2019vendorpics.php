<?php 

class enlineamixmodmotherhoodchoice2019vendorpicsModuleFrontController extends ModuleFrontController
{
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

       $thisIsCustomer=$this->context->customer->id;
       if (!$thisIsCustomer){
            $this->context->smarty->assign(array(
				'title'=>"Motherhood Choice Awards Winner's Page",
				'LoginMsg' => "Login Using Your Registered Motherhood Account to view the Winner's Media Page",
            ));
            $this->setTemplate('pleaselogin.tpl');
	    }else{
	
			$companyResult = Db::getInstance()->getRow('
				SELECT b.company FROM ps_sellerinfo a
JOIN ps_sellerinfo_lang b ON a.id_sellerinfo=b.id_sellerinfo
WHERE id_customer='.$thisIsCustomer.' AND id_lang=1
			');
			$companyname=$companyResult['company'];
			
			$seller=array();
			
			
			$seller[720]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/720-Akarana+Baby-20190716T025341Z-001.zip';
			$seller[11460]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/11460-CL+Trillion-20190716T025644Z-001.zip';
			$seller[2946]='cdn.otherhood.com.my/assets/images/motherhood-awards-2019/winners/2946-Baby+Love-20190716T025829Z-001.zip';
			$seller[20558]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/20558-Econat+Resources-20190716T025908Z-001.zip';
			$seller[82019]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/82019-Grato-20190716T030001Z-001.zip';
			$seller[3070]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/3070-Cheekaboo-20190716T030044Z-001.zip';
			$seller[17852]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/17852-EZ+Baby-20190716T030502Z-001.zip';
			$seller[2326]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/2326-Fiffy-20190716T030611Z-001.zip';
			$seller[31258]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/31258-Wahaa-20190716T030736Z-001.zip';
			$seller[12281]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/12281-Koopers-20190716T030935Z-001.zip';
			$seller[79485]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/79485-Nestle-20190716T031414Z-001.zip';
			$seller[70948]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/70948-Novamil-20190716T090220Z-001.zip';
			$seller[15396]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/15396-Astra+Baby-20190716T031726Z-001.zip';
			$seller[82231]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/82231-Philips+Avent-20190716T031851Z-001.zip';
			$seller[20486]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/20486-Poppy-20190716T032122Z-001.zip';
			$seller[763]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/763-Shapee-20190716T032204Z-001.zip';
			$seller[20440]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/20440-Neo+Geo-20190716T032220Z-001.zip';
			$seller[85814]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/85814-Unicharm-20190716T031151Z-001.zip';
			$seller[353]='cdn.motherhood.com.my/assets/images/motherhood-awards-2019/winners/353-Trendy+Valley-20190716T032623Z-001.zip';

			if ($seller[$thisIsCustomer]){
				$this->context->smarty->assign(array(
					'thisURL'=>$seller[$thisIsCustomer],
					'companyname'=>$companyname,
				));
			}
			
            $this->setTemplate('motherhoodchoice2019vendorpics.tpl');
        }
    }

    public function postProcess(){
    }
}