<?php
/**  
* Created date  : 31/01/2021
* Created by    : Haiqal Halim <haiqal@nurengroup.com>
* Modified date : 31/01/2021
* Modified by   : Haiqal Halim <haiqal@nurengroup.com>
**/

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');

if (!class_exists('enlineamixmod')) {
   // Put class TestClass here
    include(dirname(__FILE__).'/enlineamixmod.php');
}

$arrMsg   	   = array('status' => false, "status_code" => 'nodata_post', 'msg' => 'no data post', 'succeeded' => null);
$edd      	   = (isset($_POST["edd"])) ? $_POST["edd"] : '';
$eventID  	   = (isset($_POST["eventid"])) ? $_POST["eventid"] : 0;
// $subscribe_id  = (isset($_POST["subscribe_id"])) ? $_POST["subscribe_id"] : 0;

if($eventID > 0 && $edd != '')
{
	$arr_sortdate = array();
	$arr_sortdate = explode('-', $edd);
	if(is_array($arr_sortdate) && sizeof($arr_sortdate) == 3)
	{
		$mysqlformat = $arr_sortdate[2] . "-" . $arr_sortdate[1] . "-" . $arr_sortdate[0];
		$eddDate = date('Y-m-d', strtotime($mysqlformat));
		
		$babypregnantdate = strtotime($eddDate);
		$today 			  = strtotime(date("d-m-Y")); 
		$diff 			  = $babypregnantdate - $today;
		$days 			  = floor($diff/ (60*60*24)); 
		$weeks 			  = 40 - (floor($days / 7));
		
		if($weeks > 0 && $weeks <= 40){
			$arrMsg['status'] 	   = true;
			$dataCustomer['week']  = $weeks;
			$arrMsg['status_code'] = "ok";
			$arrMsg['msg'] 	       = 'Edd data valid';
		}
		elseif($weeks <= 0)
		{
			$arrMsg['status'] 	   = false;
			$dataCustomer['week']  = $weeks;
			$arrMsg['status_code'] = "negative_edd";
			$arrMsg['msg'] 	       = 'Error, please enter your EDD again';
		}
		elseif($weeks > 40)
		{
			$arrMsg['status'] 	   = false;
			$dataCustomer['week']  = $weeks;
			$arrMsg['status_code'] = "overdue_pregnancy";
			$arrMsg['msg'] 	       = 'Overdue Pregnancy';
		}
		
		$arrMsg['data'] = $dataCustomer;
	}
	else{
		$arrMsg['status'] 	   = false;
		$arrMsg['status_code'] = 'edd_format_error'; 
		$arrMsg['msg'] 	       = "EDD format date invalid";
	}
}
else
{
	$arrMsg['status'] 	   = false;
	$arrMsg['status_code'] = 'compulsory_req'; 
	$arrMsg['msg'] 	       = "Event id and subscribe id empty";
}

echo json_encode($arrMsg)
?>