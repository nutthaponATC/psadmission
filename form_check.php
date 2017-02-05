<?php
$type = $_POST['type'];
$sType = $_POST['sType'];
$radio1 = $_POST['radio1'];
$radio2 = $_POST['radio2'];
$radio3 = $_POST['radio3'];
$radio4 = $_POST['radio4'];
$radio5 = $_POST['radio5'];
$radio6 = $_POST['radio6'];
$radio7 = $_POST['radio7'];
$radio8 = $_POST['radio8'];
$radio9 = $_POST['radio9'];
$radio10 = $_POST['radio10'];
$radio11 = $_POST['radio11'];
$radio12 = $_POST['radio12'];
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];
$input4 = $_POST['input4'];
$input5 = $_POST['input5'];
$input6 = $_POST['input6'];
$input7 = $_POST['input7'];
$input8 = $_POST['input8'];
$input9 = $_POST['input9'];
$input10 = $_POST['input10'];
$input11 = $_POST['input11'];
$input12 = $_POST['input12'];
$input13 = $_POST['input13'];
$input14 = $_POST['input14'];
$input15 = $_POST['input15'];
$input16 = $_POST['input16'];
$input17 = $_POST['input17'];
$input18 = $_POST['input18'];
$input19 = $_POST['input19'];
$input20 = $_POST['input20'];
$input21 = $_POST['input21'];
$input22 = $_POST['input22'];
$input23 = $_POST['input23'];
$input24 = $_POST['input24'];
$input25 = $_POST['input25'];
$input26 = $_POST['input26'];
$input27 = $_POST['input27'];
$input28 = $_POST['input28'];
$input29 = $_POST['input29'];
$input30 = $_POST['input30'];
$input31 = $_POST['input31'];
$input32 = $_POST['input32'];
$input33 = $_POST['input33'];
$input34 = $_POST['input34'];
$input35 = $_POST['input35'];
$input36 = $_POST['input36'];
$input37 = $_POST['input37'];
$input38 = $_POST['input38'];
$input39 = $_POST['input39'];
$input40 = $_POST['input40'];
$input41 = $_POST['input41'];
$input42 = $_POST['input42'];
$input43 = $_POST['input43'];
$input44 = $_POST['input44'];
$input45 = $_POST['input45'];
$input46 = $_POST['input46'];
$input47 = $_POST['input47'];
$input48 = $_POST['input48'];
$input49 = $_POST['input49'];
$input50 = $_POST['input50'];
$input51 = $_POST['input51'];
$input52 = $_POST['input52'];
$input53 = $_POST['input53'];

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
	<span style=""></span>
	<?php

	if ($type == 1) {
		$headerType = "English Program (EP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-5'>
			<input type='radio' name='sType' class='rdo' value='1' >
			วิทย์ - คณิต
		</div>
		<div class='col-md-5'>
			<input type='radio' name='sType' class='rdo' value='2' >
			คณิต - ภาษาจีน
		</div>";
	} elseif ($type == 2) {
		$headerType = "Intensive English Program (IEP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-5'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='1' >
				ในเขตพื้นที่บริการ สอบคัดเลือก
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='2' style='width:1em; height:1em;'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
			</div>
		</div>
		<div class='col-md-5'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='3' >
				นอกเขตพื้นที่บริการ สอบคัดเลือก
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='4' >
				นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
			</div>
		</div>";
	} elseif ($type == 3) {
		$headerType = "ภาคปกติ (GP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-5'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='1' >
				ในเขตพื้นที่บริการ สอบคัดเลือก
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='2' >
				ในเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
			</div>
		</div>
		<div class='col-md-5'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='3' >
				นอกเขตพื้นที่บริการ สอบคัดเลือก
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='4' >
				นอกเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
			</div>
		</div>";
	} elseif ($type == 4) {
		$headerType = "English Program (EP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='1' >
				วิทย์ - คณิต
			</div>
			<div class='col-md-12'><br>
				<input type='radio' name='sType' class='rdo' value='2' >
				คณิต - อังกฤษ
			</div>
		</div>
		<div class='col-md-4'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='3' >
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</div>
			<div class='col-md-12'><br>
				<input type='radio' name='sType' class='rdo' value='4' >
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</div>
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='5' >
				อังกฤษ - ภาษา เลือก จีน
			</div>
		</div>";
	} elseif ($type == 5) {
		$headerType = "Intensive English Program (IEP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='1' >
				วิทย์ - คณิต
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='2' >
				คณิต - อังกฤษ
			</div>
		</div>
		<div class='col-md-4'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='3' >
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='4' >
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</div>
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='5' >
				อังกฤษ - ภาษา เลือก จีน
			</div>
		</div>";
	} else {
		$headerType = "ภาคปกติ (GP)";
		$subType = "<div class='col-md-2'>
			<p>ประเภทการคัดเลือก
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='1' >
				วิทย์ - คณิต
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='2' >
				คณิต - อังกฤษ
			</div>
		</div>
		<div class='col-md-4'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='3' >
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</div>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='4' >
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</div>
		</div>
		<div class='col-md-3'>
			<div class='col-md-12'>
				<input type='radio' name='sType' class='rdo' value='5' >
				อังกฤษ - ภาษา เลือก จีน
			</div>
		</div>";
	}

	?>

	<form id="form1" name="form1" method="post" action="form-process.php">
		<div style="height:50px; width: 100%; background-color:#0000b9; color:white;">
			<div class="container">
				<div class="col-md-8">
					<img src="image/logops.jpg" width="40px;" style="float:left; margin-top: 5px; border-radius: 50%;">
					<span style="font-size:22px; margin-top:10px; float:left; margin-left:10px;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</span>
				</div>
				<div class="col-md-2">
					<a href="index.php">
						<h4 style="margin-top:15px; color:white; float:left; padding-left:5px; padding-left:90px;">หน้าหลัก</h4>
					</a>
				</div>
				<div class="col-md-2">
					<a href="login.php">
						<i class="fa fa-user-circle" style="color:white; font-size:18px; float:left; margin-top:17px;" aria-hidden="true"></i>
						<h4 style="margin-top:15px; color:white; float:left; padding-left:5px;">เข้าสู่ระบบ</h4>
					</a>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top:30px; color:white;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<div style="width:50px; float:left; height:50px; border-radius:50%; background-color:#6b7dcc; padding:21px; margin-right:3px; padding-top:13px; margin:calc(50vw-400px);">
					1
				</div>
				<div style="color:black; padding-top:12px;">กรอกข้อมูล</div>
			</div>
			<div class="col-md-2">
				<div style="width:50px; float:left; height:50px; border-radius:50%; background-color:#d1e0e0; padding:21px; margin-right:3px; padding-top:13px;">
					2
				</div>
				<div style="color:black; padding-top:12px;">ยืนยันข้อมูล</div>
			</div>
			<div class="col-md-3">
				<div style="width:50px; float:left; height:50px; border-radius:50%; background-color:#d1e0e0; padding:21px; margin-right:3px; padding-top:13px;">
					3
				</div>
				<div style="color:black; padding-top:12px;">พิมพ์ข้อมูลใบสมัคร</div>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="container" id="form-table" style="margin-top:30px; background-color:rgba(255,255,255,0.6);">
			<div class="col-md-12">
				<div class="col-md-12" style="padding-bottom:20px;">
					<center>
						<h2 style="font-weight:bold;">
						<?php echo $headerType; ?>	
						</h2>
					</center>
				</div>
				<h4 style="font-weight:bold;">
					<?php echo $subType; ?>	
				</h4>
			</div>
		</div>
		<div class="container" id="form-table" style="background-color:rgba(255,255,255,0.6);">
			<div class="col-md-12" id="form-line">
				<div class="col-md-12">
					<h2 style="margin-top:-10px; font-weight:bold;">ข้อมูลนักเรียน</h2>
					<!-- <h4 style="color:red;">*กรุณากรอกข้อมูลในส่วนนักเรียนให้ครบถ้วน</h4> -->
				</div>
				<div class="col-md-6" value="<?php echo $input1; ?>" id="form-line">
					รหัสใบสมัคร
					<input type="text" name="input1" style="width:360px;">
				</div>
				<div class="col-md-6" id="form-line">
					รหัสประจำตัวประชาชนนักเรียน 
					<input name="input2" value="<?php echo $input2; ?>" type="text" id="data" maxlength="13" style="width:280px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					<select name="input3" value="<?php echo $input3; ?>">
						<option value="0" selected>เลือกคำนำหน้า</option>
						<option value="1">ด.ช.</option>
						<option value="2">ด.ญ.</option>
						<option value="3">นาย</option>
						<option value="4">น.ส.</option>
					</select>
					ชื่อ
					<input type="text" name="input4" value="<?php echo $input4; ?>" style="width:300px;">
				</div>
				<div class="col-md-6">
					นามสกุล
					<input type="text" name="input5" value="<?php echo $input5; ?>" style="margin-left:35px; width:390px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-1">
				</div>
				<div class="col-md-5" style="margin-left:-38px;">
					FIRST NAME
					<input type="text" name="input6" value="<?php echo $input6; ?>" style="width:300px;">
				</div>
				<div class="col-md-6" style="margin-left:38px;">
					LAST NAME
					<input type="text" name="input7" value="<?php echo $input7; ?>" style="width:390px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-7">
					ศาสนา
					<input type="text" name="input8" value="<?php echo $input8; ?>" style="width:100px;">
					สัญชาติ
					<input type="text" name="input9" value="<?php echo $input9; ?>" style="width:100px;">
					เชื้อชาติ
					<input type="text" name="input10" value="<?php echo $input10; ?>" style="width:100px;">
				</div>
				<div class="col-md-5">
					วันเดือนปีเกิด 
					<select name="input11" value="<?php echo $input11; ?>">
						<?php 
						for ($i=1; $i < 32; $i++) { 
							echo "<option value=".$i.">".$i."</option>";
						}
						 ?>
					</select>
					<select name="input12" value="<?php echo $input12; ?>">
						<option value="1">มกราคม</option>
						<option value="2">กุมภาพันธ์</option>
						<option value="3">มีนาคม</option>
						<option value="4">เมษายน</option>
						<option value="5">พฤษภาคม</option>
						<option value="6">มิถุนายน</option>
						<option value="7">กรกฎาคม</option>
						<option value="8">สิงหาคม</option>
						<option value="9">กันยายน</option>
						<option value="10">ตุลาคม</option>
						<option value="11">พฤศจิกายน</option>
						<option value="12">ธันวาคม</option>
					</select>
					<select name="input13" value="<?php echo $input13; ?>">
						<?php 
						$year = 543+date("Y");
						$ayear = $year-10;
						$byear = $year-20;

						for ($i = $byear; $i < $ayear; $i++) { 
							echo "<option value=".$i.">".$i."</option>";
						}
						 ?>
					</select>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-7">
					รหัสประจำบ้าน
					<input type="text" name="input14" value="<?php echo $input14; ?>" style="width:380px;">
					<p style="margin-left: 110px; font-size:14px;">(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)</p>
				</div>
				<div class="col-md-5">
					ที่อยู่ตามทะเบียนบ้าน เลขที่ 
					<input type="text" style="width:70px;" name="input15" value="<?php echo $input15; ?>">
					หมู่ที่ 
					<input type="text" style="width:70px;" name="input16" value="<?php echo $input16; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line" style="margin-top:0px;">
				<div class="col-md-6">
					ถนน
					<input type="text" name="input17" value="<?php echo $input17; ?>" style="width:450px;">
				</div>
				<div class="col-md-6">
					ซอย
					<input type="text" name="input18" value="<?php echo $input18; ?>" style="width:450px;">
				</div>
			</div>
			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					จังหวัด
					<select name="input19" value="<?php echo $input19; ?>" style="width:250px;">
						<option value="" selected>เลือกจังหวัด</option>
						<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
						<option value="กระบี่">กระบี่ </option>
						<option value="กาญจนบุรี">กาญจนบุรี </option>
						<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
						<option value="กำแพงเพชร">กำแพงเพชร </option>
						<option value="ขอนแก่น">ขอนแก่น</option>
						<option value="จันทบุรี">จันทบุรี</option>
						<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
						<option value="ชัยนาท">ชัยนาท </option>
						<option value="ชัยภูมิ">ชัยภูมิ </option>
						<option value="ชุมพร">ชุมพร </option>
						<option value="ชลบุรี">ชลบุรี </option>
						<option value="เชียงใหม่">เชียงใหม่ </option>
						<option value="เชียงราย">เชียงราย </option>
						<option value="ตรัง">ตรัง </option>
						<option value="ตราด">ตราด </option>
						<option value="ตาก">ตาก </option>
						<option value="นครนายก">นครนายก </option>
						<option value="นครปฐม">นครปฐม </option>
						<option value="นครพนม">นครพนม </option>
						<option value="นครราชสีมา">นครราชสีมา </option>
						<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
						<option value="นครสวรรค์">นครสวรรค์ </option>
						<option value="นราธิวาส">นราธิวาส </option>
						<option value="น่าน">น่าน </option>
						<option value="นนทบุรี">นนทบุรี </option>
						<option value="บึงกาฬ">บึงกาฬ</option>
						<option value="บุรีรัมย์">บุรีรัมย์</option>
						<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
						<option value="ปทุมธานี">ปทุมธานี </option>
						<option value="ปราจีนบุรี">ปราจีนบุรี </option>
						<option value="ปัตตานี">ปัตตานี </option>
						<option value="พะเยา">พะเยา </option>
						<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
						<option value="พังงา">พังงา </option>
						<option value="พิจิตร">พิจิตร </option>
						<option value="พิษณุโลก">พิษณุโลก </option>
						<option value="เพชรบุรี">เพชรบุรี </option>
						<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
						<option value="แพร่">แพร่ </option>
						<option value="พัทลุง">พัทลุง </option>
						<option value="ภูเก็ต">ภูเก็ต </option>
						<option value="มหาสารคาม">มหาสารคาม </option>
						<option value="มุกดาหาร">มุกดาหาร </option>
						<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
						<option value="ยโสธร">ยโสธร </option>
						<option value="ยะลา">ยะลา </option>
						<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
						<option value="ระนอง">ระนอง </option>
						<option value="ระยอง">ระยอง </option>
						<option value="ราชบุรี">ราชบุรี</option>
						<option value="ลพบุรี">ลพบุรี </option>
						<option value="ลำปาง">ลำปาง </option>
						<option value="ลำพูน">ลำพูน </option>
						<option value="เลย">เลย </option>
						<option value="ศรีสะเกษ">ศรีสะเกษ</option>
						<option value="สกลนคร">สกลนคร</option>
						<option value="สงขลา">สงขลา </option>
						<option value="สมุทรสาคร">สมุทรสาคร </option>
						<option value="สมุทรปราการ">สมุทรปราการ </option>
						<option value="สมุทรสงคราม">สมุทรสงคราม </option>
						<option value="สระแก้ว">สระแก้ว </option>
						<option value="สระบุรี">สระบุรี </option>
						<option value="สิงห์บุรี">สิงห์บุรี </option>
						<option value="สุโขทัย">สุโขทัย </option>
						<option value="สุพรรณบุรี">สุพรรณบุรี </option>
						<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
						<option value="สุรินทร์">สุรินทร์ </option>
						<option value="สตูล">สตูล </option>
						<option value="หนองคาย">หนองคาย </option>
						<option value="หนองบัวลำภู">หนองบัวลำภู </option>
						<option value="อำนาจเจริญ">อำนาจเจริญ </option>
						<option value="อุดรธานี">อุดรธานี </option>
						<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
						<option value="อุทัยธานี">อุทัยธานี </option>
						<option value="อุบลราชธานี">อุบลราชธานี</option>
						<option value="อ่างทอง">อ่างทอง </option>
						<option value="อื่นๆ">อื่นๆ</option>
					</select>	
				</div>
				<div class="col-md-4">
					อำเภอ/เขต
					<input type="text" name="input20" value="<?php echo $input20; ?>" style="width:200px;">
				</div>
				<div class="col-md-4">
					ตำบล/แขวง
					<input type="text" name="input21" value="<?php echo $input21; ?>" style="width:200px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					รหัสไปรษณีย์
					<input type="text" name="input22" value="<?php echo $input22; ?>">
				</div>
				<div class="col-md-4">
					เบอร์โทรศัพท์บ้าน
					<input type="text" name="input23" value="<?php echo $input23; ?>" style="width:200px;">
				</div>
				<div class="col-md-4">
					เบอร์มือถือ
					<input type="text" name="input24" value="<?php echo $input24; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-3">
					ความพิการ
					<input style="width:1em; height:1em;" type='radio' name='radio1' id="radio1-1" value='1'>
					ไม่พิการ
					<input style="width:1em; height:1em;" type='radio' name='radio1' id="radio1-2" value='0'>
					พิการ 
				</div>
				<div class="col-md-3" id="radio1-type">
					ด้าน
					<input type="text" name="input25" value="<?php echo $input25; ?>"  style="margin-right:40px; width:150px;">
				</div>
				<div class="col-md-6">
					น้ำหนัก
					<input type="text" name="input26" value="<?php echo $input26; ?>" style="width:50px;">
					กิโลกรัม
					&nbspส่วนสูง
					<input type="text" name="input27" value="<?php echo $input27; ?>" style="width:50px;">
					เซนติเมตร
					&nbspหมู่เลือด
					<select name="input28" value="<?php echo $input28; ?>">
						<option value="1">A</option>
						<option value="2">B</option>
						<option value="3">AB</option>
						<option value="4">O</option>
					</select>
				</div>
			</div>
		</div>

		<div class="container" id="form-table" style="padding-top:30px; background-color:rgba(255,255,255,0.6);">

			<div class="col-md-12" id="form-line" style="margin-bottom:-15px;">
				<div class="col-md-12">
					<h2 style="margin-right:20px; margin-top:-10px; font-weight:bold;">ข้อมูลการศึกษา (โรงเรียนเดิม)</h2>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div id="form-line">
					<div class="col-md-6" style="margin-bottom:20px;">
						<?php 
						if ($type == 1 OR $type == 2 OR $type == 3) {
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
							echo " กำลังเรียนชั้น ป.6 ";
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
							echo " จบชั้น ป.6 ";
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
							echo " จบการศึกษาเทียบเท่าชั้น ป.6";
						} else {
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
							echo " กำลังเรียนชั้น ม.3 ";
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
							echo " จบชั้น ม.3 ";
							echo "<input style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
							echo " จบการศึกษาเทียบเท่าชั้น ม.3";
						}
						?>
					</div>
					
					<div class="col-md-6" style="margin-bottom:20px;">
						สังกัด
						<input style="width:1em; height:1em; margin-left:20px;" type='radio' name='radio3' value='1'>
						สปช.เดิม
						<input style="width:1em; height:1em;" type='radio' name='radio3' value='2'>
						สพฐ.
						<input style="width:1em; height:1em;" type='radio' name='radio3' value='3'>
						สช.
						<input style="width:1em; height:1em;" type='radio' name='radio3' value='4'>
						กทม.
						<input style="width:1em; height:1em;" type='radio' name='radio3' value='5'>
						อื่นๆ
					</div>
				</div>

				<div style="width:100%; padding-top:20px;" id="form-line">
					<div class="col-md-4">
						จากโรงเรียน
						<input type="text" name="input29" value="<?php echo $input29; ?>">
					</div>
					<div class="col-md-8">
						ร.ร.ตั้งอยู่
						<input style="width:1em; height:1em;" type='radio' name='radio4' value='1'>
						ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)
						<input style="width:1em; height:1em;" type='radio' name='radio4' value='0'>
						นอกเขตพื้นที่	
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					ที่อยู่ ตำบล/แขวง 
					<input type="text" name="input30" value="<?php echo $input30; ?>">
					อำเภอ/เขต
					<input type="text" name="input31" value="<?php echo $input31; ?>">
					จังหวัด
					<input type="text" name="input32" value="<?php echo $input32; ?>">
				</div>	
			</div>					
		</div>						
		<div class="container" id="form-table" style="padding-top:30px; background-color:rgba(255,255,255,0.6);">
			<div class="col-md-12">
				<div class="col-md-12">
					<h2 style="margin-bottom:10px; font-weight:bold;">ข้อมูล บิดา - มารดา</h2>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-5">
					ชื่อสกุล บิดา
					<input type="text" name="input33" value="<?php echo $input33; ?>" style="width:300px;">
				</div>
				<div class="col-md-4">
					ความพิการของบิดา 
					<input type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-1" value='1'>
					ไม่พิการ
					<input type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-2" value='0'>
					พิการ 
				</div>
				<div class="col-md-3" id="radio5-type">
					ด้าน
					<input type="text" name="input34" value="<?php echo $input34; ?>" style="width:150px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					รายได้ของบิดา 
					<input type="text" name="input35" value="<?php echo $input35; ?>" style="width:150px;">
					บาท/ปี
				</div>
				<div class="col-md-2" style="text-align:right;">
					อาชีพของบิดา
				</div>
				<div class="col-md-6">
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='1'>
					ค้าขาย
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='2'>
					รับจ้าง
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='3'>
					รับราชการ
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='4'>
					พนักงาน
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='5'>
					นักธุรกิจ
					<br>
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='6'>
					อาชีพอิสระ
					<input style="width:1em; height:1em;" type='radio' name='radio6' value='7'>
					ไม่ประกอบอาชีพ	
				</div>
			</div>
			
			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					รหัสประจำตัวประชาชนบิดา 
					<input type="text" name="input36" value="<?php echo $input36; ?>" maxlength="13">	
				</div>
				<div class="col-md-6">
					โทรศัพท์ที่สามารถติดต่อได้
					<input type="text" name="input37" value="<?php echo $input37; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-5">
					ชื่อสกุล บิดา
					<input type="text" name="input38" value="<?php echo $input38; ?>" style="width:300px;">
				</div>
				<div class="col-md-4">
					ความพิการของบิดา 
					<input type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-1" value='1'>
					ไม่พิการ
					<input type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-2" value='0'>
					พิการ 
				</div>
				<div class="col-md-3" id="radio7-type">
					ด้าน
					<input type="text" name="input39" value="<?php echo $input39; ?>" style="width:150px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					รายได้ของมารดา 
					<input type="text" name="input40" value="<?php echo $input40; ?>" style="width:150px;">
					บาท/ปี
				</div>
				<div class="col-md-2" style="text-align:right;">
					อาชีพของมารดา
				</div>
				<div class="col-md-6">
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='1'>
					ค้าขาย
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='2'>
					รับจ้าง
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='3'>
					รับราชการ
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='4'>
					พนักงาน
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='5'>
					นักธุรกิจ
					<br>
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='6'>
					อาชีพอิสระ
					<input style="width:1em; height:1em;" type='radio' name='radio8' value='7'>
					ไม่ประกอบอาชีพ	
				</div>
			</div>
			
			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					รหัสประจำตัวประชาชนมารดา 
					<input type="text" name="input41" value="<?php echo $input41; ?>" maxlength="13">	
				</div>
				<div class="col-md-6">
					โทรศัพท์ที่สามารถติดต่อได้
					<input type="text" name="input42" value="<?php echo $input42; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-12">
					สถานภาพของบิดา-มารดา
					<br>
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='1'>
					อยู่ด้วยกัน
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='2'>
					แยกกันอยู่
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='3'>
					หย่าร้าง
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='4'>
					บิดาถึงแก่กรรม
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='5'>
					มารดาถึงแก่กรรม
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='6'>
					บิดาแต่งงานใหม่
					<input style="width:1em; height:1em;" type='radio' name='radio9' value='7'>
					มารดาแต่งงานใหม่
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					จำนวนพี่น้องทั้งหมด (รวมตัวเอง) 
					<input type="text" name="input43" value="<?php echo $input43; ?>" style="width:50px;">
					คน
				</div>
				<div class="col-md-6">
					กำลังศึกษาอยู่ จำนวน
					<input type="text" name="input44" value="<?php echo $input44; ?>" style="width:50px;">
					คน
				</div>
			</div>
		</div>
		<div class="container" id="form-table" style="padding-top:30px; background-color:rgba(255,255,255,0.6);">
			<div class="col-md-12">
				<div class="col-md-12">
					<h2 style="font-weight:bold;">ข้อมูลผู้ปกครอง</h2>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-3">
					เกี่ยวข้างกับนักเรียนเป็น
				</div>
				<div class="col-md-9">
					<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-1" value='0'>
					บิดา
					<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-2" value='1'>
					มารดา
					<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-3" value='2'>
					อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)
				</div>
			</div>

			<span id="parent">
				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						ชื่อสกุล ผู้ปกครอง
						<input type="text" name="input45" value="<?php echo $input45; ?>">
					</div>
					<div class="col-md-6">
						รายได้ของผู้ปกครอง 
						<input type="text" name="input46" value="<?php echo $input46; ?>">
						บาท/ปี
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						ความพิการของผู้ปกครอง 
						<br>
						<input style="width:1em; height:1em;" type='radio' name='radio11' id="radio11-1" value='1'>
						ไม่พิการ
						<input style="width:1em; height:1em;" type='radio' name='radio11' id="radio11-2" value='0'>
						พิการ 
						<span id="radio11-type">
							ด้าน
							<input type="text" name='input47'>
						</span>
					</div>
					<div class="col-md-6">
						อาชีพของผู้ปกครอง 
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='1'>
						ค้าขาย
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='2'>
						รับจ้าง
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='3'>
						รับราชการ
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='4'>
						พนักงาน
						<br>
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='5'>
						นักธุรกิจ
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='6'>
						อาชีพอิสระ
						<input style="width:1em; height:1em;" type='radio' name='radio12' value='7'>
						ไม่ประกอบอาชีพ
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						รหัสประจำตัวประชาชนผู้ปกครอง 
						<input type="text" name="input48" value="<?php echo $input48; ?>" maxlength="13">
					</div>
					<div class="col-md-6">
						โทรศัพท์ที่สามารถติดต่อได้
						<input type="text" name="input49" value="<?php echo $input49; ?>">
					</div>
				</div>
			</span>
		</div>
		<div class="container" id="form-table" style="padding-top:30px; margin-bottom:50px; background-color:rgba(255,255,255,0.6);">
			<div class="col-md-12">
				<div class="col-md-12">
					<h2 style="font-weight:bold;">
						ข้อมูลผลการเรียน (ผลการเรียนเฉลี่ย ม.1 - ม.3 รวม 5 ภาคเรียน)
					</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12" id="form-line">
					ผลการเรียนเฉลี่ย
					<input type="text" name="input50" value="<?php echo $input50; ?>" style="width:50px;">
					หรือ ร้อยละ
					<input type="text" name="input51" value="<?php echo $input51; ?>" style="width:50px;">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12">
					<h2 style="font-weight:bold;">
						ข้อมูลคะแนน O-NET
					</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12" id="form-line">
					ได้คะแนนเฉลี่ย O-NET
					<input type="text" name="input52" value="<?php echo $input52; ?>" style="width:50px;">
					คะแนน
				
					<span style="margin-left:20px;">
					คิดเป็นร้อยละ
					<input type="text" name="input53" value="<?php echo $input53; ?>" style="width:50px;">
					</span>
				</div>
			</div>
		</div>
		<div class="container" style="margin-bottom:50px; margin-top:-10px;">
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<input type="submit" name="submit" value="ยืนยันบันทึกข้อมูล" class="form-control">
			</div>
			<div class="col-md-2">
				<input type="botton" name="back" value="แก้ไขข้อมูล" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<script src="js/jquery.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#radio1-type").hide();
		$("#radio5-type").hide();
		$("#radio7-type").hide();
		$("#radio11-type").hide();
		$("#parent").hide();
		$("#radio1-2").click(function(){
			$("#radio1-type").show();
		});
		$("#radio1-1").click(function(){
			$("#radio1-type").hide();
		});
		$("#radio5-2").click(function(){
			$("#radio5-type").show();
		});
		$("#radio5-1").click(function(){
			$("#radio5-type").hide();
		});
		$("#radio7-2").click(function(){
			$("#radio7-type").show();
		});
		$("#radio7-1").click(function(){
			$("#radio7-type").hide();
		});
		$("#radio11-2").click(function(){
			$("#radio11-type").show();
		});
		$("#radio11-1").click(function(){
			$("#radio11-type").hide();
		});
		$("#radio10-3").click(function(){
			$("#parent").show();
		});
		$("#radio10-1").click(function(){
			$("#parent").hide();
		});
		$("#radio10-2").click(function(){
			$("#parent").hide();
		});
	});
</script>