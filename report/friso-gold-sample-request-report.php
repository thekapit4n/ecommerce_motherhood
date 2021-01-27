<?php

session_start();

$arr_allowUser = array(
	'tech',
	'megan',
	'hooishan',
	'frisogoldsamplerequest',
	'haiqal',
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password']=='frisogoldsamplerequest123'){
	$_SESSION['frisogoldsamplerequestlogin']=1;
}

if ($_SESSION['frisogoldsamplerequestlogin']==1){

}
else{
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
	<!-- custom style and js -->
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/select2/dist/css/select2.min.css">
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/select2/dist/js/select2.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/Inputmask-5.x/dist/jquery.inputmask.js" type="text/javascript"></script>
<title>Friso Gold Sample Request Report | Motherhood.com.my Malaysia</title>
<style>
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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

.row-motherhood{
	margin-bottom:10px
}


</style>
</head>

<?php
   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("-",basename($baseprog[0]));
   $secretOfTheDay = "K@p1T4n S4Y T0d4Y 1$" . date('Y-m-d');
   $encrypt  		= md5($secretOfTheDay);
	$searchStart ="";
	$searchEnd 	 ="";
	$wheresql  	 = "";
	$limitsql    = "";
	
	if(isset($_POST['searchDateStart']) && $_POST['searchDateStart'] != '')
	{
		$arr_sortdate = array();
		$arr_sortdate = explode('/', $_POST['searchDateStart']);
		
		if(is_array($arr_sortdate) && sizeof($arr_sortdate) == 3)
		{
			$mysqlformat = $arr_sortdate[2] . "-" . $arr_sortdate[1] . "-" . $arr_sortdate[0];
			$searchStart = date('Y-m-d', strtotime($mysqlformat));
		}
	}
	
	if(isset($_POST['searchDateEnd']) && $_POST['searchDateEnd'] != '')
	{
		$arr_sortdate = array();
		$arr_sortdate = explode('/', $_POST['searchDateEnd']);
		
		if(is_array($arr_sortdate) && sizeof($arr_sortdate) == 3)
		{
			$mysqlformat = $arr_sortdate[2] . "-" . $arr_sortdate[1] . "-" . $arr_sortdate[0];
			$searchEnd   = date('Y-m-d', strtotime($mysqlformat));
		}
	}
	
	
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_event_id=115";
	if($searchStart != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
	}
	
	if($searchEnd != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
	}
	
    $sql = "SELECT
			a.newFirstName as FullName, a.newEmail as Email, a.subscriber_question1 as Mobile, a.subscriber_question4 as ChildDOB,
			a.subscriber_question3 as CurrentMilkBrand, a.subscriber_question5 as address1, a.subscriber_question7 as address2, a.subscriber_question8 as Postcode, 
			a.subscriber_question9 as City, a.subscriber_question10 as States,a.subscriber_question12 as tnc, a.subscriber_created_at as DateSubmit
			FROM ps_events_subscriber a " . $wheresql . " GROUP BY newEmail	ORDER BY subscriber_created_at ASC";    
    $result = $conn->query($sql);
	
	if(is_object($result)){
		$tableReportView =  mysql_result_all_html($result);
		$result->close();
		mysqli_close($conn);
	}
	
    function mysql_result_all_html($result, $tableFeatures="") {
		if ($_GET['event_type'])
			$headerStr=" for ".$_GET['event_type'];
		
		$noFields = mysqli_num_fields($result);
		$table 	= "";
		$table .= "<table class='table-bordered table-sm'>";
		$table .= "<tr style='background-color:#ffe1e7;color:#265e70;'>";
		$table .= "<th>No.</th>";
		# for header
		for ($i = 0; $i < $noFields; $i++) {
			$field 	= mysqli_field_name($result, $i);
			$table .= "<th>" . $field . "</th>";
			
		}
		$table .= "</tr>";
		
		$ccount=0;
		while ($r = mysqli_fetch_row($result)) {
			$ccount++;
			$table .= "<tr><td>" . $ccount . "</td>";
			foreach ($r as $kolonne) {
				$table .= "<td>" . $kolonne . "</td>";
			}
			$table .= "</tr>";
		}
		$table .= "</table>";
		
		return $table;
	}
    
    function mysqli_field_name($result, $field_offset) {
		$properties = mysqli_fetch_field_direct($result, $field_offset);
		return is_object($properties) ? $properties->name : null;
	}
?>
	<ul>
		<li><a href="aptago-report.php" <?php if ($checkName[0].$checkName[1]=='frisogold' ) echo "class='active'"; ?> >Friso Gold Sample Request MMY</a></li>
	</ul>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood" style="margin-top:40px;">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Friso Gold Sample Request Report | Motherhood.com.my Malaysia</h3>
					</div>
				</div>
			</div>
			<form id="form-request" method='post' action="friso-gold-sample-request-report.php">
				<div class="row row-motherhood">
					<div class="col-md-5">
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">From</span>
							</div>
							<?php 
								if(isset($_POST['searchDateStart']) && $_POST['searchDateStart'] != '')
								{
									$arrDay = explode('/', $_POST['searchDateStart']);
									if(is_array($arrDay) && sizeof($arrDay) == 3)
									{
										$year  = $arrDay[2];
										$month = $arrDay[1];
										$day   = $arrDay[0];
										
										$fromdate = $day . "/" . $month . "/" . $year;
									}
								}
								
								if(isset($_POST['searchDateEnd']) && $_POST['searchDateEnd']!= '')
								{
									$arrDay = explode('/', $_POST['searchDateEnd']);
									if(is_array($arrDay) && sizeof($arrDay) == 3)
									{
										$year  = $arrDay[2];
										$month = $arrDay[1];
										$day   = $arrDay[0];
										
										$todate = $day . "/" . $month . "/" . $year;
									}
								}
							?>
							<input type="text" class="form-control eventdatepicker" name="searchDateStart" autocomplete="off" placeholder="start date" value='<?php echo (isset($fromdate) && $fromdate != '') ? $fromdate : '' ?>'>
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">To</span>
							</div>
							<input type="text" class="form-control eventdatepicker-end" name="searchDateEnd" autocomplete="off" placeholder="end date" value='<?php echo (isset($todate) && $todate != '') ? $todate : '' ?>' disabled>
							<input type="hidden" class="form-control" name="themessage" value='<?php echo (isset($encrypt) && $encrypt != '') ? $encrypt : '' ?>'>
						</div>
					</div>
					<div class="col-md-2 text-left">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" id="check-export" value="yes" name='export'>Export
								<input type="hidden" class="form-control" name="themessage" value='<?php echo (isset($encrypt) && $encrypt != '') ? $encrypt : '' ?>'>
							</label>
						</div>
					</div>
					<div class="col-md-3 text-left">
						<button type="button" id="btn-submit" class="btn btn-success btn-sm"> Submit </button>
					</div>
				</div>
			</form>
			<div class="row row-motherhood">
				<div class="col-md-12" style="width:100%">
					<div class="table-responsive">
						<?php echo (isset($tableReportView) && $tableReportView != '') ? $tableReportView : ''; ?>
					</div>
				</div>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	
	var initEnddatepicker = function(){
		var startDate = $('body').find('.eventdatepicker').val();
		var endDate = $('body').find('.eventdatepicker-end').val();
		var date = startDate;
		var d	 = new Date(date.split("/").reverse().join("-"));
		var dd	 = d.getDate();
		var mm 	 = d.getMonth()+1;
		var yy	 = d.getFullYear();
		convertStrtDate = yy + "-" + mm + "-" + dd;
		$('body').find('.btnsearchdate').prop('disabled', true);
		$('body').find('.eventdatepicker-end').datepicker('destroy').datepicker({
			autoclose: true,
			todayHighlight: true,
			format: 'dd/mm/yyyy',
			startDate: new Date(convertStrtDate),
		});
	}
	
	$(function(){
		$('body').find('.eventdatepicker').datepicker({
			autoclose: true,
			todayHighlight: true,
			format: 'dd/mm/yyyy',
		});
		
		$('body').on('change', '.eventdatepicker', function(){
			$('body').find('.eventdatepicker-end').val('');
			$('body').find('.eventdatepicker-end').prop('disabled', false)
			initEnddatepicker();
		});
		
		$('body').on('change', '.eventdatepicker-end', function(){
			var endDate = $(this).val();
			if(endDate != '')
			{
				$('body').find('.btnsearchdate').prop('disabled', false);
			}
			else
			{
				$('body').find('.btnsearchdate').prop('disabled', true);
			}
		});
		
		$('body').on('click', '#btn-submit', function(){
			var isExport = $('body').find('#check-export').is(':checked');
			console.log(isExport);
			if(isExport)
			{
				$('body').find('#form-request').attr('action', 'friso-gold-sample-request-report-excel.php');
			}
			else
			{
				$('body').find('#form-request').attr('action', 'friso-gold-sample-request-report2.php');
			}
			
			$('body').find('#form-request').submit();
		});
		
		
	});
	</script>