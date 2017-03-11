<?php 
session_start();
echo "<meta charset='UTF-8'>";
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');
$day = $_GET['day'];
$type = $_GET['type'];
$id_history = $_SESSION['id_user'];

$sql = "INSERT INTO day VALUES($id_history, $day, $type)";
$query = mysql_query($sql);

$sql = "SELECT * FROM history_ps WHERE id_history = $id_history";
$query = mysql_query($sql);
$data = mysql_fetch_array($query);
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
				<a href="login.php" target="_blank">  
					<i class="fa fa-user-circle" style="color:white; font-size:18px; float:left; margin-top:17px;" aria-hidden="true"></i>
					<h4 style="margin-top:15px; color:white; float:left; padding-left:5px;">เข้าสู่ระบบ</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<form action="login_process_2.php" method="post" name="form1">
			<div class="col-xs-12" style="margin-top:30vh; color:#1c1c86;">
				<center><span style="font-size:4vw; color:red;">บันทึกข้อมูลผู้สมัครเรียบร้อย</span></center>
				<center><span style="font-size:4vw;">วันที่ต้องการมาสมัคร <br> คือ 
					<?php 
					if ($day == 1) {
						echo "27 มีนาคม 2560";
					} elseif ($day == 2) {
						echo "28 มีนาคม 2560";
					} elseif ($day == 3) {
						echo "29 มีนาคม 2560";
					} else {
						echo "30 มีนาคม 2560";
					}
					 ?>
				</span></center>
				<div class="col-md-5"></div>
				<div class="col-md-3" style="font-size:2vw; margin-top:4vh;">
					<a href="report/tcpdf/report/report_student_info.php?id_student=<?php echo $_SESSION['id_user']; ?>" target="_blank">  
						<i class="fa fa-file-text-o" style="color:#1c1c86; float:left; margin-top:4px;" aria-hidden="true"></i>
						<span style="color:#1c1c86; float:left; padding-left:5px;">พิมพ์หลักฐาน</span>
					</a>
				</div>
				<div class="col-md-4"></div>
			</div>
		</form>
	</div>

	<script src="js/jquery.js"></script>
</body>
</html>
