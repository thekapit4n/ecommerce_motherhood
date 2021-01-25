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
<title>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2020</title>
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

<form action='enfamama2021MMY_leads.php' method='post'>
<div style="row">
	<div style="text-align:center;">
		<img style="vertical-align: middle;width:10%;" src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
	</div>
	<div class="form-container">
		<div class="text-header">
		Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021
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
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/css/all.min.css">
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/js/bootstrap.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<title>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021</title>
<style>
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
		
<h1>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021</h1>
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
if ($_POST['searchDateStart'])
	$searchStart=" AND Subscribed_Date >='".$_POST['searchDateStart']."' ";

if ($_POST['searchDateEnd'])
	$searchEnd=" AND Subscribed_Date <='".$_POST['searchDateEnd']." 23:59:59' ";
	$datetoday = date("Y-m-d");
    $sql =  
        "
SELECT * FROM (
SELECT newEmail as Email, newFirstName as 'First Name', newLastName as 'Last Name', subscriber_created_at as 'Subscribed_Date',subscriber_question14 as 'Parent DOB',
subscriber_question1 as 'Phone', subscriber_question4 as 'Status',
subscriber_question8 as 'Address' , subscriber_question9 as 'Postcode',subscriber_question10 as 'City', subscriber_question11 as 'State'
FROM ps_events_subscriber a
WHERE 1=1 AND subscriber_event_id=100 AND subscriber_question4='pregnant' AND newEmail != 'chris.tan@nurengroup.com' AND newEmail !='alison.tham@nurengroup.com'
AND newEmail != 'weezhen.cheah@nurengroup.com' AND newEmail != 'hooishan.nurengroup@gmail.com' AND newEmail NOT LIKE '%nurengroup%' AND newEmail NOT LIKE '%test%'
AND (subscriber_created_at >= '2021-01-01 00:00:00' AND subscriber_created_at <= '2021-12-31 23:59:59')

GROUP BY newEmail
ORDER BY subscriber_created_at ASC
LIMIT 1500

) B WHERE 1=1 $searchStart $searchEnd 
		 "; 
// B WHERE 1=1 AND Subscribed_Date <= '".$datetoday." 23:59:59' $searchStart $searchEnd 
//AND subscriber_created_at <= '2020-07-16 23:03:21' OR subscriber_created_at > '2020-07-31 23:59:59'
	$result = $conn->query($sql);
	echo mysql_result_all_html($result,"border=1");
	
    $result->close();
    mysqli_close($conn);
	
    function mysql_result_all_html($result, $tableFeatures="") {
		if ($_GET['event_type'])
			$headerStr=" for ".$_GET['event_type'];
		
	  $table .= "<table class='table-bordered table-sm'>\n\n";
	  $noFields = mysqli_num_fields($result);
	  $table .= "<thead class='thead-dark'><tr><th>No.</th>\n";
	  for ($i = 0; $i < $noFields; $i++) {
		$field = mysqli_field_name($result, $i);
		$table .= "\t<th>$field</th>\n";
	  }
	   $table .= "</tr></thead>";
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