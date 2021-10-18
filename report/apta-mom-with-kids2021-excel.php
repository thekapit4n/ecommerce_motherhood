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
		$limitsql    = "";
		// $limitsql    = " LIMIT 1500";
		$strDateMsg  = "";
		
		$arrChangeBrandToOthers = array(
			"Appeton",
			"AptaGro",
			"Aptamil",
			"Awarua",
			"Baby Bio",
			"Baby Steps",
			"Bellamy's",
			"Colostrum",
			"Dumex Dupro",
			"Dumex Mamex",
			"Enfalac",
			"Enfamil",
			"Enfinitas",
			"Farmers",
			"Frisolac",
			"G-Star",
			"Glucerna",
			"Habib",
			"Karihome",
			"Lactogrow",
			"Lazz",
			"Merry Nation",
			"Miwako",
			"Nana",
			"Novamil",
			"Suffy",
			"Wildan"
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
		
	
		$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . "evnt.subscriber_event_id = 97";
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
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.subscriber_created_at >= '2021-06-01 00:00:00'";
		}

		$arr_skip_email = array(
			"jingpin89@gmail.com",
			"azieera.hazirah@gmail.com",
			"lilydamiadanial@gmail.com",
			"queenred.1107@gmail.com",
			"noraisyah971221@gmail.com",
			"skyfy_tgezani@yahoo.com",
			"hrosziah@gmail.com",
			"watermeloncch84@gmail.con",
			"salbiah.sarbini@yahoo.com",
			"anneaksiri@gmail.com",
			"bbmin95@gmail.com",
			"ladingfaizal@gmail.com",
			"chanjeexin@gmail.com",
			"mummyara17@gmail.com",
			"chai51@gmail.com",
			"akma87@gmail.com",
			"wong_1213@hotmail.com",
			"popowong_1213@hotmail.com",
			"powong_1213@hotmail.com",
			"mummyara27@gmail.com",
			"mummyara37@gmail.com",
			"mazurainindin@gmail.com",
			"samsengkoboi93@gmail.com",
			"bihah_bi@yahoo.com",
			"rasmaemma85@gmail.com",
			"mhfuzah_mdzin@yahoo.com",
			"aysahzakihossain@gmail.com",
			"norhafisyah123@gmail.com",
			"cheeyen_75@yahoo.com",
			"aisyamikayla2020@gmail.com",
			"miezanaimie@gmail.com",
			"nhocbumx@gmail.com",
			"yap7800@gmail.com",
			"nurulasmaruslan@yahoo.com",
			"anneheaven82@gmail.com",
			"lyshasams@gmail.com",
			"izatilismah34@gmail.com",
			"samsuddinsofian7@gmail.com",
			"nicoledees88@hotmail.com",
			"awesomecarmenxo@gmail.com",
			"yusainichepi@gmail.com",
			"rebecca.ng@nurengroup.com",
			"ienairish80@gmail.com",
			"aysahvv@gmail.com",
			"nurulhuda87300@yahoo.com",
			"alanlim8942@gmail.com",
			"fung5632@gmail.com",
			"shan5321@gmail.com",
			"nurfeewanyzangeh@gmail.com",
			"johan.ahmad.sanusi@gmail.com",
			"hong2415@gmail.com",
			"khai5245@gmail.com",
			"haihui.chong@hotmail.com",
			"monicadinda68@gmail.com",
			"cinderallamelissa0@gmail.com",
			"suenwong827514@yahoo.com.my",
			"asiahrahman850306@gmail.com.my",
			"zhahead88@gmail.com",
			"cmcn24556@gmail.com",
			"myariena23@gmail.com",
			"fatinfazliana3@gmail.com",
			"amychin888888@yahoo.com.my",
			"cheeyrn_73@yahoo.com",
			"azizaziz8846@gmail.com",
			"hafizikarim018@gmail.com",
			"cheeyinglee2@gmail.com",
			"digi.0149740582@gmail.com",
			"sammartindus@gmail.com",
			"haitianlong12@gmail.com",
			"aifiza8786@gmail.com",
			"kahsanlongsteve@gmail.com",
			"chaecha83@gmail.com",
			"adelinegirl@live.com",
			"eelly08@hotmail.com",
			"izzahnasreynayu@gmail.com",
			"nurindayana84@gmail.com",
			"vitoindustries@hotmail.com",
			"gsm_kelly@yahoo.com",
			"adoralee30@gmail.com",
			"syuhadayong@gmail.com",
			"john.ahmad.sanusi@gmail.com",
			"bungabawang@gmail.com",
			"lalafabiola90@gmail.com",
			"john.ahmad.20215@gmail.com",
			"rosejungie13081212@gmail.com",
			"nuridhan86@gmail.com",
			"minnieyko34@gmail.com",
			"chin4521@gmdil.com",
			"hidup.dalam.musim.covid.19@gmail.com",
			"looailingailing@gmail.com",
			"sitiesah11@gmail.cpm",
			"bellchang2020@gmail.com",
			"yeefookkee1028@gmail.com",
			"haiffaaizzatie@gmail.com",
			"iqqfah2@gmail.com",
			"kelvinleow1021@gmail.com",
			"eegol6972@gmail.com",
			"aniskitty92@yahoo.com",
			"meng7542@yahoo.com",
			"qmq3519@yahoo.com",
			"peng9358@gmail.com",
			"leeshiren22@gmail.comr",
			"super.mom.and.dad@gmail.com",
			"lett29@gmail.com",
			"apitbulat36@gmail.com",
			"rohaizanor@gmail.com",
			"anomabdulrazak@gmail.com",
			"coolnisa35@yahoo.con",
			"norlianabintiyusoff633@gmail.com",
			"noranuar8488@gmail.com",
			"agcnd@yahoo.com",
			"yuliantisuwardi14@gmail.com",
			"zawiyahsalatin6@gmail.com",
			"rosevioletcloset@gmail.com",
			"nadiamiqaila94@gmail.com",
			"norain30@yahoo.com",
			"geoklintaielin@gmail.com",
			"kopitopi32@gmail.com",
			"budaklanun@gmail.com",
			"syahirahnuratiqah415@gmail.com",
			"shinglilew@gmail.com",
			"afeeqah@gmail.com",
			"hasenah@gmail.com",
			"assad@gmail.com",
			"laricudaduda@gmail.com",
			"idaharwati_hassan@yahoo.com",
			"roslawati@yahoo.com",
			"syafiqahamilsya@gmail.com",
			"azlinamohamedali82@gmail.com",
			"deniakong81@gmail.com",
			"wongjoonhoe66@gmail.com",
			"cyenan21@gmail.con",
			"bolinyap@gamil.com",
			"licacilica@gmail.com",
			"falique1988@gmail.com",
			"asyrafafiq040499@gmail.con",
			"suen827514@gmail.com",
			"limnanapanda@gmail.com",
			"farnniew@gmail.com",
			"erica9885@gmail.com",
			"kaiyi121@gmail.com",
			"yenlingoh@gmail.com",
			"norazmimi@yahoo.com",
			"norayunordin5@gmail.com",
			"limchoohuay0108@gmail.com",
			"muhammadfaizalats@gmail.com",
			"myramohamad05@gmail.com",
			"maylim1018@gmail.com",
			"joanccharles@yahoo.com",
			"mohamadmyra1984@gmail.com",
			"nickgwee84@yahoo.com",
			"tuluntaparuh@gmail.com",
			"muhdnadiff98@gmail.com",
		);
		
		if(isset($arr_skip_email) && is_array($arr_skip_email) && sizeof($arr_skip_email) > 0)
		{
			foreach($arr_skip_email as $email)
			{
				$skipemail2[] =  trim("'" . htmlentities($email) . "'");
			}
			
			$string_email = implode(",", $skipemail2);
			$wheresql .= (($wheresql == '') ? " WHERE " : " AND " ) . " evnt.newEmail NOT IN (" . $string_email . ")";
		}
		
		$sql = "SELECT
				evnt.newEmail as Email, RTRIM(LTRIM(CONCAT(evnt.newFirstName , ' ' , evnt.newLastName))) AS Name,  evnt.subscriber_question1 as Mobile,  evnt.subscriber_question10 as 'Current Milk Brand', evnt.subscriber_question8 as 'Child Name',evnt.subscriber_question2 as 'Child Dob',
				evnt.subscriber_question3 as 'Address 1', evnt.subscriber_question11 as 'Address 2', evnt.subscriber_question4 as Postcode, evnt.subscriber_question5 as City, evnt.subscriber_question7 as State, evnt.subscriber_question13 as Country, 
				evnt.subscriber_created_at as DateSubmit
				FROM ps_events_subscriber evnt " . $wheresql . " GROUP BY newEmail	ORDER BY evnt.subscriber_created_at ASC " . $limitsql;    
		$result = $conn->query($sql);
		
		if(is_object($result)){
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();

			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', 'Apta Mom With Kids 2021 Report | Motherhood.com.my Malaysia');
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
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N5', 'Status');
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
			$headerColumn = 'B';
			for ($i = 0; $i < $noFields; $i++) {
				$field 	= mysqli_field_name($result, $i);
				if($headerColumn == 'N')
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(50);
					$headerColumn++;
				}
				
				
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue($headerColumn. '5', $field);
				$objPHPExcel->getActiveSheet()->getStyle($headerColumn. '5')->getFont()->setBold( true );
				// $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($headerColumn)->setAutoSize(false);
				
				if(in_array($headerColumn, array("A", "D", "M", "J")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(20);
				}
				elseif(in_array($headerColumn, array("L")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(15);
				}
				elseif(in_array($headerColumn, array("G")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(30);
				}
				elseif(in_array($headerColumn, array("H", "I")))
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(100);
				}
				else
				{
					$objPHPExcel->getActiveSheet()->getColumnDimension($headerColumn)->setWidth(70);
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
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N' . $rowData , 'I have child / children more than 1 year old');
				foreach ($r as $indx => $kolonne) {
					if($colData == 'N')
					{
						++$colData;
					}
					
					if($indx == 1 || $indx == 4) 
					{
						$name = substr($kolonne,0,21);
						$name = ucfirst(strtolower($name));
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $name);
					}
					elseif($indx == 3)
					{
						if(in_array($kolonne, $arrChangeBrandToOthers))
						{
							$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , "Others");
						}
						else
						{
							$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $kolonne);
						}
					}
					else
					{
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue($colData . $rowData , $kolonne);
					}
					
					
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
			header('Content-Disposition: attachment;filename="apta-mom-with-kids2021-report.xlsx"');
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
