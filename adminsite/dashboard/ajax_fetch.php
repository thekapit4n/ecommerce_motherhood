<?php
	include 'events_db_config.php';
	header("Pragma: no-cache");
	header("Expires: 0");
    error_reporting(E_ALL &~E_NOTICE);
    ini_set('display_errors', '1');
	echo mysqli_error($conn);
	
	$productList  	 = array();
	$whereReport 	 = '';
	$tableReportView = '';
	$whereReport  	  =	($whereReport == '' ? ' WHERE ' : ' AND ') . 'a.`subscriber_event_id` = "212" ';
	$chunk_size = 500;
	$done = 0;
	$keep_asking_for_data = true;
	$response['data'] = array();
	do{
		$sqlreport	=  "SELECT b.`event_name`, CONCAT(c.firstname, c.lastname) AS NAME, c.email, IF(d.phone = '', phone_mobile, phone) AS phone, a.*
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
								c.id_customer = d.id_customer" . $whereReport . " ORDER BY a.`subscriber_id`DESC  LIMIT " . $done . "," . $chunk_size;
		$result = $conn->query($sqlreport);
		
		$num_rows = mysqli_num_rows($result);
		if($num_rows){
			$done += $num_rows;
			while($row = mysqli_fetch_row($result)){
				$a = array();
				$tr = "";
				$tr .= "<tr>";
				foreach ($row as $val) {
					$tr .= "<td>" . $val . "</td>";
					
				}
				$tr .= "</tr>";
				
				$response['data'][] = $tr;
				
				if(sizeof($response['data']) == 500)
				{
					echo json_encode($response);
					$response['data'] = array();
				}
			}
			
		} else {
			$keep_asking_for_data = false;
		}
		
		mysqli_free_result($result);
	}
	while($keep_asking_for_data);
	
	if(isset($response['data']) && sizeof($response['data']) > 0)
	{
		echo json_encode($response);
		$response['data'] = array();
	}
	
	
	
?>
