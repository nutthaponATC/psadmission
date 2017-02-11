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
			<h3>2. กรอกข้อมูลส่วนตัวผู้สมัคร <span style="color:#0000b9; font-weight:bold;">ให้ถูกต้องครบถ้วน</span></h3>
			<h3>3. ตรวจสอบความถูกต้องของข้อมูล หากถูกต้องแล้ว กด <span style="color:#0000b9; font-weight:bold;">"ยืนยันบันทึกข้อมูล"</span> และ กด <span style="color:#0000b9; font-weight:bold;">"พิมพ์หลักฐาน"</span></h3>
		</div>
	</div>

	<div class="container" id="calendar" style="margin-top:30px;">
		<div class="col-md-4">
			<h1 style="color:#0000b9;">ปฏิทินการรับสมัคร</h1>
		</div>
		<div class="col-md-12">
			<!-- <img src="image/2560.jpg" width="100%"> -->
			<table class="table table-bordered table-inverse">
				<thead>
					<tr class="bg-danger">
						<th width="25%">ระดับชั้น มัธยมศึกษาปีที่ 1 (490)</th>
						<th width="11.5%">รับสมัคร</th>
						<th width="11.5%">สอบ/คัดเลือก</th>
						<th width="11.5%">สอบสัมภาษณ์</th>
						<th width="11.5%">ประกาศผล</th>
						<th width="11.5%">รายงานตัว</th>
						<th width="11.5%">มอบตัว</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-warning">
						<th width="25%">
						โครงการ EP (90คน)
						</th>
						<th width="11.5%">20-24 ก.พ. 2560</th>
						<th width="11.5%">4 มี.ค. 2560</th>
						<th width="11.5%">7 มี.ค. 2560</th>
						<th width="11.5%">9 มี.ค. 2560</th>
						<th width="11.5%">9 มี.ค. 2560</th>
						<th width="11.5%">18 มี.ค. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">ความสามารถพิเศษ</th>
						<th width="11.5%">27-28 มี.ค. 2560</th>
						<th width="11.5%">30 มี.ค. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">31 มี.ค. 2560</th>
						<th width="11.5%">31 มี.ค. 2560</th>
						<th width="11.5%">19 เม.ย. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">ทั่วไป (ใน+นอกพื้นที่) สอบคัดเลือก (192 คน)</th>
						<th width="11.5%">27-30 มี.ค. 2560</th>
						<th width="11.5%">1 เม.ย. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">19 เม.ย. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">ในเขตพื้นที่ (สอบ 128 คน)</th>
						<th width="11.5%">27-30 มี.ค. 2560</th>
						<th width="11.5%">1 เม.ย. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">19 เม.ย. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">เงื่อนไขพิเศษ (70คน)</th>
						<th width="11.5%">27-30 มี.ค. 2560</th>
						<th width="11.5%">1 เม.ย. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">5 เม.ย. 2560</th>
						<th width="11.5%">19 เม.ย. 2560</th>
					</tr>
					<tr class="bg-danger">
						<th width="25%">ระดับชั้น มัธยมศึกษาปีที่ 4 (420)</th>
						<th width="11.5%">รับสมัคร</th>
						<th width="11.5%">สอบ/คัดเลือก</th>
						<th width="11.5%">สอบสัมภาษณ์</th>
						<th width="11.5%">ประกาศผล</th>
						<th width="11.5%">รายงานตัว</th>
						<th width="11.5%">มอบตัว</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">
						โครงการ EP (30คน),IEP (30คน)
						</th>
						<th width="11.5%">20-24 ก.พ. 2560</th>
						<th width="11.5%">5 มี.ค. 2560</th>
						<th width="11.5%">8 มี.ค. 2560</th>
						<th width="11.5%">10 มี.ค. 2560</th>
						<th width="11.5%">10 มี.ค. 2560</th>
						<th width="11.5%">18 มี.ค. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">นักเรียนที่จบ ม.3
						<br>
						โรงเรียนโพธิสารพิทยากร (290คน)
						</th>
						<th width="11.5%">1-30 ธ.ค. 2559</th>
						<th width="11.5%">19 ม.ค. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">20 ก.พ. 2560</th>
						<th width="11.5%">4 เม.ย. 2560</th>
						<th width="11.5%">20 เม.ย. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">นักเรียนที่จบ ม.3 จาก ร.ร.อื่น (30คน)</th>
						<th width="11.5%">27-30 มี.ค. 2560</th>
						<th width="11.5%">2 เม.ย. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">6 เม.ย. 2560</th>
						<th width="11.5%">6 เม.ย. 2560</th>
						<th width="11.5%">20 เม.ย. 2560</th>
					</tr>
					<tr class="bg-warning">
						<th width="25%">เงื่อนไขพิเศษ (40คน)</th>
						<th width="11.5%">27-30 มี.ค. 2560</th>
						<th width="11.5%">2 เม.ย. 2560</th>
						<th width="11.5%">-</th>
						<th width="11.5%">6 เม.ย. 2560</th>
						<th width="11.5%">6 เม.ย. 2560</th>
						<th width="11.5%">20 เม.ย. 2560</th>
					</tr>
				</tbody>
			</table>
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