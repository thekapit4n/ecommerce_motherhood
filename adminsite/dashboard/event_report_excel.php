<?php
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../../../tools/PHPExcel-1.8/Classes/PHPExcel.php'; #this file location will be use for next report onwards 01/02/2021 - haiqal halim
require_once dirname(__FILE__) . '/../events/events_db_config_excel.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(0);
error_reporting(E_ALL);
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
		$limitsql    = " ";
		$strDateMsg  = "";
		$groupBy 	 = "";
		$title		 = "event_report";
		
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
		
		if(isset($_POST['subscriber_event_id']) && $_POST['subscriber_event_id'] > 0)
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "a.subscriber_event_id = " . $_POST['subscriber_event_id'];
			
			$sql_eventdetails = "SELECT * FROM `ps_events` WHERE `event_id` = '". $_POST['subscriber_event_id'] ."' LIMIT 1 ";
			$result_set  	  = mysqli_query($conn, $sql_eventdetails);
			$arrEventDetails  = mysqli_fetch_array($result_set);
			$title 			  = (isset($arrEventDetails) && is_array($arrEventDetails) && sizeof($arrEventDetails) > 0 && isset($arrEventDetails['event_name']) && $arrEventDetails['event_name'] != '') ? $arrEventDetails['event_name']  : '';
		}
		else
		{
			exit("Required event id to proceed");
		}
		
		if(isset($_POST['typefilter']) && $_POST['typefilter'] != '')
		{
			if($_POST['typefilter'] == 'filter_email')
				$groupBy = ' GROUP BY a.newEmail ';
		}
		
		if($searchStart != '')
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " a.subscriber_created_at >= '" . trim($searchStart . " 00:00:00") . "'";
		}
		
		if($searchEnd != '')
		{
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " a.subscriber_created_at <= '" . trim($searchEnd . " 23:59:59") . "'";
		}
		
		$sql = "SELECT b.`event_name`, CONCAT(c.firstname, c.lastname) AS NAME, c.email, IF(d.phone = '', phone_mobile, phone) AS phone, a.*
				FROM ps_events_subscriber a
				INNER JOIN ps_events b ON
					b.event_id = a.subscriber_event_id
				LEFT JOIN ps_customer c ON
					a.subscriber_customer_id = c.id_customer
				LEFT JOIN(
					SELECT
						*
					FROM
						ps_address
					GROUP BY
						id_customer
				) d
				ON
					c.id_customer = d.id_customer" . $wheresql .  $groupBy . "  ORDER BY a.`subscriber_id`DESC ";
		$result = $conn->query($sql);
		if(is_object($result)){
			
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();
			
			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', $title);
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
				
				if(in_array($headerColumn, array("F", "G","H","I","J","K", "L", "M")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(20);
				}
				elseif(in_array($headerColumn, array("F")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(30);
				}
				elseif(in_array($headerColumn, array("E")))
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
				foreach ($r as $kolonne) {
					
					// if($colData == 'C') #name
					// {
						// $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , ucwords(strtolower($kolonne)));
					// }
					// if($colData == 'M') #date
					// {
						// $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , date("d-m-Y H:i:s", strtotime($kolonne)));
					// }
					// else
					// {
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $kolonne);
					// }
					
					// if($colData == 'D'|| $colData == "F"){
						// $objPHPExcel->getActiveSheet()->getStyle($colData . $rowData)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
						// $objPHPExcel->getActiveSheet()->getStyle($colData . $rowData)->getAlignment()->applyFromArray(array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT));
					// }
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
			header('Content-Disposition: attachment;filename="' . $title . '.xlsx"');
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
