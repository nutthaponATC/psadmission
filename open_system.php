<?php 
session_start();

if (empty($_SESSION['id_user']) OR $_SESSION['status'] != 9) {
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

	<div class="container" style="margin-top:20px; color:#1c1c86;">
		<div class="col-md-6">
			<a href="admin_ps.php"><h1>admin system</h1></a>
		</div>
		<div class="col-md-6">
		</div>
	</div>

	<div class="container">
	 	<div class="col-md-12" style="border-bottom:3px solid #1c1c86; margin-top:10px; color:#1c1c86;"><h2>ระบบควบคุมการเปิดปิดระบบ</h2></div>
			<?php 
			include('config.php');

			$arrayString = array('ม.1 EP ','ม.1 IEP ','ม.1 GP ','ม.4 EP ','ม.4 IEP ','ม.4 GP ');
			for ($i=1; $i < 7; $i++) { 
				$sql = "SELECT * FROM setting_open WHERE id_setting = $i";
				$query = mysql_query($sql);
				$dataCheck = mysql_fetch_array($query);
				if ($dataCheck['status'] == 1) {
					$j = $i+6;
					echo "<div class='col-md-4'><a href='open_system_process.php?type=$j'><h3>".$arrayString[$i-1]." <span style='color:green;'>สถานะเปิดรับสมัคร</span></h3></a></div>";
				} else {
					echo "<div class='col-md-4'><a href='open_system_process.php?type=$i'><h3>".$arrayString[$i-1]." <span style='color:red;'>สถานะปิดรับสมัคร</span></h3></a></div>";
				}
			}

			 ?>
	</div>

</body>
</html>