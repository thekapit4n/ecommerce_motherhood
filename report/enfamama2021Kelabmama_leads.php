<?php

session_start();
$arr_allowUser = array(
	'bintizainal.nabela@rb.com',
	'nicki.liew@rb.com',
	'dorothea.ooi@rb.com',
	'enlinea',
	'karina.kamaruzaman@rb.com',
	'WanJin.Lim@rb.com',
	'techteam',
	'megan'
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password'] == 'mead123'){
	$_SESSION['meadLoginEnfamama'] = 1;
}

if ($_SESSION['meadLoginEnfamama']==1){
}else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Lead Generation Report | Kelabmama Malaysia | Enfamama 2021</title>
<style>
	body 
{
	font-family: 'Oxygen', sans-serif;
	background-image: url("https://login.nuren.co/assets/v2/images/bg-custom1-motherhood.jpg");
	background-repeat: no-repeat;
    background-attachment: fixed;
	background-position: center;
	background-size: cover;
    min-width: 100%;
    width: auto;
}

a:hover 
{
	text-decoration: none;
}

hr.transparent 
{
	border-top-color: rgba(0 ,0, 0, 0.4);
	border-bottom: rgba(255, 255, 255, 0.08) solid 1px;
}

div.form-container 
{
	background: rgba(255, 255, 255);
	color: #000;
	width: 30%;
	min-height: 200px;
	height: auto;
	padding: 50px 30px 20px 30px;
	margin: 0 auto;
	border-radius: 20px;
	margin-top:-80px;

}

.btn-form 
{
	font-size: 1.1em;
	padding: 10px;
	border-radius: 20px;
	color:white;
	background:#39b44a;
	margin:20px 0px 20px 0px;
	width: 100%;
	border: none;
}

.simplefield 
{
	font-size: 1.05em;
    /* background-color: #fff; */
    background-image: none;
    /* border: 1px solid #dcdcdc; */
    border-radius: 0px;
    outline: none;
    height: 45px;
    -webkit-box-shadow: none!important;
    -moz-box-shadow: none!important;
    box-shadow: none!important;
    background: transparent;
    border: none;
	border-bottom: 1px solid grey;
	width:100%;

}

.form
{
	margin:40px 0px 20px 0px;
}

.text
{
	font-weight:bold;
	font-size:18px;
	margin:10px 0px 10px 0px;
}

.text-header
{
	font-size:25px;
	margin:10px 0px 10px 0px;
	text-align:center;
	line-height:2;

}

</style>
</head>

<form action='enfamama2021Kelabmama_leads.php' method='post'>
<div style="row">
	<div style="text-align:center;">
		<img style="vertical-align: middle;width:10%;" src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
	</div>
	<div class="form-container">
		<div class="text-header">
		Lead Generation Report | Kelabmama Malaysia | Enfamama 2021
		</div>
		<div class="form">
			<div class="text">
				Login:
			</div>
			<input class="simplefield" name='login'>
		</div>
		<div class="form">
		<div class="text">
			Password:
			</div>
			<input class="simplefield" type='password' name='password'>
		</div>
		<input class="btn-form btn-full" type='submit'>
		<div style="text-align:right;">
		<img src="https://login.nuren.co/assets/v2/images/logo-nuren-vertical.png" style="width:20%;align:right;margin-top:30px;" />
</div>
	</div>
</div>
</form>
<?php	
	
	die();
}

$user = "c0kElaB94";
$pass = "B3}W[f}x#7OP";

$host = "10.148.0.7";
$dbname = "com.kelabmama";

$conn2 = mysqli_connect($host, $user, $pass,$dbname);

include '../admin2635/dashboard/events/events_db_config.php';

if ($_POST['export']){
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=report.xls");
}
header("Pragma: no-cache");
header("Expires: 0");
$productList=array();
    error_reporting(E_ALL &~E_NOTICE);
    ini_set('display_errors', '1');
	
?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Lead Generation Report | Kelabmama Malaysia | Enfamama 2020</title>
<style>
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  }

#menu > li:last-child
{
	float:right;
}
ul:not(.leftmenu){
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li:not(.leftmenu) {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child:not(.leftmenu) {
    border-right: none;
}

li:not(.leftmenu) a:not(.leftmenu) {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li:not(.leftmenu) a:hover:not(.active):not(.leftmenu) {
    background-color: #111;
}

.active:not(.leftmenu) {
    background-color: #4CAF50;
}

</style>
</head>

<?php

   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("_",basename($baseprog[0]));
?>
		<ul>
         
			 <li><a href="enfamama2021Kelabmama_leads.php" <?php if ($checkName[0]=='enfamama2021Kelabmama' ) echo "class='active'"; ?>>Kelabmama</a></li>
			  <li><a href="enfamama2021MMY_leads.php" <?php if ($checkName[0]=='enfamama2021MMY' ) echo "class='active'"; ?>>Motherhood</a></li>
			  
        </ul>
		
<h1>Lead Generation Report | Kelabmama Malaysia | Enfamama 2021</h1>
<form method='post'>
Start Date: <input type='date' name='searchDateStart' value="<?php echo $_POST['searchDateStart']; ?>">
<br>End Date: <input type='date' name='searchDateEnd' value="<?php echo $_POST['searchDateEnd']; ?>">
<br>Export: <input type='checkbox' name='export' >
<br>
<input type='submit' style="padding:10px;">
</form>

<?php
// No | Email | First Name | Last Name | Created Date | Phone | DOB | Kids 1-6
$searchStart="";
$searchEnd="";
$limit = "";

// $limit = " LIMIT 2730 ";
$limit = " LIMIT 6630 ";
	if ($_POST['searchDateStart'])
		$searchStart=" AND Subscribed_Date >='".$_POST['searchDateStart']."' ";

	if ($_POST['searchDateEnd'])
		$searchEnd=" AND Subscribed_Date <='".$_POST['searchDateEnd']." 23:59:59' ";
	
	
	$arrEmail = array(
		"kenixtai1128@gmail.com", #duplicate email ---> 1/4/2021
		"fvhminui88@icloud.com",
		"aqilldaud11@gmail.com",
		"bengprintedit@gmail.com",
		"muhammadakil2011@gmail.com",
		"martnuar46@gmail.com",
		"khairulazharkhairulazhar33@gmail.com",
		"sueibrahim2311@gmail.com",
		"akiddegil@gmail.com",
		"sayuti.halim1980xxx@gmail.com",
		"tuanrosdi@yahoo.com",
		"izzatianuar5126@gmail.com",
		"nikabdullah30@gmail.com",
		"erlianazulbahri@gmail.com",
		"zaiema93@gmail.com",
		"kbtbdy@gmail.com", # end duplicate email ---> 1/4/2021
		"izwatiothman@gmail.com", # phone/address duplicate ---> 3/5/2021
		"mellysfreedy95@gmail.com",
		"isfahaniismail648@gmail.com",
		"haza466@gmail.com",
		"sfnashidi@gmail.com",
		"piya927@yahoo.com",
		"amirchiku881@gmail.com",
		"nurulzulaikha597@gmail.com",
		"norsyakirinmohammadzais301193@gmail.com",
		"mnshahirah@gmail.com", # end of phone/address duplicate 3/5/2021
		"nawunglilai@gmail.com",# phone/address duplicate ---> 3/6/2021
		"haslina5132@gmail.com",
		"nurulakalilijannah99@gmail.com",
		"misszieyya_82@yahoo.com",
		"aziliza81@gmail.com",
		"nurdhiyadelisha128@gmail.com",
		"azreika73@gmail.com",
		"idacute_06@yahoo.com",
		"dalia.nisa.mka@gmail.com",
		"sitirozaininornabilah41197@gmail.com",
		"miraedorashaari91@gmail.com",
		"alnurqayyum21@gmail.com",
		"norizaali26@gmail.com",
		"akimatirah@gmail.com",# end of phone/address duplicate 3/6/2021
		"helmirahman7@yahoo.com.my",#phone/address duplicate ---> 6/8/2021
		"jihanuar01@gmail.com",
		"kamicueek@gmail.com",
		"norainnurin@yahoo.com",
		"rizalharrazshah@gmail.com",
		"muhdnasrannasran@gmail.com",
		"nurismishafikah@yahoo.com",
		"leefen5132@gmail.com",# end of phone/address duplicate 6/8/2021
	);
	
	$arrEmail2 = array();
	foreach($arrEmail as $val)
	{
		$arrEmail2[] =  trim("'" . $val . "'");
	}

	$string_email = '';
	$string_email = implode(",", $arrEmail2);
	
	
	$datetoday = date("Y-m-d");
    $sql =  
        "
SELECT * FROM (
SELECT newEmail as email, newFirstName as 'First Name', newLastName as 'Last Name', subscriber_created_at as 'Subscribed_Date', subscriber_question1 as Phone,subscriber_question12 as 'Parent DOB',
subscriber_question8 as Address, subscriber_question9 as PostCode, subscriber_question10 as City, subscriber_question11 as State
FROM events_subscriber a
WHERE 1=1 AND subscriber_event_id=1 AND newEmail NOT IN (" . $string_email . ") AND newEmail != 'chris.tan@nurengroup.com' AND newEmail NOT LIKE '%nurengroup%' AND newEmail NOT LIKE '%test%'
AND (subscriber_created_at >= '2021-01-01 00:00:00' AND subscriber_created_at <= '2021-12-31 23:59:59')

GROUP BY newEmail
ORDER BY subscriber_created_at ASC " . $limit . ") B WHERE 1=1 $searchStart $searchEnd";
// ) B WHERE 1=1 AND Subscribed_Date <= '".$datetoday." 00:00:00' $searchStart $searchEnd
//AND subscriber_created_at <= '2020-07-13 13:02:00' OR subscriber_created_at > '2020-07-31 23:59:59')

	// echo $sql;

	$result = $conn2->query($sql);
	echo mysql_result_all_html($result,"border=1");
	
    $result->close();
    mysqli_close($conn2);
	
    function mysql_result_all_html($result, $tableFeatures="") {
		if ($_GET['event_type'])
			$headerStr=" for ".$_GET['event_type'];
		
	  $table .= "<table $tableFeatures>\n\n";
	  $noFields = mysqli_num_fields($result);
	  $table .= "<tr><th>No.</th>\n";
	  for ($i = 0; $i < $noFields; $i++) {
		$field = mysqli_field_name($result, $i);
		$table .= "\t<th>$field</th>\n";
	  }
	  $ccount=0;
	  while ($r = mysqli_fetch_row($result)) {
		//Change showing date format from YYYY-MM-DD to DD-MM-YYYY
		//$here = $r[5];
		//$date = explode("-", $here);
		//$datef = $date[2].'-'.$date[1].'-'.$date[0];
		//$r[5] = $datef;

		$ccount++;
		$table .= "<tr><td>$ccount</td>\n";
		foreach ($r as $kolonne) {
		  $table .= "\t<td>$kolonne</td>\n";
		}
		$table .= "</tr>\n";
	  }
	  $table .= "</table>\n\n";
	  $table .= "<!--End debug from SQL query-->\n\n";
	  return $table;
	}
    
    function mysqli_field_name($result, $field_offset) {
		$properties = mysqli_fetch_field_direct($result, $field_offset);
		return is_object($properties) ? $properties->name : null;
	}



?>