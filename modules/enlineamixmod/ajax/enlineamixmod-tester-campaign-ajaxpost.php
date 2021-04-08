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
$customerid = 0;
$customerid = $context->customer->id > 0 ? $context->customer->id : 0 ;

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
* 
* FOR SAVING STATE ID AND COUNTRY ID
* ====================================
* data id_state and id_country in table ps_address come from table ps_state and ps_country 
* but the list of state in view come from table ps_postcode_state.
* the reason i use from ps_postcode_state because, 
* 1- name of state is proper 
* 2- for auto detect state based on postcode, based on link table ps_postcode & ps_postcode_state.
* when come to save data address we will match the state name in table ps_state and get the id.
**/

if($customerid > 0)
{
	$cust = new Customer($customerid);
	
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
									SET phone = '$phone_mobile', shortBio = '$about_yourself', date_upd = CURRENT_TIMESTAMP WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer,phone,shortBio,date_add) 
									VALUES ($customerid,'$phone_mobile','$about_yourself',CURRENT_TIMESTAMP)";
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
		
		$cust->birthday  = $sql_dobformat;
		$res = $cust->save();
		
		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET annual_income_range = '$cust_salaryrange', occupation = '$cust_occupation', race = '$cust_race', date_upd = CURRENT_TIMESTAMP WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer, annual_income_range, occupation, race, date_add) 
									VALUES ($customerid,'$cust_salaryrange','$cust_occupation', '$cust_race', CURRENT_TIMESTAMP)";
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
	elseif( $formtype == 'customer_family')
	{
		$resultAdditional = false;
		$marital_status   = (isset($_POST["marital_status"])) ? pSQL(trim($_POST["marital_status"])) : '';
		$expect_newborn   = (isset($_POST["expect_newborn"])) ? pSQL(trim($_POST["expect_newborn"])) : '';
		$edd   			  = (isset($_POST["edd"])) ? pSQL(trim($_POST["edd"])) : '';
		$num_child   	  = (isset($_POST["num_child"]) && is_numeric($_POST["num_child"])) ? pSQL(trim($_POST["num_child"])) : 0;
		$arr_dobchild     = (isset($_POST["child_dob"]) && is_array($_POST["child_dob"]) && sizeof($_POST["child_dob"]) > 0) ? $_POST["child_dob"] : array();
		
		if($marital_status == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['cust-marital-status'] = 'Please select marital status';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'marital_status_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if(strtolower($marital_status) != 'not married')
		{
			if($expect_newborn == '')
			{
				$error_msg['expect-newborn'] = 'Please select one of the option';
			
				$arrMsg['status'] 	   = false;
				$arrMsg['status_code'] = 'expect_newborn_empty'; 
				$arrMsg['msg'] 	       = array_values($error_msg);
				$arrMsg['error_field'] = array_keys($error_msg);
				
				echo json_encode($arrMsg);
				exit;
			}
			
			if(strtolower($expect_newborn)!= 'no')
			{
				if($edd == '')
				{
					$error_msg['expect-newborn'] = 'Please enter edd';
			
					$arrMsg['status'] 	   = false;
					$arrMsg['status_code'] = 'edd_empty'; 
					$arrMsg['msg'] 	       = array_values($error_msg);
					$arrMsg['error_field'] = array_keys($error_msg);
					
					echo json_encode($arrMsg);
					exit;
				}
			}
			
			if($num_child > 0)
			{
				if(is_array($arr_dobchild) && sizeof($arr_dobchild) > 0)
				{
					foreach($arr_dobchild as $childno => $childdob )
					{
						$childSequence = ($childno + 1);
						if($childdob == '')
						{
							$error_msg['child-dob' . $childSequence] = 'Please enter dob child no ' . $childSequence;
			
							$arrMsg['status'] 	   = false;
							$arrMsg['status_code'] = 'child_dob_' . $childSequence; 
							$arrMsg['msg'] 	       = array_values($error_msg);
							$arrMsg['error_field'] = array_keys($error_msg);
							
							echo json_encode($arrMsg);
							exit;
						}
					}
				}
			}
		}
		
		$childbirthyear1 = '';
		$childbirthyear2 = '';
		$childbirthyear3 = '';
		$childbirthyear4 = '';
		$childbirthyear5 = '';
		$childbirthyear6 = '';
		if(strtolower($marital_status) == 'not married')
		{
			$expect_newborn  = '';
			$edd 			 = '';
			$num_child		 = 0;
		}
		else
		{
			$arrSortDateEdd = explode("/", $edd);
			if(sizeof($arrSortDateEdd) == 3){
				$eddParent = $arrSortDateEdd[2] . "-" . $arrSortDateEdd[1] . "-" . $arrSortDateEdd[0];
				$edd = date('Y-m-d', strtotime($eddParent));
			}
			
			if($num_child > 0)
			{
				foreach($arr_dobchild as $childno => $childdob)
				{
					$childSequence = ($childno + 1);
					
					$arrSortDate = explode("/", $childdob);
					if(sizeof($arrSortDate) == 3)
					{
						$dobanak = $arrSortDate[2] . "-" . $arrSortDate[1] . "-" . $arrSortDate[0];
						$dob_child = date('Y-m-d', strtotime($dobanak));
						$dob_child = pSQL($dob_child);
						if($childSequence == 1)
						{
							$childbirthyear1 = $dob_child;
						}
						elseif($childSequence == 2)
						{
							$childbirthyear2 = $dob_child;
						}
						elseif($childSequence == 3)
						{
							$childbirthyear3 = $dob_child;
						}
						elseif($childSequence == 4)
						{
							$childbirthyear4 = $dob_child;
						}
						elseif($childSequence == 5)
						{
							$childbirthyear5 = $dob_child;
						}
						elseif($childSequence == 6)
						{
							$childbirthyear6 = $dob_child;
						}
					}
				}
			}
		}

		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET 
									edd = '$edd', 
									married = '$marital_status', 
									childno = '$num_child', 
									pregnant= '$expect_newborn', 
									childbirthyear1 = '$childbirthyear1',
									childbirthyear2 = '$childbirthyear2',
									childbirthyear3 = '$childbirthyear3',
									childbirthyear4 = '$childbirthyear4',
									childbirthyear5 = '$childbirthyear5',
									childbirthyear6 = '$childbirthyear6',
									date_upd = CURRENT_TIMESTAMP
									WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer, edd, married, childno, pregnant, childbirthyear1, childbirthyear2, childbirthyear3, childbirthyear4, childbirthyear5, childbirthyear6, date_add) 
									VALUES ($customerid,'$edd','$marital_status', '$num_child', '$expect_newborn', '$childbirthyear1', '$childbirthyear2', '$childbirthyear3' , '$childbirthyear4', '$childbirthyear5', '$childbirthyear6' , CURRENT_TIMESTAMP)";
			$resultAdditional	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertAdditionalInfo);
		}
		
		if($resultAdditional == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif( $formtype == 'customer_favorites')
	{
		$resultAdditional    = false;
		$milkbrand 			 = "";
		$diaperbrand 		 = "";
		$pastreviewbrand 	 = "";
		$jsonMilkBrand     	 = (isset($_POST["milk_brand"]) && $_POST["milk_brand"] != '') ? $_POST["milk_brand"] : '';
		$jsonDiaperBrand   	 = (isset($_POST["diapers_brand"]) && $_POST["diapers_brand"] != '') ? $_POST["diapers_brand"] : '';
		$jsonPastReviewBrand = (isset($_POST["past_review_brands"]) && $_POST["past_review_brands"] != '') ? $_POST["past_review_brands"] : '';
		$jsonLoveBrand 		 = (isset($_POST["love_brand"]) && $_POST["love_brand"] != '') ? $_POST["love_brand"] : '';
		$jsonContractBrand   = (isset($_POST["contract_brands"]) && $_POST["contract_brands"] != '') ? $_POST["contract_brands"] : '';
		
		if($jsonMilkBrand != '')
		{
			$arr_milkbrand = json_decode($jsonMilkBrand, true); // tagify plugin send value in json format
			if(is_array($arr_milkbrand) && sizeof($arr_milkbrand) > 0)
			{
				$milkbrand 				   = implode(',', array_column($arr_milkbrand, 'value'));
				$_POST['string_milkbrand'] = $milkbrand;
				$milkbrand 				   = pSQL($milkbrand);
			}
		}
		
		if($jsonDiaperBrand != '')
		{
			$arr_diaperbrand = json_decode($jsonDiaperBrand, true); // tagify plugin send value in json format
			if(is_array($arr_diaperbrand) && sizeof($arr_diaperbrand) > 0)
			{
				$diaperbrand 				 = implode(',', array_column($arr_diaperbrand, 'value'));
				$_POST['string_diaperbrand'] = $diaperbrand;
				$diaperbrand 				 = pSQL($diaperbrand);
			}
		}
		
		if($jsonPastReviewBrand != '')
		{
			$arr_pastreviewbrand = json_decode($jsonPastReviewBrand, true); // tagify plugin send value in json format
			if(is_array($arr_pastreviewbrand) && sizeof($arr_pastreviewbrand) > 0)
			{
				$pastreviewbrand  			 = implode(',', array_column($arr_pastreviewbrand, 'value'));
				$_POST['string_pastbrand'] 	 = $pastreviewbrand;
				$_POST['arr_pastbrand'] 	 = array_column($arr_pastreviewbrand, 'value');
				$pastreviewbrand 			 = pSQL($pastreviewbrand);
			}
		}
		
		if($jsonLoveBrand != '')
		{
			$arr_lovebrand = json_decode($jsonLoveBrand, true); // tagify plugin send value in json format
			if(is_array($arr_lovebrand) && sizeof($arr_lovebrand) > 0)
			{
				$lovebrand  			   	 = implode(',', array_column($arr_lovebrand, 'value'));
				$_POST['string_lovebrand'] 	 = $lovebrand;
				$_POST['arr_lovebrand'] 	 = array_column($arr_lovebrand, 'value');
				$lovebrand 			 		 = pSQL($lovebrand);
			}
		}
		
		if($jsonContractBrand != '')
		{
			$arr_contractbrand = json_decode($jsonContractBrand, true); // tagify plugin send value in json format
			if(is_array($arr_contractbrand) && sizeof($arr_contractbrand) > 0)
			{
				$contractBrand  			   	= implode(',', array_column($arr_contractbrand, 'value'));
				$_POST['string_contractbrand'] 	= $contractBrand;
				$_POST['arr_contractbrand'] 	= array_column($arr_contractbrand, 'value');
				$contractBrand 			 		= pSQL($contractBrand);
			}
		}

		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET 
									favMilk = '$milkbrand', 
									favDiaper = '$diaperbrand', 
									affBrands = '$pastreviewbrand', 
									favOther = '$lovebrand', 
									contracts = '$contractBrand', 
									date_upd = CURRENT_TIMESTAMP
									WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer, favMilk, favDiaper, affBrands, favOther, contracts, date_add) 
									VALUES ($customerid,'$milkbrand','$diaperbrand', '$pastreviewbrand', '$lovebrand', '$contractBrand', CURRENT_TIMESTAMP)";
			$resultAdditional	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertAdditionalInfo);
		}
		
		if($resultAdditional == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif( $formtype == 'customer_interest')
	{
		$resultAdditional = false;
		$igUrl     		  = (isset($_POST["interest_igaccount"]) && $_POST["interest_igaccount"] != '') ? pSQL($_POST["interest_igaccount"]) : '';
		$fbUrl  		  = (isset($_POST["interest_fbaccount"]) && $_POST["interest_fbaccount"] != '') ? pSQL($_POST["interest_fbaccount"]) : '';
		$blogUrl 	 	  = (isset($_POST["interest_blogwebsite"]) && $_POST["interest_blogwebsite"] != '') ? pSQL($_POST["interest_blogwebsite"]) : '';
		$hostShow 	 	  = (isset($_POST["interest_hostshow"]) && $_POST["interest_hostshow"] != '') ? pSQL($_POST["interest_hostshow"]) : 0;

		if(isset($queryResult[0]['total']) && $queryResult[0]['total'] > 0)
		{
			$updateAdditionalInfo = "UPDATE ps_customer_additional_info 
									SET 
									insta_url = '$igUrl', 
									fbUrl = '$fbUrl', 
									blogUrl = '$blogUrl', 
									can_host_live = '$hostShow', 
									date_upd = CURRENT_TIMESTAMP
									WHERE id_customer = " . $customerid . " LIMIT 1";
			$resultAdditional 	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($updateAdditionalInfo);
		}
		else
		{
			$insertAdditionalInfo = "INSERT INTO ps_customer_additional_info (id_customer, insta_url, fbUrl, blogUrl, can_host_live, date_add) 
									VALUES ($customerid,'$milkbrand','$diaperbrand', '$pastreviewbrand', '$hostShow', CURRENT_TIMESTAMP)";
			$resultAdditional	  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertAdditionalInfo);
		}
		
		if($resultAdditional == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif($formtype == 'customer_address')
	{
		$resultAdditional = false;
		$type_addres_form = (isset($_POST["type_addres_form"]) && $_POST["type_addres_form"] != '') ? pSQL($_POST["type_addres_form"]) : '';
		$id_address       = (isset($_POST["address_id"]) && $_POST["address_id"] > 0) ? pSQL($_POST["address_id"]) : 0;
		$alias     		  = (isset($_POST["addr_title"]) && $_POST["addr_title"] != '') ? pSQL($_POST["addr_title"]) : '';
		$firstname     	  = (isset($_POST["addr_firstname"]) && $_POST["addr_firstname"] != '') ? pSQL($_POST["addr_firstname"]) : '';
		$lastname     	  = (isset($_POST["addr_lastname"]) && $_POST["addr_lastname"] != '') ? pSQL($_POST["addr_lastname"]) : '';
		$address1     	  = (isset($_POST["addr_line1"]) && $_POST["addr_line1"] != '') ? pSQL($_POST["addr_line1"]) : '';
		$address2     	  = (isset($_POST["addr_line2"]) && $_POST["addr_line2"] != '') ? pSQL($_POST["addr_line2"]) : '';
		$postcode     	  = (isset($_POST["addr_postcode"]) && $_POST["addr_postcode"] != '') ? pSQL($_POST["addr_postcode"]) : '';
		$city     	  	  = (isset($_POST["addr_city"]) && $_POST["addr_city"] != '') ? pSQL($_POST["addr_city"]) : '';
		$statename     	  = (isset($_POST["addr_state"]) && $_POST["addr_state"] != '') ? pSQL($_POST["addr_state"]) : '';
		$countryname      = (isset($_POST["addr_country"]) && $_POST["addr_country"] != '') ? pSQL($_POST["addr_country"]) : '';
		$phone_mobile     = (isset($_POST["addr_mobileno"]) && $_POST["addr_mobileno"] != '') ? pSQL($_POST["addr_mobileno"]) : '';
		$phone    		  = (isset($_POST["addr_homeno"]) && $_POST["addr_homeno"] != '') ? pSQL($_POST["addr_homeno"]) : '';
		$other    		  = (isset($_POST["addr_additionalinfo"]) && $_POST["addr_additionalinfo"] != '') ? pSQL($_POST["addr_additionalinfo"]) : '';
		
		if($alias == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-title'] = 'Please set address title';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_title_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($firstname == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-firstname'] = 'Please set address first name';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_fist_name_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
			
		if($lastname == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-lastname'] = 'Please set address last name';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_last_name_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($address1 == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-line1'] = 'Please set address 1';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_line1_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($postcode == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-postcode'] = 'Please set postcode';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'postcode_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		elseif(!is_numeric($postcode))
		{
			$error_msg['addr-postcode'] = 'Please postcode only in numeric value';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'postcode_not_numeric'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($city == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-city'] = 'Please set city';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_city_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($statename == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-state'] = 'Please set state';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_state_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($countryname == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-country'] = 'Please set country';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_country_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($phone_mobile == '')
		{
			#key of this array is, class name on input = msg u want to show;
			$error_msg['addr-mobileno'] = 'Please set mobile no';
			
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'addr_mobile_empty'; 
			$arrMsg['msg'] 	       = array_values($error_msg);
			$arrMsg['error_field'] = array_keys($error_msg);
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if(strtolower($statename) == 'wilayah persekutuan kuala lumpur')
		{
			$statename = 'Kuala Lumpur';
		}
		elseif(strtolower($statename) == 'wilayah persekutuan labuan')
		{
			$statename = 'Labuan';
		}
		elseif(strtolower($statename) == 'wilayah persekutuan putrajaya')
		{
			$statename = 'Putrajaya';
		}
		
		$id_state = 0;
		$id_country = 0;
		$sql_state 	 = "SELECT * FROM motherhood_presta.ps_state WHERE name = '" . $statename . "' LIMIT 1";
		$resultstate = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql_state);
		if(is_array($resultstate) && sizeof($resultstate) > 0)
		{
			$id_state 	= isset($resultstate[0]['id_state']) ? $resultstate[0]['id_state'] : 0;
			$id_country = isset($resultstate[0]['id_country']) ? $resultstate[0]['id_country'] : 0;
		}
		
		$objAddr = new Address($id_address);
		$objAddr->id_address   = $id_address;
		$objAddr->id_customer  = $customerid;
		$objAddr->id_country   = $id_country;
		$objAddr->id_state 	   = $id_state;
		$objAddr->alias 	   = $alias;
		$objAddr->firstname    = $firstname;
		$objAddr->lastname     = $lastname;
		$objAddr->address1     = $address1;
		$objAddr->address2     = $address2;
		$objAddr->postcode     = $postcode;
		$objAddr->city         = $city;
		$objAddr->phone_mobile = $phone_mobile;
		$objAddr->phone 	   = $phone;
		$objAddr->other 	   = $other;
		$res 				   = $objAddr->save();
		
		if($res == true)
		{
			$arrMsg['status'] 	   = true;
			$arrMsg['status_code'] = 'data_saved'; 
			$arrMsg['msg'] 	       = 'data successfully saved';
			$arrMsg['data'] 	   = $_POST;

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif($formtype == 'customer_list_address')
	{
		$sql_address = "SELECT addr.*,state.name as statename FROM motherhood_presta.ps_address as addr 
						LEFT JOIN ps_state as state
						ON addr.id_state = state.id_state
						WHERE addr.id_customer = " . $customerid;
		$resultAddr  = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql_address);
	
		$smarty->assign('arrAddress', $resultAddr);
		$output = $smarty->fetch(_PS_ROOT_DIR_ . "/modules/enlineamixmod/views/templates/front/mamacubatry_listaddr.tpl");
		
		$arrMsg['status'] 	   	= true;
		$arrMsg['status_code'] 	= 'data_fetched'; 
		$arrMsg['msg'] 	       	= 'ok';
		$arrMsg['data']['html'] = $output;

		echo json_encode($arrMsg);
		exit;
		
	}
	elseif($formtype == 'customer_address_details')
	{
		$address_id = (isset($_POST["addr_id"]) && $_POST["addr_id"] != '') ? pSQL($_POST["addr_id"]) : '';
		
		if($address_id > 0)
		{
			$objAddr = new Address($address_id);
			
			$sql_state 	 = "SELECT * FROM motherhood_presta.ps_state WHERE id_state = '" . $objAddr->id_state  . "' LIMIT 1";
			$resultstate = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql_state);
			if(is_array($resultstate) && sizeof($resultstate) > 0)
			{
				$statename 	= isset($resultstate[0]['name']) ? $resultstate[0]['name'] : "";
				
				// if(in_array(strtolower($statename), array('kuala lumpur', 'labuan', 'putrajaya')))
				// {
					// $statename = "Wilayah Persekutuan " . ucwords(strtolower($statename));
				// }
				
				$objAddr->statename = $statename;
			}
			
			$arrMsg['status'] 	   	= true;
			$arrMsg['status_code'] 	= 'data_fetched'; 
			$arrMsg['msg'] 	       	= 'ok';
			$arrMsg['data']         = $objAddr;

			echo json_encode($arrMsg);
			exit;
		}
		else
		{
			$arrMsg['status'] 	   	= false;
			$arrMsg['status_code'] 	= 'address_id_empty'; 
			$arrMsg['msg'] 	       	= 'address id empty';
			$arrMsg['data']         = '';

			echo json_encode($arrMsg);
			exit;
		}
	}
	elseif($formtype == 'tester_campaign_details')
	{
		
		// $tester_product_id 	= (isset($_POST["tester_product_id"]) && $_POST["tester_product_id"] != '') ? pSQL(trim($_POST["tester_product_id"])) : '';
		$tester_id 			= (isset($_POST["tester_id"]) && $_POST["tester_id"] != '') ? pSQL(trim($_POST["tester_id"])) : '';
		$delivery_id 		= (isset($_POST["delivery_id"]) && $_POST["delivery_id"] != '') ? pSQL(trim($_POST["delivery_id"])) : '';
		// $billing_id 		= (isset($_POST["billing_id"]) && $_POST["billing_id"] != '') ? pSQL(trim($_POST["billing_id"])) : '';
		// $same_delivery_addr = (isset($_POST["same_delivery"]) && $_POST["same_delivery"] != '') ? pSQL(trim($_POST["same_delivery"])) : ''; #for now management dont want to ask billing address - 26/2/2021 - haiqal
		$same_delivery_addr = 'yes';
		$objCart 			= new Cart($customerid);
		
		if($tester_id == '')
		{
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'campaign_id_empty'; 
			$arrMsg['msg'] 	       = "Campaign id invalid";
			
			echo json_encode($arrMsg);
			exit;
		}
		
		if($delivery_id <= 0)
		{
			$arrMsg['status'] 	   = false;
			$arrMsg['status_code'] = 'delivery_id_empty'; 
			$arrMsg['msg'] 	       = "Please select address or add new address before proceed";
			
			echo json_encode($arrMsg);
			exit;
		}
		
		// if(strtolower($same_delivery_addr) != 'yes')
		// {
			// if($billing_id <= 0)
			// {
				// $arrMsg['status'] 	   = false;
				// $arrMsg['status_code'] = 'billing_id_empty'; 
				// $arrMsg['msg'] 	       = "Please select billing address before proceed";
				
				// echo json_encode($arrMsg);
				// exit;
			// }
		// }

		$checkExistCampaign = "SELECT count(tester_id) as total, tester_product_id FROM ps_tester_campaign_header WHERE tester_id = " . $tester_id . " AND tester_product_id > 0 LIMIT 1";
		$resultCampaign 	= Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($checkExistCampaign);
		
		if(is_array($resultCampaign) && sizeof($resultCampaign) > 0 && isset($resultCampaign[0]['total']) && $resultCampaign[0]['total'] > 0)
		{
			$tester_product_id = $resultCampaign[0]['tester_product_id'];
			
			$checkCustomerExist  = "SELECT count(tester_detail_id) as total FROM ps_tester_campaign_detail WHERE tester_id = " . $tester_id . " AND customer_id = " . $customerid . " LIMIT 1";
			$resultCustomerExist = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($checkCustomerExist);
			
			if(is_array($resultCustomerExist) && sizeof($resultCustomerExist) > 0 && isset($resultCustomerExist[0]['total']) && $resultCustomerExist[0]['total'] > 0)
			{
				
				$objCart->id_address_delivery = $delivery_id;
				$objCart->id_address_invoice  = $delivery_id;
				
				/* if(strtolower($same_delivery_addr) == 'yes')
				{
					$objCart->id_address_delivery = $delivery_id;
					$objCart->id_address_invoice  = $delivery_id;
				}
				else
				{
					$objCart->id_address_delivery = $delivery_id;
					$objCart->id_address_invoice  = $billing_id;
				} */
				
				$objCart->save();
					
				$arrMsg['status'] 	   	= true; // should be false but for testing purpose
				$arrMsg['status_code'] 	= 'applied'; 
				$arrMsg['msg'] 	       	= 'Successful MamaCubaTry testers will be notified via email.';
				$arrMsg['data']         = '';

				echo json_encode($arrMsg);
				exit;
			}
			else
			{
				$approve_tester = 0;
				if(in_array($tester_id, array(10,11))){ #clear blue campaign---> auto approve --> coz customer just to submit review
					$approve_tester = 1;
					$insertTester = "INSERT INTO ps_tester_campaign_detail (tester_product_id, tester_id, customer_id, active, approved, add_date, approve_date) 
								VALUES ($tester_product_id,$tester_id,$customerid,1, $approve_tester,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
				}
				else
				{
					$insertTester = "INSERT INTO ps_tester_campaign_detail (tester_product_id, tester_id, customer_id, active, approved, add_date) 
								VALUES ($tester_product_id,$tester_id,$customerid,1, $approve_tester,CURRENT_TIMESTAMP)";
				}
				
				
				$result       = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($insertTester);
				
				if($result)
				{
					if(strtolower($same_delivery_addr) == 'yes')
					{
						$objCart->id_address_delivery = $delivery_id;
						$objCart->id_address_invoice  = $delivery_id;
					}
					else
					{
						$objCart->id_address_delivery = $delivery_id;
						$objCart->id_address_invoice  = $billing_id;
					}
					
					$objCart->save();
				
					$arrMsg['status'] 	   	= true;
					$arrMsg['status_code'] 	= 'apply_success'; 
					$arrMsg['msg'] 	       	= 'We have received your application and will keep you posted for any updates via email.';
					$arrMsg['data']         = '';

					echo json_encode($arrMsg);
					exit;
				}
				
			}
		}
		else
		{
			$arrMsg['status'] 	   	= false;
			$arrMsg['status_code'] 	= 'campaign_id_invalid'; 
			$arrMsg['msg'] 	       	= 'Campaign is not available';
			$arrMsg['data']         = '';

			echo json_encode($arrMsg);
			exit;
			
		}
	}
}
else
{
	$arrMsg['status'] 	   	= false;
	$arrMsg['status_code'] 	= 'customer_id_empty'; 
	$arrMsg['msg'] 	       	= 'Please login before proceed';
	$arrMsg['data']         = '';

	echo json_encode($arrMsg);
	exit;
}

echo json_encode($arrMsg)
?>