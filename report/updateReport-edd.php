<?php 

include '../admin2635/dashboard/events/events_db_config.php';

if ($_POST['export']){
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=report.xls");
}
header("Pragma: no-cache");
header("Expires: 0");
$productList = array();

error_reporting(E_ALL &~E_NOTICE);
ini_set('display_errors', '1');
set_time_limit(0);

$sql    = "SELECT subscriber_id, subscriber_question2, subscriber_question18, subscriber_question19, newEmail
			FROM motherhood_presta.ps_events_subscriber 
			WHERE subscriber_event_id = 98 AND
			subscriber_id IN (
				SELECT MAX(subscriber_id)
				FROM motherhood_presta.ps_events_subscriber 
				WHERE subscriber_event_id = 98
				GROUP BY newEmail
			)
			ORDER BY subscriber_id DESC";
$result = $conn->query($sql);
$count = 0;
$count2 = 0;
while ($r = mysqli_fetch_row($result)) {
	foreach ($r as $indx => $kolonne) {

		if($indx == 0)
		{
			$subscriber_idfrom = $kolonne;
		}

		if($indx == 1)
		{
			$edddate = $kolonne;
		}

		if($indx == 2)
		{
			$mombrandmilk = $kolonne;
		}
		
		if($indx == 3)
		{
			$kidsbrandmilk = $kolonne;
		}
		
		if($indx == 4)
		{
			$newEmail = $kolonne; 
		}

	}

	$sql2    = "SELECT subscriber_id, newEmail  FROM motherhood_presta.ps_events_subscriber WHERE subscriber_event_id = 100 AND newEmail = '" . $newEmail . "'  order by subscriber_id DESC  LIMIT 1";
	$result2  = $conn->query($sql2);

	while ($r2 = mysqli_fetch_row($result2)) {
		foreach ($r2 as $indx2 => $kolonne2) {
			if($indx2 == 0)
			{
				$subscriberid = $kolonne2;
			}

			if($indx2 == 1)
			{
				$email = $kolonne2;
			}
		}
	} 
	
	$sqlUpdate   = "UPDATE  motherhood_presta.ps_events_subscriber SET subscriber_question18 = '" . $mombrandmilk . "', subscriber_question19 = '" . $kidsbrandmilk . "', subscriber_question20 = '" . $edddate . "' WHERE `subscriber_id` = " . $subscriberid . " AND `subscriber_event_id` = 100 LIMIT 1";
	// $queryUpdate = $conn->query($sqlUpdate);
	
	$sqlUpdate2   = "UPDATE  motherhood_presta.ps_events_subscriber SET subscriber_question29 = 'exported_to_event_id_100' WHERE `subscriber_id` = " . $subscriber_idfrom . " AND `subscriber_event_id` = 98 LIMIT 1";
	// $queryUpdate2 = $conn->query($sqlUpdate2);
	
	// echo ++$count2 . ") Index = " . $subscriberid . "[event id : 100] " . $subscriber_idfrom . " [event id : 98]"  . " --- updated <br/>";
	// print_r($queryUpdate);
	// print_r($queryUpdate2);
}

$result->close();
mysqli_close($conn);

?>