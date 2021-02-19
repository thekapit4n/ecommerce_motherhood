<?php
/**  
* Created date  : 18/02/2021
* Created by    : Haiqal Halim <haiqal@nurengroup.com>
* Modified date : 18/02/2021
* Modified by   : Haiqal Halim <haiqal@nurengroup.com>
**/

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include(dirname(__FILE__).'/../../modules/enlineamixmod/models/CustomerAdditionalInfo.php');

if (!class_exists('enlineamixmod')) {
   // Put class TestClass here
    include(dirname(__FILE__).'/enlineamixmod.php');
}

$arrMsg   	= array('status' => false, "status_code" => 'nodata_post', 'msg' => 'no data post', 'succeeded' => null);
$formtype   = (isset($_POST["formtype"])) ? $_POST["formtype"] : '';
$context	= Context::getContext();
$customerid = $context->customer->id;

/**  
* NOTE TO MYSELF(Haiqal halim)
*===========================================================================
* for gender base on link between table ps_gender and ps_gender_lang
* id_gender = 1 = male;
* id_gender = 2 & 3 = female;
*
* yup, confusing right? because nobody dare to add new column in ps_customer table name GENDER to store data female/male.
* if work dont fix. we use the concept here.
* 
* that the name is protected against SQL injections thanks to the pSQL() method.
**/

if($customerid > 0)
{
	$cust 		 = new Customer($customerid);
	
	$sqlCheckAdditonalInfo = "SELECT COUNT(id_customer) as total FROM ps_customer_additional_info WHERE id_customer = '" . $customerid . "' LIMIT 1" ;
	$queryResult = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sqlCheckAdditonalInfo);
		
	if($formtype == 'customer_info')
	{
		$res 			  = false;
		$resultAdditional = false;
		$firstname 		  = (isset($_POST["firstname"])) ? pSQL(trim($_POST["firstname"])) : '';
		$lastname  		  = (isset($_POST["lastname"])) ? pSQL(trim($_POST["lastname"])) : '';
		$email 	   	  	  = (isset($_POST["email"])) ? pSQL(trim($_POST["email"])): '';
		$phone_mobile 	  = (isset($_POST["phone_mobile"])) ? pSQL(trim($_POST["phone_mobile"])) : '';
		$gender 		  = (isset($_POST["gender"])) ? pSQL(trim($_POST["gender"])) : '';
		$about_yourself   = (isset($_POST["about_yourself"])) ? pSQL(trim($_POST["about_yourself"])) : '';
		
		if($firstname == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-firstname-input'] = 'Please insert firstname';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'firstname_empty'; # this for purpose , if client side have their own message to display, so can use this status code;
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($lastname == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-lastname-input'] = 'Please insert lastname';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'lastname_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($email == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-email-input'] = 'Please insert email';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'email_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-email-input'] = 'Please insert valid email format';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'invalid_email'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($phone_mobile == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-phoneno-input'] = 'Please insert mobile no';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'phoneno_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($gender == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-gender-input'] = 'Please select gender';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'gender_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($about_yourself == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-abouturself-input'] = 'Please insert word about yourself';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'aboutyourself_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if(strtolower($gender) == 'male')
		{
			$is_gender = 1;
		}
		elseif(strtolower($gender) == 'female')
		{
			$is_gender = 2;
		}
		
		$cust->firstname 	  = $firstname;
		$cust->lastname  	  = $lastname;
		$cust->email 	      = $email;
		$cust->id_gender  	  = $is_gender;
		$res = $cust->save();
		
		
		
		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET phone = '$phone_mobile', shortBio = '$about_yourself', date_upd = CURRENT_DATE WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer,phone,shortBio,date_add) 
									VALUES ($customerid,'$phone_mobile','$about_yourself',CURRENT_DATE)";
			$resultAdditional	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertAdditionalInfo);
		}
		
		if($res == true && $resultAdditional == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif( $formtype == 'customer_about')
	{
		$res 			  = false;
		$resultAdditional = false;
		$dob 		  	  = (isset($_POST["dob"])) ? pSQL(trim($_POST["dob"])) : '';
		$cust_occupation  = (isset($_POST["cust_occupation"])) ? pSQL(trim($_POST["cust_occupation"])) : '';
		$cust_race 	   	  = (isset($_POST["cust_race"])) ? pSQL(trim($_POST["cust_race"])): '';
		$cust_salaryrange = (isset($_POST["cust_salaryrange"])) ? pSQL(trim($_POST["cust_salaryrange"])) : '';
		
		if($dob == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-about-dob'] = 'Please insert dob';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'dob_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($cust_occupation == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-occupation'] = 'Please insert occupation';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'occupation_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($cust_race == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['race-input'] = 'Please insert race';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'races_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($cust_salaryrange == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-about-salaryrange'] = 'Please insert salary range';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'salary_range_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		$sql_dobformat = date('Y-m-d', strtotime($dob));
		
		$cust->birthday 	  = $sql_dobformat;
		$res = $cust->save();
		
		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET annual_income_range = '$cust_salaryrange', occupation = '$cust_occupation', race = '$cust_race', date_upd = CURRENT_DATE WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer, annual_income_range, occupation, race, date_add) 
									VALUES ($customerid,'$cust_salaryrange','$cust_occupation', '$cust_race', CURRENT_DATE)";
			$resultAdditional	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertAdditionalInfo);
		}
		
		if($res == true && $resultAdditional == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
}





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