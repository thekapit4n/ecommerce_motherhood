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

$arrMsg    = array('status' => false, "status_code" => 'nodata_post', 'msg' => 'no data post', 'succeeded' => null);
$mobile    = (isset($_POST["mobileno"])) ? $_POST["mobileno"] : '';
$eventID   = (isset($_POST["eventid"])) ? $_POST["eventid"] : 0;

if($mobile != '')
{
	if($eventID > 0)
	{
		$whereSql = '';
		if($eventID == 107) # 107-dugro sample
		{
			$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
			$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_question1` = '" . trim($mobile) . "'";
			
			$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
			$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			
			#if user already register this events
			if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
			{
				$arrMsg['status'] 	   = false;
				$arrMsg['status_code'] = 'exist_customer_event'; 
				$arrMsg['msg'] 	       = 'registered customer';
			}
			else
			{
				$arrMsg['status'] 	   = true;
				$arrMsg['status_code'] = 'new_customer_event'; 
				$arrMsg['msg'] 	       = 'customer mobile no. new for this event';
				
			}
		}
	}
}
else
{
	$arrMsg['status'] 	   = false;
	$arrMsg['status_code'] = 'empty_mobile'; 
	$arrMsg['msg'] 	       = "Mobile no is empty. Please insert mobile no";
}

echo json_encode($arrMsg);

?>