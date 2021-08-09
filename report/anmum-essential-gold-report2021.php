<!doctype html>
<html lang="en">
<?php
session_start();

if(isset($_GET['islogout']) && $_GET['islogout'] == true)
{
	unset($_SESSION["anmummaternaLogin"]);
	header('Location: http://www.motherhood.com.my/external/anmum-essential-gold-report2021.php');
}

$arr_allowUser = array(
	'tech',
	'megan',
	'hooishan',
	'anmum',
	'haiqal',
	'ivy',
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password'] == 'anmum123'){
	$_SESSION['anmummaternaLogin'] = true;
}

if ($_SESSION['anmummaternaLogin'] == true){

}
else
{
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/style.css">
    <title>Anmum Essential Gold Report 2021 | Motherhood.com.my Malaysia</title>
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
	<style>
		body{
			font-family: 'Poppins', sans-serif;
			background-image: url("https://login.nuren.co/assets/v2/images/bg-custom1-motherhood.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;s
			background-position: center;
			background-size: cover;
			min-width: 100%;
			width: auto;
		}
	</style>
</head>
</body>
	<div class="content" style="padding:5em 0;">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 order-md-2">
				  <img src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
				</div> -->
				<div class="col-md-6 contents">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center mb-1">
							<!--<img src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" class="img-fluid" alt="Motherhood Logo" style="width:50%;">-->
							<img src="MMY LOGO-01.svg" class="img-fluid" style="width:75%;" />
						</div>
						<!--
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							You successfully logout. Have a nice day!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						-->
						<div class="col-md-12">
							<div class="form-block" style="padding-top:20px;padding-bottom:20px;">
								<div class="mb-12">
									<h3>Login to <strong>leads report</strong></h3>
									<p class="mb-4">Anmum Essential Gold Report 2021 | Motherhood.com.my Malaysia</p>
								</div>
								<form action='anmum-essential-gold-report2021.php' method='post' method="post">
									<div class="form-group first">
										<label for="username">Login</label>
										<input type="text" class="form-control" id="username"  name='login'>
									</div>
									<div class="form-group last mb-4">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password">
									</div>
									<input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
								</form>
								<div class="col-md-12 text-right mt-3">
									<img src="https://login.nuren.co/assets/v2/images/logo-nuren-vertical.png" style="width:25%;" />
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/js/bootstrap.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/js/main.js"></script>
</body>
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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
	<title>Anmum Essential Gold Report 2021 | Motherhood.com.my Malaysia</title>
<style>
body{
	font-family: 'Poppins', sans-serif;
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
	
	$no_of_records_per_page = 1000;
	
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
		
	);
	
	if(isset($arr_skip_email) && is_array($arr_skip_email) && sizeof($arr_skip_email) > 0)
	{
		foreach($arr_skip_email as $email)
		{
			$skipemail2[] =  trim("'" . htmlentities($email) . "'");
		}
		
		$string_email = implode(",", $skipemail2);
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.newEmail NOT IN (" . $string_email . ")";
	}
	
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_event_id = 88";

	
	$groupBy = " GROUP BY evnt.newEmail ";
					
	if($searchStart != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
	}
	
	if($searchEnd != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
	}
	
	if($searchStart == '' && $searchEnd == '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '2021-07-28 00:00:00'";
	}
	
	
	
	$urlPagination = "";
	if(isset($pageno) && $pageno > 0)
	{
		$urlPagination .= ($urlPagination == "" ? '?' : '&') . "pageno=";
	}
	
	$sqltotalCount	  = "SELECT COUNT(*) AS total FROM (SELECT DISTINCT(evnt.newEmail) FROM ps_events_subscriber evnt" . $wheresql . "  ORDER BY subscriber_created_at ASC " . $currentLimit . ") AS a";
	
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
		evnt.newEmail as Email, evnt.newFirstName as FirstName, evnt.newLastName as LastName, evnt.subscriber_question1 as Mobile, 
		evnt.subscriber_question2 as Address, evnt.subscriber_question3 as Postcode, evnt.subscriber_question5 as City, evnt.subscriber_question7 as State, 
		evnt.subscriber_question8 as Brand, evnt.subscriber_question11 as ChildGender, evnt.subscriber_question4 as CHildDOB, evnt.subscriber_question9 as Language, evnt.subscriber_question10 as TnC,
		evnt.subscriber_created_at as DateSubmit
		FROM ps_events_subscriber evnt " . $wheresql . $groupBy . " ORDER BY evnt.subscriber_created_at ASC " . $limitsql;
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
			if($i == 8)
			{
				$table .= "<th>" . $field . "</th>";
				$table .= "<th>Status</th>";
			}
			else
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
					if($indx == 1)
					{
						$kolonne = ucfirst(strtolower($kolonne));
						$table .= "<td>" . substr($kolonne,0,21). "</td>";
					}elseif($indx == 8)
					{
						$table .= "<td>" . $kolonne . "</td>";
						$table .= "<td>I am Pregnant</td>";
					}
					else
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
	
	
	$currPath = $_SERVER['REQUEST_URI'];
	$baseprog=explode("/",basename($currPath));
	$checkName=explode("?",basename($baseprog[0]));
	$current_reportname = $checkName[0]

?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding-top:0px;padding-bottom:0px">
	  <!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item <?php echo (isset($current_reportname) && strtolower($current_reportname) == 'apta-pregnant-mom2021-report.php') ? 'active' : '' ?>" style="height:45px;">
				<a class="nav-link " href="http://www.motherhood.com.my/external/anmum-essential-gold-report2021.php">Anmum Essential Gold 2021 report</a>
			</li>
		</ul>
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			<li class="nav-item">
				<a href="anmum-essential-gold-report2021.php?islogout=true" class="nav-link p-2" href="" target="_blank" rel="noopener" aria-label="GitHub">
					<i class="fas fa-sign-out-alt"></i> Logout
				</a>
			</li>
		</ul>
	</nav>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood" style="margin-top:40px;">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Anmum Essential Gold 2021 | Motherhood.com.my Malaysia</h3>
					</div>
				</div>
			</div>
			<form id="form-request" method='post' action="dutch-lady-report2021.php">
				<div class="row row-motherhood">
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
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
						</div>
					</div>
				</div>
				<div class="row row-motherhood">
					<div class="col-md-2 text-left">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" id="check-export" value="yes" name='export'>Export
								<input type="hidden" class="form-control" name="themessage" value='<?php echo (isset($encrypt) && $encrypt != '') ? $encrypt : '' ?>'>
							</label>
						</div>
					</div>
				</div>
				<div class="row row-motherhood">
					<div class="col-md-3 text-left">
						<button type="button" id="btn-submit" class="btn btn-success btn-sm"> Submit </button>
					</div>
				</div>
			</form>
			<div class="row row-motherhood mt-5">
				
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
			
			if(isExport)
			{
				$('body').find('#form-request').attr('action', 'anmum-essential-gold-report2021-excel.php');
			}
			else
			{
				$('body').find('#form-request').attr('action', 'anmum-essential-gold-report2021.php');
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
	
</html>