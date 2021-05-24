<?php
	require_once("header-ngconnect-report.php");
	
	if(isset($_GET['q']) && $_GET['q'] != '')
	{
		
	}
	else
	{
		header('Location: http://visual.nuren.co/admin2635/ngconnect-report/report_list.php');
	}
	
	
	/* $currPath 		= $_SERVER['REQUEST_URI'];
	$baseprog		= explode("?",basename($currPath));
	$checkName		= explode("-",basename($baseprog[0]));
	$secretOfTheDay = "K@p1T4n S4Y T0d4Y 1$" . date('Y-m-d');
	$encrypt  		= md5($secretOfTheDay);
	$searchStart 	="";
	$searchEnd 	 	="";
	$wheresql  	 	= "";
	$limitsql    	= "";
	$currentLimit 	= " LIMIT 1500";
	
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
	
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_event_id = 90";

	
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
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '2021-05-12 00:00:00'";
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
		evnt.newEmail as Email, evnt.newFirstName as FullName,  evnt.subscriber_question1 as Mobile, 
		evnt.subscriber_question4 as childDOB, evnt.subscriber_question3 as ProductName, evnt.subscriber_question13 as TasteofMilk,  evnt.subscriber_question5 as AddressLine1, 
		evnt.subscriber_question7 as AddressLine2, evnt.subscriber_question8 as Postcode, evnt.subscriber_question9 as City, evnt.subscriber_question10 as State, 
		evnt.subscriber_question12 as TnC, evnt.subscriber_created_at as DateSubmit
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
	} */
?>
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
			console.log(isExport);
			if(isExport)
			{
				$('body').find('#form-request').attr('action', 'dutch-lady-report2021-excel.php');
			}
			else
			{
				$('body').find('#form-request').attr('action', 'dutch-lady-report2021.php');
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