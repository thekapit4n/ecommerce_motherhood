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

$cartIdlist = array(
	"141267",
	"167211",
	"193504",
	"210754",
	"195758",
	"221811",
	"428646",
	"260006",
	"262907",
	"274622",
	"297475",
	"276476",
	"285012",
	"360042",
	"302354",
	"310167",
	"320639",
	"388734",
	"327400",
	"328588",
	"341731",
	"453426",
	"359092",
	"425919",
	"364081",
	"432194",
	"453570",
	"456842",
	"384551",
	"389311",
	"395410",
	"395141",
	"398446",
	"397882",
	"454767",
	"404211",
	"407571",
	"406145",
	"407209",
	"407365",
	"409980",
	"411083",
	"441431",
	"412275",
	"452142",
	"453567",
	"424828",
	"431295",
	"432553",
	"432700",
	"434130",
	"437534",
	"438160",
	"444820",
	"453222",
	"445155",
	"446091",
	"447051",
	"447253",
	"447815",
	"448056",
	"448371",
	"449354",
	"449602",
	"449833",
	"450328",
	"450400",
	"450472",
	"451027",
	"451856",
	"451907",
	"452090",
	"452124",
	"452302",
	"452513",
	"452556",
	"452628",
	"452670",
	"452748",
	"452783",
	"452799",
	"452867",
	"452920",
	"452930",
	"452932",
	"452939",
	"452955",
	"452961",
	"452980",
	"453016",
	"453066",
	"453068",
	"453084",
	"453115",
	"453173",
	"453218",
	"453254",
	"453282",
	"453298",
	"453320",
	"453326",
	"453360",
	"453418",
	"453451",
	"453520",
	"453539",
	"453592",
	"453704",
	"453711",
	"453796",
	"453805",
	"453821",
	"453846",
	"453848",
	"453859",
	"453862",
	"453868",
	"453874",
	"453900",
	"454002",
	"454023",
	"454108",
	"454141",
	"454157",
	"454167",
	"454175",
	"454201",
	"454322",
	"454400",
	"454410",
	"454428",
	"454524",
	"454596",
	"454650",
	"454719",
	"454733",
	"455004",
	"455103",
	"455132",
	"455253",
	"455270",
	"455472",
	"455492",
	"455521",
	"455538",
	"455686",
	"455724",
	"455745",
	"455794",
	"455836",
	"455897",
	"455903",
	"455944",
	"456009",
	"456027",
	"456042",
	"456058",
	"456065",
	"456099",
	"456146",
	"456160",
	"456191",
	"456224",
	"456253",
	"456289",
	"456306",
	"456327",
	"456581",
	"456608",
	"227524",
	"226217",
	"223021",
	"197429",
	"224214",
	"224424",
	"223354",
	"228739",
	"224908",
	"193387",
	"224980",
	"224553",
	"225229",
	"225003",
	"224084",
	"222529",
	"222716",
	"227122",
	"225551",
	"183353",
	"227148",
	"66385",
	"227450",
	"178966",
	"59785",
	"114630",
	"222376",
	"136067",
	"212074",
	"222688",
	"227285",
	"224952",
	"229668",
	"225076",
	"223027",
	"223948",
	"48138",
	"224056",
	"225567",
	"224460",
	"227315",
	"229206",
	"225662",
	"228202",
	"226454",
	"192595",
	"224209",
	"219510",
	"224062",
	"227943",
	"222826",
	"222731",
	"225140",
	"71661",
	"224272",
	"224906",
	"229014",
	"227060",
	"151335",
	"186012",
	"222644",
	"228578",
	"229167",
	"225163",
	"229906",
	"170744",
	"227270",
	"221760",
	"226353",
	"213671",
	"226762",
	"227476",
	"227136",
	"229024",
	"229926",
	"224078",
	"224216",
	"196246",
	"160007",
	"222578",
	"26457",
	"177018",
	"223905",
	"229639",
	"224379",
	"224245",
	"224355",
	"223779",
	"213446",
	"175466",
	"213362",
	"225344",
	"178037",
	"223651",
	"226806",
	"226441",
	"110507",
	"223478",
	"225091",
	"225219",
	"130277",
	"223736",
	"228323",
	"222900",
	"227155",
	"227987",
	"227344",
	"130186",
	"48788",
	"32044",
	"203023",
	"224904",
	"213762",
	"227758",
	"224047",
	"138010",
	"161187",
	"217086",
	"222587",
	"224234",
	"225502",
	"228621",
	"223386",
	"229430",
	"225332",
	"227159",
	"223078",
	"217295",
	"184080",
	"227304",
	"173809",
	"195385",
	"221903",
	"221459",
	"227280",
	"224884",
	"221840",
	"222628",
	"227278",
	"229315",
	"226307",
	"228955",
	"227582",
	"223566",
	"222838",
	"223367",
	"150017",
	"224358",
	"227962",
	"223908",
	"223042",
	"224692",
	"224600",
	"228409",
	"74656",
	"226562",
	"228937",
	"224210",
	"225539",
	"228209",
	"159999",
	"222999",
	"225426",
	"222746",
	"224685",
	"87590",
	"157305",
	"229514",
	"224570",
	"224329",
	"224146",
	"224728",
	"228862",
	"177161",
	"227900",
	"223577",
	"224935",
	"226603",
	"191235",
	"224676",
	"225233",
	"229729",
	"228225",
	"228627",
	"176069",
	"224867",
	"222411",
	"181778",
	"224257",
	"224957",
	"228691",
	"192572",
	"227300",
	"224913",
	"199881",
	"228158",
	"182700",
	"223014",
	"58372",
	"223540",
	"227228",
	"225500",
	"212348",
	"217627",
	"226375",
	"226396",
	"225143",
	"224514",
	"211921",
	"227501",
	"70609",
	"226635",
	"222835",
	"225337",
	"224691",
	"222631",
	"227649",
	"225508",
	"223791",
	"224951",
	"222550",
	"224791",
	"229553",
	"223093",
	"227694",
	"221926",
	"216900",
	"227376",
	"226416",
	"224184",
	"227502",
	"229526",
	"224588",
	"224881",
	"229107",
	"224781",
	"227556",
	"226793",
	"193258",
	"221259",
	"221261",
	"226662",
	"224128",
	"223112",
	"225179",
	"225313",
	"225542",
	"207171",
	"224287",
	"226613",
	"226420",
	"198615",
	"197091",
	"222739",
	"183224",
	"222803",
	"225085",
	"226698",
	"225383",
	"169958",
	"224987",
	"225148",
	"222907",
	"227916",
	"226754",
	"163539",
	"223035",
	"227005",
	"223761",
	"223371",
	"60871",
	"224289",
	"228195",
	"193573",
	"101459",
	"219362",
	"227083",
	"229716",
	"223037",
	"194680",
	"222552",
	"226788",
	"51306",
	"180646",
	"225393",
	"227951",
);

$itemId = 46857;


foreach($cartIdlist as $cardId)
{
		
	if($cardId > 0 && $itemId > 0)
	{
		$sqldelcartitem   = "DELETE FROM motherhood_presta.ps_cart_product WHERE id_cart = " . $cardId . " AND id_product = " . $itemId . " LIMIT 1";
		echo $sqldelcartitem . "<br><br>";
		$queryDelcartitem = $conn->query($sqldelcartitem);
		print_r($queryDelcartitem);
	}
	
}



// $result->close();
mysqli_close($conn);

?>