<style>
	.color-compulsory{
		color:#FF0000;
	}
</style>
<?php
	include 'events_db_config.php';
	require 'events_newheader_v.php';
	
	$editId = 0;
	$arr_errormsg = array();
	if(isset($_GET['edit_id']) && $_GET['edit_id'] > 0)
	{
		$sql_query   = "SELECT * FROM `ps_events` WHERE `event_id` = '".$_GET['edit_id']."' ";
		$result_set  = mysqli_query($conn, $sql_query);
		$fetched_row = mysqli_fetch_array($result_set);
		$editId 	 = $_GET['edit_id'];
		
		if(!is_array($fetched_row) || $fetched_row == null)
		{
			?>
			<script type="text/javascript">
				Swal.fire({
					icon: 'info',
					title: 'No data',
					text: 'No data available for selected id',
				}).then(function() {
					window.location.href='events_index.php';
				});
			</script>
			<?php
		}
	}
	
	if(isset($_POST['btn-update']))
	{
		// variables for input data
		 $Events_Id 		 	  = $_POST['events_id'];
		 $Events_name 		 	  = addslashes($_POST['events_name']);
		 $Events_title 		 	  = addslashes($_POST['events_title']);
		 $Events_slug 		 	  = addslashes($_POST['events_slug']);
		 $eventt_description 	  = str_replace(array("// <![CDATA[", "// ]]>")," ", $_POST['events_description']);
		 $Events_description 	  = addslashes($eventt_description);
		 $Events_meta_title  	  = addslashes($_POST['events_meta_title']);
		 $Events_meta_description = addslashes($_POST['events_meta_description']);
		 $Events_meta_keyword 	  = addslashes($_POST['events_meta_keyword']);
		 $Events_banner 		  = addslashes($_POST['events_banner']);
		 $Events_mini_banner 	  = addslashes($_POST['events_mini_banner']);
		 $Events_default 		  = $_POST['events_default'];
		 $Events_url 			  = addslashes($_POST['events_url']);
		 $Events_start_date 	  = $_POST['events_start_date'];
		 $Events_end_date 		  = $_POST['events_end_date'];
		 $Events_email_template   = addslashes($_POST['events_email_template']);
		 $Events_submit_msg 	  = addslashes($_POST['events_submit_msg']);
		 $backgroundcolor 		  = addslashes($_POST['backgroundcolor']);
		 $floatball 			  = addslashes($_POST['customfloatingball']);
		 $floatballlink 		  = addslashes($_POST['customfloatingballlink']);
		 
		if(strtotime($Events_start_date) > strtotime($Events_end_date))
		{
			$arr_errormsg[] = "Start date cannot less than end date";
		?>
			<script type="text/javascript">
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Start date cannot less than end date',
				})
			</script>
		<?php
		}
		// variables for input data

		// sql query for update data into database
		
		if(sizeof($arr_errormsg) == 0)
		{
			if(isset($editId) && $editId > 0)
			{
				 $sql_query = "UPDATE ps_events SET 
				 `event_name`='$Events_name'
				 ,event_title='$Events_title' 
				 ,event_slug='$Events_slug' 
				 ,event_description='$Events_description' 
				 ,event_meta_title='$Events_meta_title' 
				 ,event_meta_description='$Events_meta_description' 
				 ,event_meta_keyword='$Events_meta_keyword' 
				 ,event_banner='$Events_banner' 
				 ,event_mini_banner='$Events_mini_banner' 
				 ,`event_default`='$Events_default' 
				 ,event_url='$Events_url' 
				 ,event_start_date='$Events_start_date' 
				 ,event_end_date='$Events_end_date' 
				 ,event_email_template='$Events_email_template'
				 ,event_submit_msg='$Events_submit_msg'
				 ,event_active='$Events_active'
				 ,backgroundcolor='$backgroundcolor'
				 ,custom_floating_ball='$floatball'
				 ,custom_floating_ball_link='$floatballlink'
				 WHERE event_id='". $editId ."'";
			}
			else
			{
				 $sql_query = "INSERT INTO ps_events (event_id,event_name,event_title,event_slug,event_description,event_meta_title,event_meta_description
				 ,event_meta_keyword,event_banner,event_url,event_default,event_start_date,event_end_date,event_mini_banner,event_email_template,event_submit_msg,backgroundcolor
				 ,custom_floating_ball,custom_floating_ball_link)
				 
				 VALUES('$Events_Id','$Events_name','$Events_title','$Events_slug' 
				,'$Events_description' 
				,'$Events_meta_title' 
				,'$Events_meta_description' 
				,'$Events_meta_keyword' 
				,'$Events_banner' 
				,'$Events_default' 
				,'$Events_url' 
				,'$Events_start_date' 
				,'$Events_end_date'
				,'$Events_mini_banner'
				,'$Events_email_template'
				,'$Events_submit_msg' 
				,'$backgroundcolor'
				,'$floatball'
				,'$floatballlink');
				 ";
			}
				// sql query for update data into database
				if(mysqli_query($conn, $sql_query))
			{
				$sql_log = "INSERT INTO ps_events_log SELECT *,now(),'new' FROM ps_events WHERE  event_id='".$Events_Id."'";
				mysqli_query($conn, $sql_log);
				
				if(isset($editId) && $editId > 0)
				{
				?>
					<script type="text/javascript">
						Swal.fire({
							icon: 'success',
							title: 'Success',
							text: 'Data are updated successfully',
						}).then(function() {
							window.location.href='';
						});
					</script>
				<?php
				}
				else
				{
				?>
					<script type="text/javascript">
						Swal.fire({
							icon: 'success',
							title: 'Success',
							text: 'Data are inserted successfully',
						}).then(function() {
							window.location.href='events_index.php';
						});
					</script>
				<?php
				}
			?>
				
		  <?php
			}
			else
			{
				echo mysqli_error($conn);
			?>
				<script type="text/javascript">
					Swal.fire({
						icon: 'error',
						title: 'Error Occured',
						text: 'An error occur to insert data',
					})
				</script>
			<?php
			}
			// sql query execution function
		}
	}
?>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood">
				<div class="col-md-8">
					<div class="page-header">
						<h3><?php echo (isset($editId) && $editId > 0) ? 'Update Event Page : ' .  ((isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_name']) && $fetched_row['event_name'] != "") ? $fetched_row['event_name'] : '') : 'Create Event Page' ?></h3>
					</div>
				</div>
			</div>
			<form method="post">
				<div class="row row-motherhood">
						<div class="col-md-5 pr-2">
							<table class="table table-borderless">
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3" style="width:170px">ID<font class="color-compulsory">*</font> </th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm event-id" placeholder="00" name="events_id" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_id']) && $fetched_row['event_id'] != "") ? $fetched_row['event_id'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Name <font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="YearMonthDay Event Name" name="events_name" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_name']) && $fetched_row['event_name'] != "") ? $fetched_row['event_name'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Title<font class="color-compulsory">*</font> </th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Title" name="events_title" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_title']) && $fetched_row['event_title'] != "") ? $fetched_row['event_title'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Slug<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="/events/slug" name="events_slug" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_slug']) && $fetched_row['event_slug'] != "") ? $fetched_row['event_slug'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Meta Title<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Meta title" name="events_meta_title" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_meta_title']) && $fetched_row['event_meta_title'] != "") ? $fetched_row['event_meta_title'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3" style="width:127px">Meta Description<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Meta description" name="events_meta_description" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_meta_description']) && $fetched_row['event_meta_description'] != "") ? $fetched_row['event_meta_description'] : ''; ?>" required>
									</td>
								</tr>						
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Meta Keyword<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Keyword searching" name="events_meta_keyword" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_meta_keyword']) && $fetched_row['event_meta_keyword'] != "") ? $fetched_row['event_meta_keyword'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Banner<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Main banner" name="events_banner" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_banner']) && $fetched_row['event_banner'] != "") ? $fetched_row['event_banner'] : '#'; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Mini Banner</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Mini banner below page" name="events_mini_banner" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_mini_banner']) && $fetched_row['event_mini_banner'] != "") ? $fetched_row['event_mini_banner'] : '0'; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Default<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="lang text" name="events_default" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_default']) && $fetched_row['event_default'] != "") ? $fetched_row['event_default'] : '0'; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Banner URL Link</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Event URL" name="events_url" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_url']) && $fetched_row['event_url'] != "") ? $fetched_row['event_url'] : '0'; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Start Date<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm event-start-date" placeholder="Year-Month-Day H:m:s" name="events_start_date" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_start_date']) && $fetched_row['event_start_date'] != "") ? $fetched_row['event_start_date'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">End Date<font class="color-compulsory">*</font></th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm event-end-date" placeholder="Year-Month-Day H:m:s" name="events_end_date" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_end_date']) && $fetched_row['event_end_date'] != "") ? $fetched_row['event_end_date'] : ''; ?>" required>
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Email Template</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Auto Email After Submit" name="events_email_template" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_email_template']) && $fetched_row['event_email_template'] != "") ? $fetched_row['event_email_template'] : ''; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Submit Message</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Message pop-up after submit" name="events_submit_msg" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_submit_msg']) && $fetched_row['event_submit_msg'] != "") ? $fetched_row['event_submit_msg'] : ''; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">BG Color</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Color Code" name="backgroundcolor" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['backgroundcolor']) && $fetched_row['backgroundcolor'] != "") ? $fetched_row['backgroundcolor'] : ''; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Float Ball</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Float Ball Image" name="customfloatingball" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['custom_floating_ball']) && $fetched_row['custom_floating_ball'] != "") ? $fetched_row['custom_floating_ball'] : ''; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Float Ball Link</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<input type="text" class="form-control form-control-sm" placeholder="Float Ball Link" name="customfloatingballlink" value="<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['custom_floating_ball_link']) && $fetched_row['custom_floating_ball_link'] != "") ? $fetched_row['custom_floating_ball_link'] : ''; ?>">
									</td>
								</tr>
								<tr>
									<th class="pt-2 pb-2 pr-3 pl-3">Status</th>
									<td class="pt-2 pb-2 pr-3 pl-3">
										<select class="form-control form-control-sm" name="events_active">
											<option value="1" <?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_active']) && $fetched_row['event_active'] == 1) ? 'selected="selected"' : ''; ?>>Active</option>
											<option value="0" <?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_active']) && $fetched_row['event_active'] == 0) ? 'selected="selected"' : ''; ?>>Inactive</option>
										</select>
									</td>
								</tr>
								<tr>
									
									<td class="pt-2 pb-2 pr-3 pl-3 text-center" colspan="2">
										<a href="events_index.php" class="btn btn-danger btn-sm"><i class="fas fa-list"></i> &nbsp;Back to list</a>
										<button type="submit" name="btn-update" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> &nbsp; <?php echo (isset($editId) && $editId > 0) ? 'Update Event' : 'Add Event' ?></button>
										<?php 
											if(isset($editId) && $editId > 0)
											{
											?>
												<a href="http://<?php echo $_SERVER[HTTP_HOST]?>/events/<?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_slug']) && $fetched_row['event_slug'] != "") ? $fetched_row['event_slug'] : ''; ?>" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-atlas"></i> &nbsp;View page</a>
											<?php
											}
										?>
									</td>
								</tr>
							</table>
						</div>
						<div class="col-md-7">
							 <textarea name="events_description" rows="35" cols="50"><?php echo (isset($fetched_row) && is_array($fetched_row) && isset($fetched_row['event_description']) && $fetched_row['event_description'] != "") ? $fetched_row['event_description'] : ''; ?></textarea>
						</div>
				</div>
			</form>
		</div>
    </main><!-- /.container -->
	<script type="text/javascript">

	$(function(){
		
		$('body').find('.event-start-date, .event-end-date').inputmask('datetime', {
			alias 		 :'datetime',
			inputFormat  : "yyyy-mm-dd HH:MM:ss", 
			outputFormat : "yyyy-mm-dd HH:MM:ss",
			leapday: "29.02."
		})
	});
	</script>
  </body>
</html>
