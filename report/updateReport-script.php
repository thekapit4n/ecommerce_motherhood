<?php 
// $user = "c0kElaB94";
// $pass = "B3}W[f}x#7OP";

// $host = "10.148.0.7";
// $dbname = "com.kelabmama";

// $conn2 = mysqli_connect($host, $user, $pass,$dbname);

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

$kmmlist = array(
"272380"=>"ayuaneza@gmail.com",
"272381"=>"shadowheaven83@yahoo.com",
"272390"=>"djhuan@hotmail.com",
"272394"=>"crenu89@gmail.com",
"272398"=>"kswee90_@hotmail.com",
"272406"=>"wani.syazni@gmail.com",
"272411"=>"jeanliew30@gmail.com",
"272415"=>"warriorvivavious@gmail.com",
"272426"=>"nuramiraabdullah63@gmail.com",
"272428"=>"azaaj_ahmad@yahoo.com",
"272433"=>"sihadaim2023@gmail.com",
"272436"=>"rifaloving21@gmail.com",
"272444"=>"nareshjeevaalaggan@gmail.com",
"272455"=>"nabilanurainmatnasir@gmail.com",
"272463"=>"nurulasyiqin1114@gmail.com",
"272471"=>"shidagtm@yahoo.com",
"272480"=>"peyzhen0514@gmail.com",
"272504"=>"umiytiara81@gmail.com",
"272527"=>"foongling0911@yahoo.com",
"272534"=>"erniyusnidar93@gmail.com",
"272537"=>"girlgirl825@yahoo.com",
"272540"=>"piabakri88@yahoo.com",
"272550"=>"balqisshah00@gmail.com",
"272554"=>"tsy5278@gmail.com",
"272559"=>"jojoyap0902@gmail.com",
"272566"=>"spkuen@yahoo.com",
"272597"=>"tanslqp@gmail.com",
"272598"=>"shuxian_0605@yahoo.com",
"272606"=>"qissideas@gmail.com",
"272614"=>"nivedha87@yahoo.com",
"272631"=>"gohpeiyee93@gmail.com",
"272640"=>"leewanjiun1017@hotmail.com",
"272655"=>"kellyliqi5482@gmail.com",
"272657"=>"samantha22yeoh@gmail.com",
"272662"=>"shuhui8083@gmail.com",
"272669"=>"tinashinijayadevan@gmail.com",
"272678"=>"amalinanur201@gmail.com",
"272682"=>"vanishakanniah@gmail.com",
"272690"=>"najehanzulkhairi95@gmail.com",
"272696"=>"jasminelee.jm@gmail.com",
"272698"=>"ssbaby21@live.cn",
"272709"=>"ainina.syazwani@yahoo.com",
"272722"=>"sindee0904@gmail.com",
"272727"=>"stephanie1221026@outlook.com",
"272735"=>"ctameena81@yahoo.com",
"272745"=>"hernaherman3@gmail.com",
"272763"=>"azimahtukijan@gmail.com",
"272769"=>"mardhiahrazelan@gmail.com",
"272786"=>"dahlia_alim94@yahoo.com",
"272809"=>"jieyichong@gmail.com",
"272819"=>"cerelvie@gmail.com",
"272835"=>"nurizyan.izyan@gmail.com",
"272843"=>"phuiyiun@yahoo.com.my",
"272844"=>"karisyeoh@gmail.com",
"272854"=>"huijing2672@gmail.com",
"272863"=>"yeken624@gmail.com",
"272878"=>"bernice920328@gmail.com",
"272881"=>"jiawei0818@gmail.com",
"272886"=>"noranizah1989@icloud.com",
"272888"=>"faniehisham@gmail.com",
"272890"=>"meifangchin@hotmail.com",
"272926"=>"sribezt@gmail.com",
"272956"=>"vinnieteoh86@gmail.com",
"272995"=>"yijun_1992@hotmail.com",
"272997"=>"bjevron@gmail.com",
"273014"=>"vyting88@hotmail.com",
"273048"=>"celyn_0805@hotmail.com",
"273093"=>"kwan_7708@yahoo.com.my",
"273105"=>"shannylock@live.com",
"273110"=>"irene900507@gmail.com",
"273126"=>"melissa_bylau@yahoo.com",
"273130"=>"meiyen3807@gmail.com",
"273164"=>"peikshang@yahoo.com",
"273170"=>"berlynyong2828@gmail.com",
"273193"=>"kerliy_86@hotmail.com",
"273206"=>"pong_2772@hotmail.com",
"273216"=>"dye_1990@hotmail.com",
"273237"=>"krcsb238@gmail.com",
"273260"=>"siewing9900@gmail.com",
"273273"=>"sueeng840201gse@gmail.com",

);

$kmmlist2 = array();
$count = 0;
foreach($kmmlist as $subcriberid => $email)
{
	++$count;
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	$sql = "SELECT 
			subscriber_id,
			subscriber_created_at,
			subscriber_updated_at,
			subscriber_event_id
		FROM
			 ps_events_subscriber a
		WHERE
			1 = 1 AND subscriber_event_id = 100
			AND newEmail = '" .  $email . "' AND subscriber_id = '" . $subcriberid . "' LIMIT 1";
	
	$result = $conn->query($sql);
	
	
	// while ($r = $result->fetch_row()) {
	while ($r = mysqli_fetch_row($result)) {
		foreach ($r as $indx => $kolonne) {
		
			if($indx == 0){
				$subscriber_id = $kolonne;
			}
			
			if($indx == 1)
			{
				$subscriber_created 	 = $kolonne;
				$subscriber_created_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_created   = '2021-04-30 ' . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = '2021-04-30 ' . $subscriber_updated_time;
			}
			
			if($indx == 3)
			{
				$subscriber_eventid = $kolonne;
				
			}
		}
	}
	
	echo "subscriber_id = " . $subscriber_id . " subscriber_eventid = " . $subscriber_eventid . " newsubscriber_created = " . $newsubscriber_created . " newsubscriber_update" . $newsubscriber_update . "<br/>";
	if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	{
		$sqlUpdate   = "UPDATE  ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		echo $sqlUpdate . "<br><br>";
		$queryUpdate = $conn->query($sqlUpdate);
		echo $subscriber_id . " --- updated";
		echo $sqlUpdate . "<br><br>";
		print_r($queryUpdate);
	}
}

// $string_email = '';
// $string_email = implode(",", $kmmlist2);

// $sql = "SELECT 
		// subscriber_id, subscriber_created_at, subscriber_updated_at, subscriber_event_id, newFirstName, newLastName,  subscriber_question4
		// FROM ps_events_subscriber a 
		// WHERE 1=1 AND subscriber_event_id=115 
		// AND newEmail IN (" . $string_email . ")";

// $queryResult = $conn->query($sql);

// $count = 0;
// while ($r = mysqli_fetch_row($queryResult)) {
	// $count++;

	// foreach ($r as $indx => $kolonne) {
	
		// if($indx == 0){
			// $subscriber_id = $kolonne;
			
		// }
		
		// if($indx == 1)
		// {
			// $subscriber_created 	 = $kolonne;
			// $subscriber_created_time = date('H:i:s', strtotime($kolonne));
			// $newsubscriber_created   = '2021-03-01 ' . $subscriber_created_time;
		// }
		
		// if($indx == 2)
		// {
			// $subscriber_updated      = $kolonne;
			// $subscriber_updated_time = date('H:i:s', strtotime($kolonne));
			// $newsubscriber_update    = '2021-03-01 ' . $subscriber_updated_time;
		// }
		
		// if($indx == 3)
		// {
			// $subscriber_eventid = $kolonne;
			
		// }
	// }
	
	// if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	// {
		// $sqlUpdate   = "UPDATE ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		// $queryUpdate = $conn->query($sqlUpdate);
		
		// echo $subscriber_id . " --- updated";
		// print_r($queryUpdate);
	// }
// }

$result->close();
mysqli_close($conn);

?>