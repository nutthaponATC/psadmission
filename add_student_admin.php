<?php 
session_start();
include('config.php');

if (empty($_SESSION['id_user']) OR $_SESSION['status'] != 8) {
	echo "<script language='javascript'>";
	echo "location='login.php';";
	echo "</script>";
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

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery.dataTables.min.js"></script>  
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  
</head>
<body style="height: 100vh; width: 100vw;"> 
	<div style="height:50px; width: 100%; background-color:#1c1c86; color:white;">
		<div class="container">
			<div class="col-md-9">
				<img src="image/logops.jpg" width="40px;" style="float:left; margin-top: 5px; border-radius: 50%;">
				<a style="color:white;" href="index.php"><span style="font-size:22px; margin-top:10px; float:left; margin-left:10px;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</span></a>
			</div>
			<div class="col-md-1">
				<a href="sup_admin_ps.php">
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

	<div class="container" style="margin-top:20px;">
		<div class="col-md-12">
			<a href="add_student_admin.php"><h1>ระบบเพิ่มข้อมูลนักเรียน</h1></a>
		</div>
	</div>

	<div class="container" id="typeStudent" style="padding-top:10px; padding-bottom:10px;">
		<div class="col-md-3" style="color:#0000b9; font-weight:bold;">
			<h3>ประเภทการคัดเลือก</h3>
			<h1 style="font-size:45px; margin-top:-5px;">ระดับชั้น ม.1</h1>
		</div>
		<div class="col-md-8" style="height: 5px; background: #0000b9; margin-top:85px; margin-bottom:80px;"></div>

		<div class="col-md-12">
			<?php 
			$sql = "SELECT * FROM setting_open WHERE id_setting = 1";
			$query = mysql_query($sql);
			$set1 = mysql_fetch_array($query);
			if ($set1['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=1">
					<div class="type" style="margin-left:160px;">
						<center><p class="head-type">EP</p><br></center>
						<center><p class="text-type">English Program</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:160px;">
						<center><p class="head-type">EP</p><br></center>
						<center><p class="text-type2">English Program</p></center>
					</div>
				</a>';
			}
			$sql = "SELECT * FROM setting_open WHERE id_setting = 2";
			$query = mysql_query($sql);
			$set2 = mysql_fetch_array($query);
			if ($set2['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=2">
					<div class="type" style="margin-left:20px;">
						<center><p class="head-type">IEP</p><br></center>
						<center><p class="text-type">Intensive English Program</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:20px;">
						<center><p class="head-type">IEP</p><br></center>
						<center><p class="text-type2">Intensive English Program</p></center>
					</div>
				</a>';
			}
			$sql = "SELECT * FROM setting_open WHERE id_setting = 3";
			$query = mysql_query($sql);
			$set3 = mysql_fetch_array($query);
			if ($set3['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=3">
					<div class="type" style="margin-left:20px;">
						<center><p class="head-type">GP</p><br></center>
						<center><p class="text-type">ภาคทั่วไป</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:20px;">
						<center><p class="head-type">GP</p><br></center>
						<center><p class="text-type2">ภาคทั่วไป</p></center>
					</div>
				</a>';
			}
			?>
		</div>
	</div>

	<div class="container" style="padding-top:10px; padding-bottom:10px;">
		<div class="col-md-3" style="color:#0000b9; font-weight:bold;">
			<h3>ประเภทการคัดเลือก</h3>
			<h1 style="font-size:45px; margin-top:-5px;">ระดับชั้น ม.4</h1>
		</div>
		<div class="col-md-8" style="height: 5px; background: #0000b9; margin-top:85px; margin-bottom:80px;"></div>

		<div class="col-md-12">
			<?php 
			$sql = "SELECT * FROM setting_open WHERE id_setting = 4";
			$query = mysql_query($sql);
			$set4 = mysql_fetch_array($query);
			if ($set4['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=4">
					<div class="type" style="margin-left:160px;">
						<center><p class="head-type">EP</p><br></center>
						<center><p class="text-type">English Program</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:160px;">
						<center><p class="head-type">EP</p><br></center>
						<center><p class="text-type2">English Program</p></center>
					</div>
				</a>';
			}
			$sql = "SELECT * FROM setting_open WHERE id_setting = 5";
			$query = mysql_query($sql);
			$set5 = mysql_fetch_array($query);
			if ($set5['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=5">
					<div class="type" style="margin-left:20px;">
						<center><p class="head-type">IEP</p><br></center>
						<center><p class="text-type">Intensive English Program</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:20px;">
						<center><p class="head-type">IEP</p><br></center>
						<center><p class="text-type2">Intensive English Program</p></center>
					</div>
				</a>';
			}
			$sql = "SELECT * FROM setting_open WHERE id_setting = 6";
			$query = mysql_query($sql);
			$set6 = mysql_fetch_array($query);
			if ($set6['status'] == 1) {
				echo '<a href="form_add_student_admin.php?type=6">
					<div class="type" style="margin-left:20px;">
						<center><p class="head-type">GP</p><br></center>
						<center><p class="text-type">ภาคทั่วไป</p></center>
					</div>
				</a>';
			} else {
				echo '<a href="#">
					<div class="type2" style="margin-left:20px;">
						<center><p class="head-type">GP</p><br></center>
						<center><p class="text-type2">ภาคทั่วไป</p></center>
					</div>
				</a>';
			}
			 ?>
		</div>
	</div>

	<div class="col-md-12"></div>

</body>
</html>