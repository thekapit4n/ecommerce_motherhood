<?php
require_once _PS_MODULE_DIR_ . 'enlineamixmod/enlineamixmod.php';

/*


CREATE TABLE `ps_events` (
  `event_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_description` text COLLATE utf8_unicode_ci,
  `event_meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_default` tinyint(1) NOT NULL DEFAULT '0',
  `event_start_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `event_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `ps_events_subscriber` (
  `subscriber_customer_id` int(11) unsigned NOT NULL,
  `subscriber_event_id` int(11) DEFAULT NOT NULL,
  `subscriber_question1` text DEFAULT NULL,
  `subscriber_question2` text DEFAULT NULL,
  `subscriber_question3` text DEFAULT NULL,
  `subscriber_question4` text DEFAULT NULL,
  `subscriber_question5` text DEFAULT NULL,
  `subscriber_created_at` timestamp NULL DEFAULT NULL,
  `subscriber_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1217 DEFAULT CHARSET=utf8mb4;

ALTER TABLE `ps_events_subscriber` 
ADD COLUMN `subscriber_question7` VARCHAR(45) NULL AFTER `subscriber_updated_at`,
ADD COLUMN `subscriber_question8` VARCHAR(45) NULL AFTER `subscriber_question7`,
ADD COLUMN `subscriber_question9` VARCHAR(45) NULL AFTER `subscriber_question8`,
ADD COLUMN `subscriber_question10` VARCHAR(45) NULL AFTER `subscriber_question9`,
ADD COLUMN `subscriber_question11` VARCHAR(45) NULL AFTER `subscriber_question10`;

ALTER TABLE `ps_events_subscriber` 
CHANGE COLUMN `subscriber_created_at` `subscriber_created_at` TIMESTAMP NULL DEFAULT NULL AFTER `subscriber_question11`,
CHANGE COLUMN `subscriber_updated_at` `subscriber_updated_at` TIMESTAMP NULL DEFAULT NULL AFTER `subscriber_created_at`;

*/

class enlineamixmodenlineaeventsModuleFrontController extends ModuleFrontController
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
			SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
			FROM
			`'._DB_PREFIX_.'events` 
			WHERE event_slug="'.pSQL(Tools::getValue('event_name')).'" AND event_active = 1';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		
		
		if (empty($result[0])){
			$sql = '
				SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
				FROM
				`'._DB_PREFIX_.'events` 
				WHERE event_default=1';
			$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
		}
		$meta_title=$result[0]['event_meta_title'];
		$event_meta_description=$result[0]['event_meta_description'];
		$event_meta_keyword=$result[0]['event_meta_keyword'];
		$event_id=$result[0]['event_id'];
		$event_banner = $result[0]['event_banner'];
		$event_mini_banner = $result[0]['event_mini_banner'];
		if (substr($event_banner,0,4)!="http"){
			if (substr($event_mini_banner,0,4)=="http"){
				$event_banner=$event_mini_banner;
			}else
				$event_banner="";
		}
		
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
		
		
        $sql = '
			SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
			FROM
			`'._DB_PREFIX_.'events` 
			WHERE event_slug="'.pSQL(Tools::getValue('event_name')).'" AND event_active = 1';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		
		
		if (empty($result[0])){
			$sql = '
				SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
				FROM
				`'._DB_PREFIX_.'events` 
				WHERE event_default=1';
			$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
			header('Location: /events/'.$result[0]['event_slug']);
			die();
			
		}
		$except_slug=$result[0]['event_slug'];
		$has_ended=$result[0]['has_ended'];
		$event_id=$result[0]['event_id'];

		//New Mom Essential checking 
		if($result[0]['event_id'] == 110 || $result[0]['event_id'] == 701 && $this->context->customer->id){			
			//$existChecksql = '
			//SELECT COUNT(1) as exist
			//FROM `'._DB_PREFIX_.'events_subscriber` 
			//WHERE newEmail = "'.$this->context->customer->email.'" AND subscriber_event_id = 100';
			//$existCheck = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($existChecksql);

			//Check registered for newmom
			//if($existCheck[0]['exist'] > 1){
			if($this->context->customer->id){
				//$existChecksql = '
				//SELECT COUNT(1) as exist
				//FROM ps_events_subscriber a 
				//LEFT JOIN ps_events_subscriber b on a.newEmail = b.newEmail 
				//WHERE a.newEmail = "'.$this->context->customer->email.'" AND a.subscriber_event_id = 110 AND b.subscriber_event_id = 100
				//AND b.subscriber_question4 = "pregnant"';
				$existChecksql = '
				SELECT COUNT(1) as exist
				FROM ps_events_subscriber  
				WHERE newEmail = "'.$this->context->customer->email.'" AND subscriber_event_id = 110';
				$existCheck = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($existChecksql);
				if($existCheck[0]['exist'] >= 1){
					$newMomEssentialDatasql = '
						SELECT * FROM ps_events_subscriber 
						WHERE subscriber_customer_id = "'.$this->context->customer->id.'" AND subscriber_event_id = 110
						';
					$newMomEssentialData = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($newMomEssentialDatasql);
					$babypregnantdate = $newMomEssentialData[0]['subscriber_question3'];
					$babypregnantdate = strtotime($babypregnantdate);$today = strtotime(date("d-m-Y")); $diff = $today - $babypregnantdate;
					$days = floor($diff/ (60*60*24)); $weeks = floor($days / 7);
					if($weeks < 0 || $weeks > 40){
						$result[0]['event_description'] = str_ireplace('Your baby is on Week {{yourbabyweek}}!',' ', $result[0]['event_description']);
					 }else{
						$result[0]['event_description'] = str_ireplace('{{yourbabyweek}}',$weeks, $result[0]['event_description']);
					 }
					$result[0]['event_description'] = str_ireplace('newMomEssentialForm','" style="display:none;visibility:hidden;" "', $result[0]['event_description']);
				}else{
					$result[0]['event_description'] = str_ireplace('{{email}}',$this->context->customer->email, $result[0]['event_description']);
					$result[0]['event_description'] = str_ireplace('newMomEssentialPregnancyTracker','" style="display:none;visibility:hidden;" "', $result[0]['event_description']);
				}
			}else{
				$result[0]['event_description'] = str_ireplace('id="newMomEssentialForm"',' id="nothing" style="display:none;visibility:hidden;" ', $result[0]['event_description']);
				$result[0]['event_description'] = str_ireplace('Your baby is on Week {{yourbabyweek}}!','<a href="../login?back=events/new-mom-essentials/" >Login</a> to personalise your journey', $result[0]['event_description']);
				//$result[0]['event_description'] = str_ireplace('id="newMomEssentialPregnancyTracker"',' id="nothingg" style="display:none;visibility:hidden;" ', $result[0]['event_description']);
				//$result[0]['event_description'] = str_ireplace('<ul id="pregnancy_tracker_slider">',' <ul id="nothing_slider"> ', $result[0]['event_description']);
			}
		}else{
			$result[0]['event_description'] = str_ireplace('id="newMomEssentialForm"',' id="nothing" style="display:none;visibility:hidden;" ', $result[0]['event_description']);
			$result[0]['event_description'] = str_ireplace('Your baby is on Week {{yourbabyweek}}!','<a href="../login?back=events/new-mom-essentials/" >Login</a> to personalise your journey', $result[0]['event_description']);
			//$result[0]['event_description'] = str_ireplace('id="newMomEssentialPregnancyTracker"',' id="nothingg" style="display:none;visibility:hidden;" ', $result[0]['event_description']);
			//$result[0]['event_description'] = str_ireplace('<ul id="pregnancy_tracker_slider">',' <ul id="nothing_slider"> ', $result[0]['event_description']);	
		}
		//New Mom Essential checking END

		if ($this->context->customer->id){
			$result[0]['event_description'] = str_ireplace('REGISTEREDNOT','" style="display:none;visibility:hidden" "', $result[0]['event_description']);
		}else{
			$result[0]['event_description'] = str_ireplace('REGISTEREDDONE','" style="display:none;visibility:hidden" "', $result[0]['event_description']);
		}
		
		$result[0]['event_description'] = str_ireplace('SHAREBUTTON','<div class="fb-share-button" data-href="https://www.motherhood.com.my/events/'.$except_slug.'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" target="_blank" rel="noopener">Share</a></div>', $result[0]['event_description']);
		
		$sqllistbox = 'SELECT *
		FROM ps_events_listbox
		WHERE listbox_event_id = '.$event_id.'';
		$resultlistbox = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqllistbox);
		
		$i = 0;
		foreach($resultlistbox as $listbox){
			$listboxvalue = $resultlistbox[$i]['listbox_value'];
			$listboxquestionnumber = $resultlistbox[$i]['listbox_question_number'];
			$maxslot = $resultlistbox[$i]['listbox_max_value'];
				
		$sqll = 'SELECT COUNT(1) as c
				FROM ps_events_subscriber
				WHERE subscriber_event_id = '.$event_id.' AND subscriber_question'.$listboxquestionnumber.' = "'.$listboxvalue.'" ';
		$resultt = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqll);
			$valuescount = $resultt[0]['c'];
			$slotleft = $maxslot - $valuescount; 
			if ($slotleft <= 0){
			$disable = "disabled";
			}else{
			$disable = '';}
		
			$result[0]['event_description'] = str_ireplace('<option disabled="disabled" subscribernumber="'.$listboxquestionnumber.'" selected="selected"></option>',' <option disabled="disabled" subscribernumber="'.$listboxquestionnumber.'" selected="selected"></option> <option value="'.$listboxvalue.'" '.$disable.'>'.$listboxvalue.' '.$slotleft.' left</option>', $result[0]['event_description']);
		$i++;
		};
		if($event_id == 223){
			$sustagenSQL = '
				SELECT subscriber_question1 as caption, subscriber_question3 as name, subscriber_question6 as image
				FROM  `'._DB_PREFIX_.'events_subscriber` 
				WHERE subscriber_event_id = 87 AND NOT (subscriber_question30 = 1)
			';
			$sustagenResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sustagenSQL); $i = 1;
			foreach($sustagenResult as $sr){
				if($i == 13){
					$toggleHidden = '<div class="togglehidden collapse" id="collapseExample">';
				}else{ $toggleHidden = ''; }
				$header = '<div class="col-md-3 col-lg-3 col-xs-4" style="margin-bottom:20px;padding-left:1rem;padding-right:1rem;">';
				$footer = '</div>';
				 $content = '<a title="'.$sr["caption"].'" href="'.$sr["image"].'"> ';
				 $content .= '<img style="border: 4px solid #fdd509; width: 100%;height: 30vh;object-fit: contain;background: white;" src="'.$sr["image"].'" width="90%"></a>';
				 $inside = $inside.$toggleHidden.$header.$content.$footer; $i++;
			}   
				if($i > 12){
					$extraDivForToggle = '</div>';
					$showMoreBtn = '<div class="clearfix"></div><div class="col-md-12 col-lg-12" style="padding:20px 0px;">';
					$showMoreBtn .= '<a class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" id="toggleBtn"
					style="background-color: #fdd509;font-size: 15px;border:none;
					color: white;font-weight: bold;padding: 15px;
					border-radius: 12px;font-family: GothamRounded-medium;">Show More</a>';
					$showMoreBtn .= '</div>';

				}else{ $extraDivForToggle = ''; $showMoreBtn = '';}

				$head = '<div class="popup-gallery" style="padding-bottom:50px;"><div class="row-fluid text-center" style="padding: 30px 0px 50px 0px;">';
				$foot = '</div></div>'.$extraDivForToggle;
				$full = $head.$inside.$foot.$showMoreBtn;
				$result[0]['event_description'] = str_ireplace('{{gallery}}',$full, $result[0]['event_description']);
		}
		
		if ($this->context->customer->id && $event_id==108 ){
			// for warehouse registration, if already registered past 30 days, will straight show the thank you page
			$sql = '
				SELECT COUNT(1) AS ccount
				FROM
				`'._DB_PREFIX_.'events_subscriber` 
				WHERE subscriber_event_id="'.$event_id.'" AND subscriber_created_at >= ADDDATE(CURRENT_DATE, INTERVAL -30 DAY) AND subscriber_customer_id = '.$this->context->customer->id;

			$resultRegister = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
			if ($resultRegister[0]['ccount'] > 0 || (isset($_SESSION['registeredWarehouse']) && $_SESSION['registeredWarehouse']==1)){
				$result[0]['event_description']=$result[0]['event_description']."<script>window.location='https://www.motherhood.com.my/mobile/events/thank-you-for-registering';</script>";
			}
		}else if ( (isset($_SESSION['registeredWarehouse']) && $_SESSION['registeredWarehouse']==1) && $event_id==108 ){
			$result[0]['event_description']=$result[0]['event_description']."<script>window.location='https://www.motherhood.com.my/mobile/events/thank-you-for-registering';</script>";
		}

		if ($this->context->customer->id && $event_id==130 ){
			// for warehouse registration, if already registered past 30 days, will straight show the thank you page
			$sql = '
				SELECT COUNT(1) AS ccount
				FROM
				`'._DB_PREFIX_.'events_subscriber` 
				WHERE subscriber_event_id="'.$event_id.'" AND subscriber_created_at >= ADDDATE(CURRENT_DATE, INTERVAL -30 DAY) AND subscriber_customer_id = '.$this->context->customer->id;

			$resultRegister = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
			if ($resultRegister[0]['ccount'] > 0 || (isset($_SESSION['registeredWarehouse']) && $_SESSION['registeredWarehouse']==1)){
				$result[0]['event_description']=$result[0]['event_description']."<script>window.location='https://www.motherhood.com.my/mobile/events/thank-you-for-preregistering';</script>";
			}
			
			// for pre-warehouse step2, will get the qty of slots left per combination
			$sql = '		
					SELECT count(1) as countPurchased FROM ps_orders A JOIN ps_order_detail B
					ON A.id_order=B.id_order
					WHERE product_attribute_id BETWEEN 30299 AND 30314
					AND id_customer='.$this->context->customer->id.' 
					AND current_state in ( 2,3,4,5 ) 
				';
			$resultCheckPurchased = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			if ($resultCheckPurchased[0]['countPurchased']>=1 ){
				echo '<script type="text/javascript">
						window.location="https://www.motherhood.com.my/events/thank-you-for-preregisteration";
					</script>
					';
				die();
			}
			
		}
		
		
		if (isset($_SESSION['isPWA']) && $_SESSION['isPWA']==1 && $event_id==206 ){
			$result[0]['event_description'] = str_ireplace('src="/warehouse-sale','src="/mobile/warehouse-sale',$result[0]['event_description']);
			$result[0]['event_description'] = str_ireplace("src='/warehouse-sale","src='/mobile/warehouse-sale",$result[0]['event_description']);
		}
		
		if ($event_id==100){
			$result[0]['event_description'] = str_ireplace("<img src='","<img src='' data-src='",$result[0]['event_description']);
			$result[0]['event_description'] = str_ireplace('<img src="','<img src="" data-src="',$result[0]['event_description']);
		}
		
		if (!$this->context->customer->id && $event_id==131){
			echo "<script>window.location='/login?back=events/thank-you-for-preregistering'</script>";
			die();
		
		}else if ($this->context->customer->id && $event_id==131){
			
			// for pre-warehouse step2, will get the qty of slots left per combination
			$sql = '		
					SELECT count(1) as countPurchased FROM ps_orders A JOIN ps_order_detail B
					ON A.id_order=B.id_order
					WHERE product_attribute_id BETWEEN 30299 AND 30314
					AND id_customer='.$this->context->customer->id.' 
					AND current_state in ( 2,3,4,5 ) 
					and A.date_add>="2020-11-01"
				';
			$resultCheckPurchased = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			if ($resultCheckPurchased[0]['countPurchased']>=1 ){
				echo '<script type="text/javascript">
						window.location="https://www.motherhood.com.my/events/thank-you-for-preregisteration";
					</script>
					';
				die();
			}
			
			//'Added To Cart';
			$sql = '		
					SELECT id_product_attribute FROM ps_cart A
					JOIN ps_cart_product B ON A.id_cart=B.id_cart
					WHERE id_product_attribute BETWEEN 30299 AND 30314 
					AND id_customer='.$this->context->customer->id.' 
					AND A.id_cart NOT IN (SELECT id_cart FROM ps_orders WHERE id_customer='.$this->context->customer->id.')
					
				';
				
				
			$resultInCart = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			$inCartArray=array();
			foreach($resultInCart as $onInCart){
				$inCartArray[$onInCart['id_product_attribute']]=1;
			}
			
			// for pre-warehouse step2, will get the qty of slots left per combination
			$sql = '		
					SELECT id_product_attribute , IF(quantity<0,0,quantity) as quantity FROM ps_stock_available
					WHERE id_product_attribute BETWEEN 30299 AND 30314
					ORDER BY id_product_attribute 
				';
			$resultRegister = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			$id_combination=30299;
			
			$ddate=3;
			$hhour=1;
			foreach($resultRegister as $oneRow){
				if ($inCartArray[$oneRow['id_product_attribute']]){
					$result[0]['event_description'] = str_ireplace('{qtyleft'.$ddate.'-'.$hhour.'}',"<font color=red>Added to Cart</font>",$result[0]['event_description']);
					$result[0]['event_description'] = str_ireplace('{cartAttribute}',"selectedCombination=".$oneRow['id_product_attribute'].";",$result[0]['event_description']);
					
					echo "<script>window.location='/quick-order'</script>";
					die();
					
				}else
					$result[0]['event_description'] = str_ireplace('{qtyleft'.$ddate.'-'.$hhour.'}',$oneRow['quantity']." seats left!",$result[0]['event_description']);
				
				$hhour++;
				if ($hhour>4){
					$hhour=1;
					$ddate++;
				}
			}
			$result[0]['event_description'] = str_ireplace('{cartAttribute}',"",$result[0]['event_description']);
			
		}
			
		
		if ($this->context->customer->id && $event_id==132){
			
			// for pre-warehouse step2, will get the qty of slots left per combination
			$sql = '		
					SELECT product_name, A.id_order FROM ps_orders A JOIN ps_order_detail B
					ON A.id_order=B.id_order
					WHERE product_attribute_id BETWEEN 30299 AND 30314
					AND current_state in ( 2,3,4,5 ) 
					AND id_customer='.$this->context->customer->id.'
					and A.date_add>="2020-11-01"
				';
			$resultCheckPurchased = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			$product_name=$resultCheckPurchased[0]['product_name'];
			
			if ($product_name){
				$pArray=explode(" ",$product_name);
				
				//RSVP Motherhood Baby Expo - Select Date : Saturday - 30.01.2021 (7PM-10PM)
				//Motherhood Baby Fair - Select Date : Friday 04.09.2020 (10AM-1PM)
				$pDate=$pArray[8]." ".$pArray[10];
				$pTime=$pArray[11];
					
				$result[0]['event_description'] = str_ireplace('{selectedDate}',$pDate,$result[0]['event_description']);
				$result[0]['event_description'] = str_ireplace('{selectedTime}',$pTime,$result[0]['event_description']);
				
			}else{
				echo "<script>window.location='/events/thank-you-for-preregistering'</script>";
				die();
			}
		
			$sql = '		
					SELECT COUNT(1) AS ccount FROM ps_order_product_virtualused
					WHERE id_order='.$resultCheckPurchased[0]['id_order'].' AND id_count=1
				';
			$resultCheckUsed = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			$ccount=$resultCheckUsed[0]['ccount'];
			if ($ccount){
				$sliderHTML="<div class='pure-g' background='red'>
						<div class='pure-u-1' style='background-color:red;color:white;text-align:center'>
							THIS FREE GIFT HAVE BEEN REDEEMED
						</div>
					</div>";
			}else{
				$sliderHTML="<div align='center'>
						<div class='bar1 bar' ></div>
					</div>";
			}
			
			$result[0]['event_description'] = str_ireplace('{sliderHTML}',$sliderHTML,$result[0]['event_description']);
				
			
			
			
		
			$sql = '		
					SELECT COUNT(1) AS ccount FROM ps_order_product_virtualused
					WHERE id_order='.$resultCheckPurchased[0]['id_order'].' AND id_count=2
				';
			$resultCheckUsed = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			$ccount=$resultCheckUsed[0]['ccount'];
			if ($ccount){
				$sliderHTML="<div class='pure-g' background='red'>
						<div class='pure-u-1' style='background-color:red;color:white;text-align:center'>
							THIS RM10 VOUCHER HAS BEEN REDEEMED.
						</div>
					</div>";
			}else{
				$sliderHTML="<div align='center'>
						<div class='bar2 bar' ></div>
					</div>";
			}
			
			$result[0]['event_description'] = str_ireplace('{sliderHTML2}',$sliderHTML,$result[0]['event_description']);
				
				
			
		}
		if (!$this->context->customer->id && $event_id==132){
			echo "<script>window.location='/login?back=events/thank-you-for-preregisteration'</script>";
			die();
		}
		
		
		
		
		if($this->context->customer->id && $event_id == 93){
			$submittedSuperkids=0;
			
			$currentSQL = '
				SELECT count(1) AS ccount
				FROM  `'._DB_PREFIX_.'events_subscriber` 
				WHERE subscriber_event_id = 93 AND newEmail="'.$this->context->customer->email.'"
			';
			$currentResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($currentSQL); 
			
			if ($currentResult[0]['ccount']>0)	{	
				$result[0]['event_description'] =str_ireplace('{{showForm}}',' ;visibility:hidden;display:none',$result[0]['event_description']);
				$submittedSuperkids=1;
			}
			
			
			$currentSQL = '
				SELECT email, A.firstname, A.lastname, address1,phone, postcode, city, id_state FROM ps_customer A LEFT JOIN ps_address B
				ON A.id_customer=B.id_customer
				WHERE A.id_customer='.$this->context->customer->id.'
			';
			$currentResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($currentSQL); 
			
			$currentEmail=$currentResult[0]['email'];
			$firstname=$currentResult[0]['firstname'];
			$lastname=$currentResult[0]['lastname'];
			$address1=$currentResult[0]['address1'];
			$phone=$currentResult[0]['phone'];
			$postcode=$currentResult[0]['postcode'];
			$city=$currentResult[0]['city'];
			$id_state=$currentResult[0]['id_state'];
		
			$result[0]['event_description'] =str_ireplace('{{isredeem}}',1,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{currentEmail}}',$currentEmail,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{firstname}}',$firstname,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{lastname}}',$lastname,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{address1}}',$address1,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{phone}}',$phone,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{postcode}}',$postcode,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{city}}',$city,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{stateSelected'.$id_state.'}}','SELECTED',$result[0]['event_description']);
			
		}else if ($event_id == 93){
			$submittedSuperkids=0;
			
			$result[0]['event_description'] =str_ireplace('{{isredeem}}',0,$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{currentEmail}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{firstname}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{lastname}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{address1}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{phone}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{postcode}}',"",$result[0]['event_description']);
			$result[0]['event_description'] =str_ireplace('{{city}}',"",$result[0]['event_description']);
			
		}
		
		if ( $event_id==93 ){
			$this->context->controller->addCSS(_PS_MODULE_DIR_.'enlineamixmod/views/css/enlineavipdeals.css');
			$productListStr="";
			$currentSQL = '
				SELECT 
				name, id_image, A.id_product,link_rewrite,id_category_default as category,ean13 from ps_product_lang A join ps_image B
				on A.id_product=B.id_product and A.id_lang=1
				join ps_product C on A.id_product=C.id_product
				and B.cover=1
				and C.active=1
				and A.id_product in (select id_product from `ps_category_product` where id_category=929)

			';
			$currentResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($currentSQL); 
			
			foreach($currentResult as $oneResult){
				
				//$thisProduct=new Product($oneResult['id_product']);
				$getImageLink= $this->context->link->getImageLink($oneResult['link_rewrite'], (int)$oneResult['id_product'].'-'.(int)$oneResult['id_image'], ImageType::getFormatedName('large'));

				//$productListStr.='<div class="col-lg-4 col-xs-6" style="padding-left: 0px; padding-right: 0px;"><a target="_blank" rel="noopener"><img src="'.$getImageLink.'" alt="" width="100%" height="100%" /></a></div>';
				
				if ($submittedSuperkids){
					
					
					$checkCartInSQL = '
						SELECT COUNT(1) AS ccount FROM( SELECT 1 FROM ps_orders A
							JOIN ps_order_detail B
							ON A.id_order=B.id_order
							AND product_id='.$oneResult['id_product'].'
							AND id_customer='.$this->context->customer->id.' AND current_state NOT IN (6,7,8)
							UNION
							SELECT 1 FROM ps_cart D
							join ps_cart_product E
							on D.id_cart=E.id_cart
							AND id_product='.$oneResult['id_product'].'
							AND id_customer='.$this->context->customer->id.' AND D.id_cart NOT IN (SELECT id_cart FROM ps_orders union SELECT id_cart_parent FROM ps_cart_split)
							)BB
					';
					
					$cartCheckResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($checkCartInSQL); 
					if ($cartCheckResult[0]['ccount']>0){
						$clickStr=' onclick="alert(\'You can only redeem once.\');" ';
						$redeemStr=' Claimed ';
					}else{
						$clickStr=' onclick="ajaxCart.add('.$oneResult['id_product'].', null, false, this);" ';
						$redeemStr=' Redeem Now ';
					}
				}else{
					$clickStr=' onclick="document.getElementById(\'newEmail\').focus();"';
					$redeemStr='Sign Up Below';
				}
				$productListStr.='
                <div class="col-lg-4 col-xs-6 dealsBox freeitem dealsBoxCat668" '.$clickStr.'>
					<div class="col-md-12 dealsImageBox">
					<a><img style="img-responsive dealsImage" src="'.$getImageLink.'" alt="" width="100%" height="100%" /></a>
					</div>
					<div class="col-md-12 dealsBoxContent" style="text-align:center">
						<h4 class="dealsName" style="margin-bottom:0px">'.$oneResult['name'].'</h4>
						<button type="button" class="btn btn-default button button-medium pull-center" style="padding:8px;width:90%;font-size:smaller">'.$redeemStr.'</button>
					</div>
					
				</div>
				';
				
				
			}
				$productListStr.='<div class="row"></div>';
			
			$result[0]['event_description'] =str_ireplace('{{productlist}}',$productListStr,$result[0]['event_description']);
			
		}
		
		#check if customet has session user id and the page id is for edd page for newmom
		if($this->context->customer->id && ($event_id == 99 || $event_id == 98)){
			/* 
			* to retrieve previous event data so we can link data between event.
			* DESC order because we want to latest info 
			*/
			$referEventId = 212;
			$currentSQL = '
				SELECT count(1) AS ccount
				FROM  `ps_events_subscriber` 
				WHERE `subscriber_event_id` = "' . $referEventId .  '"AND `newEmail` = "' . $this->context->customer->email . '" ORDER BY `subscriber_id` DESC LIMIT 1 
			';
			
			$currentResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($currentSQL); 
			
			if ($currentResult[0]['ccount']>0)	{	
				$result[0]['event_description'] = str_ireplace('{{currentEmail}}', $this->context->customer->email, $result[0]['event_description']);
			}
			else
			{
				// $sqlGetSlug  = "SELECT * FROM ps_events WHERE `event_id` = " . $referEventId . " LIMIT 1"; # page that handle facebook question for new mom
				// $querySlug   = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlGetSlug);
				// $event_slug  = $querySlug[0]['event_slug'];
				// $redirectUrl = "https://". $_SERVER['HTTP_HOST'] . '/events/' . $event_slug;
				echo "<script type='text/javascript'>alert('Sorry, You not eligible to access this page.');</script>";
				// echo "<script type='text/javascript'>window.location.href='" . $redirectUrl . "'</script>";
			}
		}
		
		$result[0]['event_description'] = str_ireplace('/s3.amazonaws.com/motherhood.com.my/',"/cdn.motherhood.com.my/",$result[0]['event_description']);
		
        $this->context->smarty->assign(array(
            'event_info' => $result[0],
            'events_view_path' => _PS_MODULE_DIR_. 'enlineamixmod/views',
            
        ));
		
		$except_slug=$result[0]['event_slug'];
		
		require_once($_SERVER['DOCUMENT_ROOT'].'/modules/enlineasectionslider/enlineasectionslider.php');
		$enlineasectionslider = new enlineasectionslider();
		
        $sql = '
			SELECT event_mini_banner, event_slug, event_title
			FROM
			`'._DB_PREFIX_.'events` 
			WHERE event_start_date <= current_date AND event_end_date >= current_date AND event_mini_banner IS NOT NULL  AND event_active=1 AND NOT(event_mini_banner="0")  AND NOT(event_mini_banner="#")
			AND NOT event_slug = "'.$except_slug.'"
			LIMIT 4';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		
        $this->context->smarty->assign(array(
            'event_minibanner' => $result,
			'has_ended'=>$has_ended,
            'displayProductListFooter' => Hook::exec('displayProductListFooter',array("displayPage"=>"category","id"=>"2")),
        ));
		
		$this->setTemplate('enlineaevents.tpl');
    }
    
	
    public function postProcess()
    {
			// 132 doesn't use submit
			if(Tools::getValue('swipeFreeItem')){
				$swipeFreeItem=Tools::getValue('swipeFreeItem');
				// for pre-warehouse step2, will get the qty of slots left per combination
				$sql = '		
						SELECT A.id_order FROM ps_orders A JOIN ps_order_detail B
						ON A.id_order=B.id_order
						WHERE product_attribute_id BETWEEN 30299 AND 30314
						AND current_state in ( 2,3,4,5 ) 
						AND id_customer='.$this->context->customer->id.'
					';
				$resultCheckPurchased = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				$swipeOrderId=$resultCheckPurchased[0]['id_order'];
				
				$sql = '
					INSERT INTO ps_order_product_virtualused VALUES (41971,'.$swipeOrderId.','.$swipeFreeItem.',1,current_date)';
				//die();
				Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			}
			
        if (Tools::isSubmit('submit'))
		{
			$template="";
				
			$sql = '
				SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
				FROM
				`'._DB_PREFIX_.'events` 
				WHERE event_slug="'.pSQL(Tools::getValue('event_name')).'" ';
			$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
			if (!$result[0]){
				$sql = '
					SELECT *, if(event_end_date >= current_date,"ok","end") AS has_ended
					FROM
					`'._DB_PREFIX_.'events` 
					WHERE event_default=1';
				$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
			}
			
			$has_ended=$result[0]['has_ended'];
			if ($has_ended=='end'){
				$msg = "This event has ended. Please refer Motherhood.com.my for more events!";
				$this->context->smarty->assign("check",$msg);
				
				$this->setTemplate('enlineaevents.tpl');
				return;
			}

			$event_id=$result[0]['event_id'];
			$event_email_template=$result[0]['event_email_template'];
			$event_submit_msg=$result[0]['event_submit_msg'];
			$event_email_subject=$result[0]['event_email_subject'];
			
			
			/* friso says no need validation anymore
			if ($event_id==101){
				
				$sql = '
					SELECT COUNT(1) as ccount FROM 
					 tbl_friso_member
					WHERE id_friso="Friso-'.Tools::getValue('subscriber_question6').'"
					AND email="'.Tools::getValue('newEmail').'"
					';
				$resultFriso = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				if (!$resultFriso[0]['ccount']){
					$msg = "Please key in correct Friso ID & email!";
					$this->context->smarty->assign("check",$msg);
					
					$this->setTemplate('enlineaevents.tpl');
					return;
				}
					
			}
			*/

			$this->context->smarty->assign("showErrors","");
			/**
			*
			Test
			*
			**/
			
			$target_dir = $_SERVER['DOCUMENT_ROOT']."/modules/enlineamixmod/uploadedimage/";
			/*staging.motherhood.com.my/modules/enlineamixmod/uploadedimage/Megalosaurus4.jpg
			"https://staging.motherhood.com.my/modules/enlineamixmod/uploadedimage/";*/
				$target_file = $target_dir.pSQL(Tools::getValue('event_name')).date("y-m-d").date("H-i").basename($_FILES["fileToUpload"]["name"]);
				$eventname = pSQL(Tools::getValue('event_name'));
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				// Check if image file is a actual image or fake image
				if($_FILES){
				if(isset($_POST["submit"])) 
				{
					$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
					
				if($check !== false) {
					$uploadOk = 1;
				} else {
					
					echo "<script type='text/javascript'>alert('Sorry, this format is not allowed.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					$uploadOk = 0;
				}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "<script type='text/javascript'>alert('Sorry, file already exists.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					$uploadOk = 0;
				}
				// Check file size
				
				if (filesize($_FILES["fileToUpload"]["tmp_name"]) > 59000000) {
					
					echo "<script type='text/javascript'>alert('Sorry, Your file is too large.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "mp3" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "wmv") {

					echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, PNG, GIF, MP4, MP3, AVI, MOV, WMV files are allowed.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					
					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
								
					echo "<script type='text/javascript'>alert('Sorry, your file was not uploaded.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					} else {

					echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
						
					}
				}
				}
				
				//Listbox checking
				$sqllistbox = 'SELECT *
								FROM ps_events_listbox
								WHERE listbox_event_id = '.$event_id.'';
								$resultlistbox = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqllistbox);
				
						$i = 0;
					
						if(count($resultlistbox)>=1){
						$sqlll = 'SELECT COUNT(1) as c
						FROM ps_events_subscriber
						WHERE subscriber_event_id = '.$event_id.' AND  subscriber_customer_id = '.$this->context->customer->id.'';
						$resulttt = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlll);
						$registercheck = $resulttt[0]['c'];
						if($registercheck >= 1){
							echo "<script type='text/javascript'>alert('We are sorry, one person can only register for one slot');</script>";
							echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
							exit;
						}
				
						foreach($resultlistbox as $listbox){
							$listboxvalue = $resultlistbox[$i]['listbox_value'];
							$listboxquestionnumber = $resultlistbox[$i]['listbox_question_number'];
							$maxslot = $resultlistbox[$i]['listbox_max_value'];
						
				$sqll = 'SELECT COUNT(1) as c
						FROM ps_events_subscriber
						WHERE subscriber_event_id = '.$event_id.' AND subscriber_question'.$listboxquestionnumber.' = "'.$listboxvalue.'" ';
				$resultt = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqll);
					$valuescount = $resultt[0]['c'];
					$slotleft = $maxslot - $valuescount; 

					if ($slotleft <= 0){
						$lbvalue = pSQL(Tools::getValue('subscriber_question'.$listboxquestionnumber));
						if ($listboxvalue == $lbvalue){
						echo "<script type='text/javascript'>alert('Sorry, this selection is out of stock');</script>";
						echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
						exit;
							}
					}else{}
				
					$i++;
						};	}
					//Listbox checking End
			/**
			*
			Test
			*
			**/

			//Enfagrow, NewMum check
			if($event_id == 56){
				$newEmail = pSQL(Tools::getValue('subscriber_question5'));
				$sql = 'SELECT count(1) as c
				FROM ps_events_subscriber
				WHERE subscriber_event_id = 100 AND subscriber_question3 = "Yes" AND newEmail = "'.$newEmail.'" ';
				$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				$existence = $result[0]['c'];
				if($existence == 1){
					echo "<script type='text/javascript'>alert('Sorry. The Enfagrow A+ Free Sample can only be redeemed one time ONLY per one registered account.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					exit;
				}
				
								
				$user = "c0kElaB94"; 
				$pass = "B3}W[f}x#7OP";

				$host = "10.148.0.7";
				$dbname = "com.kelabmama";

				$con = mysqli_connect($host, $user, $pass,$dbname);
				$sql = 'SELECT count(1) as c
				FROM events_subscriber
				WHERE subscriber_event_id = 2 AND newEmail = "'.$newEmail.'" ';
				$result = mysqli_query($con,$sql);
				$r = mysqli_fetch_row($result);
				$existence = $r[0];
				if($existence >= 1){
					echo "
					<script>alert('Mohon Maaf. Anda hanya akan menerima SATU sample sahaja daripada Motherhood atau Kelabmama!');
						window.location='".$_SERVER['HTTP_REFERER']."';
						</script>
						";
				
					die();
				}

			}

            if(isset($this->context->customer) && $this->context->customer->id > 0)
				$customer_id = $this->context->customer->id;
			else $customer_id = 0;
            
				$subscriber_question1= pSQL(Tools::getValue('subscriber_question1'));
				$subscriber_question2= pSQL(Tools::getValue('subscriber_question2'));
				$subscriber_question3= pSQL(Tools::getValue('subscriber_question3'));
				$subscriber_question4= pSQL(Tools::getValue('subscriber_question4'));
				$subscriber_question5= pSQL(Tools::getValue('subscriber_question5'));
				$filename= $eventname.date("y-m-d").date("H-i").basename($_FILES["fileToUpload"]["name"]);
				if ($_FILES["fileToUpload"]["name"])
					$subscriber_question6="https://www.motherhood.com.my/modules/enlineamixmod/uploadedimage/$filename";
				else 
					$subscriber_question6="";
				$subscriber_question7=  pSQL(Tools::getValue('subscriber_question7'));
				$subscriber_question8=  pSQL(Tools::getValue('subscriber_question8'));
				$subscriber_question9=  pSQL(Tools::getValue('subscriber_question9'));
				$subscriber_question10= pSQL(Tools::getValue('subscriber_question10'));
				$subscriber_question11= pSQL(Tools::getValue('subscriber_question11'));
				$subscriber_question12= pSQL(Tools::getValue('subscriber_question12'));
				$subscriber_question13= pSQL(Tools::getValue('subscriber_question13'));
				$subscriber_question14= pSQL(Tools::getValue('subscriber_question14'));
				$subscriber_question15= pSQL(Tools::getValue('subscriber_question15'));
				$subscriber_question16= pSQL(Tools::getValue('subscriber_question16'));
				$subscriber_question17= pSQL(Tools::getValue('subscriber_question17'));
				$subscriber_question18= pSQL(Tools::getValue('subscriber_question18'));
				$subscriber_question19= pSQL(Tools::getValue('subscriber_question19'));
				$subscriber_question20= pSQL(Tools::getValue('subscriber_question20'));

				$subscriber_question21= pSQL(Tools::getValue('subscriber_question21'));
				$subscriber_question22= pSQL(Tools::getValue('subscriber_question22'));
				$subscriber_question23= pSQL(Tools::getValue('subscriber_question23'));
				$subscriber_question24= pSQL(Tools::getValue('subscriber_question24'));
				$subscriber_question25= pSQL(Tools::getValue('subscriber_question25'));
				$subscriber_question26= pSQL(Tools::getValue('subscriber_question26'));
				$subscriber_question27= pSQL(Tools::getValue('subscriber_question27'));
				$subscriber_question28= pSQL(Tools::getValue('subscriber_question28'));
				$subscriber_question29= pSQL(Tools::getValue('subscriber_question29'));
				$subscriber_question30= pSQL(Tools::getValue('subscriber_question30'));
					
				$newEmail=pSQL(strtolower(Tools::getValue('newEmail')));
				$newFirstName=pSQL(Tools::getValue('newFirstName'));
				$newLastName= pSQL(Tools::getValue('newLastName'));
				$newPassword= pSQL(Tools::getValue('newPassword'));

				if($event_id == 56){
					$newFirstName = pSQL(Tools::getValue('subscriber_question13'));
					$newLastName = pSQL(Tools::getValue('subscriber_question14'));
				}
				if($event_id == 100 || $event_id == 212 || $event_id == 222){
					$add = "6";
					$subscriber_question1 = $add.$subscriber_question1;
				}
				if($event_id == 56){
					$add = "6";
					$subscriber_question1 = $add.$subscriber_question15.$subscriber_question1;
				}
				if($event_id == 53){
					$subscriber_question14 = implode(",", $subscriber_question14);
				}
				$sql = '
					INSERT INTO
					`'._DB_PREFIX_.'events_subscriber` (subscriber_customer_id, subscriber_event_id, subscriber_question1,
					subscriber_question2,subscriber_question3,subscriber_question4,subscriber_question5,subscriber_question6,subscriber_question7,subscriber_question8
					,subscriber_question9,subscriber_question10,subscriber_question11,subscriber_question12,subscriber_question13,subscriber_question14,subscriber_question15,subscriber_question16
					,subscriber_question17,subscriber_question18,subscriber_question19,subscriber_question20
					,subscriber_question21,subscriber_question22,subscriber_question23,subscriber_question24,subscriber_question25
					,subscriber_question26,subscriber_question27,subscriber_question28,subscriber_question29,subscriber_question30
					,subscriber_created_at,subscriber_updated_at,newEmail,newFirstName,newLastName
					)  VALUES(
					'.$customer_id.',
					'.$event_id.',
					"'.$subscriber_question1.'",
					"'.$subscriber_question2.'",
					"'.$subscriber_question3.'",
					"'.$subscriber_question4.'",
					"'.$subscriber_question5.'",
					"'.$subscriber_question6.'",
					"'.$subscriber_question7.'",
					"'.$subscriber_question8.'",
					"'.$subscriber_question9.'",
					"'.$subscriber_question10.'",
					"'.$subscriber_question11.'",
					"'.$subscriber_question12.'",
					"'.$subscriber_question13.'",
					"'.$subscriber_question14.'",
					"'.$subscriber_question15.'",
					"'.$subscriber_question16.'",
					"'.$subscriber_question17.'",
					"'.$subscriber_question18.'",
					"'.$subscriber_question19.'",
					"'.$subscriber_question20.'",
					"'.$subscriber_question21.'",
					"'.$subscriber_question22.'",
					"'.$subscriber_question23.'",
					"'.$subscriber_question24.'",
					"'.$subscriber_question25.'",
					"'.$subscriber_question26.'",
					"'.$subscriber_question27.'",
					"'.$subscriber_question28.'",
					"'.$subscriber_question29.'",
					"'.$subscriber_question30.'",
					current_timestamp,
					current_timestamp,
					"'.$newEmail.'",
					"'.$newFirstName.'",
					"'.$newLastName.'"
					
					);';
				Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
			if($event_email_template){
				
				$this->sendEmail($event_email_template,$event_email_subject,$newEmail);
			}
			
			if($event_id == 87){
				echo "<script type='text/javascript'>alert('Thank You! We have successfully received your submission.');</script>";
				echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/events/sustagen-contest-gallery'</script>";
			}

			if($event_id == 83){
				echo "<script type='text/javascript'>alert('Thank You for your submission');</script>";
				echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/clearblue'</script>";
			}
			
			if($event_id == 201){


				/* Generate a discount code for ParentCraft 50% */
				$pccode = NULL;
				do $pccode = 'PCRAFT'.Tools::passwdGen(4);
				while (CartRule::cartRuleExists($pccode));

				/* Voucher creation and affectation to the customer */
				$cartRule = new CartRule();
				$cartRule->id_customer = $this->context->customer->id;
				$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
				$cartRule->date_to = date('Y-m-d H:i:s', time() + 30*24*60*60); // 30 days expiry date
				$cartRule->description = "ParentCraft 50% OFF";
				$cartRule->quantity = 1;
				$cartRule->quantity_per_user = 1;
				$cartRule->highlight = 1;
				$cartRule->partial_use = 0;
				$cartRule->code = $pccode;
				$cartRule->active = 1;
				$cartRule->minimum_amount_tax = 1;
				$cartRule->minimum_amount_currency = 1;
				$cartRule->product_restriction = 1;
				$cartRule->reduction_percent = 50;
				$cartRule->reduction_amount = 0;
				$cartRule->reduction_tax = 1;
				$cartRule->reduction_currency = 1;
				$cartRule->reduction_product = -2;
				$cartRule->reduction_cap = 75;
				$cartRule->minimum_amount = 0;
				$cartRule->minimum_amount_tax = 1;
				$cartRule->minimum_amount_currency = 1;
				$cartRule->minimum_amount_shipping = 0;
				$cartRule->cart_rule_restriction = 0;

				$languages = Language::getLanguages(true);
				foreach ($languages AS $language)
				{
					$cartRule->name[(int)($language['id_lang'])] = "ParentCraft 50% - ".$pccode;
				}
				$cartRule->add();	
				
				$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
				if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql))
				{
	
					$sqld = '
							SELECT id_product_rule_group 
							FROM ps_cart_rule_product_rule_group
							WHERE id_cart_rule = "'.$cartRule->id.'"
					';
					$resultd = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqld);
					$resultd = $resultd[0]['id_product_rule_group'];

					$sqlg = '
							UPDATE ps_cart_rule_product_rule
							SET type = "products"
							WHERE id_product_rule_group = "'.$resultd.'"
					';
					if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlg)){

						$selectipr = '
								SELECT id_product_rule
								FROM ps_cart_rule_product_rule
								WHERE id_product_rule_group = "'.$resultd.'"
								';
						$resultIPR = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($selectipr);
						$resultIPR = $resultIPR[0]['id_product_rule'];
					
						$updatePID = '
								UPDATE ps_cart_rule_product_rule_value
								SET id_item = "38999"
								WHERE id_product_rule = "'.$resultIPR.'"
									';	
							if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updatePID)){
							echo "<script type='text/javascript'>alert('ParentCraft Voucher Created successfully.');</script>";
							/* Send New mom parent craft evoucher by email */
							$pcexdate = date('Y-m-d H:i:s', time() + 30*24*60*60);
							$customer = $this->context->customer->lastname." ".$this->context->customer->firstnamee;
							$id_lang = 1;
							$data = array(
								'{customer_name}' => $customer,
								'{pc_code}' =>$pccode,
								'{pc_ex_date}' => $pcexdate,
							);
							$mail= "chris.tan@nurengroup.com"; //$this->context->customer->email;
							$name = $this->context->customer->lastname." ".$this->context->customer->firstname;
							$template = "newmom-parentcraft-class";
							$iso = "en";
							$shopemail = 'hi@motherhood.com.my';
							$shopname = 'motherhood.com.my';
							$subject = "Redeem Your Gift Voucher for Parentcraft Classes 2019 | New Mom Benefits" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
							
							if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
								$this->context->smarty->assign("check","0");
								$this->context->smarty->assign("showErrors",'Thank You for joining motherhood.com.my');
								return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
								
								echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
							}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
								$id_lang = Language::getIdByIso('en');
								return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
							}	
								echo "<script type='text/javascript'>alert('Thank You for joining motherhood.com.my');</script>";
								echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
								 /*Send New mom parent craft evoucher by email END */
						}else{
							echo "<script type='text/javascript'>alert('There was error creating the voucher.');</script>";
							echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
							exit;
						}
					}
					else{
						echo "<script type='text/javascript'>alert('There was an error creating the voucher.');</script>";
						echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
						exit;
					}
				}
				else{
					echo "<script type='text/javascript'>alert('error');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					exit;
				}
			}

			if($event_id == 49){
				echo "<script type='text/javascript'>window.location.href=' https://www.biotherm.com.my/whats-new/life-plankton-clear-essence/'</script>";
			}

			if($event_id == 224){
				echo "<script type='text/javascript'>alert('Thank you for requesting a free sample. Your sample request submission is successful.');</script>";
				echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/monthly-promotions'</script>";
			}
			
			// frisgold sample
			if($event_id == 115){
				echo "<script type='text/javascript'>alert('Thank you for requesting a free sample. Your sample request submission is successful.');</script>";
				echo "<script type='text/javascript'>alert('Hi parents, due to overwhelming demand, our samples have run out of stocks temporarily. We appreciate your understanding that they will be a delay in fulfilling your sample request. We will send out the samples once they are available. Thank you for your patience.');</script>";
				echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
			}
			
			if($event_id == 98)
			{
				echo "<script type='text/javascript'>alert('Congratulations, you are also rewarded a 50% discount on Parentcraft.');</script>";
				$sqlGetSlug  = "SELECT * FROM ps_events WHERE `event_id` = 99 LIMIT 1"; # page that handle facebook question for new mom
				$querySlug   = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlGetSlug);
				$event_slug  = $querySlug[0]['event_slug'];
				$redirectUrl = "https://". $_SERVER['HTTP_HOST'] . '/events/' . $event_slug;
				echo "<script type='text/javascript'>window.location.href='" . $redirectUrl . "'</script>";
			}

			if($event_id == 108)
			{
				
				$sql='
					SELECT id_customer FROM ps_customer
					WHERE email="'.$newEmail.'"
				';
				$resultCustomer = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				$hasAddress=false;
				if ($resultCustomer[0]['id_customer']){
					$sql='
						SELECT id_address FROM ps_address
						WHERE id_customer="'.$resultCustomer[0]['id_customer'].'"
					';
					$resultAddress = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
					if ($resultAddress[0]){
						$hasAddress=true;
					}
				}
				
				if ($newEmail && $resultCustomer[0]['id_customer'] && !$hasAddress){
					$address=new Address();
							
					$id_state=0;
					switch(Tools::getValue('subscriber_question10')){
						case 'Kuala Lumpur':$id_state=313;break;
						case 'Labuan':$id_state=314;break;
						case 'Putrajaya':$id_state=315;break;
						case 'Johor':$id_state=316;break;
						case 'Kedah':$id_state=317;break;
						case 'Kelantan':$id_state=318;break;
						case 'Melaka':$id_state=319;break;
						case 'Negeri Sembilan':$id_state=320;break;
						case 'Pahang':$id_state=321;break;
						case 'Perak':$id_state=322;break;
						case 'Perlis':$id_state=323;break;
						case 'Pulau Pinang':$id_state=324;break;
						case 'Sabah':$id_state=325;break;
						case 'Sarawak':$id_state=326;break;
						case 'Selangor':$id_state=327;break;
						case 'Terengganu':$id_state=328;break;
						case 'Langkawi':$id_state=329;break;
					}
					$address->id_country=136;
					$address->id_state=$id_state;;
					$address->postcode=substr(Tools::getValue('subscriber_question8'),0,12);
					$address->phone=Tools::getValue('subscriber_question1');
					$address->alias="home";
					$address->firstname=Tools::getValue('newFirstName');
					$address->lastname=Tools::getValue('newLastName');
					$address->id_customer= $resultCustomer[0]['id_customer'];
					$address->address1=Tools::getValue('subscriber_question7');
					$address->address2="";
					$address->city=Tools::getValue('subscriber_question9');
					
					$address->add();
					
				}
				
				if (isset($_SESSION['isPWA']) && $_SESSION['isPWA']==1)
				$_SESSION['registeredWarehouse']=1;
				echo "<script type='text/javascript'>alert('Thank you for joining Motherhood Baby Warehouse Sale ! Please show next message at the entrance. Enjoy your Shopping.');</script>";
				echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/events/thank-you-for-registering'</script>";
			}
			
			if($event_id == 130 )
			{
				$sql='
					SELECT id_customer FROM ps_customer
					WHERE email="'.$newEmail.'"
				';
				$resultCustomer = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				if ($newEmail && $resultCustomer[0]['id_customer']){
					$address=new Address();
							
					$id_state=0;
					switch(Tools::getValue('subscriber_question10')){
						case 'Kuala Lumpur':$id_state=313;break;
						case 'Labuan':$id_state=314;break;
						case 'Putrajaya':$id_state=315;break;
						case 'Johor':$id_state=316;break;
						case 'Kedah':$id_state=317;break;
						case 'Kelantan':$id_state=318;break;
						case 'Melaka':$id_state=319;break;
						case 'Negeri Sembilan':$id_state=320;break;
						case 'Pahang':$id_state=321;break;
						case 'Perak':$id_state=322;break;
						case 'Perlis':$id_state=323;break;
						case 'Pulau Pinang':$id_state=324;break;
						case 'Sabah':$id_state=325;break;
						case 'Sarawak':$id_state=326;break;
						case 'Selangor':$id_state=327;break;
						case 'Terengganu':$id_state=328;break;
						case 'Langkawi':$id_state=329;break;
					}
					$address->id_country=136;
					$address->id_state=$id_state;;
					$address->postcode=substr(Tools::getValue('subscriber_question8'),0,12);
					$address->phone=Tools::getValue('subscriber_question1');
					$address->alias="home";
					$address->firstname=Tools::getValue('newFirstName');
					$address->lastname=Tools::getValue('newLastName');
					$address->id_customer= $resultCustomer[0]['id_customer'];
					$address->address1=Tools::getValue('subscriber_question7');
					$address->address2="";
					$address->city=Tools::getValue('subscriber_question9');
					
					$address->add();
					
				}
						
							
				if (isset($_SESSION['isPWA']) && $_SESSION['isPWA']==1)
				$_SESSION['registeredWarehouse']=1;
				//echo "<script type='text/javascript'>alert('Thank you for joining Motherhood Baby Warehouse Sale ! Please show next message at the entrance. Enjoy your Shopping.');</script>";
				echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/events/thank-you-for-preregistering'</script>";
			}
			
			if($event_id == 53){
				$this->context->smarty->assign("tlmsuccess","1");
				//echo "<script type='text/javascript'>alert('Thank you for joining Motherhood Baby Warehouse Sale ! Enjoy your Shopping.');</script>";
				//echo "<script type='text/javascript'>window.location.href='/events/tlmbabyfair'</script>";
			}
			
			//if($event_id = 126){
			//	echo "<script type='text/javascript'>window.location.href='https://www.motherhood.com.my/events/parentcraft-checklist-download'</script>";
			//}

			if($event_id == 47)
			{
				/* Generate a discount code for parenting survey*/
				$code = NULL;
				do $code = 'MBS10'.Tools::passwdGen(6);
				while (CartRule::cartRuleExists($code));
				/* Voucher creation and affectation to the customer */
				$cartRule = new CartRule();
				$cartRule->id_customer = $this->context->customer->id;
				$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
				$cartRule->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
				$cartRule->description = "Parenting Survey";
				$cartRule->quantity = 1;
				$cartRule->quantity_per_user = 1;
				$cartRule->highlight = 1;
				$cartRule->partial_use = 0;
				$cartRule->code = $code;
				$cartRule->active = 1;
				$cartRule->reduction_amount = 10;
				$cartRule->reduction_tax = 1;
				$cartRule->reduction_currency = 1;
				$cartRule->minimum_amount = 0;
				$cartRule->minimum_amount_tax = 1;
				$cartRule->minimum_amount_currency = 1;
				$cartRule->minimum_amount_shipping = 0;
				$cartRule->cart_rule_restriction = 0;

				$languages = Language::getLanguages(true);
				foreach ($languages AS $language)
				{
					$cartRule->name[(int)($language['id_lang'])] = "RM10 Parenting Survey - ".$code;
				}

				$cartRule->add();	
				
				$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
				Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				/* Generate discount code end */

				/* Send parenting survey evoucher by email */
				$customer = $this->context->customer->lastname." ".$this->context->customer->firstname;
				$id_lang = 1;
				$vc = $code;
				$data = array(
					'{customer_name}' => $customer,
					'{promocode}' => $vc
				);
				$mail= $this->context->customer->email;
				$name = $this->context->customer->lastname." ".$this->context->customer->firstname;
				$template = "parentingsurvey";
				$iso = "en";
				$shopemail = 'hi@motherhood.com.my';
				$shopname = 'motherhood.com.my';
				$subject = "Parent Survey e-voucher" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
				
				if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
					$this->context->smarty->assign("check","0");
					$this->context->smarty->assign("showErrors",'Thank You for your participation. E-voucher will be sent to you by email.');
					return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
					
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
				}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
					$id_lang = Language::getIdByIso('en');
					return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
				}	
					echo "<script type='text/javascript'>alert('Thank You for your participation. E-voucher will be sent to you by email.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					
			}
			
			if($event_id == 38)
			{
				$subscriber_question1 = pSQL(Tools::getValue('subscriber_question1'));
			
				$sql = '
					SELECT COUNT(1) as ccount FROM 
					tbl_emailvoucher
					WHERE campaign = "sasav" AND email="'.$subscriber_question1.'"
					';
				$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				if (!$result[0]['ccount']){
					
					
				$sql = '
				SELECT voucher_code 
				FROM tbl_emailvoucher 
				WHERE email IS NULL AND campaign="sasav" 
				LIMIT 1 ';
				
				$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				$vouchercode = $result[0];
				$vc = $vouchercode[voucher_code];
				
				
				$sql = '
					UPDATE tbl_emailvoucher 
					SET email = "'.$subscriber_question1.'"
					WHERE campaign = "sasav" AND voucher_code = "'.$vc.'"
					;';
					
				Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
					
				$subscriber_question1= pSQL(Tools::getValue('subscriber_question1'));
				$subscriber_question2 = pSQL(Tools::getValue('subscriber_question2'));
				$customer = $this->context->customer->lastname." ".$this->context->customer->firstname;
				$id_lang = 1;
				$data = array(
					'{customer_name}' => $subscriber_question2,
					'{serialcode}' => $vc
				);
				$mail= $subscriber_question1;
				$name = $this->context->customer->lastname." ".$this->context->customer->firstname;
				$template = sasa_rm30voucher;
				$iso = "en";
				$shopemail = 'hi@motherhood.com.my';
				$shopname = 'motherhood.com.my';
				$subject = "Sa Sa RM30 Voucher" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
				
				if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
					$this->context->smarty->assign("check","0");
					$this->context->smarty->assign("showErrors",'Thank You for your participation. We will contact you if you have been selected. Good luck!');
					return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
					
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
				}
				else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
					$id_lang = Language::getIdByIso('en');
					return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
				}	
					echo "<script type='text/javascript'>alert('Thank You for your participation. We will contact you if you have been selected. Good luck!');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					
				}else{
					echo "<script type='text/javascript'>alert('Your email have participated for this campaign.');</script>";
					echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
					}
			}
			$email = trim($newEmail);
			$sqlC = '
				SELECT COUNT(1) as ccount
				FROM
				`'._DB_PREFIX_.'customer` 
				WHERE email="'.$email.'" ';
			$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
			if (!$resultC[0]['ccount']){
				$isNewEmail=1;
			}else{
				$isNewEmail=0;
			}
			
			if ($newEmail && $isNewEmail)
			{
				
				$firstname=trim($newFirstName);
				$last_name = trim($newLastName);
				if($last_name == ""){
					$last_name = ".";
				}
				$username = $firstname.$last_name.rand(0,1000);
				$password = pSQL(Tools::getValue('newPassword'));
				$confirmPassword = pSQL(Tools::getValue('confirmPassword'));
				
				$username=str_ireplace(" ","",$username);
				
				//if ($password != $confirmPassword){
				//	$this->context->smarty->assign("check","0");
				//	$this->context->smarty->assign("showErrors",'Sorry, please your password does not match');
				//	
				//	return parent::postProcess();
				//}
				
				/* now this runs in ajax
				$cURL = "curl -G --user 'api:pubkey-0j6vmid-ivr51g60---5cz4gy-sf7v75' -G https://api.mailgun.net/v3/address/validate --data-urlencode address='$email' --data-urlencode mailbox_verification='true'";
				$resultCurl = exec($cURL);
				$json = json_decode($resultCurl, true);
				
				if ($json['mailbox_verification']!='true'){
					//$sql = "INSERT INTO tbl_lead_failed_email VALUE ('$email'); ";
					//$conn->query($sql);
					//echo " failed ";
				
					$this->context->smarty->assign("check","0");
					$this->context->smarty->assign("showErrors",'Sorry, please use a valid email');
					return parent::postProcess();
				}
				*/
				

				$dob = Tools::formDOBString(1, 1, 1979);
				$dob2 = "1979-01-01";
				$gender_code = 1;
				$send_email = 0;
				$public_key = _SSO_PUBLIC_KEY_;
				$nonce =  Tools::generateRandomNonce();
				$signature =  Tools::generateSignature($nonce);

			// ********** create sso user ********************

				$post_data = array(
							'first_name' => $firstname,
							'last_name' => $last_name,
							'email' => $email,
							'username' => $username,
							'password' => $password,
							'dob' => $dob,
							'gender_code' => $gender_code,
							'send_email' => $send_email,
							'public_key' => $public_key,
							'nonce' =>  $nonce,
							'signature' => $signature
					);
				$post_result = Tools::post_data(_SSO_API_CREATE_ACCOUNT_, $post_data);
				$post_result = json_decode($post_result, true);
				$errors="";
				
				if ($post_result['succeeded'] || $isNewEmail){
				// ********** create customer ******************** 

					$customer = new Customer();
					$lastname = $last_name;
					$firstname = $firstname;
					$email = $email;
					
					$password = _SSO_SECRET_KEY_;
					$password = Tools::encrypt($password);
					$_POST['email'] = $email;
					$_POST['passwd'] = $password;
					$_POST['lastname'] = $lastname;
					$_POST['firstname'] = $firstname;
					$customer->lastname = $lastname;
					$customer->firstname = $firstname;
					$customer->email = $email;
					$customer->passwd = $password;
					$customer->birthday = $dob2;
					$customer->active = 1;
					$customer->is_guest = 0;
					$customer->id_gender = $gender_code;
				   
					if (!$customer->add())
						$errors = Tools::displayError('An error occurred while creating your account.');
					else
					{
						$customer->cleanGroups();
						// we add the guest customer in the guest customer group
						$customer->addGroups(array((int)Configuration::get('PS_GUEST_GROUP')));

												
						if ($event_id!=108 || ( $event_id==108 && $_SESSION['isPWA']==1) )
						{ // 108 warehouse sales registeration, don't need auto sign in.
							
							// code to auto sign in ------------------
							$context=$this->context;
											
							$context->cookie->id_compare = isset($context->cookie->id_compare) ? $context->cookie->id_compare: CompareProduct::getIdCompareByIdCustomer($customer->id);
							$context->cookie->id_customer = (int)($customer->id);
							$context->cookie->customer_lastname = $customer->lastname;
							$context->cookie->customer_firstname = $customer->firstname;
							$context->cookie->logged = 1;
							$customer->logged = 1;
							$context->cookie->is_guest = $customer->isGuest();
							$context->cookie->passwd = $customer->passwd;
							$context->cookie->email = $customer->email;
							

							// Add customer to the context
							$context->customer = $customer;

							if (Configuration::get('PS_CART_FOLLOWING') && (empty($context->cookie->id_cart) || Cart::getNbProducts($context->cookie->id_cart) == 0) && $id_cart = (int)Cart::lastNoneOrderedCart($context->customer->id))
								$context->cart = new Cart($id_cart);
							else
							{
								$id_carrier = (int)$context->cart->id_carrier;
								$context->cart->id_carrier = 0;
								$context->cart->setDeliveryOption(null);
								$context->cart->id_address_delivery = (int)Address::getFirstCustomerAddressId((int)($customer->id));
								$context->cart->id_address_invoice = (int)Address::getFirstCustomerAddressId((int)($customer->id));
							}
							$context->cart->id_customer = (int)$customer->id;
							$context->cart->secure_key = $customer->secure_key;

							$context->cart->save();
							$context->cookie->id_cart = (int)$context->cart->id;
							
							$ssocookie = Tools::getSSOCookie();
							$ssocookie->ssoUser= $context->customer->email;
							$context->cookie->__set("customerEmail", $context->customer->email);
							$context->cart->autosetProductAddress();
							
							$context->cookie->write();
							// auto sign in code end --------------------------]]
							
							
							if ($event_id==130 || $event_id==108 || $event_id==93){
								$sql='
									SELECT id_customer FROM ps_customer
									WHERE email="'.$newEmail.'"
								';
								$resultCustomer = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
								
								if ($newEmail && $resultCustomer[0]['id_customer']){
									$address=new Address();
											
									$id_state=0;
									switch(Tools::getValue('subscriber_question10')){
										case 'Kuala Lumpur':$id_state=313;break;
										case 'Labuan':$id_state=314;break;
										case 'Putrajaya':$id_state=315;break;
										case 'Johor':$id_state=316;break;
										case 'Kedah':$id_state=317;break;
										case 'Kelantan':$id_state=318;break;
										case 'Melaka':$id_state=319;break;
										case 'Negeri Sembilan':$id_state=320;break;
										case 'Pahang':$id_state=321;break;
										case 'Perak':$id_state=322;break;
										case 'Perlis':$id_state=323;break;
										case 'Pulau Pinang':$id_state=324;break;
										case 'Sabah':$id_state=325;break;
										case 'Sarawak':$id_state=326;break;
										case 'Selangor':$id_state=327;break;
										case 'Terengganu':$id_state=328;break;
										case 'Langkawi':$id_state=329;break;
									}
									$address->id_country=136;
									$address->id_state=$id_state;;
									$address->postcode=substr(Tools::getValue('subscriber_question8'),0,12);
									$address->phone=Tools::getValue('subscriber_question1');
									$address->alias="home";
									$address->firstname=Tools::getValue('newFirstName');
									$address->lastname=Tools::getValue('newLastName');
									$address->id_customer= $resultCustomer[0]['id_customer'];
									$address->address1=Tools::getValue('subscriber_question7');
									$address->address2="";
									$address->city=Tools::getValue('subscriber_question9');
									
									$address->add();
								}
							}
						}
						
						if ($event_id==108 || $event_id==130)
						{
							
							// if is 108, and is new mum, 
						
							$checkVoucherSQL = "
								SELECT `code` FROM ps_cart_rule WHERE id_customer = ".$customer->id." AND description='Privilege Member Special'
								LIMIT 1 ";
							$resultVoucher = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($checkVoucherSQL);
							
							$subscriber_question11= pSQL(Tools::getValue('subscriber_question11'));
							if ($subscriber_question11=='yes' && !$resultCode[0]){
								
								$privCodeSQL = "
									SELECT `code` FROM ps_cart_rule WHERE CODE LIKE 'MYVIP%' AND id_customer = 0 AND description='Privilege Member Special'
									LIMIT 1 ";
								$resultCode = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($privCodeSQL);
								
								if ($resultCode[0]){
									$rowCode=$resultCode[0];
									$row['member_code'] = $rowCode["code"];
									$privilege_code=$row['member_code'];
									
									$voucher = new CartRule(CartRule::getIdByCode($privilege_code));
															
									$voucher->id_customer = $customer->id;
									$datefrom = date('Y-m-d H:i:s');
									$voucher->date_from = $datefrom;
										
									$dateto = strtotime($datefrom."+365 days");
									$voucher->date_to = date('Y-m-d H:i:s', $dateto);
									$voucher->active=1;
									$voucher->save();
									
									$insertPrivSQL = "
									INSERT INTO tbl_privilege (id_customer, email, add_date, status, order_ref, transaction_id , assign_privilege_code, sent_date)
										VALUES ( 
											'".(int)$customer->id."'
											,'".$newEmail."'
											,current_date
											,'sent'
											,'newmum'
											,'newmum'
											,'".$row['member_code']."'
											,current_date
										)";
									Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertPrivSQL);
										
									$updateCartRule = "
									UPDATE ps_cart_rule SET id_customer=".$customer->id." WHERE CODE='".$row['member_code']."'
										";
										
									
									//// set the customer group to another group
										
									$row2 = array('id_customer' => $customer->id, 'id_group' => 4);
									Db::getInstance()->execute(
										'DELETE FROM `'._DB_PREFIX_.'customer_group` '.
										'WHERE `id_customer`='.$customer->id.
											' AND id_group=4');
									Db::getInstance()->insert('customer_group', $row2, false, true, Db::INSERT_IGNORE);
									Db::getInstance()->execute(
										'UPDATE `'._DB_PREFIX_.'customer` '.
										' SET id_default_group=4'.
										' WHERE `id_customer`='.$customer->id);
											
									//$this->context->smarty->assign("confirmation", "1");
									//$this->sendEmail(date('d-m-Y H:i',$dateto), $email_subject, $template);
								}
							
							}
						}
						 
						// fixed, if event id = X, would generate this voucher, else do normal voucher
						if ($event_id==100 || $event_id==103 || $event_id==212)
						{
							/* Generate a discount code */
							$code = NULL;
							do $code = 'WELCOMENEWMUM'.Tools::passwdGen(6);
							while (CartRule::cartRuleExists($code));

							/* Voucher creation and affectation to the customer */
							$cartRule = new CartRule();
							$cartRule->id_customer = (int)$customer->id;
							$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
							$cartRule->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
							$cartRule->description = "New Mum Welcome Voucher";
							$cartRule->quantity = 1;
							$cartRule->quantity_per_user = 1;
							$cartRule->highlight = 1;
							$cartRule->partial_use = 0;
							$cartRule->code = $code;
							$cartRule->active = 1;
							$cartRule->reduction_amount = 20;
							$cartRule->reduction_tax = 1;
							$cartRule->reduction_currency = 1;
							$cartRule->minimum_amount = 80;
							$cartRule->minimum_amount_tax = 1;
							$cartRule->minimum_amount_currency = 1;
							$cartRule->minimum_amount_shipping = 0;
							$cartRule->cart_rule_restriction = 0;

							$languages = Language::getLanguages(true);
							foreach ($languages AS $language)
							{
								$cartRule->name[(int)($language['id_lang'])] = "RM20 Welcome - ".$code;
							}
							
							$welcomenewnumcode=$code;
							$expiryDate=$cartRule->date_to; 
							$cartRule->add();	
							
							$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
					
							if ($event_id==100 || $event_id == 212){
								if(($this->context->cart) && $this->context->cart->id){
									$cart = new Cart($this->context->cart->id);
								}else{
									// auto add item to the cart also
									$cart = new Cart();
									$cart->id_customer = (int)$customer->id;
									$cart->id_lang = 1;
									$cart->id_currency = (int)($this->context->cookie->id_currency);
									$cart->id_carrier = 1;
									$cart->recyclable = 0;
									$cart->gift = 0;
									$cart->add();
				
								}
								
								$cart->updateQty(1,25142);
								$cart->updateQty(1,38999);
								//$cart->addCartRule(113057 );
							}
							
							$this->membervcode=$code;
							$template=$template.'-offline';
							
							
							$sql = "INSERT INTO tbl_privilege (id_customer, email, add_date) VALUES (".(int)$customer->id.",'$newEmail',current_date)";
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							
							//Generate ParentCraft 50% voucher here
							/* Generate a discount code for ParentCraft 50% */
							$pccode = NULL;
							do $pccode = 'PCRAFT'.Tools::passwdGen(4);
							while (CartRule::cartRuleExists($pccode));
							$pcexdate = date('Y-m-d H:i:s', time() + 30*24*60*60);
							/* Voucher creation and affectation to the customer */
							$cartRule = new CartRule();
							$cartRule->id_customer = $this->context->customer->id;
							$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
							$cartRule->date_to = date('Y-m-d H:i:s', time() + 30*24*60*60); // 30 days expiry date
							$cartRule->description = "ParentCraft 50% OFF";
							$cartRule->quantity = 1;
							$cartRule->quantity_per_user = 1;
							$cartRule->highlight = 1;
							$cartRule->partial_use = 0;
							$cartRule->code = $pccode;
							$cartRule->active = 1;
							$cartRule->minimum_amount_tax = 1;
							$cartRule->minimum_amount_currency = 1;
							$cartRule->product_restriction = 1;
							$cartRule->reduction_percent = 50;
							$cartRule->reduction_amount = 0;
							$cartRule->reduction_tax = 1;
							$cartRule->reduction_currency = 1;
							$cartRule->reduction_product = -2;
							$cartRule->reduction_cap = 75;
							$cartRule->minimum_amount = 0;
							$cartRule->minimum_amount_tax = 1;
							$cartRule->minimum_amount_currency = 1;
							$cartRule->minimum_amount_shipping = 0;
							$cartRule->cart_rule_restriction = 0;

							$languages = Language::getLanguages(true);
							foreach ($languages AS $language)
							{
								$cartRule->name[(int)($language['id_lang'])] = "ParentCraft 50% OFF - ".$pccode;
							}
							$cartRule->add();	
							
							$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
							if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql)){
				
								$sqld = '
										SELECT id_product_rule_group 
										FROM ps_cart_rule_product_rule_group
										WHERE id_cart_rule = "'.$cartRule->id.'"
								';
								$resultd = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqld);
								$resultd = $resultd[0]['id_product_rule_group'];

								$sqlg = '
										UPDATE ps_cart_rule_product_rule
										SET type = "products"
										WHERE id_product_rule_group = "'.$resultd.'"
								';
								if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlg)){

										$selectipr = '
												SELECT id_product_rule
												FROM ps_cart_rule_product_rule
												WHERE id_product_rule_group = "'.$resultd.'"
												';
										$resultIPR = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($selectipr);
										$resultIPR = $resultIPR[0]['id_product_rule'];
									
										$updatePID = '
												UPDATE ps_cart_rule_product_rule_value
												SET id_item = "38999"
												WHERE id_product_rule = "'.$resultIPR.'"
												';	
										if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updatePID)){
											if(isset($subscriber_question4) && $subscriber_question4 != '')
											{
												if(strtolower($subscriber_question4) == 'pregnant') # if user select pregnant then will proceed other event page
												{
													echo "<script type='text/javascript'>alert('Thank you for your submission! Continue to fill in the next section and stand a chance to win monthly attractive lucky draw prizes!');</script>";
													$sqlGetSlug  = "SELECT * FROM ps_events WHERE `event_id` = 98 LIMIT 1"; # page that handle edd question
													$querySlug   = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlGetSlug);
													$event_slug  = $querySlug[0]['event_slug'];
													$redirectUrl = "https://". $_SERVER['HTTP_HOST'] . '/events/' . $event_slug;
													echo "<script type='text/javascript'>window.location.href='" . $redirectUrl . "'</script>";
												}
												else
												{
													echo "<script type='text/javascript'>alert('Congratulations, you are also rewarded a 50% discount on Parentcraft.');</script>";
													$redirectUrl = "https://www.motherhood.com.my/address?back=order.php";
													echo "<script type='text/javascript'>window.location.href='" . $redirectUrl . "'</script>";
												}
											}
										}
										else{
											echo "<script type='text/javascript'>alert('There was error creating the voucher.');</script>";
											echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
											exit;
										}
									}
									else
									{
										echo "<script type='text/javascript'>alert('There was an error creating the voucher.');</script>";
										echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
										exit;
									}
							}
							else{
								echo "<script type='text/javascript'>alert('error');</script>";
								echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
								exit;
							}
							//Generate ParentCraft 50% voucher End
							$this->context->smarty->assign("newmomsuccess","2");

							$this->sendParentCraftEmail($lastname,$firstname,$email,$pccode, $pcexdate);

							/* Send New mom parent RM20 by email */	
							$customer = $customer->firstname." ".$customer->lastname;
							$id_lang = 1;
							$data = array(
								'{customer_name}' => $customer,
								'{voucher_code}' =>$welcomenewnumcode,
								'{expiry_date}' => $expiryDate,
							);
							$mail= $email;
							$name = $lastname." ".$firstname;
							$template = "newmom-voucher";
							$iso = "en";
							$shopemail = 'hi@motherhood.com.my';
							$shopname = 'motherhood.com.my';
							$subject = "Congratulations! Welcome to Motherhood.com.my New Mom Program!" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
							
							if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
								$this->context->smarty->assign("check","0");
								$this->context->smarty->assign("showErrors",'Thank You for joining motherhood.com.my');
								return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
								
							}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
								$id_lang = Language::getIdByIso('en');
								return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
							}
							
							
							/* Send New mom parent craft evoucher by email */	
							
							//$customer = $lastname." ".$firstname;
							//$id_lang = 1;
							//$data = array(
							//	'{customer_name}' => $customer,
							//	'{pc_code}' =>$pccode,
							//	'{pc_ex_date}' => $pcexdate,
							//);
							//$mail= $email;
							//$name = $lastname." ".$firstname;
							//$template = "newmom-parentcraft-class";
							//$iso = "en";
							//$shopemail = 'hi@motherhood.com.my';
							//$shopname = 'motherhood.com.my';
							//$subject = "Redeem Your Gift Voucher for Parentcraft Classes 2020 | New Mom Benefits" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
							//
							//if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
							//	$this->context->smarty->assign("check","0");
							//	$this->context->smarty->assign("showErrors",'Thank You for joining motherhood.com.my');
							//	return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
							//	
							//}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
							//	$id_lang = Language::getIdByIso('en');
							//	return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
							//}
							
							
								echo "<script type='text/javascript'>
								alert('Congratulations. You are awarded RM20 voucher and please continue to redeem your Mom to be Free Gift');
								window.location='/quick-order';
								</script>";
								// echo "<script type='text/javascript'></script>";
								 /*Send New mom parent craft evoucher by email END */
								
						}
						else if ( $event_id==78)
						{
							
							/* Generate a discount code */
							$code = NULL;
							do $code = 'WELCOMENEWMUM'.Tools::passwdGen(6);
							while (CartRule::cartRuleExists($code));

							/* Voucher creation and affectation to the customer */
							$cartRule = new CartRule();
							$cartRule->id_customer = (int)$customer->id;
							$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
							$cartRule->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
							$cartRule->description = "New Account Welcome Voucher";
							$cartRule->quantity = 1;
							$cartRule->quantity_per_user = 1;
							$cartRule->highlight = 1;
							$cartRule->partial_use = 0;
							$cartRule->code = $code;
							$cartRule->active = 1;
							$cartRule->reduction_amount = 20;
							$cartRule->reduction_tax = 1;
							$cartRule->reduction_currency = 1;
							$cartRule->minimum_amount = 80;
							$cartRule->minimum_amount_tax = 1;
							$cartRule->minimum_amount_currency = 1;
							$cartRule->minimum_amount_shipping = 0;
							$cartRule->cart_rule_restriction = 0;

							$languages = Language::getLanguages(true);
							foreach ($languages AS $language)
							{
								$cartRule->name[(int)($language['id_lang'])] = "RM20 Welcome (Minimum RM80) - ".$code;
							}

							$cartRule->add();	
							
							$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							
						
						
							if(($this->context->cart) && $this->context->cart->id){
								$cart = new Cart($this->context->cart->id);
							}else{
								// auto add item to the cart also
								$cart = new Cart();
								$cart->id_customer = (int)$customer->id;
								$cart->id_lang = 1;
								$cart->id_currency = (int)($this->context->cookie->id_currency);
								$cart->id_carrier = 1;
								$cart->recyclable = 0;
								$cart->gift = 0;
								$cart->add();
			
							}
							
							$cart->updateQty(1,32915);
							$cart->addCartRule(314176 );
							
							$this->context->smarty->assign("newmomsuccess","2");
						}
						else if ( $event_id==68){
							
							
							/* Generate a discount code */
							$code = NULL;
							do $code = 'WELCOME'.Tools::passwdGen(6);
							while (CartRule::cartRuleExists($code));

							/* Voucher creation and affectation to the customer */
							$cartRule = new CartRule();
							$cartRule->id_customer = (int)$customer->id;
							$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
							$cartRule->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
							$cartRule->description = "New Account Welcome Voucher";
							$cartRule->quantity = 1;
							$cartRule->quantity_per_user = 1;
							$cartRule->highlight = 1;
							$cartRule->partial_use = 0;
							$cartRule->code = $code;
							$cartRule->active = 1;
							$cartRule->reduction_amount = 15;
							$cartRule->reduction_tax = 1;
							$cartRule->reduction_currency = 1;
							$cartRule->minimum_amount = 150;
							$cartRule->minimum_amount_tax = 1;
							$cartRule->minimum_amount_currency = 1;
							$cartRule->minimum_amount_shipping = 0;
							$cartRule->cart_rule_restriction = 0;

							$languages = Language::getLanguages(true);
							foreach ($languages AS $language)
							{
								$cartRule->name[(int)($language['id_lang'])] = "RM15 Welcome (Minimum RM150) - ".$code;
							}

							$cartRule->add();	
							
							$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							
							
							
							
							/* Generate a discount code */
							$code = NULL;
							do $code = 'FRISO5'.Tools::passwdGen(6);
							while (CartRule::cartRuleExists($code));

							/* Voucher creation and affectation to the customer */
							$cartRule2 = new CartRule(112850);
							$cartRule2->id_customer = (int)$customer->id;
							$cartRule2->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
							$cartRule2->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
							$cartRule2->code = $code;
							$cartRule2->id=0;
							$cartRule2->active = 1;

							$cartRule2->add();	
							
							$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule2->id;
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							$sql = 'DELETE FROM ps_cart_rule_product_rule_group WHERE id_cart_rule = '.$cartRule2->id;
							Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							
							CartRule::copyConditions(112850 ,$cartRule2->id);
							
							$this->context->smarty->assign("newmomsuccess","2");
							//
							//if(($this->context->cart) && $this->context->cart->id){
							//	$cart = new Cart($this->context->cart->id);
							//}else{
							//	// auto add item to the cart also
							//	$cart = new Cart();
							//	$cart->id_customer = (int)$customer->id;
							//	$cart->id_lang = 1;
							//	$cart->id_currency = (int)($this->context->cookie->id_currency);
							//	$cart->id_carrier = 1;
							//	$cart->recyclable = 0;
							//	$cart->gift = 0;
							//	$cart->add();
							//}
							//
							//$cart->updateQty(1,25356);
							//$cart->addCartRule(120379 );
							//
							//
							//$template=$template.'-offline';
							//
							//
							//$sql = "INSERT INTO tbl_privilege (id_customer, email, add_date) VALUES (".(int)$customer->id.",'$newEmail',current_date)";
							//Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							//
							//
							//$code = NULL;
							//do $code = 'FRISOGOLD'.Tools::passwdGen(4);
							//while (CartRule::cartRuleExists($code));
//
							//$cartRule = new CartRule(236682);
							//$cartRule->id=0;
							//$cartRule->id_customer = (int)$customer->id;
							//$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); 
							//$cartRule->date_to = '2018-12-31 23:59:59'; // 30 days expiry date
							////$cartRule->quantity = 1;
							////$cartRule->quantity_per_user = 1;
							//$cartRule->highlight = 1;
							////$cartRule->partial_use = 0;
							//$cartRule->code = $code;
							//$cartRule->active = 1;
							////$cartRule->reduction_amount = 20;
							////$cartRule->reduction_tax = 1;
							////$cartRule->reduction_currency = 1;
							////$cartRule->minimum_amount = 0;
							////$cartRule->minimum_amount_tax = 1;
							////$cartRule->minimum_amount_currency = 1;
							////$cartRule->minimum_amount_shipping = 0;
							////$cartRule->cart_rule_restriction = 0;
//
							//$cartRule->add();	
							//
							//$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
							//Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							//$sql = 'DELETE FROM ps_cart_rule_product_rule_group WHERE id_cart_rule = '.$cartRule->id;
							//Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
							//
							//CartRule::copyConditions(236682,$cartRule->id);
							//					
							//					
							$id_lang = 1;
							$iso = Language::getIsoById((int)$id_lang);
							$data = array(
								'{firstname}' => $customer->firstname,
								'{lastname}' => $customer->lastname,
								'{customer_name}' => $customer->firstname." ".$customer->lastname,
								'{privilege_code}' => $code,
								'{privilege_email}' => $customer->email,
								'{membervcode}' => $this->membervcode,
								'{member_card_no}' => $code
							);
							$mail = $customer->email;
							$name = $customer->firstname." ".$customer->lastname;
							
							$template='friso-registration-2018';
							$subject='Congratulations for becoming Friso Motherhood.com.my Member!';
//                          
							if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
								Mail::Send((int)$id_lang, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
								
							}
							else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.html')) {
								$id_lang = Language::getIdByIso('en');
								Mail::Send((int)$id_lang, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
								
							}else{
								
							}
							
						}
						else{
							require_once(_PS_MODULE_DIR_.'/affiliateprogram/affiliateprogram.php');
							$affiliateprogram = new affiliateprogram();
							$affiliateprogram->hookActionCustomerAccountAdd(array('newCustomer'=>$customer));
						}

					}
					
					
					
				}else{
					if ($event_id==103){
						$errors =  "Registration Saved!";
					}else{
						$this->email = "";
						$errors =  "User Creation Error :".$post_result['message'];
					}
					
				}
				
				if (!$errors){
					if (!$post_result['succeeded']){
							
						$this->context->smarty->assign("check","0");
						$this->context->smarty->assign("showErrors",'Welcome back Wedding.com.my user! You have now been registered to Motherhood.com.my. Please use your previous password to login.');
						
					}
					
					if ($event_id==100 || $event_id==101 || $event_id==103 || $event_id==78){
						echo'
						
						<!-- Google Code for Lead Conversion Page -->
						<body>
						<script type="text/javascript">
						/* <![CDATA[ */
						var google_conversion_id = 953362167;
						var google_conversion_language = "en";
						var google_conversion_format = "3";
						var google_conversion_color = "ffffff";
						var google_conversion_label = "e6DBCNzvv2MQ983MxgM";
						var google_remarketing_only = false;
						/* ]]> */
						</script>
						<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
						</script>
						<noscript>
						<div style="display:inline;">
						<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/953362167/?label=e6DBCNzvv2MQ983MxgM&amp;guid=ON&amp;script=0"/>
						</div>
						</noscript>
</body>

						';
					}else if ($event_id==108 ){
						$this->context->smarty->assign("check","0");
						$this->context->smarty->assign("showErrors",'Thank You for registering to Motherhood.com.my. Please visit Motherhood.com.my for the latest promotions for your kids!');
						
					}else if ($event_id==130 ){
						
						$this->context->smarty->assign("check","0");
						$this->context->smarty->assign("showErrors",'Thank You for registering to Motherhood.com.my. Please visit Motherhood.com.my for the latest promotions for your kids!');
						
					}else if($event_id==53 ){
						$this->context->smarty->assign("check","0");
						$this->context->smarty->assign("showErrors",'Thank You for registering to Motherhood.com.my. Please visit Motherhood.com.my for the latest promotions for your kids!');
						
					}else if($event_id==68 ){
						$this->context->smarty->assign("check","0");
						$this->context->smarty->assign("showErrors",'Thank You for registering to Motherhood.com.my. Please visit Motherhood.com.my for the latest promotions for your kids!');
						
					}else if($event_id==93 ){
						echo"
						  <script type='text/javascript'>
						  alert('Thank You for registering.. Please choose your Super Kids Rewards!');
						  window.location='/events/motherhood-superkids';
						  </script>
						";
					}else{ 
						
						echo"
						  <script type='text/javascript'>
						  alert('Congratulation! You`re almost there. Next step, please update your address and redeem your free voucher at checkout page..');
						  window.location='/quick-order';
						  </script>
						";
						
					}
					
				}else{
					$this->context->smarty->assign("check","0");
					$this->context->smarty->assign("showErrors",$errors);
				}
				
			}
			else if ($newEmail && !$isNewEmail)
			{
				if ( $event_id==125 ){
					$this->context->smarty->assign("showErrors",'THANK YOU! Your submission has been received. See you at the event.');
				}
				else if($event_id == 100 || $event_id == 212){
					//Check if this is a newmom registration in 2020
					// event_id LIVE = 100
					// event_id UAT = 212
					$newmom2020Check = '
					SELECT COUNT(1) as exist
					FROM ps_events_subscriber
					WHERE newEmail="'.$email.'" AND subscriber_event_id = "' . $event_id . '" 
					AND subscriber_created_at > "2019-12-31 23:59:59"';
					$nmc = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($newmom2020Check);
					if($nmc[0]['exist'] > 1){
						$this->context->smarty->assign("showErrors",'Thank you for your submission!');
						$this->context->smarty->assign("newmomsuccess","3");
					}else{
						$getCustomerIDsql = '
							SELECT id_customer FROM ps_customer
							WHERE email = "'.$email.'" 
						';
						$customerID = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($getCustomerIDsql);
						/* Generate a discount code */
						$code = NULL;
						do $code = 'WELCOMENEWMUM'.Tools::passwdGen(6);
						while (CartRule::cartRuleExists($code));

						/* Voucher creation and affectation to the customer */
						$cartRule = new CartRule();
						$cartRule->id_customer = $customerID;
						$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
						$cartRule->date_to = date('Y-m-d H:i:s', time() + 60*24*60*60); // 30 days expiry date
						$cartRule->description = "New Mum Welcome Voucher";
						$cartRule->quantity = 1;
						$cartRule->quantity_per_user = 1;
						$cartRule->highlight = 1;
						$cartRule->partial_use = 0;
						$cartRule->code = $code;
						$cartRule->active = 1;
						$cartRule->reduction_amount = 20;
						$cartRule->reduction_tax = 1;
						$cartRule->reduction_currency = 1;
						$cartRule->minimum_amount = 80;
						$cartRule->minimum_amount_tax = 1;
						$cartRule->minimum_amount_currency = 1;
						$cartRule->minimum_amount_shipping = 0;
						$cartRule->cart_rule_restriction = 0;

						$languages = Language::getLanguages(true);
						foreach ($languages AS $language)
						{
							$cartRule->name[(int)($language['id_lang'])] = "RM20 Welcome - ".$code;
						}
						
						$welcomenewnumcode=$code;
						$expiryDate=$cartRule->date_to;

						$cartRule->add();	
						
						$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
						Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
						if ($event_id == 100 || $event_id == 212){
							if(($this->context->cart) && $this->context->cart->id){
								$cart = new Cart($this->context->cart->id);
							}else{
								// auto add item to the cart also
								$cart = new Cart();
								$cart->id_customer = $customerID;
								$cart->id_lang = 1;
								$cart->id_currency = (int)($this->context->cookie->id_currency);
								$cart->id_carrier = 1;
								$cart->recyclable = 0;
								$cart->gift = 0;
								$cart->add();
			
							}
							
							$cart->updateQty(1,25142);
							$cart->updateQty(1,38999);
							//$cart->addCartRule(113057 );
						}
						
						$this->membervcode=$code;
						$template=$template.'-offline';
						
						
						$sql = "INSERT INTO tbl_privilege (id_customer, email, add_date) VALUES (".(int)$customer->id.",'$newEmail',current_date)";
						Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						//Generate ParentCraft 50% voucher here
						/* Generate a discount code for ParentCraft 50% */
						$pccode = NULL;
						do $pccode = 'PCRAFT'.Tools::passwdGen(4);
						while (CartRule::cartRuleExists($pccode));
						$pcexdate = date('Y-m-d H:i:s', time() + 30*24*60*60);
						/* Voucher creation and affectation to the customer */
						$cartRule = new CartRule();
						$cartRule->id_customer = $customerID;
						$cartRule->date_from = date('Y-m-d H:i:s', time() - 1); /* remove 1s because of a strict comparison between dates in getCustomerCartRules */
						$cartRule->date_to = date('Y-m-d H:i:s', time() + 30*24*60*60); // 30 days expiry date
						$cartRule->description = "ParentCraft 50% OFF";
						$cartRule->quantity = 1;
						$cartRule->quantity_per_user = 1;
						$cartRule->highlight = 1;
						$cartRule->partial_use = 0;
						$cartRule->code = $pccode;
						$cartRule->active = 1;
						$cartRule->minimum_amount_tax = 1;
						$cartRule->minimum_amount_currency = 1;
						$cartRule->product_restriction = 1;
						$cartRule->reduction_percent = 50;
						$cartRule->reduction_amount = 0;
						$cartRule->reduction_tax = 1;
						$cartRule->reduction_currency = 1;
						$cartRule->reduction_product = -2;
						$cartRule->reduction_cap = 75;
						$cartRule->minimum_amount = 0;
						$cartRule->minimum_amount_tax = 1;
						$cartRule->minimum_amount_currency = 1;
						$cartRule->minimum_amount_shipping = 0;
						$cartRule->cart_rule_restriction = 0;

						$languages = Language::getLanguages(true);
						foreach ($languages AS $language)
						{
							$cartRule->name[(int)($language['id_lang'])] = "ParentCraft 50% OFF - ".$pccode;
						}
						$cartRule->add();	
						
						$sql = 'DELETE FROM ps_cart_rule_category WHERE id_cart_rule = '.$cartRule->id;
						if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql)){
			
						$sqld = '
								SELECT id_product_rule_group 
								FROM ps_cart_rule_product_rule_group
								WHERE id_cart_rule = "'.$cartRule->id.'"
						';
						$resultd = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqld);
						$resultd = $resultd[0]['id_product_rule_group'];

						$sqlg = '
								UPDATE ps_cart_rule_product_rule
								SET type = "products"
								WHERE id_product_rule_group = "'.$resultd.'"
						';
						if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlg)){

						$selectipr = '
								SELECT id_product_rule
								FROM ps_cart_rule_product_rule
								WHERE id_product_rule_group = "'.$resultd.'"
								';
						$resultIPR = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($selectipr);
						$resultIPR = $resultIPR[0]['id_product_rule'];
						
						$updatePID = '
								UPDATE ps_cart_rule_product_rule_value
								SET id_item = "38999"
								WHERE id_product_rule = "'.$resultIPR.'"
									';	
						if(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updatePID)){
							echo "<script type='text/javascript'>alert('ParentCraft Voucher Created successfully.');</script>";
							
						}else{
						echo "<script type='text/javascript'>alert('There was error creating the voucher.');</script>";
						echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
						exit;
						}
						}else{
							echo "<script type='text/javascript'>alert('There was an error creating the voucher.');</script>";
							echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
							exit;
						}
						}else{
							echo "<script type='text/javascript'>alert('error');</script>";
							echo "<script type='text/javascript'>window.location.href='https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."'</script>";
							exit;
						}
						//Generate ParentCraft 50% voucher End
						$this->context->smarty->assign("newmomsuccess","2");

						$this->sendParentCraftEmail($lastname,$firstname,$email,$pccode, $pcexdate);

						/* Send New mom parent RM20 by email */	
						$customer = $customer->firstname." ".$customer->lastname;
						$id_lang = 1;
						$data = array(
							'{customer_name}' => $customer,
							'{voucher_code}' =>$welcomenewnumcode,
							'{expiry_date}' => $expiryDate,
						);
						$mail= $email;
						$name = $lastname." ".$firstname;
						$template = "newmom-voucher";
						$iso = "en";
						$shopemail = 'hi@motherhood.com.my';
						$shopname = 'motherhood.com.my';
						$subject = "Congratulations! Welcome to Motherhood.com.my New Mom Program!" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
						
						if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
							$this->context->smarty->assign("check","0");
							$this->context->smarty->assign("showErrors",'Thank You for joining motherhood.com.my');
							return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
							
						}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
							$id_lang = Language::getIdByIso('en');
							return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
						}

						
						
							echo "<script type='text/javascript'>
							alert('Thank You for registering Newmom 2020');
							window.location='/quick-order';
							</script>";
							// echo "<script type='text/javascript'></script>";
					}
				}
				else if( $event_id==93){
					
					$password=trim($newPassword);
					$firstname=trim($newFirstName);
					$last_name = trim($newLastName);
					if($last_name == ""){
						$last_name = ".";
					}
					
					$public_key = _SSO_PUBLIC_KEY_;
					$nonce =  Tools::generateRandomNonce();
					$signature =  Tools::generateSignature($nonce);

				// ********** create sso user ********************

					$post_data = array(
								'email' => $email,
								'password' => $password,
								'public_key' => $public_key,
								'nonce' =>  $nonce,
								'signature' => $signature
						);
					$post_result = Tools::post_data(_SSO_API_LOGIN_ACCOUNT_, $post_data);
					$post_result = json_decode($post_result, true);
					
					
					if ($post_result['succeeded']==1){
								
						$sql='
							SELECT id_customer FROM ps_customer
							WHERE email="'.$email.'"
						';
						$resultCustomer = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						$customer = new Customer($resultCustomer[0]['id_customer']);
							// code to auto sign in ------------------
							$context=$this->context;
											
							$context->cookie->id_compare = isset($context->cookie->id_compare) ? $context->cookie->id_compare: CompareProduct::getIdCompareByIdCustomer($customer->id);
							$context->cookie->id_customer = (int)($customer->id);
							$context->cookie->customer_lastname = $customer->lastname;
							$context->cookie->customer_firstname = $customer->firstname;
							$context->cookie->logged = 1;
							$customer->logged = 1;
							$context->cookie->is_guest = $customer->isGuest();
							$context->cookie->passwd = $customer->passwd;
							$context->cookie->email = $customer->email;
							

							// Add customer to the context
							$context->customer = $customer;

							if (Configuration::get('PS_CART_FOLLOWING') && (empty($context->cookie->id_cart) || Cart::getNbProducts($context->cookie->id_cart) == 0) && $id_cart = (int)Cart::lastNoneOrderedCart($context->customer->id))
								$context->cart = new Cart($id_cart);
							else
							{
								$id_carrier = (int)$context->cart->id_carrier;
								$context->cart->id_carrier = 0;
								$context->cart->setDeliveryOption(null);
								$context->cart->id_address_delivery = (int)Address::getFirstCustomerAddressId((int)($customer->id));
								$context->cart->id_address_invoice = (int)Address::getFirstCustomerAddressId((int)($customer->id));
							}
							$context->cart->id_customer = (int)$customer->id;
							$context->cart->secure_key = $customer->secure_key;

							$context->cart->save();
							$context->cookie->id_cart = (int)$context->cart->id;
							
							$ssocookie = Tools::getSSOCookie();
							$ssocookie->ssoUser= $context->customer->email;
							$context->cookie->__set("customerEmail", $context->customer->email);
							$context->cart->autosetProductAddress();
							
							$context->cookie->write();
							// auto sign in code end --------------------------]]
					}else{
						$this->context->smarty->assign("showErrors","Login/Password incorrect");
						
					}
				}
				else{

					if($event_submit_msg){
						$msg = $event_submit_msg;
					}else{ $msg = 'Form saved!'; }
				$this->context->smarty->assign("showErrors",$msg);}
			}
				
			//$msg = 1;
			if($event_submit_msg){
				$msg = $event_submit_msg;
			}
			$this->context->smarty->assign("check",$msg);
			
			$this->setTemplate('enlineaevents.tpl');
		}
		
        return parent::postProcess();
    }

    public function setMedia() {
        parent::setMedia();
        $this->context->controller->addCSS(_PS_MODULE_DIR_.'enlineamixmod/views/css/enlineaevents.css');
    }
	
	public function sendEmail($event_email_template,$event_email_subject='Congratulations!',$email){
	//$mail = Tools::getValue('subscriber_question1');
	
	$customer = $this->context->customer->lastname." ".$this->context->customer->firstname;
	if($email){
		$email = $email;
	}else{
		$email = $this->context->customer->email;
	}
	$id_lang = 1;
	$data = array(
		'{customer_name}' => $customer
	);
	$mail= $email;
	$name = $this->context->customer->lastname." ".$this->context->customer->firstname;
	$template = $event_email_template;
	$iso = "en";
	$shopemail = 'hi@motherhood.com.my';
	$shopname = 'motherhood.com.my';
	$subject = $event_email_subject ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";
	
	if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
		return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
	}
	else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
		$id_lang = Language::getIdByIso('en');
		return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
	}

	}

	public function sendParentCraftEmail($lastname,$firstname,$email,$pccode,$pcexdate){
		/* Send New mom parent craft evoucher by email */							
		$customer = $lastname." ".$firstname;
		$id_lang = 1;
		$data = array(
			'{customer_name}' => $customer,
			'{pc_code}' =>$pccode,
			'{pc_ex_date}' => $pcexdate,
		);
		$mail= $email;
		$name = $lastname." ".$firstname;
		$template = "newmom-parentcraft-class";
		$iso = "en";
		$shopemail = 'hi@motherhood.com.my';
		$shopname = 'motherhood.com.my';
		$subject = "Parentcraft Classes 2020 | New Mom Benefits" ; //"Congratulations! You got Sunway Lagoon Parent's day Promo.";

		if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/'.$iso.'/'.$template.'.html')) {
			return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
		}else if (file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'.txt') && file_exists(_PS_MODULE_DIR_.'/enlineamixmod/mails/en/'.$template.'html')) {
			$id_lang = Language::getIdByIso('en');
			return Mail::Send(1, $template, $subject, $data, $mail, $name, Configuration::get('PS_SHOP_EMAIL'), Configuration::get('PS_SHOP_NAME'), NULL, NULL, dirname(__FILE__).'/mails/', NULL);
		}
	
	}
}
