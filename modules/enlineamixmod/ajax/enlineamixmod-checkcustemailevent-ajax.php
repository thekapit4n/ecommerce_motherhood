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
$email     = (isset($_POST["checkemail"])) ? $_POST["checkemail"] : '';
$eventID   = (isset($_POST["eventid"])) ? $_POST["eventid"] : 0;
$password  = (isset($_POST["password"])) ? $_POST["password"] : 0;

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
			if(in_array($eventID, array(102, 106))) # 102-newmom-essential-nestle , 106 - wyeth promama
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
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
						$dataCustomer['milkbrand'] 	   = $val['subscriber_question9'];
						$dataCustomer['tnc_nestle']    = $val['subscriber_question12'];
						$dataCustomer['tnc_mmy']       = $val['subscriber_question13'];
						$dataCustomer['news_promo']    = $val['subscriber_question14'];
						
						if($dataCustomer['mobile'] != '')
						{
							$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
						}
						
						
						if($val['subscriber_question8'] != '')
						{
							$edd 			  = $val['subscriber_question8'];
							$babypregnantdate = strtotime($edd);
							$today 			  = strtotime(date("d-m-Y")); 
							$diff 			  = $babypregnantdate - $today;
							$days 			  = floor($diff/ (60*60*24)); 
							$weeks 			  = 40 -(floor($days / 7));
							
							$dataCustomer['week']  = $weeks;
						}
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						if($password == '')
						{
							$arrMsg['status'] 	   = false;
							$arrMsg['succeeded']   = $post_result['succeeded'];
							$arrMsg['status_code'] = 'exist_customer_motherhood_password_empty'; 
							$arrMsg['msg'] 	  	   = 'Password empty';
						}
						else
						{
							#check if email and password match with our SSO db
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
								$sql 		 = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
								$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
								
								#if user already register this events
								if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
								{
									foreach($queryResult2 as $val2)
									{
										$dataCustomer['firstname'] = $val2['firstname'];
										$dataCustomer['lastname']  = $val2['lastname'];
										$dataCustomer['email']     = $val2['email'];
									}
									
									$arrMsg['data'] = $dataCustomer;
								}
								
								
								$arrMsg['status']	   = true;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_valid'; 
								$arrMsg['msg'] 	  	   = 'info exist in our database and login info is correct';
							}
							else
							{
								$arrMsg['status'] 	   = false;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_invalid'; 
								$arrMsg['msg'] 	  	   = isset($post_result['message']) ? $post_result['message'] : 'incorrect value';
							}
						}
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 95) # clearblue survey
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question15'];
					}
					
					if($dataCustomer['mobile'] != '')
					{
						$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['status']	   = true;
							$arrMsg['succeeded']   = $post_result['succeeded'];
							$arrMsg['status_code'] = 'exist_customer_motherhood'; 
							$arrMsg['msg'] 	  	   = 'info exist in our database';
							$arrMsg['data'] = $dataCustomer;
						}
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif(in_array($eventID, array(97, 105))) # 97- apta-moms-with-kids, 105 - apta pregnants mom
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question1'];
						$dataCustomer['milkbrand'] 	   = $val['subscriber_question9'];
						$dataCustomer['child_name']    = $val['subscriber_question8'];
						$dataCustomer['child_dob']     = $val['subscriber_question2'];
						$dataCustomer['fulladdress']   = $val['subscriber_question3'];
						$dataCustomer['fulladdress2']   = $val['subscriber_question11'];
						$dataCustomer['postcode']      = $val['subscriber_question4'];
						$dataCustomer['city']  		   = $val['subscriber_question5'];
						$dataCustomer['state']  	   = $val['subscriber_question7'];
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$dataCustomer['tnc_apta']      = $val['subscriber_question10'];
					}
					
					if($dataCustomer['mobile'] != '')
					{
						$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						if($password == '')
						{
							$arrMsg['status'] 	   = false;
							$arrMsg['succeeded']   = $post_result['succeeded'];
							$arrMsg['status_code'] = 'exist_customer_motherhood_password_empty'; 
							$arrMsg['msg'] 	  	   = 'Password empty';
						}
						else
						{
							#check if email and password match with our SSO db
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
								$arrMsg['status']	   = true;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_valid'; 
								$arrMsg['msg'] 	  	   = 'info exist in our database and login info is correct';
							}
							else
							{
								$arrMsg['status'] 	   = false;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_invalid'; 
								$arrMsg['msg'] 	  	   = isset($post_result['message']) ? $post_result['message'] : 'incorrect value';
							}
						}
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 104) # mamypoko
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question1'];
						$dataCustomer['milkbrand'] 	   = $val['subscriber_question9'];
						$dataCustomer['child_name']    = $val['subscriber_question8'];
						$dataCustomer['child_dob']     = $val['subscriber_question2'];
						$dataCustomer['fulladdress']   = $val['subscriber_question3'];
						$dataCustomer['postcode']      = $val['subscriber_question4'];
						$dataCustomer['city']  		   = $val['subscriber_question5'];
						$dataCustomer['state']  	   = $val['subscriber_question7'];
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$dataCustomer['tnc_apta']      = $val['subscriber_question10'];
					}
					
					if($dataCustomer['mobile'] != '')
					{
						$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						if($password == '')
						{
							$arrMsg['status'] 	   = false;
							$arrMsg['succeeded']   = $post_result['succeeded'];
							$arrMsg['status_code'] = 'exist_customer_motherhood_password_empty'; 
							$arrMsg['msg'] 	  	   = 'Password empty';
						}
						else
						{
							#check if email and password match with our SSO db
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
								$arrMsg['status']	   = true;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_valid'; 
								$arrMsg['msg'] 	  	   = 'info exist in our database and login info is correct';
							}
							else
							{
								$arrMsg['status'] 	   = false;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_invalid'; 
								$arrMsg['msg'] 	  	   = isset($post_result['message']) ? $post_result['message'] : 'incorrect value';
							}
						}
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif(in_array($eventID, array(93, 99999))) # 93- superkid live page , 99999 - superkid uat
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question1'];
						$dataCustomer['fulladdress']   = $val['subscriber_question7'];
						$dataCustomer['postcode']      = $val['subscriber_question8'];
						$dataCustomer['city']  		   = $val['subscriber_question9'];
						$dataCustomer['state']  	   = $val['subscriber_question10'];
						
						$arr_child1['childname'] 	   = $val['subscriber_question11'];
						$arr_child1['childic'] 	   	   = $val['subscriber_question12'];
						$arr_child1['childdob'] 	   = $val['subscriber_question13'];
						$arr_child1['childmobileno']   = $val['subscriber_question14'];
						$arr_child1['childgender']     = $val['subscriber_question15'];
						$arr_child1['childmilkbrand']  = $val['subscriber_question26'];
						$dataCustomer['listchilds']['child1'] =  $arr_child1;
						
						$arr_child2['childname'] 	   = $val['subscriber_question16'];
						$arr_child2['childic'] 	   	   = $val['subscriber_question17'];
						$arr_child2['childdob'] 	   = $val['subscriber_question18'];
						$arr_child2['childmobileno']   = $val['subscriber_question19'];
						$arr_child2['childgender']     = $val['subscriber_question20'];
						$arr_child2['childmilkbrand']  = $val['subscriber_question27'];
						$dataCustomer['listchilds']['child2'] =  $arr_child2;
						
						$arr_child3['childname'] 	   = $val['subscriber_question21'];
						$arr_child3['childic'] 	   	   = $val['subscriber_question22'];
						$arr_child3['childdob'] 	   = $val['subscriber_question23'];
						$arr_child3['childmobileno']   = $val['subscriber_question24'];
						$arr_child3['childgender']     = $val['subscriber_question25'];
						$arr_child3['childmilkbrand']  = $val['subscriber_question28'];
						$dataCustomer['listchilds']['child3'] =  $arr_child3;
						
						$dataCustomer['tnc_agree']      = $val['subscriber_question29'];
					}
					
					if($dataCustomer['mobile'] != '')
					{
						$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						if($password == '')
						{
							$arrMsg['status'] 	   = false;
							$arrMsg['succeeded']   = $post_result['succeeded'];
							$arrMsg['status_code'] = 'exist_customer_motherhood_password_empty'; 
							$arrMsg['msg'] 	  	   = 'Password empty';
						}
						else
						{
							#check if email and password match with our SSO db
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
								$arrMsg['status']	   = true;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_valid'; 
								$arrMsg['msg'] 	  	   = 'info exist in our database and login info is correct';
							}
							else
							{
								$arrMsg['status'] 	   = false;
								$arrMsg['succeeded']   = $post_result['succeeded'];
								$arrMsg['status_code'] = 'exist_customer_motherhood_password_invalid'; 
								$arrMsg['msg'] 	  	   = isset($post_result['message']) ? $post_result['message'] : 'incorrect value';
							}
						}
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 107) # 107- dugro sample asli
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['firstname']     = $val['newFirstName'];
						$dataCustomer['lastname']  	   = $val['newLastName'];
						$dataCustomer['email']     	   = $val['newEmail'];
						$dataCustomer['mobile']        = $val['subscriber_question1'];
						$dataCustomer['milkbrand'] 	   = $val['subscriber_question9'];
						$dataCustomer['child_name']    = $val['subscriber_question8'];
						$dataCustomer['child_dob']     = $val['subscriber_question2'];
						$dataCustomer['fulladdress']   = $val['subscriber_question3'];
						$dataCustomer['fulladdress2']  = $val['subscriber_question11'];
						$dataCustomer['postcode']      = $val['subscriber_question4'];
						$dataCustomer['city']  		   = $val['subscriber_question5'];
						$dataCustomer['state']  	   = $val['subscriber_question7'];
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$dataCustomer['year_used'] 	   = $val['subscriber_question14'];
						$dataCustomer['month_used']    = $val['subscriber_question15'];
						
						$dataCustomer['tnc_apta']      = $val['subscriber_question12'];
					}
					
					if($dataCustomer['mobile'] != '')
					{
						$dataCustomer['mobile'] = substr($dataCustomer['mobile'], 1);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['status_code'] = 'exist_customer_event'; 
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
								$dataCustomer['userid']     = $val2['id_customer'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						$arrMsg['status']	   = true;
						$arrMsg['succeeded']   = $post_result['succeeded'];
						$arrMsg['status_code'] = 'exist_customer_motherhood_valid'; 
						$arrMsg['msg'] 	  	   = 'info exist in our database';
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 141) # 141- newmom welcom gift
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " (`subscriber_event_id` = '" . trim($eventID) . "' OR `subscriber_event_id` = '106')";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				$sqlGetSlug  = "SELECT * FROM ps_events WHERE `event_id` = 142 LIMIT 1"; # page that handle result survey question
				$querySlug   = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlGetSlug);
				$event_slug  = $querySlug[0]['event_slug'];
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$encoded 	  				   = trim(base64_encode($eventID . "###" . $val['subscriber_id']), "=.");
						$dataCustomer['encoded'] 	   = urlencode($encoded);
						$dataCustomer['redirectUrl'] = "https://". $_SERVER['HTTP_HOST'] . '/events/' . $event_slug . "?id=" . urlencode($encoded);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
					if($queryResult[0]['subscriber_event_id'] == 106)
					{
						$arrMsg['status_code'] = 'exist_customer_other_event'; 
					}
					else
					{
						$arrMsg['status_code'] = 'exist_customer_event'; 
					}
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						$arrMsg['status']	   = true;
						$arrMsg['succeeded']   = $post_result['succeeded'];
						$arrMsg['status_code'] = 'exist_customer_motherhood_valid'; 
						$arrMsg['msg'] 	  	   = 'info exist in our database';
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 142) # 142- redeemption process
			{
				$subscriberid  = (isset($_POST["subscriberid"])) ? $_POST["subscriberid"] : 0;
				$location_redeem  = (isset($_POST["location_redeem"]) && $_POST["location_redeem"] != '') ? pSQL(trim($_POST["location_redeem"])) : "";
				
				if($subscriberid > 0)
				{
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = 141";
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_id` = '" . trim($subscriberid) . "'";
					
					$updateRedeemInfo = "UPDATE ps_events_subscriber 
									SET 
									subscriber_question28 = 'redeem', 
									subscriber_question14 = '" . $location_redeem . "', 
									subscriber_question29 = CURRENT_TIMESTAMP, 
									subscriber_updated_at = CURRENT_TIMESTAMP " . $whereSql . " LIMIT 1";
					$redeemProcess 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateRedeemInfo);
				
					if($redeemProcess)
					{
						$arrMsg['status']	   = true;
						$arrMsg['succeeded']   = 'ok';
						$arrMsg['status_code'] = 'update_redeem_success'; 
						$arrMsg['msg'] 	  	   = 'redeem success';
					}
					else
					{
						$arrMsg['status']	   = false;
						$arrMsg['succeeded']   = 'invalid';
						$arrMsg['status_code'] = 'update_redeem_failed'; 
						$arrMsg['msg'] 	  	   = 'redeem unsuccess';
					}
					
				}
			}
			elseif($eventID == 143) # 143- superkid walk in
			{
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = '" . trim($eventID) . "'";
				$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
				
				$sql 		 = "SELECT * FROM `ps_events_subscriber`" . $whereSql . " ORDER BY `subscriber_id` DESC LIMIT 1";
				$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
				
				$sqlGetSlug  = "SELECT * FROM ps_events WHERE `event_id` = 144 LIMIT 1"; # page that handle result survey question
				$querySlug   = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlGetSlug);
				$event_slug  = $querySlug[0]['event_slug'];
				
				#if user already register this events
				if(is_array($queryResult) && isset($queryResult[0]) && sizeof($queryResult[0]) > 0)
				{
					foreach($queryResult as $val)
					{
						$dataCustomer['subscriber_id'] = $val['subscriber_id'];
						$encoded 	  				   = trim(base64_encode($eventID . "###" . $val['subscriber_id']), "=.");
						$dataCustomer['encoded'] 	   = urlencode($encoded);
						$dataCustomer['redirectUrl'] = "https://". $_SERVER['HTTP_HOST'] . '/events/' . $event_slug . "?id=" . urlencode($encoded);
					}
					
					$arrMsg['status'] 	   = true;
					$arrMsg['msg'] 	       = 'registered customer';
					$arrMsg['data'] 	   = $dataCustomer;
					
					$arrMsg['status_code'] = 'exist_customer_event'; 
					
				}
				else
				{
					$whereSql = '';
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `email` = '" . trim($email) . "'";
					
					#check if customer is member of motherhood
					$sqlC 	 = 'SELECT COUNT(id_customer) as ccount	FROM `ps_customer` WHERE email="'. trim($email) . '" LIMIT 1';
					$resultC = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlC);
					#if member
					if ($resultC[0]['ccount'] > 0){
						
						$sql 		  = "SELECT * FROM `ps_customer`" . $whereSql . " ORDER BY `id_customer` DESC LIMIT 1";
						$queryResult2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
						
						#if user already register this events
						if(is_array($queryResult2) && isset($queryResult2[0]) && sizeof($queryResult2[0]) > 0)
						{
							foreach($queryResult2 as $val2)
							{
								$dataCustomer['firstname'] = $val2['firstname'];
								$dataCustomer['lastname']  = $val2['lastname'];
								$dataCustomer['email']     = $val2['email'];
							}
							
							$arrMsg['data'] = $dataCustomer;
						}
						
						$arrMsg['status']	   = true;
						$arrMsg['succeeded']   = $post_result['succeeded'];
						$arrMsg['status_code'] = 'exist_customer_motherhood_valid'; 
						$arrMsg['msg'] 	  	   = 'info exist in our database';
					}
					else
					{
						$arrMsg['status'] 	   = true;
						$arrMsg['status_code'] = 'new_customer_event'; 
						$arrMsg['msg'] 	       = 'customer email new for this event';
					}
				}
			}
			elseif($eventID == 144) # 142- redeemption process
			{
				$subscriberid  = (isset($_POST["subscriberid"])) ? $_POST["subscriberid"] : 0;
				$location_redeem  = (isset($_POST["location_redeem"]) && $_POST["location_redeem"] != '') ? pSQL(trim($_POST["location_redeem"])) : "";
				
				if($subscriberid > 0)
				{
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_event_id` = 143";
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `newEmail` = '" . trim($email) . "'";
					$whereSql .= ($whereSql == "" ? ' WHERE ' : ' AND ') . " `subscriber_id` = '" . trim($subscriberid) . "'";
					
					$updateRedeemInfo = "UPDATE ps_events_subscriber 
									SET 
									subscriber_question30 = '" . $location_redeem . "', 
									subscriber_question31 = 'redeem', 
									subscriber_question32 = CURRENT_TIMESTAMP, 
									subscriber_updated_at = CURRENT_TIMESTAMP " . $whereSql . " LIMIT 1";
					$redeemProcess 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateRedeemInfo);
				
					if($redeemProcess)
					{
						$arrMsg['status']	   = true;
						$arrMsg['succeeded']   = 'ok';
						$arrMsg['status_code'] = 'update_redeem_success'; 
						$arrMsg['msg'] 	  	   = 'redeem success';
					}
					else
					{
						$arrMsg['status']	   = false;
						$arrMsg['succeeded']   = 'invalid';
						$arrMsg['status_code'] = 'update_redeem_failed'; 
						$arrMsg['msg'] 	  	   = 'redeem unsuccess';
					}
					
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