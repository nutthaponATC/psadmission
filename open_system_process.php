<?php 
$status = $_GET['type'];
include('config.php');

if ($status == 1) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 1";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 2) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 2";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 3) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 3";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 4) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 4";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 5) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 5";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 6) {
	$sql = "UPDATE setting_open SET status = 1 WHERE id_setting = 6";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 7) {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 1";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 8) {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 2";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 9) {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 3";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 10) {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 4";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} elseif ($status == 11) {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 5";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} else {
	$sql = "UPDATE setting_open SET status = 0 WHERE id_setting = 6";
	$query = mysql_query($sql);
	echo "<script language='javascript'>";
	echo "location='open_system.php';";
	echo "</script>";
} 

 ?>