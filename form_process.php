<?php
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

$sql = "INSERT INTO `history_ps` (`id_history`, `type`, `stype`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `radio8`, `radio9`, `radio10`, `radio11`, `radio12`, `radio13`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `input13`, `input14`, `input15`, `input16`, `input17`, `input18`, `input19`, `input20`, `input21`, `input22`, `input23`, `input24`, `input25`, `input26`, `input27`, `input28`, `input29`, `input30`, `input31`, `input32`, `input33`, `input34`, `input35`, `input36`, `input37`, `input38`, `input39`, `input40`, `input41`, `input42`, `input43`, `input44`, `input45`, `input46`, `input47`, `input48`, `input49`, `input50`, `input51`, `input52`, `input53`, `input54`, `input55`, `status`) VALUES (null, $type, $stype, $radio1, $radio2, $radio3, $radio4, $radio5, $radio6, $radio7, $radio8, $radio9, $radio10, $radio11, $radio12, $radio13, '$input1', '$input2', '$input3', '$input4', '$input5', '$input6', '$input7', '$input8', '$input9', '$input10', '$input11', '$input12', '$input13', '$input14', '$input15', '$input16', '$input17', '$input18', '$input19', '$input20', '$input21', '$input22', '$input23', '$input24', '$input25', '$input26', '$input27', '$input28', '$input29', '$input30', '$input31', '$input32', '$input33', '$input34', '$input35', '$input36', '$input37', '$input38', '$input39', '$input40', '$input41', '$input42', '$input43', '$input44', '$input45', '$input46', '$input47', '$input48', '$input49', '$input50', '$input51', '$input52', '$input53', '$input54', '$input55', 1)";
mysql_query("SET NAMES utf8");
$query = mysql_query($sql);
echo $sql;
exit();
if ($query) {
	echo "เพิ่มข้อมูลเรียบร้อย";
}


 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
  	
	<title>ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</title>

	<link href="https://fonts.googleapis.com/css?family=Mitr:300" rel="stylesheet">

	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- fa -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body style="font-size:17px;">
	<div style="height:50px; width: 100%; background-color:#1c1c86; color:white;">
		<div class="container">
			<div class="col-md-9">
				<img src="image/logops.jpg" width="40px;" style="float:left; margin-top: 5px; border-radius: 50%;">
				<a style="color:white;" href="index.php"><span style="font-size:22px; margin-top:10px; float:left; margin-left:10px;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</span></a>
			</div>
			<div class="col-md-1">
				<a href="index.php">
					<h4 style="margin-top:15px; color:white; float:left; padding-left:5px;">หน้าแรก</h4>
				</a>
			</div>
			<div class="col-md-2">
				<a href="login.php" >  
					<i class="fa fa-user-circle" style="color:white; font-size:18px; float:left; margin-top:17px;" aria-hidden="true"></i>
					<h4 style="margin-top:15px; color:white; float:left; padding-left:5px;">เข้าสู่ระบบ</h4>
				</a>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
</body>
</html>
