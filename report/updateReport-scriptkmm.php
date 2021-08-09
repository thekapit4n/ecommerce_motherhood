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
"95251"=>"nurjannahariffinrohana@gmail.com",
"95252"=>"qieellys80@gmail.com",
"95253"=>"shafinarsukiri5a@gmail.com",
"95344"=>"moonmunirah295@gmail.com",
"95254"=>"zuraiharahim@gmail.com",
"95345"=>"azida7123@gmail.com",
"95255"=>"fazelettyrexdanel@gmail.com",
"95256"=>"nuzulain9@gmail.com",
"95257"=>"ainyusoff117@gmail.com",
"95348"=>"norfarhana1508@gmail.com",
"95258"=>"shahierahbaharudin@gmail.com",
"95259"=>"mieratashs92@gmail.com",
"95263"=>"ashajaashaja@gmail.com",
"95264"=>"rnmnrrhm@gmail.com",
"95265"=>"nurhidayahyunusadib@gmail.com",
"95266"=>"nuratikah290696@gmail.com",
"95267"=>"ashrafffarhan1@gmail.com",
"95268"=>"mirayusoff83@gmail.com",
"95508"=>"nramalina1992@gmail.com",
"95509"=>"norsyahirah.abuyaziz@gmail.com",
"95510"=>"nurulhidayah35702@gmail.com",
"95511"=>"farahshahida54@gmail.com",
"95365"=>"erna970206@gmail.com",
"95366"=>"boongachantique@gmail.com",
"95512"=>"muzliha1779@gmail.com",
"95367"=>"najwazamzuri79@gmail.com",
"95369"=>"fariesyamelati@gmail.com",
"95370"=>"qurratuaini6565@gmail.com",
"95513"=>"mimiameera45@gmail.com",
"95514"=>"yanamasliana95@gmail.com",
"95515"=>"anisfarhana224@gmail.com",
"95371"=>"ilahfadilah90@gmail.com",
"95372"=>"azismona92@gmail.com",
"95373"=>"anieamat85x2@gmail.com",
"95516"=>"sitiazahairani@gmail.com",
"95517"=>"annarosdianaahalim@gmail.com",
"95518"=>"farissha2412@gmail.com",
"95519"=>"fatihahjaih@gmail.com",
"95520"=>"nnazira2004@gmail.com",
"95521"=>"nurulhidayah220494@gmail.com",
"95374"=>"iladevidevi78@gmail.com",
"95375"=>"jajazetty93@gmail.com",
"95376"=>"akasyabaharuddin@gmail.com",
"95377"=>"fatin.nur.izzati27@gmail.com",
"95378"=>"hfaryhah56@gmail.com",
"95379"=>"esrinasyahira@gmail.com",
"95380"=>"nuramiraadnan2705@gmail.com",
"95381"=>"mirajusoh88@gmail.com",
"95382"=>"mulyatihanapi1978@gmail.com",
"95383"=>"rieyana_25@yahoo.com",
"95385"=>"nuridayusyazwaniarif@gmail.com",
"95386"=>"khariahny@yahoo.com",
"95387"=>"ssabrinahasan@yahoo.com",
"95388"=>"aishahanio93@gmail.com",
"95389"=>"nurqasehmikayla1012@gmail.com",
"95390"=>"nursyila40@yahoo.com",
"95392"=>"fatindzulkifli1699@gmail.com",
"95394"=>"nin_emira@yahoo.com",
"95395"=>"eykahatikah18598@gmail.com",
"95396"=>"nancysinan@gmail.com",
"95397"=>"faezahmz88@gmail.com",
"95398"=>"asiahaqifaqil90@gmail.com",
"95399"=>"syhrasdh@gmail.com",
"95400"=>"farajaffar2711@gmail.com",
"95401"=>"zainab115726@icloud.com",
"95402"=>"mohamadnorkamaruddin@gmail.com",
"95403"=>"bellaluna1301@gmail.com",
"95404"=>"nooranisfazira93@gmail.com",
"95405"=>"nurulizzatie1998@yahoo.com",
"95406"=>"meyamei58@gmail.com",
"95407"=>"limmironie@gmail.com",
"95408"=>"nurakmarizan@yahoo.com",
"95409"=>"linagurlz53@gmail.com",
"95410"=>"ylin_22@yahoo.com",
"95412"=>"norazitabujang@gmail.com",
"95413"=>"nurfazierah95@gmail.com",
"95414"=>"schafyqah95@gmail.com",
"95415"=>"miewataringaymien@gmail.com",
"95416"=>"ummusyazwani@yahoo.com",
"95417"=>"sitiaishahh2233@gmail.com",
"95418"=>"qibnaqibah@gmail.com",
"95420"=>"fatinabilanordin22@gmail.com",
"95421"=>"evanovie95@gmail.com",
"95422"=>"greensopie@gmail.com",
"95423"=>"syamimi890310@gmail.com",
"95425"=>"mornicatinkai@gmail.com",
"95426"=>"fattana96@gmail.com",
"95427"=>"siti.suriyani95@gmail.com",
"95428"=>"syaza.bahri98@yahoo.com",
"95429"=>"ctwanny@gmail.com",
"95430"=>"nsyahira.izz@gmail.com",
"95431"=>"dieyla.here@gmail.com",
"95432"=>"sitiathirah17c@gmail.com",
"95433"=>"hadijaheina91@gmail.com",
"95434"=>"syiesyieieda@yahoo.com",
"95435"=>"lysaemylia21@gmail.com",
"95436"=>"khatijahsiti231@gmail.com",
"95437"=>"suhadahmajid@gmail.com",
"95438"=>"zuhairahsabry@gmail.com",
"95439"=>"juliana.nordin90@gmail.com",
"95441"=>"putrina13@yahoo.com",
"95442"=>"jieyroh96@gmail.com",
"95443"=>"amieymieyza@gmail.com",
"95444"=>"faraatira57@gmail.com",
"95446"=>"nurfatinmaisarahmohammad@gmail.com",
"95447"=>"farahana_naeem@yahoo.com",
"95448"=>"wrazak94@gmail.com",
"95451"=>"nenenglibau1699@gmail.com",
"95452"=>"azwaniazman9@gmail.com",
"95454"=>"mashimoshi03@gmail.com",
"95455"=>"nuriziani88@gmail.com",
"95456"=>"norsahirah1996@gmail.com",
"95458"=>"nurhaniasyuradaud@yahoo.com",
"95459"=>"intannurulwahdah@gmail.com",
"95460"=>"angahjeniagangah@gmail.com",
"95462"=>"amanshaha256@gmail.com",
"95463"=>"norfazira1307@gmail.com",
"95464"=>"wan_sue91@yahoo.com",
"95465"=>"ellynonet@gmail.com",
"95466"=>"nurlyasuwaji37@gmail.com",
"95467"=>"syikin5324@gmail.com",
"95468"=>"aniskarmila178@yahoo.com",
"95469"=>"natasyahain0509@gmail.com",
"95470"=>"nurfaiz9192@gmail.com",
"95473"=>"sitinurulain98@gmail.com",
"95474"=>"peace.your89@icloud.com",
"95475"=>"kinang91@yahoo.com",
"95476"=>"noorhanan1986@gmail.com",
"95477"=>"ayuyuyun1996@gmail.com",
"95478"=>"suriayani6@gmail.com",
"95479"=>"ahtuwa@gmail.com",
"95480"=>"jessjuliet93@gmail.com",
"95481"=>"fazimamamat61@gmail.com",
"95482"=>"azaveiro235@gmail.com",
"95483"=>"syatilatila42@gmail.com",
"95484"=>"maisarahshakirah1404@gmail.com",
"95485"=>"haililrashieda@gmail.com",
"95486"=>"wannajwa00@icloud.com",
"95488"=>"amandadelisha20@gmail.com",
"95490"=>"nrmy85@gmail.com",
"95491"=>"daazulkifli02@gmail.com",
"95492"=>"noramirah961014@gmail.com",
"95494"=>"syazanajalani@yahoo.com",
"95495"=>"desireejanice2@gmail.com",
"95496"=>"nasharuddinmohd28@gmail.com",
"95497"=>"nathasha.na@gmail.com",
"95498"=>"tiyamoy3@gmail.com",
"95499"=>"suhanasalim3@gmail.com",
"95500"=>"amirazulkifle2@gmail.com",
"95349"=>"haninihani64@gmail.com",
"95350"=>"noorbahiah@yahoo.com",
"95351"=>"fatin.syahira18@gmail.com",
"95502"=>"flash_dash1106@yahoo.com",
"95352"=>"nisaroshada@gmail.com",
"95504"=>"nuriyaimaa@gmail.com",
"95353"=>"zulaikaamyleazairolnizam@gmail.com",
"95505"=>"ainazuni@gmail.com",
"95354"=>"dila_cancer9235@yahoo.com",
"95506"=>"mamaira8811@gmail.com",
"95355"=>"falindawati628@gmail.com",
"95357"=>"zulianasakina93@gmail.com",
"95507"=>"sazwanihafiz08@gmail.com",
"95358"=>"normazidamatishak@yahoo.com",
"95359"=>"nurainafia84@gmail.com",
"95360"=>"nurafiqahismailismail@gmail.com",
"95361"=>"fatihahghazi93@gmail.com",
"95363"=>"sitinorhafeeza70@gmail.com",
"95831"=>"nurulchemat5776@gmail.com",
"95835"=>"aidaarahman92@gmail.com",
"95729"=>"amylieana01@gmail.com",
"95730"=>"dayangmochi5299@gmail.com",
"95731"=>"iyliatikah30@gmail.com",
"95732"=>"eida_noraida27@yahoo.com.my",
"95680"=>"shajajaalias91@gmail.com ",
"95642"=>"pianfatin08@gmail.com",
"95643"=>"myaqalesya083@gmail.com",
"95733"=>"liezedryna910@gmail.com",
"95644"=>"adealfrianijupri98@gmail.com",
"95522"=>"alimusa8286@gmail.com",
"95768"=>"mirayahya42@gmail.com",
"95645"=>"ansztlezrn@gmail.com",
"95681"=>"amirulaisyah1107@gmail.com ",
"95647"=>"inalina49@ymail.com",
"95523"=>"aqilahtan22@gmail.com",
"95525"=>"norlailaanuar9729@gmail.com",
"95682"=>"juenine1004@gmail.com",
"95801"=>"haniss_star@yahoo.com",
"95526"=>"nurulafiza.abubakar@yahoo.com",
"95527"=>"jajatieha77@gmail.com",
"95769"=>"nhh_mrj85@yahoo.com",
"95683"=>"tinaaril7979@gmail.com",
"95777"=>"normahalim7@gmail.com",
"95802"=>"blackkuala1992@gmail.com",
"95528"=>"norjannah890915@gmail.com",
"95529"=>"noralis87@gmail.com",
"95530"=>"nanamignon165@gmail.com",
"95531"=>"nurullhidayah88@gmail.com",
"95803"=>"hernanieroxetta@gmail.com",
"95532"=>"nurhamiza0504@gmail.com",
"95533"=>"kavidiya21@gmail.com",
"95692"=>"dianaraziqin@yahoo.com",
"95778"=>"shimashuky95@gmail.com",
"95804"=>"athirahnajwashukri@yahoo.com",
"95779"=>"schazima@gmail.com",
"95734"=>"mijlinahmangong97@gmail.com",
"95649"=>"adilahwasiuddin98@gmail.com",
"95534"=>"michellelyneelvis@gmail.com ",
"95535"=>"zacheryainaz1892@gmail.com",
"95536"=>"ctftimh98@gmail.com",
"95537"=>"shazyatulnatasya00@gmail.com",
"95693"=>"ainnadamiaa935@gmail.com",
"95805"=>"orkedanakpakman@gmail.com",
"95539"=>"szulaihayakub@gmail.com",
"95650"=>"inacrewet@gmail.com",
"95540"=>"dmahani94@gmail.com",
"95694"=>"shashah0342@gmail.com",
"95695"=>"syamimialeeda@gmail.com",
"95696"=>"jiehakamall95@gmail.com",
"95542"=>"aliyasyuhada009@gmail.com",
"95652"=>"syafiqahazhari.93@gmail.com",
"95543"=>"sitinurainiabas87@gmail.com",
"95653"=>"eymaaa8907@gmail.com",
"95544"=>"noorshalizah69@gmail.com",
"95545"=>"eyka120800@gmail.com",
"95546"=>"syaidatul2000@yahoo.com",
"95806"=>"marryadem414@gmail.com",
"95656"=>"nazihahnazri95@gmail.com",
"95548"=>"ilyana8228@gmail.com",
"95549"=>"nurazura1109@gmail.com",
"95550"=>"sitieyaminah1985@gmail.com",
"95780"=>"adeqintan1995@gmail.com",
"95551"=>"yusof_sakinah@yahoo.com",
"95552"=>"norhidayaharzulwan@gmail.com",
"95553"=>"normawarniabuyamin@gmail.com",
"95657"=>"mardianabtibrahim@gmail.com",
"95781"=>"noorhascekenridzuan@gmail.com",
"95658"=>"azzihaapit@gmail.com",
"95554"=>"ctapiz09@gmail.com",
"95555"=>"farahizatys@gmail.com",
"95557"=>"susulaiman83@gmail.com",
"95559"=>"nabilaabdullah89@gmail.com",
"95807"=>"mirela_sofea@yahoo.com.my",
"95659"=>"ainieyamerz@gmail.com",
"95782"=>"faiszaheja@gmail.com ",
"95697"=>"ebbasue@gmail.com",
"95560"=>"rashakiraeyra@gmail.com",
"95808"=>"ffarhana270@gmail.com",
"95561"=>"fsyalina@gmail.com",
"95562"=>"noramr123@gmail.com",
"95810"=>"nurfazila526@gmail.com",
"95563"=>"zhdymhs@gmail.com ",
"95783"=>"tashafiqah94@gmail.com",
"95735"=>"nurzatul30@yahoo.com",
"95564"=>"nurdalilasuhaimi@gmail.com",
"95566"=>"sitinurfatmasyukriah6503@gmail.com",
"95567"=>"fazeerapariman94@yahoo.com",
"95568"=>"hanisahniesha93@gmail.com",
"95698"=>"jurinahann@gmail.com",
"95569"=>"fyzrulh01036@gmail.com",
"95660"=>"nramizah22@gmail.com",
"95661"=>"haszalina432@gmail.com",
"95812"=>"rosniza5833@gmail.com",
"95736"=>"noramira374@gmail.com",
"95737"=>"mrlndabkri@gmail.com",
"95570"=>"bbalvianey94@gmail.com",
"95571"=>"zettyzamdi@gmail.com",
"95572"=>"aqilahnur254@gmail.com",
"95662"=>"nurul.yusoff5774@gmail.com",
"95573"=>"elbird88@gmail.com",
"95574"=>"norainibintiabdrazak@gmail.com",
"95699"=>"airanishah@yahoo.com",
"95575"=>"apple_red9144@yahoo.com",
"95663"=>"aidaadawiyah120@gmail.com",
"95576"=>"nasuhachecob@gmail.com",
"95577"=>"nurulfarahana9595@gmail.com",
"95664"=>"aminahmarzuki1995@gmail.com",
"95702"=>"norzatulakmar5@gmail.com",
"95813"=>"hainieycare6115@gmail.com",
"95814"=>"nursyuhadamarzuki@gmail.com ",
"95703"=>"swanmaisarah@gmail.com",
"95578"=>"amierafiza98@gmail.com",
"95704"=>"sarahsuzana95@gmail.com",
"95739"=>"apeapejea81@yahoo.com",
"95705"=>"siana.pinky07@gmail.com",
"95579"=>"amanilula1152@gmail.com",
"95815"=>"nurulshafiqa383@gmail.com",
"95707"=>"airasyahira18@gmail.com",
"95816"=>"szaleha65@gmail.com",
"95580"=>"ainifazni93@gmail.com",
"95581"=>"farehahmatzain@gmail.com",
"95740"=>"norarelee@gmail.com",
"95582"=>"dedekhayati99@gmail.com",
"95665"=>"shuhazaini3@gmail.com",
"95583"=>"amiliyakamaruddin18@gmail.com",
"95584"=>"shahiraira04@gmail.com",
"95785"=>"unnaarshad@gmail.com",
"95585"=>"intansyaf94@gmail.com",
"95667"=>"ainawahab1996@gmail.com",
"95586"=>"nellymarcus13@gmail.com",
"95668"=>"fatinasyura221018@gmail.com",
"95741"=>"ctanizane2000@gmail.com",
"95817"=>"qiss1994@gmail.com",
"95669"=>"eiylahafiz1811@gmail.com",
"95588"=>"wannurhidayatiewanmuhamad@gmail.com",
"95819"=>"shimaabdullah16@yahoo.com",
"95820"=>"mimihassan894@gmail.com",
"95822"=>"aisyahkhair1331@gmail.com",
"95786"=>"afiqahrosli102@gmail.com",
"95589"=>"nurulhidayah5926@gmail.com",
"95590"=>"nysanatasya97@gmail.com",
"95591"=>"razmilrazmil10@gmail.com",
"95592"=>"intanazyan97@gmail.com",
"95593"=>"nurul.syakira6340@gmail.com",
"95708"=>"elyapiyek@gmail.com",
"95709"=>"nurfaridatulfatihah98@gmail.com",
"95710"=>"rimalyna14@gmail.com",
"95594"=>"zatystarlite@gmail.com",
"95595"=>"jariati93aenn17@gmail.com",
"95711"=>"sitimaizah17@gmail.com",
"95596"=>"yana_alias2000@icloud.com",
"95598"=>"fairuzseashell@gmail.com",
"95599"=>"fyizh@yahoo.com",
"95712"=>"azyyatijaafar@gmail.com",
"95823"=>"amalyanasali@gmail.com",
"95600"=>"mnorasikin87@gmail.com",
"95713"=>"sue.lyyanna@gmail.com",
"95714"=>"nabilajahaya@yahoo.com",
"95824"=>"syuyen999@gmail.com",
"95743"=>"zikinzara@gmail.com",
"95744"=>"suhaidalatib@gmail.com",
"95716"=>"syafawati_cherahim89@yahoo.com",
"95717"=>"yuyuazma@gmail.com",
"95745"=>"habibraisha.hr@gmail.com",
"95601"=>"nowwhytwoku@yahoo.com",
"95746"=>"farhahanis9@gmail.com",
"95602"=>"eve.lieya@gmail.com",
"95825"=>"nadrah.razali@yahoo.com",
"95827"=>"syamsiah5050@gmail.com",
"95603"=>"azrulputeri0807@gmail.com",
"95604"=>"kakakbalqeis@gmail.com",
"95747"=>"norisyam5184@gmail.com",
"95748"=>"fui44@hotmail.com",
"95605"=>"sitirohaidaadrianna11@gmail.com",
"95787"=>"nuraliabtazman@gmail.com",
"95749"=>"jurianah07@gmail.com",
"95718"=>"aieynzuriyanie94@gmail.com",
"95750"=>"z.syuhada93@gmail.com",
"95751"=>"tasyaalia645@gmail.com",
"95606"=>"nurazwatif@gmail.com",
"95607"=>"ainatarmizi36@gmail.com",
"95788"=>"ahmi_skater@yahoo.com",
"95719"=>"zura690@yahoo.com",
"95790"=>"aziehazel93@gmail.com",
"95613"=>"eulaliamimee91@yahoo.com",
"95614"=>"ssafiah94@yahoo.com",
"95615"=>"sheilasharf@icloud.com",
"95720"=>"sitimariam921211@gmail.com",
"95616"=>"ainafazzwin1996@gmail.com",
"95792"=>"izzatifaiz00@gmail.com",
"95793"=>"nurulabdullah2409@gmail.com",
"95752"=>"nurulasmaanuar092@gmail.com",
"95617"=>"dhiyazahid@gmail.com ",
"95757"=>"asniedarezali@gmail.com",
"95758"=>"sitihajarzulkhornail311086@gmail.com",
"95759"=>"fatihahyaacob@gmail.com",
"95760"=>"nur_rool@yahoo.com",
"95828"=>"wanmarjanwan@gmail.com",
"95618"=>"ainryo84@gmail.com",
"95761"=>"seriliya07@gmail.com",
"95762"=>"penyu3003@gmail.com",
"95620"=>"fatihazulkifle1@gmail.com",
"95794"=>"aidaidayu97@icloud.com",
"95621"=>"roszanariah1996@gmail.com",
"95622"=>"yatiali363@gmail.com",
"95623"=>"amir_trd85@yahoo.com",
"95795"=>"syimanasiruddin9412@gmail.com",
"95763"=>"aaira6500@gmail.com",
"95829"=>"nurmuslihahwani@gmail.com",
"95625"=>"azuraraini96@gmail.com",
"95626"=>"nursyazwanirahmat@icloud.com",
"95764"=>"dmax05871@gmail.com",
"95721"=>"hamizahisa12@gmail.com",
"95627"=>"riezadawiyah@gmail.com",
"95628"=>"armizanmizan19@gmail.com",
"95830"=>"siti768814@gmail.com",
"95723"=>"aienhassan08@gmail.com",
"95670"=>"syahirahizzati16@gmail.com",
"95796"=>"krina5808@gmail.com",
"95629"=>"tieismail28@gmail.com ",
"95672"=>"nrlsh4hidah@gmail.com",
"95630"=>"zulaiha72028@yes.my",
"95673"=>"ngviviana97@gmail.com",
"95674"=>"arniemayunis0825@gmail.com",
"95675"=>"sofiahanip@gmail.com",
"95765"=>"norshuhada439@gmail.com",
"95766"=>"juliashamieya30@gmail.com",
"95631"=>"alzua66@gmail.com",
"95676"=>"lyyana_84@yahoo.com",
"95634"=>"rahayu89raisha@gmail.com",
"95677"=>"danishizzul13@gmail.com",
"95678"=>"nurizzatinasir@icloud.com",
"95724"=>"syamimizuhairah388@gmail.com",
"95635"=>"nuraishahyasmin@gmail.com",
"95767"=>"nurfaadzillah2802@gmail.com",
"95636"=>"ikaatikah786@gmail.com",
"95637"=>"shahnurienz@gmail.com",
"95725"=>"imanfirdaus305@gmail.com",
"95726"=>"noraszuren91@gmail.com",
"95727"=>"nurulsheyka@gmail.com",
"95638"=>"roserryna84@gmail.com",
"95639"=>"miszanchak@gmail.com",
"95798"=>"dayanagazali93@gmail.com",
"95640"=>"zuramira72@gmail.com",
"95799"=>"idayuibrahim605@gmail.com",
"96407"=>"noraida_dyda91@yahoo.com",
"96408"=>"nurbee12@gmail.com",
"96409"=>"suzianaabdullah922@gmail.com",
"96410"=>"arengaziz83@gmail.com",
"96411"=>"nurulatikahkamaruzaman29999@gmail.com",
"96415"=>"masurah786@gmail.com",
"96417"=>"beylla1798@gmail.com",
);

$kmmlist2 = array();
$count = 0;
foreach($kmmlist as $subcriberid => $email)
{
	++$count;
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	
	if($count <= 100)
	{
		$date = '2021-08-01 ';
	}
	elseif($count > 200 && $count <= 300)
	{
		$date = '2021-08-02 ';
	}
	elseif($count > 300 && $count <= 400)
	{
		$date = '2021-08-03 ';
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
		$date = '2021-08-04 ';
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