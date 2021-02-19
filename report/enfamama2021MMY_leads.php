<?php

session_start();

$arr_allowUser = array(
	'bintizainal.nabela@rb.com',
	'nicki.liew@rb.com',
	'dorothea.ooi@rb.com',
	'enlinea',
	'karina.kamaruzaman@rb.com',
	'WanJin.Lim@rb.com',
	'techteam',
	'megan'
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password'] == 'mead123'){
	$_SESSION['meadLoginEnfamama'] = 1;
}

if ($_SESSION['meadLoginEnfamama']==1){
}else{
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<title>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2020</title>
<style>
	body 
{
	font-family: 'Oxygen', sans-serif;
	background-image: url("https://login.nuren.co/assets/v2/images/bg-custom1-motherhood.jpg");
	background-repeat: no-repeat;
    background-attachment: fixed;
	background-position: center;
	background-size: cover;
    min-width: 100%;
    width: auto;
}

a:hover 
{
	text-decoration: none;
}

hr.transparent 
{
	border-top-color: rgba(0 ,0, 0, 0.4);
	border-bottom: rgba(255, 255, 255, 0.08) solid 1px;
}

div.form-container 
{
	background: rgba(255, 255, 255);
	color: #000;
	width: 30%;
	min-height: 200px;
	height: auto;
	padding: 50px 30px 20px 30px;
	margin: 0 auto;
	border-radius: 20px;
	margin-top:-80px;

}

.btn-form 
{
	font-size: 1.1em;
	padding: 10px;
	border-radius: 20px;
	color:white;
	background:#39b44a;
	margin:20px 0px 20px 0px;
	width: 100%;
	border: none;
}

.simplefield 
{
	font-size: 1.05em;
    /* background-color: #fff; */
    background-image: none;
    /* border: 1px solid #dcdcdc; */
    border-radius: 0px;
    outline: none;
    height: 45px;
    -webkit-box-shadow: none!important;
    -moz-box-shadow: none!important;
    box-shadow: none!important;
    background: transparent;
    border: none;
	border-bottom: 1px solid grey;
	width:100%;

}

.form
{
	margin:40px 0px 20px 0px;
}

.text
{
	font-weight:bold;
	font-size:18px;
	margin:10px 0px 10px 0px;
}

.text-header
{
	font-size:25px;
	margin:10px 0px 10px 0px;
	text-align:center;
	line-height:2;

}

</style>
</head>

<form action='enfamama2021MMY_leads.php' method='post'>
<div style="row">
	<div style="text-align:center;">
		<img style="vertical-align: middle;width:10%;" src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
	</div>
	<div class="form-container">
		<div class="text-header">
		Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021
		</div>
		<div class="form">
			<div class="text">
				Login:
			</div>
			<input class="simplefield" name='login'>
		</div>
		<div class="form">
		<div class="text">
			Password:
			</div>
			<input class="simplefield" type='password' name='password'>
		</div>
		<input class="btn-form btn-full" type='submit'>
		<div style="text-align:right;">
		<img src="https://login.nuren.co/assets/v2/images/logo-nuren-vertical.png" style="width:20%;align:right;margin-top:30px;" />
</div>
	</div>
</div>
</form>
<?php	
	
	die();
}

include '../admin2635/dashboard/events/events_db_config.php';

if ($_POST['export']){
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=report.xls");
}
header("Pragma: no-cache");
header("Expires: 0");
$productList=array();
    error_reporting(E_ALL &~E_NOTICE);
    ini_set('display_errors', '1');
	
?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/css/all.min.css">
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/js/bootstrap.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<title>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021</title>
<style>
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#menu > li:last-child
{
	float:right;
}
ul:not(.leftmenu){
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li:not(.leftmenu) {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child:not(.leftmenu) {
    border-right: none;
}

li:not(.leftmenu) a:not(.leftmenu) {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li:not(.leftmenu) a:hover:not(.active):not(.leftmenu) {
    background-color: #111;
}

.active:not(.leftmenu) {
    background-color: #4CAF50;
}

</style>
</head>

<?php

   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("_",basename($baseprog[0]));
?>
		<ul>
         
			 <li><a href="enfamama2021Kelabmama_leads.php" <?php if ($checkName[0]=='enfamama2021Kelabmama' ) echo "class='active'"; ?>>Kelabmama</a></li>
			  <li><a href="enfamama2021MMY_leads.php" <?php if ($checkName[0]=='enfamama2021MMY' ) echo "class='active'"; ?>>Motherhood</a></li>
			  
        </ul>
		
<h1>Lead Generation Report | Motherhood.com.my Malaysia | Enfamama 2021</h1>
<form method='post'>
Start Date: <input type='date' name='searchDateStart' value="<?php echo $_POST['searchDateStart']; ?>">
<br>End Date: <input type='date' name='searchDateEnd' value="<?php echo $_POST['searchDateEnd']; ?>">
<br>Export: <input type='checkbox' name='export' >
<br>
<input type='submit' style="padding:10px;">
</form>

<?php
// No | Email | First Name | Last Name | Created Date | Phone | DOB | Kids 1-6
$searchStart="";
$searchEnd="";
$limit = "";
$limit = "LIMIT 3500";
$kmmlist = array(
	'siti.wawa23@yahoo.com',
	'dylaaziz105@gmail.com',
	'wawazamzuri@gmail.com',
	'chezait@gmail.com',
	'zianahnoornoor@gmail.com',
	'hijrahbakarwork@gmail.com',
	'thea.m.mak@gmail.com',
	'sitih3533@gmail.com',
	'violet_haania@yahoo.com.my',
	'nurdhia2020@gmail.com',
	'najwarahman17@gmail.com',
	'haswatistam.hs@gmail.com',
	'cikas96@gmail.com',
	'achaachanehinehi1211@gmail.com',
	'14tieqhalis@gmail.com',
	'ismahani960523@gmail.com',
	'sayanoniey@gmail.com',
	'erinnazira2@gmail.com',
	'adlieanaisma@gmail.com',
	'norsyafinaz1996@gmail.com',
	'khairunadiahrosli@gmail.com',
	'sitinoorfatihah910@gmail.com',
	'nurulruslan433@gmail.com',
	'sitinabilah4444@gmail.com',
	'hafilazron161@gmail.com',
	'nurulsafiqahabdulrazak@yahoo.com',
	'faezahpaie@gmail.com',
	'wafaaaziz92@gmail.com',
	'wandyla1995@gmail.com',
	'nurulfatinmokhtar078@gmail.com',
	'tikah8080@gmail.com',
	'nuraziera1988@gmail.com',
	'afeenaroszaime@gmail.com',
	'hazifahmias@gmail.com',
	'ilawi0805@gmail.com',
	'saidatinakadijah@yahoo.com',
	'anisnadiah26@gmail.com',
	'fze.hanni86@gmail.com',
	'syahira1993@yahoo.com',
	'bungashila89@gmail.com',
	'errnanazira@gmail.com',
	'shabila272@gmail.com',
	'hain53212@gmail.com',
	'shazlinsyafika1407@gmail.com',
	'oneil_84@yahoo.com',
	'hasniza.yazid@gmail.com' ,
	'jaudah5670@gmail.com' ,
	'shazlienayonchik@gmail.com' ,
	'aswena.j@gmail.com' ,
	'niksitifatimah@emil.com' ,
	'nurdalilatabri@gmail.com' ,
	'sfarahrosli6@gmail.com' ,
	'amirahnur423@gmail.com' ,
	'syafilaeyla@gmail.com' ,
	'maza745@gmail.com' ,
	'fienaeryana@gmail.com' ,
	'nurulaqilahabdullah46@gmail.com' ,
	'asmatwahab2106@gmail.com' ,
	'iswaniisa@gmail.com' ,
	'norainamohdnor98@gmail.com' ,
	'einaznurie@gmail.com' ,
	'farisya2543@gmail.com' ,
	'ayubmohamad3@gmail.com' ,
	'eykacapik1628@gmail.com' ,
	'nurulhasmieza0@gmail.com' ,
	'speakerkecik@yahoo.com' ,
	'fuzieyana3218@gmail.com' ,
	'ssuhaila@gmail.com' ,
	'ellasabah890@gmail.com' ,
	'farahnizam2109@gmail.com' ,
	'intannh3006@gmail.com' ,
	'ajatalghazali95@gmail.com' ,
	'sitiasma2911@gmail.com' ,
	'leeweileang@gmail.com' ,
	'rabiatuladawiah141189@gmail.com' ,
	'zidatul_akma@yahoo.com' ,
	'fazilahabdullah9@gmail.com' ,
	'ernifarahain90@gmail.com' ,
	'nurakiramhamod@gmail.com' ,
	'rumylalyza78@gmail.com' ,
	'aienniena23@gmail.com' ,
	'mariamhafizah97@gmail.com' ,
	'adahrich@gmail.com' ,
	'pyqaibrahim97@gmail.com' ,
	'farahwahida804@gmail.com' ,
	'sitikhairunnisakhairuddin89@gmail.com' ,
	'fazilahishak8081@gmail.com' ,
	'shaniesha849@gmail.com' ,
	'nanasuzana85@gmail.com' ,
	'shuhailaazib92@gmail.com' ,
	'kurosakichigo05@gmail.com' ,
	'maslina.sulaiman86@gmail.com' ,
	'atirahtuanmat@gmail.com' ,
	'marzurah88@gmail.com' ,
	'suhaidahamid85@gmail.com' ,
	'norazlina234@yahoo.com' ,
	'asriezalsaidatul@gmail.com' ,
	'nurulazawanibtabdaziz@gmail.com' ,
	'sissyimani@gmail.com' ,
	'zulaika.sofi92@gmail.com' ,
	'marzailani1@gmail.com' ,
	'shaizatulakmar95@gmail.com' ,
	'suganthi.balakerisnan@gmail.com' ,
	'sitisarah276@gmail.com' ,
	'ruhilakhlam_idris@yahoo.com' ,
	'hasmaish@gmail.com' ,
	'farahanna_han@yahoo.com' ,
	'norhasmirasiti@yahoo.com' ,
	'suhanahassan91@icloud.com' ,
	'nurhafizasamail5808@gmail.com' ,
	'syeeraazhari91@gmail.com' ,
	'anisbaijuri@gmail.com' ,
	'icahanisa977@gmail.com' ,
	'nabilah_syazana@yahoo.com' ,
	'wana91.wa@gmail.com' ,
	'rozaakma@gmail.com' ,
	'nurquraisya672@gmail.com' ,
	'naaishah0411@gmail.com' ,
	'zulaikhayusof249@gmail.com' ,
	'adreinaashikin@yahoo.com' ,
	'anieyfazni47@gmail.com' ,
	'farahanim2509@gmail.com' ,
	'mimiwahidah.abakri@gmail.com' ,
	'ramleeumikhalsom@gmail.com' ,
	'whidayah35@yahoo.com' ,
	'nabieylaahmad@gmail.com' ,
	'farradieyana47@gmail.com' ,
	'sitiauna83@gmail.com' ,
	'shidarazak1991@gmail.com' ,
	'nurshakila961020@icloud.com' ,
	'kavithasekaran@yahoo.com' ,
	'nur_usrah@yahoo.com' ,
	'acusiti0805@gmail.com' ,
	'idah639@gmail.com' ,
	'nurfarah6514@gmail.com' ,
	'lailamaizanyap84@gmail.com' ,
	'siti_nadirah507@yahoo.com' ,
	'afifiarahim1990@gmail.com' ,
	'laveanteae96@gmail.com' ,
	'sitinurainiabas87@gmail.com' ,
	'rahimfitriah@gmail.com' ,
	'nurshahkilah07@gmail.com' ,
	'nurnaziera92@yahoo.com' ,
	'shingo2481@gmail.com' ,
	'norashidah.abdullah@yahoo.com' ,
	'aziefazidah2012@gmail.com' ,
	'tawafnieta@gmail.com' ,
	'nour.ashikinn53@gmail.com' ,
	'kawkopikaw@gmail.com' ,
	'nurliana_nordin@yahoo.com' ,
	'akmalnurul.an@gmail.com' ,
	'hashimah8804@gmail.com' ,
	'umimohdhamdan@gmail.com' ,
	'husnanur3427@gmail.com' ,
	'mahanibakar16@gmail.com' ,
	'hadirahh@yahoo.com' ,
	'astinihmasantu@gmail.com' ,
	'werramera1410@gmail.com' ,
	'hazimah8813@gmail.com' ,
	'azizjohn943@gmail.com' ,
	'millaninie07@gmail.com' ,
	'chenoaziyan@gmail.com' ,
	'ika_popcorn@yahoo.com.my' ,
	'syieramazlee98@gmail.com' ,
	'mimimizul92@gmail.com' ,
	'hidarosli@yahoo.com' ,
	'fatimah980131@gmail.com' ,
	'qeypoy2694@gmail.com' ,
	'bibie.len20@gmail.com' ,
	'wennstudio.my@gmail.com' ,
	'meihuijess1215@gmail.com' ,
	'noor.baizurah@yahoo.com' ,
	'isyaninie@gmail.com' ,
	'suven0911@gmail.com' ,
	'izzahd42@gmail.com' ,
	'ainapina@gmail.com' ,
	'misengphiloniza@gmail.com' ,
	'miramizan.mm@gmail.com' ,
	'ayiezziskandr@gmail.com' ,
	'fakhriahrafizanfgmc@gmail.com' ,
	'janizaanuar9@gmail.com' ,
	'ikaamir2010@gmail.com' ,
	'bebyyloyy@gmail.com' ,
	'annamuss59@gmail.com' ,
	'anasmustaqim2016@gmail.com' ,
	'rehanisbahrom@gmail.com' ,
	'syazwanimuhamadyusof@yahoo.com' ,
	'paulbert8285@gmail.com' ,
	'matrahabdrahman@gmail.com' ,
	'fazlianafazil@yahoo.com' ,
	'chanmeimeii62@gmail.com' ,
	'nurelmania@gmail.com' ,
	'catycahaya@gmail.com' ,
	'hafeeseha@hotmail.com' ,
	'niknurasmaq8@gmail.com' ,
	'shidah.idah1193@gmail.com' ,
	'alzahraagency@gmail.com' ,
	'asfarinamihd@gmail' ,
	'supinahkhairul@gmail.com' ,
	'ainifaizah0310@gmail.com' ,
	'shakilairnie@gmail.com' ,
	'nanafaltina@gmail.com' ,
	'natashashahrul74@gmail.com' ,
	'rajasyahira.rs@gmail.com' ,
	'izzara1991@gmail.com' ,
	'tehahdali@gmail.com' ,
	'marylenojella@gmail.com' ,
	'nurmerul@gmail.com' ,
	'melthelda00@gmail.com' ,
	'ct.azlina8740@gmail.com' ,
	'effina98@gmail.com' ,
	'aini95@gmeil.com' ,
	'diybamoshie@gmail.com' ,
	'nurakmasito@gmail.com' ,
	'sharanmienmila@gmail.com' ,
	'nuratikah290696@gmail.com' ,
	'owlctiey@gmail.com' ,
	'surianas29@gmail.com' ,
	'dilashahrin@gmail.com' ,
	'fiza.aaura@gmail.com' ,
	'alialatif97@gmail.com' ,
	'putridyan9696@gmail.com' ,
	'kaborrijaa@gmail.com' ,
	'lesyanana@gmail.com' ,
	'cheq466@gmail.com' ,
	'nds.emir89@gmail.com' ,
	'izlieanin@gmail.com' ,
	'nurulainnajiha1997@gmail.co' ,
	'muhammadluqman379@gmail.com' ,
	'istiqamah2727@gmail.com' ,
	'zieyahrasid@gmail.com' ,
	'zaranova20@gmail.com' ,
	'ayeishariff15@gmail.com' ,
	'sitinurshariza@gmail.com' ,
	'noemie95a@icloud.com' ,
	'ninafia14@gmail.com' ,
	'aisyah.wellness@gmail.com' ,
	'm_llory@yahoo.com.my' ,
	'zurinisaperi@gmail.com' ,
	'noorshahira888@yahoo.com' ,
	'sutacha00@gmail.com' ,
	'natashyanajwa87@gmail.com' ,
	'iqarinaldi33@gmail.com' ,
	'nhidayah.ibrahim96@gmail.com' ,
	'mawarberduri.mb@gmail.com' ,
	'dyzaima06@yahoo.com.my' ,
	'nurdiyanatamizi93@gmail.com' ,
	'anni25.syahirah@gmail.com' ,
	'dakila2401@gmail.com' ,
	'natashadibah@gmail.com' ,
	'siti_ecah53@yahoo.com' ,
	'lailanasuhah@yahoo.com' ,
	'naziera.en@gmail.com' ,
	'washa703@gmail.com' ,
	'noratikah981227@gmail.com' ,
	'farizan_noor@yahoo.co.uk' ,
	'tikaliana286@gmail.com' ,
	'ngdimanmasturah@gmail.com' ,
	'dalilahazwan@gmail.com' ,
	'mierabella13@gmail.com' ,
	'asyakirah96@gmail.com' ,
	'ikadin93@gmail.com' ,
	'sitiaqilah_91@yahoo.com' ,
	'afiqahjamian@hotmail.com' ,
	'bakeryizans@gmail.com' ,
	'zahirahfarhani3@gmail.com' ,
	'yuyue5894@gmail.com' ,
	'haslizawani94@gmail.com' ,
	'fazihah739@gmail.com' ,
	'nurulaisyahadilaz@gmail.com' ,
	'hazwaniabrahim@gmail.com' ,
	'babynamia@gmail.com' ,
	'eykazalikha01@gmail.com' ,
	'hanimohdnor@gmail.com' ,
	'fatinhuzaifah@yahoo.com' ,
	'epyza1994@gmail.com' ,
	'fatinaziz20@yahoo.com.my' ,
	'nurdayana72@yahoo.com' ,
	'93nurnabilah@gmail.com' ,
	'aizafawwaz28@gmail.com' ,
	'sitihajahajar5@gmail.com' ,
	'nursyafiqah.ns30@gmail.com' ,
	'intannursuhadah.mohdyani@gmail.com' ,
	'norafidaaziz90@gmail.com' ,
	'lisausagi84@gmail.com' ,
	'topex7730@gmail.com' ,
	'shjaja59@yahoo.com' ,
	'nurulhafizah_omar87@yahoo.com' ,
	'norafiqahrakeman93@gmail.com' ,
	'zahidahzulaikha111@gmail.com' ,
	'affendyandy26@gmail.com' ,
	'zueralong94@gmail.com' ,
	'kamarulkeisha@gmail.com' ,
	'khaibell77@gmail.com' ,
	'ainshafinas@gmail.com' ,
	'noniafriyanti92@yahoo.com' ,
	'normalisa23@gmail.com' ,
	'azilazollkafri@gmail.com' ,
	'ermie.sharhida@gmail.com' ,
	'reehansenawi@gmail.com' ,
	'adawiyahkarim@yahoo.com' ,
	'ayufizi00@gmail.com' ,
	'azlannajuwa@gmail.com' ,
	'akuinan_87@yahoo.con' ,
	'mynabilah91@gmail.com' ,
	'nurhanumbaizura@gmail.com' ,
	'wanieazreen85@gmail.com' ,
	'sitifatimahadamhaikal@gamil.com' ,
	'rahmanamanina9621@gmail.com' ,
	'zuranual@gmail.com' ,
	'mis3mimi@gmail.com' ,
	'missrara1989@gmail.com' ,
	'nabiel87@gmail.com' ,
	'azwana_azrul@hotmail.com' ,
	'anthoniuschristine@gmail.com' ,
	'nurulfazlina5052@gmail.com' ,
	'norhaidarajak07@gmail.com' ,
	'surayasff@gmail.com' ,
	'norashikinzakaria16@gmail.com' ,
	'zaqqirahf@gmail.com' ,
	'dianasofea603@gmail.com' ,
	'adilaazhar@gmail.com' ,
	'saahrunes9766@gmail.com' ,
	'chientaskandal@gmail.com' ,
	'anissazakira@yahoo.com' ,
	'hudahajihah@gmail.com' ,
	'eiyka.aj@gmail.com' ,
	'norasikin19@ymail.com' ,
	'oppo49755@gmail.com' ,
	'nabilamohamad89@gmail.com' ,
	'aliahmahadi56@gmail.com' ,
	'shazlina_ak@yahoo.com' ,
	'hannan_world@yahoo.com.my' ,
	'klensyk@gmail.com' ,
	'linda89may@yahoo.com' ,
	'doraemon9349@gmail.com' ,
	'sitihanis153@gmail.com' ,
	'asmaanoorasmaa88@gmail.com' ,
	'piponian75@gmail.com' ,
	'nurulainmazzelan@gmail.com' ,
	'mashitah.ramli@gmail.com' ,
	'mariansomo@icloud.com' ,
	'asida055090@gmail.com' ,
	'shierashukor@gmail.com' ,
	'lisaanatasha@gmail.com' ,
	'syazanaijan97@gmail.com' ,
	'natashazulaikha90@yahoo.com' ,
	'gloomygurl_030193@yahoo.com' ,
	'fieqachapz@gmail.com' ,
	'asmaul1236@gmail.com' ,
	'alianajwaabdulhalim@gmail.com' ,
	'fatimaazzahra162@gmail.com' ,
	'yegkam24@gmail.com' ,
	'sufihajiramli@gmail.com' ,
	'adauwiah01@gmail.com' ,
	'norjuliana905@gmail.com' ,
	'zenpou@yahoo.com' ,
	'syahidasanipan@gmail.com' ,
	'nur.eykaa69@gmail.com' ,
	'anasrider51@gmail.com' ,
	'theqisya@gmail.com' ,
	'elanselvi86@yahoo.com' ,
	'spartafluffy@gmail.com' ,
	'nurulasmaanuar092@gmail.com' ,
	'marlianabakeri9@gmail.com' ,
	'syaem09@gmail.com' ,
	'rosnielipujalak@gmail.com' ,
	'sitinoraziera1994@gmail.com' ,
	'nurainn508@gmail.com' ,
	'merahvivo262@gmail.com' ,
	'yat198928@gmail.com' ,
	'alyanajati96@gmail.com' ,
	'irahmuizzirahzamil@gmail.com' ,
	'shaazahari@gmail.com' ,
	'norsuria9500@gmail.com' ,
	'cumyrahman@gmail.com' ,
	'n.fazlinahanim@yahoo.com' ,
	'marryamruqayyah4@gmail.com' ,
	'dysyse99@yahoo.com' ,
	'nabila_sabree@yahoo.com' ,
	'diling180@yahoo.com' ,
	'hanafaizatul98.hf@gmail.com' ,
	'madamtaurus88@gmail.com' ,
	'annie_00814@hotmail.com' ,
	'azzaysn@gmail.com' ,
	'aziezack21@gmail.com' ,
	'manisharajakumar@gmail.com' ,
	'yanariesgirl@gmail.com' ,
	'yattnordin98@gmail.com' ,
	'nurathirahh555@gmail.com' ,
	'zaujahaliff90@gmail.com' ,
	'0707anna0707@gmail.com' ,
	'sumayyahmaria86@gmail.com',
	'nurfadzilahmukhtar96@gmail.com'
);

$kmmlist2 = array();
foreach($kmmlist as $val)
{
	$kmmlist2[] =  trim("'" . $val . "'");
}

$string_email = '';
$string_email = implode(",", $kmmlist2);

if ($_POST['searchDateStart'])
	$searchStart=" AND Subscribed_Date >='".$_POST['searchDateStart']."' ";

if ($_POST['searchDateEnd'])
	$searchEnd=" AND Subscribed_Date <='".$_POST['searchDateEnd']." 23:59:59' ";
	$datetoday = date("Y-m-d");
    $sql =  
        "
SELECT * FROM (
SELECT newEmail as Email, newFirstName as 'First Name', newLastName as 'Last Name', subscriber_created_at as 'Subscribed_Date',subscriber_question14 as 'Parent DOB',
subscriber_question1 as 'Phone', subscriber_question4 as 'Status',
subscriber_question8 as 'Address' , subscriber_question9 as 'Postcode',subscriber_question10 as 'City', subscriber_question11 as 'State'
FROM ps_events_subscriber a
WHERE 1=1 AND subscriber_event_id=100 AND subscriber_question4='pregnant' AND newEmail NOT IN (" . $string_email . ") AND newEmail != 'chris.tan@nurengroup.com' AND newEmail !='alison.tham@nurengroup.com'
AND newEmail != 'weezhen.cheah@nurengroup.com' AND newEmail != 'hooishan.nurengroup@gmail.com' AND newEmail NOT LIKE '%nurengroup%' AND newEmail NOT LIKE '%test%'
AND (subscriber_created_at >= '2021-01-01 00:00:00' AND subscriber_created_at <= '2021-12-31 23:59:59')

GROUP BY newEmail
ORDER BY subscriber_created_at ASC " . $limit . ") B WHERE 1=1 $searchStart $searchEnd  "; 

// echo $sql;
// B WHERE 1=1 AND Subscribed_Date <= '".$datetoday." 23:59:59' $searchStart $searchEnd 
//AND subscriber_created_at <= '2020-07-16 23:03:21' OR subscriber_created_at > '2020-07-31 23:59:59'
	$result = $conn->query($sql);
	echo mysql_result_all_html($result,"border=1");
	
    $result->close();
    mysqli_close($conn);
	
    function mysql_result_all_html($result, $tableFeatures="") {
		if ($_GET['event_type'])
			$headerStr=" for ".$_GET['event_type'];
		
	  $table .= "<table class='table-bordered table-sm'>\n\n";
	  $noFields = mysqli_num_fields($result);
	  $table .= "<thead class='thead-dark'><tr><th>No.</th>\n";
	  for ($i = 0; $i < $noFields; $i++) {
		$field = mysqli_field_name($result, $i);
		$table .= "\t<th>$field</th>\n";
	  }
	   $table .= "</tr></thead>";
	  $ccount=0;
	  while ($r = mysqli_fetch_row($result)) {
		//Change showing date format from YYYY-MM-DD to DD-MM-YYYY
		//$here = $r[5];
		//$date = explode("-", $here);
		//$datef = $date[2].'-'.$date[1].'-'.$date[0];
		//$r[5] = $datef;

		$ccount++;
		$table .= "<tr><td>$ccount</td>\n";
		foreach ($r as $kolonne) {
		  $table .= "\t<td>$kolonne</td>\n";
		}
		$table .= "</tr>\n";
	  }
	  $table .= "</table>\n\n";
	  $table .= "<!--End debug from SQL query-->\n\n";
	  return $table;
	}
    
    function mysqli_field_name($result, $field_offset) {
		$properties = mysqli_fetch_field_direct($result, $field_offset);
		return is_object($properties) ? $properties->name : null;
	}



?>