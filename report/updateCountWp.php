<?php 
ini_set('max_execution_time', '0');
$user = "haiqal.nurengroup";
$pass = 'dL`aQf"]yk3MS+K}';

$host = "10.148.0.7";
$dbname = "com.my.story.Motherhood";

$conn2 = mysqli_connect($host, $user, $pass,$dbname);

include '../admin2635/dashboard/events/events_db_config.php';

$sql = "INSERT INTO `com.my.story.Motherhood`.wp_cn_track_post  ( post_id, created_at, create_date ) VALUES 
(" . 51702 . ",'" . time() . "','" . date('Y-m-d')."')";

echo "date start : " . date('Y-m-d H:i:s') . "<br/>";
for($i = 0; $i < 3800; $i++)
{
	// $result = $conn2->query($sql);
}

echo "date end : " . date('Y-m-d H:i:s') . "<br/>";
	
$result->close();
mysqli_close($conn);

?>