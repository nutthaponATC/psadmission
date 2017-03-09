<?php 
session_start();
echo "<meta charset='UTF-8'>";
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');
$day = $_GET['day'];
$type = $_GET['type'];
$id_history = $_SESSION['id_user'];

$sql = "UPDATE day SET day = $day WHERE id_day = $id_history";
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('เปลี่ยนแปลงวันสมัครเรียบร้อย');";
	echo "location='form_phone_edit.php';";
	echo "</script>";
}

 ?>
