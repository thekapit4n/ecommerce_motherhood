<?php
	include 'events_db_config.php';
	
	
	/* if (isset($_POST['eventID']) && $_POST['eventID'] > 0)
	{
		$eventID 	 = trim($_POST['eventID']);
		$whereReport = ($whereReport == '' ? ' WHERE ' : ' AND ') . '`subscriber_event_id` = "' . trim($eventID) . '" ';
		$sqlreport	 =  "SELECT b.`event_name`, CONCAT(c.firstname, c.lastname) AS NAME, c.email, IF(d.phone = '', phone_mobile, phone) AS phone, a.*
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
			// while ($row = $result->fetch_row()) 
			while ($row = mysqli_fetch_row($result)) {
				echo "<pre>";
				print_r($row);
				echo "</pre>";
			}
			$result->close();
			mysqli_close($conn);
		}
	}
	else
	{
		die("no data available.");
	} */
	
	
	
	/* function mysql_result_all_html($result) {
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
	} */
	
	
	echo '
	{
	  "draw": 1,
	  "recordsTotal": 57,
	  "recordsFiltered": 57,
	  "data": [
		[
		  "Airi",
		  "Satou",
		  "Accountant",
		  "Tokyo",
		  "28th Nov 08",
		  "$162,700"
		],
		[
		  "Angelica",
		  "Ramos",
		  "Chief Executive Officer (CEO)",
		  "London",
		  "9th Oct 09",
		  "$1,200,000"
		],
		[
		  "Ashton",
		  "Cox",
		  "Junior Technical Author",
		  "San Francisco",
		  "12th Jan 09",
		  "$86,000"
		],
		[
		  "Bradley",
		  "Greer",
		  "Software Engineer",
		  "London",
		  "13th Oct 12",
		  "$132,000"
		],
		[
		  "Brenden",
		  "Wagner",
		  "Software Engineer",
		  "San Francisco",
		  "7th Jun 11",
		  "$206,850"
		],
		[
		  "Brielle",
		  "Williamson",
		  "Integration Specialist",
		  "New York",
		  "2nd Dec 12",
		  "$372,000"
		],
		[
		  "Bruno",
		  "Nash",
		  "Software Engineer",
		  "London",
		  "3rd May 11",
		  "$163,500"
		],
		[
		  "Caesar",
		  "Vance",
		  "Pre-Sales Support",
		  "New York",
		  "12th Dec 11",
		  "$106,450"
		],
		[
		  "Cara",
		  "Stevens",
		  "Sales Assistant",
		  "New York",
		  "6th Dec 11",
		  "$145,600"
		],
		[
		  "Cedric",
		  "Kelly",
		  "Senior Javascript Developer",
		  "Edinburgh",
		  "29th Mar 12",
		  "$433,060"
		],
		[
		  "Cedric1",
		  "Kelly1",
		  "Senior Javascript Developer1",
		  "Edinburgh",
		  "29th Mar 12",
		  "$433,060"
		],
		[
		  "Cedric2",
		  "Kelly2",
		  "Senior Javascript Developer1",
		  "Edinburgh",
		  "29th Mar 12",
		  "$433,060"
		]
	  ]
	}'
?>
