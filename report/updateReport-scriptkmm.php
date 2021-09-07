<?php 
$user = "c0kElaB94";
$pass = "B3}W[f}x#7OP";

$host = "10.148.0.7";
$dbname = "com.kelabmama";

$conn2 = mysqli_connect($host, $user, $pass,$dbname);

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
"97111"=>"naddya503@gmail.com",		
"97112"=>"zakirahzulcafle@gmail.com",		
"97113"=>"norainisafar96@gmail.com",		
"97114"=>"tiangletrik00@gmail.com",		
"97115"=>"nurhanisahbakre00@gmail.com",		
"97116"=>"mergavin88@gmail.com",		
"97119"=>"norhayati.sabtal@gmail.com",		
"97120"=>"susulaiman83@gmail.com",		
"97121"=>"fatihahkhairi95@gmail.com",		
"97122"=>"shafiqa1411@gmail.com",		
"97123"=>"sofeanajihah8@gmail.com",		
"97124"=>"yasminisec@gmail.com",		
"97125"=>"enyrahman555@gmail.com",		
"97126"=>"syazwanashafie@gmail.com",		
"97127"=>"adelinealicia96@gmail.com",		
"97128"=>"sitimardhiyanahothman@gmail.com",		
"97129"=>"shimah090@gmail.com",		
"97131"=>"sanihohi1996@gmail.com",		
"97132"=>"rosmalinimohamad774@gmail.com",		
"97133"=>"michelledbergh@gmail.com",		
"97134"=>"aina921@gmail.com",		
"97135"=>"nurulhusna1292@gmail.com",		
"97136"=>"hudaishak94@gmail.com",		
"97137"=>"halminbaco1981@icloud.com",		
"97138"=>"sufianazlin@gmail.com",		
"97139"=>"missain871218@gmail.com",		
"97140"=>"nurhayfaabdurajak@gmail.com",		
"97141"=>"sitinoraniza69@gmail.com",		
"97142"=>"puterizarazinnirah@gmail.com",		
"97143"=>"farahim1106@gmail.com",		
"97144"=>"farahzanordin_96@yahoo.com",		
"97145"=>"aminwanted1984@gmail.com",		
"97146"=>"nurhazleen.ghazali@gmail.com",		
"97147"=>"rozietarozie@gmail.com",		
"97148"=>"najihah96qisha@gmail.com",		
"97149"=>"xianyanglee06@gmail.com",		
"97150"=>"flowerlee.1974@gmail.com",		
"97151"=>"rosnahrahman97@gmail.com",		
"97152"=>"izzatulainrahayu@gmail.com",		
"97153"=>"fendyana80@gmail.com",		
"97154"=>"syazwannirohizat96@gmail.com",		
"97155"=>"syasya_queen90@yahoo.com",		
"97156"=>"aintajuddin97@gmail.com",		
"97157"=>"norhazwani.90@icloud.com",		
"97158"=>"fikharamlee@gmail.com",		
"97160"=>"snurhamila@yahoo.com",		
"97161"=>"ainadha37@gmail.com",		
"97162"=>"syamimizuhairah388@gmail.com",		
"97163"=>"mrybetong@gmail.com",		
"97164"=>"raudhah.nadhirah@icloud.com",		
"97170"=>"nurkharunisa123@gmail.com",		
"97171"=>"hidayah.sahrin@gmail.com",		
"97172"=>"sitiz_nani91@yahoo.com",		
"97173"=>"zieyman1412@gmail.com",		
"97174"=>"shazlynazulkifli95@gmail.com",		
"97176"=>"adahintan@gmail.com",		
"97178"=>"sitinurnajihah088@gmail.com",		
"97179"=>"shazuanie.std@gmail.com",		
"97180"=>"dinebielubin@gmail.com",		
"97181"=>"nurula1991@gmail.com",		
"97182"=>"syuhadaazaha@gmail.com",		
"97183"=>"badrul1984@icloud.com",		
"97184"=>"satriasipedangsetan@rocketmail.com",		
"97186"=>"tiniekartinie0157@gmail.com",		
"97187"=>"qieellys80@gmail.com",		
"97188"=>"halimatonn1998@gmail.com",		
"97189"=>"eyzaazaa898@gmail.com",		
"97190"=>"kkunorazreena@yahoo.com",		
"97191"=>"arfazainalabidin@gmail.com",		
"97192"=>"nurhazirahmuhdmazlan@gmail.com",		
"97193"=>"wa2_ganu@yahoo.com",		
"97194"=>"shakinahsarif536@gmail.com",		
"97196"=>"noorlijahjal@gmail.com",		
"97197"=>"iamannisa96@gmail.com",		
"97198"=>"yanaaghani@gmail.com",		
"97199"=>"raaaa930603@gmail.com",		
"97200"=>"selfiaaniq@gmail.com",		
"97202"=>"yusnidaperkeso@gmail.com",		
"97203"=>"ziqahaziqa94@gmail.com",		
"97205"=>"nurs55165@gmail.com",		
"97206"=>"angeliekevin99@gmail.com",		
"97207"=>"maizannzahedin@gmail.com",		
"97208"=>"sharifahbolkiah2@gmail.com",		
"97209"=>"gracyab123@gmail.com",		
"97210"=>"yanizam03@gmail.com",		
"97211"=>"brendachrlyenjaniun123@gmail.com",		
"97212"=>"nurulque23@gmail.com",		
"97213"=>"rayyrizq05@icloud.com",		
"97214"=>"ieda.nordin855@gmail.com",		
"97215"=>"suhada8583@gmail.com",		
"97216"=>"mimiliyana65@gmail.com",		
"97217"=>"syahidah0101@gmail.com",		
"97218"=>"sufiaidris31@gmail.com",		
"97219"=>"nurfarinaaseri@gmail.com",		
"97220"=>"nuwairahothman93@gmail.com",		
"97221"=>"azierah2301@gmail.com",		
"97222"=>"annebeby99@gmail.com",		
"97224"=>"nuratiqah_asmadi@yahoo.com",		
"97225"=>"erinshafika0@gmail.com",		
"97226"=>"syakilashahar@gmail.com",		
"97227"=>"mspoyo909@gmail.com",		
"97228"=>"subaiyyi@gmail.com",		
"97229"=>"amalinashauri@yahoo.com",		
"97230"=>"aleeshanafeesha420@gmail.com",		
"97231"=>"aifaizalfamily88@gmail.com",		
"97232"=>"shachakieynah@gmail.com",		
"97233"=>"evieyabby@gmail.com",		
"97234"=>"fifakasim@gmail.com",		
"97235"=>"anisyusuf08@gmail.com",		
"97236"=>"atiqahammar16@gmail.com",		
"97237"=>"aztlshhrh@gmail.com",		
"97238"=>"akmal.diyana96@gmail.com",		
"97239"=>"ish636@yahoo.com",		
"97240"=>"zzira0504@gmail.com",		
"97241"=>"aimihariz8987@gmail.com",		
"97242"=>"tasha9477@gmail.com",		
"97244"=>"nurulfarini97@gmail.com",		
"97245"=>"suzanamohdsaid85@gmail.com",		
"97246"=>"nszshuhada@gmail.com",		
"97247"=>"ziraazmichannel@gmail.com",		
"97248"=>"jasmani@yahoo.com",		
"97249"=>"elisarubenkhalid@gmail.com",		
"97250"=>"hannzaidi86@gmail.com",		
"97251"=>"amaanisorgga@gmail.com",		
"97252"=>"zananur 85@gmail.com",		
"97253"=>"legacysyira@gmail.com",		
"97254"=>"normazilah74@gmail.com",		
"97255"=>"salmahmdzalan@gmail.com",		
"97256"=>"saedahhusin540@gmail.com",		
"97258"=>"izzatyzulkarnain4@gmail.com",		
"97259"=>"nanaroanna81@gmail.com",		
"97260"=>"nornoraminah91@gmail.com",		
"97261"=>"nurfarahinannuar9241@gmail.com",		
"97262"=>"norhayatirazali87@gmail.com",		
"97263"=>"norhaslindadora@gmail.com",		
"97264"=>"suhadahshafirah@gmail.com",		
"97265"=>"newphone26520@gmail.com",		
"97266"=>"irafis1415@gmail.com",		
"97267"=>"rohayahasbullah87@gmail.com",		
"97269"=>"anissmunirah@gmail.com",		
"97270"=>"aishaaferdauz30@gmail.com",		
"97271"=>"nazilanazwa@gmail.com",		
"97273"=>"usreena226@gmail.com",		
"97274"=>"nursyahiramansor@icloud.com",		
"97275"=>"nurul@dowletwood.net",		
"97276"=>"nurulainyusuf275@gmail.com",		
"97277"=>"salinaaa1999@gmail.com",		
"97278"=>"apple88gurlz@gmail.com",		
"97279"=>"minieylieyza@gmail.com",		
"97281"=>"syarifahmona04@gmail.com",		
"97282"=>"norsyafikah514@gmail.com",		
"97283"=>"nurul.fatihah5590@gmail.com",		
"97284"=>"rajafarahrajahassan@gmail.com",		
"97285"=>"nurulsyafiqahbaba@gmail.com",		
"97286"=>"illynajiha@rocketmail.com",		
"97287"=>"aamrlia6@gmail.com",		
"97288"=>"sitisyafeirarosli93@yahoo.com",		
"97290"=>"hasnulhaniey515@gmail.com",		
"97291"=>"anizahabdin@gmail.com",		
"97292"=>"saenimaria@gmail.com",		
"97293"=>"raznisyahira96@gmail.com",		
"97294"=>"sheelee91@gmail.com",		
"97295"=>"adrianmiguelcynthiajane@gmail.com",		
"97296"=>"izzahazrin08@gmail.com",		
"97298"=>"natasha021203@icloud.com",		
"97299"=>"justinaangelia@gmail.com",		
"97300"=>"xmelinx@yahoo.com",		
"97301"=>"payohteh67@gmail.com",		
"97302"=>"syikinzaim62@gmail.com",		
"97303"=>"sarahabdullah619@gmail.com",		
"97304"=>"hamsterkiut90@gmail.com",		
"97305"=>"dianaanaa039@gmail.com",		
"97306"=>"masyha00@gmail.com",		
"97307"=>"qhanaem12@gmail.com",		
"97308"=>"laddyfizza@yahoo.com",		
"97309"=>"nazihahnazri95@gmail.com",		
"97310"=>"leezayusof87@gmail.com",		
"97311"=>"bininyanuh@gmail.com",		
"97313"=>"noraisahsiti2@gmail.com",		
"97314"=>"shima1604@gmail.com",		
"97315"=>"safuanraizul3@gmail.com",		
"97316"=>"syasyafaez@gmail.com",		
"97317"=>"waniesa1288@gmail.com",		
"97318"=>"violet.ainna@gmail.com",		
"97319"=>"anisnadya88@gmail.com",		
"97320"=>"nabilabintirazali234@gmail.com",		
"97321"=>"zaitiredhuan@gmail.com",		
"97322"=>"eykaahmoy28@gmail.com",		
"97323"=>"ishaknadirah@gmail.com",		
"97324"=>"norizan88@gmail.com",		
"97325"=>"nurazlinabdhamid@gmail.com",		
"97327"=>"nurnabihah290@gmail.com",		
"97329"=>"ryiena88@gmail.com",		
"97330"=>"zaitom@moh.gov.my",		
"97331"=>"hazleennur92@gmail.com",		
"97332"=>"syiellz85@gmail.com",		
"97334"=>"nurzaini1988@gmail.com",		
"97335"=>"miyaadriana6@gmail.com",		
"97336"=>"rasmaemma85@gmail.com",		
"97337"=>"malindawatisiti@gmail.com",		
"97338"=>"nyuinwyin@gmail.com",		
"97339"=>"faredhya@gmail.com",		
"97340"=>"shaherasharip985@gmail.com",		
"97342"=>"byla866@gmail.com",		
"97344"=>"aliashazwani96@gmail.com",		
"97345"=>"dilacutedila43@gmail.com",		
"97346"=>"zila.aziz87@gmail.com",		
"97347"=>"princessnur06@gmail.com",		
"97349"=>"suzanaizham3@gmail.com",		
"97350"=>"norlailanordin014@gmail.com",		
"97351"=>"fatinazhana@gmail.com",		
"97352"=>"shaasyazwan@gmail.com",		
"97353"=>"adamzubeer77@gmail.com",		
"97355"=>"farhanmohamad235@gmail.com",		
"97357"=>"all.star407737@gmail.com",		
"97358"=>"puterihashim94@gmail.com",		
"97359"=>"dannyphenomenal@gmail.com",		
"97360"=>"nursyabillah@gmail.com",		
"97361"=>"noranisha97@gmail.com",		
"97363"=>"mariatulfathiah95@gmail.com",		
"97365"=>"hannysyahkina@gmail.com",		
);

$kmmlist2 = array();
$count = 0;
foreach($kmmlist as $subcriberid => $email)
{
	++$count;
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	
	if($count <= 100)
	{
		$date = '2021-09-01 ';
	}
	elseif($count > 200 && $count <= 300)
	{
		$date = '2021-09-02 ';
	}
	elseif($count > 300 && $count <= 400)
	{
		$date = '2021-09-03 ';
	}
	/* elseif($count > 387 && $count <= 516)
	{
		$date = '2021-07-04 ';
	}
	elseif($count > 516 && $count <= 645)
	{
		$date = '2021-07-05 ';
	} */
	else
	{
		$date = '2021-09-04 ';
	}
	
	
	
	$sql = "SELECT 
			subscriber_id,
			subscriber_created_at,
			subscriber_updated_at,
			subscriber_event_id
		FROM
			 events_subscriber a
		WHERE
			1 = 1 AND subscriber_event_id = 1
			AND newEmail = '" .  $email . "' AND subscriber_id = '" . $subcriberid . "' LIMIT 1";
	
	$result = $conn2->query($sql);
	
	
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
				$newsubscriber_created   = $date . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = $date . $subscriber_updated_time;
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
		$sqlUpdate   = "UPDATE  events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		echo $sqlUpdate . "<br><br>";
		$queryUpdate = $conn2->query($sqlUpdate);
		echo $subscriber_id . " --- updated";
	
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