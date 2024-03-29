<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../tools/PHPExcel-1.8/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/../admin2635/dashboard/events/events_db_config_excel.php';

	$arr_postcode = array(
		"75200",
		"12300",
		"56000",
		"42100",
		"86000",
		"75350",
		"35900",
		"48200",
		"82000",
		"75350",
		"43300",
		"14100",
		"51100",
		"20300",
		"48000",
		"43500",
		"77200",
		"93150",
		"97000",
		"72000",
		"70300",
		"31650",
		"93350",
		"31400",
		"71900",
		"86000",
		"58100",
		"48000",
		"31900",
		"47150",
		"70450",
		"14300",
		"12300",
		"81100",
		"43300",
		"34900",
		"68000",
		"43200",
		"11500",
		"81000",
		"52200",
		"43000",
		"05150",
		"43000",
		"45300",
		"43200",
		"70300",
		"81800",
		"42100",
		"81100",
		"40460",
		"70400",
		"42700",
		"40170",
		"41200",
		"81100",
		"55100",
		"43200",
		"52100",
		"31100",
		"86000",
		"75450",
		"14000",
		"70200",
		"71960",
		"86000",
		"13800",
		"83000",
		"68000",
		"51200",
		"58200",
		"30100",
		"71800",
		"93250",
		"41050",
		"28400",
		"05050",
		"47810",
		"81100",
		"55100",
		"51200",
		"13700",
		"84000",
		"81100",
		"31550",
		"32000",
		"43200",
		"02000",
		"86000",
		"31650",
		"42700",
		"85200",
		"81300",
		"27600",
		"14000",
		"28200",
		"42610",
		"13400",
		"50470",
		"14009",
		"25300",
		"10470",
		"50490",
		"58200",
		"28700",
		"31650",
		"94300",
		"31650",
		"68000",
		"12000",
		"76100",
		"71250",
		"08000",
		"84300",
		"32000",
		"14200",
		"83700",
		"43000",
		"48000",
		"43950",
		"42600",
		"56000",
		"81800",
		"52100",
		"86000",
		"43300",
		"41050",
		"68000",
		"81750",
		"31150",
		"81100",
		"84000",
		"14000",
		"40460",
		"31900",
		"56000",
		"58200",
		"81750",
		"42600",
		"45500",
		"55300",
		"82000",
		"43300",
		"84000",
		"79250",
		"43300",
		"98000",
		"25100",
		"53300",
		"34900",
		"83000",
		"34200",
		"81800",
		"85000",
		"81100",
		"81200",
		"43950",
		"81800",
		"36000",
		"81100",
		"75350",
		"21200",
		"81000",
		"33000",
		"81000",
		"28700",
		"93250",
		"96000",
		"51000",
		"31400",
		"47301",
		"41200",
		"31100",
		"70400",
		"31350",
		"43000",
		"17700",
		"31100",
		"34600",
		"68000",
		"42000",
		"43950",
		"81000",
		"48000",
		"47180",
		"93150",
		"98000",
		"43200",
		"47100",
		"11600",
		"96000",
		"82000",
		"75250",
		"43500",
		"34000",
		"34000",
		"47301",
		"94300",
		"76100",
		"43000",
		"34000",
		"81800",
		"31650",
		"31400",
		"75200",
		"70200",
		"40170",
		"43300",
		"56100",
		"81000",
		"28700",
		"81100",
		"89800",
		"43300",
		"45200",
		"40200",
		"47150",
		"11060",
		"14020",
		"57000",
		"43000",
		"81300",
		"25300",
		"80400",
		"81300",
		"71010",
		"71000",
		"47100",
		"41200",
		"41200",
		"80300",
		"55100",
		"58000",
		"51200",
		"40150",
		"24000",
		"43800",
		"14120",
		"41200",
		"46150",
		"14000",
		"43200",
		"71010",
		"83000",
		"31900",
		"98050",
		"81110",
		"10460",
		"86900",
		"42700",
		"81100",
		"75250",
		"83000",
		"91000",
		"28700",
		"07000",
		"47100",
		"31350",
		"71950",
		"43950",
		"70450",
		"47190",
		"48020",
		"45400",
		"28200",
		"56100",
		"83010",
		"43950",
		"81100",
		"43200",
		"31800",
		"01000",
		"47160",
		"14300",
		"47301",
		"43300",
		"41200",
		"57100",
		"68100",
		"84000",
		"43200",
		"47410",
		"43200",
		"41050",
		"14000",
		"84000",
		"41050",
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
