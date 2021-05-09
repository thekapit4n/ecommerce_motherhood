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
	"90799"=>"lizadrisha@gmail.com",
"90902"=>"seriintannazrininazri@gmail.com",
"90909"=>"natmelissa54@gmail.com",
"90930"=>"fathin_nadia35@yahoo.com",
"90986"=>"noorassila17@gmail.com",
"91089"=>"nrelyyanaaz@gmail.com",
"91205"=>"sabilasabri97@gmail.com",
"91237"=>"hanankhaira5082@gmail.com",
"90704"=>"sfnashidi@gmail.com",
"90705"=>"roslanalimin@gmail.com",
"90708"=>"norazlin.ishak08@gmail.com",
"90709"=>"dianacozt18@gmail.com",
"90712"=>"zuhazarul@gmail.com",
"90714"=>"syarifahadam91@gmail.com",
"90716"=>"noramalinazazili93@gmail.com",
"90717"=>"tuanismail980@gmail.com",
"90719"=>"balqisyuhana9@gmail.com",
"90721"=>"mariyammat460@gmail.com",
"90723"=>"ary_8907@yahoo.com",
"90725"=>"mujahidah.mem@gmail.com",
"90726"=>"nurulcahayacahaya@gmail.com",
"90727"=>"yuuetyqa@gmail.com",
"90729"=>"wanhana92@gmail.com",
"90730"=>"mohdfaumizie@gmail.com",
"90731"=>"roslina910726@gmail.com",
"90732"=>"khairunnisafarzanamsjh@gmail.com",
"90734"=>"nsraudhah96@gmail.com",
"90736"=>"norshahiranazri@gmail.com",
"90737"=>"asrim4907@gmail.com",
"90757"=>"nadyashahira55@gmail.com",
"90759"=>"zulaikhakimi22@gmail.com",
"90760"=>"norliza@spnb.com.my",
"90762"=>"fnur84034@gmail.com",
"90763"=>"nrsyhraams1012@icloud.com",
"90764"=>"nurularifah92@yahoo.com",
"90765"=>"zueali11@gmail.com",
"90767"=>"eydaeyo@gmail.com",
"90768"=>"ainatierana@yahoo.com",
"90770"=>"norshilalaily@gmail.com",
"90778"=>"nazirahhumaira048@gmail.com",
"90779"=>"nurulzulaikha597@gmail.com",
"90781"=>"yatieygjoie@gmail.com",
"90782"=>"mimihartini5557@gmail.com",
"90784"=>"nurkasih.syg@gmail.com",
"90786"=>"harunazreen7@gmail.com",
"90788"=>"nliyana220@yahoo.com",
"90789"=>"fazirabaim99@gmail.com",
"90791"=>"kechikcomey5@gmail.com",
"90793"=>"ezatulmieyza5@gmail.com",
"90796"=>"nilleyjarudin@gmail.com",
"90797"=>"hatikahtikah4@gmail.com",
"90798"=>"azmiraothman1984@gmaip.com",
"90800"=>"nurulsyariena95@gmail.com",
"90801"=>"sajesaje.sukesuke@yahoo.com",
"90802"=>"norafiqahzuya@gmail.com",
"90803"=>"zaimirananyan@gmail.com",
"90806"=>"shazreenamira7@gmail.com",
"90807"=>"mahmudahhashim@gmail.com",
"90808"=>"emmaothman8766@gmail.com",
"90810"=>"ayuniatirah7@gmail.com",
"90811"=>"khaifaaa639@gmail.com",
"90812"=>"tiqahmalik@gmail.com",
"90816"=>"fatmasiti740@gmail.com",
"90817"=>"abgjekll@gmail.com",
"90818"=>"sitinurulhanida87@gmail.com",
"90824"=>"butterfly898311@gmail.com",
"90825"=>"nursyuhailacb@gmail.com",
"90827"=>"corinamanyi29@gmail.com",
"90829"=>"nrashikin6@gmail.com",
"90830"=>"ananurulsyazana@gmail.com",
"90832"=>"ain6715@gmail.com",
"90833"=>"cmahsalimah0@gmail.com",
"90834"=>"hamimee87@gmail.com",
"90837"=>"nurfarihayusof96@gmail.com",
"90841"=>"kamarinabusman@gmail.com",
"90842"=>"rahudha@gmail.com",
"90844"=>"suzieyussof2016@gmail.com",
"90845"=>"siti_aieda@yahoo.com",
"90846"=>"eezeera@gmail.com",
"90847"=>"marsyaayra3@gmail.com",
"90848"=>"kamariahmohamad745@gmail.com",
"90849"=>"syaifulnizam714@gmail.com",
"90851"=>"ksitiey@gmail.com",
"90853"=>"masturinanana15@gmail.com",
"90854"=>"ummi.shiffa@gmail.com",
"90855"=>"nohalihassan722@gmail.com",
"90856"=>"ernyismail2@gmail.com",
"90857"=>"eija6436@gmail.com",
"90858"=>"abiyafiq92@gmail.com",
"90859"=>"acha5995@gmail.com",
"90861"=>"ainajuainaju@gmail.com",
"90862"=>"nurmuslimah473@gmail.com",
"90865"=>"atikaamiranizam@gmail.com",
"90866"=>"tuahirfan252020@gmail.com",
"90867"=>"norasmairah98@gmail.com",
"90868"=>"atirafarhana200@gmail.com",
"90869"=>"habibahaneeva@gmail.com",
"90870"=>"piya927@yahoo.com",
"90872"=>"bungakejora92@gmail.com",
"90873"=>"mohdkhairul199797@gmail.com",
"90875"=>"nazirah9895@gmail.com",
"90877"=>"ummusyafiqa98@gmail.com",
"90878"=>"z.nurfazira@yahoo.com.my",
"90879"=>"hakimah6600@gmail.com",
"90880"=>"husnaismail022@gmail.com",
"90883"=>"lindaganas88@gmail.com",
"90886"=>"aishah.841@gmail.com",
"90887"=>"aliceanilice@gmail.com",
"90888"=>"iasmidar@yahoo.com",
"90889"=>"rinaamira@icloud.com",
"90896"=>"izwatiothman@gmail.com",
"90898"=>"norshafizah85@icloud.com",
"90900"=>"mayyeong088@gmail.com",
"90901"=>"wannorwahidah@gmail.com",
"90904"=>"michael133k@gmail.com",
"90906"=>"ummarqholeiffzaim35@gmail.com",
"90907"=>"hasmahanim37@gmail.com",
"90908"=>"ilashon89@gmail.com",
"90913"=>"hidayuddd4062@gmail.com",
"90914"=>"julfadhli00@gmail.com",
"90915"=>"anitham111333@gmail.com",
"90917"=>"rusdinurdin1987@gmail.com",
"90919"=>"ayufazlis2293@gmail.com",
"90920"=>"azlindaahmad@gmail.com",
"90924"=>"nowwhytwoku@yahoo.com",
"90927"=>"nurbaitisuhardi88@gmail.com",
"90931"=>"nurazrina234@gmail.com",
"90932"=>"shaaaizzead@gmail.com",
"90933"=>"bellaatosh@gmail.com",
"90936"=>"robiatuldhurah85@gmail.com",
"90939"=>"aimanisnani@gmail.com",
"90941"=>"ooilinyee8@gmail.com",
"90942"=>"farhanihsan13@gmail.com",
"90943"=>"ummijannah91@gmail.com",
"90944"=>"nurulfareeza91@gmail.com",
"90947"=>"merahmentari90@gmail.com",
"90949"=>"caszatin@gmail.com",
"90950"=>"suzieliana791@gmail.com",
"90952"=>"zaidihasbi10@gmail.com",
"90953"=>"aizatulalqari@gmail.com",
"90954"=>"ieykaqari@gmail.com",
"90955"=>"fanaabrahim@yahoo.com",
"90959"=>"nurul930810@gmail.com",
"90960"=>"saffahanim@gmail.com",
"90961"=>"syida_razali@hotmail.com",
"90963"=>"eyzaa1999@gmail.com",
"90965"=>"hamirahalim07@gmail.com",
"90966"=>"norsidah221@gmail.com",
"90970"=>"monicadinda510@gmail.com",
"90971"=>"raziyatul5366@gmail.com",
"90972"=>"sue.sue85@gmail.com",
"90973"=>"ernafaziera@gmail.com",
"90975"=>"atiqahjuni22@gmail.com",
"90976"=>"sugunasapmuthusamy@gmail.com",
"90977"=>"nurulakidah89@gmail.com",
"90978"=>"farahilyia34@icloud.com",
"90981"=>"irmasara16@gmail.com",
"90982"=>"masrina7318@gmail.com",
"90983"=>"nurulfatiha981004@icloud.com",
"90985"=>"apikasmida4@gmail.com",
"90987"=>"rohaidahramelan@yahoo.com",
"90988"=>"rohaidaaizam.98ra@gmail.com",
"90990"=>"athirahzanura@gmail.com",
"90991"=>"fynafeen@gmail.com",
"90993"=>"shahiraaishah180899@gmail.com",
"90995"=>"malini_mazlan@yahoo.com",
"90996"=>"rosmalinamdyusof@yahoo.com",
"90997"=>"sitimasturina98@icloud.com",
"90999"=>"maz34560496@gmail.com",
"91001"=>"nur315678@gmail.com",
"91003"=>"onizakaria88@gmail.com",
"91004"=>"effanoradila.96@gmail.com",
"91005"=>"erzanorfaliza209@gmail.com",
"91006"=>"luwenywinnie@gmail.com",
"91010"=>"neckning4989@gmail.com",
"91011"=>"miminoraffiza@gmail.com",
"91012"=>"familyumira97@gmail.com",
"91013"=>"dyllasofia@gmail.com",
"91014"=>"nuruladlinna9826@gmail.com",
"91017"=>"nursuzana6162@icloud.com",
"91018"=>"dayangsahidah01@gmail.com",
"91019"=>"fs.makcualang89@gmail.com",
"91021"=>"linamariana9695@gmail.com",
"91022"=>"nzsheera635@gmail.com",
"91024"=>"ismalianasyafiee@gmail.com",
"91027"=>"moontell92@yahoo.com.my",
"91028"=>"norehanyahaya1994@gmail.com",
"91029"=>"norshazirayani@gmail.com",
"91030"=>"noraidamat76@gmail.com",
"91031"=>"nurulfarah323@yahoo.com",
"91036"=>"nurfatinadila135@gmail.com",
"91038"=>"surianiaziz5976@gmail.com",
"91039"=>"idayahya331@gmail.com",
"91041"=>"izyan.nazri87@gmail.com",
"91042"=>"iekx00518@gmail.com",
"91043"=>"nurathirah5788@gmail.com",
"91044"=>"meilynwan@gmail.com",
"91045"=>"joslintieatey@gmail.com",
"91047"=>"sharifah.shakirah9310@yahoo.com",
"91048"=>"jesicajecinda59@gmail.com",
"91049"=>"datuhayden88@gmail.com",
"91050"=>"isfahaniismail648@gmail.com",
"91051"=>"nurayuni.zaidi@yahoo.com",
"91052"=>"ffbsab@yahoo.com",
"91053"=>"mohammadafiq2013@gmail.com",
"91054"=>"cesilalimann99@gmail.com",
"91055"=>"01139406736phg@gmail.com",
"91056"=>"asfadila88@gmail.com",
"91058"=>"haryatie960@gmail.com",
"91059"=>"harrynadiaaurora@gmail.com",
"91060"=>"izafizza89@gmail.com",
"91061"=>"rosaidasiti424@gmail.com",
"91064"=>"norsyazwani6598@gmail.com",
"91066"=>"farihah93@gmail.com",
"91067"=>"cikivy@gmail.com",
"91068"=>"ayienabila@yahoo.com",
"91070"=>"wanynordin1993@gmail.com",
"91072"=>"rajiahothman94@gmail.com",
"91073"=>"erinqasrina017@gmail.com",
"91076"=>"tmahanum@gmail.com",
"91078"=>"sarahaatony@gmail.com",
"91079"=>"deklaaaa079@gmail.com",
"91083"=>"nikerina93@gmail.com",
"91085"=>"qamariah03@gmail.com",
"91086"=>"ekinadam1009@gmail.com",
"91087"=>"aisyahkauzi50@gmail.com",
"91091"=>"syazamuna@gmail.com",
"91093"=>"nf1329166@gmail.com",
"91094"=>"jen2hafiz@yahoo.com",
"91095"=>"adeldysabel444@gmail.com",
"91097"=>"nrlans1418@gmail.com",
"91098"=>"huda3108@yahoo.com.my",
"91099"=>"suesuriey@gmail.com",
"91100"=>"nzayana_jemain97@yahoo.com",
"91101"=>"ayuwidayu86@gmail.com",
"91102"=>"haslitahassan1997@gmail.com",
"91103"=>"fatinnabilah.ghaz@gmail.com",
"91105"=>"scylee98@gmail.com",
"91108"=>"wanieyjawahari@gmail.com",
"91109"=>"ninekecik0502@gmail.com",
"91114"=>"sitieyaminah1985@gmail.com",
"91115"=>"nursalasiah8805@gmail.com",
"91117"=>"yanayan21@gmail.com",
"91118"=>"sitinoraimy88@yahoo.com",
"91119"=>"simmizen341@gmail.com",
"91120"=>"irakry9588@gmail.com",
"91121"=>"umwafa92@gmail.com",
"91122"=>"zulaikha@gmail.com",
"91124"=>"esyafikah@rocketmail.com",
"91125"=>"azrinpinggi77@gmail.com",
"91127"=>"nurkasih.nazlin@gmail.com",
"91128"=>"hashakinah94@gmail.com",
"91129"=>"marzuliza@gmail.com",
"91131"=>"azieha8289@gmail.com",
"91132"=>"teyha425@gmail.com",
"91133"=>"wanyeapis@yahoo.com",
"91134"=>"leelysham259@gmail.com",
"91135"=>"liaazreen1989@gmail.com",
"91136"=>"shmeeraadniey@gmail.com",
"91137"=>"babylittlejunior@gmail.com",
"91138"=>"yaumeenoor@gmail.com",
"91140"=>"nurhasyimah1986@gmail.com",
"91142"=>"shellymelinachrystertino@gmail.com",
"91143"=>"sinasalleh1993@gmail.com",
"91144"=>"syazlinrosli52@gmail.com",
"91146"=>"azimahaziz42@gmail.com",
"91147"=>"nurhayati9712@gmail.com",
"91148"=>"irayusniali@gmail.com",
"91149"=>"nurinanabila2000@gmail.com",
"91150"=>"nurizzaty1229@gmail.com",
"91151"=>"irahsya170695@gmail.com",
"91152"=>"cyunkdye@gmail.com",
"91154"=>"intannurshazira4@gmail.com",
"91157"=>"diyanaredzuan27@gmail.com",
"91158"=>"wanifizi7777@gmail.com",
"91159"=>"sayangawaks130@gmail.com",
"91161"=>"sitikhadijahyunnn@gmail.com",
"91162"=>"tarmizi265099@gmail.com",
"91164"=>"nurazirahussin8@gmail.com",
"91169"=>"norfarhana404@gmail.com",
"91172"=>"rodiyahabdrahman@gmail.com",
"91175"=>"aniskiss94@gmail.com",
"91177"=>"haza466@gmail.com",
"91178"=>"sihadaim2023@gmail.com",
"91179"=>"noramiza5494@gmail.com",
"91180"=>"merdinaizwany@gmail.com",
"91181"=>"ainzoliadin5824@gmail.com",
"91182"=>"nurnazihah43@gmail.com",
"91183"=>"jihazaki99@gmail.com",
"91185"=>"afinamiasarah@gmail.com",
"91186"=>"wawanieys@gmail.com",
"91189"=>"leanieensano@gmail.com",
"91190"=>"evayazed94@gmail.com",
"91191"=>"zulhaiza547@gmail.com",
"91192"=>"cleswinkyjoseline@gmail.com",
"91193"=>"hayatiyati69@yahoo.com",
"91194"=>"impianliya@gmail.com",
"91195"=>"elenmayalejandro98@gmail.com",
"91196"=>"haslinda9020@gmail.com",
"91199"=>"fimellalasius@gmail.com",
"91202"=>"asmaazahari96@gmail.com",
"91204"=>"dyanazim@gmail.com",
"91207"=>"fienaziem@gmail.com",
"91208"=>"mimiamira5476@gmail.com",
"91209"=>"amyliaelisa8@gmail.com",
"91210"=>"fatinnafisaazizan@gmail.com",
"91213"=>"ainiisa88@gmail.com",
"91214"=>"norhanisidayutahir@gmail.com",
"91215"=>"norfarhanaawang1982@gmail.com",
"91216"=>"azureenazirol1503@gmail.com",
"91218"=>"niknurnadirah95@gmail.com",
"91221"=>"hidayati.othman@gmail.com",
"91224"=>"saishah657@gmail.com",
"91225"=>"s.aishahnor@yahoo.com",
"91227"=>"lizadali822@gmail.com",
"91230"=>"anomadawiyah8@gmail.com",
"91231"=>"najihah.khirudin21@gmail.com",
"91235"=>"octiviabeatricep@gmail.com",
"91238"=>"zuezuhri93@gmail.com",
"91239"=>"irma.firdaus@yahoo.com",
"91240"=>"alinalisha06@gmail.com",
"91241"=>"izzusyima@gmail.com",
"91242"=>"wanaida5066@gmail.com",
"91243"=>"sizzati595@gmail.com",
"91244"=>"abamsudinz99@gmail.com",
"91245"=>"hanieryia@gmail.com",
"91246"=>"nurafiqah880@yahoo.com",
"91248"=>"berasnyaman95@gmail.com",
"91249"=>"farahariffin95@gmail.com",
"91250"=>"alishalugguk@gmail.com",
"91251"=>"nurikhwan1411@gmail.com",
"91254"=>"hazlindahalim22@gmail.com",
"91255"=>"ainanazim2020@gmail.com",
"91256"=>"haniszuhaili96@gmail.com",
"91257"=>"filusmiza@gmail.com",
"91258"=>"hamzahismail91@yahoo.com",
"91259"=>"balqisshah00@gmail.com",
"91260"=>"saniaajis1137@gmail.com",
"91261"=>"jelinabakong@gmail.com",
"91262"=>"missyuha13.03.msf@gmail.com",
"91263"=>"ssiti4772@gmail.com",
"91265"=>"norhazaacu@gmail.com",
"91266"=>"aisyah@gmail.com",
"91267"=>"syamira_izzatiasna@yahoo.com",
"91268"=>"syamilanur69@gmail.com",
"91270"=>"apitbulat78@gmail.com",
"91271"=>"norr_hatifah@yahoo.com",
"91272"=>"marisahmahdin@gmail.com",
"91274"=>"falahfirzanah@gmail.com",
"91275"=>"wana8076@gmail.com",
"91276"=>"norizanurdin@gmail.com",
"91277"=>"nabilaazahar95@gmail.com",
"91279"=>"amirchiku881@gmail.com",
"91280"=>"syazanamat89@gmail.com",
"91281"=>"aliasfabyana@gmail.com",

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
				$newsubscriber_created   = '2021-04-01 ' . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = '2021-04-01 ' . $subscriber_updated_time;
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
		// echo $sqlUpdate . "<br>";
		// $queryUpdate = $conn2->query($sqlUpdate);
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