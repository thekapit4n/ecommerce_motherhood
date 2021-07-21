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

$apta_addr_list = array(
	"302454"=>"off jln temenggong",
	"302455"=>"kg bukit tunggal 85200 jementah segamat johor",
	"302456"=>"taman cendana",
	"302457"=>"hope ley industrial centre mile 1 dam road 91100 lahad Datu",
	"302458"=>"BANDAR AL-MUKTAFI BILLAH SHAH 23400 DUNGUN,TERENGGANU",
	"302459"=>"taman desa anggerik ,senawang",
	"302460"=>"jalan pulau betung",
	"302461"=>"taman plentong baru",
	"302462"=>"tmn psj sg karang damai",
	"302463"=>"Jalan pahang ,Tapah Perak",
	"302464"=>"kg gong chengal kemasek",
	"302465"=>"Jalan Sri Putri 11/5",
	"302466"=>"felda gunung besout 3,35600",
	"302467"=>"jalan buluh kasap",
	"302468"=>"lorong sentosa desa kenanga",
	"302469"=>"Kg Chabang 3 Sok (Kedai Khamis)",
	"302470"=>"derawan palm oil mill, p.o.box 23241",
	"302471"=>"Lubuk Merbau",
	"302472"=>"kampung Rusila",
	"302473"=>"TAMAN PAWANA KG TENGAH",
	"302474"=>"Kg Giching Hilir",
	"302475"=>"Rantau Panjang Sepupok Niah, 98200 Niah Sarawak.",
	"302476"=>"taman semarak pokok assam taiping perak",
	"302477"=>"ppr gua musang",
	"302478"=>"lorong 11/2A",
	"302479"=>"Taman sri rambai 14000 bukit mertajam",
	"302480"=>"taman spice village amnjaya sungai petani",
	"302481"=>"kampung undang,bukit payong,marang",
	"302482"=>"Tmn Meru suria, 31200 Chemor, perak",
	"302483"=>"84800 bukit gambir tangkak johor",
	"302484"=>"94950 Pusa,Sarawak",
	"302485"=>"jalan teratai 23,",
	"302486"=>"jalan banggol donas",
	"302487"=>"pusat bandar sunway",
	"302488"=>"Kewingston Square Garden, Cyber 9",
	"302489"=>"jalan buloh kasap segamat",
	"302490"=>"TAMAN NUSA PUTERI",
	"302491"=>"tb 30 jalan haji karim",
	"302492"=>"Kampung 16390 Gunong Kelantan, Gunong, 16090 Bachok, Kelantan",
	"302493"=>"taman seri impian",
	"302494"=>"kg sarah sering",
	"302495"=>"taman jaya mas",
	"302496"=>"kg chandek kura mukim kedawang",
	"302497"=>"kg beletik",
	"302498"=>"Sungai Dua, 13800 Butterworth",
	"302499"=>"21030 KUALA TERENGGANU",
	"302500"=>"Taman Panchor Indah, 14300 Nibong Tebal, Penang",
	"302501"=>"KG PENGKALAN PANDAN 24000 CHUKAI KEMAMAN",
	"302502"=>"jln kg baru mampong 4",
	"302503"=>"Lorong Pearl Avenue 5",
	"302504"=>"93350 Kuching Sarawak",
	"302505"=>"Tmn Saujana Idaman,",
	"302506"=>"42700 bukit changgang banting selangor",
	"302507"=>"lorong gerai kuala sanglang",
	"302508"=>"kg aman kandis",
	"302509"=>"kem paya jaras",
	"302510"=>"JALAN SRI PERIGI SUNGAI YAN KECHIL",
	"302511"=>"05400 jalan simpang empat",
	"302512"=>"kampung sungai karang darat",
	"302513"=>"24210 kemasik kemaman terengganu",
	"302514"=>"Jalan Landai Sungai Besi",
	"302515"=>"Persiaran Amanjaya, 08100 Sungai Petani, Kedah",
	"302516"=>"Taman Desa Sena",
	"302517"=>"QUARTERS PEJABAT DAERAH 45300 SUNGAI BESAR SELANGOR",
	"302518"=>"77300 merlimau melaka",
	"302519"=>"jalan wawasan sibu sarawak.96000 sibu sarawak",
	"302520"=>"31000 batu gajah perak",
	"302521"=>"kpg baru spaoh",
	"302522"=>"06100 kodiang kedah",
	"302523"=>"88200 kota kinabalu sabah",
	"302524"=>"seksyen 1",
	"302525"=>"taman tasek mewah",
	"302526"=>"JALAN KENNEDY",
	"302527"=>"TAMAN KUANTAN JAYA",
	"302528"=>"22000 JERTEH TERENGGANU",
	"302529"=>"93250 Kuching sarawak",
	"302530"=>"24000 kemaman terengganu",
	"302531"=>"Kampung Sri Tujoh",
	"302532"=>"Kampung Padang Tok Sora",
	"302533"=>"Ujong Pasir",
	"302534"=>"Taman Ktc 2",
	"302535"=>"jalan penghulu abdullah",
	"302536"=>"Taman Seri Permai Fasa 2, Jalan Pasir Pandak",
	"302537"=>"kota jembal,16150 kota bharu kelantan",
	"302538"=>"23000 dungun",
	"302539"=>"Pasir Puteh Kelantan",
	"302540"=>"jalan bukit meldrum,",
	"302541"=>"Taman desa Tanjung Damai Kuala Terengganu",
	"302542"=>"TAMAN SRI SENTOSA",
	"302543"=>"Lot 4,Fasa 1,Jalan Timur 6,KKIP Kota Kinabalu",
	"302544"=>"taman desa cempaka, 71800 nilai",
	"302545"=>"taman sendayan indah",
	"302546"=>"15200 kota bharu kelantan",
	"302547"=>"jln Raja Perempuan 2",
	"302548"=>"RPR JALAN BATU KAWA, 93250 KUCHING SARAWAK.",
	"302549"=>"lorong 26 RPR batu kawa fasa 2",
	"302550"=>"11960 bayan lepas pulau pinang",
	"302551"=>"98050 MARUDI BARAM SARAWAK",
	"302552"=>"kampung mahandoi penampang",
	"302553"=>"KG PAYA DATU, MANIR, 21200",
	"302554"=>"kampong maju jaya 81300 skudai johor",
	"302555"=>"Kampung Pengkalan Maras",
	"302556"=>"16100 kota bharu lelantan",
	"302557"=>"KG BUKIT GUNTONG, BINJAI RENDAH",
	"302558"=>"Belakang balai polis Bunut susu",
	"302559"=>"bukit rangin aman",
	"302560"=>"College Height Garden Resort, 71700 Mantin.",
	"302561"=>"kg seri damai 25150 kuantan pahang",
	"302562"=>"batu 5",
	"302563"=>"kampung baru changkat tin",
	"302564"=>"Bandar saujana putra",
	"302565"=>"jln inai 8",
	"302566"=>"08000 SUNGAI PETANI, KEDAH.",
	"302567"=>"Bandar Saujana Putra",
	"302568"=>"18000 kuala krai kelantan",
	"302569"=>"05400 ALOR SETAR KEDAH",
	"302570"=>"Halaman Meru Aman, 30020 Ipoh, Perak.",
	"302571"=>"Kampung Talantang",
	"302572"=>"taman sri raya batu 9 cheras",
	"302573"=>"kampung sungai kerak 3,",
	"302574"=>"BLOCK MAWAR RKAT BN KETUJUH RAMD KEM KABOTA",
	"302575"=>"taman seri bayu 2 08000 sg petani",
	"302576"=>"lebuh sungai pinang",
	"302577"=>"putra heights",
	"302578"=>"09300 kuala ketil kedah",
	"302579"=>"Jalan Cempaka 6",
);

foreach($apta_addr_list as $subscriber_id => $address)
{
	
	$sqlUpdate   = "UPDATE  ps_events_subscriber SET subscriber_question11 = '" . $address . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = 105 LIMIT 1";
	echo $sqlUpdate . "<br><br>";
	$queryUpdate = $conn->query($sqlUpdate);
	echo $subscriber_id . " --- updated <br><br>";
	print_r($queryUpdate);
	
}


$result->close();
mysqli_close($conn);

?>