<?php 
error_reporting( error_reporting() & ~E_NOTICE );
$type = $_GET['type'];
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
<body style="height: 100vh; width: 100vw;"> 
	<form action="login_process.php" method="post" name="form1">
		<input type="hidden" name="type" value="<?php echo $type; ?>">	
		<div class="col-md-12" style="margin-top:calc(35vh - 150px); color:#1c1c86;">
			<center><h2 style="font-style: italic;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</h2></center>
		</div>
		<div class="login">
			<div class="col-md-12" style="margin-top: 50px;">
				<div style="width: 30%; float:left;" style="margin-top: 20px;">
					<h4 style="padding-left:30px;">ชื่อผู้ใช้งาน</h4>
				</div>
				<div style="width: 70%; float:left;" style="margin-top: 20px;">
					<input type="text" name="user" class="form-control" style="width: 250px; border-right: 15px;">
				</div>
			</div>
			<div class="col-md-12" style="margin-top: 20px;">
				<div style="width: 30%; float:left;" style="margin-top: 20px;">
					<h4 style="padding-left:30px;">รหัสผ่าน</h4>
				</div>
				<div style="width: 70%; float:left;" style="margin-top: 20px;">
					<input type="password" name="password" class="form-control" style="width: 250px; border-right: 15px;">
				</div>
			</div>
			<div class="col-md-5" style="margin-top: 30px;"></div>
			<div class="col-md-7" style="margin-top: 30px;">
				<input type="submit" name="submit" class="btn btn-default" value="เข้าสู่ระบบ">
				<a href="index.php"><input type="button" name="back" class="btn btn-default" value="ย้อนกลับ"></a>
			</div>	
		</div>
	</form>
	<div class="col-md-12" style="margin-top:calc(70vh - 150px); positon:relative; color:#1c1c86;">
		<center><h4>ตัวอย่าง ชื่อผู้ใช้งาน (รหัสประชาชน 13 หลัก) : 1234567890123</h4>
		<h4>รหัสผ่าน (วันเดือนปีเกิด เช่น 2 กรกฎาคม 2544) : 272544</h4></center>
	</div>	
</body>
</html>