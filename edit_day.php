<?php 
session_start();
echo "<meta charset='UTF-8'>";
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');
$id_history = $_SESSION['id_user'];

$sql = "SELECT * FROM day WHERE id_day = $id_history";
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
					<center><h3>เลือกวันที่ต้องการมาสมัคร</h3></center>
				</div>
				<div class="login-phone">
					<div class="col-xs-12">
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 1 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 201) {
									echo "<a href='edit_day_process.php?day=1&type=1'><input type='button' name='back' class='btn btn-default' value='27 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='27 มีนาคม 2560 (เต็ม)'>";
								}
							} else {
								$sql = "SELECT * FROM day WHERE day = 1 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 64) {
									echo "<a href='edit_day_process.php?day=1&type=2'><input type='button' name='back' class='btn btn-default' value='27 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='27 มีนาคม 2560 (เต็ม)'>";
								}
							}	

							 ?>
						</div>
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 1 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/200";
							} else {
								$sql = "SELECT * FROM day WHERE day = 1 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/63";
							}	
							
							 ?>
						</div>
					</div>
					<div class="col-xs-12" style="margin-top:2vh;">
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 2 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 201) {
									echo "<a href='edit_day_process.php?day=2&type=1'><input type='button' name='back' class='btn btn-default' value='28 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='28 มีนาคม 2560 (เต็ม)'>";
								}
							} else {
								$sql = "SELECT * FROM day WHERE day = 2 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 64) {
									echo "<a href='edit_day_process.php?day=2&type=2'><input type='button' name='back' class='btn btn-default' value='28 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='28 มีนาคม 2560 (เต็ม)'>";
								}
							}
							?>
						</div>
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 2 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/200";
							} else {
								$sql = "SELECT * FROM day WHERE day = 2 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/63";
							}	
							
							 ?>
						</div>
					</div>
					<div class="col-xs-12" style="margin-top:2vh;">
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 3 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 201) {
									echo "<a href='edit_day_process.php?day=3&type=1'><input type='button' name='back' class='btn btn-default' value='29 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='29 มีนาคม 2560 (เต็ม)'>";
								}
							} else {
								$sql = "SELECT * FROM day WHERE day = 3 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 64) {
									echo "<a href='edit_day_process.php?day=3&type=2'><input type='button' name='back' class='btn btn-default' value='29 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='29 มีนาคม 2560 (เต็ม)'>";
								}
							}
							?>
						</div>
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 3 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/200";
							} else {
								$sql = "SELECT * FROM day WHERE day = 3 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/63";
							}	
							
							 ?>
						</div>
					</div>
					<div class="col-xs-12" style="margin-top:2vh;">
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 4 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 201) {
									echo "<a href='edit_day_process.php?day=4&type=1'><input type='button' name='back' class='btn btn-default' value='30 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='30 มีนาคม 2560 (เต็ม)'>";
								}
							} else {
								$sql = "SELECT * FROM day WHERE day = 4 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								if ($number1 < 64) {
									echo "<a href='edit_day_process.php?day=4&type=2'><input type='button' name='back' class='btn btn-default' value='30 มีนาคม 2560'></a>";
								} else {
									echo "<input type='button' name='back' class='btn btn-default' value='30 มีนาคม 2560 (เต็ม)'>";
								}
							}
							?>
						</div>
						<div style="width: 50%; float:left;">
							<?php 
							if ($data['type'] == 1) {
								$sql = "SELECT * FROM day WHERE day = 4 AND type = 1";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/200";
							} else {
								$sql = "SELECT * FROM day WHERE day = 4 AND type = 2";
								$query = mysql_query($sql);	
								$number1 = mysql_num_rows($query);
								echo $number1."/63";
							}	
							
							 ?>
						</div>
					</div>
					
				</div>
			</form>
		</div>

	</div>

	<script src="js/jquery.js"></script>
</body>
</html>
