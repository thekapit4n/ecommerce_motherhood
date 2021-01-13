<?php
	include 'events_db_config.php';
	require 'events_newheader.php';
	if(isset($_GET['statusfilter'])){
		if($_GET['statusfilter'] == ''){
			$statusfilter = '';
		}else{
			$statusfilter = "WHERE event_active = ".$_GET['statusfilter']."";
		}
	}

	if(isset($_GET['sort'])){
		if($_GET['sort'] == "name"){
			$orderby = 'ORDER BY event_name';
		}
	}
?>
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
				<div class="col-md-8">
					<div class="btn-group">
					  <button type="button" class="btn btn-info btn-sm" onclick="filter(1,'<?php echo $_GET['sort']; ?>')">Active</button>
					  <button type="button" class="btn btn-warning btn-sm" onclick="filter(0,'<?php echo $_GET['sort']; ?>')">Inactive</button>
					</div>
				</div>
			</div>
			<div class="row row-motherhood">
				<form action='event_report.php' class="d-flex col-12">
					<table class="table table-bordered table-sm table-striped">
						<tbody>
							<tr>
								<th class="text-center">Event Name</th>
								<td class="text-left">
									<select name='event_type' id='event_type'>
										<option value=''>All</option>
										<?php

										header("Pragma: no-cache");
										header("Expires: 0");
										$productList=array();
											error_reporting(E_ALL &~E_NOTICE);
											ini_set('display_errors', '1');
											
											echo mysqli_error($conn);
											$sql =  
												"
											SELECT * FROM ps_events $statusfilter ORDER BY event_name 
											   ";       
											
											$result = $conn->query($sql);
											
											  while ($r = mysqli_fetch_row($result)) {
												  $name = $r[1];
												  $id = $r[0];
												  echo "<option value='$id'>$id - $name</option>";
											  }
										?>
									</select>
								</td>
							</tr>
							<tr>
								<th class="text-center"><button type="submit" class="btn btn-success btn-sm">Submit</button></th>
								<th></th>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">
	 var filter = function(statusfilter, sort){
		window.location.href='event_report_form.php?statusfilter='+statusfilter+'&sort='+sort;
	}

	$(function(){
		$('body').find('#event_type').select2({
			placeholder: 'Select an option'
		});
		
	});
	</script>
  </body>
</html>
