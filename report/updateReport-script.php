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
"286025"=>"manibardi20@gmail.com",
"286027"=>"suiyee31@gmail.com",
"286029"=>"khairaalesha90@gmail.com",
"286030"=>"teluwaihjinih@yahoo.com",
"286036"=>"fadillah.haroza@gmail.com",
"286038"=>"saffaaina88@gmail.com",
"286042"=>"fongwchi@gmail.com",
"286046"=>"wanshaz7736@gmail.com",
"286049"=>"ccklan58@gmail.com",
"286056"=>"nurulieman125@gmail.com",
"286059"=>"nelybakri@gmail.com",
"286064"=>"amiera_farrah@yahoo.com",
"286069"=>"zawidan86@gmail.com",
"286082"=>"wanie1514@gmail.com",
"286084"=>"zian_noriah@yahoo.com",
"286090"=>"rikkuchyehuan5080@gmail.com",
"286092"=>"irnasofia_93@yahoo.con",
"286094"=>"shirly921002@yahoo.com",
"286099"=>"zika2303@yahoo.com",
"286110"=>"mollycious9112@gmail.com",
"286111"=>"rayyanrezza1314@gmail.com",
"286115"=>"crystal.lc8690@gmail.com",
"286118"=>"muixzddin@gmail.com",
"286128"=>"immural98@gmail.com",
"286134"=>"azlindaumi@gmail.com",
"286140"=>"nurulizaini_ayazi@yahoo.com",
"286141"=>"nurulamanda0028@gmail.com",
"286150"=>"hazieqahnaqibah@yahoo.com",
"286153"=>"norzarinalang81@gmail.com",
"286155"=>"eeshuhuey@yahoo.com",
"286164"=>"xulexylm@gmail.com",
"286173"=>"nadathulsyima18@gmail.com",
"286177"=>"safirah99@gmail.com",
"286178"=>"sitiamira1819@gmail.com",
"286185"=>"cikgadis14@gmail.com",
"286190"=>"hazniyati5906@gmail.com",
"286192"=>"azwayatynor@gmail.com",
"286195"=>"studioni05@gmail.com",
"286204"=>"qasehmyzara@gmail.com",
"286211"=>"misswanie28@gmail.com",
"286216"=>"shlzmnmhn@gmail.com",
"286222"=>"annalau.personal@gmail.com",
"286231"=>"sfarieza@gmail.com",
"286237"=>"cassiec.baby@gmail.com",
"286245"=>"mizahismail@gmail.com",
"286255"=>"nurliyana.ms@gmail.com",
"286260"=>"cloey0602@gmail.com",
"286282"=>"jiun7288@gmail.com",
"286295"=>"hudaishak94@gmail.com",
"286317"=>"zusyamimi@gmail.com",
"286326"=>"annietanep@gmail.com",
"286330"=>"farhanamangsor01@gmail.com",
"286338"=>"fatinmadihahghazali94@gmail.com",
"286340"=>"juliepearl.smile@gmail.com",
"286342"=>"eqeen290590@gmail.com",
"286364"=>"lindylee2950@gmail.com",
"286372"=>"farazillamohdfhadzil@yahoo.com",
"286381"=>"miloice916@hotmail.com",
"286395"=>"jesspang1121@gmail.com",
"286394"=>"leanne_yian@hotmail.com",
"286405"=>"nornasukri@yahoo.com",
"286417"=>"minahspeechless@live.co.uk",
"286418"=>"farahyangghazali@gmail.com",
"286425"=>"aisyahcollection370@gmail.com",
"286430"=>"tiffanyyau1992@gmail.com",
"286436"=>"0309lhm@gmail.com",
"286442"=>"neeta6126@gmail.com",
"286443"=>"chanpeijia44@gmail.com",
"286452"=>"wenwei.001017@gmail.com",
"286462"=>"mamazni83@gmail.com",
"286475"=>"coloursyf@gmail.com",
"286478"=>"swee133@gmail.com",
"286482"=>"xiaoheimao5850@gmail.com",
"286500"=>"kilalabadot@gmail.com",
"286513"=>"qisha1102@gmail.com",
"286521"=>"nurzee17@gmail.com",
"286526"=>"farizue91@gmail.com",
"286536"=>"nurulasyikin_ismail@yahoo.com",
"286540"=>"limin.87@hotmail.com",
"286543"=>"zatyrohim95@gmail.com",
"286548"=>"natralfi@yahoo.com.my",
"286551"=>"secretsyue@gmail.com",
"286556"=>"cindy9190@gmail.com",
"286570"=>"jojorainbow3030@gmail.com",
"286571"=>"hemmavathiy@yahoo.com",
"286574"=>"elaintang9589@gmail.com",
"286577"=>"margaret_kiu@hotmail.com",
"286584"=>"evon89_hhc@hotmail.com",
"286592"=>"zuraiwatimamat@gmail.com",
"286614"=>"chewpeithin96@gmail.com",
"286619"=>"ngjoanne@hotmail.com",
"286629"=>"nieku86@gmail.com",
"286634"=>"eysha.qatrisya@gmail.com",
"286676"=>"izzah96izzati@gmail.com",
"286702"=>"chiteng_wong@hotmail.com",
"286703"=>"amorezikka@gmail.com",
"286711"=>"aisahkaka1728@gmail.com",
"286720"=>"amoiimonoo@gmail.com",
"286722"=>"vickeywongcs@gmail.com",
"286739"=>"irane_92@outlook.my",
"286749"=>"nurazlin359@gmail.com",
"286757"=>"quraisyashahrin@gmail.com",
"286769"=>"yo.s.frendzzz@gmail.com",
"286782"=>"mm700510@gmail.com",
"286804"=>"farhainhse@gmail.com",
"286806"=>"yatie3252@gmail.com",
"286810"=>"lihuanchin73@gmail.com",
"286834"=>"a01076871315@gmail.com",
"286837"=>"pheylin0503@gmail.com",
"286845"=>"amalinaakmal101@gmail.com",
"286851"=>"sweethanie1989@gmail.com",
"286855"=>"zafirahzulkeple@gmail.com",
"286860"=>"erryjake46@gmail.com",
"286863"=>"ayuazhani06@gmail.com",
"286878"=>"seraiwanginuromey@yahoo.com",
"286887"=>"amirazety92@gmail.com",
"286897"=>"asimarembau@gmail.com",
"286908"=>"fslaida@gmail.com",
"286918"=>"css_sue@hotmail.com",
"286926"=>"izzarinalatif@yahoo.com",
"286931"=>"chezewei7820@gmail.com",
"286936"=>"aidillah_94@yahoo.com",
"286978"=>"nanalieyana86@gmail.com",
"286988"=>"cindy@tlink.com.my",
"286999"=>"cikzura193@gmail.com",
"287004"=>"cthananurain890@gmail.com",
"287014"=>"prestimega.akilahrazak@gmail.com",
"287020"=>"emely.yin@gmail.com",
"287024"=>"rafidahnoorazam1997@gmail.com",
"287025"=>"nurarifahtulasliza@gmail.com",
"287047"=>"amellia9664@gmail.com",
"287049"=>"qaseh439@gmail.com",
"287056"=>"latifahhajiariffin@yahoo.com",
"287069"=>"ctieyafieykah78@gmail.com",
"287080"=>"slchew89@hotmail.com",
"287083"=>"eyllashahrul@gmail.com",
"287093"=>"miissyumi95@gmail.com",
"287116"=>"karynnjx@gmail.com",
"287119"=>"fareesyasyadza@gmail.com",
"287130"=>"yuqinlau85@gmail.com",
"287149"=>"ngsheeyee@yahoo.com",
"287159"=>"hua0123lim@gmail.com",
"287166"=>"wongruyun@gmail.com",
"287205"=>"yongloksan@gmail.com",
"287207"=>"annabel_nu@yahoo.com",
"287211"=>"norhafizan698@gmail.com",
"287212"=>"azahlilamdjenan@gmail.com",
"287218"=>"tingnem1413@gmail.com",
"287226"=>"shahmi.shah02@gmail.com",
"287238"=>"alinhishamudin@gmail.com",
"287244"=>"wendysky4484@gmail.com",
"287250"=>"wing_yee90@hotmail.com",
"287267"=>"izzahsolehah99@gmail.com",
"287273"=>"cikzieramli94@gmail.com",
"287275"=>"salinazawawi90@gmail.com",
"287279"=>"sinmelody92@gmail.com",
"287291"=>"sitishima83@gmail.com",
"287298"=>"sherlynfoo90@gmail.com",
"287304"=>"tracy921210@gmail.com",
"287306"=>"nglikiang82@gmail.com",
"287309"=>"sya_sylar88@yahoo.com",
"287314"=>"alishafara3@gmail.com",
"287315"=>"norfitrie@gmail.com",
"287333"=>"sitinorhazida85@gmail.com",
"287356"=>"robynlen_9394@hotmail.com",
"287363"=>"juwairiyyah92@gmail.com",
"287368"=>"jenniferlim820@gmail.com",
"287372"=>"ikajasmay9@gmail.com",
"287374"=>"chloehoe33@gmail.com",
"287377"=>"aniqah.hanis@yahoo.com",
"287380"=>"norfaedah15@gmail.com",
"287382"=>"jmelisa58@yahoo.com",
"287386"=>"broken_nut2004@yahoo.com",
"287394"=>"fieyzafieynamiey@gmail.com",
"287411"=>"sinlio.chia@gmail.com",
"287413"=>"dalvyndhillon@gmail.com",
"287415"=>"fatimahasbiazizi@gmail.com",
"287416"=>"yee0419@hotmail.com",
"287419"=>"farhansukeri@gmail.com",
"287420"=>"monkeeit@gmail.com",

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
				$newsubscriber_created   = '2021-05-31 ' . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = '2021-05-31 ' . $subscriber_updated_time;
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