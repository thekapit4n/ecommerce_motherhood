<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../tools/PHPExcel-1.8/Classes/PHPExcel.php';
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
		$limitsql    = " LIMIT 5000";
		$strDateMsg  = "";
		
		$arrChangeBrandToOthers = array(
			
		);
		
		$arrShortNameToFullname = array(
			
		);
		
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
		
	
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_event_id = 141";
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_question28 = 'redeem'";

		if($searchStart != '')
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
		}
		
		if($searchEnd != '')
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
		}
		
		// if($searchStart == '' && $searchEnd == '')
		// {
		// 	$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '2021-08-01 00:00:00'";
		// }
		
		$sql = "SELECT
				evnt.newEmail as Email, RTRIM(LTRIM(CONCAT(evnt.newFirstName , ' ' , evnt.newLastName))) AS Name,  evnt.subscriber_question1 as 'Mobile No.', evnt.subscriber_question2 as 'Date of birth',evnt.subscriber_question9 as 'Maternal Milk Brand',evnt.subscriber_question12 as 'EDD',
				RTRIM(LTRIM(CONCAT(evnt.subscriber_question3 , ', ' , evnt.subscriber_question8))) AS 'Address', evnt.subscriber_question4 as 'Postcode', evnt.subscriber_question5 as 'City', evnt.subscriber_question7 as 'State', evnt.subscriber_question10 as 'Country', 
				evnt.subscriber_question14 as 'Redeem Location',  evnt.subscriber_question29 AS 'Redeem Date', evnt.subscriber_created_at as 'Date Registered'
				FROM ps_events_subscriber evnt " . $wheresql . $groupBy . " ORDER BY evnt.subscriber_created_at ASC " . $limitsql;
  		 $result = $conn->query($sql);
		if(is_object($result)){
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();

			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', 'Newmom Redeem Gift (Walk-in) 2021 | Motherhood.com.my Malaysia');
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
				
				if(in_array($headerColumn, array("A", "D", "M")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(20);
				}
				// elseif(in_array($headerColumn, array("L")))
				// {
					// $objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(15);
				// }
				elseif(in_array($headerColumn, array("G")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(30);
				}
				elseif(in_array($headerColumn, array("H")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(100);
				}
				else
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(40);
				}
				
				$objPHPExcel->getActiveSheet()->getStyle($headerColumn. '5')->getAlignment()->applyFromArray(array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
				$lastHeader = $headerColumn;
				$headerColumn++;
			}
			
			$arrChangeBrandToOthers = array(
			
			);
			
			$rowData = 6;
			$ccount  = 0;
			while ($r = mysqli_fetch_row($result)) {
				$colData = 'B';
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . $rowData , ++$ccount);
				foreach ($r as $indx => $kolonne) {
					if($indx == 3)
					{
						$dob = $kolonne;
						$arr_dob = explode('-', $dob);

						if(is_array($arr_dob) && sizeof($arr_dob) == 3)
						{
							$dob = $arr_dob[2] . "/" . $arr_dob[1] . "/" . $arr_dob[0];
						}
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $dob);
					}
					else
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $kolonne);
					
					if($colData == 'D'|| $colData == "G"){
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
			header('Content-Disposition: attachment;filename="newmom-walkin-report2021.xlsx"');
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
