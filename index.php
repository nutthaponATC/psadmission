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

	<div class="container">
		<div class="col-md-4" style="height: 5px; background: #0000b9; margin-top:35px;"></div>
		<div class="col-md-4">
			<center><h1>ขั้นตอนการรับสมัคร</h1></center>
		</div>
		<div class="col-md-4" style="height: 5px; background: #0000b9; margin-top:35px;"></div>
		
		<div class="col-md-12">
			<h3>1. เลือก <span style="color:#0000b9; font-weight:bold;">ประเภทการคัดเลือก ตามระดับชั้น</span> ที่นักเรียนต้องการ โดยเตรียมเอกสารสำเนาทะเบียนบ้านและเอกสารแสดงผลการเรียนเพื่อกรอกข้อมูล</h3>
			<h3>2. กรอกข้อมูลส่วนตัวผู้สมัคร ให้ถูกต้องครบถ้วน</h3>
			<h3>3. ตรวจสอบความถูกต้องของข้อมูล หากถูกต้องแล้ว กด "ยืนยันบันทึกข้อมูล" และ กด "พิมพ์หลักฐานยืนยันการสมัคร"</h3>
		</div>
		
	</div>

	<div class="container" style="padding-top:30px; padding-bottom:30px;">
		<div class="col-md-3" style="color:#0000b9; font-weight:bold;">
			<h3>ประเภทการคัดเลือก</h3>
			<h1 style="font-size:45px; margin-top:-5px;">ระดับชั้น ม.1</h1>
		</div>
		<div class="col-md-8" style="height: 5px; background: #0000b9; margin-top:85px; margin-bottom:80px;"></div>

		<div class="col-md-12">
			<a href="form.php?type=1">
				<div class="type" style="margin-left:160px;">
					<center><p class="head-type">EP</p><br></center>
					<center><p class="text-type">English Program</p></center>
				</div>
			</a>
			<a href="form.php?type=2">
				<div class="type" style="margin-left:20px;">
					<center><p class="head-type">IEP</p><br></center>
					<center><p class="text-type">Intensive English Program</p></center>
				</div>
			</a>
			<a href="form.php?type=3">
				<div class="type" style="margin-left:20px;">
					<center><p class="head-type">GP</p><br></center>
					<center><p class="text-type">ภาคทั่วไป</p></center>
				</div>
			</a>
		</div>
	</div>

	<div class="container" style="padding-top:30px; padding-bottom:30px;">
		<div class="col-md-3" style="color:#0000b9; font-weight:bold;">
			<h3>ประเภทการคัดเลือก</h3>
			<h1 style="font-size:45px; margin-top:-5px;">ระดับชั้น ม.4</h1>
		</div>
		<div class="col-md-8" style="height: 5px; background: #0000b9; margin-top:85px; margin-bottom:80px;"></div>

		<div class="col-md-12">
			<a href="form.php?type=4">
				<div class="type" style="margin-left:160px;">
					<center><p class="head-type">EP</p><br></center>
					<center><p class="text-type">English Program</p></center>
				</div>
			</a>
			<a href="form.php?type=5">
				<div class="type" style="margin-left:20px;">
					<center><p class="head-type">IEP</p><br></center>
					<center><p class="text-type">Intensive English Program</p></center>
				</div>
			</a>
			<a href="form.php?type=6">
				<div class="type" style="margin-left:20px;">
					<center><p class="head-type">GP</p><br></center>
					<center><p class="text-type">ภาคทั่วไป</p></center>
				</div>
			</a>
		</div>
	</div>

	<script src="js/jquery.js"></script>
</body>
</html>