<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../tools/PHPExcel-1.8/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/../admin2635/dashboard/events/events_db_config_excel.php';

	$arr_postcode = array(
		"16050",
		"09000",
		"07000",
		"16800",
		"32400",
		"48200",
		"15350",
		"32040",
		"23000",
		"47410",
		"24000",
		"48000",
		"20400",
		"75350",
		"25200",
		"11600",
		"75050",
		"86200",
		"06650",
		"25200",
		"05100",
		"08000",
		"22040",
		"42100",
		"81000",
		"22300",
		"07000",
		"01000",
		"56000",
		"40170",
		"15350",
		"63000",
		"43000",
		"47300",
		"47810",
		"72200",
		"75200",
		"77300",
		"42200",
		"81100",
		"81000",
		"57000",
		"11700",
		"34300",
		"48300",
		"23100",
		"06250",
		"53300",
		"68100",
		"21000",
		"41050",
		"43650",
		"06700",
		"48300",
		"76400",
		"78300",
		"34350",
		"41000",
		"55000",
		"34200",
		"11500",
		"63000",
		"32000",
		"47120",
		"43500",
		"06400",
		"86000",
		"08100",
		"82200",
		"47000",
		"46300",
		"09400",
		"34800",
		"45500",
		"08000",
		"81100",
		"43500",
		"47000",
		"11900",
		"81100",
		"22300",
		"16040",
		"13000",
		"81100",
		"41200",
		"22300",
		"43100",
		"25200",
		"13200",
		"58100",
		"81750",
		"16040",
		"47100",
		"22000",
		"41050",
		"11900",
		"46150",
		"48010",
		"47630",
		"06350",
		"81200",
		"22200",
		"81300",
		"83100",
		"46000",
		"53300",
		"80350",
		"21800",
		"35600",
		"68000",
		"09410",
		"43300",
		"43200",
		"81200",
		"26100",
		"85000",
		"84150",
		"77100",
		"73480",
		"16400",
		"89760",
		"43500",
		"81100",
		"23000",
		"71050",
		"68100",
		"43500",
		"56000",
		"80200",
		"42700",
		"56000",
		"53100",
		"42300",
		"09100",
		"81200",
		"25150",
		"01000",
		"31650",
		"31400",
		"21610",
		"40400",
		"34850",
		"02450",
		"83000",
		"24000",
		"08000",
		"17600",
		"43000",
		"48000",
		"53300",
		"36000",
		"81100",
		"43200",
		"14400",
		"44000",
		"47300",
		"25200",
		"40400",
		"16150",
		"40460",
		"34000",
		"25150",
		"16100",
		"34600",
		"68100",
		"47810",
		"42309",
		"47130",
		"46150",
		"81000",
		"56000",
		"43200",
		"34000",
		"81750",
		"47150",
		"35000",
		"22200",
		"50480",
		"34000",
		"22200",
		"50100",
		"34000",
		"34000",
		"09310",
		"42700",
		"40170",
		"47100",
		"06010",
		"84040",
		"32000",
		"42600",
		"43900",
		"53300",
		"17000",
		"11060",
		"09800",
		"12100",
		"41050",
		"26050",
		"42920",
		"47100",
		"68000",
		"09100",
		"56100",
		"52100",
		"43500",
		"81300",
		"56000",
		"17700",
		"33000",
		"43300",
		"43950",
		"08000",
		"34130",
		"31650",
		"53200",
		"32000",
		"09300",
		"43500",
		"81100",
		"81000",
		"54200",
		"28050",
		"55300",
		"53300",
		"26660",
		"75460",
		"47100",
		"84000",
		"62100",
		"86000",
		"68000",
		"43500",
		"07000",
		"52100",
		"26180",
		"10470",
		"08000",
		"36000",
		"81100",
		"45500",
		"47130",
		"15350",
		"43500",
		"47100",
		"68000",
		"08500",
		"47000",
		"43200",
		"21070",
		"84000",
		"43300",
		"31400",
		"46150",
		"47830",
		"16090",
		"09400",
		"21060",
		"81800",
		"08110",
		"36400",
		"09300",
		"32020",
		"81300",
		"13300",
		"81800",
		"89650",
		"01000",
		"30020",
		"73450",
		"81550",
		"06700",
		"81000",
		"17200",
		"26650",
		"91111",
		"83100",
		"09000",
		"09100",
		"81750",
		"21600",
		"43700",
		"81100",
		"23400",
		"17520",
		"21080",
		"83000",
		"11600",
		"26800",
		"22300",
		"81750",
		"26800",
		"83000",
		"14000",
		"16450",
		"30100",
		"93450",
		"16300",
		"27000",
		"18300",
	);
	
	$table 	= "";
	$table .= "<table class='table-bordered table-sm' style='border: 1px solid black;border-collapse: collapse;'>";
	foreach($arr_postcode as $valPostcode)
	{
		$sql = "SELECT a.postcode, a.post_office, b.state_name FROM motherhood_presta.ps_postcode a
				LEFT JOIN ps_postcode_state b 
				ON a.state_code = b.state_code
				WHERE a.postcode = " . trim($valPostcode) . " LIMIT 1";
				
		$result = $conn->query($sql);
		if(is_object($result))
		{
			$row = mysqli_fetch_row($result);
			if(sizeof($row) == 3)
			{
				$statename = $row[2];
				if(strtolower($statename) == 'wilayah persekutuan kuala lumpur')
				{
					$statename = "Kuala Lumpur";
				}
				elseif(strtolower($statename) == 'wilayah persekutuan labuan')
				{
					$statename = "Labuan";
				}
				elseif(strtolower($statename) == 'wilayah persekutuan putrajaya')
				{
					$statename = "Putrajaya";
				}
				
			
				$table .= "<tr><td style='border: 1px solid black;'>" . $row[0] . "</td><td style='border: 1px solid black;'>" . $row[1] . "</td><td style='border: 1px solid black;'>" . $statename . "</td></tr>";
			}
			else
			{
				$table .= "<tr><td style='border: 1px solid black;'>" . $valPostcode . "</td><td style='border: 1px solid black;'>Postcode not detected</td></tr>";
			}	
		}
	}
	$table .= "</table>";
	
	echo $table;
	
	exit("sds");
	
	
?>
