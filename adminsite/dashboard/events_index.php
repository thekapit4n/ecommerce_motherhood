<?php
	include 'events_db_config.php';
	require 'events_newheader.php';
	if(isset($_GET['search']))
	{
		$STRWHERE = "AND (event_id = '".$_GET['search']."' OR event_name LIKE '%".$_GET['search']."%' OR event_slug LIKE '%".$_GET['search']."%' ) ";
		if(isset($_GET['statusfilter'])){
			$statusfilter = " AND event_active = '".$_GET['statusfilter']."'";
		}
	}
	
	if(isset($_GET['statusfilter'])){
		if($_GET['statusfilter'] == ''){
			$statusfilter = '';
		}else{
			$statusfilter = "AND event_active = ".$_GET['statusfilter']."";
		}
	}
	
	if(isset($_GET['sort'])){
		if($_GET['sort'] == "name"){
			$orderby = 'ORDER BY event_name';
		}
	}

		
	if(isset($_GET['fromDate']) && $_GET['fromDate']){
		$dateArr = explode('/',$_GET['fromDate']);
		$day  = $dateArr[0];
		$month = $dateArr[1];
		$year   = $dateArr[2];
		$datesql = $year . "-" . $month . "-" . $day;
		$filterFromDate = ' AND event_start_date>= "'.$datesql.'" ';
	}
		
	if(isset($_GET['toDate']) && $_GET['toDate']){
		$dateArr = explode('/',$_GET['toDate']);
		$day  = $dateArr[0];
		$month = $dateArr[1];
		$year   = $dateArr[2];
		$datesql = $year . "-" . $month . "-" . $day;
		$filterToDate = ' AND event_start_date<= "'.$datesql.'" ';
	}
?>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Event List</h3>
					</div>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-4">
					<form action="events_index.php?search=<?php echo (isset($search) && $search != "") ? $search : ''?>" method="get">
						<div class="input-group input-group-sm mb-3">
							<input type="text" class="form-control searchField" name="search" placeholder="Search ID/Name" value='<?php echo (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '' ?>'>
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Search</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<form action="events_index.php?search=<?php echo (isset($search) && $search != "") ? $search : ''?>" method="get">
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">From</span>
							</div>
							<?php 
								if(isset($_GET['fromDate']) && $_GET['fromDate'] != '')
								{
									$arrDay = explode('/', $_GET['fromDate']);
									if(is_array($arrDay) && sizeof($arrDay) == 3)
									{
										$day  = $arrDay[0];
										$month = $arrDay[1];
										$year  = $arrDay[2];
										
										$fromdate = $day . "/" . $month . "/" . $year;
									}
								}
								
								if(isset($_GET['toDate']) && $_GET['toDate'] != '')
								{
									$arrDay = explode('/', $_GET['toDate']);
									if(is_array($arrDay) && sizeof($arrDay) == 3)
									{
										$day  = $arrDay[0];
										$month = $arrDay[1];
										$year   = $arrDay[2];
										
										$todate = $day . "/" . $month . "/" . $year;
									}
								}
							?>
							<input type="text" class="form-control eventdatepicker" autocomplete="off" name="fromDate" placeholder="start event date" value='<?php echo (isset($fromdate) && $fromdate != '') ? $fromdate : '' ?>'>
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">To</span>
							</div>
							<input type="text" class="form-control eventdatepicker-end" autocomplete="off" name="toDate" placeholder="end event date" value='<?php echo (isset($todate) && $todate != '') ? $todate : '' ?>' disabled>
							<div class="input-group-append">
								<button class="btn btn-primary btnsearchdate" type="submit" disabled><i class="fas fa-search"></i> Search</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3 text-center">
					<a href="events_add_data.php" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> &nbsp;Add New Event</a>
					<a href="events_index.php" class="btn btn-danger btn-sm">Clear</a>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-12">
					<div class="btn-group">
						<button type="button" class="btn btn-info btn-sm" onclick="filter(1,'<?php echo $_GET['sort']; ?>')">Active</button>
						<button type="button" class="btn btn-warning btn-sm" onclick="filter(0,'<?php echo $_GET['sort']; ?>')">Inactive</button>
						<button type="button" class="btn btn-secondary btn-sm" onclick="filter('<?php echo $_GET['sort']; ?>', 'name')">Sort by Name</button>
					</div>
				</div>
			</div>
			<div class="row row-motherhood">
				<div style="padding-right:15px; padding-left:15px; width:100%">
					<?php
						#comment first
						// $SQL="SELECT * FROM ps_event WHERE 1=1 $STRWHERE $statusfilter $filterFromDate $filterToDate   $orderby";
						// $res1= $conn->query($SQL);
						// $count = mysqli_num_rows($res1);
					?>
					<div class="table-responsive">
						<table class="table table-bordered table-sm">
							<thead>
								<tr>
									<th style="min-width:45px">ID</th>
									<th style="min-width:200px">Name</th>
									<th style="min-width:95px">Start Date</th>
									<th style="min-width:95px">End Date</th>
									<th style="min-width:200px">Title</th>
									<th style="min-width:200px">Slug</th>
									<th style="min-width:85">Status</th>
									<th style="min-width:256px">Operations</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql_query = "SELECT * FROM ps_events WHERE 1=1 $STRWHERE $statusfilter  $filterFromDate $filterToDate  $orderby";
									$result_set= $conn -> query ($sql_query);
									foreach($result_set as $r){
								?>
										<tr>
											<td><?php echo $r['event_id']; ?></td>
											<td><?php echo $r['event_name']; ?></td>
											<td><?php echo date('d-m-Y', strtotime($r['event_start_date'])) ?></td>
											<td><?php echo date('d-m-Y', strtotime($r['event_end_date'])) ?></td>
											<td><?php echo $r['event_title']; ?></td>
											<td><?php echo $r['event_slug']; ?></td>
											<td><?php echo $r['event_active'] == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'?></td>
											<td align="left">
												<button type="button" class="btn btn-outline-info btn-sm" onclick="edt_id(<?php echo $r['event_id'] ?>)"> <i class="fas fa-pencil-alt"></i> &nbsp;Edit</button>
												<a href="https://www.motherhood.com.my/admin2635/dashboard/newEvents/event_report.php?event_type=<?php echo $r['event_id'] ?>" target="_blank" class="btn btn-outline-warning btn-sm"> <i class="far fa-file-excel"></i>&nbsp;Report</a>
												<a href="https://www.motherhood.com.my/events/<?php echo $r['event_slug'] ?>" target="_blank" class="btn btn-outline-primary btn-sm"> <i class="fab fa-html5"></i>&nbsp;View page</a>
												<br/>
												<button type="button" class="btn btn-outline-info btn-sm" onclick="map_id(<?php echo $r['event_id'] ?>)" style="margin-top:10px;"> <i class="fas fa-pencil-alt"></i> &nbsp;Map</button>
											</td>
										</tr>
									<?php 
									}
									?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	var filter = function(statusfilter, sort){
		window.location.href='events_index.php?statusfilter='+statusfilter+'&sort='+sort;
	}
	
	var edt_id = function(id)
	{
		window.location.href='https://www.motherhood.com.my/admin2635/dashboard/newEvents/events_add_data.php?edit_id='+id;
	}
	var map_id = function(id)
	{
		window.location.href='https://www.motherhood.com.my/admin2635/dashboard/newEvents/events_mapping_list.php?event_id='+id;
	}
	
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
			format: 'dd/mm/yyyy' 
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
		
		
	});
	</script>
  </body>
</html>
