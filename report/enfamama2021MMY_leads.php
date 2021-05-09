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
$limit = "LIMIT 8970";
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
	'nurfadzilahmukhtar96@gmail.com',
	'mya.aqilah90@gmail.com', # batach february send to kmm (22/2/2021)
	'farizarazak87@gmail.com',
	'aidahmadarun69@gmail.com',
	'ainamy8938@gmail.com',
	'sayang960330@gmail.com',
	'fatin950903@gmail.com',
	'cikbalqis_adib@yahoo.com',
	'nurulhudaa2312@gmail.com',
	'nuralesya_91@yahoo.com',
	'azlindar.2one@gmail.com',
	'nadshahril@gmail.com',
	'kausalyashaktas31@gmail.com',
	'nurulsuhaidah8958@yahoo.com',
	'sofea2106@gmail.com',
	'nurulafiqah066@gmail.com',
	'halimfir17@gmsil.com',
	'nanilafin83@gmail.com',
	'ore_timur27@yahoo.com',
	'fieyzatiut22@gmail.com',
	'hamdantah916@gmail.com',
	'adenk_j91@yahoo.com',
	'hajirah296@gmail.com',
	'cwrosnizan@gmail.com',
	'jazbella@yahoo.com',
	'alimin_julinah95@yahoo.com',
	'emaira.farisar22@gmail.com',
	'rohayuarsat3404@gmail.com',
	'mummyauskhairy@gmail.com',
	'areyou_cutez@yahoo.com',
	'amalariff@gmail.com',
	'manjafaith83@icloud.com',
	'sitisaerah279@gmail.com',
	'nckanie@yahoo.com',
	'norhidayutrimo@gmail.com',
	'aienmerun@gmail.com',
	'adamayu6@gmail.com',
	'fadzli_julia@yahoo.com',
	'hasimayonroslan@gmail.com',
	'nurmarsyain@gmail.com',
	'sheila85la@gmail.com',
	'syafiza.shafee@gmail.com',
	'iffatrayyan04@gmail.com',
	'ratmawati@gmail.com',
	'ctkkkb@yahoo.com',
	'nurshaida94@gmail.com',
	'qistinanuar87@gmail.com',
	'shafizah5126@gmail.com',
	'nor_amyla@yahoo.com',
	'suganthi_murthy@ymail.com',
	'shurayashikhharin@gmail.com',
	'hidayahhudamokhtar@gmail.com',
	'syalwana@gmail.com',
	'misikuzaza@gmail.com',
	'syaidaeyda@gmail.com',
	'nmaisarah272@gmail.com',
	'norsyahzilaa@gmail.com',
	'jule.lik91@gmail.com',
	'wrafidah92@gmail.com',
	'ctnurelly@gmail.com',
	'noniegemini_97@yahoo.com',
	'nurulanirarusli@gmail.com',
	'mikayla280892@gmail.com',
	'sazilaazie@gmail.com',
	'haida_895428@yahoo.com',
	'tinisulong87@gmail.com',
	'nurshahidahshahidanmrsm@gmail.com',
	'elly_miera2004@yahoo.com',
	'isfahany8890@gmail.com',
	'nurqherrunqissha@gmail.com',
	'lina_saarani89@yahoo.com',
	'nurjulianafiq92@gmail.com',
	'qalesyanurqaseh70@gmail.com',
	'khadijah870822@gmail.com',
	'norasyafika96@gmail.com',
	'norazrenaalias@gmail.com',
	'nurnadiabahari9105@gmail.com',
	'norsam0904@gmail.com',
	'akmarshafie52@gmail.com',
	'linlin94736891@gmail.com',
	'norsyamsella@yahoo.com',
	'eiynaaidris@gmail.com',
	'syiera24434@gmail.com',
	'elmie1185@gmail.com',
	'nurkhatijahismail@gmail.com',
	'adlinadayana1211@gmail.com',
	'izati4238@gmail.com',
	'atiey252@gmail.com',
	'syahiransobri89@yahoo.com.my',
	'sitirokiah030@gmail.com',
	'zurin_jb@yahoo.com',
	'salnie88yamaha@gmail.com',
	'sitihazirahbintijali19@yahoo.com',
	'amni.syazani@gmail.com',
	'snzuraida@gmail.com',
	'nurulazieda34@yahoo.com',
	'zawiyahmohdanuar@gmail.com',
	'fatniazhar@yahoo.com',
	'faznazri53@gmail.com',
	'eiykaathikah95@gmail.com',
	'norfa8609@gmail.com',
	'nnazihahsaad@gmail.com',
	'aannlulu94@gmail.com',
	'sarpiasahak85@gmail.com',
	'farawaheeda1090@gmail.com',
	'bellkina1990@gmail.com',
	'kenixtai86@yahoo.com',
	'norsuraliyasukarni@yahoo.com',
	'zahrasyafieka18@gmail.com',
	'izzhaiqalhakimi@gmail.com',
	'kenixtai1128@gmail.com',
	'nurul.syahira101@gmail.com',
	'thyetpl@gmail.com',
	'ruzaini_izah94@yahoo.com',
	'husnamawaddah86@gmail.com',
	'ayuibrahim88@gmail.com',
	'tututjiraiya@gmail.com',
	'norbitahsaimin@gmail.com',
	'ctnorasyikah@gmail.com',
	'tishelle2727@gmail.com',
	'lauritamartin509@gmail.com',
	'zamrina_yahya@yahoo.com',
	'fatimahhanim888@gmail.com',
	'moojosephine@gmail.com',
	'asreen84@gmail.com',
	'i_hanan@ymail.com',
	'intansarina@gmail.com',
	'knabilake@gmail.com',
	'norhaslizaliza3@gmail.com',
	'norsyafira1296@gmail.com',
	'ashekin.nurul@yahoo.com',
	'faridshida@gmail.com',
	'allyadaniela91@gmail.com',
	'nuraini_ibrahim@rmp.my',
	'shafini.norashid@gmail.com',
	'mariya_zulayka@yahoo.com.my',
	'khodijahariffin@gmail.com',
	'noorsafawati85@gmail.com',
	'kresha2030@gmail.com',
	'syazwani036136@gmail.com',
	'azeerahani11@gmail.com',
	'aznazie11@gmail',
	'natashafazwien@gmail.com',
	'belleglow1494@gmail.com',
	'elly_roziana06@yahoo.com',
	'haniff235@yahoo.com',
	'hafidamohammad@gmail.com',
	'nor.amirah0051@gmail.com',
	'khadijahsiti742@gmail.com',
	'coklatmanis28@gmail.com',
	'emmaarizah@gmail.com',
	'kanagesvisu@gmail.com',
	'norinazanirozman@yahoo.com',
	'azizahmajid1987@gmail.com',
	'ciiekqa@gmail.com',
	'nuraien1911@gmail.com',
	'nureenalya20@gmail.com',
	'aniza_88@yahoo.com',
	'atehmustafa@gmail.com',
	'nusililey@gmail',
	'tanjongaisyah2211@gmail.com',
	'safinas442@gmail.com',
	'normafariyani3008@gmail.com',
	'cikshiela@yahoo.com',
	'diyana.salji@gmail.com',
	'faraji8285@gmail.com',
	'najiyahdany99@gmail.com',
	'bdemok39@gmail.com',
	'sitilee01@gmail.com',
	'nazman5489@gmail.com',
	'safurakamis@gmail.com',
	'shieralynmosiun@gmail.com',
	'dkny4800@gmail.com',
	'sabarinapersonal@gmail.com',
	'widyharyani@gmail.com',
	'cutemuniesah@gmail.com',
	'suesahat52@gmail.com',
	'syahiraripin@gmail.com',
	'naddia.tm@gmail.com',
	'rossalinaaleef90@gmail.com',
	'durkha.ds@gmail.com',
	'anisazira010@gmail.com',
	'shantykenawang@gmail.com',
	'asmarulhusna87@gmail.com',
	'hidayahhafeez87@gmail.com',
	'norhuzaimahbahaudin@yahoo.com',
	'dazrin06_eva@yahoo.com.my',
	'erol0688@yahoo.in',
	'cahayati4@gmail.com',
	'tyrahcellow@gmail.com',
	'nur_hacs@yahoo.com',
	'fahizah1023@gmail.com',
	'nurafrina_johari@yahoo.com',
	'noorsyafina@gmail.com',
	'nfitriah.ishak@gmail.com',
	'nurshamiminzilkifli@gmail.com',
	'lyzanaruto@gmail.com',
	'analia_eila@yahoo.com',
	'knazharul@gmail.com',
	'mia_comel2@yahoo.com',
	'eyesyahrahim@gmail.com',
	'nurulhuda5644@gmail.com',
	'mrsefyy92@gmail.com',
	'afizal.anuar@yahoo.com',
	'mem.eija@yahoo.com',
	'namikakunidachan@gmail.com',
	'nurhaslizamohdfauzi@yahoo.com',
	'farrydatularmaya97@gmail.com',
	'izazi77@yahoo.com',
	'suhaina1610@gmail.com',
	'eeqa1234@gmail.com',
	'hartini_abdullah1981@yahoo.com',
	'ctzura9285@gmail.com',
	'nadiasyazlinaabdulwahid16894@gmail.com',
	'sham.25967@gmail.com',
	'nurulkhayladamia@gmail.com',
	'umianatsd@gmail.com',
	'asmahaini@yahoo.com.my',
	'azlyanisainum@yahoo.com',
	'gowri0220@yahoo.com',
	'najibaney5757@yahoo.com',
	'sasamiesa@gmail.com',
	'razhairafidah@yahoo.com',
	'atikahamira1607@gmail.com',
	'badiahwahab@gmail.com',
	'nirafiqahbain@gmail.com',
	'ku_zaitun@yahoo.com',
	'aidabahruddin@gmail.com',
	'moro92323@gmail.com',
	'lilymuneera57@gmail.com',
	'rohanabakar93@gmail.com',
	'asyifadariya90@gmail.com',
	'saferraanora8@gmail.com',
	'waniesb90@gmail.com',
	'mail175963@oo.com',
	'shyamine08@gmail.com',
	'rizdwanrizki@gmail.com',
	'fvhminui88@icloud.com',
	'shah.math.89@gmail.com',
	'asmizaadzra@gmail.com',
	'shilahavoc@gmail.com',
	'amirafirdaus9516@gmail.com',
	'hasnurulroslan@gmail.com',
	'hazwanieafikah67@gmail.com',
	'norsuriatipipadhilah@gmail.com',
	'nnajihah548@gmail.com',
	'nurulazmiza4@gmail.com',
	'suhaila_r@ymail.com',
	'ainryo84@gmail.com',
	'rafizzatul03@gmail.com',
	'norazlinnn1018@gmail.com',
	'izzatifarfara@gmail.com',
	'rohaiza.ayza@facebook.com',
	'sitisalehah8778@yahoo.com',
	'ciknurhayati93@gmail.com',
	'shnuruladilahsyabdaziz@gmail.com',
	'remsgarbon1988@gmail.com',
	'sue_wry3020@yahoo.com.my',
	'niaeryllza@gmail.com',
	'bussainaammara@gmail.com',
	'akumirayazid@gmail.com',
	'asmahamzah20@gmail.com',
	'misznora25@gmail.com',
	'syuhadan112@gmail.com',
	'malieyn9407@gmail.com',
	'hafizahnasri95@gmail.com',
	'zarafariz@yahoo.com',
	'shera.satari@gmail.com',
	'shieraakmal@gmail.com',
	'pfh3931@gmail.com',
	'sethshazael15@gmail.com',
	'bainunahmad439@gmail.com',
	'ayanarahman89@gmail.com',
	'nurulaidahusin@gmail.com',
	'qaseh_atiqah91@yahoo.com',
	'baktiarabbas92@gmail.com',
	'earieyputry30@gmail.com',
	'fazerauda@ymail.com',
	'sitinorhidayah1008@gmail.com',
	'sitinoornasimah@gmail.com',
	'mutieali4494@gmail.com',
	'hannyfarisya1312@gmail.com',
	'nurfaezahmadzlan@gmail.com',
	'kylaotai@yahoo.com',
	'bettyypd5511@gmail.com',
	'stellaanak6020@gmail.com',
	'zurraiddabujang@yahoo.com',
	'fatinrosle92@gmail.com',
	'helmynuyoo@gmail.com',
	'sitirohayniismail@yahoo.com',
	'aimaramijie@gmail.com',
	'aziradaud5162@gmail.com',
	'tengkunatasya14@gmail.com',
	'faziyana8590@gmail.com',
	'mmmmilyman@gmail.com',
	'afyjoe@gmail.com',
	'mdiqc2574@gmail.com',
	'masaneramamat@gmail.com',
	'snorhasmaliana@yahoo.com',
	'ryiamaria1987@gmail.com',
	'syafiqahazwarjo@gmail.com',
	'nurinsyazanhusna@gmail.com',
	'sofiahzarid@gmail.com',
	'aisyahsyah3622@gmail.com',
	'anis.msb238@gmail.com',
	'9478isyah@gmail.com',
	'godfreyerrolfernandez88@gmail.com',
	'seridewimalam28@yahoo.com',
	'fara.azuan95@gmail.com',
	'aiemizalikha@gmail.com',
	'mel.jm89@gmail.com',
	'azilaazman58@gmail.com',
	'bianisabang@gmail.com',
	'nurulhuda95714@yahoo.com',
	'syazwaniafiqah93@yahoo.com',
	'jerryda3005@gmail.com',
	'amalina.flower@gmail.com',
	'nordasilawatishamsi89@gmail.com',
	'wannorlinnahabdil@gmail.com',
	'zierara20@gmail.com',
	'nhmt810@gmail.com',
	'hafizailias96@gmail.com',
	'nab_1989@icloud.com',
	'noorhazwani36@gmail.com',
	'anishusnaa@gmail.com',
	'szakwanhrayyan@gmail.com',
	'qtee1207@gmail.com',
	'marani820801@gmail.com',
	'nurulsyafikanoor@gmail.com',
	'iideela@yahoo.com',
	'nureqin82@gmail.com',
	'shana303411@gmail.com',
	'izzaidahnazri@gmail.com',
	'ashikinzaki90@gmail.com',
	'syukri.nata95@yahoo.com',
	'norhidayahmohdsabri94@gmail.com',
	'marianiwanjusoh@gmail.com',
	'ieydaaziz9@gmail.com',
	'fhah.83@gmail.com',
	'ashmimie86@gmail.com',
	'idah91@yahoo.com',
	'nazzurah94@gmail.com',
	'ctfmr82@gmail.com',
	'aisyahamat37@gmail.com',
	'nanu.azrinna@yahoo.com',
	'norhafizahmohdrozin@yahoo.com.my',
	'nuyul_yun92@yahoo.com.my',
	'normaziah93@yahoo.com.my',
	'nana.mekna@gmail.com',
	'echaacit98@gmail.comee',
	'mikhailadam2109@gmail.com',
	'izzatiyusman@yahoo.com',
	'nurhafizah.fizah@yahoo.com',
	'hidayah_shaharum@yahoo.com',
	's.yana_92@yahoo.com',
	'janaanuar@gmail.com',
	'norazizan220@gmail.com',
	'suhaila9604@gmail.com',
	'fatinnabihah3@gmail.com',
	'ibuputera17@gmail.com',
	'nurizati94_ismail@yahoo.com',
	'yanajamil94@icloud.com',
	'wannuratiqah1993@gmail.com',
	'banuramanaidu83@gmail.com',
	'nuruyun98@gmail.com',
	'zainon.syafina@yahoo.com',
	'chekuchewan@gmail.com',
	'shahdin991@gmail.com',
	'tengkuanis206@gmail.com',
	'syarifahfatimah121314@gmail.com',
	'farahnatashaosman@gmail.com',
	'noraida1990.na@gmail.com',
	'nikdaniel87@gmail.com',
	'marniesha112@gmail.com',
	'normalini_cheseman@yahoo.com',
	'myloughworld@gmail.com',
	'alifmazila@gmail.com',
	'rosse.ellyena@gmail.com',
	'arissaraqib16@yahoo.com',
	'puterishikin92@gmail.com',
	'hajarrahman92@gmail.com',
	'haizaazman23@gmail.com',
	'nurezlyn86@gmail.com',
	'ibuaa85@gmail.com',
	'hidayah_non92@yahoo.com',
	'izzatifarah17@gmail.com',
	'amirayusri921230@gmail.com',
	'addasuhadania89@gmail.com',
	'bubble_bananas@yahoo.com',
	'pyja.pieja93@gmail.com',
	'monagallaz@gmail.com',
	'nadiahzuelaikha@gmail.com',
	'nursyazwanigimon@gmail.com',# end batach february send to kmm (22/2/2021)
	'alvinchoa85@gmail.com', # duplicate address/phone no (22/2/2021)
	'lindy6227@gmail.clm',
	'jennytriana60@gmail.com',
	'nurezlyn96@gmail.com',
	'cikieydaieyda@gmail.com',
	'wada_sweet@yahoo.com',
	'cheryl9631@gmail.com',
	'anyalia85@gmail.com',
	'sidahwajil8@gmail.com',
	'juwita5143@gmail.com',
	'happywensheng@gmail.com',
	'amal.shahirah310@gmail.com',
	'chungleehun@gmail.com',
	'hahaizatul5151@gmail.com',
	'tyztieymahz@gmail.com',
	'syafieyqahjaimi@gmail.com',
	'aeynie028@gmail.comy',
	'zue_xevilavey@yahoo.com',
	'rossyed9088@gmail.com',
	'norshafikahmohaidin@gmail.com.my',
	'mesiah1982985@gmail.com',
	'ziemickey@yahoo.com',
	'khairulizwandy3677@gmail.com',
	'venus_feb@live.com',
	'tankeanwei7@gmail.vom',
	'effaumairah@gmail.com',
	'lili.rizqin@gmail.com',
	'nurfadzillah.nz@gmail.com',
	'kuanwong174@gmail.com',
	'nirimaima82@gmail.com',
	'dieya_ariena@yahoo.com',
	'ginie.chin@gmail.com',
	'wanquepykaish@gmail.com',
	'nurulsyami2@gmail.com',
	'shiezuka_ieyn@yahoo.com',
	'subaida.ida21@gmail.com',
	'norfarizabintiwahid@gmail.com',
	'juwairiyahaisyah@yahoo.com',
	'enter_keluar@yahoo.com.my',
	'lauveness@gmail.com',
	'reenring85@gmail.com',
	'sim_wel2101@yahoo.com',
	'mohdajwad950919@gmail.com',
	'husna2471@gmail.com',
	'shashashiera926@gmail.com',
	'zulsyazaqay@gmail.com',
	'ezati93@icloud.com',
	'biskutmarry55@gmail.com',
	'ayunihussin@gmail.com',
	'oppo774727@gmail.com',
	'nurulkhairol02@gmail.com',
	'sitinawaraestim@yahoo.com1',
	'liezaija@yahoo.com',
	'anys.kamaruddin@hotmail.con', # end duplicate address/phone no (22/2/2021)
	"faridshida@gmail.com",	 # hide email from feb lead data ---> this list transfer to kmm (05/03/2021)
	"allyadaniela91@gmail.com",	
	"nuraini_ibrahim@rmp.my",	
	"shafini.norashid@gmail.com",	
	"mariya_zulayka@yahoo.com.my",	
	"khodijahariffin@gmail.com",	
	"noorsafawati85@gmail.com",	
	"kresha2030@gmail.com",	
	"syazwani036136@gmail.com",	
	"azeerahani11@gmail.com",	
	"aznazie11@gmail",	
	"natashafazwien@gmail.com",	
	"belleglow1494@gmail.com",	
	"elly_roziana06@yahoo.com",	
	"haniff235@yahoo.com",	
	"hafidamohammad@gmail.com",	
	"nor.amirah0051@gmail.com",	
	"khadijahsiti742@gmail.com",	
	"coklatmanis28@gmail.com",	
	"emmaarizah@gmail.com",	
	"kanagesvisu@gmail.com",	
	"norinazanirozman@yahoo.com",	
	"azizahmajid1987@gmail.com",	
	"ciiekqa@gmail.com",	
	"nuraien1911@gmail.com",	
	"nureenalya20@gmail.com",	
	"aniza_88@yahoo.com",	
	"atehmustafa@gmail.com",	
	"nusililey@gmail",	
	"tanjongaisyah2211@gmail.com",	
	"safinas442@gmail.com",	
	"normafariyani3008@gmail.com",	
	"cikshiela@yahoo.com",	
	"diyana.salji@gmail.com",	
	"faraji8285@gmail.com",	
	"najiyahdany99@gmail.com",	
	"bdemok39@gmail.com",	
	"sitilee01@gmail.com",	
	"nazman5489@gmail.com",	
	"safurakamis@gmail.com",	
	"shieralynmosiun@gmail.com",	
	"dkny4800@gmail.com",	
	"sabarinapersonal@gmail.com",	
	"widyharyani@gmail.com",	
	"cutemuniesah@gmail.com",	
	"suesahat52@gmail.com",	
	"syahiraripin@gmail.com",	
	"naddia.tm@gmail.com",	
	"rossalinaaleef90@gmail.com",	
	"durkha.ds@gmail.com",	
	"anisazira010@gmail.com",	
	"shantykenawang@gmail.com",	
	"asmarulhusna87@gmail.com",	
	"hidayahhafeez87@gmail.com",	
	"norhuzaimahbahaudin@yahoo.com",	
	"dazrin06_eva@yahoo.com.my",	
	"erol0688@yahoo.in",	
	"cahayati4@gmail.com",	
	"tyrahcellow@gmail.com",	
	"nur_hacs@yahoo.com",	
	"fahizah1023@gmail.com",	
	"nurafrina_johari@yahoo.com",	
	"noorsyafina@gmail.com",	
	"nfitriah.ishak@gmail.com",	
	"nurshamiminzilkifli@gmail.com",	
	"lyzanaruto@gmail.com",	
	"analia_eila@yahoo.com",	
	"knazharul@gmail.com",	
	"mia_comel2@yahoo.com",	
	"eyesyahrahim@gmail.com",	
	"nurulhuda5644@gmail.com",	
	"mrsefyy92@gmail.com",	
	"afizal.anuar@yahoo.com",	
	"mem.eija@yahoo.com",	
	"namikakunidachan@gmail.com",	
	"nurhaslizamohdfauzi@yahoo.com",	
	"farrydatularmaya97@gmail.com",	
	"izazi77@yahoo.com",	
	"suhaina1610@gmail.com",	
	"eeqa1234@gmail.com",	
	"hartini_abdullah1981@yahoo.com",	
	"ctzura9285@gmail.com",	
	"nadiasyazlinaabdulwahid16894@gmail.com",	
	"sham.25967@gmail.com",	
	"nurulkhayladamia@gmail.com",	
	"umianatsd@gmail.com",	
	"asmahaini@yahoo.com.my",	
	"azlyanisainum@yahoo.com",	
	"gowri0220@yahoo.com",	
	"najibaney5757@yahoo.com",	
	"sasamiesa@gmail.com",	
	"razhairafidah@yahoo.com",	
	"atikahamira1607@gmail.com",	
	"badiahwahab@gmail.com",	
	"nirafiqahbain@gmail.com",	
	"ku_zaitun@yahoo.com",	
	"aidabahruddin@gmail.com",	
	"moro92323@gmail.com",	
	"lilymuneera57@gmail.com",	
	"rohanabakar93@gmail.com",	
	"asyifadariya90@gmail.com",	
	"saferraanora8@gmail.com",	
	"waniesb90@gmail.com",	
	"mail175963@oo.com",	
	"shyamine08@gmail.com",	
	"rizdwanrizki@gmail.com",	
	"fvhminui88@icloud.com",	
	"shah.math.89@gmail.com",	
	"asmizaadzra@gmail.com",	
	"shilahavoc@gmail.com",	
	"amirafirdaus9516@gmail.com",	
	"hasnurulroslan@gmail.com",	
	"hazwanieafikah67@gmail.com",	
	"norsuriatipipadhilah@gmail.com",	
	"nnajihah548@gmail.com",	
	"nurulazmiza4@gmail.com",	
	"suhaila_r@ymail.com",	
	"ainryo84@gmail.com",	
	"rafizzatul03@gmail.com",	
	"norazlinnn1018@gmail.com",	
	"izzatifarfara@gmail.com",	
	"rohaiza.ayza@facebook.com",	
	"sitisalehah8778@yahoo.com",	
	"ciknurhayati93@gmail.com",	
	"shnuruladilahsyabdaziz@gmail.com",	
	"remsgarbon1988@gmail.com",	
	"sue_wry3020@yahoo.com.my",	
	"niaeryllza@gmail.com",	
	"bussainaammara@gmail.com",	
	"akumirayazid@gmail.com",	
	"asmahamzah20@gmail.com",	
	"misznora25@gmail.com",	
	"syuhadan112@gmail.com",	
	"malieyn9407@gmail.com",	
	"hafizahnasri95@gmail.com",	
	"zarafariz@yahoo.com",	
	"shera.satari@gmail.com",	
	"shieraakmal@gmail.com",	
	"pfh3931@gmail.com",	
	"sethshazael15@gmail.com",	
	"bainunahmad439@gmail.com",	
	"ayanarahman89@gmail.com",	
	"nurulaidahusin@gmail.com",	
	"qaseh_atiqah91@yahoo.com",	
	"baktiarabbas92@gmail.com",	
	"earieyputry30@gmail.com",	
	"fazerauda@ymail.com",	
	"sitinorhidayah1008@gmail.com",	
	"sitinoornasimah@gmail.com",	
	"mutieali4494@gmail.com",	
	"hannyfarisya1312@gmail.com",	
	"nurfaezahmadzlan@gmail.com",	
	"kylaotai@yahoo.com",	
	"bettyypd5511@gmail.com",	
	"stellaanak6020@gmail.com",	
	"zurraiddabujang@yahoo.com",	
	"fatinrosle92@gmail.com",	
	"helmynuyoo@gmail.com",	
	"sitirohayniismail@yahoo.com",	
	"aimaramijie@gmail.com",	
	"aziradaud5162@gmail.com",	
	"tengkunatasya14@gmail.com",	
	"faziyana8590@gmail.com",	
	"mmmmilyman@gmail.com",	
	"afyjoe@gmail.com",	
	"mdiqc2574@gmail.com",	
	"masaneramamat@gmail.com",	
	"snorhasmaliana@yahoo.com",	
	"ryiamaria1987@gmail.com",	
	"syafiqahazwarjo@gmail.com",	
	"nurinsyazanhusna@gmail.com",	
	"sofiahzarid@gmail.com",	
	"aisyahsyah3622@gmail.com",	
	"anis.msb238@gmail.com",	
	"9478isyah@gmail.com",	
	"godfreyerrolfernandez88@gmail.com",	
	"seridewimalam28@yahoo.com",	
	"fara.azuan95@gmail.com",	
	"aiemizalikha@gmail.com",	
	"mel.jm89@gmail.com",	
	"azilaazman58@gmail.com",	
	"bianisabang@gmail.com",	
	"nurulhuda95714@yahoo.com",	
	"syazwaniafiqah93@yahoo.com",	
	"jerryda3005@gmail.com",	
	"amalina.flower@gmail.com",	
	"nordasilawatishamsi89@gmail.com",	
	"wannorlinnahabdil@gmail.com",	
	"zierara20@gmail.com",	
	"nhmt810@gmail.com",	
	"hafizailias96@gmail.com",	
	"nab_1989@icloud.com",	
	"noorhazwani36@gmail.com",	
	"anishusnaa@gmail.com",	
	"szakwanhrayyan@gmail.com",	
	"qtee1207@gmail.com",	
	"marani820801@gmail.com",	
	"nurulsyafikanoor@gmail.com",	
	"iideela@yahoo.com",	
	"nureqin82@gmail.com",	
	"shana303411@gmail.com",	
	"izzaidahnazri@gmail.com",	
	"ashikinzaki90@gmail.com",	
	"syukri.nata95@yahoo.com",	
	"norhidayahmohdsabri94@gmail.com",	
	"marianiwanjusoh@gmail.com",	
	"ieydaaziz9@gmail.com",	
	"fhah.83@gmail.com",	
	"ashmimie86@gmail.com",	
	"idah91@yahoo.com",	
	"nazzurah94@gmail.com",	
	"ctfmr82@gmail.com",	
	"aisyahamat37@gmail.com",	
	"nanu.azrinna@yahoo.com",	
	"norhafizahmohdrozin@yahoo.com.my",	
	"nuyul_yun92@yahoo.com.my",	
	"normaziah93@yahoo.com.my",	
	"nana.mekna@gmail.com",	
	"echaacit98@gmail.comee",	
	"mikhailadam2109@gmail.com",	
	"izzatiyusman@yahoo.com",	
	"nurhafizah.fizah@yahoo.com",	
	"hidayah_shaharum@yahoo.com",	
	"s.yana_92@yahoo.com",	
	"janaanuar@gmail.com",	
	"norazizan220@gmail.com",	
	"suhaila9604@gmail.com",	
	"fatinnabihah3@gmail.com",	
	"ibuputera17@gmail.com",	
	"nurizati94_ismail@yahoo.com",	
	"yanajamil94@icloud.com",	
	"wannuratiqah1993@gmail.com",	
	"banuramanaidu83@gmail.com",	
	"nuruyun98@gmail.com",	
	"zainon.syafina@yahoo.com",	
	"chekuchewan@gmail.com",	
	"shahdin991@gmail.com",	
	"tengkuanis206@gmail.com",	
	"syarifahfatimah121314@gmail.com",	
	"farahnatashaosman@gmail.com",	
	"noraida1990.na@gmail.com",	
	"nikdaniel87@gmail.com",	
	"marniesha112@gmail.com",	
	"normalini_cheseman@yahoo.com",	
	"myloughworld@gmail.com",	
	"alifmazila@gmail.com",	
	"rosse.ellyena@gmail.com",	
	"arissaraqib16@yahoo.com",	
	"puterishikin92@gmail.com",	
	"hajarrahman92@gmail.com",	
	"haizaazman23@gmail.com",	
	"nurezlyn86@gmail.com",	
	"ibuaa85@gmail.com",	
	"hidayah_non92@yahoo.com",	
	"izzatifarah17@gmail.com",	
	"amirayusri921230@gmail.com",	
	"addasuhadania89@gmail.com",	
	"bubble_bananas@yahoo.com",	
	"pyja.pieja93@gmail.com",	
	"monagallaz@gmail.com",	
	"nadiahzuelaikha@gmail.com",	
	"nursyazwanigimon@gmail.com", # hide email from feb lead data ---> this list transfer to kmm (05/03/2021)
	"iedasofe83@gmail.com", # duplicate data for feb 2021 ----> (05/03/2021)
	"aiennoin81@yahoo.com",
	"abbyamanda5@gmail.com",
	"aiharqil16@gmail.com",
	"februari_85@yahoo.com",
	"haaniymama@gmail.com",
	"atikahnabilah1999@gmail.com",
	"waijannate@gmil.com",
	"niza.masleeacct94@gmail.com",
	"affiiniafif@icloud.com",
	"ratnaku110@gmail.com",
	"oleolekome@gmail.com",
	"yuna_solieter@yahoo.com.my",
	"qrstna@gmail.con",
	"norahtheofficial@gmail.com",
	"aliahus03@gmail.com",
	"tykajamal90@gmail.com",
	"liyanashukri@yahoo.com",
	"aisha.hst@gmail.com",
	"chewannorfaziela05@gmail.com",
	"mtelectricsabah@gmail.com",
	"nooryustina82@gmail.com.my",
	"bayaluvly75@gmail.com",
	"aurarazwan@gmail.com",
	"elysophia615@gmail.com",
	"bainirose88@gmail.com",
	"funnygsc@gmail.com",
	"nurulnabila175@gmail",
	"qistina_mastura1242@yahoo.com",
	"affiniafifabdul15@gmail.com",
	"eroeerien199@gmail.com",
	"adeqnoor@gmail.com",
	"fazreenroselan88@gmail.com",
	"r.prema.thy89@gmail.com",
	"rosma19wati88@gamil.com",
	"abangpuck@gmail.com",# endduplicate data for feb 2021 ----> (05/03/2021)
	"shuyiwong21@gmail.com", # duplicate address/phone  ---> 01/04/2021
	"ekinkeifli@yahoo.com",
	"comeyy125z@gmail.com",
	"leo_nottyz@ymail.com",
	"vivataiping1@gmail.com",
	"mohdaminabdghani@gmail.com",
	"panjl9251@gmail.com",
	"pyka87@yahoo.com",
	"haziminskemaire@yahoo.com",
	"sharongsr@hotmail.com",
	"taufiqnawfal@gmail.com",
	"bibiananur70@gmail.com",
	"abgpuck@gmal.com",
	"norefariza84@gmail.come",
	"cintahatiumi1989@gmail",
	"mizznonie.nn@gmail.com",
	"puterinurulkhairunnisakhuzaimi@gmail.com",
	"babycow2021@outlook.com",
	"screenager.k@gmail.com",
	"arekim4453@gmail.com",
	"bella.bisquest@gmail.con",
	"melisonyap@gmail.com",
	"razrenjj@gmail.com",
	"nurulain.hashim@yahoo.com",
	"fieza_ija1014@hotmail.com",
	"heoyshin_loo@outlook.com",
	"teru2yahh88@gmail.com",
	"asariah89@gmail.com",
	"suhailinadiaharis@yahoo.com",
	"farhanazambari@gmail.com",
	"jajablues86@gmail.com",
	"sherlynteo21@gmail.com",
	"adibarosli93@gmail.com",
	"thienya89@gmail.com",
	"laisooshan@gmail.com",
	"swahidahbahri@gmail.com",
	"nik3ji83@hotmail.com",
	"lailayazatie@yahoo.com",
	"sitihauyah016@gmail.com", #end duplicate address/phone  ---> 01/04/2021
	"meganwerwer@gmail.com", #duplicate phone, address ---> 03/05/2021
	"xiaoying_orange9@hotmail.com",
	"sukichin520@gmail.com",
	"noratikah.shamsuri94@gmail.com",
	"sitisyahirainani90@gmail.com",
	"mekayu93@yahoo.com",
	"loveshoppingparadise@yahoo.com",
	"adeliaarell27@gmail.com",
	"echakygpnya@yahoo.com",
	"noraqidahothman@gmail.com",
	"nursyahirahsamsudin95@gmail.com",
	"aida.abdkarim@gmail.com",
	"nurahadiahmohdood11@gmail.com",
	"syifaina1201@gmail.com",
	"sky70745@yahoo.com",
	"anamedivieon91@gmail.com",
	"projectb89@gmail.com",
	"aidazaini94@gmail.com1",
	"tina@gmail.com",
	"asdfsdjfa@gmail.com",
	"ainarafli01@gmail.com",
	"asdfjads@gmail.com",
	"atikahjay95@gmail.com",
	"datingojes95@gmail.com",
	"ezatiazam21@gmail.com",
	"tina@gmail.com123",
	"nikki.yap@takaful-malaysia.com.my",
	"rebecca.chiang516@gmail.com",
	"sharoy180618@gmail.com9",
	"nourul.nia03@gmail.com",
	"zoe_shiying_20@hotmail.com",
	"berenicewpy@gmail.com",
	"mroey8652@gmail.com",
	"aidatul.shida@gmail.com",
	"nurulbani88@gmail.com",
	"lingling_yyl@hotmail.com",
	"evaqi9963@gmail.com",
	"chrystalawa@gmail.com",
	"gsy488888@gmail.com",
	"csueyin00@gmail.com",
	"shermin_1006@hotmail.com",
	"triviashin@gmail.com",
	"firraiemy2020@gmail.com",
	"bengei.chauh@sanmina.com", # end duplicate phone, address ---> 03/05/2021
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