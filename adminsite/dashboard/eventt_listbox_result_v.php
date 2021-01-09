<?php
	include 'events_db_config.php';
	if (!$_GET['exportExcel']){
		require 'events_newheader_v.php';
	}
	$whereSql 	 = '';
	$tableReportView = '';
	if (isset($_GET['event_type']) && $_GET['event_type'] > 0)
	{
		$sql_eventdetails = "SELECT * FROM `ps_events` WHERE `event_id` = '". $_GET['event_type'] ."' LIMIT 1 ";
		$result_set  	  = mysqli_query($conn, $sql_eventdetails);
		$arrEventDetails  = mysqli_fetch_array($result_set);
		$whereSql  	  	  =	($whereSql == '' ? ' WHERE ' : ' AND ') . '`listbox_event_id` = "' . trim($_GET['event_type']) . '" ';
		
		if (isset($_POST['editlistboxsubmit'])){
			$eventtype 	  = $_POST['eventtype'];
			$listboxid 	  = addslashes($_POST['listboxid']);
			$listboxqno   = addslashes($_POST['listboxqno']);
			$listboxvalue = addslashes($_POST['listboxvalue']);
			$maxunit	  = addslashes($_POST['maxunit']);
			
			$sql_query = "UPDATE ps_events_listbox SET 
						 listbox_question_number='$listboxqno' 
						 ,listbox_value='$listboxvalue' 
						 ,listbox_max_value='$maxunit' 
						 WHERE listbox_id='".$listboxid."'";
						 
			if(mysqli_query($conn, $sql_query))
			 {
			  ?>
				<script type="text/javascript">
					Swal.fire({
						icon: 'success',
						title: 'Success',
						text: 'Data Are Updated Successfully',
					}).then(function() {
						window.location.href='eventt_listbox_result.php?event_type=<?php echo $eventtype ?>'';
					});
				</script>
			  <?php
			 }
			 else
			 {
				echo mysqli_error($conn);
			  ?>
			  <script type="text/javascript">
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Error occured while updating data',
				}).then(function() {
					window.location.href='eventt_listbox_result.php?event_type=<?php echo $eventtype ?>'';
				});
			  </script>
			  <?php
			 }
		}
		
		if (isset($_POST['newlistboxsubmit'])){
			$eventtype 	  = $_POST['eventtype'];
			$listboxqno   = addslashes($_POST['listboxqno']);
			$listboxvalue = addslashes($_POST['listboxvalue']);
			$maxunit 	  = addslashes($_POST['maxunit']);
			
			$sql_query = "INSERT INTO ps_events_listbox (listbox_event_id,listbox_question_number,listbox_value,listbox_max_value)
	 
			 VALUES( '$eventtype'
					,'$listboxqno'
					,'$listboxvalue'
					,'$maxunit' 
					);
					 ";
			if(mysqli_query($conn, $sql_query))
			{
			  ?>
			  <script type="text/javascript">
				Swal.fire({
					icon: 'success',
					title: 'Success',
					text: 'Data Are Updated Successfully',
				}).then(function() {
					window.location.href='eventt_listbox_result.php?event_type=<?php echo $eventtype ?>'';
				});
			  </script>
			  <?php
			}
			else
			{
			  echo mysqli_error($conn);
			  ?>
			  <script type="text/javascript">
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Error occured while updating data',
				}).then(function() {
					window.location.href='eventt_listbox_result.php?event_type=<?php echo $eventtype ?>'';
				});
			  </script>
			  <?php
			}
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
					window.location.href='eventt_listbox.php';
				});
			</script>
		<?php
		die("no data available.");
	}
?>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood">
				<div class="col-md-8">
					<div class="page-header">
						<h3>Event Listbox</h3>
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
				<div class="col-md-12">
					<form action='eventt_listbox_result.php' >
						<input type="hidden" name="event_type" value="<?php echo $_GET['event_type']; ?>" />
						<button type="submit" class="btn btn-success btn-sm" name="add_newlistbox" value="<?php echo $_GET['event_type']; ?>"> <i class="fas fa-plus"></i> &nbsp;Add New Event</button>
					</form>
				</div>
			</div>
			
			<?php 
				$displayForm = 'none';
				$btnName  	 = 'newlistboxsubmit';
				$typeprocess = 'add';
				if($_GET['add_newlistbox']){
					$typeprocess = 'add';
					$displayForm = 'block';
					$btnName  	 = 'newlistboxsubmit';
				}
				elseif($_GET['edit_listbox']){
					$typeprocess 	 = 'edit';
					$displayForm     = 'block';
					$btnName  	     = 'editlistboxsubmit';
					$sql_query   	 = "SELECT * FROM ps_events_listbox WHERE listbox_id = ". $_GET['edit_listbox'] . " LIMIT 1";
					$result_query  	 = mysqli_query($conn, $sql_query);
					$arrListbox 	 = mysqli_fetch_array($result_query);
				}
			?>
			<div class="row row-motherhood row-form" style="display:<?php echo (isset($displayForm) && $displayForm != '') ? $displayForm : 'none' ?>">
				<div class="col-md-8">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo (isset($typeprocess) && $typeprocess == 'add') ? 'Add New Listbox'  : 'Edit Listbox' ?></h5>
							<form action='eventt_listbox_result.php' method="post" >
								<?php 
									if(isset($typeprocess) && $typeprocess == 'edit')
									{
									?>
									<div class="form-group">
										<label>Listboxid (Not editable)</label>
										<input type="number" class="form-control form-control-sm" name="listboxid" value="<?php echo (isset($arrListbox) && is_array($arrListbox) && sizeof($arrListbox) > 0 && $arrListbox['listbox_id'] && $arrListbox['listbox_id'] > 0) ? $arrListbox['listbox_id'] : '0' ?>" readonly/>
									</div>
									<?php
									}
								?>
								<div class="form-group">
									<label>Listbox Question Number ( e.g. Subscriber_question7,8,9... | Insert number here e.g. 7,8,9)</label>
									<input type="number" class="form-control form-control-sm" name="listboxqno" value="<?php echo (isset($arrListbox) && is_array($arrListbox) && sizeof($arrListbox) > 0 && $arrListbox['listbox_question_number'] && $arrListbox['listbox_question_number'] != '') ? $arrListbox['listbox_question_number'] : '0' ?>"/>
									<input type="hidden" name="eventtype" value="<?php echo (isset($_GET['event_type']) && $_GET['event_type'] > 0) ? $_GET['event_type'] : 0 ?>" />
								</div>
								<div class="form-group">
									<label>Lisbox value (Option value to select, insert any value here)</label>
									<input type="text" class="form-control form-control-sm" name="listboxvalue" value="<?php echo (isset($arrListbox) && is_array($arrListbox) && sizeof($arrListbox) > 0 && $arrListbox['listbox_value'] && $arrListbox['listbox_value'] != '') ? $arrListbox['listbox_value'] : '' ?>"/>
								</div>
								<div class="form-group">
									<label>Max unit (Max unit to select, insert number here)</label>
									<input type="number" class="form-control form-control-sm" name="maxunit" value="<?php echo (isset($arrListbox) && is_array($arrListbox) && sizeof($arrListbox) > 0 && $arrListbox['listbox_max_value'] && $arrListbox['listbox_max_value'] != '') ? $arrListbox['listbox_max_value'] : '0' ?>"/>
								</div>
								<button type="submit" name="<?php echo (isset($btnName) && $btnName != '') ? $btnName  : ''; ?>" class="btn btn-primary btn-sm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-motherhood">
				<div class="col-md-12">
					<table class="table table-bordered table-sm table-striped">
						<thead>
							<tr>
								<th>
									Listboxid
								</th>
								<th>
									Listbox question number
								</th>
								<th>
									Listbox Value
								</th>
								<th>
									Max unit
								</th>
								<th>
									Operation
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql_query  = "SELECT * FROM `ps_events_listbox` a	LEFT JOIN ps_events b ON b.event_id  = " . $_GET["event_type"] . $whereSql;
								$result_set = $conn->query($sql_query);
								if(is_object($result_set) && $result_set->num_rows > 0){
									foreach($result_set as $r){
							  ?>
									<tr>
										<td><?php echo $r['listbox_id']; ?></td>
										<td><?php echo $r['listbox_question_number']; ?></td>
										<td><?php echo $r['listbox_value']; ?></td>
										<td><?php echo $r['listbox_max_value']; ?></td>
										<td align="center">
											<form action='eventt_listbox_result.php' >
												<input type="hidden" name="event_type" value="<?php echo $_GET['event_type']; ?>" />
												<button type="submit" class="btn btn-outline-info btn-sm" name="edit_listbox" value="<?php echo $r['listbox_id']; ?>"> <i class="fas fa-pencil-alt"></i> &nbsp;Edit</button>
											</form>
										</td>         
									</tr>
								<?php 
									}
								}
								else
								{
									echo "<tr class='text-center'><td colspan='5'>No data available</td></tr>";
								}
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	$(function(){
		
	});
	</script>
  </body>
</html>
