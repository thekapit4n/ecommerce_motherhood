<?php
	include 'events_db_config.php';
	if (!$_GET['exportExcel']){
		require 'events_newheader.php';
	}
	
	header("Pragma: no-cache");
	header("Expires: 0");
    error_reporting(E_ALL &~E_NOTICE);
    ini_set('display_errors', '1');
	echo mysqli_error($conn);
	
	$productList  	 = array();
	$whereReport 	 = '';
	$tableReportView = '';
	
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	
	$no_of_records_per_page = 2000;
	if (isset($_GET['event_type']) && $_GET['event_type'] > 0)
	{
		$sql_eventdetails = "SELECT * FROM `ps_events` WHERE `event_id` = '". $_GET['event_type'] ."' LIMIT 1 ";
		$result_set  	  = mysqli_query($conn, $sql_eventdetails);
		$arrEventDetails  = mysqli_fetch_array($result_set);
		$whereReport  	  =	($whereReport == '' ? ' WHERE ' : ' AND ') . 'a.`subscriber_event_id` = "' . trim($_GET['event_type']) . '" ';
		
		$event115Col = "";
		if ($_GET['event_type'] == 115){
			$event115Col =' ,IF (
							IF(email IS NOT NULL, SHA2(email,0) NOT IN (SELECT * FROM tbl_friso_hash) , TRUE)
							AND IF(phone IS NOT NULL, SHA2(phone,0) NOT IN (SELECT * FROM tbl_friso_hash), TRUE) 
							AND SHA2(subscriber_question1,0) NOT IN (SELECT * FROM tbl_friso_hash) 
							AND SHA2(newEmail,0) IN (SELECT * FROM tbl_friso_hash) ,"ok","duplicated") AS frisoHashCheck';
		}
		
		$sqltotalCount	  =  "SELECT COUNT(a.subscriber_id)
								FROM ps_events_subscriber a
								INNER JOIN ps_events b ON
									b.event_id = a.subscriber_event_id
								LEFT JOIN ps_customer c ON
									a.subscriber_customer_id = c.id_customer
								LEFT JOIN(
									SELECT
										*
									FROM
										ps_address
									GROUP BY
										id_customer
								) d
								ON
									c.id_customer = d.id_customer" . $whereReport . " ORDER BY a.`subscriber_id`DESC";
		$offset 		  = ($pageno-1) * $no_of_records_per_page;
		$resultCount 	  = mysqli_query($conn,$sqltotalCount);
		$total_rows 	  = mysqli_fetch_array($resultCount)[0];
		$total_pages 	  = ceil($total_rows / $no_of_records_per_page);
		$sqllimit 		  = "LIMIT " . $offset . "," . $no_of_records_per_page;
		$sqlreport		  =  "SELECT b.`event_name`, CONCAT(c.firstname, c.lastname) AS NAME, c.email, IF(d.phone = '', phone_mobile, phone) AS phone, a.* $event115Col
								FROM ps_events_subscriber a
								INNER JOIN ps_events b ON
									b.event_id = a.subscriber_event_id
								LEFT JOIN ps_customer c ON
									a.subscriber_customer_id = c.id_customer
								LEFT JOIN(
									SELECT
										*
									FROM
										ps_address
									GROUP BY
										id_customer
								) d
								ON
									c.id_customer = d.id_customer" . $whereReport . " ORDER BY a.`subscriber_id`DESC " . $sqllimit;
									
		
		$result = $conn->query($sqlreport);
		echo $sqlreport;
		
		if(is_object($result)){
			$exportCSVlink = "https://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] . "&exportExcel=1";
			if (!$_GET['exportExcel']){
				$tableReportView =  mysql_result_all_html($result, $offset);
			}else{
				mysql_result_all_csv($result);
			}
			
			$result->close();
			mysqli_close($conn);
		}
	}
	else
	{
		?>
			<script type="text/javascript">
				Swal.fire({
					icon: 'info',
					title: 'No data',
					text: 'No data available for selected id',
				}).then(function() {
					window.location.href='event_report_form.php';
				});
			</script>
		<?php
		die("no data available.");
	}
	
	function mysql_result_all_csv($result){
		if (!$result) die('Couldn\'t fetch records');
		$num_fields = mysqli_num_fields($result);
		$headers 	= array();
		for ($i = 0; $i < $num_fields; $i++) {
			$headers[] = mysqli_field_name($result , $i);
		}
		
		$fp = fopen('php://output', 'w');
		if ($fp && $result) {
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename="export.csv"');
			header('Pragma: no-cache');
			header('Expires: 0');
			fputcsv($fp, $headers);
			while ($row = $result->fetch_array(MYSQLI_NUM)) {
				fputcsv($fp, array_values($row));
			}
			die;
		}
	}
	
	function mysql_result_all_html($result, $offset = 0) {
		$noFields 	 = mysqli_num_fields($result);
		$table 	= "";
		$table .= "<table class='table-bordered table-sm table-hover'>";
		$table .= "<tr>";
		$table .= "<th>No.</th>";
		# for header
		for ($i = 0; $i < $noFields; $i++) {
			$field 	= mysqli_field_name($result, $i);
			$table .= "<th>" . $field . "</th>";
		}
		$table .= "</tr>";
		
		#rowdata
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
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/twbs-pagination/jquery.twbsPagination.min.js" type="text/javascript"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/simplePagination/jquery.simplePagination.js" type="text/javascript"></script>
 <!--<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/simplePagination/simplePagination.css" rel="stylesheet" type="text/css" />-->
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Event Registration Report</h3>
					</div>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-6">
					<table class="table table-sm table-bordered">
						<thead>
							<tr>
								<td colspan=2 class="table-info text-center">Details of the event</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="width:150px;">Event ID</td>
								<td><?php echo (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_id']) && $arrEventDetails['event_id'] != '') ? $arrEventDetails['event_id']  : '' ?></td>
							</tr>
							<tr>
								<td>Event Name</td>
								<td><?php echo (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_name']) && $arrEventDetails['event_name'] != '') ? $arrEventDetails['event_name']  : '' ?></td>
							</tr>
							<tr>
								<td>Event Date</td>
								<td>
									<?php echo (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_start_date']) && $arrEventDetails['event_start_date'] != '0000-00-00 00:00:00') ? date('d-m-Y H:i:s', strtotime($arrEventDetails['event_start_date']))  : 'n/a' ?>
									&nbsp; - &nbsp;
									<?php echo (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_end_date']) && $arrEventDetails['event_end_date'] != '0000-00-00 00:00:00') ? date('d-m-Y H:i:s', strtotime($arrEventDetails['event_end_date']))  : 'n/a' ?>
								</td>
							</tr>
							<tr>
								<td style="width:150px;">Event URL</td>
								<td>
									<?php 
										if(isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_slug']) &&  $arrEventDetails['event_slug'] != '')
										{
											$urlEvent = "http://" . $_SERVER[HTTP_HOST] . "/events/" . $arrEventDetails['event_slug'];
											echo "<a href='" . $urlEvent . "' target='_blank'>" . $urlEvent . "</a>";
										}
									?>
								</td>
							</tr>
							<tr>
								<td>Event Status</td>
								<td><?php 
									if(isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_active']) &&  $arrEventDetails['event_active'] != '')
									{
										if($arrEventDetails['event_active'] == 1)
										{
											echo '<span class="badge badge-success">Active</span>';
										}
										else
											echo '<span class="badge badge-danger">Inactive</span>';
									}
									?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php
				$starting = (isset($pageno) && $pageno > 0) ? $pageno  : 0;
				if($starting > 0)
				{
					$showingLimit = $starting * $no_of_records_per_page;
					if($showingLimit >= $total_rows)
					{
						$showingLimit = $total_rows;
					}
				}
				
				$urlPagination = "";
				if(isset($_GET['event_type']) && $_GET['event_type'] > 0)
				{
					$urlPagination .= ($urlPagination == "" ? '?' : '&') . "event_type=" . $_GET['event_type'];
				}
				
				if(isset($pageno) && $pageno > 0)
				{
					$urlPagination .= ($urlPagination == "" ? '?' : '&') . "pageno=";
				}
			?>
			<div class="row row-motherhood">
				<div class="col-md-6">
					<a href="<?php echo (isset($exportCSVlink) && $exportCSVlink != '') ? $exportCSVlink : '#' ?>" class="btn btn-dark btn-sm"><i class="fas fa-file-csv"></i> &nbsp;Export as CSV file</a>
					<button type='button' class="btn btn-success btn-sm btn-export" data-filter="filter_email"><i class="far fa-file-excel"></i> &nbsp;Export as excel file [filter email]</button>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-12 div-table" style="width:100%">
				<p>Showing <?php echo isset($offset) ? ($offset + 1) : 0  ?> to <?php echo $showingLimit ?> of <?php echo $total_rows  ?> entries</p>
				<?php echo (isset($tableReportView) && $tableReportView != '') ? $tableReportView : ''; ?>
				<p>Showing <?php echo isset($offset) ? ($offset + 1) : 0  ?> to <?php echo $showingLimit ?> of <?php echo $total_rows  ?> entries</p>
				<nav style="margin-top:10px;">
					<ul class="pagination pagination-sm" id="pagination-ulkapitan">
					</ul>
				</nav>
			</div>
		</div>
    </main><!-- /.container -->
	<form id="form-excel-report" action="event_report_excel.php" target="_blank" method="post">
		<input type="hidden" name="themessage" value="<?php echo $encrypt ?>">
		<input type="hidden" id="excelEventID"name="subscriber_event_id" value="<?php echo $_GET['event_type'] ?>">
		<input type="hidden" id="excelStartDate" name="searchDateStart" value="">
		<input type="hidden" id="excelEndDate" name="searchDateEnd" value="">
		<input type="hidden" id="excelTyperFilter" name="typefilter" value="">
	</form>
	<script type="text/javascript">
	
	
	$(function(){
		var totpages = '<?php echo (isset($total_pages) && $total_pages > 0) ? $total_pages  : 1?>'; //We store the number of pages in a variable to use it below
		totpages = parseInt(totpages);
		var curentpage = '<?php echo  (isset($pageno) && $pageno > 0) ? $pageno : 1?>';
		curentpage = parseInt(curentpage);
		$('#pagination-ulkapitan').twbsPagination({
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
		
		$('body').on('click', '.btn-export', function(){
			var typefiler = $(this).data('filter');
			
			if(typefiler == undefined || typefiler == null){
				typefiler = "";
			}
			
			$('body').find('#excelTyperFilter').val(typefiler);
			$('body').find('#form-excel-report').submit();
		});
	});
	</script>
  </body>
</html>
