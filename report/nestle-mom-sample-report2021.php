<?php

session_start();

$arr_allowUser = array(
	'tech',
	'megan',
	'hooishan',
	'nestlemom',
	'haiqal',
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password'] == 'nestlemom123'){
	$_SESSION['nestlemomsample'] = true;
}

if ($_SESSION['nestlemomsample'] == true){

}
else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Nestle Mom Sample Report 2021 | Motherhood.com.my Malaysia</title>
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

<form action='nestle-mom-sample-report2021.php' method='post'>
		<div style="row">
			<div style="text-align:center;">
				<img style="vertical-align: middle;width:10%;" 
				src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
			</div>
			<div class="form-container">
				<div class="text-header">
				Nestlé Mom Sample Report 2021 | Motherhood.com.my Malaysia
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
<title>Nestlé mom sample report 2021 | Motherhood.com.my Malaysia</title>
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
	$currentLimit 	= " LIMIT 1700";
	
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	
	$no_of_records_per_page = 1700;
	
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
	
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_event_id = 102";
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "cart_prod.id_product = 45390";
	
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
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_created_at >= '2021-04-13 00:00:00'";
	}
	
	if(isset($_POST['item_status']))
	{
		$itemstatus = $_POST['item_status'];
		
		if(strtolower($itemstatus) == "incart")
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " bb.valid IS NULL";
		}
		elseif(strtolower($itemstatus) == "paid")
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " bb.valid = 1";
		}
		elseif(strtolower($itemstatus) == "unpaid")
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " bb.valid = 0";
		}
	}
	
	$urlPagination = "";
	if(isset($pageno) && $pageno > 0)
	{
		$urlPagination .= ($urlPagination == "" ? '?' : '&') . "pageno=";
	}
	
	$sqltotalCount	  =  "SELECT COUNT(*) AS total FROM (SELECT DISTINCT (evnt.newEmail) 
							FROM
								ps_events_subscriber AS evnt
								LEFT JOIN
							motherhood_presta.ps_customer AS cust ON cust.email = evnt.newEmail
								LEFT JOIN
							ps_cart AS cart ON cart.id_customer = cust.id_customer
								INNER JOIN
							ps_cart_product AS cart_prod ON cart.id_cart = cart_prod.id_cart
								LEFT JOIN
							(SELECT 
								odr.id_order, odr.id_customer, odr.valid, odr.invoice_date
							FROM
								ps_orders AS odr
							INNER JOIN ps_order_detail AS odr_detail ON odr.id_order = odr_detail.id_order
							WHERE
								odr_detail.product_id = 45390) bb ON bb.id_customer = cust.id_customer
							" .$wheresql . "
							GROUP BY evnt.newEmail
							ORDER BY evnt.subscriber_created_at ASC
							" . $currentLimit . ") AS a
						";
	
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
				 RTRIM(LTRIM(CONCAT(evnt.newFirstName , ' ' , evnt.newLastName))) AS Name,
				evnt.newEmail AS Email,
				evnt.subscriber_question1 AS 'Mobile no',
				evnt.subscriber_question2 AS 'Parent DOB',
				evnt.subscriber_question9 AS 'Maternal Milk',
				evnt.subscriber_question3 AS 'Address',
				evnt.subscriber_question4 AS 'Postcode',
				evnt.subscriber_question5 AS 'City',
				evnt.subscriber_question7 AS 'State',
				evnt.subscriber_question12 AS 'TNC Nestlé Products Sdn Bhd',
				evnt.subscriber_question13 AS 'TNC Motherhood.com.my',
				evnt.subscriber_question14 AS 'Marketing and promotional information',
				IFNULL(bb.valid, 'incart') AS 'Item Status',
				evnt.subscriber_created_at AS 'Subscriber Date',
				bb.invoice_date as 'Checkout Date'
			FROM
				ps_events_subscriber AS evnt
				LEFT JOIN
				motherhood_presta.ps_customer AS cust ON cust.email = evnt.newEmail
				LEFT JOIN
				ps_cart AS cart ON cart.id_customer = cust.id_customer
				INNER JOIN
				ps_cart_product AS cart_prod ON cart.id_cart = cart_prod.id_cart
					  LEFT JOIN ( select odr.id_order, odr.id_customer, odr.valid,  odr.invoice_date FROM 
						ps_orders AS odr 
							INNER JOIN
						ps_order_detail AS odr_detail ON odr.id_order = odr_detail.id_order 
						WHERE  odr_detail.product_id = 45390
					) bb ON bb.id_customer = cust.id_customer
			" . $wheresql . $groupBy . " ORDER BY evnt.subscriber_created_at ASC " . $limitsql ;
	
	
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
				if(in_array($indx, array(9,10,11)))
				{
					if($kolonne == '')
					{
						$table .= "<td class='text-center'> - </td>";
					}
					else
					{
						$table .= "<td class='text-center'>" . $kolonne . "</td>";
					}
				}
				elseif($indx == 12)
				{
					
					if($kolonne == 1)
					{
						$table .= "<td class='text-center'> <span class='badge badge-success'>Paid</span> </td>";
					}
					elseif(strtolower($kolonne) == 'incart')
					{
						$table .= "<td class='text-center'><span class='badge badge-info'>In cart</span></td>";
					}
					else
					{
						$table .= "<td class='text-center'><span class='badge badge-danger'>Payment unsucessful</span></td>";
					}
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
?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="nestle-mom-sample-report2021.php">Nestlé mom sample report 2021 MMY</a>
			</li>
		</ul>
	</nav>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood" style="margin-top:40px;">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Nestlé mom sample report 2021 | Motherhood.com.my Malaysia</h3>
					</div>
				</div>
			</div>
			<form id="form-request" method='post' action="nestle-mom-sample-report2021.php">
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
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Item Status</label>
									<select class="form-control" name="item_status">
										<option value="">All</option>
										<option value="incart" <?php echo (isset($itemstatus) && strtolower($itemstatus) == 'incart') ? 'selected="selected"' : '' ?>>In cart</option>
										<option value="paid" <?php echo (isset($itemstatus) && strtolower($itemstatus) == 'paid') ? 'selected="selected"' : '' ?>>Paid</option>
										<option value="unpaid" <?php echo (isset($itemstatus) && strtolower($itemstatus) == 'unpaid') ? 'selected="selected"' : '' ?>>Unsuccessful Payment</option>
									</select>
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
			console.log(isExport);
			if(isExport)
			{
				$('body').find('#form-request').attr('action', 'nestle-mom-sample-report2021-excel.php');
			}
			else
			{
				$('body').find('#form-request').attr('action', 'nestle-mom-sample-report2021.php');
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