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
$subscribe_id  = (isset($_POST["subscribe_id"])) ? $_POST["subscribe_id"] : 0;

if($eventID > 0 && $subscribe_id > 0)
{
	$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
	$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_id` = '" . trim($subscribe_id) . "'";
	
	$sql 		 = "UPDATE `ps_events_subscriber` SET `subscriber_question8` = '" . trim($edd)  . "'" . $whereSql . " LIMIT 1";
	$queryUpdate = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	if($queryUpdate)
	{
		$babypregnantdate = strtotime($edd);
		$today 			  = strtotime(date("Y-m-d")); 
		$diff 			  = $today - $babypregnantdate;
		$days 			  = floor($diff/ (60*60*24)); 
		$weeks      	  = floor($days / 7);
		
		$t = date("d-m-Y", strtotime($babypregnantdate));
		if($weeks > 0 && $weeks <= 40){
			$dataCustomer['week']  = $weeks;
			$arrMsg['msg'] 	       = 'Edd data has been update';
		}
		else
		{
			$dataCustomer['week']  = $weeks;
			$arrMsg['msg'] 	       = 'Edd data has been update week exceed';
		}
		
		$arrMsg['status'] 	   = true;
		$arrMsg['data'] 	   = $dataCustomer;
	}
	else
	{
		$arrMsg['status'] 	   = false;
		$arrMsg['status_code'] = 'edd_data_noupdate'; 
		$arrMsg['msg'] 	       = 'Edd data not has been update';
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