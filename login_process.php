<?php 
session_start();
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');

$user = $_POST['user'];
$pass = $_POST['password'];

if (empty($user) || empty($pass)) {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนชื่อผู้ใช้งานและรหัสผ่านให้ครบ');";
	echo "javascript:history.back()";
	echo "</script>";
} else {
	$usernameArray[0] = explode("'", $user);
	$passwordArray[0] = explode("'", $pass);
	$username = implode("|",$usernameArray[0]);
	$password = implode("|",$passwordArray[0]);

	$sql = "SELECT * FROM user_ps WHERE username = '$user' and password = '$pass'";
	$query = mysql_query($sql);
	$countCheck = mysql_num_rows($query);
	$fetchData = mysql_fetch_array($query);
	$id_user = $fetchData['id_user'];
	$status = $fetchData['status'];

	$sql = "SELECT * FROM user_ps WHERE username = '$user'";
	$query = mysql_query($sql);
	$dataday = mysql_fetch_array($query);
	$id_history = $dataday['id_user'];
	$sql = "SELECT * FROM history_ps WHERE id_history = $id_history";
	$query = mysql_query($sql);
	$countCheckOld = mysql_num_rows($query);
	$fetchData2 = mysql_fetch_array($query);
	$id_user2 = $fetchData2['id_history'];
	$status2 = $fetchData2['status'];

	if ($countCheckOld == 1) {
		$_SESSION['id_user'] = $id_user2;
		$_SESSION['status'] = $status2;
		if ($status2 != 0) {
			echo "<script language='javascript'>";
			echo "location='main_ps.php';";
			echo "</script>";
		} else {
			echo "<script language='javascript'>";
			echo "location='index.php';";
			echo "</script>";
		}
	}elseif ($countCheck == 1) {
		$type = $_POST['type'];
		if (empty($type)) {
			echo "<script language='javascript'>";
			echo "location='index.php#typeStudent';";
			echo "</script>";
		}
		$_SESSION['id_user'] = $id_user;
		$_SESSION['status'] = $status;
		if ($status == 1) {
			echo "<script language='javascript'>";
			echo "location='form.php?type=".$type."';";
			echo "</script>";
		} elseif ($status == 9) {
			echo "<script language='javascript'>";
			echo "location='admin_ps.php';";
			echo "</script>";
		} elseif ($status == 8) {
			echo "<script language='javascript'>";
			echo "location='sup_admin_ps.php';";
			echo "</script>";
		} else {
			echo "<script language='javascript'>";
			echo "location='index.php';";
			echo "</script>";
		}
	} else {
		echo "<script language='javascript'>";
		echo "alert('ชื้อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');";
		echo "javascript:history.back()";
		echo "</script>";
	}
} 
 ?>



 ?>