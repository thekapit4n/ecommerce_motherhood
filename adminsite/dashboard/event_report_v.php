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
	if (isset($_GET['event_type']) && $_GET['event_type'] > 0)
	{
		$sql_eventdetails = "SELECT * FROM `ps_events` WHERE `event_id` = '". $_GET['event_type'] ."' LIMIT 1 ";
		$result_set  	  = mysqli_query($conn, $sql_eventdetails);
		$arrEventDetails  = mysqli_fetch_array($result_set);
		$whereReport  	  =	($whereReport == '' ? ' WHERE ' : ' AND ') . '`subscriber_event_id` = "' . trim($_GET['event_type']) . '" ';
		$sqlreport		  =  "SELECT b.`event_name`, CONCAT(c.firstname, c.lastname) AS NAME, c.email, IF(d.phone = '', phone_mobile, phone) AS phone, a.*
								FROM ps_events_subscriber a
								JOIN ps_events b ON
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
									c.id_customer = d.id_customer" . $whereReport . " ORDER BY `subscriber_id`DESC";
		$result = $conn->query($sqlreport);
		
		if(is_object($result)){
			$exportCSVlink = "https://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] . "&exportExcel=1";
			if (!$_GET['exportExcel']){
				$tableReportView =  mysql_result_all_html($result);
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
	
	function mysql_result_all_html($result) {
		$noFields 	 = mysqli_num_fields($result);
		$table 	= "";
		$table .= "<table class='table-bordered table-sm table-striped'>";
		$table .= "<tr>";
		$table .= "<th>No.</th>";
		# for header
		for ($i = 0; $i < $noFields; $i++) {
			$field 	= mysqli_field_name($result, $i);
			$table .= "<th>" . $field . "</th>";
		}
		$table .= "</tr>";
		
		#rowdata
		$ccount = 0;
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
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/DataTables/datatables.min.css" rel="stylesheet" type="text/css" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/DataTables/datatables.min.js" type="text/javascript"></script>
<!--<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/DataTables/Scroller-2.0.3/js/dataTables.scroller.min.js" type="text/javascript"></script>-->
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/DataTables/Scroller-2.0.3/js/scroller.bootstrap4.min.js" type="text/javascript"></script>

https://cdn.datatables.net/scroller/2.0.3/js/dataTables.scroller.min.js
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
			<div class="row row-motherhood">
				<div class="col-md-6">
					<form action="event_process_report_listing.php" method="post">
						<div class="input-group input-group-sm mb-3">
							<input type="text" class="form-control searchField" name="eventID" placeholder="Search ID/Name" value='<?php echo (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_id']) && $arrEventDetails['event_id'] != '') ? $arrEventDetails['event_id']  : '' ?>'>
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-12">
					<table id="ajaxtable" class="table-bordered table-sm table-striped" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>First name</th>
								<th>Last name</th>
								<th>ZIP / Post code</th>
								<th>Country</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-6">
					<a href="<?php echo (isset($exportCSVlink) && $exportCSVlink != '') ? $exportCSVlink : '#' ?>" class="btn btn-dark btn-sm"><i class="fas fa-file-csv"></i> &nbsp;Export as CSV file</a>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-12" style="width:100%">
					<?php echo (isset($tableReportView) && $tableReportView != '') ? $tableReportView : ''; ?>
				</div>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	$(function(){
		$('#ajaxtable').DataTable( {
			serverSide: true,
			ordering: false,
			searching: false,
			ajax: function ( data, callback, settings ) {
				var out = [];
	 
				for ( var i=data.start, ien=data.start+data.length ; i<ien ; i++ ) {
					out.push( [ i+'-1', i+'-2', i+'-3', i+'-4', i+'-5' ] );
				}
	 
				setTimeout( function () {
					callback( {
						draw: data.draw,
						data: out,
						recordsTotal: 5000000,
						recordsFiltered: 5000000
					} );
				}, 50 );
			},
			scrollY: 200,
			scroller: {
				loadingIndicator: true
			},
		});
	});
	</script>
  </body>
</html>
