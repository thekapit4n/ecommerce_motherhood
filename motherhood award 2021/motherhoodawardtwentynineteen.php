<?php 

class enlineamixmodmotherhoodawardtwentynineteenModuleFrontController extends ModuleFrontController
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

        $photogallery = array( "IMG_2767.jpg","IMG_2769.jpg","IMG_2771.jpg","IMG_2772.jpg","IMG_2846.jpg","IMG_2847.jpg","IMG_2849.jpg","IMG_2852.jpg","IMG_2853.jpg",
                        "IMG_2856.jpg","IMG_2858.jpg","IMG_2860.jpg","IMG_2861.jpg","IMG_2864.jpg","IMG_2866.jpg","IMG_2868.jpg","IMG_2871.jpg","IMG_2874.jpg",
                        "IMG_2877.jpg","IMG_2881.jpg","IMG_2883.jpg","IMG_2884.jpg","IMG_2887.jpg","IMG_2889.jpg","IMG_2891.jpg","IMG_2893.jpg","IMG_2896.jpg",
                        "IMG_2899.jpg","IMG_2901.jpg","IMG_2902.jpg","IMG_2905.jpg","IMG_2908.jpg","IMG_2909.jpg","IMG_2911.jpg","IMG_2913.jpg","IMG_2915.jpg",
                        "IMG_2916.jpg","IMG_2919.jpg","IMG_2921.jpg","IMG_2923.jpg","IMG_2924.jpg","IMG_2926.jpg","IMG_2939.jpg","IMG_2942.jpg","IMG_2943.jpg",
                        "IMG_2944.jpg","IMG_2945.jpg","IMG_2949.jpg","IMG_2951.jpg","IMG_2955.jpg","IMG_2958.jpg","IMG_2964.jpg","IMG_2968.jpg","IMG_2970.jpg",
                        "IMG_3093.jpg","IMG_8397.jpg","IMG_8398.jpg","IMG_8401.jpg","IMG_8403.jpg","IMG_8405.jpg","IMG_8427.jpg","IMG_8437.jpg","IMG_8438.jpg",
                        "IMG_8440.jpg","IMG_8441.jpg","IMG_8442.jpg","IMG_8444.jpg","IMG_8452.jpg","IMG_8453.jpg","IMG_8454.jpg","IMG_19238.jpeg");
        $this->context->smarty->assign(array(
            'photogallery' => $photogallery,
        ));
        
        $this->context->smarty->tpl_vars['meta_title']->value = "Motherhood Choice Awards 2019 | Motherhood.com.my Malaysia";
        $this->context->smarty->tpl_vars['meta_image']->value = "https://cdn.motherhood.com.my/assets/images/award/award+black/main-banner-1170-x-481.png";
        $this->context->smarty->tpl_vars['meta_description']->value = "best brands & products in baby feeding, gears, diaper, enrichment, feminine care, health & safety, mom kids nutrition, maternity & nursing, household & more";
            
        $this->setTemplate('motherhoodawardtwentynineteen.tpl');
    }

    public function postProcess(){
        if (Tools::isSubmit('submit')){
        }
		return parent::postProcess();
    }
}