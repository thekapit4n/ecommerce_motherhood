<?php
ini_set('mbstring.internal_encoding','UTF-8');
ini_set('mbstring.func_overload',7);
header('Content-Type: text/html; charset=UTF-8');
require_once(dirname(__FILE__)."/../../../config/settings.inc.php");
//get category data
$conn = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

$host = _DB_SERVER_;
$id = _DB_USER_;
$pass = _DB_PASSWD_;
$db = _DB_NAME_;

$conn = mysqli_connect($host,$id,$pass,$db);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($conn,'utf8');
?>