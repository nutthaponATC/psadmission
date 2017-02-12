<?php 
include('config.php');
$id_student = $_POST['id_student'];
$groupType = $_POST['groupType'];
$class_exam = $_POST['class_exam'];

$sql = "SELECT * FROM `group_type` WHERE `id_group_type` = $id_student OR `id_student_group` = $groupType;";
$query = mysql_query($sql);
$num = mysql_num_rows($query);
if ($num == 1) {
	echo "<script language='javascript'>";
	echo "alert('รหัสคุมซ้ำ');";
	echo "javascript:history.back()";
	echo "</script>";
}

$sql = "INSERT INTO `group_type` (`id_group_type`, `id_student_group`,`class_exam`, `score`, `status`) VALUES ('$id_student', '$groupType', '$class_exam', NULL, 1);";
$query = mysql_query($sql);
if ($query) {
	echo "<script language='javascript'>";
	echo "alert('บันทึกรหัสคุมเรียบร้อย');";
	echo "location='groupType.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถบันทึกรหัสคุมเได้');";
	echo "location='groupType.php';";
	echo "</script>";
}
 ?>