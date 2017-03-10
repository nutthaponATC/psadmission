<?php 
session_start();
session_destroy();
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
	<!-- Desktop -->
	<div class="visible-lg">
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
			<div class="container">
				<div class="col-md-12" style="margin-top:2vh;">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<center><img src="image/logoC.png" width="100px" style="float: left;"><h2 style="float: left;">ระบบสนับสนุนให้ใช้ Google Chrome</h2></center>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:2vh; color:red;">
					<center><h2>สำหรับผู้ที่เคยสมัครเรียนแล้ว ในรอบที่ผ่านมา มีความประสงค์สมัครเรียนใหม่ <br> ให้ทำการเข้าสู่ระบบ (Login) <br> โดยใช้ชื่อผู้ใช้งานคือเลขประชาชน และรหัสผ่านคือวันเดือนปีเกิด </h2></center>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<a href="login.php">  
						<input class="form-control" style="background-color:blue; color:white;" type="button" name="button" value="เข้าสู่ระบบ">
					</a>
				</div>
				<div class="col-md-4"> 
				</div>
			</div>
		</div>
		<div class="container" style="margin-top:3vh;">
			<div class="col-md-4" style="height: 5px; background: #0000b9; margin-top:35px;"></div>
			<div class="col-md-4">
				<center><h1>สมัครเรียนใหม่</h1></center>
			</div>
			<div class="col-md-4" style="height: 5px; background: #0000b9; margin-top:35px;"></div>
			
			<div class="col-md-12">
				<h3>1. เลือก <a href="#typeStudent" style="color:#0000b9; font-weight:bold;">ประเภทการคัดเลือก ตามระดับชั้น</a> ที่นักเรียนต้องการ โดยเตรียมเอกสารสำเนาทะเบียนบ้านและเอกสารแสดงผลการเรียนเพื่อกรอกข้อมูล</h3>
				<h3>2. กรอกข้อมูลส่วนตัวผู้สมัคร <span style="color:#0000b9; font-weight:bold;">ให้ถูกต้องครบถ้วน</span></h3>
				<h3>3. ตรวจสอบความถูกต้องของข้อมูล หากถูกต้องแล้ว กด <span style="color:#0000b9; font-weight:bold;">"ยืนยันบันทึกข้อมูล"</span> และ กด <span style="color:#0000b9; font-weight:bold;">"พิมพ์หลักฐาน"</span></h3>
				<h3>4. หากมีปัญหาการใช้งานระบบรับสมัคร <span style="color:#0000b9; font-weight:bold;">สามารถสอบถามผู้ดูแลระบบได้ที่</span> <img src="image/admin.jpg" width="200px"></h3>
				<!-- <h3 style="margin-top:-110px;"> หรือโทร 080-607-4810 และ 089-131-4523</h3> -->
			</div>
		</div>

		<div class="container" id="calendar" style="margin-top:30px;">
			<div class="col-md-4">
				<h1 style="color:#0000b9;">ปฏิทินการรับสมัคร</h1>
			</div>
			<div class="col-md-12">
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
							โครงการ EP (90 คน)
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
							<th width="25%">เงื่อนไขพิเศษ (70 คน)</th>
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
							โครงการ EP (30 คน),IEP (30 คน)
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
							โรงเรียนโพธิสารพิทยากร (290 คน)
							</th>
							<th width="11.5%">1-30 ธ.ค. 2559</th>
							<th width="11.5%">19 ม.ค. 2560</th>
							<th width="11.5%">-</th>
							<th width="11.5%">20 ก.พ. 2560</th>
							<th width="11.5%">4 เม.ย. 2560</th>
							<th width="11.5%">20 เม.ย. 2560</th>
						</tr>
						<tr class="bg-warning">
							<th width="25%">นักเรียนที่จบ ม.3 จาก ร.ร.อื่น (30 คน)</th>
							<th width="11.5%">27-30 มี.ค. 2560</th>
							<th width="11.5%">2 เม.ย. 2560</th>
							<th width="11.5%">-</th>
							<th width="11.5%">6 เม.ย. 2560</th>
							<th width="11.5%">6 เม.ย. 2560</th>
							<th width="11.5%">20 เม.ย. 2560</th>
						</tr>
						<tr class="bg-warning">
							<th width="25%">เงื่อนไขพิเศษ (40 คน)</th>
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

		<div class="container" id="typeStudent" style="padding-top:30px; padding-bottom:30px;">
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
					echo '<a href="login.php?type=1">
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
					echo '<a href="login.php?type=2">
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
					echo '<a href="login.php?type=3">
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

		<div class="container" style="padding-top:30px; padding-bottom:30px;">
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
					echo '<a href="login.php?type=4">
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
					echo '<a href="login.php?type=5">
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
					echo '<a href="login.php?type=6">
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

		<?php 
		$sql = "SELECT * FROM history_ps WHERE `type` = 1 AND `stype` = 1";
		$count1 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 1 AND `stype` = 2";
		$count2 = mysql_num_rows(mysql_query($sql));

		$sql = "SELECT * FROM history_ps WHERE `type` = 2 AND `stype` = 1";
		$count3 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 2 AND `stype` = 2";
		$count4 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 2 AND `stype` = 3";
		$count5 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 2 AND `stype` = 4";
		$count6 = mysql_num_rows(mysql_query($sql));

		$sql = "SELECT * FROM history_ps WHERE `type` = 3 AND `stype` = 1";
		$count7 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 3 AND `stype` = 2";
		$count8 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 3 AND `stype` = 3";
		$count9 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 3 AND `stype` = 4";
		$count10 = mysql_num_rows(mysql_query($sql));

		$sql = "SELECT * FROM history_ps WHERE `type` = 4 AND `stype` = 1";
		$count11 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 4 AND `stype` = 2";
		$count12 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 4 AND `stype` = 3";
		$count13 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 4 AND `stype` = 4";
		$count14 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 4 AND `stype` = 5";
		$count15 = mysql_num_rows(mysql_query($sql));

		$sql = "SELECT * FROM history_ps WHERE `type` = 5 AND `stype` = 1";
		$count16 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 5 AND `stype` = 2";
		$count17 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 5 AND `stype` = 3";
		$count18 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 5 AND `stype` = 4";
		$count19 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 5 AND `stype` = 5";
		$count20 = mysql_num_rows(mysql_query($sql));

		$sql = "SELECT * FROM history_ps WHERE `type` = 6 AND `stype` = 1";
		$count21 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 6 AND `stype` = 2";
		$count22 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 6 AND `stype` = 3";
		$count23 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 6 AND `stype` = 4";
		$count24 = mysql_num_rows(mysql_query($sql));
		$sql = "SELECT * FROM history_ps WHERE `type` = 6 AND `stype` = 5";
		$count25 = mysql_num_rows(mysql_query($sql));
		 ?>

		<div class="container" id="calendar" style="margin-top:30px; margin-bottom:50px;">
			<div class="col-md-12">
				<i class="fa fa-bar-chart" style="color:#1c1c86; font-size:50px; float:left; margin-top:17px;" aria-hidden="true"></i><h1 style="color:#0000b9;"> สถิติการรับสมัคร</h1>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3 style="border-bottom:3px solid #1c1c86; width:220px;"> ประเภทการคัดเลือก</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3 style="border-bottom:3px solid #1c1c86; width:150px;"> แผนการเรียน</h3>
			</div>
			<div class="col-md-2">
				<h3 style="border-bottom:3px solid #1c1c86; width:150px;"> จำนวนที่สมัคร</h3>
			</div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.1 English Program (EP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>วิทย์ - คณิต</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count1; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count1+$count2; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>คณิต - ภาษาจีน</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count2; ?></h3></div>

			<div class="col-md-12" style="border-bottom:3px solid #1c1c86;"></div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.1 Intensive English Program (IEP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ในเขตพื้นที่บริการ สอบคัดเลือก</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count3; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count3+$count4+$count5+$count6; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>นอกเขตพื้นที่บริการ สอบคัดเลือก</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count4; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count5; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count6; ?></h3></div>

			<div class="col-md-12" style="border-bottom:3px solid #1c1c86;"></div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.1 ภาคปกติ (GP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ในเขตพื้นที่บริการ สอบคัดเลือก</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count7; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count7+$count8+$count9+$count10; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>นอกเขตพื้นที่บริการ สอบคัดเลือก</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count8; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ในเขตพื้นที่บริการ ความสามารถพิเศษกีฬา</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count9; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>นอกเขตพื้นที่บริการ ความสามารถพิเศษกีฬา</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count10; ?></h3></div>

			<div class="col-md-12" style="border-bottom:3px solid #1c1c86;"></div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.4 English Program (EP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>วิทย์ - คณิต</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count11; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count11+$count12+$count13+$count14+$count15; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>คณิต - อังกฤษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count12; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกฝรั่งเศษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count13; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกญี่ปุ่น</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count14; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกจีน</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count15; ?></h3></div>

			<div class="col-md-12" style="border-bottom:3px solid #1c1c86;"></div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.4 Intensive English Program (IEP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>วิทย์ - คณิต</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count16; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count16+$count17+$count18+$count19+$count20; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>คณิต - อังกฤษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count17; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกฝรั่งเศษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count18; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกญี่ปุ่น</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count19; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกจีน</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count20; ?></h3></div>

			<div class="col-md-12" style="border-bottom:3px solid #1c1c86;"></div>

			<div class="col-md-5" style="color:#1c1c86;">
				<h3>ม.4 ภาคปกติ (GP)</h3>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>วิทย์ - คณิต</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count21; ?></h3></div>
			<div class="col-md-5" style="color:#e100e1;">
				<h2>รวม <?php echo $count21+$count22+$count23+$count24+$count25; ?> คน</h2>
			</div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>คณิต - อังกฤษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count22; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกฝรั่งเศษ</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count23; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกญี่ปุ่น</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count24; ?></h3></div>
			<div class="col-md-5" style="color:#1c1c86;"></div>
			<div class="col-md-5" style="color:#1c1c86;">
				<h3>อังกฤษ - ภาษาเลือกจีน</h3>
			</div>
			<div class="col-md-2" style="color:#e100e1;"><h3><?php echo $count25; ?></h3></div>
		</div>
	</div>

	<!-- Phone -->
	<div class="hidden-lg" style="width:100vw; height:100vh; positon:relative;">
		<div style="height:8vh; width: 100%; background-color:#1c1c86; color:white;">
			<div class="container">
				<img src="image/logops.jpg" style="width:5vh;  float:left; margin-top: 1.5vh; border-radius: 50%;">
				<span style="font-size:4vw; float:left; margin-top:15px; color:white; padding-left:5px;">โรงเรียนโพธิสารพิทยากร</span>
			</div>
		</div>
		<div class="container">
			<!-- <center><img src="image/logoC.png" style="margin-top: 2vh; width:10vw;"><div style="margin-top: 2vh; font-size:5vw; color:#1c1c86;">ระบบสนับสนุนให้ใช้ Google Chrome</div></center> -->
			<center><span style="font-size:5vw; color:red;">สำหรับผู้ที่เคยสมัครเรียนแล้ว ในรอบที่ผ่านมา มีความประสงค์สมัครเรียนใหม่ <br> ให้ทำการเข้าสู่ระบบ (Login) <br> โดยใช้ชื่อผู้ใช้งานคือเลขประชาชน และรหัสผ่านคือวันเดือนปีเกิด</span></center>
			<form action="login_process_2.php" method="post" name="form1">
				<div class="col-xs-12" style="margin-top:2vh; color:#1c1c86;">
					<center><h3>ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</h3></center>
				</div>
				<div class="login-phone">
					<div class="col-xs-12">
						<div style="width: 30%; float:left;">
							<h4>ชื่อผู้ใช้งาน</h4>
						</div>
						<div style="width: 70%; float:left;">
							<input type="text" name="user" class="form-control" style="width: 50vw;">
						</div>
					</div>
					<div class="col-xs-12">
						<div style="width: 30%; float:left;">
							<h4>รหัสผ่าน</h4>
						</div>
						<div style="width: 70%; float:left;">
							<input type="password" name="password" class="form-control" style="width: 50vw;">
						</div>
					</div>
					<div class="col-xs-12">
						<div style="width: 70%; margin-left:30%; float:left;">
							<input type="submit" name="submit" class="btn btn-default" value="เข้าสู่ระบบ">
							<a href="index.php"><input type="button" name="back" class="btn btn-default" value="ย้อนกลับ"></a>
						</div>
					</div>	
				</div>
			</form>
			<div class="col-xs-12" style="top: 45vh; position:relative; color:#1c1c86;">
				<center>
				<span style="font-size:4vw;">
				ใช้ชื่อผูัใช้งาน (username) และรหัสผ่าน (password) ที่โรงเรียนให้ไปพร้อมกับคู่มือการสมัคร
				<span>
				</center>
			</div>	
		</div>

	</div>

	<script src="js/jquery.js"></script>
</body>
</html>