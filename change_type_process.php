<?php
session_start();
echo "<meta charset='UTF-8'>";
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');

$type = $_POST['type'];
$sType = $_POST['sType'];
$radio1 = $_POST['radio1'];
$radio2 = $_POST['radio2'];
$radio3 = $_POST['radio3'];
$radio4 = $_POST['radio4'];
$radio5 = $_POST['radio5'];
$radio6 = $_POST['radio6'];
$radio7 = $_POST['radio7'];
$radio8 = $_POST['radio8'];
$radio9 = $_POST['radio9'];
$radio10 = $_POST['radio10'];
$radio11 = $_POST['radio11'];
$radio12 = $_POST['radio12'];
$radio13 = $_POST['radio13'];
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];
$input4 = $_POST['input4'];
$input5 = $_POST['input5'];
$input6 = $_POST['input6'];
$input7 = $_POST['input7'];
$input8 = $_POST['input8'];
$input9 = $_POST['input9'];
$input10 = $_POST['input10'];
$input11 = $_POST['input11'];
$input12 = $_POST['input12'];
$input13 = $_POST['input13'];
$input14 = $_POST['input14'];
$input15 = $_POST['input15'];
$input16 = $_POST['input16'];
$input17 = $_POST['input17'];
$input18 = $_POST['input18'];
$input19 = $_POST['input19'];
$input20 = $_POST['input20'];
$input21 = $_POST['input21'];
$input22 = $_POST['input22'];
$input23 = $_POST['input23'];
$input24 = $_POST['input24'];
$input25 = $_POST['input25'];
$input26 = $_POST['input26'];
$input27 = $_POST['input27'];
$input28 = $_POST['input28'];
$input29 = $_POST['input29'];
$input30 = $_POST['input30'];
$input31 = $_POST['input31'];
$input32 = $_POST['input32'];
$input33 = $_POST['input33'];
$input34 = $_POST['input34'];
$input35 = $_POST['input35'];
$input36 = $_POST['input36'];
$input37 = $_POST['input37'];
$input38 = $_POST['input38'];
$input39 = $_POST['input39'];
$input40 = $_POST['input40'];
$input41 = $_POST['input41'];
$input42 = $_POST['input42'];
$input43 = $_POST['input43'];
$input44 = $_POST['input44'];
$input45 = $_POST['input45'];
$input46 = $_POST['input46'];
$input47 = $_POST['input47'];
$input48 = $_POST['input48'];
$input49 = $_POST['input49'];
$input50 = $_POST['input50'];
$input51 = $_POST['input51'];
$input52 = $_POST['input52'];
$input53 = $_POST['input53'];
$input54 = $_POST['input54'];
$input55 = $_POST['input55'];
$input98 = $_POST['input98'];
$input99 = $_POST['input99'];

$sql = "SELECT * FROM user_ps WHERE username = '$input98' AND password = '$input99'";
$query = mysql_query($sql);
$queryZ1 = mysql_num_rows($query);

$sql = "SELECT * FROM user_ps WHERE username = '$input98' AND password = '$input99' AND status = 0";
$query = mysql_query($sql);
$queryZ2 = mysql_num_rows($query);

if (empty($input98) || empty($input99)) {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนชื้อผู้ใช้และรหัส');";
	echo "javascript:history.back()";
	echo "</script>";
}elseif ($queryZ1 == 0) {
	echo "<script language='javascript'>";
	echo "alert('ชื้อผู้ใช้และรหัสผิด');";
	echo "javascript:history.back()";
	echo "</script>";
}elseif ($queryZ2 == 1) {
	echo "<script language='javascript'>";
	echo "alert('ชื้อผู้ใช้และรหัสนี้ถูกใช้ไปแล้ว');";
	echo "javascript:history.back()";
	echo "</script>";
}elseif (empty($input1)) {
	echo "<script language='javascript'>";
	echo "alert('กรุณากรอกป้อนเลขใบสมัครใหม่');";
	echo "javascript:history.back()";
	echo "</script>";
} elseif (empty($input2) || empty($input3) || empty($input4) || empty($input5) || empty($input6) || empty($input7) || empty($input8) || empty($input9) || empty($input10) || empty($input11) || empty($input12) || empty($input13) || empty($input14) || empty($input15) || empty($input17) || empty($input18) || empty($input19) || empty($input20) || empty($input21) || empty($input22) || empty($input23) || empty($input24) || empty($input26) || empty($input27) || empty($input28) || empty($input29) || empty($input30)  || empty($input31) || empty($input32) || empty($input33) || empty($input35) || empty($input36) || empty($input37) || empty($input38) || empty($input40) || empty($input41) || empty($input42) || empty($input43) || empty($input44) || $radio1 == 0 || $radio2 == 0 || $radio3 == 0 || $radio4 == 0 || $radio5 == 0 || $radio6 == 0 || $radio7 == 0 || $radio8 == 0 || $radio9 == 0 || $radio10 == 0) {
	
	$_SESSION['check'] = 1;
	echo "<script language='javascript'>";
	echo "alert('กรุณากรอกข้อมูลนักเรียนให้ครบ');";
	echo "javascript:history.back()";
	echo "</script>";
	exit();
} else {
	$_SESSION['check'] = 2;

	$id_user = $_SESSION['id_user'];

	$sql ="UPDATE `history_ps` SET `type` = '$type', `stype` = '$sType', `radio1` = '$radio1', `radio2` = '$radio2', `radio3` = '$radio3', `radio4` = '$radio4', `radio5` = '$radio5', `radio6` = '$radio6', `radio7` = '$radio7', `radio8` = '$radio8', `radio9` = '$radio9', `radio10` = '$radio10', `radio11` = '$radio11', `radio12` = '$radio12', `radio13` = '$radio13', `input1` = '$input1', `input2` = '$input2', `input3` = '$input3', `input4` = '$input4', `input5` = '$input5 ', `input6` = '$input6', `input7` = '$input7', `input8` = '$input8', `input9` = '$input9', `input10` = '$input10', `input11` = '$input11', `input12` = '$input12', `input13` = '$input13', `input14` = '$input14', `input15` = '$input15', `input16` = '$input16', `input17` = '$input17', `input18` = '$input18', `input19` = '$input19', `input20` = '$input20', `input21` = '$input21', `input22` = '$input22', `input23` = '$input23', `input24` = '$input24', `input25` = '$input25', `input26` = '$input26', `input27` = '$input27', `input28` = '$input28', `input29` = '$input29', `input30` = '$input30', `input31` = '$input31', `input32` = '$input32', `input33` = '$input33', `input34` = '$input34', `input35` = '$input35', `input36` = '$input36', `input37` = '$input37', `input38` = '$input38', `input39` = '$input39', `input40` = '$input40', `input41` = '$input41', `input42` = '$input42', `input43` = '$input43', `input44` = '$input44', `input45` = '$input45', `input46` = '$input46', `input47` = '$input47', `input48` = '$input48', `input49` = '$input49', `input50` = '$input50', `input51` = '$input51', `input52` = '$input52', `input53` = '$input53', `input54` = '$input54', `input55` = '$input55' WHERE `history_ps`.`id_history` = $id_user;";

	mysql_query("SET NAMES utf8");
	$query1 = mysql_query($sql);

	$passPS = $input11.$input12.$input13;

	// $sql ="UPDATE `user_ps` SET `username` = '$input2', `password` = '$passPS' WHERE `user_ps`.`id_user` = $id_user;";
	// mysql_query("SET NAMES utf8");
	// $query2 = mysql_query($sql);

	$sql = "UPDATE user_ps SET status = 0 WHERE id_user = '$input98'";
	$query = mysql_query($sql);

	// if ($query1 AND $query2) {
	if ($query1) {
		echo "<script language='javascript'>";
		echo "alert('แก้ไขข้อมูลเรียบร้อย เรียบร้อย');";
		echo "location='main_ps.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาติดต่อผู้ดูแลระบบ');";
		echo "location='main_ps.php';";
		echo "</script>";
	}
}
 ?>
