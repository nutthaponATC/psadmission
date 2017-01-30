<?php 
$type = $_GET['type'];

if ($type == 1) {
	$headerType = "English Program (EP)";
	$subType = "<div class='col-md-4'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		วิทย์ - คณิต
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		คณิต - ภาษาจีน
	</div>";
} elseif ($type == 2) {
	$headerType = "Intensive English Program (IEP)";
	$subType = "<div class='col-md-4'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		ในเขตพื้นที่บริการ สอบคัดเลือก
		<br>
		<input type='radio' name='sType' value='3' style='width:1em; height:1em;'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		นอกเขตพื้นที่บริการ สอบคัดเลือก
		<br>
		<input type='radio' name='sType' value='4' style='float:left; width:1em; height:1em;'>
		นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
	</div>";
} elseif ($type == 3) {
	$headerType = "ภาคปกติ (GP)";
	$subType = "<div class='col-md-4'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		ในเขตพื้นที่บริการ สอบคัดเลือก
		<br>
		<input type='radio' name='sType' value='3' style='float:left; width:1em; height:1em;'>
		ในเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
	</div>
	<div class='col-md-4'>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		นอกเขตพื้นที่บริการ สอบคัดเลือก
		<br>
		<input type='radio' name='sType' value='4' style='float:left; width:1em; height:1em;'>
		นอกเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
	</div>";
} elseif ($type == 4) {
	$headerType = "English Program (EP)";
	$subType = "<div class='col-md-3'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		วิทย์ - คณิต
		<br>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		คณิต - อังกฤษ
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='3' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
		<br>
		<input type='radio' name='sType' value='4' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='5' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก จีน
	</div>";
} elseif ($type == 5) {
	$headerType = "Intensive English Program (IEP)";
	$subType = "<div class='col-md-3'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		วิทย์ - คณิต
		<br>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		คณิต - อังกฤษ
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='3' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
		<br>
		<input type='radio' name='sType' value='4' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='5' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก จีน
	</div>";
} else {
	$headerType = "ภาคปกติ (GP)";
	$subType = "<div class='col-md-3'>
		<p>ประเภทการคัดเลือก
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='1' style='float:left; width:1em; height:1em;'>
		วิทย์ - คณิต
		<br>
		<input type='radio' name='sType' value='2' style='float:left; width:1em; height:1em;'>
		คณิต - อังกฤษ
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='3' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
		<br>
		<input type='radio' name='sType' value='4' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	</div>
	<div class='col-md-3'>
		<input type='radio' name='sType' value='5' style='float:left; width:1em; height:1em;'>
		อังกฤษ - ภาษา เลือก จีน
	</div>";
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
	<!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css"> -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
	
</head>
<body style="font-size:17px;">
	<div style="height:50px; width: 100%; background-color:#0000b9; color:white;">
		<div class="container">
			<div class="col-md-8">
				<img src="image/logops.jpg" width="40px;" style="float:left; margin-top: 5px; border-radius: 50%;">
				<h3 style="margin-top:10px; float:left; margin-left:10px;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อ</h3>
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



	<div class="container" id="form-table" style="margin-top:30px;">
		<div class="col-md-12">
			<div class="col-md-12" style="padding-bottom:20px;">
				<center>
					<h3>
					<?php echo $headerType; ?>	
					</h3>
				</center>
			</div>
			<?php echo $subType; ?>	
		</div>
	</div>
	<div class="container" id="form-table">
		<div class="col-md-12" id="form-line">
			<div class="col-md-4">
				ข้อมูลนักเรียน
			</div>
			<div class="col-md-8" style="text-align:right;">
				รหัสประจำตัวประชาชนนักเรียน 
				<input class="identity" type="text" name="identity">-<input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity">-<input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity">-<input class="identity" type="text" name="identity"><input class="identity" type="text" name="identity">-<input class="identity" type="text" name="identity">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-7">
				<select name="fname">
					<option value="0" selected>เลือกคำนำหน้า</option>
					<option value="1">ด.ช.</option>
					<option value="2">ด.ญ.</option>
					<option value="3">นาย</option>
					<option value="4">น.ส.</option>
				</select>
				ชื่อ
				<input type="text" name="name" style="width:300px;">
			</div>
			<div class="col-md-5">
				นามสกุล
				<input type="text" name="name" style="margin-left:35px; width:300px;">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-1">
			</div>
			<div class="col-md-6" style="margin-left:-38px;">
				FIRST NAME
				<input type="text" name="name" style="width:300px;">
			</div>
			<div class="col-md-5" style="margin-left:38px;">
				LAST NAME
				<input type="text" name="name" style="width:300px;">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-7">
				ศาสนา
				<input type="text" name="name" style="width:100px;">
				สัญชาติ
				<input type="text" name="name" style="width:100px;">
				เชื้อชาติ
				<input type="text" name="name" style="width:100px;">
			</div>
			<div class="col-md-5">
				วันเดือนปีเกิด 
				<select name="day">
					<?php 
					for ($i=1; $i < 32; $i++) { 
						echo "<option value=".$i.">".$i."</option>";
					}
					 ?>
				</select>
				<select name="mount">
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
				<select name="year">
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
				<input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name="">-<input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name=""><input class="identity" type="text" name="">-<input class="identity" type="text" name="">
				<p style="margin-left: 110px; font-size:14px;">(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)</p>
			</div>
			<div class="col-md-5">
				ที่อยู่ตามทะเบียนบ้าน เลขที่ 
				<input type="text" style="width:70px;" name="">
				หมู่ที่ 
				<input type="text" style="width:70px;" name="">
			</div>
		</div>

		<div class="col-md-12" id="form-line" style="margin-top:0px;">
			<div class="col-md-6">
				ถนน
				<input type="text" name="" style="width:450px;">
			</div>
			<div class="col-md-6">
				ซอย
				<input type="text" name="" style="width:450px;">
			</div>
		</div>
		<div class="col-md-12" id="form-line">
			<div class="col-md-4">
				จังหวัด
				<select name="province" style="width:250px;">
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
				<input type="text" name="" style="width:200px;">
			</div>
			<div class="col-md-4">
				ตำบล/แขวง
				<input type="text" name="" style="width:200px;">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-4">
				รหัสไปรษณีย์
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				เบอร์โทรศัพท์บ้าน
				<input type="text" name="" style="width:200px;">
			</div>
			<div class="col-md-4">
				เบอร์มือถือ
				<input type="text" name="">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-12">
				ความพิการ
				<input type='radio' name='' value='0'>
				ไม่พิการ
				<input type='radio' name='' value='0'>
				พิการ ด้าน
				<input type="text" name="" style="margin-right:40px;">
				น้ำหนัก
				<input type="text" name="" style="width:50px;">
				กิโลกรัม
				&nbspส่วนสูง
				<input type="text" name="" style="width:50px;">
				เซนติเมตร
				&nbspหมู่เลือด
				<select name="blood">
					<option value="1">A</option>
					<option value="2">B</option>
					<option value="3">AB</option>
					<option value="4">O</option>
				</select>
			</div>
		</div>
	</div>

	<div class="container" id="form-table" style="padding-top:30px;">
		<div class="col-md-12" id="form-line">
			<div class="col-md-12">
				<span style="margin-right:20px;">ข้อมูลการศึกษา (โรงเรียนเดิม)</span>
			</div>

			<div style="width:100%; padding-top:20px;" id="form-line">
				<div class="col-md-6">
					<?php 
					if ($type == 1 OR $type == 2 OR $type == 3) {
						echo "<input type='radio' name='' value='1'>";
						echo " กำลังเรียนชั้น ป.6 ";
						echo "<input type='radio' name='' value='1'>";
						echo " จบชั้น ป.6 ";
						echo "<input type='radio' name='' value='3'>";
						echo " จบการศึกษาเทียบเท่าชั้น ป.6";
					} else {
						echo "<input type='radio' name='' value='1'>";
						echo " กำลังเรียนชั้น ม.3 ";
						echo "<input type='radio' name='' value='2'>";
						echo " จบชั้น ม.3 ";
						echo "<input type='radio' name='' value='3'>";
						echo " จบการศึกษาเทียบเท่าชั้น ม.3";
					}
					?>
				</div>
				
				<div class="col-md-6">
					สังกัด
					<input type='radio' name='' value='3' style="margin-left:20;">
					สปช.เดิม
					<input type='radio' name='' value='3'>
					สพฐ.
					<input type='radio' name='' value='3'>
					สช.
					<input type='radio' name='' value='3'>
					กทม.
					<input type='radio' name='' value='3'>
					อื่นๆ
				</div>
			</div>

			<div style="width:100%; padding-top:20px;" id="form-line">
				<div class="col-md-4">
					จากโรงเรียน
					<input type="text" name="">
				</div>
				<div class="col-md-8">
					ร.ร.ตั้งอยู่
					<input type='radio' name='' value='1'>
					ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)
					<input type='radio' name='' value='0'>
					นอกเขตพื้นที่	
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				ที่อยู่ ตำบล/แขวง 
				<input type="text" name="">
				อำเภอ/เขต
				<input type="text" name="">
				จังหวัด
				<input type="text" name="">
			</div>	
		</div>					
	</div>						
	<div class="container" id="form-table" style="padding-top:30px;">
		<div class="col-md-12">
			<div class="col-md-12">
				ข้อมูล บิดา - มารดา
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-5">
				ชื่อสกุล บิดา
				<input type="text" name="" style="width:300px;">
			</div>
			<div class="col-md-7">
				ความพิการของบิดา 
				<input type='radio' name='disabled' value='1'>
				ไม่พิการ
				<input type='radio' name='disabled' value='0'>
				พิการ ด้าน
				<input type="text" name="disabled">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-12">
				รายได้ของบิดา 
				<input type="text" name="" style="width:150px;">
				บาท/ปี
				&nbsp
				อาชีพของบิดา
				<input type='radio' name='' value='0'>
				ค้าขาย
				<input type='radio' name='' value='0'>
				รับจ้าง
				<input type='radio' name='' value='0'>
				รับราชการ
				<input type='radio' name='' value='0'>
				พนักงาน
				<input type='radio' name='' value='0'>
				นักธุรกิจ
				<input type='radio' name='' value='0'>
				อาชีพอิสระ
				<input type='radio' name='' value='0'>
				ไม่ประกอบอาชีพ	
			</div>
		</div>
		
		<div class="col-md-12" id="form-line">
			<div class="col-md-6">
				รหัสประจำตัวประชาชนบิดา 
				<input type="text" name="">	
			</div>
			<div class="col-md-6">
				โทรศัพท์ที่สามารถติดต่อได้
				<input type="text" name="">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-5">
				ชื่อสกุล มารดา
				<input type="text" name="" style="width:300px;">
			</div>
			<div class="col-md-7">
				ความพิการของมารดา 
				<input type='radio' name='disabled' value='1'>
				ไม่พิการ
				<input type='radio' name='disabled' value='0'>
				พิการ ด้าน
				<input type="text" name="disabled">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-12">
				รายได้ของมารดา 
				<input type="text" name="" style="width:150px;">
				บาท/ปี
				&nbsp
				อาชีพของมารดา
				<input type='radio' name='' value='0'>
				ค้าขาย
				<input type='radio' name='' value='0'>
				รับจ้าง
				<input type='radio' name='' value='0'>
				รับราชการ
				<input type='radio' name='' value='0'>
				พนักงาน
				<input type='radio' name='' value='0'>
				นักธุรกิจ
				<input type='radio' name='' value='0'>
				อาชีพอิสระ
				<input type='radio' name='' value='0'>
				ไม่ประกอบอาชีพ	
			</div>
		</div>
		
		<div class="col-md-12" id="form-line">
			<div class="col-md-6">
				รหัสประจำตัวประชาชนมารดา 
				<input type="text" name="">	
			</div>
			<div class="col-md-6">
				โทรศัพท์ที่สามารถติดต่อได้
				<input type="text" name="">
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-12">
				สถานภาพของบิดา-มารดา
				<input type='radio' name='' value='0'>
				อยู่ด้วยกัน
				<input type='radio' name='' value='0'>
				แยกกันอยู่
				<input type='radio' name='' value='0'>
				หย่าร้าง
				<input type='radio' name='' value='0'>
				บิดาถึงแก่กรรม
				<input type='radio' name='' value='0'>
				มารดาถึงแก่กรรม
				<input type='radio' name='' value='0'>
				บิดาแต่งงานใหม่
				<input type='radio' name='' value='0'>
				มารดาแต่งงานใหม่
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-6">
				จำนวนพี่น้องทั้งหมด (รวมตัวเอง) 
				<input type="text" name="">
				คน
			</div>
			<div class="col-md-6">
				กำลังศึกษาอยู่ จำนวน
				<input type="text" name="">
				คน
			</div>
		</div>
	</div>
	<div class="container" id="form-table" style="padding-top:30px;">
		<div class="col-md-12">
			<div class="col-md-4">
				ข้อมูลผู้ปกครอง เกี่ยวข้างกับนักเรียนเป็น
			</div>
			<div class="col-md-8">
				<input type='radio' name='' value='0'>
				บิดา
				<input type='radio' name='' value='0'>
				มารดา
				<input type='radio' name='' value='0'>
				อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-6">
				ชื่อสกุล ผู้ปกครอง
				<input type="text" name="">
			</div>
			<div class="col-md-6">
				รายได้ของผู้ปกครอง 
				<input type="text" name="">
				บาท/ปี
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-4">
				ความพิการของผู้ปกครอง 
				<input type='radio' name='' value='0'>
				ไม่พิการ
				<input type='radio' name='' value='0'>
				พิการ ด้าน
				<input type="text" name="">
			</div>
			<div class="col-md-8">
				อาชีพของผู้ปกครอง <br>
				<input type='radio' name='' value='0'>
				ค้าขาย
				<input type='radio' name='' value='0'>
				รับจ้าง
				<input type='radio' name='' value='0'>
				รับราชการ
				<input type='radio' name='' value='0'>
				พนักงาน
				<input type='radio' name='' value='0'>
				นักธุรกิจ
				<input type='radio' name='' value='0'>
				อาชีพอิสระ
				<input type='radio' name='' value='0'>
				ไม่ประกอบอาชีพ
			</div>
		</div>

		<div class="col-md-12" id="form-line">
			<div class="col-md-6">
				รหัสประจำตัวประชาชนผู้ปกครอง 
				<input type="text" name="">
			</div>
			<div class="col-md-6">
				โทรศัพท์ที่สามารถติดต่อได้
				<input type="text" name="">
			</div>
		</div>
	</div>
	<div class="container" id="form-table" style="padding-top:30px;">
		<div class="col-md-6">
			<div class="col-md-12">
				ข้อมูลผลการเรียน (ผลการเรียนเฉลี่ย ม.1 - ม.3 รวม 5 ภาคเรียน)
			</div>
			<div class="col-md-4" id="form-line">
				ผลการเรียนเฉลี่ย
			</div>
			<div class="col-md-8" id="form-line">
				<input type="text" name="">
			</div>
			<div class="col-md-4" id="form-line">
				หรือ ร้อยละ
			</div>
			<div class="col-md-8" id="form-line">
				<input type="text" name="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				ข้อมูลคะแนน O-NET
			</div>
			<div class="col-md-5" id="form-line">
				ได้คะแนนเฉลี่ย O-NET
			</div>
			<div class="col-md-7" id="form-line">
				<input type="text" name="">
				คะแนน
			</div>
			<div class="col-md-5" id="form-line">
				คิดเป็นร้อยละ
			</div>
			<div class="col-md-7" id="form-line">
				<input type="text" name="">
			</div>
		</div>
	</div>
	<div class="container" id="form-table" style="padding-top:30px;">
		<div class="col-md-7">
			<div>
				หลักฐานการสมัคร
			</div>
			<div>
				<input type="checkbox" name="" value="">
				ปพ.1 (ช่วงชั้นที่ 3)
				<input type="checkbox" name="" value="">
				สำเนาสมุดประจำตัว
				<input type="checkbox" name="" value="">
				สำเนาทะเบียนบ้าน
				<input type="checkbox" name="" value="">
				สำเนาผล O-NET
			</div>
			<div>
				<input type="checkbox" name="" value="">
				ใบรับรองการเป็นนักเรียน
				<input type="checkbox" name="" value="">
				อื่นๆ
				<input type="text" name="">
			</div>
			<div>
				ตรวจสอบหลักฐาน
				<input type="checkbox" name="" value="">
				ถูกต้อง
				<input type="checkbox" name="" value="">
				ไม่ถูกต้อง ขาด
				____________________________
			</div>
			<div class="col-md-4" style="text-align:right;">
				ลงชื่อ
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				ผู้ตรวจสอบหลักฐาน
			</div>
			<div class="col-md-4" style="text-align:right;">(</div>
			<div class="col-md-4" style="border-bottom: 1px solid black; margin-top:15px;"></div>
			<div class="col-md-4">)</div>
		</div>
		<div class="col-md-5">
			<div class="col-md-4" style="text-align:right;">
				ลงชื่อ
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				นักเรียนผู้สมัคร
			</div>
			<div class="col-md-4" style="text-align:right;">(</div>
			<div class="col-md-4" style="border-bottom: 1px solid black; margin-top:15px;"></div>
			<div class="col-md-4">)</div>

			<div class="col-md-4" style="text-align:right;">
				ลงชื่อ
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				ผู้ปกครอง
			</div>
			<div class="col-md-4" style="text-align:right;">(</div>
			<div class="col-md-4" style="border-bottom: 1px solid black; margin-top:15px;"></div>
			<div class="col-md-4">)</div>
		</div>
	</div>
</body>
</html>