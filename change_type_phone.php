<?php
session_start();
echo "<meta charset='UTF-8'>";
include('config.php');
error_reporting( error_reporting() & ~E_NOTICE );

$id_history = $_SESSION['id_user'];
$sql = "SELECT * FROM history_ps WHERE id_history = $id_history";
$query = mysql_query($sql);
$data = mysql_fetch_array($query);

$type = $data['type'];
$sType = $data['stype'];
$radio1 = $data['radio1'];
$radio2 = $data['radio2'];
$radio3 = $data['radio3'];
$radio4 = $data['radio4'];
$radio5 = $data['radio5'];
$radio6 = $data['radio6'];
$radio7 = $data['radio7'];
$radio8 = $data['radio8'];
$radio9 = $data['radio9'];
$radio10 = $data['radio10'];
$radio11 = $data['radio11'];
$radio12 = $data['radio12'];
$radio13 = $data['radio13'];
$input1 = $data['input1'];
$input2 = $data['input2'];
$input3 = $data['input3'];
$input4 = $data['input4'];
$input5 = $data['input5'];
$input6 = $data['input6'];
$input7 = $data['input7'];
$input8 = $data['input8'];
$input9 = $data['input9'];
$input10 = $data['input10'];
$input11 = $data['input11'];
$input12 = $data['input12'];
$input13 = $data['input13'];
$input14 = $data['input14'];
$input15 = $data['input15'];
$input16 = $data['input16'];
$input17 = $data['input17'];
$input18 = $data['input18'];
$input19 = $data['input19'];
$input20 = $data['input20'];
$input21 = $data['input21'];
$input22 = $data['input22'];
$input23 = $data['input23'];
$input24 = $data['input24'];
$input25 = $data['input25'];
$input26 = $data['input26'];
$input27 = $data['input27'];
$input28 = $data['input28'];
$input29 = $data['input29'];
$input30 = $data['input30'];
$input31 = $data['input31'];
$input32 = $data['input32'];
$input33 = $data['input33'];
$input34 = $data['input34'];
$input35 = $data['input35'];
$input36 = $data['input36'];
$input37 = $data['input37'];
$input38 = $data['input38'];
$input39 = $data['input39'];
$input40 = $data['input40'];
$input41 = $data['input41'];
$input42 = $data['input42'];
$input43 = $data['input43'];
$input44 = $data['input44'];
$input45 = $data['input45'];
$input46 = $data['input46'];
$input47 = $data['input47'];
$input48 = $data['input48'];
$input49 = $data['input49'];
$input50 = $data['input50'];
$input51 = $data['input51'];
$input52 = $data['input52'];
$input53 = $data['input53'];
$input54 = $data['input54'];
$input55 = $data['input55'];
$input56 = $data['input56'];


$text = array('ใบสมัครเลขที่','รหัสประจำตัวประชาชน','เลือกคำนำหน้า','ชื่อ','นามสกุล','FIRST NAME','LAST NAME','ศาสนา','สัญชาติ','เชื้อชาติ','วันเดือนปีเกิด','เลือกเดือน','เลือกปี','รหัสประจำบ้าน','ที่อยู่ตามทะเบียนบ้าน เลขที่','ถนน','ซอย','จังหวัด','อำเภอ/เขต','ตำบล/แขวง','รหัสไปรษณีย์','เบอร์โทรศัพท์บ้าน','เบอร์มือถือ','น้ำหนัก','ส่วนสูง','หมู่เลือด','จากโรงเรียน','ที่อยู่ ตำบล/แขวง','อำเภอ/เขต','จังหวัด','ชื่อสกุล บิดา','รายได้ของบิดา','รหัสประจำตัวประชาชน','โทรศัพท์ที่สามารถติดต่อได้','ชื่อสกุล มารดา','รายได้ของมารดา','รหัสประจำตัวประชาชน','โทรศัพท์ที่สามารถติดต่อได้','จำนวนพี่น้องทั้งหมด (รวมตัวเอง)','กำลังศึกษาอยู่ จำนวน');

for ($i=1; $i < 51; $i++) { 
	if ($_SESSION['check'] == $i) {
		$checkEmpty[] = "<span style='color:red;'>".$text[$i-1]."</span>";
	} else {
		$checkEmpty[] = "<span>".$text[$i-1]."</span>";
	}
}

if ($type == 1) {
	$headerType = "ระดับชั้น ม.1 โครงการ English Program (EP)";
	$subType .= "
	<div class='hidden-lg' style='margin-top:3vh;'>
	<div class='col-md-12' style='margin-top:2vh;'>";
		if ($sType == 1) {
			$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
		} else {
			$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
		}
		$subType .= "วิทย์ - คณิต
	</div>
	<div class='col-md-12'>";
		if ($sType == 2) {
			$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
		} else {
			$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
		}
		$subType .= "คณิต - ภาษาจีน
	</div>
	</div>";
} elseif ($type == 2) {
	$headerType = "ระดับชั้น ม.1 โครงการ Intensive English Program (IEP)";
	$subType .=  "
	<div class='hidden-lg' style='margin-top:3vh;'>";
	if ($sType == 1) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
	}
		
		$subType .= "ในเขตพื้นที่บริการ สอบคัดเลือก
	<br>";
	if ($sType == 2) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
	}
		$subType .= "ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
	<br>";
	if ($sType == 3) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
	}
		$subType .= "นอกเขตพื้นที่บริการ สอบคัดเลือก
	<br>";
	if ($sType == 4) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
	}
		$subType .= "นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
	</div>";
} elseif ($type == 3) {
	$headerType = "ระดับชั้น ม.1 โครงการ ภาคปกติ (GP)";
	$subType =  "
	<div class='hidden-lg' style='margin-top:3vh;'>";
	if ($sType == 1) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
	}
		$subType .= "
		ในเขตพื้นที่บริการ สอบคัดเลือก
	<br>";
	if ($sType == 2) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
	}
		$subType .= "
		ในเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
	<br>";
	if ($sType == 3) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
	}
		$subType .= "
		นอกเขตพื้นที่บริการ สอบคัดเลือก
	<br>";
	if ($sType == 4) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
	}
		$subType .= "
		นอกเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
	</div>";
} elseif ($type == 4) {$headerType = "ระดับชั้น ม.4 โครงการ English Program (EP)";
		$subType =  "
	<div class='hidden-lg' style='margin-top:3vh;'>";
	if ($sType == 1) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
	}
		$subType .= "
		วิทย์ - คณิต
	<br>";
	if ($sType == 2) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
	}
		$subType .= "
		คณิต - อังกฤษ
	<br>";
	if ($sType == 3) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
	<br>";
	if ($sType == 4) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	<br>";
	if ($sType == 5) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก จีน
	</div>";
} elseif ($type == 5) {
	$headerType = "ระดับชั้น ม.4 โครงการ Intensive English Program (IEP)";
	$subType =  "
	<div class='hidden-lg' style='margin-top:3vh;'>";
	if ($sType == 1) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
	}
		$subType .= "
		วิทย์ - คณิต
	<br>";
	if ($sType == 2) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
	}
		$subType .= "
		คณิต - อังกฤษ
	<br>";
	if ($sType == 3) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
	<br>";
	if ($sType == 4) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	<br>";
	if ($sType == 5) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก จีน
	</div>";
} else {
	$headerType = "ระดับชั้น ม.4 โครงการ ภาคปกติ (GP)";
	$subType = "
	<div class='hidden-lg' style='margin-top:3vh;'>";
	if ($sType == 1) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
	}
		$subType .= "
		วิทย์ - คณิต
	<br>";
	if ($sType == 2) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
	}
		$subType .= "
		คณิต - อังกฤษ
	<br>";
	if ($sType == 3) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ฝรั่งเศษ
	<br>";
	if ($sType == 4) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก ญี่ปุ่น
	<br>";
	if ($sType == 5) {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
	} else {
		$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
	}
		$subType .= "
		อังกฤษ - ภาษา เลือก จีน
	<br>
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
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body style="font-size:17px;">
	<!-- phone -->
	<div class="hidden-lg" style="width:100vw; height:100vh; font-size:4vw;">
	<form id="form2" name="form2" method="post" action="change_edit_process_phone.php">
		<input type="hidden" name="type" value="<?php echo $type; ?>">
		<div class="container" style="height:8vh; width: 100%; background-color:#1c1c86; color:white;">
			<img src="image/logops.jpg" style="width:5vh;  float:left; margin-top: 1.5vh; border-radius: 50%;">
			<span style="font-size:4vw; float:left; margin-top:15px; color:white; padding-left:5px;">โรงเรียนโพธิสารพิทยากร</span>
		</div>
		
		<div class="container" style="margin-top:5vh; border-bottom:2px solid #1c1c86; padding-bottom:5vh;">
				<?php 
				if ($type == 1 || $type == 2 || $type == 3) {
					echo "
					<div class='col-md-4'>
						<input id='t13' type='radio' class='rdo' name='type' value='3'>
						<label for='t13'>GP</label>
					</div>";
				} else {
					echo "
					<div style='width:50%; float:left;'>
						<input id='t15' type='radio' class='rdo' name='type' value='5'>
						<label for='t15'>IEP</label>
					</div>
					<div style='width:50%; float:left;'>
						<input id='t16' type='radio' class='rdo' name='type' value='6'>
						<label for='t16'>GP</label>
					</div>";
				}
				?>
		
			<div style="font-weight:bold;">
				<div id="wt11"  class="col-md-12">
					<input id='abc' type='radio' name='sType' class='rdo' value='1' >
					<label for='abc'>วิทย์ - คณิต</label>
					<br>
					<input id='abv' type='radio' name='sType' class='rdo' value='2' >
					<label for='abv'>คณิต - ภาษาจีน</label>
				</div>
				<div id="wt12" class="col-md-12">
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
				</div>
				<div id="wt13" class="col-md-12">
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
				</div>
				<div id="wt14" class="col-md-12">
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
				</div>
				<div id="wt15" class="col-md-12">
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
				</div>
				<div id="wt16" class="col-md-12">
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
				</div>
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
				<input type='text' class='form-control' name='input56' onKeyUp='javascript:inputDigits(this);' maxlength='5' value=".$input56.">";
			}

			 ?>
			<br>
			<?php echo $checkEmpty[0]; ?> ดูจากใบสมัคร
			<input type="text" class="form-control" name="input1" maxlength="5" onKeyUp="javascript:inputDigits(this);">
			<br>
			
			<?php echo $checkEmpty[1]; ?> 
			<input name="input2" type="text" id="data" maxlength="13" value="<?php echo $input2; ?>" class="form-control" onKeyUp="javascript:inputDigits(this);">

			<br>
			<div style="width:50%; float:left;">
				<?php echo $checkEmpty[2]; ?> 
			</div>
			<div style="width:50%; float:left;">
				<select name="input3" class="form-control" value="<?php echo $input3; ?>">
					<?php 
					if ($input3 == 0) {
						echo "<option value='0' selected>เลือกคำนำหน้า</option>";
					} else {
						echo "<option value='0'>เลือกคำนำหน้า</option>";
					}
					if ($input3 == 1) {
						echo "<option value='1' selected>ด.ช.</option>";
					} else {
						echo "<option value='1'>ด.ช.</option>";
					}
					if ($input3 == 2) {
						echo "<option value='2' selected>ด.ญ.</option>";
					} else {
						echo "<option value='2'>ด.ญ.</option>";
					}
					if ($input3 == 3) {
						echo "<option value='3' selected>นาย</option>";
					} else {
						echo "<option value='3'>นาย</option>";
					}
					if ($input3 == 4) {
						echo "<option value='4' selected>น.ส.</option>";
					} else {
						echo "<option value='4'>น.ส.</option>";
					}

					 ?>
				</select>
			</div>
			<br><br>

			<div style="width:49%; margin-right: 2%; float:left;">
				<?php echo $checkEmpty[3]; ?>
				<input type="text" value="<?php echo $input4; ?>" class="form-control" name="input4">
			</div>
			<div style="width:49%; float:left;">
				<?php echo $checkEmpty[4]; ?>
				<input type="text" value="<?php echo $input5; ?>" name="input5" class="form-control">
			</div>
			<div style="width:49%; margin-right: 2%; float:left;">
				<?php echo $checkEmpty[5]; ?>
				<input type="text" value="<?php echo $input6; ?>" class="form-control" name="input6">
			</div>
			<div style="width:49%; float:left;">
				<?php echo $checkEmpty[6]; ?>
				<input type="text" value="<?php echo $input7; ?>" class="form-control" name="input7">
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
				<input type="text" value="<?php echo $input8; ?>" class="form-control" name="input8">
			</div>
			<div style="width:33%; margin-left:0.5%; margin-right:0.5%; float:left;">
				<input type="text" value="<?php echo $input9; ?>" class="form-control" name="input9">
			</div>
			<div style="width:33%; float:left;">
				<input type="text" value="<?php echo $input10; ?>" class="form-control" name="input10">
			</div>

			<div>
			<?php echo $checkEmpty[10]; ?>
			</div>
			<div style="margin-bottom:3vh; width:20%; float:left;">
				<select name="input11" class="form-control" value="<?php echo $input11; ?>">
					<?php 
					for ($i=1; $i < 32; $i++) { 
						if ($input11 == $i) {
							echo "<option value=".$i." selected>".$i."</option>";
						} else {
							echo "<option value=".$i.">".$i."</option>";	
						}
					}
					 ?>
				</select>
			</div>
			<div style="margin-bottom:3vh; width:50%; float:left;">
				<select name="input12" class="form-control" value="<?php echo $input12; ?>">
					<?php 
					$mount = array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
					$j = 0;
					for ($i=1; $i < 13; $i++) { 
						if ($input12 == $i) {
							echo "<option value=".$i." selected>".$mount[$j]."</option>";
						} else {
							echo "<option value=".$i.">".$mount[$j]."</option>";	
						}
						$j++;
					}
					 ?>
				</select>
			</div>
			<div style="margin-bottom:3vh; width:30%; float:left;">
				<select name="input13" class="form-control" value="<?php echo $input13; ?>">
					<?php 
					$year = 543+date("Y");
					$ayear = $year-10;
					$byear = $year-20;

					for ($i = $byear; $i < $ayear; $i++) { 
						if ($input13 == $i) {
							echo "<option value=".$i." selected>".$i."</option>";
						} else {
							echo "<option value=".$i.">".$i."</option>";
						}
					}
					 ?>
				</select>
			</div>

			<div>
				<?php echo $checkEmpty[13]; ?>
				<input type="text" value="<?php echo $input14; ?>" class="form-control" name="input14"  maxlength="11" onKeyUp="javascript:inputDigits(this);">
				<span style="font-size:14px;">
					(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)
				</span>
			</div>

			<div style="margin-top:3vh; float:left; width:68%; margin-right:2%;">
				<?php echo $checkEmpty[14]; ?>
				<input type="text" value="<?php echo $input15; ?>" class="form-control" name="input15">
			</div>
			<div style="margin-top:3vh; float:left; width:30%;">
				หมู่ที่
				<input type="text" value="<?php echo $input16; ?>" class="form-control" name="input16">
			</div>

			<div style="float:left; width:49%; margin-right:2%;">
				<?php echo $checkEmpty[15]; ?>
				<input type="text" value="<?php echo $input17; ?>" class="form-control" name="input17">
			</div>
			<div style="float:left; width:49%;">
				<?php echo $checkEmpty[16]; ?>
				<input type="text" value="<?php echo $input18; ?>" class="form-control" name="input18">
			</div>

			<div style="float:left; width:49%; margin-right:2%;">
				<?php echo $checkEmpty[19]; ?>
				<input type="text" value="<?php echo $input21; ?>" class="form-control" name="input21">
			</div>
			<div style="float:left; width:49%;">
				<?php echo $checkEmpty[18]; ?>
				<input type="text" value="<?php echo $input20; ?>" class="form-control" name="input20">
			</div>

			<?php echo $checkEmpty[17]; ?>
			<select name="input19" class="form-control" value="<?php echo $input19; ?>">
				<option value="">เลือกจังหวัด</option>
				<?php 
				$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
				$j = 0;
				for ($i=1; $i < 79; $i++) { 
					if ($input19 == $i) {
						echo "<option value=".$i." selected>".$province[$j]."</option>";
					} else {
						echo "<option value=".$i.">".$province[$j]."</option>";
					}
					$j++;
				}
				 ?>
			</select>		

			<div style="float:left; margin-top: 3vh; width:49%; margin-right:2%;">
				<?php echo $checkEmpty[20]; ?>
				<input type="text" value="<?php echo $input22; ?>" class="form-control" name="input22" maxlength="5">
			</div>
			<div style="float:left; margin-top: 3vh; width:49%;">
				<?php echo $checkEmpty[21]; ?>
				<input type="text" value="<?php echo $input23; ?>" class="form-control" name="input23" maxlength="10">
			</div>

			<div style="float:right; width:49%;">
				ความพิการ
				<br>
				<?php 
				if ($radio1 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='1'>";
				}

				 ?>
				ไม่พิการ
				<?php 
				if ($radio1 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='2'>";
				}

				 ?>
				พิการ 
			</div>
			<div style="float:right; width:49%; margin-right:2%;">
				<?php echo $checkEmpty[22]; ?>
				<input type="text" value="<?php echo $input24; ?>" class="form-control" name="input24" maxlength="10">
			</div>

			<div style="width:33%; margin-top: 3vh; float:left;">
				<?php echo $checkEmpty[23]; ?>
				<input type="text" value="<?php echo $input26; ?>" class="form-control" name="input26" maxlength="3">
			</div>
			<div style="width:33%; margin-top: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
				<?php echo $checkEmpty[24]; ?>
				<input type="text" value="<?php echo $input27; ?>" class="form-control" name="input27" maxlength="3">
			</div>
			<div style="width:33%; margin-top: 3vh; float:left;">
				<?php echo $checkEmpty[25]; ?>
				<select name="input28" class="form-control" value="<?php echo $input28; ?>">
					<?php 
					$blood = array('A','B','AB','O','ไม่ระบุ');
					$j = 0;
					for ($i=1; $i < 5; $i++) { 
						if ($input28 == $i) {
							echo "<option value=".$i." selected>".$blood[$j]."</option>";
						} else {
							echo "<option value=".$i.">".$blood[$j]."</option>";
						}
						$j++;
					}
					 ?>
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
				echo "<div>";
				if ($radio2 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
				}
				echo " กำลังเรียนชั้น ป.6 ";
				echo "</div>";
				echo "<div>";
				if ($radio2 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
				}
				echo " จบชั้น ป.6 ";
				echo "</div>";
				echo "<div>";
				if ($radio2 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
				}
				echo " จบการศึกษาเทียบเท่าชั้น ป.6";
				echo "</div>";
			} else {
				echo "<div>";
				if ($radio2 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
				}
				echo " กำลังเรียนชั้น ม.3 ";
				echo "</div>";
				echo "<div>";
				if ($radio2 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
				}
				echo " จบชั้น ม.3 ";
				echo "</div>";
				echo "<div>";
				if ($radio2 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
				}
				echo " จบการศึกษาเทียบเท่าชั้น ม.3";
				echo "</div>";
			}
			?>

			<div style="width:33%; margin-top: 3vh; float:left;">
				<span style="color:#1c1c86">สังกัด :</span>
			</div>
			<div style="width:33%; margin-top: 3vh; margin-right:0.5%; float:left;">
				<?php 
				if ($radio3 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='1'>";
				}
				echo "สปช.เดิม";
				?>
			</div>
			<div style="width:33%; margin-top: 3vh; float:left;">
				<?php 
				if ($radio3 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='2'>";
				}
				echo 'สพฐ.';
				?>
			</div>

			<div style="width:33%; margin-bottom: 3vh; float:left;">
				<?php 
				if ($radio3 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='3'>";
				}
				echo 'สช.';
				 ?>
			</div>
			<div style="width:33%; margin-bottom: 3vh; margin-left:0.5%; margin-right:0.5%; float:left;">
				<?php 
				if ($radio3 == 4) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='4' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='4'>";
				}
				echo 'กทม.';
				 ?>
			</div>
			<div style="width:33%; margin-bottom: 3vh; float:left;">
				<?php 
				if ($radio3 == 5) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='5' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio3' value='5'>";
				}
				echo 'อื่นๆ';
				 ?>
			</div>

			<div>
				<?php echo $checkEmpty[26]; ?>
				<input type="text" value="<?php echo $input29; ?>" class="form-control" name="input29">
			</div>
				
			<div style="margin-top:3vh;">
				ร.ร.ตั้งอยู่
			</div>
			<div style="font-size:3.5vw;">
				<?php 
				if ($radio4 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio4' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio4' value='1'>";
				}
				echo "ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)<br>";
				if ($radio4 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio4' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio4' value='2'>";
				}
				echo "นอกเขตพื้นที่";
				 ?>
			</div>

			<div style="float:left; margin-top: 3vh; width:49%; margin-right:2%;">
				<?php echo $checkEmpty[27]; ?>
				<input class="form-control" value="<?php echo $input30; ?>" type="text" name="input30">
			</div>
			<div style="float:left; margin-top: 3vh; width:49%;">
				<?php echo $checkEmpty[28]; ?>
				<input class="form-control" value="<?php echo $input31; ?>" type="text" name="input31">
			</div>

			<div>
				<?php echo $checkEmpty[29]; ?>
				<select name="input32" value="<?php echo $input32; ?>" class="form-control">
					<option value="">เลือกจังหวัด</option>
					<?php 
					$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
					$j = 0;
					for ($i=1; $i < 79; $i++) { 
						if ($input32 == $i) {
							echo "<option value=".$i." selected>".$province[$j]."</option>";
						} else {
							echo "<option value=".$i.">".$province[$j]."</option>";
						}
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
				<input type="text" value="<?php echo $input33; ?>" class="form-control" name="input33">
			</div>

			<div style="margin-top:3vh;">
				ความพิการของบิดา 
				<?php 
				if ($radio5 == 1) {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-1' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-1' value='1'>";
				}
				echo "ไม่พิการ";
				if ($radio5 == 2) {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-2' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-2' value='2'>";
				}
				echo "พิการ ";

				 ?>
			</div>
		
			<div style="float:left; margin-top: 3vh; width:34%; margin-right:1%;">
				<?php echo $checkEmpty[31]; ?>
			</div>
			<div style="float:left; margin-top: 3vh; width:49%; margin-right:1%;">
				<input type="text" value="<?php echo $input35; ?>" class="form-control" name="input35" style="width:150px;">
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
				<?php 
				if ($radio6 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='1'>";
				}
				echo "ค้าขาย";
				if ($radio6 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='2'>";
				}
				echo "รับจ้าง";
				if ($radio6 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='3'>";
				}
				echo "รับราชการ";
				if ($radio6 == 4) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='4' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='4'>";
				}
				echo "พนักงาน";

				?>
			</div>
			<div style="float:left;">
				<?php  
				if ($radio6 == 5) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='5' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='5'>";
				}
				echo "นักธุรกิจ";
				if ($radio6 == 6) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='6' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='6'>";
				}
				echo "อาชีพอิสระ";
				if ($radio6 == 7) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='7' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio6' value='7'>";
				}
				echo "ไม่ประกอบอาชีพ	";

				?>
			</div>
		</div>
		<div class="container" style="margin-top:3vh;">
			<div>
				<?php echo $checkEmpty[32]; ?>
				<input type="text" value="<?php echo $input36; ?>" class="form-control" name="input36" maxlength="13" onKeyUp="javascript:inputDigits(this);">
			</div>
			<div>
				<?php echo $checkEmpty[33]; ?>
				<input type="text" value="<?php echo $input37; ?>" class="form-control" name="input37" maxlength="10">
			</div>
			

			<div style="margin-top:3vh;">
				<?php echo $checkEmpty[34]; ?>
				<input type="text" value="<?php echo $input38; ?>" class="form-control" name="input38">
			</div>

			<div style="margin-top:3vh;">
				ความพิการของมารดา 
				<?php 
				if ($radio7 == 1) {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-1' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-1' value='1'>";
				}
				echo "ไม่พิการ";
				if ($radio7 == 2) {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-2' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-2' value='2'>";
				}
				echo "พิการ ";

				 ?>
			</div>
		
			<div style="float:left; margin-top: 3vh; width:34%; margin-right:1%;">
				<?php echo $checkEmpty[35]; ?>
			</div>
			<div style="float:left; margin-top: 3vh; width:49%; margin-right:1%;">
				<input type="text" value="<?php echo $input40; ?>" class="form-control" name="input40" style="width:150px;">
			</div>
			<div style="float:left; margin-top: 3vh; width:15">
				บาท/ปี
			</div>
		</div>
		<div class="container">
			<div style="float:left;">
				อาชีพของมารดา
			</div>
			<div style="float:left;">
				<?php 
				if ($radio8 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='1'>";
				}
				echo "ค้าขาย";
				if ($radio8 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='2'>";
				}
				echo "รับจ้าง";
				if ($radio8 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='3'>";
				}
				echo "รับราชการ";
				if ($radio8 == 4) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='4' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='4'>";
				}
				echo "พนักงาน";
				 ?>
			</div>
			<div style="float:left;">
				<?php 
				if ($radio8 == 5) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='5' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='5'>";
				}
				echo "นักธุรกิจ";
				if ($radio8 == 6) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='6' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='6'>";
				}
				echo "อาชีพอิสระ";
				if ($radio8 == 7) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='7' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio8' value='7'>";
				}
				echo "ไม่ประกอบอาชีพ	";
				 ?>
			</div>
		</div>
		<div class="container" style="margin-top:3vh;">
			<div>
				<?php echo $checkEmpty[36]; ?>
				<input type="text" value="<?php echo $input41; ?>" class="form-control" name="input41" maxlength="13" onKeyUp="javascript:inputDigits(this);">
			</div>
			<div>
				<?php echo $checkEmpty[37]; ?>
				<input type="text" value="<?php echo $input42; ?>" class="form-control" name="input42" maxlength="10">
			</div>

			<div style="margin-top:3vh;">
				สถานภาพของบิดา-มารดา
			</div>
			<div>
				<?php 
				if ($radio9 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='1'>";
				}
				echo "อยู่ด้วยกัน";
				if ($radio9 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='2'>";
				}
				echo "แยกกันอยู่";
				if ($radio9 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='3'>";
				}
				echo "หย่าร้าง";
				 ?>
			</div>
			<div>
				<?php 
				if ($radio9 == 4) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='4' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='4'>";
				}
				echo "บิดาถึงแก่กรรม";
				if ($radio9 == 5) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='5' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='5'>";
				}
				echo "มารดาถึงแก่กรรม";
				 ?>
			</div>
			<div>
				<?php 
				if ($radio9 == 6) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='6' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='6'>";
				}
				echo "บิดาแต่งงานใหม่";
				if ($radio9 == 7) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='7' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio9' value='7'>";
				}
				echo "มารดาแต่งงานใหม่";
				 ?>
			</div>

			<div style="width:70%; margin-top:3vh; float:left;">
				<?php echo $checkEmpty[38]; ?> 
			</div>
			<div style="width:20%; margin-top:3vh; float:left;">
				<input type="text" value="<?php echo $input43; ?>" class="form-control" name="input43" style="width:50px;">
			</div>
			<div style="width:10%; margin-top:3vh; float:left;">
				คน
			</div>

			<div style="width:70%; margin-top:3vh; float:left;">
				<?php echo $checkEmpty[39]; ?>
			</div>
			<div style="width:20%; margin-top:3vh; float:left;">
				<input type="text" value="<?php echo $input44; ?>" class="form-control" name="input44" style="width:50px;">
			</div>
			<div style="width:10%; margin-top:3vh; float:left;">
				คน
			</div>
		</div>

		<div class="container" style="margin-top:5vh;padding-bottom:5vh;">
			<span style="font-size:6vw; font-weight:bold; color:#1c1c86">ข้อมูลผู้ปกครอง</span>

			<div style="margin-top:3vh;">
				เกี่ยวข้างกับนักเรียนเป็น
			</div>

			<div>
				<?php 
				if ($radio10 == 1) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-1' value='1' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-1' value='1'>";
				}
				echo "บิดา";
				if ($radio10 == 2) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-2' value='2' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-2' value='2'>";
				}
				echo "มารดา";
				 ?>
				<br>
				<?php 
				if ($radio10 == 3) {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-3' value='3' checked>";
				} else {
					echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-3' value='3'>";
				}
				echo "อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)";
				 ?>
			</div>

			<?php 
			if ($radio10 == 1) {
				$text71 = "บิดา";
				echo "
				<div style='margin-top:3vh;'>
					ชื่อสกุล ผู้ปกครอง
					<input type='text' class='form-control' name='input45' value='$input33'>
				</div>
				<div>
					รายได้ของผู้ปกครอง 
					<div style='width:79%; margin-right: 1%; float:left;'>
						<input type='text' class='form-control' name='input46' value=".$input35.">
					</div>
					<div style='width:19%; padding-top: 5px; float:left;'>
						บาท/ปี
					</div>
				</div>
			</div>
			<div class='container'>
				<div>
					มีความสัมพันธ์กับนักเรียนเป็น 
					<input type='text' class='form-control' name='input47' value=".$text71.">
				</div>

				<div style='margin-top:3vh;'>
					อาชีพของผู้ปกครอง 
				</div>
				<div>";
					if ($radio6 == 1) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1'>";
					}
					echo 'ค้าขาย';
					if ($radio6 == 2) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2'>";
					}
					echo 'รับจ้าง';
					if ($radio6 == 3) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3'>";
					}
					echo 'รับราชการ';
					if ($radio6 == 4) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4'>";
					}
					echo 'พนักงาน
				</div>
				<div>';
					if ($radio6 == 5) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5'>";
					}
					echo 'นักธุรกิจ';
					if ($radio6 == 6) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6'>";
					}
					echo 'อาชีพอิสระ';
					if ($radio6 == 7) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7'>";
					}
					echo "ไม่ประกอบอาชีพ
				</div>

				<div style='margin-top:3vh;'>
					รหัสประจำตัวประชาชน 
					<input type='text' value=".$input36." class='form-control' name='input48' maxlength='13'>
				</div>
				<div>
					โทรศัพท์ที่สามารถติดต่อได้
					<input type='text' value=".$input37." class='form-control' name='input49' maxlength='10'>
				</div>";
			} elseif ($radio10 == 2) {
				$text72 = "มารดา";
				echo "
				<div style='margin-top:3vh;'>
					ชื่อสกุล ผู้ปกครอง
					<input type='text' class='form-control' name='input45' value='$input38'>
				</div>
				<div>
					รายได้ของผู้ปกครอง 
					<div style='width:79%; margin-right: 1%; float:left;'>
						<input type='text' class='form-control' name='input46' value=".$input40.">
					</div>
					<div style='width:19%; padding-top: 5px; float:left;'>
						บาท/ปี
					</div>
				</div>
			</div>
			<div class='container'>
				<div>
					มีความสัมพันธ์กับนักเรียนเป็น 
					<input type='text' class='form-control' name='input47' value=".$text72.">
				</div>

				<div style='margin-top:3vh;'>
					อาชีพของผู้ปกครอง 
				</div>
				<div>";
					if ($radio8 == 1) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1'>";
					}
					echo 'ค้าขาย';
					if ($radio8 == 2) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2'>";
					}
					echo 'รับจ้าง';
					if ($radio8 == 3) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3'>";
					}
					echo 'รับราชการ';
					if ($radio8 == 4) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4'>";
					}
					echo 'พนักงาน
				</div>
				<div>';
					if ($radio6 == 5) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5'>";
					}
					echo 'นักธุรกิจ';
					if ($radio8 == 6) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6'>";
					}
					echo 'อาชีพอิสระ';
					if ($radio8 == 7) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7'>";
					}
					echo "ไม่ประกอบอาชีพ
				</div>

				<div style='margin-top:3vh;'>
					รหัสประจำตัวประชาชน 
					<input type='text' value=".$input41." class='form-control' name='input48' maxlength='13'>
				</div>
				<div>
					โทรศัพท์ที่สามารถติดต่อได้
					<input type='text' value=".$input42." class='form-control' name='input49' maxlength='10'>
				</div>";
			} else {
				echo "
				<div style='margin-top:3vh;'>
					ชื่อสกุล ผู้ปกครอง
					<input type='text' class='form-control' name='input45' value='$input45'>
				</div>
				<div>
					รายได้ของผู้ปกครอง 
					<div style='width:79%; margin-right: 1%; float:left;'>
						<input type='text' class='form-control' name='input46' value=".$input46.">
					</div>
					<div style='width:19%; padding-top: 5px; float:left;'>
						บาท/ปี
					</div>
				</div>
			</div>
			<div class='container'>
				<div>
					มีความสัมพันธ์กับนักเรียนเป็น 
					<input type='text' class='form-control' name='input47' value=".$input47.">
				</div>

				<div style='margin-top:3vh;'>
					อาชีพของผู้ปกครอง 
				</div>
				<div>";
					if ($radio12 == 1) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='1'>";
					}
					echo 'ค้าขาย';
					if ($radio12 == 2) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='2'>";
					}
					echo 'รับจ้าง';
					if ($radio12 == 3) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='3'>";
					}
					echo 'รับราชการ';
					if ($radio12 == 4) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='4'>";
					}
					echo 'พนักงาน
				</div>
				<div>';
					if ($radio12 == 5) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='5'>";
					}
					echo 'นักธุรกิจ';
					if ($radio12 == 6) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='6'>";
					}
					echo 'อาชีพอิสระ';
					if ($radio12 == 7) {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7' checked>";
					} else {
						echo "<input readonly id='readonly' style='width:1em; height:1em;' type='radio' name='radio12' value='7'>";
					}
					echo "ไม่ประกอบอาชีพ
				</div>

				<div style='margin-top:3vh;'>
					รหัสประจำตัวประชาชน 
					<input type='text' value=".$input48." class='form-control' name='input48' maxlength='13'>
				</div>
				<div>
					โทรศัพท์ที่สามารถติดต่อได้
					<input type='text' value=".$input49." class='form-control' name='input49' maxlength='10'>
				</div>";
			}
			 ?>
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
				<input type='text' class='form-control' name='input54' value=".$input54.">
				เกี่ยวข้องกับนักเรียนเป็น 
				<input type='text' class='form-control' name='input55' value=".$input55.">
			</div>
			<div class='container' style='margin-top:3vh;'>
				<div>
					นักเรียนอาศัยอยู่ในเขตพื้นที่บริการ (นับจากวันที่ย้ายเข้าอยู่ถึงวันที่ 16 พฤษภาคม พ.ศ. 2560)
				</div>
				<div style='width:49%; margin-top: 3vh; float:left; margin-right:2%;'>";
					if ($radio13 == 1) {
						echo "<input readonly id='readonly' type='radio' name='radio13' class='rdo' value='1' checked>";
					} else {
						echo "<input readonly id='readonly' type='radio' name='radio13' class='rdo' value='1'>";
					}
					echo "ครบ 2 ปี
				</div>
				<div style='width:49%; margin-top: 3vh; float:left;'>";
					if ($radio13 == 2) {
						echo "<input readonly id='readonly' type='radio' name='radio13' class='rdo' value='2' checked>";
					} else {
						echo "<input readonly id='readonly' type='radio' name='radio13' class='rdo' value='2'>";
					}
					echo "ไม่ครบ 2 ปี
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
				<input type="text" value="<?php echo $input50; ?>" class="form-control" name="input50" style="width:50px;" maxlength="5" onKeyUp="javascript:inputDigits(this);">
			</div>
			<div style="width:25%; float:left; margin-top:3vh; margin-bottom:3vh;">
				หรือ ร้อยละ
			</div>
			<div style="width:15%; float:left; margin-top:3vh; margin-bottom:3vh;">
				<input type="text" value="<?php echo $input51; ?>" class="form-control" name="input51" style="width:50px;" maxlength="5" onKeyUp="javascript:inputDigits(this);">
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
				<input type="text" value="<?php echo $input52; ?>" name="input52" class="form-control" onKeyUp="javascript:inputDigits(this);" maxlength="5">
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
				<input type="text" value="<?php echo $input53; ?>" class="form-control" name="input53" style="width:50px;" onKeyUp="javascript:inputDigits(this);" maxlength="5">
			</div>
			<div style="width:100%; float:left; margin-top:3vh; padding-bottom:3vh;">
				<input type="submit" name="submit" value="ยืนยันการแก้ไขข้อมูล" class="form-control">
			</div>
		</div>
	</div>
	</form>

	<script src="js/jquery.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#form-home").hide();

		$("#wt11").hide();
		$("#wt12").hide();
		$("#wt13").hide();
		$("#wt14").hide();
		$("#wt15").hide();
		$("#wt16").hide();	
		$("#t11").click(function(){
			$("#wt11").show();
			$("#wt12").hide();
			$("#wt13").hide();
			$("#wt14").hide();
			$("#wt15").hide();
			$("#wt16").hide();
		});
		$("#t12").click(function(){
			$("#wt12").show();
			$("#wt11").hide();
			$("#wt13").hide();
			$("#wt14").hide();
			$("#wt15").hide();
			$("#wt16").hide();
		});
		$("#t13").click(function(){
			$("#wt13").show();
			$("#wt11").hide();
			$("#wt12").hide();
			$("#wt14").hide();
			$("#wt15").hide();
			$("#wt16").hide();
		});
		$("#t14").click(function(){
			$("#wt14").show();
			$("#wt11").hide();
			$("#wt12").hide();
			$("#wt13").hide();
			$("#wt15").hide();
			$("#wt16").hide();
		});
		$("#t15").click(function(){
			$("#wt15").show();
			$("#wt11").hide();
			$("#wt12").hide();
			$("#wt13").hide();
			$("#wt14").hide();
			$("#wt16").hide();
		});
		$("#t16").click(function(){
			$("#wt16").show();
			$("#wt11").hide();
			$("#wt12").hide();
			$("#wt13").hide();
			$("#wt14").hide();
			$("#wt15").hide();
		});

	});
</script>