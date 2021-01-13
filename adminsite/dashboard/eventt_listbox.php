<?php
	include 'events_db_config.php';
	require 'events_newheader.php';
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
				<form action='eventt_listbox_result.php' class="d-flex col-12">
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
												$sql = "SELECT * FROM `ps_events` ORDER BY `event_name` ";       
												$result = $conn->query($sql);
												
												while ($r = mysqli_fetch_row($result)) {
													$name=$r[1];
													$id=$r[0];
													echo "<option value='$id'>$name</option>";
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
	$(function(){
		$('body').find('#event_type').select2({
			placeholder: 'Select an option'
		});
		
	});
	</script>
  </body>
</html>
