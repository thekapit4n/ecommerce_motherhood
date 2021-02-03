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

$arrMsg   = array('status' => false, "status_code" => 'nodata_post', 'msg' => 'no data post', 'succeeded' => null);
$email    = (isset($_POST["checkemail"])) ? $_POST["checkemail"] : '';
$eventID  = (isset($_POST["eventid"])) ? $_POST["eventid"] : 0;

if($email != '')
{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$arrMsg['status'] 	   = false;
		$arrMsg['status_code'] = 'invalid_email'; # this for purpose , if client side have their own message to display, so can use this status code;
		$arrMsg['msg'] 	       = "Invalid email format. Please insert valid email format";
	}
	else
	{
		if($eventID > 0)
		{
			$whereSql = '';
			if($eventID == 102) # newmom-essential-nestle
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question1'];
						$dataCustomer['dob_parent']    = $val['subscriber_question2'];
						$dataCustomer['fulladdress']   = $val['subscriber_question3'];
						$dataCustomer['postcode']      = $val['subscriber_question4'];
						$dataCustomer['city']  		   = $val['subscriber_question5'];
						$dataCustomer['state']  	   = $val['subscriber_question7'];
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$dataCustomer['edd_date'] 	   = $val['subscriber_question8'];
						if($val['subscriber_question8'] != '')
						{
							$edd 			  = $val['subscriber_question8'];
							$babypregnantdate = strtotime($edd);
							$today 			  = strtotime(date("d-m-Y")); 
							$diff 			  = $today - $babypregnantdate;
							$days 			  = floor($diff/ (60*60*24)); 
							$weeks 			  = floor($days / 7);
							if($weeks > 0 && $weeks <= 40){
								$dataCustomer['week'] = $weeks;
							}
						}
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'new_customer_event'; 
					$arrMsg['msg'] 	       = 'customer email new for this event';
				}
			}
		}
		else
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'valid_format_email'; 
			$arrMsg['msg'] 	       = "valid format email";
		}
	}
}
else
{
	$arrMsg['status'] 	   = false;
	$arrMsg['status_code'] = 'empty_email'; 
	$arrMsg['msg'] 	       = "Email is empty. Please insert email";
}

echo json_encode($arrMsg)


/* f(isset($_POST["checkemail"]) && isset($_POST["password"]))
{
	$email 	  = trim($_POST["checkemail"]);
	$password = $_POST["password"];
	if($email == "")
	{
		
	}
	else if($password == '')
	{
		$arrMsg['status'] = false;
		$arrMsg['msg'] 	  = "Password is empty. Please insert password";
	}
	else
	{
		$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
		$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
		if ($resultC[0]['ccount'] > 0){
			$public_key = _SSO_PUBLIC_KEY_;
			$nonce	    =  Tools::generateRandomNonce();
			$signature  =  Tools::generateSignature($nonce);

			// ********** create sso user ********************

			$post_data = array(
				'email' 	 => $email,
				'password'   => $password,
				'public_key' => $public_key,
				'nonce' 	 =>  $nonce,
				'signature'  => $signature
			);
			$post_result = Tools::post_data(_SSO_API_LOGIN_ACCOUNT_, $post_data);
			$post_result = json_decode($post_result, true);
			
			if($post_result['succeeded'] == true)
			{
				$arrMsg['status']	  = true;
				$arrMsg['succeeded']  = $post_result['succeeded'];
				$arrMsg['msg'] 	  	  = 'info exist in our database and login info is correct';
			}
			else
			{
				$arrMsg['status'] 	  = false;
				$arrMsg['succeeded']  = $post_result['succeeded'];
				$arrMsg['msg'] 	  	  = isset($post_result['message']) ? $post_result['message'] : 'incorrect value';
			}
		}
		else
		{
			$arrMsg['status'] 	 = true;
			$arrMsg['msg'] 	  	 = "Email never exist in our database. This is new event";
		}
	}
} */

?>