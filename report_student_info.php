<?php
echo "<meta charset='UTF-8'>";
include('config.php');
session_start();
error_reporting( error_reporting() & ~E_NOTICE );

if ($_SESSION['id_user'] != $_GET['id_student']) {
	echo "<script language='javascript'>";
	echo "location='login.php';";
	echo "</script>";
}

$id_student = $_GET['id_student'];
$sql = "SELECT * FROM history_ps WHERE id_history = $id_student";
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

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	
	<title>ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</title>

	<link href="https://fonts.googleapis.com/css?family=Mitr:300" rel="stylesheet">

	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- fa -->
	

	<!-- <script>
    	window.print();
	</script> -->

</head>
<body style="font-size:17px;">
	<form id="form1" name="form1" method="post" action="edit_student_process.php">
	<?php

	if ($type == 1) {
		$headerType = "English Program (EP)";
		$subType .= "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
			$subType .= "วิทย์ - คณิต
		</td></tr>
		<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
			$subType .= "คณิต - ภาษาจีน
		</tr></td></table>";
	} elseif ($type == 2) {
		$headerType = "Intensive English Program (IEP)";
		$subType .= "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
				
				$subType .= "ในเขตพื้นที่บริการ สอบคัดเลือก
			</td></tr>
			<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
				$subType .= "ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 3) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
			}
				$subType .= "นอกเขตพื้นที่บริการ สอบคัดเลือก
			</td></tr>
			<tr><td>";
			if ($sType == 4) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
			}
				$subType .= "นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ
			</tr></td></table>
		</tr></td></table>";
	} elseif ($type == 3) {
		$headerType = "ภาคปกติ (GP)";
		$subType = "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
				$subType .= "
				ในเขตพื้นที่บริการ สอบคัดเลือก
			</td></tr>
			<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
				$subType .= "
				ในเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 3) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
			}
				$subType .= "
				นอกเขตพื้นที่บริการ สอบคัดเลือก
			</td></tr>
			<tr><td>";
			if ($sType == 4) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
			}
				$subType .= "
				นอกเขตพื้นที่บริการ ความสามารถพิเศษกีฬา
			</tr></td></table>
		</tr></td></table>";
	} elseif ($type == 4) {
		$headerType = "English Program (EP)";
		$subType = "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
				$subType .= "
				วิทย์ - คณิต
			</td></tr>
			<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
				$subType .= "
				คณิต - อังกฤษ
			</tr></td></table>
		</tr></td>
		<tr><td>
			<table><tr><td>";
			if ($sType == 3) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</td></tr>
			<tr><td>";
			if ($sType == 4) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</tr></td></table>
		</tr></td>
		<tr><td>
			<table><tr><td>";
			if ($sType == 5) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก จีน
			</tr></td></table>
		</tr></td></table>";
	} elseif ($type == 5) {
		$headerType = "Intensive English Program (IEP)";
		$subType = "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
				$subType .= "
				วิทย์ - คณิต
			</td></tr>
			<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
				$subType .= "
				คณิต - อังกฤษ
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 3) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</td></tr>
			<tr><td>";
			if ($sType == 4) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 5) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก จีน
			</tr></td></table>
		</tr></td></table>";
	} else {
		$headerType = "ภาคปกติ (GP)";
		$subType = "<table><tr><td>
			<p>ประเภทการคัดเลือก
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 1) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='1'>";
			}
				$subType .= "
				วิทย์ - คณิต
			</td></tr>
			<tr><td>";
			if ($sType == 2) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='2'>";
			}
				$subType .= "
				คณิต - อังกฤษ
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 3) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='3'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ฝรั่งเศษ
			</td></tr>
			<tr><td>";
			if ($sType == 4) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='4'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก ญี่ปุ่น
			</tr></td></table>
		</td></tr>
		<tr><td>
			<table><tr><td>";
			if ($sType == 5) {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5' checked>";
			} else {
				$subType .= "<input type='radio' name='sType' class='rdo' value='5'>";
			}
				$subType .= "
				อังกฤษ - ภาษา เลือก จีน
			</tr></td></table>
		</tr></td></table>";
	}

	?>
	<div class="container">

		<table>
			<tr>
				<td>
					<?php echo $headerType; ?>	
				</td>
				<td>
					<?php echo $subType; ?>	
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td width="20%">
					ข้อมูลนักเรียน
				</td>
				<td width="40%">
					เลขที่ผู้สมัคร
					<input  type="text" name="input1" value="<?php echo $input1; ?>">
				</td>
				<td width="40%">
					รหัสประจำตัวประชาชนนักเรียน 
					<input  name="input2" value="<?php echo $input2; ?>" type="text" id="data" maxlength="13">
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="20%">
					<select name="input3" value="<?php echo $input3; ?>">
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
				</td>
				<td width="40%">
					ชื่อ
					<input  type="text" name="input4" value="<?php echo $input4; ?>">
				</td>
				<td width="40%">
					นามสกุล
					<input  type="text" name="input5" value="<?php echo $input5; ?>">
				</td>
			</tr>

			<tr>
				<td width="20%">
				</dt>
				<td  width="40%">
					FIRST NAME
					<input  type="text" name="input6" value="<?php echo $input6; ?>">
				</td>
				<td  width="40%">
					LAST NAME
					<input  type="text" name="input7" value="<?php echo $input7; ?>">
				</td>
			</tr>

			<tr>
				<td>
					ศาสนา
					<input  type="text" name="input8" value="<?php echo $input8; ?>">
					สัญชาติ
					<input  type="text" name="input9" value="<?php echo $input9; ?>">
					เชื้อชาติ
					<input  type="text" name="input10" value="<?php echo $input10; ?>">
				</td>
				<td>
					วันเดือนปีเกิด 
					<select name="input11" value="<?php echo $input11; ?>">
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
					<select name="input12" value="<?php echo $input12; ?>">
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
					<select name="input13" value="<?php echo $input13; ?>">
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
				</td>
			</tr>

			<tr>
				<td>
					รหัสประจำบ้าน
					<input  type="text" name="input14" value="<?php echo $input14; ?>">
					<p>(ดูจากทะเบียนบ้านที่นักเรียนอาศัยอยู่)</p>
				</td>
				<td>
					ที่อยู่ตามทะเบียนบ้าน เลขที่ 
					<input  type="text"  name="input15" value="<?php echo $input15; ?>">
					หมู่ที่ 
					<input  type="text"  name="input16" value="<?php echo $input16; ?>">
				</td>
			</tr>

			<tr>
				<td>
					ถนน
					<input  type="text" name="input17" value="<?php echo $input17; ?>" >
				</td>
				<td>
					ซอย
					<input  type="text" name="input18" value="<?php echo $input18; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					จังหวัด
					<select name="input19" value="<?php echo $input19; ?>" >
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
				</td>
				<td>
					อำเภอ/เขต
					<input  type="text" name="input20" value="<?php echo $input20; ?>" >
				</td>
				<td>
					ตำบล/แขวง
					<input  type="text" name="input21" value="<?php echo $input21; ?>" >
				</td>
			</tr>

			<tr>
				<td>
					รหัสไปรษณีย์
					<input  type="text" name="input22" value="<?php echo $input22; ?>">
				</td>
				<td>
					เบอร์โทรศัพท์บ้าน
					<input  type="text" name="input23" value="<?php echo $input23; ?>">
				</td>
				<td>
					เบอร์มือถือ
					<input  type="text" name="input24" value="<?php echo $input24; ?>">
				</td>
			</tr>

			<tr>
				<td>
					ความพิการ
					<?php 
					if ($radio1 == 1) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='1' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='1'>";
					}

					 ?>
					ไม่พิการ
					<?php 
					if ($radio1 == 2) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='2' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio1' id='radio1-1' value='2'>";
					}

					 ?>
					พิการ 
				</td>
				<td>
					ด้าน
					<input  type="text" name="input25" value="<?php echo $input25; ?>">
				</td>
				<td>
					น้ำหนัก
					<input  type="text" name="input26" value="<?php echo $input26; ?>">
					กิโลกรัม
					&nbspส่วนสูง
					<input  type="text" name="input27" value="<?php echo $input27; ?>">
					เซนติเมตร
					&nbspหมู่เลือด
					<select name="input28" value="<?php echo $input28; ?>">
						<?php 
						$blood = array('A','B','AB','O');
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
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
					ข้อมูลการศึกษา (โรงเรียนเดิม)
				</td>
			</tr>

			<tr>
				<td>
					<table><tr><td>
						<?php 
						if ($type == 1 OR $type == 2 OR $type == 3) {
							if ($radio2 == 1) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='1' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
							}
							echo " กำลังเรียนชั้น ป.6 ";
							if ($radio2 == 2) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='2' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
							}
							echo " จบชั้น ป.6 ";
							if ($radio2 == 3) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='3' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
							}
							echo " จบการศึกษาเทียบเท่าชั้น ป.6";
						} else {
							if ($radio2 == 1) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='1' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='1'>";
							}
							echo " กำลังเรียนชั้น ม.3 ";
							if ($radio2 == 2) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='2' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='2'>";
							}
							echo " จบชั้น ม.3 ";
							if ($radio2 == 3) {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='3' checked>";
							} else {
								echo "<input  style='width:1em; height:1em;' type='radio' name='radio2' value='3'>";
							}
							echo " จบการศึกษาเทียบเท่าชั้น ม.3";
						}
						?>
					</td></tr>
					
					<tr><td>
						สังกัด
						<?php 
						if ($radio3 == 1) {
							echo "<input  style='width:1em; height:1em; margin-left:20px;' type='radio' name='radio3' value='1' checked>";
						} else {
							echo "<input  style='width:1em; height:1em; margin-left:20px;' type='radio' name='radio3' value='1'>";
						}
						echo "สปช.เดิม";
						if ($radio3 == 2) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='2' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='2'>";
						}
						echo 'สพฐ.';
						if ($radio3 == 3) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='3' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='3'>";
						}
						echo 'สช.';
						if ($radio3 == 4) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='4' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='4'>";
						}
						echo 'กทม.';
						if ($radio3 == 5) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='5' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio3' value='5'>";
						}
						echo 'อื่นๆ';
						?>
					</td></tr>
				</table>

				<table>
					<tr>
						<td>
						จากโรงเรียน
						<input  type="text" name="input29" value="<?php echo $input29; ?>">
						</td>
					</tr>
					<tr>
						<td>
						<?php  
						echo "ร.ร.ตั้งอยู่";
						if ($radio4 == 1) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio4' value='1' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio4' value='1'>";
						}
						echo "ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)";
						if ($radio4 == 2) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio4' value='2' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio4' value='2'>";
						}
						echo "นอกเขตพื้นที่";
						?>
						</td>
					</tr>
				</table>

				<div class="col-md-12" id="form-line">
					ที่อยู่ ตำบล/แขวง 
					<input  type="text" name="input30" value="<?php echo $input30; ?>">
					อำเภอ/เขต
					<input  type="text" name="input31" value="<?php echo $input31; ?>">
					จังหวัด
					<input  type="text" name="input32" value="<?php echo $input32; ?>">
				</div>	
			</div>					
		</div>						
		<table>
			<div class="col-md-12">
				<div class="col-md-12">
					<h2 style="margin-bottom:10px; font-weight:bold;">ข้อมูล บิดา - มารดา</h2>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-5">
					ชื่อสกุล บิดา
					<input  type="text" name="input33" value="<?php echo $input33; ?>" style="width:300px;">
				</div>
				<div class="col-md-4">
					<?php  
					echo "ความพิการของบิดา";
					if ($radio5 == 1) {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-1' value='1' checked>";
					} else {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-1' value='1'>";
					}
					echo "ไม่พิการ";
					if ($radio5 == 2) {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-2' value='2' checked>";
					} else {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio5' id='radio5-2' value='2'>";
					}
					echo "พิการ ";
					?>
				</div>
				<div class="col-md-3" id="radio5-type">
					ด้าน
					<input  type="text" name="input34" value="<?php echo $input34; ?>" style="width:150px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					รายได้ของบิดา 
					<input  type="text" name="input35" value="<?php echo $input35; ?>" style="width:150px;">
					บาท/ปี
				</div>
				<div class="col-md-2" style="text-align:right;">
					อาชีพของบิดา
				</div>
				<div class="col-md-6">
					<?php 
					if ($radio6 == 1) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='1' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='1'>";
					}
					echo "ค้าขาย";
					if ($radio6 == 2) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='2' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='2'>";
					}
					echo "รับจ้าง";
					if ($radio6 == 3) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='3' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='3'>";
					}
					echo "รับราชการ";
					if ($radio6 == 4) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='4' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='4'>";
					}
					echo "พนักงาน";
					if ($radio6 == 5) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='5' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='5'>";
					}
					echo "นักธุรกิจ";
					echo "<br>";
					if ($radio6 == 6) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='6' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='6'>";
					}
					echo "อาชีพอิสระ";
					if ($radio6 == 7) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='7' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio6' value='7'>";
					}
					echo "ไม่ประกอบอาชีพ	";
					 ?>
				</div>
			</div>
			
			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					รหัสประจำตัวประชาชนบิดา 
					<input  type="text" name="input36" value="<?php echo $input36; ?>" maxlength="13">	
				</div>
				<div class="col-md-6">
					โทรศัพท์ที่สามารถติดต่อได้
					<input  type="text" name="input37" value="<?php echo $input37; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-5">
					ชื่อสกุล มารดา
					<input  type="text" name="input38" value="<?php echo $input38; ?>" style="width:300px;">
				</div>
				<div class="col-md-4">
					<?php 
					echo "ความพิการของมารดา";
					if ($radio7 == 1) {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-1' value='1' checked>";
					} else {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-1' value='1'>";
					}
					echo "ไม่พิการ";
					if ($radio7 == 2) {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-2' value='2' checked>";
					} else {
						echo "<input  type='radio' style='width:1em; height:1em;' name='radio7' id='radio7-2' value='2'>";
					}
					echo "พิการ ";
					 ?>
				</div>
				<div class="col-md-3" id="radio7-type">
					ด้าน
					<input  type="text" name="input39" value="<?php echo $input39; ?>" style="width:150px;">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-4">
					รายได้ของมารดา 
					<input  type="text" name="input40" value="<?php echo $input40; ?>" style="width:150px;">
					บาท/ปี
				</div>
				<div class="col-md-2" style="text-align:right;">
					อาชีพของมารดา
				</div>
				<div class="col-md-6">
					<?php 
					if ($radio8 == 1) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='1' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='1'>";
					}
					echo "ค้าขาย";
					if ($radio8 == 2) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='2' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='2'>";
					}
					echo "รับจ้าง";
					if ($radio8 == 3) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='3' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='3'>";
					}
					echo "รับราชการ";
					if ($radio8 == 4) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='4' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='4'>";
					}
					echo "พนักงาน";
					if ($radio8 == 5) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='5' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='5'>";
					}
					echo "นักธุรกิจ";
					echo "<br>";
					if ($radio8 == 6) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='6' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='6'>";
					}
					echo "อาชีพอิสระ";
					if ($radio8 == 7) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='7' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio8' value='7'>";
					}
					echo "ไม่ประกอบอาชีพ	";
					 ?>
				</div>
			</div>
			
			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					รหัสประจำตัวประชาชนมารดา 
					<input  type="text" name="input41" value="<?php echo $input41; ?>" maxlength="13">	
				</div>
				<div class="col-md-6">
					โทรศัพท์ที่สามารถติดต่อได้
					<input  type="text" name="input42" value="<?php echo $input42; ?>">
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-12">
					สถานภาพของบิดา-มารดา
					<br>
					<?php 
					if ($radio9 == 1) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='1' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='1'>";
					}
					echo "อยู่ด้วยกัน";
					if ($radio9 == 2) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='2' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='2'>";
					}
					echo "แยกกันอยู่";
					if ($radio9 == 3) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='3' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='3'>";
					}
					echo "หย่าร้าง";
					if ($radio9 == 4) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='4' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='4'>";
					}
					echo "บิดาถึงแก่กรรม";
					if ($radio9 == 5) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='5' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='5'>";
					}
					echo "มารดาถึงแก่กรรม";
					if ($radio9 == 6) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='6' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='6'>";
					}
					echo "บิดาแต่งงานใหม่";
					if ($radio9 == 7) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='7' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio9' value='7'>";
					}
					echo "มารดาแต่งงานใหม่";
					 ?>
				</div>
			</div>

			<div class="col-md-12" id="form-line">
				<div class="col-md-6">
					จำนวนพี่น้องทั้งหมด (รวมตัวเอง) 
					<input  type="text" name="input43" value="<?php echo $input43; ?>" style="width:50px;">
					คน
				</div>
				<div class="col-md-6">
					กำลังศึกษาอยู่ จำนวน
					<input  type="text" name="input44" value="<?php echo $input44; ?>" style="width:50px;">
					คน
				</div>
			</div>
		</div>
		<table>
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
					<?php 
					if ($radio10 == 1) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-1' value='1' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-1' value='1'>";
					}
					echo "บิดา";
					if ($radio10 == 2) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-2' value='2' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-2' value='2'>";
					}
					echo "มารดา";
					if ($radio10 == 3) {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-3' value='3' checked>";
					} else {
						echo "<input  style='width:1em; height:1em;' type='radio' name='radio10' id='radio10-3' value='3'>";
					}
					echo "อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)";
					 ?>
				</div>
			</div>

			<span id="parent">
				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						ชื่อสกุล ผู้ปกครอง
						<input  type="text" name="input45" value="<?php echo $input45; ?>">
					</div>
					<div class="col-md-6">
						รายได้ของผู้ปกครอง 
						<input  type="text" name="input46" value="<?php echo $input46; ?>">
						บาท/ปี
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						ความพิการของผู้ปกครอง 
						<br>
						<?php 
						if ($radio11 == 1) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio11' id='radio11-1' value='1' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio11' id='radio11-1' value='1'>";
						}
						echo "ไม่พิการ";
						if ($radio11 == 2) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio11' id='radio11-2' value='2' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio11' id='radio11-2' value='2'>";
						}
						echo "พิการ ";
						 ?>
						<span id="radio11-type">
							ด้าน
							<input  type="text" name='input47' value="<?php echo $input47; ?>">
						</span>
					</div>
					<div class="col-md-6">
						<?php 
						if ($radio12 == 1) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='1' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='1'>";
						}
						echo "ค้าขาย";
						if ($radio12 == 2) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='2' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='2'>";
						}
						echo "รับจ้าง";
						if ($radio12 == 3) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='3' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='3'>";
						}
						echo "รับราชการ";
						if ($radio12 == 4) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='4' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='4'>";
						}
						echo "พนักงาน";
						if ($radio12 == 5) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='5' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='5'>";
						}
						echo "นักธุรกิจ";
						echo "<br>";
						if ($radio12 == 6) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='6' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='6'>";
						}
						echo "อาชีพอิสระ";
						if ($radio12 == 7) {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='7' checked>";
						} else {
							echo "<input  style='width:1em; height:1em;' type='radio' name='radio12' value='7'>";
						}
						echo "ไม่ประกอบอาชีพ	";
						 ?>
					</div>
				</div>

				<div class="col-md-12" id="form-line">
					<div class="col-md-6">
						รหัสประจำตัวประชาชนผู้ปกครอง 
						<input  type="text" name="input48" value="<?php echo $input48; ?>" maxlength="13">
					</div>
					<div class="col-md-6">
						โทรศัพท์ที่สามารถติดต่อได้
						<input  type="text" name="input49" value="<?php echo $input49; ?>">
					</div>
				</div>
			</span>
		</div>

		<?php 
		if ($type == 1 OR $type == 4 OR $type == 5 OR $type == 6) {
			echo "<span id='form-home'>";
		}
		 ?>
		
		<table>
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
					<input  type="text" name="input54" style="width:320px;" value="<?php echo $input54; ?>">
					เกี่ยวข้องกับนักเรียนเป็น 
					<input  type="text" name="input55" style="width:320px;" value="<?php echo $input55; ?>">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-8" id="form-line">
					นักเรียนอาศัยอยู่ในเขตพื้นที่บริการ (นับจากวันที่ย้ายเข้าอยู่ถึงวันที่ 16 พฤษภาคม พ.ศ. 2560)
				</div>
				<div class="col-md-2" id="form-line">
					<?php 
					if ($radio13 == 1) {
						echo "<input  type='radio' name='radio13' class='rdo' value='1' checked>";
					} else {
						echo "<input  type='radio' name='radio13' class='rdo' value='1'>";
					}
					 ?>
					ครบ 2 ปี
				</div>
				<div class="col-md-2" id="form-line">
					<?php 
					if ($radio13 == 2) {
						echo "<input  type='radio' name='radio13' class='rdo' value='2' checked>";
					} else {
						echo "<input  type='radio' name='radio13' class='rdo' value='2'>";
					}
					 ?>
					ไม่ครบ 2 ปี
				</div>
			</div>
		</div>
		</span>

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
					<input  type="text" name="input50" value="<?php echo $input50; ?>" style="width:50px;">
					หรือ ร้อยละ
					<input  type="text" name="input51" value="<?php echo $input51; ?>" style="width:50px;">
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
					<input  type="text" name="input52" value="<?php echo $input52; ?>" style="width:50px;">
					คะแนน
				
					<span style="margin-left:20px;">
					คิดเป็นร้อยละ
					<input  type="text" name="input53" value="<?php echo $input53; ?>" style="width:50px;">
					</span>
				</div>
			</div>
		</div>
	</div>

		<script src="js/jquery.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#form-home").hide();
	});
</script>