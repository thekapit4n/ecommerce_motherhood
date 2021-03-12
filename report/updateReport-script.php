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

$kmmlist = array(
	"216401"=>"haifaaizzatie@gmail.com",
	"216930"=>"mableloke@gmail.com",
	"216934"=>"pohpoh727@gmail.com",
	"216935"=>"sanchelaloke@gmail.com",
	"217728"=>"hhaikalharraz@gmail.com",
	"216413"=>"qasehdelisha18@gmail.com",
	"242827"=>"sofeazarra14@gmail.com",
	"216420"=>"rozinonny90@gmail.com",
	"216949"=>"ayena71@gmail.com",
	"218940"=>"nicole_ng86@hotmail.com",
	"216431"=>"atulnad@gmail.com",
	"216446"=>"weng251@gmail.com",
	"217967"=>"fadhleemohd@gmail.com",
	"216478"=>"sarimahmatkasim@gmail.com",
	"217748"=>"amirahsazali2@gmail.com",
	"217974"=>"assmanizan5304@gmail.com",
	"216975"=>"asikinnorasikin27@gmail.com",
	"217007"=>"sabyroslan@gmail.com",
	"216530"=>"dianacozt9@gmail.com",
	"216533"=>"hazdazrulhafiz@yahoo.com",
	"216535"=>"tuanruzainituanteh@yahoo.com",
	"216549"=>"jesstine_goh@yahoo.com",
	"216550"=>"suzila_suzy@yahoo.com",
	"218002"=>"amiraidora94@gmail.com",
	"220162"=>"sitinabilla1714@gmail.com",
	"218952"=>"ccw90@hotmail.com",
	"216562"=>"nicolelow89@gmail.com",
	"216564"=>"yana95parema@gmail.com",
	"216569"=>"suzanne5796@hotmail.com",
	"216571"=>"jeane894@gmail.com",
	"217043"=>"wonderwaiss3@gmail.com",
	"217050"=>"tsl_86@hotmail.com",
	"217469"=>"izzahmunira@gmail.com",
	"217053"=>"ross_6685@yahoo.com",
	"217054"=>"umihaizah97@gmail.com",
	"217056"=>"lydiaepin36@gmail.com",
	"217063"=>"izzibam94@gmail.com",
	"216595"=>"eyzma91@gmail.com",
	"218388"=>"uswahaslan@gmail.my",
	"217477"=>"malieyn9407@gmail.com",
	"217089"=>"nuraflahacherameli@gmail.com",
	"219427"=>"izumika91@yahoo.com",
	"219430"=>"nurulhasanahmohdhariri@gmail.com",
	"217110"=>"agnes.snoopy@yahoo.com",
	"217500"=>"baobei26@hotmail.com",
	"217502"=>"sitiamira1819@gmail.com",
	"216656"=>"ongttheng@gmail.com",
	"217503"=>"laitiam91@gmail.com",
	"220287"=>"tsimpurple330@gmail.com",
	"217119"=>"soesannajwa@gmail.com",
	"217122"=>"nurhanilufti@yahoo.com",
	"217832"=>"maiogie898@gmail.com",
	"216659"=>"ismadianna@gmail.com",
	"217523"=>"soekkim@gmail.com",
	"218814"=>"sitizulaika503@gmail.com",
	"217152"=>"emahdeqmah211@gmail.com",
	"217545"=>"adeliaeryna87@icloud.com",
	"218053"=>"naydaniellah@gmail.com",
	"217547"=>"emmaawe1987@gmail.com",
	"217572"=>"almabaki1867@gmail.com",
	"218851"=>"sopheahumaira@gmail.com",
	"217586"=>"ee_chen1@hotmail.com",
	"216753"=>"nizamjohor@yahoo.com",
	"216757"=>"suzysuryani98@gmail.com",
	"217891"=>"wahidaadxkkk@icloud.com",
	"217893"=>"queenielim0830@gmail.com",
	"216759"=>"chisiska79@gmail.com",
	"217913"=>"nias.ayuni@yahoo.com",
	"216790"=>"ykien0316@gmail.com",
	"216816"=>"longcatherine1@gmail.com",
	"217273"=>"enghuong1987@gmail.com",
	"216252"=>"xinyetoh@gmail.com",
	"216253"=>"sitimariamjamil4@gmail.com",
	"216359"=>"asiahmohd91@gmail.com",
	"216257"=>"ummuariffen@gmail.com",
	"216260"=>"ersyakhaira.ek@gmail.com",
	"216261"=>"suehuici86@gmail.com",
	"216271"=>"85atiarozita@gmail.com",
	"216273"=>"motecgurl@gmail.com",
	"217291"=>"beety_edora@yahoo.com",
	"216857"=>"nelytoyo86@gmail.com",
	"216292"=>"mirazelani@yahoo.com",
	"216295"=>"norhidayatijudie@gmail.com",
	"216305"=>"woon_0806@hotmail.com",
	"216308"=>"verra6008@gmail.com",
	"216322"=>"mushlarahman1606@gmail.com",
	"218116"=>"diziekieyns@gmail.com",
	"218921"=>"indahbeoboi185@gmail.com",
	"216333"=>"abangman202@gmail.com",
	"217945"=>"oppokingboy@gmail.com",
	"217699"=>"jusohsuriani1987@gmail.com",
	"216354"=>"ukhtihariasalamat88@gmail.com",
	"216353"=>"shelaakadir1995@gmail.com",
	"218174"=>"juerazis01@gmail.com",
	"216371"=>"keisyaafia@yahoo.com",
	"217362"=>"bluryih@hotmail.com",
	"217365"=>"nurarisyah5628@icloud.com",
	"217717"=>"winniec902@hotmail.com",
	"216914"=>"eleesa_lee@yahoo.com",
	"216927"=>"noraramly80@gmail.com",

);

$kmmlist2 = array();
foreach($kmmlist as $subcriberid => $email)
{
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	$sql = "SELECT 
			subscriber_id, subscriber_created_at, subscriber_updated_at, subscriber_event_id, newFirstName, newLastName,  subscriber_question4
			FROM ps_events_subscriber a 
			WHERE 1=1 AND subscriber_event_id=115 
			AND newEmail = '" .  $email . "' AND subscriber_id = '" . $subcriberid . "' LIMIT 1";
	$result = $conn->query($sql);
	
	while ($r = $result->fetch_row()) {
		foreach ($r as $indx => $kolonne) {
		
			if($indx == 0){
				$subscriber_id = $kolonne;
				
			}
			
			if($indx == 1)
			{
				$subscriber_created 	 = $kolonne;
				$subscriber_created_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_created   = '2021-03-04 ' . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = '2021-03-04 ' . $subscriber_updated_time;
			}
			
			if($indx == 3)
			{
				$subscriber_eventid = $kolonne;
				
			}
		}
	}
	
	if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	{
		$sqlUpdate   = "UPDATE ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		$queryUpdate = $conn->query($sqlUpdate);
		// echo $subscriber_id . " --- updated";
		// echo $sqlUpdate . "<br><br>";
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