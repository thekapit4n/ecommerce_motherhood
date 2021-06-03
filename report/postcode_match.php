<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../tools/PHPExcel-1.8/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/../admin2635/dashboard/events/events_db_config_excel.php';

	$arr_postcode = array(
		"43300",
		"57100",
		"47830",
		"14300",
		"42300",
		"46000",
		"59200",
		"53100",
		"63000",
		"46000",
		"54200",
		"40200",
		"47000",
		"48020",
		"47810",
		"47100",
		"41200",
		"53300",
		"46000",
		"43300",
		"68000",
		"45000",
		"41050",
		"47400",
		"59000",
		"52200",
		"47100",
		"47800",
		"47300",
		"50300",
		"68100",
		"47610",
		"57100",
		"43800",
		"47820",
		"40000",
		"47810",
		"43300",
		"43900",
		"47800",
		"43300",
		"71950",
		"53100",
		"40400",
		"56000",
		"43000",
		"75050",
		"40000",
		"44300",
		"53300",
		"16100",
		"47810",
		"47300",
		"68100",
		"43200",
		"51000",
		"68000",
		"42100",
		"57000",
		"50480",
		"56100",
		"59200",
		"68100",
		"54200",
		"42700",
		"41200",
		"46400",
		"41050",
		"51200",
		"46300",
		"43000",
		"40400",
		"48100",
		"56000",
		"41050",
		"63000",
		"47410",
		"47410",
		"47180",
		"51200",
		"42500",
		"47301",
		"47301",
		"68000",
		"47000",
		"47160",
		"58200",
		"41200",
		"401500",
		"47800",
		"41200",
		"58200",
		"43300",
		"68000",
		"94300",
		"43000",
		"47140",
		"40470",
		"8000",
		"46000",
		"40000",
		"47600",
		"47820",
		"58200",
		"47000",
		"56000",
		"43800",
		"46300",
		"47000",
		"11700",
		"47800",
		"46200",
		"51200",
		"43500",
		"40170",
		"46400",
		"47630",
		"47810",
		"70300",
		"68100",
		"47500",
		"40170",
		"47170",
		"53300",
		"47500",
		"47000",
		"57000",
		"47130",
		"46150",
		"43000",
		"93150",
		"47301",
		"58100",
		"68100",
		"40160",
		"68100",
		"47000",
		"57100",
		"43000",
		"47810",
		"63000",
		"68100",
		"47140",
		"57100",
		"56000",
		"47000",
		"47810",
		"46510",
		"40170",
		"51000",
		"40150",
		"47301",
		"47820",
		"63000",
		"40300",
		"43200",
		"40479",
		"53100",
		"40460",
		"44300",
		"57000",
		"40000",
		"40150",
		"43500",
		"42000",
		"52100",
		"42600",
		"40150",
		"48300",
		"47630",
		"47500",
		"47810",
		"42700",
		"42610",
		"47100",
		"42700",
		"47400",
		"68100",
		"58200",
		"40150",
		"47100",
		"43650",
		"47100",
		"43000",
		"50480",
		"46000",
		"43900",
		"47810",
		"40000",
		"56000",
		"43300",
		"68000",
		"47810",
		"40200",
		"42100",
		"47810",
		"47810",
		"47830",
		"52100",
		"42200",
		"68100",
		"40150",
		"47810",
		"47650",
		"52200",
		"47630",
		"47400",
		"47810",
		"47100",
		"43000",
		"68000",
		"43200",
		"47301",
		"41200",
		"68000",
		"47600",
		"43300",
		"41170",
		"47180",
		"71950",
		"41050",
		"56000",
		"47160",
		"59100",
		"50490",
		"47150",
		"57100",
		"52200",
		"47301",
		"43300",
		"47301",
		"42610",
		"58000",
		"53100",
		"48000",
		"40170",
		"47810",
		"68100",
		"43300",
		"42100",
		"43000",
		"52000",
		"52200",
		"47650",
		"47130",
		"50460",
		"45600",
		"46100",
		"51000",
		"62200",
		"47400",
		"11700",
		"53300",
		"42500",
		"47301",
		"47800",
		"54200",
		"48000",
		"47100",
		"57000",
		"68000",
		"47000",
		"40170",
		"47150",
		"46000",
		"47810",
		"43300",
		"58200",
		"40160",
		"41000",
		"47400",
		"47300",
		"47100",
		"56000",
		"60000",
		"40170",
		"53100",
		"47300",
		"42500",
		"47130",
		"6660",
		"43500",
		"63000",
		"47300",
		"47810",
		"52100",
		"77400",
		"47100",
		"47810",
		"53300",
		"59200",
		"43200",
		"59200",
		"51100",
		"68100",
		"47810",
		"56000",
		"43000",
		"58100",
		"45200",
		"43000",
		"53300",
		"52000",
		"40100",
		"47810",
		"43650",
		"47410",
		"47820",
		"52000",
		"48000",
		"59200",
		"47810",
		"47820",
		"51000",
		"89608",
		"55100",
		"50490",
		"47610",
		"56000",
		"50490",
		"60000",
		"47620",
		"40000",
		"47100",
		"43000",
		"40000",
		"52100",
		"41050",
		"47830",
		"40170",
		"46000",
		"43500",
		"56000",
		"57000",
		"58200",
		"42000",
		"56000",
		"47650",
		"40300",
		"47100",
		"47000",
		"53300",
		"68100",
		"43900",
		"43300",
		"40000",
		"40400",
		"40150",
		"46150",
		"47810",
		"58200",
		"40150",
		"43300",
		"26900",
		"47120",
		"68100",
		"43700",
		"42300",
		"52200",
		"43000",
		"47500",
		"41150",
		"47400",
		"48000",
		"47301",
		"43200",
		"55300",
		"52100",
		"75150",
		"43200",
		"42200",
		"41200",
		"47100",
		"68100",
		"40100",
		"41100",
		"47000",
		"41300",
		"40000",
		"52200",
		"48000",
		"51000",
		"40000",
		"43500",
		"47810",
		"47301",
		"68000",
		"48300",
		"40150",
		"43800",
		"41200",
		"68000",
		"51200",
		"41050",
		"45500",
		"41300",
		"55100",
		"40300",
		"47610",
		"68100",
		"42500",
		"42300",
		"58000",
		"40460",
		"68000",
		"79200",
		"47800",
		"52100",
		"47150",
		"55100",
		"53300",
		"63000",
		"68000",
		"47400",
		"47300",
		"47800",
		"63000",
		"46150",
		"40150",
		"53000",
		"46400",
		"40150",
		"53200",
		"40000",
		"43100",
		"42600",
		"46400",
		"57000",
		"40200",
		"40300",
		"47130",
		"47410",
		"68100",
		"57000",
		"47300",
		"53300",
		"47100",
		"47100",
		"84900",
		"68000",
		"31400",
		"43300",
		"40170",
		"58200",
		"42000",
		"41050",
		"47100",
		"52200",
		"51100",
		"48000",
		"47600",
		"47410",
		"47000",
		"43000",
		"56100",
		"47800",
		"57000",
		"43300",
		"52100",
		"55300",
		"47301",
		"63000",
		"50050",
		"52200",
		"46400",
		"47300",
		"47100",
		"51200",
		"57000",
		"41200",
		"53300",
		"47410",
		"42700",
		"71350",
		"48020",
		"43000",
		"68000",
		"43000",
		"43000",
		"47301",
		"50300",
		"47120",
		"53200",
		"47100",
		"47100",
		"52100",
		"47400",
		"58000",
		"40160",
		"47820",
		"47301",
		"47400",
		"68800",
		"47820",
		"58200",
		"47000",
		"47100",
		"47800",
		"60000",
		"57000",
		"47800",
		"68100",
		"47000",
		"40460",
		"56000",
		"47620",
		"52000",
		"47130",
		"51000",
		"16100"
	);
	
	foreach($arr_postcode as $valPostcode)
	{
		$sql = "SELECT a.postcode, a.post_office, b.state_name FROM motherhood_presta.ps_postcode a
				LEFT JOIN ps_postcode_state b 
				ON a.state_code = b.state_code
				WHERE a.postcode = " . trim($valPostcode) . " LIMIT 1";
		echo $sql . "<br/>";
		$result = $conn->query($sql);
		print_r($result);exit;
	}
	
	exit("sds");
	
	$sql = "SELECT
		evnt.newEmail as Email, evnt.newFirstName as FullName,  evnt.subscriber_question1 as Mobile, 
		evnt.subscriber_question4 as childDOB, evnt.subscriber_question3 as ProductName, evnt.subscriber_question13 as TasteofMilk,  evnt.subscriber_question5 as AddressLine1, 
		evnt.subscriber_question7 as AddressLine2, evnt.subscriber_question8 as Postcode, evnt.subscriber_question9 as City, evnt.subscriber_question10 as State, 
		evnt.subscriber_question12 as TnC, evnt.subscriber_created_at as DateSubmit
		FROM ps_events_subscriber evnt " . $wheresql . $groupBy . " ORDER BY evnt.subscriber_created_at ASC " . $limitsql;
		$result = $conn->query($sql);
		
		if(is_object($result)){
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();

			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', 'Dutch Lady Report 2021| Motherhood.com.my Malaysia');
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
				
				if(in_array($headerColumn, array("A", "E", "M", "J", "G", "N")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(20);
				}
				elseif(in_array($headerColumn, array("K")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(15);
				}
				elseif(in_array($headerColumn, array("F")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(30);
				}
				elseif(in_array($headerColumn, array("H", "I")))
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
			header('Content-Disposition: attachment;filename="dutch-lady-report2021.xlsx"');
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
