<?php
	require_once("header-ngconnect-report.php");
	$wheresql  	 	= "";
	$limitsql    	= "LIMIT 500";
	
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	
	$no_of_records_per_page = 500;
	if(isset($_POST['title']) && $_POST['title'] != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "title LIKE '%" . $conn->real_escape_string(trim($_POST['title'])) . "%'";
	}
	else
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "title != ''";
	}
	
	
	$groupBy = " GROUP BY title ";
					
	// if($searchStart != '')
	// {
		// $wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
	// }
	
	// if($searchEnd != '')
	// {
		// $wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
	// }
	
	// if($searchStart == '' && $searchEnd == '')
	// {
		// $wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '2021-05-12 00:00:00'";
	// }
	
	$urlPagination = "";
	if(isset($pageno) && $pageno > 0)
	{
		$urlPagination .= ($urlPagination == "" ? '?' : '&') . "pageno=";
	}
	
	$sqltotalCount	  = "SELECT COUNT(*) AS total FROM (SELECT DISTINCT(title) FROM `com.ads`.tbl_ads_form_submit" . $wheresql . "  ORDER BY form_adddate ASC " . $limitsql . ") AS a";
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
	
	$sql = "SELECT title FROM `com.ads`.tbl_ads_form_submit " . $wheresql . $groupBy;
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
		$table .= "<table class='table-bordered table-sm' style='width:100%'>";
		$table .= "<tr style='background-color:#ffe1e7;color:#265e70;'>";
		$table .= "<th>No.</th>";
		# for header
		for ($i = 0; $i < $noFields; $i++) {
			$field 	= mysqli_field_name($result, $i);
			$table .= "<th>" . $field . "</th>";
			
		}
		$table .= "<th>Actions</th>";
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
			$table .= "<td><a href='report_details.php?q=" . urlencode($kolonne) ."'class='btn btn-primary btn-sm'>See details</a></td>";
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
	
			<form id="form-request" method='post' action="report_list.php">
				<div class="row row-motherhood">
					<div class="col-md-8">
						<div class="form-group">
							<label for="title-article">Title</label>
							<input type="text" class="form-control" id="title-article"  name="title" value="<?php echo (isset($_POST['title']) && $_POST['title'] != '') ? $_POST['title'] :'' ?>">
						</div>
					</div>
				</div>
				<div class="row row-motherhood">
					<div class="col-md-6 text-left">
						<button type="button" class="btn btn-info btn-clear btn-sm">Clear </button>
						<button type="submit" id="btn-submit" class="btn btn-success btn-sm"> Submit </button>
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
	$(function(){
		$('body').on('click', '.btn-clear', function(){
			$('#title-article').val('');
			$('#form-request').submit();
		})
		
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
