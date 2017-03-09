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
	<div class="hidden-lg" style="width:100vw; height:100vh; positon:relative;">
		<div style="height:8vh; width: 100%; background-color:#1c1c86; color:white;">
			<div class="container">
				<img src="image/logops.jpg" style="width:5vh;  float:left; margin-top: 1.5vh; border-radius: 50%;">
				<span style="font-size:4vw; float:left; margin-top:15px; color:white; padding-left:5px;">โรงเรียนโพธิสารพิทยากร</span>
			</div>
		</div>
		<div class="container">
			<form action="login_process_2.php" method="post" name="form1">
				<div class="col-xs-12" style="margin-top:5vh; color:#1c1c86;">
					<center><span style="font-size:6vw; color:red;">บันทึกข้อมูลผู้สมัครเรียบร้อย</span></center>
					<center><span style="font-size:6vw;">วันที่ต้องการมาสมัคร <br> คือ 
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
				</div>
				<div class="login-phone">
					<div style="font-size:6vw;">
						<center>รหัสคู่มือ : <?php echo $id_history; ?></center>
						<center>รหัสใบสมัคร : <?php echo $data['input1']; ?></center>
						<center>รหัสประชาชน : <?php echo $data['input2']; ?></center>
					</div>
					<div style="font-size:4.5vw; color:red; margin-top:15vh;">
						<center>กรุณาถ่ายหน้าจอนี้ (capture) <br> เพื่อความสะดวกในวันสมัครจริง</center>
						<center>สามารถเข้าสู่ระบบ โดยใช้เครื่องคอมพิวเตอร์ เพื่อพิมพ์ใบสมัคร</center>
					</div>
				</div>
			</form>
		</div>

	</div>

	<script src="js/jquery.js"></script>
</body>
</html>
