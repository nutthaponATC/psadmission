<?php 
session_start();
error_reporting( error_reporting() & ~E_NOTICE );

include('config.php');
$sql = "SELECT * FROM setting_open WHERE status = 0";
$query = mysql_query($sql);

while ($dataCheck = mysql_fetch_array($query)) {
	if ($_GET['type'] == $dataCheck['id_setting']) {
			echo "<script language='javascript'>";
			echo "location='index.php';";
			echo "</script>";
	}
}

$text = array('ใบสมัครเลขที่','รหัสประจำตัวประชาชน','เลือกคำนำหน้า','ชื่อ','นามสกุล','FIRST NAME','LAST NAME','ศาสนา','สัญชาติ','เชื้อชาติ','วันเดือนปีเกิด','เลือกเดือน','เลือกปี','รหัสประจำบ้าน','ที่อยู่ตามทะเบียนบ้าน เลขที่','ถนน','ซอย','จังหวัด','อำเภอ/เขต','ตำบล/แขวง','รหัสไปรษณีย์','เบอร์โทรศัพท์บ้าน','เบอร์มือถือ','น้ำหนัก','ส่วนสูง','หมู่เลือด','จากโรงเรียน','ที่อยู่ ตำบล/แขวง','อำเภอ/เขต','จังหวัด','ชื่อสกุล บิดา','รายได้ของบิดา','รหัสประจำตัวประชาชน','โทรศัพท์ที่สามารถติดต่อได้','ชื่อสกุล มารดา','รายได้ของมารดา','รหัสประจำตัวประชาชน','โทรศัพท์ที่สามารถติดต่อได้','จำนวนพี่น้องทั้งหมด (รวมตัวเอง)','กำลังศึกษาอยู่ จำนวน');

for ($i=1; $i < 51; $i++) { 
	if ($_SESSION['check'] == $i) {
		$checkEmpty[] = "<span style='color:red;'>".$text[$i-1]."</span>";
	} else {
		$checkEmpty[] = "<span>".$text[$i-1]."</span>";
	}
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
	
</head>
<body style="font-size:17px;">
	<form id="form1" name="form1" method="post" action="form_check.php" onsubmit="checkForm(); return false;">
	<?php 
	$type = $_GET['type'];

	if ($type == 1) {
		$headerType = "ระดับชั้น ม.1 โครงการ English Program (EP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-5'>
				<input id='abz' type='radio' name='sType' class='rdo' value='1' >
				<label for='abz'>วิทย์ - คณิต</label>
			</div>
			<div class='col-md-5'>
				<input id='abx' type='radio' name='sType' class='rdo' value='2' >
				<label for='abx'>คณิต - ภาษาจีน</label>
			</div>
		</div>

		<div class='hidden-lg'>
			<div class='col-md-12' style='margin-top:2vh;'>
				<input id='abc' type='radio' name='sType' class='rdo' value='1' >
				<label for='abc'>วิทย์ - คณิต</label>
			</div>
			<div class='col-md-12'>
				<input id='abv' type='radio' name='sType' class='rdo' value='2' >
				<label for='abv'>คณิต - ภาษาจีน</label>
			</div>
		</div>
		";
	} elseif ($type == 2) {
		$headerType = "ระดับชั้น ม.1 โครงการ Intensive English Program (IEP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-5'>
				<div class='col-md-12'>
					<input id='abb' type='radio' name='sType' class='rdo' value='1' >
					<label for='abb'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
				</div>
				<div class='col-md-12'>
					<input id='abn' type='radio' name='sType' class='rdo' value='2' style='width:1em; height:1em;'>
					<label for='abn'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
				</div>
			</div>
			<div class='col-md-5'>
				<div class='col-md-12'>
					<input id='abm' type='radio' name='sType' class='rdo' value='3' >
					<label for='abm'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
				</div>
				<div class='col-md-12'>
					<input id='aba' type='radio' name='sType' class='rdo' value='4' >
					<label for='aba'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
				</div>
			</div>
		</div>

		<div class='hidden-lg'>
			<input id='abs' type='radio' name='sType' class='rdo' value='1' >
				<label for='abs'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
			<br>
			<input id='abd' type='radio' name='sType' class='rdo' value='2' >
				<label for='abd'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
			<br>
			<input id='abf' type='radio' name='sType' class='rdo' value='3' >
				<label for='abf'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
			<br>
			<input id='abg' type='radio' name='sType' class='rdo' value='4' >
				<label for='abg'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
		</div>";
	} elseif ($type == 3) {
		$headerType = "ระดับชั้น ม.1 โครงการ ภาคปกติ (GP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-5'>
				<div class='col-md-12'>
					<input id='abh' type='radio' name='sType' class='rdo' value='1' >
					<label for='abh'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
				</div>
				<div class='col-md-12'>
					<input id='abj' type='radio' name='sType' class='rdo' value='2' >
					<label for='abj'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
				</div>
			</div>
			<div class='col-md-5'>
				<div class='col-md-12'>
					<input id='abk' type='radio' name='sType' class='rdo' value='3' >
					<label for='abk'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
				</div>
				<div class='col-md-12'>
					<input id='abl' type='radio' name='sType' class='rdo' value='4' >
					<label for='abl'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
				</div>
			</div>
		</div>

		<div class='hidden-lg'>
			<input id='abq' type='radio' name='sType' class='rdo' value='1' >
			<label for='abq'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
			<br>
			<input id='abw' type='radio' name='sType' class='rdo' value='2' >
			<label for='abw'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
			<br>
			<input id='abe' type='radio' name='sType' class='rdo' value='3' >
			<label for='abe'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
			<br>
			<input id='abr' type='radio' name='sType' class='rdo' value='4' >
			<label for='abr'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
		</div>";
	} elseif ($type == 4) {
		$headerType = "ระดับชั้น ม.4 โครงการ English Program (EP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='abt' type='radio' name='sType' class='rdo' value='1' >
					<label for='abt'>วิทย์ - คณิต</label>
				</div>
				<div class='col-md-12'><br>
					<input id='aby' type='radio' name='sType' class='rdo' value='2' >
					<label for='aby'>คณิต - อังกฤษ</label>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='col-md-12'>
					<input id='abu' type='radio' name='sType' class='rdo' value='3' >
					<label for='abu'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
				</div>
				<div class='col-md-12'><br>
					<input id='abi' type='radio' name='sType' class='rdo' value='4' >
					<label for='abi'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='abo' type='radio' name='sType' class='rdo' value='5' >
					<label for='abo'>อังกฤษ - ภาษา เลือก จีน</label>
				</div>
			</div>
		</div>

		<div class='hidden-lg'>
			<input id='abp' type='radio' name='sType' class='rdo' value='1' >
			<label for='abp'>วิทย์ - คณิต</label>
			<br>
			<input id='azz' type='radio' name='sType' class='rdo' value='2' >
			<label for='azz'>คณิต - อังกฤษ</label>
			<br>
			<input id='azx' type='radio' name='sType' class='rdo' value='3' >
			<label for='azx'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
			<br>
			<input id='azc' type='radio' name='sType' class='rdo' value='4' >
			<label for='azc'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
			<br>
			<input id='azv' type='radio' name='sType' class='rdo' value='5' >
			<label for='azv'>อังกฤษ - ภาษา เลือก จีน</label>
		</div>";
	} elseif ($type == 5) {
		$headerType = "ระดับชั้น ม.4 โครงการ Intensive English Program (IEP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='azb' type='radio' name='sType' class='rdo' value='1' >
					<label for='azb'>วิทย์ - คณิต</label>
				</div>
				<div class='col-md-12'>
					<input id='azn' type='radio' name='sType' class='rdo' value='2' >
					<label for='azn'>คณิต - อังกฤษ</label>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='col-md-12'>
					<input id='azm' type='radio' name='sType' class='rdo' value='3' >
					<label for='azm'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
				</div>
				<div class='col-md-12'>
					<input id='aza' type='radio' name='sType' class='rdo' value='4' >
					<label for='aza'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='azs' type='radio' name='sType' class='rdo' value='5' >
					<label for='azs'>อังกฤษ - ภาษา เลือก จีน</label>
				</div>
			</div>
		</div>

		<div class='hidden-lg'>
			<input id='azd' type='radio' name='sType' class='rdo' value='1' >
			<label for='azd'>วิทย์ - คณิต</label>
			<br>
			<input id='azf' type='radio' name='sType' class='rdo' value='2' >
			<label for='azf'>คณิต - อังกฤษ</label>
			<br>
			<input id='azg' type='radio' name='sType' class='rdo' value='3' >
			<label for='azg'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
			<br>
			<input id='azh' type='radio' name='sType' class='rdo' value='4' >
			<label for='azh'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
			<br>
			<input id='azj' type='radio' name='sType' class='rdo' value='5' >
			<label for='azj'>อังกฤษ - ภาษา เลือก จีน</label>
		</div>";
	} else {
		$headerType = "ระดับชั้น ม.4 โครงการ ภาคปกติ (GP)";
		$subType = "
		<div class='visible-lg'>
			<div class='col-md-2'>
				<p>ประเภทการคัดเลือก
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='azk' type='radio' name='sType' class='rdo' value='1' >
					<label for='azk'>วิทย์ - คณิต</label>
				</div>
				<div class='col-md-12'>
					<input id='azl' type='radio' name='sType' class='rdo' value='2' >
					<label for='azl'>คณิต - อังกฤษ</label>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='col-md-12'>
					<input id='azq' type='radio' name='sType' class='rdo' value='3' >
					<label for='azq'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
				</div>
				<div class='col-md-12'>
					<input id='azw' type='radio' name='sType' class='rdo' value='4' >
					<label for='azw'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='col-md-12'>
					<input id='aze' type='radio' name='sType' class='rdo' value='5' >
					<label for='aze'>อังกฤษ - ภาษา เลือก จีน</label>
				</div>
			</div>
		</div>

		<div class='hidden-lg'>
			<input id='azr' type='radio' name='sType' class='rdo' value='1' >
			<label for='azr'>วิทย์ - คณิต</label>
			<br>
			<input id='azt' type='radio' name='sType' class='rdo' value='2' >
			<label for='azt'>คณิต - อังกฤษ</label>
			<br>
			<input id='azy' type='radio' name='sType' class='rdo' value='3' >
			<label for='azy'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
			<br>
			<input id='azu' type='radio' name='sType' class='rdo' value='4' >
			<label for='azu'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
			<br>
			<input id='azi' type='radio' name='sType' class='rdo' value='5' >
			<label for='azi'>อังกฤษ - ภาษา เลือก จีน</label>
			<br>
		</div>";
	}

	?>

		<input type="hidden" name="type" value="<?php echo $type; ?>">
		<!-- desktop -->
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
					<div style="color:#d1e0e0; padding-top:12px;">ยืนยันข้อมูล</div>
				</div>
				<div class="col-md-3">
					<div style="width:50px; float:left; height:50px; border-radius:50%; background-color:#d1e0e0; padding:21px; margin-right:3px; padding-top:13px;">
						3
					</div>
					<div style="color:#d1e0e0; padding-top:12px;">พิมพ์ข้อมูลใบสมัคร</div>
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
						<h4 style='color:red;'>ถ้าไม่มีข้อมูลในส่วนนั้นให้ใส่ "-" (ขีดกลาง)</h4>
					</div>
					<?php 
					if ($type == 4 || $type == 5 || $type == 6) {
						echo "<div class='col-md-12'>";
							echo "*ถ้าเป็นนักเรียนที่จบ ม.3 จากโรงเรียนโพธิสารพิทยากร ให้ใส่เลขประจำตัวเดิม
						<input type='text' name='input56' style='width:360px;' maxlength='5' onKeyUp='javascript:inputDigits(this);'>";
						echo "</div>";
					}

					 ?>
					<div class="col-md-6" id="form-line">
						<!-- <?php echo $checkEmpty[0]; ?> -->
						<input type="hidden" name="input1" maxlength="5" onKeyUp="javascript:inputDigits(this);" value="<?php echo $_SESSION['id_user']; ?>">
						<!-- ดูจากใบสมัคร -->
						<?php echo $checkEmpty[1]; ?> 
						<input name="input2" type="text" id="data" maxlength="13" style="width:280px;" onKeyUp="javascript:inputDigits(this);">
					</div>
					<div class="col-md-6" id="form-line">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						<?php echo $checkEmpty[2]; ?> 
						<select name="input3">
							<option value="0" selected>เลือกคำนำหน้า</option>
							<option value="1">ด.ช.</option>
							<option value="2">ด.ญ.</option>
							<option value="3">นาย</option>
							<option value="4">น.ส.</option>
						</select>
						<?php echo $checkEmpty[3]; ?>
						<input type="text" name="input4" style="width:200px;">
					</div>
					<div class="col-md-6">
						<?php echo $checkEmpty[4]; ?>
						<input type="text" name="input5" style="margin-left:35px; width:390px;">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-1">
					</div>
					<div class="col-md-5" style="margin-left:-38px;">
						<?php echo $checkEmpty[5]; ?>
						<input type="text" name="input6" style="width:300px;">
					</div>
					<div class="col-md-6" style="margin-left:38px;">
						<?php echo $checkEmpty[6]; ?>
						<input type="text" name="input7" style="width:390px;">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-7">
						<?php echo $checkEmpty[7]; ?>
						<input type="text" name="input8" style="width:100px;">
						<?php echo $checkEmpty[8]; ?>
						<input type="text" name="input9" style="width:100px;">
						<?php echo $checkEmpty[9]; ?>
						<input type="text" name="input10" style="width:100px;">
					</div>
					<div class="col-md-5">
						<?php echo $checkEmpty[10]; ?>
						<select name="input11">
							<?php 
							for ($i=1; $i < 32; $i++) { 
								echo "<option value=".$i.">".$i."</option>";
							}
							 ?>
						</select>
						<select name="input12">
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
						<select name="input13">
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
						<?php echo $checkEmpty[13]; ?>
						<input type="text" name="input14" style="width:380px;" maxlength="11" onKeyUp="javascript:inputDigits(this);">
						<p style="margin-left: 110px; font-size:14px;">(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)</p>
					</div>
					<div class="col-md-5">
						<?php echo $checkEmpty[14]; ?>
						<input type="text" style="width:70px;" name="input15">
						หมู่ที่ 
						<input type="text" style="width:70px;" name="input16">
					</div>
				</div>

				<div class="col-md-12" id="form-line" style="margin-top:0px;">
					<div class="col-md-6">
						<?php echo $checkEmpty[15]; ?>
						<input type="text" name="input17" style="width:450px;">
					</div>
					<div class="col-md-6">
						<?php echo $checkEmpty[16]; ?>
						<input type="text" name="input18" style="width:450px;">
					</div>
				</div>
				<div class="col-md-12" id="form-line">
					<div class="col-md-4">
						<?php echo $checkEmpty[19]; ?>
						<input type="text" name="input21" style="width:200px;">
					</div>
					<div class="col-md-4">
						<?php echo $checkEmpty[18]; ?>
						<input type="text" name="input20" style="width:200px;">
					</div>
					<div class="col-md-4">
						<?php echo $checkEmpty[17]; ?>
						<select name="input19" style="width:250px;">
							<option value="">เลือกจังหวัด</option>
							<?php 
							$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
							$j = 0;
							for ($i=1; $i < 79; $i++) { 
								echo "<option value=".$i.">".$province[$j]."</option>";
								$j++;
							}
							 ?>
						</select>	
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-4">
						<?php echo $checkEmpty[20]; ?>
						<input type="text" name="input22" maxlength="5">
					</div>
					<div class="col-md-4">
						<?php echo $checkEmpty[21]; ?>
						<input type="text" name="input23" style="width:200px;" maxlength="10">
					</div>
					<div class="col-md-4">
						<?php echo $checkEmpty[22]; ?>
						<input type="text" name="input24" maxlength="10">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-3">
						ความพิการ
						<input style="width:1em; height:1em;" type='radio' name='radio1' id="radio1-1" value='1'>
						ไม่พิการ
						<input style="width:1em; height:1em;" type='radio' name='radio1' id="radio1-2" value='2'>
						พิการ 
					</div>
					<div class="col-md-2" id="radio1-type">
						ด้าน
						<input type="text" name="input25"  style="margin-right:40px; width:150px;">
					</div>
					<div class="col-md-7">
						<?php echo $checkEmpty[23]; ?>
						<input type="text" name="input26" style="width:50px;" maxlength="3">
						กิโลกรัม
						&nbsp<?php echo $checkEmpty[24]; ?>
						<input type="text" name="input27" style="width:50px;" maxlength="3">
						เซนติเมตร
						&nbsp<?php echo $checkEmpty[25]; ?>
						<select name="input28">
							<option value="1">A</option>
							<option value="2">B</option>
							<option value="3">AB</option>
							<option value="4">O</option>
							<option value="5">ไม่ระบุ</option>
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
						<div class="col-md-12" style="margin-bottom:20px;">
							ระดับการศึกษา : 
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

						<div class="col-md-12">
							สังกัด :
							<input style="width:1em; height:1em;" type='radio' name='radio3' value='1'>
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

					<div style="width:100%;" id="form-line">
						<div class="col-md-4">
							<?php echo $checkEmpty[26]; ?>
							<input type="text" name="input29">
						</div>
						<div class="col-md-8">
							ร.ร.ตั้งอยู่
							<input style="width:1em; height:1em;" type='radio' name='radio4' value='1'>
							ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)
							<br>
							<input style="width:1em; height:1em;" type='radio' name='radio4' value='2'>
							นอกเขตพื้นที่	
						</div>
					</div>

					<div class="col-md-12" id="form-line">
						<?php echo $checkEmpty[27]; ?>
						<input type="text" name="input30">
						<?php echo $checkEmpty[28]; ?>
						<input type="text" name="input31">
						<?php echo $checkEmpty[29]; ?>
						<select name="input32" style="width:250px;">
							<option value="">เลือกจังหวัด</option>
							<?php 
							$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
							$j = 0;
							for ($i=1; $i < 79; $i++) { 
								echo "<option value=".$i.">".$province[$j]."</option>";
								$j++;
							}
							 ?>
						</select>
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
						<?php echo $checkEmpty[30]; ?>
						<input type="text" name="input33" style="width:300px;">
					</div>
					<div class="col-md-4">
						ความพิการของบิดา 
						<input type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-1" value='1'>
						ไม่พิการ
						<input type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-2" value='2'>
						พิการ 
					</div>
					<div class="col-md-3" id="radio5-type">
						ด้าน
						<input type="text" name="input34" style="width:150px;">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-4">
						<?php echo $checkEmpty[31]; ?>
						<input type="text" name="input35" style="width:150px;">
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
						<?php echo $checkEmpty[32]; ?>
						<input type="text" name="input36" maxlength="13" onKeyUp="javascript:inputDigits(this);">	
					</div>
					<div class="col-md-6">
						<?php echo $checkEmpty[33]; ?>
						<input type="text" name="input37" maxlength="10">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-5">
						<?php echo $checkEmpty[34]; ?>
						<input type="text" name="input38" style="width:300px;">
					</div>
					<div class="col-md-4">
						ความพิการของมารดา 
						<input type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-1" value='1'>
						ไม่พิการ
						<input type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-2" value='2'>
						พิการ 
					</div>
					<div class="col-md-3" id="radio7-type">
						ด้าน
						<input type="text" name="input39" style="width:150px;">
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-4">
						<?php echo $checkEmpty[35]; ?>
						<input type="text" name="input40" style="width:150px;">
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
						<?php echo $checkEmpty[36]; ?>
						<input type="text" name="input41" maxlength="13" onKeyUp="javascript:inputDigits(this);">	
					</div>
					<div class="col-md-6">
						<?php echo $checkEmpty[37]; ?>
						<input type="text" name="input42" maxlength="10">
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
						<?php echo $checkEmpty[38]; ?> 
						<input type="text" name="input43" style="width:50px;">
						คน
					</div>
					<div class="col-md-6">
						<?php echo $checkEmpty[39]; ?>
						<input type="text" name="input44" style="width:50px;">
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
						<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-1" value='1'>
						บิดา
						<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-2" value='2'>
						มารดา
						<input style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-3" value='3'>
						อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)
					</div>
				</div>

				<span id="parent">
					<div class="col-md-12" id="form-line">
						<div class="col-md-6">
							ชื่อสกุล ผู้ปกครอง
							<input type="text" name="input45">
						</div>
						<div class="col-md-6">
							รายได้ของผู้ปกครอง 
							<input type="text" name="input46">
							บาท/ปี
						</div>
					</div>

					<div class="col-md-12" id="form-line">
						<div class="col-md-6">
							มีความสัมพันธ์กับนักเรียนเป็น 
							<input type="text" name='input47'>
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
							รหัสประจำตัวประชาชน 
							<input type="text" name="input48" maxlength="13">
						</div>
						<div class="col-md-6">
							โทรศัพท์ที่สามารถติดต่อได้
							<input type="text" name="input49" maxlength="10">
						</div>
					</div>
				</span>
			</div>

			<?php 
			if ($type == 1 OR $type == 4 OR $type == 5 OR $type == 6) {
				echo "<span id='form-home'>";
			}
			 ?>
			
			<div class="container" id="form-table" style="padding-top:30px; background-color:rgba(255,255,255,0.6);">
				<div class="col-md-12">
					<div class="col-md-8">
						<h4 style="font-weight:bold; font-size:20px;">
							ข้อมูลการอาศัยอยู่ในเขตพื้นที่บริการ (คลองชักพระ บางระมาด บางพรม ฉิมพลี)
						</h4>
					</div>
					<div class="col-md-4">
						<h4 style="font-weight:bold; font-size:15px; border-bottom:1px solid black;">
							หมายเหตุ อาศัยอยู่นอกเขตพื้นที่บริการไม่ต้องกรอก
						</h4>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-12" id="form-line">
						เจ้าบ้าน/เจ้าของบ้านชื่อ
						<input type="text" name="input54" style="width:320px;">
						เกี่ยวข้องกับนักเรียนเป็น 
						<input type="text" name="input55" style="width:320px;">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-8" id="form-line">
						นักเรียนอาศัยอยู่ในเขตพื้นที่บริการ (นับจากวันที่ย้ายเข้าอยู่ถึงวันที่ 16 พฤษภาคม พ.ศ. 2560)
					</div>
					<div class="col-md-2" id="form-line">
						<input type='radio' name='radio13' class='rdo' value='1' >
						ครบ 2 ปี
					</div>
					<div class="col-md-2" id="form-line">
						<input type='radio' name='radio13' class='rdo' value='2' >
						ไม่ครบ 2 ปี
					</div>
				</div>
			</div>
			</span>

			<div class="container" id="form-table" style="padding-top:30px; margin-bottom:50px; background-color:rgba(255,255,255,0.6);">
				<div class="col-md-12">
					<div class="col-md-12">
						<h2 style="font-weight:bold;">
							<?php 
							if ($type == 1 || $type == 2 || $type == 3) {
								echo "ข้อมูลผลการเรียน";
							} else {
								echo "ข้อมูลผลการเรียน (ผลการเรียนเฉลี่ย ม.1 - ม.3 รวม 5 ภาคเรียน)";
							}
							
							 ?>
						</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-12" id="form-line">
						ผลการเรียนเฉลี่ย
						<input type="text" name="input50" style="width:50px;" maxlength="5" onKeyUp="javascript:inputDigits(this);">
						หรือ ร้อยละ
						<input type="text" name="input51" style="width:50px;" maxlength="5" onKeyUp="javascript:inputDigits(this);">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-12">
						<h2 style="font-weight:bold;">
							<?php 
							if ($type == 1 OR $type == 4) {
								echo "ผลการเรียนเฉลี่ยภาษาอังกฤษ";
							} else {
								echo "ข้อมูลคะแนน O-NET";
							}

							 ?>
						</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-12" id="form-line">
						<?php 
						if ($type == 1 OR $type == 4) {
							echo "ได้คะแนนเฉลี่ยภาษาอังกฤษ";
						} else {
							echo "ได้คะแนนเฉลี่ย O-NET";
						}

						 ?>
						
						<input type="text" name="input52" style="width:50px;" onKeyUp="javascript:inputDigits(this);" maxlength="5">
						คะแนน
					
						<span style="margin-left:20px;">
						คิดเป็นร้อยละ
						<input type="text" name="input53" style="width:50px;" onKeyUp="javascript:inputDigits(this);" maxlength="5">
						</span>
					</div>
				</div>
			</div>
			<div class="container" style="margin-bottom:50px; margin-top:-10px;">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<input type="submit" name="submit" value="บันทึกข้อมูล" class="form-control">
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

		</form>

		<!-- phone -->
		<div class="hidden-lg" style="width:100vw; height:100vh; font-size:4vw;">
		<form id="form2" name="form2" method="post" action="form_check_phone.php" onsubmit="checkForm(); return false;">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<div class="container" style="height:8vh; width: 100%; background-color:#1c1c86; color:white;">
				<img src="image/logops.jpg" style="width:5vh;  float:left; margin-top: 1.5vh; border-radius: 50%;">
				<span style="font-size:4vw; float:left; margin-top:15px; color:white; padding-left:5px;">โรงเรียนโพธิสารพิทยากร</span>
			</div>
			
			<div class="container" style="margin-top:5vh; border-bottom:2px solid #1c1c86; padding-bottom:5vh;">
				<center>
					<span style="font-size: 5vw; font-weight:bold; color:#1c1c86;">
					<?php echo $headerType; ?>	
					</span>
				</center>
			
				<div style="font-weight:bold;">
					<?php 
					if ($type == 1) {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<div class='col-md-12' style='margin-top:2vh;'>
							<input id='123' type='radio' name='sType' class='rdo' value='1' >
							<label for='123'>วิทย์ - คณิต</label>
						</div>
						<div class='col-md-12'>
							<input id='124' type='radio' name='sType' class='rdo' value='2' >
							<label for='124'>คณิต - ภาษาจีน</label>
						</div>
					</div>";
				} elseif ($type == 2) {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<input id='125' type='radio' name='sType' class='rdo' value='1' >
							<label for='125'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
						<br>
						<input id='126' type='radio' name='sType' class='rdo' value='2' >
							<label for='126'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
						<br>
						<input id='127' type='radio' name='sType' class='rdo' value='3' >
							<label for='127'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
						<br>
						<input id='128' type='radio' name='sType' class='rdo' value='4' >
							<label for='128'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
					</div>";
				} elseif ($type == 3) {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<input id='129' type='radio' name='sType' class='rdo' value='1' >
						<label for='129'>ในเขตพื้นที่บริการ สอบคัดเลือก</label>
						<br>
						<input id='130' type='radio' name='sType' class='rdo' value='2' >
						<label for='130'>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
						<br>
						<input id='131' type='radio' name='sType' class='rdo' value='3' >
						<label for='131'>นอกเขตพื้นที่บริการ สอบคัดเลือก</label>
						<br>
						<input id='132' type='radio' name='sType' class='rdo' value='4' >
						<label for='132'>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ</label>
					</div>";
				} elseif ($type == 4) {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<input id='133' type='radio' name='sType' class='rdo' value='1' >
						<label for='133'>วิทย์ - คณิต</label>
						<br>
						<input id='134' type='radio' name='sType' class='rdo' value='2' >
						<label for='134'>คณิต - อังกฤษ</label>
						<br>
						<input id='135' type='radio' name='sType' class='rdo' value='3' >
						<label for='135'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
						<br>
						<input id='136' type='radio' name='sType' class='rdo' value='4' >
						<label for='136'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
						<br>
						<input id='137' type='radio' name='sType' class='rdo' value='5' >
						<label for='137'>อังกฤษ - ภาษา เลือก จีน</label>
					</div>";
				} elseif ($type == 5) {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<input id='138' type='radio' name='sType' class='rdo' value='1' >
						<label for='138'>วิทย์ - คณิต</label>
						<br>
						<input id='139' type='radio' name='sType' class='rdo' value='2' >
						<label for='139'>คณิต - อังกฤษ</label>
						<br>
						<input id='140' type='radio' name='sType' class='rdo' value='3' >
						<label for='140'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
						<br>
						<input id='141' type='radio' name='sType' class='rdo' value='4' >
						<label for='141'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
						<br>
						<input id='142' type='radio' name='sType' class='rdo' value='5' >
						<label for='142'>อังกฤษ - ภาษา เลือก จีน</label>
					</div>";
				} else {
					echo "
					<div class='hidden-lg' style='margin-top:3vh;'>
						<input id='143' type='radio' name='sType' class='rdo' value='1' >
						<label for='143'>วิทย์ - คณิต</label>
						<br>
						<input id='144' type='radio' name='sType' class='rdo' value='2' >
						<label for='144'>คณิต - อังกฤษ</label>
						<br>
						<input id='145' type='radio' name='sType' class='rdo' value='3' >
						<label for='145'>อังกฤษ - ภาษา เลือก ฝรั่งเศษ</label>
						<br>
						<input id='146' type='radio' name='sType' class='rdo' value='4' >
						<label for='146'>อังกฤษ - ภาษา เลือก ญี่ปุ่น</label>
						<br>
						<input id='147' type='radio' name='sType' class='rdo' value='5' >
						<label for='147'>อังกฤษ - ภาษา เลือก จีน</label>
						<br>
					</div>";
				}

				?>

				</div>
			</div>
			<div class="container" style="margin-top:5vh; border-bottom:2px solid #1c1c86; padding-bottom:5vh;">
				<span style="font-size:6vw; font-weight:bold; color:#1c1c86">ข้อมูลนักเรียน</span>

				<h4 style='color:red;'>ถ้าไม่มีข้อมูลในส่วนนั้นให้ใส่ "-" (ขีดกลาง)</h4>

				<?php 
				if ($type == 4 || $type == 5 || $type == 6) {
						echo "
						<center>*ถ้าเป็นนักเรียนที่จบ ม.3 จากโรงเรียนโพธิสารพิทยากร ให้ใส่เลขประจำตัวเดิม
						</center>
					<input type='text' class='form-control' name='input56' maxlength='5' onKeyUp='javascript:inputDigits(this);'>";
				}

				 ?>
				<br>
				<!-- <?php echo $checkEmpty[0]; ?> ดูจากใบสมัคร -->
				<input type="hidden" class="form-control" name="input1" value="<?php echo $_SESSION['id_user']; ?>" maxlength="5">
				<!-- <br> -->
				
				<?php echo $checkEmpty[1]; ?> 
				<input name="input2" type="text" id="data" maxlength="13" class="form-control">

				<br>
				<div style="width:50%; float:left;">
					<?php echo $checkEmpty[2]; ?> 
				</div>
				<div style="width:50%; float:left;">
					<select name="input3" class="form-control">
						<option value="0" selected>เลือกคำนำหน้า</option>
						<option value="1">ด.ช.</option>
						<option value="2">ด.ญ.</option>
						<option value="3">นาย</option>
						<option value="4">น.ส.</option>
					</select>
				</div>
				<br><br>

				<div style="width:49%; margin-right: 2%; float:left;">
					<?php echo $checkEmpty[3]; ?>
					<input type="text" class="form-control" name="input4">
				</div>
				<div style="width:49%; float:left;">
					<?php echo $checkEmpty[4]; ?>
					<input type="text" name="input5" class="form-control">
				</div>
				<div style="width:49%; margin-right: 2%; float:left;">
					<?php echo $checkEmpty[5]; ?>
					<input type="text" class="form-control" name="input6">
				</div>
				<div style="width:49%; float:left;">
					<?php echo $checkEmpty[6]; ?>
					<input type="text" class="form-control" name="input7">
				</div>

				<div style="width:33%; margin-top: 3vh; float:left;">
					<?php echo $checkEmpty[7]; ?>
				</div>
				<div style="width:33%; margin-top: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
					<?php echo $checkEmpty[8]; ?>
				</div>
				<div style="width:33%; margin-top: 3vh; float:left;">
					<?php echo $checkEmpty[9]; ?>
				</div>

				<div style="width:33%; float:left;">
					<input type="text" class="form-control" name="input8">
				</div>
				<div style="width:33%; margin-left:0.5%; margin-right:0.5%; float:left;">
					<input type="text" class="form-control" name="input9">
				</div>
				<div style="width:33%; float:left;">
					<input type="text" class="form-control" name="input10">
				</div>

				<div>
				<?php echo $checkEmpty[10]; ?>
				</div>
				<div style="margin-bottom:3vh; width:20%; float:left;">
					<select name="input11" class="form-control">
						<?php 
						for ($i=1; $i < 32; $i++) { 
							echo "<option value=".$i.">".$i."</option>";
						}
						 ?>
					</select>
				</div>
				<div style="margin-bottom:3vh; width:50%; float:left;">
					<select name="input12" class="form-control">
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
				</div>
				<div style="margin-bottom:3vh; width:30%; float:left;">
					<select name="input13" class="form-control">
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

				<div>
					<?php echo $checkEmpty[13]; ?>
					<input type="text" class="form-control" name="input14"  maxlength="11">
					<span style="font-size:14px;">
						(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)
					</span>
				</div>

				<div style="margin-top:3vh; float:left; width:68%; margin-right:2%;">
					<?php echo $checkEmpty[14]; ?>
					<input type="text" class="form-control" name="input15">
				</div>
				<div style="margin-top:3vh; float:left; width:30%;">
					หมู่ที่
					<input type="text" class="form-control" name="input16">
				</div>

				<div style="float:left; width:49%; margin-right:2%;">
					<?php echo $checkEmpty[15]; ?>
					<input type="text" class="form-control" name="input17">
				</div>
				<div style="float:left; width:49%;">
					<?php echo $checkEmpty[16]; ?>
					<input type="text" class="form-control" name="input18">
				</div>

				<div style="float:left; width:49%; margin-right:2%;">
					<?php echo $checkEmpty[19]; ?>
					<input type="text" class="form-control" name="input21">
				</div>
				<div style="float:left; width:49%;">
					<?php echo $checkEmpty[18]; ?>
					<input type="text" class="form-control" name="input20">
				</div>

				<?php echo $checkEmpty[17]; ?>
				<select name="input19" class="form-control">
					<option value="">เลือกจังหวัด</option>
					<?php 
					$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
					$j = 0;
					for ($i=1; $i < 79; $i++) { 
						echo "<option value=".$i.">".$province[$j]."</option>";
						$j++;
					}
					 ?>
				</select>	

				<div style="float:left; margin-top: 3vh; width:49%; margin-right:2%;">
					<?php echo $checkEmpty[20]; ?>
					<input type="text" class="form-control" name="input22" maxlength="5">
				</div>
				<div style="float:left; margin-top: 3vh; width:49%;">
					<?php echo $checkEmpty[21]; ?>
					<input type="text" class="form-control" name="input23" maxlength="10">
				</div>

				<div style="float:right; width:49%;">
					ความพิการ <br>
					<input style="width:1em; height:1em;" type='radio' id="s2-1" name='radio1' id="radio1-1" value='1'>
					<label for="s2-1">ไม่พิการ</label>
					<input style="width:1em; height:1em;" type='radio' id="s2-2" name='radio1' id="radio1-2" value='2'>
					<label for="s2-2">พิการ</label>
				</div>
				<div style="float:right; width:49%; margin-right:2%;">
					<?php echo $checkEmpty[22]; ?>
					<input type="text" class="form-control" name="input24" maxlength="10">
				</div>

				<div style="width:33%; margin-top: 3vh; float:left;">
					<?php echo $checkEmpty[23]; ?>
					<input type="text" class="form-control" name="input26" maxlength="3">
				</div>
				<div style="width:33%; margin-top: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
					<?php echo $checkEmpty[24]; ?>
					<input type="text" class="form-control" name="input27" maxlength="3">
				</div>
				<div style="width:33%; margin-top: 3vh; float:left;">
					<?php echo $checkEmpty[25]; ?>
					<select name="input28" class="form-control">
						<option value="1">A</option>
						<option value="2">B</option>
						<option value="3">AB</option>
						<option value="4">O</option>
						<option value="5">ไม่ระบุ</option>
					</select>
				</div>
			</div>

			<div class="container" style="margin-top:5vh; border-bottom:2px solid #1c1c86; padding-bottom:5vh;">
				<span style="font-size:6vw; font-weight:bold; color:#1c1c86">ข้อมูลการศึกษา (โรงเรียนเดิม)</span>
					
				<div style="margin-top:3vh;">
					<center><span style="color:#1c1c86">ระดับการศึกษา</span></center>
				</div>
				<?php 
				if ($type == 1 OR $type == 2 OR $type == 3) {
					echo "<div>
					<input id='s3-1' style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
					echo " <label for='s3-1'>กำลังเรียนชั้น ป.6</label> </div>";
					echo "<div>
					<input id='s3-2' style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
					echo " <label for='s3-2'>จบชั้น ป.6</label> </div>";
					echo "<div>
					<input id='s3-3' style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
					echo " <label for='s3-3'>จบการศึกษาเทียบเท่าชั้น ป.6</label> </div>";
				} else {
					echo "<div>
					<input id='s3-4' style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
					echo " <label for='s3-4'>กำลังเรียนชั้น ม.3</label> </div>";
					echo "<div>
					<input id='s3-5' style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
					echo " <label for='s3-5'>จบชั้น ม.3</label> </div>";
					echo "<div>
					<input id='s3-6' style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
					echo " <label for='s3-6'>จบการศึกษาเทียบเท่าชั้น ม.3</label> </div>";
				}
				?>

				<div style="width:33%; margin-top: 3vh; float:left;">
					<span style="color:#1c1c86">สังกัด :</span>
				</div>
				<div style="width:33%; margin-top: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
					<input id="s4-1" style="width:1em; height:1em;" type='radio' name='radio3' value='1'>
					<label for="s4-1">สปช.เดิม</label>
				</div>
				<div style="width:33%; margin-top: 3vh; float:left;">
					<input id="s4-2" style="width:1em; height:1em;" type='radio' name='radio3' value='2'>
					<label for="s4-2">สพฐ.</label>
				</div>

				<div style="width:33%; margin-bottom: 3vh; float:left;">
					<input id="s4-3" style="width:1em; height:1em;" type='radio' name='radio3' value='3'>
					<label for="s4-3">สช.</label>
				</div>
				<div style="width:33%; margin-bottom: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
					<input id="s4-4" style="width:1em; height:1em;" type='radio' name='radio3' value='4'>
					<label for="s4-4">กทม.</label>
				</div>
				<div style="width:33%; margin-bottom: 3vh; float:left;">
					<input id="s4-5" style="width:1em; height:1em;" type='radio' name='radio3' value='5'>
					<label for="s4-5">อื่นๆ</label>
				</div>

				<div>
					<?php echo $checkEmpty[26]; ?>
					<input type="text" class="form-control" name="input29">
				</div>
					
				<div style="margin-top:3vh;">
					ร.ร.ตั้งอยู่
				</div>
				<div style="font-size:3.2vw;">
					<input id="s6-1" style="width:1.2em; height:1.2em;" type='radio' name='radio4' value='1'>
					<label for="s6-1">ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)</label>
					<br>
					<input id="s6-2" style="width:1.2em; height:1.2em;" type='radio' name='radio4' value='2'>
					<label for="s6-2">นอกเขตพื้นที่	</label>
				</div>

				<div style="float:left; margin-top: 3vh; width:49%; margin-right:2%;">
					<?php echo $checkEmpty[27]; ?>
					<input class="form-control" type="text" name="input30">
				</div>
				<div style="float:left; margin-top: 3vh; width:49%;">
					<?php echo $checkEmpty[28]; ?>
					<input class="form-control" type="text" name="input31">
				</div>

				<div>
					<?php echo $checkEmpty[29]; ?>
					<select name="input32" class="form-control">
						<option value="">เลือกจังหวัด</option>
						<?php 
						$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
						$j = 0;
						for ($i=1; $i < 79; $i++) { 
							echo "<option value=".$i.">".$province[$j]."</option>";
							$j++;
						}
						 ?>
					</select>	
				</div>			
			</div>		

			<div class="container" style="margin-top:5vh;">
				<div>
					<span style="font-size:6vw; font-weight:bold; color:#1c1c86">ข้อมูล บิดา - มารดา</span>
				</div>
				<div style="margin-top:3vh;">
					<?php echo $checkEmpty[30]; ?>
					<input type="text" class="form-control" name="input33">
				</div>

				<div style="margin-top:3vh;">
					ความพิการของบิดา 
					<input id="s7-1" type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-1" value='1'>
					<label for="s7-1">ไม่พิการ</label>
					<input id="s7-2" type='radio' style="width:1em; height:1em;" name='radio5' id="radio5-2" value='2'>
					<label for="s7-2">พิการ </label>
				</div>
			</div>
			<div class="container">
				<div style="float:left; margin-top: 3vh; width:34%; margin-right:1%;">
					<?php echo $checkEmpty[31]; ?>
				</div>
				<div style="float:left; margin-top: 3vh; width:49%; margin-right:1%;">
					<input type="text" class="form-control" name="input35" style="width:150px;">
				</div>
				<div style="float:left; margin-top: 3vh; width:15">
					บาท/ปี
				</div>
			</div>
			<div class="container">
				<div style="float:left;">
					อาชีพของบิดา
				</div>
				<div style="float:left;">
					<input id="s8-1" style="width:1em; height:1em;" type='radio' name='radio6' value='1'>
					<label for="s8-1">ค้าขาย</label>
					<input id="s8-2" style="width:1em; height:1em;" type='radio' name='radio6' value='2'>
					<label for="s8-2">รับจ้าง</label>
					<input id="s8-3" style="width:1em; height:1em;" type='radio' name='radio6' value='3'>
					<label for="s8-3">รับราชการ</label>
					<input id="s8-4" style="width:1em; height:1em;" type='radio' name='radio6' value='4'>
					<label for="s8-4">พนักงาน</label>
				</div>
				<div style="float:left;">
					<input id="s8-5" style="width:1em; height:1em;" type='radio' name='radio6' value='5'>
					<label for="s8-5">นักธุรกิจ</label>
					<input id="s8-6" style="width:1em; height:1em;" type='radio' name='radio6' value='6'>
					<label for="s8-6">อาชีพอิสระ</label>
					<input id="s8-7" style="width:1em; height:1em;" type='radio' name='radio6' value='7'>
					<label for="s8-7">ไม่ประกอบอาชีพ	</label>
				</div>
			</div>
			<div class="container">
				<div>
					<?php echo $checkEmpty[32]; ?>
					<input type="text" class="form-control" name="input36" maxlength="13">
				</div>
				<div>
					<?php echo $checkEmpty[33]; ?>
					<input type="text" class="form-control" name="input37" maxlength="10">
				</div>
				

				<div style="margin-top:3vh;">
					<?php echo $checkEmpty[34]; ?>
					<input type="text" class="form-control" name="input38">
				</div>

				<div style="margin-top:3vh;">
					ความพิการของมารดา 
					<input id="s9-1" type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-1" value='1'>
					<label for="s9-1">ไม่พิการ</label>
					<input id="s9-2" type='radio' style="width:1em; height:1em;" name='radio7' id="radio7-2" value='2'>
					<label for="s9-2">พิการ</label>
				</div>
			
				<div style="float:left; margin-top: 3vh; width:34%; margin-right:1%;">
					<?php echo $checkEmpty[35]; ?>
				</div>
				<div style="float:left; margin-top: 3vh; width:49%; margin-right:1%;">
					<input type="text" class="form-control" name="input40" style="width:150px;">
				</div>
				<div style="float:left; margin-top: 3vh; width:15">
					บาท/ปี
				</div>
				
				<div style="float:left;">
					อาชีพของมารดา
				</div>
				<div style="float:left;">
					<input id="s10-1" style="width:1em; height:1em;" type='radio' name='radio8' value='1'>
					<label for="s10-1">ค้าขาย</label>
					<input id="s10-2" style="width:1em; height:1em;" type='radio' name='radio8' value='2'>
					<label for="s10-2">รับจ้าง</label>
					<input id="s10-3" style="width:1em; height:1em;" type='radio' name='radio8' value='3'>
					<label for="s10-3">รับราชการ</label>
					<input id="s10-4" style="width:1em; height:1em;" type='radio' name='radio8' value='4'>
					<label for="s10-4">พนักงาน</label>
				</div>
				<div style="float:left;">
					<input id="s10-5" style="width:1em; height:1em;" type='radio' name='radio8' value='5'>
					<label for="s10-5">นักธุรกิจ</label>
					<input id="s10-6" style="width:1em; height:1em;" type='radio' name='radio8' value='6'>
					<label for="s10-6">อาชีพอิสระ</label>
					<input id="s10-7" style="width:1em; height:1em;" type='radio' name='radio8' value='7'>
					<label for="s10-7">ไม่ประกอบอาชีพ	</label>
				</div>
			</div>
			<div class="container">
				<div>
					<?php echo $checkEmpty[36]; ?>
					<input type="text" class="form-control" name="input41" maxlength="13">
				</div>
				<div>
					<?php echo $checkEmpty[37]; ?>
					<input type="text" class="form-control" name="input42" maxlength="10">
				</div>

				<div style="margin-top:3vh;">
					สถานภาพของบิดา-มารดา
				</div>
				<div>
					<input id="s11-1" style="width:1em; height:1em;" type='radio' name='radio9' value='1'>
					<label for="s11-1">อยู่ด้วยกัน</label>
					<input id="s11-2" style="width:1em; height:1em;" type='radio' name='radio9' value='2'>
					<label for="s11-2">แยกกันอยู่</label>
					<input id="s11-3" style="width:1em; height:1em;" type='radio' name='radio9' value='3'>
					<label for="s11-3">หย่าร้าง</label>
				</div>
				<div>
					<input id="s11-4" style="width:1em; height:1em;" type='radio' name='radio9' value='4'>
					<label for="s11-4">บิดาถึงแก่กรรม</label>
					<input id="s11-5" style="width:1em; height:1em;" type='radio' name='radio9' value='5'>
					<label for="s11-5">มารดาถึงแก่กรรม</label>
				</div>
				<div>
					<input id="s11-6" style="width:1em; height:1em;" type='radio' name='radio9' value='6'>
					<label for="s11-6">บิดาแต่งงานใหม่</label>
					<input id="s11-7" style="width:1em; height:1em;" type='radio' name='radio9' value='7'>
					<label for="s11-7">มารดาแต่งงานใหม่</label>
				</div>

				<div style="width:70%; margin-top:3vh; float:left;">
					<?php echo $checkEmpty[38]; ?> 
				</div>
				<div style="width:20%; margin-top:3vh; float:left;">
					<input type="text" class="form-control" name="input43" style="width:50px;">
				</div>
				<div style="width:10%; margin-top:3vh; float:left;">
					คน
				</div>

				<div style="width:70%; margin-top:3vh; float:left;">
					<?php echo $checkEmpty[39]; ?>
				</div>
				<div style="width:20%; margin-top:3vh; float:left;">
					<input type="text" class="form-control" name="input44" style="width:50px;">
				</div>
				<div style="width:10%; margin-top:3vh; float:left;">
					คน
				</div>
			</div>

			<div class="container" style="margin-top:5vh; padding-bottom:5vh;">
				<span style="font-size:6vw; font-weight:bold; color:#1c1c86">ข้อมูลผู้ปกครอง</span>

				<div style="margin-top:3vh;">
					เกี่ยวข้างกับนักเรียนเป็น
				</div>

				<div>
					<input id="s12-1" style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-1" value='1'>
					<label for="s12-1">บิดา</label>
					<input id="s12-2" style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-2" value='2'>
					<label for="s12-2">มารดา</label>
					<br>
					<input id="s12-3" style="width:1em; height:1em;" type='radio' name='radio10' id="radio10-3" value='3'>
					<label for="s12-3" style="font-size:3.4vw;">อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)</label>
				</div>

				<div style="margin-top:3vh;">
					ชื่อสกุล ผู้ปกครอง
					<input type="text" class="form-control" name="input45">
				</div>
				<div>
					รายได้ของผู้ปกครอง 
					<div style="width:79%; margin-right: 1%; float:left;">
						<input type="text" class="form-control" name="input46">
					</div>
					<div style="width:19%; padding-top: 5px; float:left;">
						บาท/ปี
					</div>
				</div>
			</div>
			<div class="container">
				<div>
					มีความสัมพันธ์กับนักเรียนเป็น 
					<input type="text" class="form-control" name='input47'>
				</div>

				<div style="margin-top:3vh;">
					อาชีพของผู้ปกครอง 
				</div>
				<div>
					<input id="s13-1" style="width:1em; height:1em;" type='radio' name='radio12' value='1'>
					<label for="s13-1">ค้าขาย</label>
					<input id="s13-2" style="width:1em; height:1em;" type='radio' name='radio12' value='2'>
					<label for="s13-2">รับจ้าง</label>
					<input id="s13-3" style="width:1em; height:1em;" type='radio' name='radio12' value='3'>
					<label for="s13-3">รับราชการ</label>
					<input id="s13-4" style="width:1em; height:1em;" type='radio' name='radio12' value='4'>
					<label for="s13-4">พนักงาน</label>
				</div>
				<div>
					<input id="s13-5" style="width:1em; height:1em;" type='radio' name='radio12' value='5'>
					<label for="s13-5">นักธุรกิจ</label>
					<input id="s13-6" style="width:1em; height:1em;" type='radio' name='radio12' value='6'>
					<label for="s13-6">อาชีพอิสระ</label>
					<input id="s13-7" style="width:1em; height:1em;" type='radio' name='radio12' value='7'>
					<label for="s13-7">ไม่ประกอบอาชีพ</label>
				</div>
			</div>
			<div class="container">
				<div style="margin-top:3vh;">
					รหัสประจำตัวประชาชน 
					<input type="text" class="form-control" name="input48" maxlength="13">
				</div>
				<div>
					โทรศัพท์ที่สามารถติดต่อได้
					<input type="text" class="form-control" name="input49" maxlength="10">
				</div>
			</div>
			
			<?php 
			if ($type == 1 OR $type == 4 OR $type == 5 OR $type == 6) {
				echo "";
			} else {
				echo "<div class='container' style='margin-top:5vh;'>
					<span style='font-size:5vw; font-weight:bold; color:#1c1c86'>
						ข้อมูลการอาศัยอยู่ในเขตพื้นที่บริการ (คลองชักพระ บางระมาด บางพรม ฉิมพลี)
					</span>
						
					<div>
						<h4 style='font-weight:bold; font-size:15px;color:red;'>
							หมายเหตุ อาศัยอยู่นอกเขตพื้นที่บริการไม่ต้องกรอก
						</h4>
					</div>
				</div>
				<div class='container'>
					เจ้าบ้าน/เจ้าของบ้านชื่อ
					<input type='text' class='form-control' name='input54'>
					เกี่ยวข้องกับนักเรียนเป็น 
					<input type='text' class='form-control' name='input55'>
				</div>
				<div class='container' style='margin-top:3vh;'>
					<div>
						นักเรียนอาศัยอยู่ในเขตพื้นที่บริการ (นับจากวันที่ย้ายเข้าอยู่ถึงวันที่ 16 พฤษภาคม พ.ศ. 2560)
					</div>
					<div style='width:49%; margin-top: 3vh; float:left; margin-right:2%;'>
						<input id='s14-1' type='radio' name='radio13' class='rdo' value='1' >
						<label for='s14-1'>ครบ 2 ปี</label>
					</div>
					<div style='width:49%; margin-top: 3vh; float:left;'>
						<input id='s14-2' type='radio' name='radio13' class='rdo' value='2' >
						<label for='s14-2'>ไม่ครบ 2 ปี</label>
					</div>
				</div>";
			}
			?>

			<div class="container" style="padding-top:5vh;">
				<div style="font-size:6vw; font-weight:bold; color:#1c1c86">
					<?php 
					if ($type == 1 || $type == 2 || $type == 3) {
						echo "ข้อมูลผลการเรียน";
					} else {
						echo "ข้อมูลผลการเรียน (ผลการเรียนเฉลี่ย ม.1 - ม.3 รวม 5 ภาคเรียน)";
					}
					 ?>
				</div>
						
				<div style="width:40%; float:left; margin-top:3vh; margin-bottom:3vh;">
					ผลการเรียนเฉลี่ย
				</div>
				<div style="width:15%; float:left; margin-top:3vh; margin-bottom:3vh;">
					<input type="text" class="form-control" name="input50" style="width:50px;" maxlength="5">
				</div>
				<div style="width:25%; float:left; margin-top:3vh; margin-bottom:3vh;">
					หรือ ร้อยละ
				</div>
				<div style="width:15%; float:left; margin-top:3vh; margin-bottom:3vh;">
					<input type="text" class="form-control" name="input51" style="width:50px;" maxlength="5">
				</div>
			</div>
			<div class="container">	
				<div style="font-size:6vw; font-weight:bold; color:#1c1c86">
					<?php 
					if ($type == 1 OR $type == 4) {
						echo "ผลการเรียนเฉลี่ยภาษาอังกฤษ";
					} else {
						echo "ข้อมูลคะแนน O-NET";
					}

					 ?>
				</div>
						
				<?php 
				if ($type == 1 OR $type == 4) {
					echo "<div style='margin-top:3vh; width:60%; float:left;'>ได้คะแนนเฉลี่ยภาษาอังกฤษ</div>";
				} else {
					echo "<div style='margin-top:3vh; width:60%; float:left;'>ได้คะแนนเฉลี่ย O-NET</div>";
				}

				 ?>
				<div style='margin-top:3vh; width:20%; float:left;'>
					<input type="text" name="input52" class="form-control" maxlength="5">
				</div>
				<div style='margin-top:3vh; width:20%; float:left;'>
					คะแนน
				</div>
			</div>
			<div class="container">		
				<div style="width:30%; float:left;">
					คิดเป็นร้อยละ
				</div>
				<div style="width:70%; float:left;">
					<input type="text" class="form-control" name="input53" style="width:50px;" maxlength="5">
				</div>
				<div style="width:100%; float:left; margin-top:3vh; padding-bottom:3vh;">
					<input type="submit" name="submit" value="บันทึกข้อมูล" class="form-control">
				</div>
			</div>
		</div>
		</form>
	</div>

	<script src="js/jquery.js"></script>
</body>
</html>

<script type="text/javascript">
	function inputDigits(sensor){
		var regExp = /[0-9,.,-]$/;
		if(!regExp.test(sensor.value) && event.keyCode != 8 && event.keyCode != 9){
		alert("กรุณากรอกตัวเลขเท่านั้น");
		sensor.value = sensor.value.substring(0, sensor.value.length -1);
		}
	}

	$(document).ready(function(){
		$("#radio1-type").hide();
		$("#radio5-type").hide();
		$("#radio7-type").hide();
		$("#radio11-type").hide();
		$("#parent").hide();
		$("#form-home").hide();

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