<?php

session_start();

if ((
	$_POST['login']=='anmum'

	)&& $_POST['password']=='anmum123'){
	$_SESSION['anmummaternaLogin']=1;

}

if ($_SESSION['anmummaternaLogin']==1){
}else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Anmum Essential Gold Report | Motherhood.com.my Malaysia</title>
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

<form action='anmum-essential-gold-report.php' method='post'>
<div style="row">
	<div style="text-align:center;">
        <img style="vertical-align: middle;width:10%;" 
        src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
	</div>
	<div class="form-container">
		<div class="text-header">
		Anmum Essential Gold Report | Motherhood.com.my Malaysia
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
<title>Anmum Essential Gold Report | Motherhood.com.my Malaysia</title>
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
  background-color: #1eb6c6;
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
    background-color: #1eb6c6;
}

</style>
</head>

<?php

   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("-",basename($baseprog[0]));
?>
		<ul>
			<li><a href="anmum-materna-report.php" <?php if ($checkName[0].$checkName[1]=='anmummaterna' ) echo "class='active'"; ?> >Anmum Materna</a></li>
			<li><a href="anmum-essential-gold-report.php" <?php if ($checkName[0].$checkName[1]=='anmumessential' ) echo "class='active'"; ?> >Anmum Essential</a></li>
						<!--eventx_mead.php-->
        </ul>
		
<h1>Anmum Essential Gold Report | Motherhood.com.my Malaysia</h1>
<form method='post'>
Start Date: <input type='date' name='searchDateStart' value="<?php echo $_POST['searchDateStart']; ?>">
<br>End Date: <input type='date' name='searchDateEnd' value="<?php echo $_POST['searchDateEnd']; ?>">
<br>Export: <input type='checkbox' name='export' >
<br>
<input type='submit' style="padding:10px;">
</form>

<?php
$searchStart="";
$searchEnd="";
if ($_POST['searchDateStart'])
	$searchStart=" AND subscriber_created_at >='".$_POST['searchDateStart']." 00:00:00' ";

if ($_POST['searchDateEnd']){
	//if ($_POST['searchDateEnd'] >= '2020-04-15'){
	//	$searchEnd=" AND subscriber_created_at <='2020-04-15 05:06:57' "; 
	//}else{
		$searchEnd=" AND subscriber_created_at <='".$_POST['searchDateEnd']." 23:59:59' ";
	//}
}

    $sql =  
        " SELECT
    a.newEmail as Email, a.newFirstName as FirstName, a.newLastName as LastName, a.subscriber_question1 as Mobile, 
	a.subscriber_question2 as Address, a.subscriber_question3 as Postcode, a.subscriber_question5 as City, a.subscriber_question7 as State, 
	a.subscriber_question8 as Brand, a.subscriber_question11 as ChildGender, a.subscriber_question4 as CHildDOB, a.subscriber_question9 as Language, a.subscriber_question10 as TnC,
    a.subscriber_created_at as DateSubmit

    FROM ps_events_subscriber a
    WHERE 1=1 AND a.subscriber_event_id=88
    $searchStart $searchEnd
    GROUP BY a.newEmail 
    ORDER BY a.subscriber_created_at ASC
	   ";    
	
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
			//if($nufield==10){ $kolonne = '<img src="'.$kolonne.'" width="200px" />'; }
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