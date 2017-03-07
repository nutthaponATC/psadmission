<?php 
session_start();
include('config.php');
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
<body>
	<!-- Phone -->
	<div class="hidden-lg" style="width:100vw; height:100vh; positon:relative;">
		<div style="height:8vh; width: 100%; background-color:#1c1c86; color:white;">
			<div class="container">
				<img src="image/logops.jpg" style="width:5vh;  float:left; margin-top: 1.5vh; border-radius: 50%;">
				<span style="font-size:4vw; float:left; margin-top:15px; color:white; padding-left:5px;">โรงเรียนโพธิสารพิทยากร</span>
			</div>
		</div>

		<div class="container" style="padding-top:30px; padding-bottom:30px;">
			<div class="col-xs-12" style="color:#0000b9; font-weight:bold;">
				<center>
				<span style="font-size:5vw;">ประเภทการคัดเลือก</span>
				<br>
				<span style="font-size:7vw;">ระดับชั้น ม.1</span>
				</center>
			</div>
			<div class="col-xs-12" style="height: 5px; background: #0000b9; margin-bottom:80px;"></div>

			<div class="col-xs-12" style="margin-top:-5vh;">
				<?php 
				$sql = "SELECT * FROM setting_open WHERE id_setting = 1";
				$query = mysql_query($sql);
				$set4 = mysql_fetch_array($query);
				if ($set4['status'] == 1) {
					echo '<a href="form.php?type=1">
						<div class="type-phone" style="margin-left:">
							<center><p class="head-type-phone">EP</p><br></center>
							<center><p class="text-type-phone">English Program</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2" style="margin-left:">
							<center><p class="head-type-phone">EP</p><br></center>
							<center><p class="text-type-phone2">English Program</p></center>
						</div>
					</a>';
				}
				$sql = "SELECT * FROM setting_open WHERE id_setting = 2";
				$query = mysql_query($sql);
				$set5 = mysql_fetch_array($query);
				if ($set5['status'] == 1) {
					echo '<a href="form.php?type=2">
						<div class="type-phone" style="margin-left:20px;">
							<center><p class="head-type-phone">IEP</p><br></center>
							<center><p class="text-type-phone">Intensive English Program</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2" style="margin-left:20px;">
							<center><p class="head-type-phone">IEP</p><br></center>
							<center><p class="text-type-phone2">Intensive English Program</p></center>
						</div>
					</a>';
				}
				$sql = "SELECT * FROM setting_open WHERE id_setting = 3";
				$query = mysql_query($sql);
				$set6 = mysql_fetch_array($query);
				if ($set6['status'] == 1) {
					echo '<a href="form.php?type=3">
						<div class="type-phone" style="margin-left:20px;">
							<center><p class="head-type-phone">GP</p><br></center>
							<center><p class="text-type-phone">ภาคทั่วไป</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2" style="margin-left:20px;">
							<center><p class="head-type-phone">GP</p><br></center>
							<center><p class="text-type-phone2">ภาคทั่วไป</p></center>
						</div>
					</a>';
				}
				 ?>
			</div>
		</div>

		<div class="container" style="padding-top:50px; padding-bottom:30px;">
			<div class="col-xs-12" style="color:#0000b9; font-weight:bold;">
				<center>
				<span style="font-size:5vw;">ประเภทการคัดเลือก</span>
				<br>
				<span style="font-size:7vw;">ระดับชั้น ม.4</span>
				</center>
			</div>
			<div class="col-xs-12" style="height: 5px; background: #0000b9; margin-bottom:80px;"></div>

			<div class="col-xs-12" style="margin-top:-5vh;">
				<?php 
				$sql = "SELECT * FROM setting_open WHERE id_setting = 4";
				$query = mysql_query($sql);
				$set4 = mysql_fetch_array($query);
				if ($set4['status'] == 1) {
					echo '<a href="form.php?type=4">
						<div class="type-phone">
							<center><p class="head-type-phone">EP</p><br></center>
							<center><p class="text-type-phone">English Program</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2">
							<center><p class="head-type-phone">EP</p><br></center>
							<center><p class="text-type-phone2">English Program</p></center>
						</div>
					</a>';
				}
				$sql = "SELECT * FROM setting_open WHERE id_setting = 5";
				$query = mysql_query($sql);
				$set5 = mysql_fetch_array($query);
				if ($set5['status'] == 1) {
					echo '<a href="form.php?type=5">
						<div class="type-phone" style="margin-left:20px;">
							<center><p class="head-type-phone">IEP</p><br></center>
							<center><p class="text-type-phone">Intensive English Program</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2" style="margin-left:20px;">
							<center><p class="head-type-phone">IEP</p><br></center>
							<center><p class="text-type-phone2">Intensive English Program</p></center>
						</div>
					</a>';
				}
				$sql = "SELECT * FROM setting_open WHERE id_setting = 6";
				$query = mysql_query($sql);
				$set6 = mysql_fetch_array($query);
				if ($set6['status'] == 1) {
					echo '<a href="form.php?type=6">
						<div class="type-phone" style="margin-left:20px;">
							<center><p class="head-type-phone">GP</p><br></center>
							<center><p class="text-type-phone">ภาคทั่วไป</p></center>
						</div>
					</a>';
				} else {
					echo '<a href="#">
						<div class="type-phone2" style="margin-left:20px;">
							<center><p class="head-type-phone">GP</p><br></center>
							<center><p class="text-type-phone2">ภาคทั่วไป</p></center>
						</div>
					</a>';
				}
				 ?>
			</div>
		</div>

	</div>

	<script src="js/jquery.js"></script>
</body>
</html>