<?php
    print_r("start<br />");
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    date_default_timezone_set("Asia/Kuala_Lumpur");
	
   
    require_once(dirname(__FILE__)."/../config/settings.inc.php");
    include_once(dirname(__FILE__).'/../tools/swift/Swift.php');
    include_once(dirname(__FILE__).'/../tools/swift/Swift/Connection/SMTP.php');
    include_once(dirname(__FILE__).'/../tools/swift/Swift/Connection/NativeMail.php');
    include_once(dirname(__FILE__).'/../tools/swift/Swift/Plugin/Decorator.php');

    // $fromDate = date('Y-m-d',strtotime("-2 days"));
    // $fromDate1 = date('Y-m-d',strtotime("-3 days"));
    // print_r($fromDate);
    // print_r("<br />");
    // print_r($fromDate1);
    // print_r("<br />");
    
    
    $conn 	 = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
    $smtpSQL = "SELECT name, value FROM ps_configuration WHERE id_shop = 1 ".
				"AND name IN ('PS_MAIL_SERVER', 'PS_MAIL_USER','PS_MAIL_PASSWD','PS_MAIL_SMTP_ENCRYPTION','PS_MAIL_SMTP_PORT','PS_MAIL_TYPE','PS_MAIL_DOMAIN')";
    $result  = $conn->query($smtpSQL);
    $smtpConfig = array();
    while ($row = $result->fetch_assoc()) {
        $smtpConfig[$row["name"]] = $row["value"];
    }
	
	#get list of event active name not include test
    // $sql = "SELECT event_id,event_name,event_title,event_slug,event_start_date,event_end_date FROM motherhood_presta.ps_events WHERE event_active = 1 AND event_name NOT LIKE '%test%'";  
	$sql = "SELECT 
			evnt.event_id,
			evnt.event_name,
			evnt.event_title,
			evnt.event_slug,
			evnt.event_start_date,
			evnt.event_end_date
		FROM
			motherhood_presta.ps_events as evnt
		INNER JOIN 
			 motherhood_presta.ps_events_subscriber as subscriber
		ON
			 evnt.event_id = subscriber.subscriber_event_id
		WHERE
			evnt.event_active = 1
			AND evnt.event_name NOT LIKE '%test%'
			AND evnt.event_slug NOT LIKE '%test%'
			 AND (subscriber.newEmail != '' AND subscriber.newEmail IS  NOT NULL)
		GROUP BY evnt.event_id"; 
    $result = $conn->query($sql);
   
	$arr_notmap = array();
	
    while ($row = $result->fetch_assoc()) {
		#check if the event exist or not in mapping table
		$sql_checkmap = "SELECT COUNT(map_id) as total FROM motherhood_presta.ps_events_mapping WHERE event_id = " . $row['event_id']; 
		$r_checkmap   = $conn->query($sql_checkmap);
		$rowCheckmap  = $r_checkmap->fetch_assoc();
		
		if($rowCheckmap['total'] <= 0)
		{
			$arr_notmap[] = $row;
		}
    }
    
    $result->close();
    mysqli_close($conn);
    
	if(is_array($arr_notmap) && sizeof($arr_notmap) > 0)
	{
		$subject = "Active Events without mapping to profile";
		$content = "Below the details active event that not be map tablue column \r\n";
		$content .= "\r\n";
		$content .= "<table style='border: 1px solid black;'>";
		$content .= "<thead>";
		$content .= "<tr>";
		$content .= "<th style='border: 1px solid black;'>No</th>";
		$content .= "<th style='border: 1px solid black;'>Event id</th>";
		$content .= "<th style='border: 1px solid black;'>Event name</th>";
		$content .= "<th style='border: 1px solid black;'>Start Date</th>";
		$content .= "<th style='border: 1px solid black;'>End Date</th>";
		$content .= "</tr>";
		$content .= "</thead>";
		$content .= "</tbody>";
		
		$count = 0;
		foreach($arr_notmap as $details)
		{
			$content .= "<tr>";
			$content .= "<td style='border: 1px solid black;'>" . ++$count . "</td>";
			$content .= "<td style='border: 1px solid black;'>" . $details['event_id'] . "</td>";
			$content .= "<td style='border: 1px solid black;'>" . $details['event_name'] . "</td>";
			$content .= "<td style='border: 1px solid black;'>" . $details['event_start_date'] . "</td>";
			$content .= "<td style='border: 1px solid black;'>" . $details['event_end_date'] . "</td>";
			$content .= "</tr>";
		}
		
		$content .= "</tbody>";
		$content .= "</table>";
		
		SendEmail($smtpConfig, $subject, $content);
	}
   
    function SendEmail($smtpConfig, $subject, $content) {
		// $to = 'it.support@nurengroup.com';
		$toEmail = 'john.fan@nurengroup.com';
		$ccEmail = 'it.support@nurengroup.com';
		$to 	 = new Swift_RecipientList();
		$to->addTo("john.fan@nurengroup.com");
		$to->addTo("megan.lee@nurengroup.com");
		$to->addCC($ccEmail);
       
        try
		{
			$smtp = new Swift_Connection_SMTP($smtpConfig["PS_MAIL_SERVER"], $smtpConfig["PS_MAIL_SMTP_PORT"], Swift_Connection_SMTP::ENC_OFF);
			$smtp->setUsername($smtpConfig["PS_MAIL_USER"]);
			$smtp->setpassword($smtpConfig["PS_MAIL_PASSWD"]);
			$smtp->setTimeout(5);
			//print_r($smtpConfig);
			$swift = new Swift($smtp, $smtpConfig['PS_MAIL_DOMAIN']);
			$message = new Swift_Message($subject, $content, 'text/html');

			echo "sending";
			if ($swift->send($message, $to, 'hi@motherhood.com.my'))
				$result = true;
			echo "done";
			$swift->disconnect();
		}
		catch (Swift_ConnectionException $e)
		{
			echo "XXX";
			$result = $e->getMessage();
		}
		catch (Swift_Message_MimeException $e)
		{
			echo "YYY";
			$result = $e->getMessage();
		}
        
        print_r("Email Result: ");
        print_r($result);
        print_r("<br />");
	}
?>
