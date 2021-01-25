<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');

if (!class_exists('enlineamixmod')) {
   // Put class TestClass here
    include(dirname(__FILE__).'/enlineamixmod.php');
}

$arrMsg = array('status' => false, 'msg' => 'no data post', 'succeeded' => null);
if(isset($_POST["checkemail"]) && isset($_POST["password"]))
{
	$email 	  = trim($_POST["checkemail"]);
	$password = $_POST["password"];
	if($email == "")
	{
		$arrMsg['status'] = false;
		$arrMsg['msg'] 	  = "Email is empty. Please insert email";
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
}

echo json_encode($arrMsg);

?>