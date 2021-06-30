<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel-1.8/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/../admin2635/dashboard/events/events_db_config_excel.php';

	$secretOfTheDay = "K@p1T4n S4Y T0d4Y 1$" . date('Y-m-d');
	$encrypt  		= md5($secretOfTheDay);
	$isMatch 		= false;
	
	if(isset($_POST['themessage']) && $_POST['themessage'] != '')
	{
		$themessage = trim($_POST['themessage']);#secret key that been POST
		
		if($encrypt == $themessage)
		{
			$isMatch = true;
		}
		else
		{
			exit("No data been post");
		}
	}
	else
	{
		exit("No direct access");
	}
	
	if($isMatch == true)
	{
		$searchStart ="";
		$searchEnd 	 ="";
		$wheresql  	 = "";
		$limitsql    = " LIMIT 6000";
		$strDateMsg  = "";
		
		if(isset($_POST['searchDateStart']) && $_POST['searchDateStart'] != '')
		{
			$arr_sortdate = array();
			$arr_sortdate = explode('/', $_POST['searchDateStart']);
			
			if(is_array($arr_sortdate) && sizeof($arr_sortdate) == 3)
			{
				$mysqlformat = $arr_sortdate[2] . "-" . $arr_sortdate[1] . "-" . $arr_sortdate[0];
				$searchStart = date('Y-m-d', strtotime($mysqlformat));
				$strDateMsg .= "Date From " . date('d-m-Y', strtotime($mysqlformat));
			}
		}
		
		if(isset($_POST['searchDateEnd']) && $_POST['searchDateEnd'] != '')
		{
			$arr_sortdate = array();
			$arr_sortdate = explode('/', $_POST['searchDateEnd']);
			
			if(is_array($arr_sortdate) && sizeof($arr_sortdate) == 3)
			{
				$mysqlformat = $arr_sortdate[2] . "-" . $arr_sortdate[1] . "-" . $arr_sortdate[0];
				$searchEnd   = date('Y-m-d', strtotime($mysqlformat));
				$strDateMsg .= " to " . date('d-m-Y', strtotime($mysqlformat));
			}
		}
		
	$arr_skip_email = array(
		"zhafiraana@gmail.com",
		"khairulazharkhairulazhar33@gmail.com",
		"tresnawatye@yahoo.com",
		"hanifchemohd@gmail.com",
		"elykanor35@gmail.com",
		"bobfmlynorhayatibtahmadjamal",
		"safikah8889@gmail.com",
		"bibiananur70@gmail.com",
		"sxdsa6@gmail.com.my",
		"kogorogawa@gmail.com",
		"anazhafia@gmail.com",
		"kwangjunwei@gmail.com",
		"nur.hana84@yahoo.com",
		"zaiemanarain@gmail.com",
		"rosma19wati88@gmail.com",
		"ashraffangah614@gmail.com",
		"ulfi rr97@gmail.com",
		"evitaliastri84@gmail.com",
		"shazrilamiza@ymial",
		"jeerdanyismail@gmail.com",
		"nrashikin6@gmail.com",
		"zaiema93@icloud.com",
		"zaiema98@gmail.com",
		"nizamretnoretno@gmail.com",
		"nizamfamilyradzali@gmail.com",
		"@xiaoqing4876@gamail.com",
		"fatinnadiela95@gmail.com",
		"izzatirashid709@gmail.com",
		"safarizakhmat@gmail.com",
		"kumayang14@gmail.com",
		"jairadam859112 @gmaila.com",
		"samsulkumaryusof.gmail.com",
		"861103526254",
		"haritsshakhmir9590@gmail.com",
		"norshamshena84@gmail.com.my",
		"ctfarisha_ieka@yahoo.com",
		"www.faizalsfoundationsdnbhd@gmail.com",
		"nur_ainnajwa81@yahoo.com",
		"iema.naim.90@gmail.com",
		"katrina.shandhini @gmail.com",
		"nuraidaamira@gmail.com",
		"zaiumi1985@gmail.com",
		"amiera_mierashi1010@yahooo.com",
		"john_choongming0511@hotmail.com",
		"konny_828@hotmail.com",
		"ameeranusaybah@yahoo.com",
		"aidilkerry2526@gmail.com",
		"jimalsama133@gmail.com",
		"fazlinayusof482@gmail.com",
		"nirimaima581@gmail.com",
		"ariniezakaria@gmail.com",
		"suzilawatyeffanici@gmail.com",
		"tankaixin1341@gmail.com",
		"sitihamidah040188@gmail.com",
		"norsyakirinmohammadzais@gmail.com",
		"nurhafizan3@gmail.com ",
		"giffsondeff@gmail.com",
		"nanizahari@gmail.com",
		"normiazrina#yahoo.com",
		"sitinurhuda945@gmail.com",
		"shahnizamsanudin90@gmail.com",
		"ifahju73@gmail.com",
		"sayang0711@gmail.com",
		"nurizatyashikin945@gmail.com",
		"aidilkerry2526",
		"pei840927@gmail.com",
		"mzniepal@yahoo.com",
		"nirulhafizah925@gmail com ",
		"babyrose9@gmail.com",
		"riezadewi04@gmail.com",
		"jesyarcs09@gmail.com ",
		"jurlyndamiroh@gmail.com",
		"skyline_ray26@hotmail.com",
		"pennysasius89@gmail.com.my",
		"ctmadina89@yahoo.com",
		"ssitinursallizah@gmail.com",
		"ss_fatimah@yahoo.com",
		"hasmah50@gmail.com",
		"christinaba@hotmail.com",
		"uttiesuzie@gmail. com",
		"maa441@gmail.com",
		"putrihalmiah@gmail.com",
		"ilamakyo@gmail.com",
		"arilwakiman@gmail.com",
		"noorummu@yahoo.com",
		"mummyurban@gmail.com",
		"farhanaridzuan5536@gmail.con",
		"kkhathyaishah227@ gmail.com.my",
		"shahdatulakmah@gmail.com",
		"shazwanizandarvian@gmail.com",
		"norazmizah1502@gmail.com",
		"h_odette@yahoo.com",
		"rafiqwira1995@gmail.com",
		"dianacozt9@gmail.com",
		"samrinbnasir581@gmail.com",
		"soonyee4586@gmail.com",
		"alif90@gmail.com",
		"tengkuafikah617@gmail.cok",
		"mohdfazali403@gmail.com",
		"noorlizaramli520@gmail.com",
		"mnoorsyawatee@yahoo.com",
		"babyboy030920@gmail.com",
		"norasyikenrofei@gmail.com.my",
		"sitifatmah151201@gmail.com",
		"reza_amiraridzuan@gmail.com",
		"hasmaliza8108@gmail.com",
		"iyrinshafyra826@gmail.com",
		"thanaela1320@gmail.com",
		"amychubbyy82@gamil.com",
		"qaisarahnizamfelizia@gmail.com",
		"siti.khadijah@icloud.com",
		"normaliabintiomar@yahoo.com.my",
		"miraedorashaari91@gmail.com",
		"raisridwan0611@gmail.com",
		"www.@srinirosshalucky.com",
		"christinababy91@hotmail.com",
		"tankaixin1314@gmail. com",
		"nsrwanaa@gmail.com",
		"tanps0831@gmail.com",
		"norfazlina999@gmail.com",
		"nurain1520@gmail.com",
		"baby.jie.er@163.com",
		"lopik1995@yahoo.com",
		"missmontel49@gmail.com",
		"emah@gmail.com",
		"myheaven82@gmail.com",
		"rohaidaaizam.98ra@gmial.co",
		"suhadahisham84@gmail.com",
		"no 252 felda chiku o3",
		"echalim2014@gmail.com",
		"nurfatinaiffa93@gmail.com",
		"atikah7210@icloud.com",
		"naemah5848@gmail.com",
		"0626shijie@gmail.com",
		"nurezlyn binti mustapha",
		"mzniepal@yahoo.com.my",
		"huzairadam89@gmail.com",
		"heoyshin_0904@hotmail.com",
		"azmifatihah567@gmail.com",
		"norainnurin95@gmail.com",
		"amirchiku881@gmail.com",
		"khairulsakura4@gmail.com",
		"rosma19wati88@gmail",
		"noorfarahanabintiaziz@gmail.com",
		"nurulfatihah5278@gmail.com",
		"nuruldiyana1612@gmail.com",
		"aminahwahab@gmail.com",
		"nasrahnalah@gmai.com",
		"yatieygjoie94@gmail.com",
		"kerryaidil@gmail.com",
		"alsadmizan@yahoo.com",
		"umiafia151218@gmail.com",
		"ainechong81@gmail.com",
		"wina23.lavignes@gmail.com",
		"ichadanish9691@gmail.com",
		"elly2649@gmail.com",
		"faraji8285@gmail.com",
		"ernienier@gmail.com",
		"safikah8988@gmail.com",
		"qaisy12@gmail.com",
		"farhanamangsor01@gmail.con",
		"sukimanjasin@yahoo.com",
		"safieesyafiqah851@gmail.com",
		"maszlinas9@gmail.com",
		"lizlily2011@gmail.com",
		"ikhwanaisy@gmail.com",
		"naufalhidayat5704@gmail.com",
		"izzatianuar5126@gmail.com",
		"shaidatulazawiyah@gmail.com",
		"rasmaemma85@gmail.com",
		"kuasrafzack@gmail.com",
		"noraisyah.nizam@gmail.com",
		"husnanur3427@gmail.com",
		"aydenqarlief342@gmail.com",
		"lausinyee0819999@gmail.com",
		"amycutechubbyy82@gmail.com",
		"lausinyee081999@gmail.com",
		"moknurul315@gmail.com",
		"mdzakihm@gmail.com",
		"aarabatrisya20@gmail.com",
		"anaqifayyadh2020@gmail.com",
		"zati.atharina@gmail.com",
		"babytaurus105@gmail.com",
		"zierahamzah93@gmail.com",
		"norazimahmathussin@gmail.com.",
		"hasmiya7@gmail.com",
		"norsyima86@gmail.com",
		"chanchan8036@gmail.com",
		"jiyloading4@gmail.com",
		"sharmilasharmilabohan@gmail.com",
		"noraisyah971221@gmail.com",
		"szulaikha41@gmail.com",
		"seinwah@hotmail.com",
		"nurhawannaanuar@gmail. com",
		"greensopie@gmail.com",
		"almomoy07@gmail.com ",
		"peixin110697@gmail.com",
		"kerrykhairiah@gmail.com",
		"amir_trd85@yahoo.con",
		"nurezlyn86@hmail.com",
		"mizz_mey@yahoo.com.my",
		"munisahsah 36 @ g mail .com",
		"mummyara878787@gmail.com",
		"suria2461@gmail.com",
		"suzilawatiahasim@gmail.com",
		"nursyaffiza1990@yahoo.com",
		"afieaieyn@gmail.com",

	);
	
	if(isset($arr_skip_email) && is_array($arr_skip_email) && sizeof($arr_skip_email) > 0)
	{
		foreach($arr_skip_email as $email)
		{
			$skipemail2[] =  trim("'" . htmlentities($email) . "'");
		}
		
		$string_email = implode(",", $skipemail2);
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " a.newEmail NOT IN (" . $string_email . ")";
	}
		
		
	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_event_id=89";
					
	if($searchStart != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
	}
	
	if($searchEnd != '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
	}
	
	if($searchStart == '' && $searchEnd == '')
	{
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_created_at >= '2021-01-01 00:00:00'";
	}
	
    $sql = "SELECT
			a.newEmail as Email, a.newFirstName as FirstName, a.newLastName as LastName, a.subscriber_question1 as Mobile, 
			a.subscriber_question12 as PregnancyStatus, a.subscriber_question11 as Flavour, a.subscriber_question2 as Address, a.subscriber_question3 as Postcode, 
			a.subscriber_question5 as City, a.subscriber_question7 as State, a.subscriber_question8 as Brand, a.subscriber_question9 as Language, 
			a.subscriber_question10 as TnC, a.subscriber_created_at as DateSubmit
			FROM ps_events_subscriber a" . $wheresql . " GROUP BY newEmail	ORDER BY subscriber_created_at ASC " . $limitsql;  
		$result = $conn->query($sql);
		
		if(is_object($result)){
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();

			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', 'Anmum Materna Report 2021| Motherhood.com.my Malaysia');
			$objPHPExcel->getActiveSheet()->getStyle("A2:C2")->getFont()->setSize(18);
			$objPHPExcel->getActiveSheet()->getRowDimension("2")->setRowHeight(20);
			$objPHPExcel->getActiveSheet()->mergeCells('A2:C2');
			
			if($strDateMsg != "")
			{
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A3', $strDateMsg);
				$objPHPExcel->getActiveSheet()->getStyle("A3:C3")->getFont()->setSize(16);
				$objPHPExcel->getActiveSheet()->getRowDimension("3")->setRowHeight(20);
				$objPHPExcel->getActiveSheet()->mergeCells('A3:C3');
			}
			
			
			$noFields = mysqli_num_fields($result);
			
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A5', 'NO');
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
			$headerColumn = 'B';
			for ($i = 0; $i < $noFields; $i++) {
				$field 	= mysqli_field_name($result, $i);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue($headerColumn. '5', $field);
				$objPHPExcel->getActiveSheet()->getStyle($headerColumn. '5')->getFont()->setBold( true );
				// $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($headerColumn)->setAutoSize(false);
				
				if(in_array($headerColumn, array("A", "E", "M", "J", "G")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(20);
				}
				elseif(in_array($headerColumn, array("I", "L")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(15);
				}
				elseif(in_array($headerColumn, array("F")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(30);
				}
				elseif(in_array($headerColumn, array("H")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(100);
				}
				else
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(50);
				}
				
				$objPHPExcel->getActiveSheet()->getStyle($headerColumn. '5')->getAlignment()->applyFromArray(array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
				$lastHeader = $headerColumn;
				$headerColumn++;
			}
			
			$rowData = 6;
			$ccount  = 0;
			while ($r = mysqli_fetch_row($result)) {
				$colData = 'B';
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . $rowData , ++$ccount);
				foreach ($r as $indx => $kolonne) {
					
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $kolonne);
					
					if($colData == 'D'|| $colData == "I"){
						$objPHPExcel->getActiveSheet()->getStyle($colData . $rowData)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
						$objPHPExcel->getActiveSheet()->getStyle($colData . $rowData)->getAlignment()->applyFromArray(array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT));
					}
					$lastCol = $colData;
					$colData++;
				}
				$lastRow = $rowData;
				$rowData++;
			}
			
			$styleArray = array(
			  'borders' => array(
				'allborders' => array(
				  'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			  )
			);
			
			$objPHPExcel->getActiveSheet()->getStyle('A5:' . $lastCol . $lastRow)->applyFromArray($styleArray);
			unset($styleArray);
			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('report_data');


			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);


			// Redirect output to a client’s web browser (Excel2007)
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="anmum-materna-report2021.xlsx"');
			header('Cache-Control: max-age=0');
			header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
			header ('Pragma: public'); // HTTP/1.0



			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
		}
		
		$result->close();
		mysqli_close($conn);
	}
	
	function mysqli_field_name($result, $field_offset) {
		$properties = mysqli_fetch_field_direct($result, $field_offset);
		return is_object($properties) ? $properties->name : null;
	}
?>
