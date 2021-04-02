<?php

session_start();

$arr_allowUser = array(
	'tech',
	'megan',
	'hooishan',
	'anmum',
	'haiqal',
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password']=='anmum123'){
	$_SESSION['anmummaternaLogin']=1;
}

if ($_SESSION['anmummaternaLogin']==1){

}
else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Anmum Materna Report 2021 | Motherhood.com.my Malaysia</title>
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

<form action='anmum-materna-report2021.php' method='post'>
		<div style="row">
			<div style="text-align:center;">
				<img style="vertical-align: middle;width:10%;" 
				src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
			</div>
			<div class="form-container">
				<div class="text-header">
				Anmum Materna Report 2021 | Motherhood.com.my Malaysia
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
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/twbs-pagination/jquery.twbsPagination.min.js" type="text/javascript"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/simplePagination/jquery.simplePagination.js" type="text/javascript"></script>
<title>Anmum materna report 2021 | Motherhood.com.my Malaysia</title>
<style>
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
	$currPath 		= $_SERVER['REQUEST_URI'];
	$baseprog		= explode("?",basename($currPath));
	$checkName		= explode("-",basename($baseprog[0]));
	$secretOfTheDay = "K@p1T4n S4Y T0d4Y 1$" . date('Y-m-d');
	$encrypt  		= md5($secretOfTheDay);
	$searchStart 	="";
	$searchEnd 	 	="";
	$wheresql  	 	= "";
	$limitsql    	= "";
	$currentLimit 	= " LIMIT 3000";
	
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	
	$no_of_records_per_page = 1500;
	
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
	
	$arr_skip_email = array(
		"zhafiraana@gmail.com",
		"khairulazharkhairulazhar33@gmail.com",
		"tresnawatye@yahoo.com",
		"hanifchemohd@gmail.com",
		"elykanor35@gmail.com",
		"bobfmlynorhayatibtahmadjamal",
		"safikah8889@gmail.com",
		"bibiananur70@gmail.com",
		"sxdsa6@gmail.com.my",
		"kogorogawa@gmail.com",
		"anazhafia@gmail.com",
		"kwangjunwei@gmail.com",
		"nur.hana84@yahoo.com",
		"zaiemanarain@gmail.com",
		"rosma19wati88@gmail.com",
		"ashraffangah614@gmail.com",
		"ulfi rr97@gmail.com",
		"evitaliastri84@gmail.com",
		"shazrilamiza@ymial",
		"jeerdanyismail@gmail.com",
		"nrashikin6@gmail.com",
		"zaiema93@icloud.com",
		"zaiema98@gmail.com",
		"nizamretnoretno@gmail.com",
		"nizamfamilyradzali@gmail.com",
		"@xiaoqing4876@gamail.com",
		"fatinnadiela95@gmail.com",
		"izzatirashid709@gmail.com",
		"safarizakhmat@gmail.com",
		"kumayang14@gmail.com",
		"jairadam859112 @gmaila.com",
		"samsulkumaryusof.gmail.com",
		"861103526254",
		"haritsshakhmir9590@gmail.com",
		"norshamshena84@gmail.com.my",
		"ctfarisha_ieka@yahoo.com",
		"www.faizalsfoundationsdnbhd@gmail.com",
		"nur_ainnajwa81@yahoo.com",
		"iema.naim.90@gmail.com",
		"katrina.shandhini @gmail.com",
		"nuraidaamira@gmail.com",
		"zaiumi1985@gmail.com",
		"amiera_mierashi1010@yahooo.com",
		"john_choongming0511@hotmail.com",
		"konny_828@hotmail.com",
		"ameeranusaybah@yahoo.com",
		"aidilkerry2526@gmail.com",
		"jimalsama133@gmail.com",
		"fazlinayusof482@gmail.com",
		"nirimaima581@gmail.com",
		"ariniezakaria@gmail.com",
		"suzilawatyeffanici@gmail.com",
	);
	
	if(isset($arr_skip_email) && is_array($arr_skip_email) && sizeof($arr_skip_email) > 0)
	{
		foreach($arr_skip_email as $email)
		{
			$skipemail2[] =  trim("'" . htmlentities($email) . "'");
		}
		
		$string_email = implode(",", $skipemail2);
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " a.newEmail NOT IN (" . $string_email . ")";
	}
	
	
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_event_id=89";
					
	if($searchStart != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
	}
	
	if($searchEnd != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
	}
	
	if($searchStart == '' && $searchEnd == '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_created_at >= '2021-01-01 00:00:00'";
	}
	
	
	
	$urlPagination = "";
	
	if(isset($pageno) && $pageno > 0)
	{
		$urlPagination .= ($urlPagination == "" ? '?' : '&') . "pageno=";
	}
	
	
	$sqltotalCount	  =  "SELECT COUNT(*) AS total FROM (SELECT DISTINCT(a.newEmail) FROM ps_events_subscriber a " . $wheresql . "  ORDER BY subscriber_created_at ASC " . $currentLimit . ") AS a";
	$resultCount 	  =  $conn->query($sqltotalCount);
	$arr_resultCount  =  mysqli_fetch_array($resultCount);
	$total_rows 	  =  isset($arr_resultCount['total']) ? $arr_resultCount['total'] : 0;
	$offset 		  = ($pageno-1) * $no_of_records_per_page;
	$total_pages 	  = ceil($total_rows / $no_of_records_per_page);
	$limitsql 		  = "LIMIT " . $offset . "," . $no_of_records_per_page;
	
	$starting = (isset($pageno) && $pageno > 0) ? $pageno  : 0;
	if($starting > 0)
	{
		$showingLimit = $starting * $no_of_records_per_page;
		if($showingLimit >= $total_rows)
		{
			$showingLimit = $total_rows;
		}
	}
	
    $sql = "SELECT
			a.newEmail as Email, a.newFirstName as FirstName, a.newLastName as LastName, a.subscriber_question1 as Mobile, 
			a.subscriber_question12 as PregnancyStatus, a.subscriber_question11 as Flavour, a.subscriber_question2 as Address, a.subscriber_question3 as Postcode, 
			a.subscriber_question5 as City, a.subscriber_question7 as State, a.subscriber_question8 as Brand, a.subscriber_question9 as Language, 
			a.subscriber_question10 as TnC, a.subscriber_created_at as DateSubmit
			FROM ps_events_subscriber a" . $wheresql . " GROUP BY newEmail	ORDER BY subscriber_created_at ASC " . $limitsql;

    $result = $conn->query($sql);
	if(is_object($result)){
		$tableReportView =  mysql_result_all_html($result, $offset);
		$result->close();
		mysqli_close($conn);
	}
	
    function mysql_result_all_html($result, $offset = 0) {
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
		
		if(isset($offset))
		{
			$ccount = $offset;
		}
		else{
			$ccount = 0;
		}
		
		while ($r = mysqli_fetch_row($result)) {
			$ccount++;
			$table .= "<tr><td>" . $ccount . "</td>";
			foreach ($r as $indx => $kolonne) {
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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="anmum-materna-report2021.php">Anmum materna report 2021 MMY</a>
			</li>
		</ul>
	</nav>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood" style="margin-top:40px;">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Anmum materna report 2021 | Motherhood.com.my Malaysia</h3>
					</div>
				</div>
			</div>
			<form id="form-request" method='post' action="anmum-materna-report2021.php">
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
					<nav style="margin-bottom:10px;">
						<ul class="pagination pagination-sm" id="pagination-ulkapitan-top">
						</ul>
					</nav>
					<p>Showing <?php echo isset($offset) ? ($offset + 1) : 0  ?> to <?php echo $showingLimit ?> of <?php echo $total_rows  ?> entries</p>
					<div class="table-responsive">
						<?php echo (isset($tableReportView) && $tableReportView != '') ? $tableReportView : ''; ?>
					</div>
					<p>Showing <?php echo isset($offset) ? ($offset + 1) : 0  ?> to <?php echo $showingLimit ?> of <?php echo $total_rows  ?> entries</p>
					<nav style="margin-top:10px;">
						<ul class="pagination pagination-sm" id="pagination-ulkapitan-bottom">
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	
	var initEnddatepicker = function(){
		var startDate = $('body').find('.eventdatepicker').val();
		var endDate   = $('body').find('.eventdatepicker-end').val();
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
			startDate: new Date('2021-01-01')
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
				$('body').find('#form-request').attr('action', 'anmum-materna-report2021-excel.php');
			}
			else
			{
				$('body').find('#form-request').attr('action', 'anmum-materna-report2021.php');
			}
			
			$('body').find('#form-request').submit();
		});
		
		var totpages = '<?php echo (isset($total_pages) && $total_pages > 0) ? $total_pages  : 1?>'; //We store the number of pages in a variable to use it below
		totpages = parseInt(totpages);
		var curentpage = '<?php echo  (isset($pageno) && $pageno > 0) ? $pageno : 1?>';
		curentpage = parseInt(curentpage);
		$('#pagination-ulkapitan-top, #pagination-ulkapitan-bottom').twbsPagination({
			totalPages: totpages,
			startPage : curentpage,
			visiblePages: 10,
			onPageClick: function (event, page) {
				if(curentpage != page)
				{
					console.log(page);
					location.href = '<?php echo isset($urlPagination) ? $urlPagination : '' ?>' + page;
				}
				else
				{
					console.log('curentpage' + curentpage);
					console.log('page' + page);
				}
			}
		});
		
		
	});
	</script>