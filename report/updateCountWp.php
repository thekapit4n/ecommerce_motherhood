
<?php 
ini_set('max_execution_time', '0');
$user = "haiqal.nurengroup";
$pass = 'dL`aQf"]yk3MS+K}';

$host = "10.148.0.7";
$dbname = "com.my.story.Motherhood";

$conn2 = mysqli_connect($host, $user, $pass,$dbname);
$articleid = 52555;
include '../admin2635/dashboard/events/events_db_config.php';

/* post id => number to increase*/
$arr_article = array(
	34321 => 3000,
);

if(is_array($arr_article) && sizeof($arr_article) > 0)
{
	foreach($arr_article as $articleid => $countnumber)
	{
		$sql = "INSERT INTO `com.my.story.Motherhood`.wp_cn_track_post  ( post_id, created_at, create_date ) VALUES 
		(" . $articleid  . ",'" . time() . "','" . date('Y-m-d')."')";

		echo "article id : " . $articleid . "number of count : " . $countnumber . "<br/>";
		echo "date start : " . date('Y-m-d H:i:s') . "<br/>";
		for($i = 0; $i < $countnumber; $i++)
		{
			// $result = $conn2->query($sql);
		}

		echo "date end : " . date('Y-m-d H:i:s') . "<br/><br/><br/>";
	}
}

	
$result->close();
mysqli_close($conn);

?>