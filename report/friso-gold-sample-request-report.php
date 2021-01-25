<?php

session_start();

if ((
	$_POST['login']=='frisogoldsamplerequest'

	)&& $_POST['password']=='frisogoldsamplerequest123'){
	$_SESSION['frisogoldsamplerequestlogin']=1;

}

if ($_SESSION['frisogoldsamplerequestlogin']==1){
}else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Friso Gold Sample Request Report | Motherhood.com.my Malaysia</title>
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

<form action='friso-gold-sample-request-report.php' method='post'>
<div style="row">
	<div style="text-align:center;">
        <img style="vertical-align: middle;width:10%;" 
        src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
	</div>
	<div class="form-container">
		<div class="text-header">
		Friso Gold Sample Request Report | Motherhood.com.my Malaysia
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
<title>Friso Gold Sample Request Report | Motherhood.com.my Malaysia</title>
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

table tr:nth-child(even){background-color:white;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffe1e7;
  color: #265e70;
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
    color: #265e70;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight:bold;
}

li:not(.leftmenu) a:hover:not(.active):not(.leftmenu) {
    background-color: #111;
}

.active:not(.leftmenu) {
    background-color: #ffcfda;
}

</style>
</head>

<?php

   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("-",basename($baseprog[0]));
?>
		<ul>
        <li><a href="aptago-report.php" <?php if ($checkName[0].$checkName[1]=='frisogold' ) echo "class='active'"; ?> >Friso Gold Sample Request MMY</a></li>
        </ul>
		
<h1 style="color:#265e70;">Friso Gold Sample Request Report | Motherhood.com.my Malaysia</h1>
<form method='post'>
Start Date: <input type='date' name='searchDateStart' value="<?php echo $_POST['searchDateStart']; ?>">
<br>End Date: <input type='date' name='searchDateEnd' value="<?php echo $_POST['searchDateEnd']; ?>">
<br>Export: <input type='checkbox' name='export' >
<br>
<input type='submit' style="padding:10px;background-color:#ff7fae;color:white;font-weight:bold;border:none;padding-top:10px;
padding-bottom:10px;margin-top:10px;margin-bottom:10px;">
</form>

<?php

$date = new DateTime();
$datetime = $date->format('Y-m-d H:i:s');
$time = date("H:i:s");
$date = date('Y-m-d');
$searchStart="";
$searchEnd="";
$sortby = "";

if ($_POST['searchDateStart']){
	$searchStart=" AND subscriber_created_at >='".$_POST['searchDateStart']." 00:00:00' ";
}

$defaultFilter = '';

if ($_POST['searchDateEnd'] ){
	if($_POST['searchDateEnd'] < $date){
		// $searchEnd=" AND subscriber_created_at <='".$_POST['searchDateEnd']." ".$time."' ";
		$searchEnd=" AND subscriber_created_at <='".$_POST['searchDateEnd']." 23:59:59' ";
	}else{
		$searchEnd=" AND subscriber_created_at <='".$datetime."' "; 
	}
}else{
	$defaultFilter = " AND a.subscriber_created_at <= '".$datetime."'";
}

if($_POST['sortby']){
	$sortby = " AND a.subscriber_question7 = '".$_POST['sortby']."' ";
}

	$arr_exclude_email = array(
		"'leexinnie@gmail.com'",
		"'keelip95@icloud.com'",
		"'zabididr@gmail.com'",
		"'maxaus166632@gmail.com'",
		"'firasfarhan@gmail.com'",
		"'zafiradila8@gmail.com'",
		"'nurulimantang@gmail.con'",
		"'cartoon-1117@hotmail.com'",
		"'aimanazri2010@gmail.com'",
		"'sinwei06@gmail.com'",
		"'weiweiong1217@gmail.com'",
		"'liowfah1203@gmail.com'",
		"'ccong333@gmail.com'",
		"'chindes0906@gmail.com'",
		"'fazleypenang81@gmail.com'",
		"'rizqiadam179@gmail.com'",
		"'madarin1502@gmail.com'",
		"'ilalias9288@gmail.com'",
		"'liyanaahmad81@gmail.com'",
		"'mohdibrahimyusuff89@gmail.com'",
		"'weng251@gmail.com'",
		"'susan88@gmail.com'",
		"'khusook79@gmail.com'",
		"'yenyen80@gmail. com'",
		"'tuanruzainituanteh@yahoo.com'",
		"'ivianalailis@gmail.com'",
		"'ismadianna@gmail.com'",
		"'pohpoh727@gmail.com'",
		"'sanchelaloke@gmail.com'",
		"'enghuong1987@gmail.com'",
		"'aswadsc@gmail.com'",
		"'dyzaima06&yahoo.com.my'",
		"'emmaawe1987@gmail.com'",
		"'duer_chek@yahoo.com'",
		"'babydanger96@yahoo.com'",
	);

    $sql =  
    " SELECT
    a.newFirstName as FullName, a.newEmail as Email, a.subscriber_question1 as Mobile, a.subscriber_question4 as ChildDOB,
    a.subscriber_question3 as CurrentMilkBrand, a.subscriber_question5 as address1, a.subscriber_question7 as address2, a.subscriber_question8 as Postcode, 
    a.subscriber_question9 as City, a.subscriber_question10 as States,a.subscriber_question12 as tnc, a.subscriber_created_at as DateSubmit

    FROM ps_events_subscriber a
    WHERE 1=1 AND a.subscriber_event_id=115 AND a.newEmail NOT IN(" . implode(',', $arr_exclude_email) . ") 
	$sortby
    $searchStart $searchEnd
	$defaultFilter
    GROUP BY newEmail
    ORDER BY a.subscriber_created_at ASC
	LIMIT 500
	   ";    
	    //    GROUP BY a.subscriber_question4 
	
    $result = $conn->query($sql);
    echo mysql_result_all_html($result,"border=1");
    $result->close();
    mysqli_close($conn);
	
    function mysql_result_all_html($result, $tableFeatures="") {
		if ($_GET['event_type'])
			$headerStr=" for ".$_GET['event_type'];
		
	  $table .= "<table $tableFeatures>\n\n";
	  $noFields = mysqli_num_fields($result);
	  $table .= "<tr><th style='position: static;position: -webkit-sticky;position: sticky;top: 0;'>No.</th>\n";
	  for ($i = 0; $i < $noFields; $i++) {
		$field = mysqli_field_name($result, $i);
		$table .= "\t<th style='position: static;position: -webkit-sticky;position: sticky;top: 0;'>$field</th>\n";
	  }
	  $ccount=0;
	  while ($r = mysqli_fetch_row($result)) {
		$ccount++;
		$table .= "<tr><td>$ccount</td>\n";
		$nufield=0;
		foreach ($r as $kolonne) {
			$nufield++;
			// if($nufield==3){ $kolonne = '6'.$kolonne; }
			//if($nufield==31 && $kolonne !==''){ $kolonne = '<img src="'.$kolonne.'" width="200px" />'; }
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