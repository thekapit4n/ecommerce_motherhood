<?php
/**  
* Created date  : 17/02/2021
* Created by    : Haiqal Halim <haiqal@nurengroup.com>
* Modified date : 17/02/2021
* Modified by   : Haiqal Halim <haiqal@nurengroup.com>
**/

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');

if (!class_exists('enlineamixmod')) {
   // Put class TestClass here
    include(dirname(__FILE__).'/enlineamixmod.php');
}

$arrMsg   	   = array('status' => false, "status_code" => 'nodata_post', 'msg' => 'no data post', 'succeeded' => null);
$postcode      = (isset($_POST["postcode"])) ? $_POST["postcode"] : '';
$whereSql = '';
$datapostcode = array();

if($postcode != '')
{
	$whereSql 	.= ($whereSql == "" ? ' WHERE ' : ' AND ') . " tblpost.postcode = '" . trim($postcode) . "'";
	$sql 		 = "SELECT tblpost.*,tblstate.state_name FROM ps_postcode as tblpost
					LEFT JOIN ps_postcode_state as tblstate 
					ON tblstate.state_code = tblpost.state_code " . $whereSql . " LIMIT 1";
	$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
	{
		foreach($queryResult as $val)
		{
			$datapostcode['postcode'] 	= $val['postcode'];
			$datapostcode['area'] 	  	= $val['area'];
			$datapostcode['city'] 	  	= $val['post_office'];
			$datapostcode['city'] 	  	= $val['post_office'];
			$datapostcode['state_code'] = $val['state_code'];
			$datapostcode['state_name'] = $val['state_name'];
		}
		
		$arrMsg['status'] 	   = true;
		$arrMsg['status_code'] = 'postcode_exist'; 
		$arrMsg['msg'] 	       = 'postcode found';
		$arrMsg['data'] 	   = $datapostcode;
	}
	else
	{
		$arrMsg['status'] 	   = false;
		$arrMsg['status_code'] = 'postcode_not_exist'; 
		$arrMsg['msg'] 	       = 'postcode not found';
		$arrMsg['data'] 	   = $datapostcode;
	}
}
else
{
	$arrMsg['status'] 	   = false;
	$arrMsg['status_code'] = 'postcode_req_empty'; 
	$arrMsg['msg'] 	       = "Postcode request empty";
}

echo json_encode($arrMsg)
?>