<?php
ob_start();
session_start();

if ($_SESSION['id_user'] != $_GET['id_student']) {
	echo "<script language='javascript'>";
	echo "location='../../../login.php';";
	echo "</script>";
}
//include pdf
include('../../../config.php');
require_once('tcpdf_include.php');

//create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(5, 5, 5);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('thsarabun', '', 14);

//gen pdf
$pdf->AddPage();

//Input
$id_student = $_GET['id_student'];

$sqld = 'SELECT * FROM day WHERE id_day = '.$id_student.'';
$queryd = mysql_query($sqld);
$datad = mysql_fetch_array($queryd);

if ($datad['day'] == 1) {
	$day = "27 มีนาคม 2560";
} elseif ($datad['day'] == 2) {
	$day = "28 มีนาคม 2560";
} elseif ($datad['day'] == 3) {
	$day = "29 มีนาคม 2560";
} elseif ($datad['day'] == 4) {
	$day = "30 มีนาคม 2560";
} else {
	$day = "";
}

$sql = 'SELECT * FROM history_ps WHERE id_history = '.$id_student.'';
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
$input56 = $data['num_old'];
$date = $data['date'];

if ($type == 1) {
	$headerType = "English Program (EP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>วิทย์ - คณิต";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>คณิต - ภาษาจีน";
	}
} elseif ($type == 2) {
	$headerType = "Intensive English Program (IEP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>ในเขตพื้นที่บริการ สอบคัดเลือก";
	} elseif ($sType == 2) {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ";
	} elseif ($sType == 3) {
		$subType = "<input type='radio' name='sType' class='rdo' value='3' checked>นอกเขตพื้นที่บริการ สอบคัดเลือก";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='4' checked>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ";
	}
} elseif ($type == 3) {
	$headerType = "ภาคปกติ (GP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>ในเขตพื้นที่บริการ สอบคัดเลือก";
	} elseif ($sType == 2) {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>ในเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ";
	} elseif ($sType == 3) {
		$subType = "<input type='radio' name='sType' class='rdo' value='3' checked>นอกเขตพื้นที่บริการ สอบคัดเลือก";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='4' checked>นอกเขตพื้นที่บริการ ความสามารถพิเศษศิลปะ";
	}
} elseif ($type == 4) {
	$headerType = "English Program (EP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>วิทย์ - คณิต";
	} elseif ($sType == 2) {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>คณิต - อังกฤษ";
	} elseif ($sType == 3) {
		$subType = "<input type='radio' name='sType' class='rdo' value='3' checked>อังกฤษ - ภาษา เลือก ฝรั่งเศษ";
	} elseif ($sType == 4) {
		$subType = "<input type='radio' name='sType' class='rdo' value='4' checked>อังกฤษ - ภาษา เลือก ญี่ปุ่น";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='5' checked>อังกฤษ - ภาษา เลือก จีน";
	}
} elseif ($type == 5) {
	$headerType = "Intensive English Program (IEP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>วิทย์ - คณิต";
	} elseif ($sType == 2) {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>คณิต - อังกฤษ";
	} elseif ($sType == 3) {
		$subType = "<input type='radio' name='sType' class='rdo' value='3' checked>อังกฤษ - ภาษา เลือก ฝรั่งเศษ";
	} elseif ($sType == 4) {
		$subType = "<input type='radio' name='sType' class='rdo' value='4' checked>อังกฤษ - ภาษา เลือก ญี่ปุ่น";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='5' checked>อังกฤษ - ภาษา เลือก จีน";
	}
} else {
	$headerType = "ภาคปกติ (GP)";
	if ($sType == 1) {
		$subType = "<input type='radio' name='sType' class='rdo' value='1' checked>วิทย์ - คณิต";
	} elseif ($sType == 2) {
		$subType = "<input type='radio' name='sType' class='rdo' value='2' checked>คณิต - อังกฤษ";
	} elseif ($sType == 3) {
		$subType = "<input type='radio' name='sType' class='rdo' value='3' checked>อังกฤษ - ภาษา เลือก ฝรั่งเศษ";
	} elseif ($sType == 4) {
		$subType = "<input type='radio' name='sType' class='rdo' value='4' checked>อังกฤษ - ภาษา เลือก ญี่ปุ่น";
	} else {
		$subType = "<input type='radio' name='sType' class='rdo' value='5' checked>อังกฤษ - ภาษา เลือก จีน";
	}
}

if ($type == 1 || $type == 2 || $type == 3) {
	$text1 = "1";
	$text17 ='';
} else {
	if (empty($input56)) {
		$text1 = "4";
		$text17 = '*ถ้าเป็นนักเรียนที่จบ ม.3 จากโรงเรียนโพธิสารพิทยากร ให้ใส่เลขประจำตัวเดิม <table border="1" width="50"><tr><td></td></tr></table>';
	} else	{
		$text1 = "4";
		$text17 = 'เลขประจำตัวเดิม'.$input56	;
	}
}
 
if ($data['input3'] == 1) {
	$frontName = "ด.ช.";
} elseif ($data['input3'] == 2) {
	$frontName = "ด.ญ.";
} elseif ($data['input3'] == 3) {
	$frontName = "นาย";
} else{
	$frontName = "น.ส.";
}

$blood = array('A','B','AB','O');
$textBlood = $blood[$input28-1];

if ($type == 1 OR $type == 2 OR $type == 3) {
	if ($radio2 == 1) {
		$text4 = ' กำลังเรียนชั้น ป.6 ';
	} elseif ($radio2 == 2) {
		$text4 = 'จบชั้น ป.6 ';
	} elseif ($radio2 == 3) {
		$text4 = 'จบการศึกษาเทียบเท่าชั้น ป.6';
	} else {
		$text4 = '<input type="radio" name="radio2" value="1"> กำลังเรียนชั้น ป.6 <input type="radio" name="radio2" value="2"> จบชั้น ป.6 <input type="radio" name="radio2" value="3"> จบการศึกษาเทียบเท่าชั้น ป.6';
	}
} else {
	if ($radio2 == 1) {
		$text4 = 'กำลังเรียนชั้น ม.3 ';
	} elseif ($radio2 == 2) {
		$text4 = 'จบชั้น ม.3 ';
	} elseif ($radio2 == 3) {
		$text4 = 'จบการศึกษาเทียบเท่าชั้น ม.3';
	} else {
		$text4 = '<input type="radio" name="radio2" value="1"> กำลังเรียนชั้น ม.3 <input type="radio" name="radio2" value="2"> จบชั้น ม.3 <input type="radio" name="radio2" value="3"> จบการศึกษาเทียบเท่าชั้น ม.3';
	}
}

if ($radio3 == 1) {
	$text5 = "สปช.เดิม";
} elseif ($radio3 == 2) {
	$text5 = 'สพฐ.';
} elseif ($radio3 == 3) {
	$text5 = 'สช.';
} elseif ($radio3 == 4) {
	$text5 = 'กทม.';
} elseif ($radio3 == 5) {
	$text5 = 'อื่นๆ';
} else {
	$text5 = '<input type="radio" name="radio3" value="0"> สปช.เดิม <input type="radio" name="radio3" value="0"> สพฐ. <input type="radio" name="radio3" value="0"> สช. <input type="radio" name="radio3" value="0"> กทม. <input type="radio" name="radio3" value="0">อื่นๆ';
}

if ($radio4 == 1) {
	$text6 = 'ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี)';
} elseif ($radio4 == 2) {
	$text6 = 'นอกเขตพื้นที่';
} else {
	$text6 = '<input type="radio" name="radio4" value="2"> ในเขตพื้นที่ (คลองชักพระ/บางระมาด/บางพรม/ฉิมพลี) <input type="radio" name="radio4" value="2"> นอกเขตพื้นที่';
}

$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
$provinceData = $province[$input19-1];
$provinceData2 = $province[$input32-1];

if ($radio1 == 2) {
	$text3 = "พิการด้าน".$input25;
} else {
	$text3 = "";
}

if ($radio5 == 2) {
	$text7 = "พิการด้าน".$input34;
} else {
	$text7 = "";
}

if ($radio7 == 2) {
	$text10 = "พิการด้าน".$input34;
} else {
	$text10 = "";
}

$ii1 = substr($input2, 0, 1);
$ii2 = substr($input2, 1, 4);
$ii3 = substr($input2, 5, 5);
$ii4 = substr($input2, 10,2);
$ii5 = substr($input2, 12,1);

$id_pcc = $ii1."-".$ii2."-".$ii3."-".$ii4."-".$ii5;

if ($radio6 == 1) {
	$text8 = 'ค้าขาย';
} elseif ($radio6 == 2) {
	$text8 = 'รับจ้าง';
} elseif ($radio6 == 3) {
	$text8 = 'รับราชการ';
} elseif ($radio6 == 4) {
	$text8 = 'พนักงาน';
} elseif ($radio6 == 5) {
	$text8 = 'นักธุรกิจ';
} elseif ($radio6 == 6) {
	$text8 = 'อาชีพอิสระ';
} elseif ($radio6 == 7) {
	$text8 = 'ไม่ประกอบอาชีพ';
} else {
	$text8 = '<input type="radio" name="radio6" value="7"> ค้าขาย <input type="radio" name="radio6" value="7"> รับจ้าง <input type="radio" name="radio6" value="7"> รับราชการ <input type="radio" name="radio6" value="7"> พนักงาน <input type="radio" name="radio6" value="7"> นักธุรกิจ <input type="radio" name="radio6" value="7"> อาชีพอิสระ <input type="radio" name="radio6" value="7"> ไม่ประกอบอาชีพ';
}

if ($radio8 == 1) {
	$text9 = 'ค้าขาย';
} elseif ($radio8 == 2) {
	$text9 = 'รับจ้าง';
} elseif ($radio8 == 3) {
	$text9 = 'รับราชการ';
} elseif ($radio8 == 4) {
	$text9 = 'พนักงาน';
} elseif ($radio8 == 5) {
	$text9 = 'นักธุรกิจ';
} elseif ($radio8 == 6) {
	$text9 = 'อาชีพอิสระ';
} elseif ($radio8 == 7) {
	$text9 = 'ไม่ประกอบอาชีพ';
} else {
	$text9 = '<input type="radio" name="radio8" value="7"> ค้าขาย <input type="radio" name="radio8" value="7"> รับจ้าง <input type="radio" name="radio8" value="7"> รับราชการ <input type="radio" name="radio8" value="7"> พนักงาน <input type="radio" name="radio8" value="7"> นักธุรกิจ <input type="radio" name="radio8" value="7"> อาชีพอิสระ <input type="radio" name="radio8" value="7"> ไม่ประกอบอาชีพ';
}

if ($radio9 == 1) {
	$text11 = 'อยู่ด้วยกัน';
} elseif ($radio9 == 2) {
	$text11 = 'แยกกันอยู่';
} elseif ($radio9 == 3) {
	$text11 = 'หย่าร้าง';
} elseif ($radio9 == 4) {
	$text11 = 'บิดาถึงแก่กรรม';
} elseif ($radio9 == 5) {
	$text11 = 'มารดาถึงแก่กรรม';
} elseif ($radio9 == 6) {
	$text11 = 'บิดาแต่งงานใหม่';
} elseif ($radio9 == 7) {
	$text11 = 'มารดาแต่งงานใหม่';
} else {
	$text11 = '<input type="radio" name="radio9" value="7"> อยู่ด้วยกัน <input type="radio" name="radio9" value="7"> แยกกันอยู่ <input type="radio" name="radio9" value="7"> หย่าร้าง <input type="radio" name="radio9" value="7"> บิดาถึงแก่กรรม <input type="radio" name="radio9" value="7"> มารดาถึงแก่กรรม <input type="radio" name="radio9" value="7"> บิดาแต่งงานใหม่ <input type="radio" name="radio9" value="7"> มารดาแต่งงานใหม่';
}

if ($radio10 == 1) {
	$text12 = 'บิดา';
} elseif ($radio10 == 2) {
	$text12 = 'มารดา';
} elseif ($radio10 == 3) {
	$text12 = 'อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)';
} else {
	$text12 = '<input type="radio" name="radio10" id="radio10-3" value="3"> บิดา <input type="radio" name="radio10" id="radio10-3" value="3"> มารดา <input type="radio" name="radio10" id="radio10-3" value="3"> อื่นๆ (หากไม่ใช่ บิดา มารดา ให้กรอกข้อมูลด้านล่าง)';
}

if ($radio12 == 1) {
	$text13 = 'ค้าขาย';
} elseif ($radio12 == 2) {
	$text13 = 'รับจ้าง';
} elseif ($radio12 == 3) {
	$text13 = 'รับราชการ';
} elseif ($radio12 == 4) {
	$text13 = 'พนักงาน';
} elseif ($radio12 == 5) {
	$text13 = 'นักธุรกิจ';
} elseif ($radio12 == 6) {
	$text13 = 'อาชีพอิสระ';
} elseif ($radio12 == 7) {
	$text13 = 'ไม่ประกอบอาชีพ';
} else {
	$text13 = '<input type="radio" name="radio12" value="7"> ค้าขาย <input type="radio" name="radio12" value="7"> รับจ้าง <input type="radio" name="radio12" value="7"> รับราชการ <input type="radio" name="radio12" value="7"> พนักงาน <input type="radio" name="radio12" value="7"> นักธุรกิจ <input type="radio" name="radio12" value="7"> อาชีพอิสระ <input type="radio" name="radio12" value="7"> ไม่ประกอบอาชีพ';
}

if (empty($input50)) {
	$text31 = "...............";
} else {
	$text31 = $input50;
}

if (empty($input51)) {
	$text32 = "...............";
} else {
	$text32 = $input51;
}

if (empty($input52)) {
	$text33 = "...............";
} else {
	$text33 = $input52;
}

if (empty($input53)) {
	$text34 = "...............";
} else {
	$text34 = $input53;
}

if ($type == 1 || $type == 2 || $type == 3) {
	$text71 = "ข้อมูลผลการเรียน";
} else {
	$text71 = "ข้อมูลผลการเรียน (ผลการเรียนเฉลี่ย ม.1 - ม.3 รวม 5 ภาคเรียน)";
}


if ($type == 1 OR $type == 4) {
	$text72 = "ผลการเรียนเฉลี่ยภาษาอังกฤษ";
} else {
	if ($type == 5 OR $type == 6) {
		$text72 = "ผลการเรียนเฉลี่ยคณิตศาสตร์ วิทยาศาสตร์ และภาษาอังกฤษ";
	} else {
		$text72 = "ข้อมูลคะแนน O-NET";	
	}
}

if ($type == 1 OR $type == 4 OR $type == 5 OR $type == 6) {
	$text15 = "";
} else {
	if ($radio13 == 1) {
		$text16 = "ครบ 2 ปี";
	} else {
		$text16 = "ไม่ครบ 2 ปี";
	}
	$text15 = '
	<table width="710" border="1"><tr><td>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td width="700">
								<font size="16"> ข้อมูลการอาศัยอยู่ในเขตพื้นที่บริการ (คลองชักพระ บางระมาด บางพรม ฉิมพลี)</font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 เจ้าบ้าน/เจ้าของบ้านชื่อ '.$input54.'
							</td>
							<td>
								 เกี่ยวข้องกับนักเรียนเป็น '.$input55.'
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td width="500">
								 นักเรียนอาศัยอยู่ในเขตพื้นที่บริการ (นับจากวันที่ย้ายเข้าอยู่ถึงวันที่ 16 พฤษภาคม พ.ศ. 2560)
							</td>
							<td width="200">
								 '.$text16.'
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr></table>
	';
}

if ($query) {
$html = '
	<table>
		<tr>
			<td width="120">
				<img src="logo.jpg" width="60">
			</td>
			<td width="470">
				<h1 align="center">โรงเรียนโพธิสารพิทยากร สำนักงานเขตพื้นที่การศึกษามัธยม เขต 1 <br>ใบสมัครเข้าเรียนต่อมัธยมศึกษาปีที่ <strong>'.$text1.'</strong></h1>
			</td>
			<td width="120"></td>
		</tr>
	</table>
	
	<table width="710" border="1"><tr><td>
		<table width="710" border="1">
			<tr>
				<td width="450px">
					<font size="15" align="center"> <strong>'.$headerType.'</strong> ประเภทการคัดเลือก<strong>'.$subType.'</strong></font>
					<br>
					 <strong>'.$text17.'</strong>
					 <br> ใบสมัครเลขที <strong>'.$input1.'</strong>
				</td>
				<td width="260px">
					<table><tr><td>
					 รหัสผู้สมัคร <table border="1" width="65"><tr><td></td></tr></table>
					 </td><td>
					  ห้องสอบ <table border="1" width="70"><tr><td></td></tr></table>
					</td></tr></table>
					<br>
					 วันที่สมัคร 		
					 '.$day.'
					 <br>
					 <input type="checkbox" name="checkbox3" value="1"> 08.30-11.00 น. <input type="checkbox" name="checkbox3" value="1"> 13.00-15.00 น.
				</td>
			</tr>
		</table>
	</td></tr></table>
	<table width="710" border="1"><tr><td>
		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td width="400">
								<font size="16"> ข้อมูลนักเรียน</font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="100">
								 คำนำหน้า <strong>'.$frontName.'</strong>
							</td>
							<td width="100">
								ชื่อ <strong>'.$input4.'</strong>
							</td>
							<td width="160">
								นามสกุล <strong>'.$input5.'</strong>
							</td>
							<td width="400">
								รหัสประจำตัวประชาชน <strong>'.$id_pcc.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ศาสนา <strong>'.$input8.'</strong>
							</td>
							<td>
								 สัญชาติ <strong>'.$input9.'</strong>
							</td>
							<td>
								 เชื้อชาติ <strong>'.$input10.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 วันเดือนปีเกิด <strong>'.$input11.'</strong>/<strong>'.$input12.'</strong>/<strong>'.$input13.'</strong>
							</td>
							<td>
								 รหัสประจำบ้าน <strong>'.$input14.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="200">
								 ที่อยู่ตามทะเบียนบ้าน เลขที่ <strong>'.$input15.'</strong>
							</td>
							<td width="100">
								 หมู่ที่ <strong>'.$input16.'</strong>
							</td>
							<td>
								 ถนน <strong>'.$input17.'</strong>
							</td>
							<td>
								 ซอย <strong>'.$input18.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ตำบล/แขวง <strong>'.$input21.'</strong>
							</td>
							<td>
								 อำเภอ/เขต <strong>'.$input20.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 จังหวัด <strong>'.$provinceData.'</strong>
							</td>
							<td>
								 รหัสไปรษณีย์ <strong>'.$input22.'</strong>
							</td>
							<td>
								 เบอร์โทรศัพท์บ้าน <strong>'.$input23.'</strong>
							</td>
							<td>
								 เบอร์มือถือ <strong>'.$input24.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>	
					<table>
						<tr>
							<td>
								 <strong>'.$text3.'</strong>
							</td>
							<td>
								 น้ำหนัก <strong>'.$input26.'</strong> กิโลกรัม
							</td>
							<td>
								 ส่วนสูง <strong>'.$input27.'</strong> เซนติเมตร
							</td>
							<td>
								 หมู่เลือด<strong>'.$textBlood.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr></table>

	<table width="710" border="1"><tr><td>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td width="300">
								<font size="16"> ข้อมูลการศึกษา (โรงเรียนเดิม)</font>
							</td>
							<td>
								<strong>'.$text4.'</strong> สังกัด <strong>'.$text5.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td  width="250">
								 จากโรงเรียน <strong>'.$input29.'</strong> 
							</td>
							<td  width="450">
								 ร.ร. ตั้งอยู่ <strong>'.$text6.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ที่อยู่ ตำบล/แขวง <strong>'.$input30.'</strong>
							</td>
							<td>
								 อำเภอ/เขต<strong>'.$input31.'</strong>
							</td>
							<td>
								 จังหวัด<strong>'.$provinceData2.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr></table>
	<table width="710" border="1"><tr><td>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<font size="16"> ข้อมูล บิดา - มารดา</font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ชื่อสกุล บิดา <strong>'.$input33.'</strong>
							</td>
							<td  width="250">
								 รายได้ของบิดา <strong>'.$input35.'</strong> บาท/ปี
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 อาชีพของบิดา <strong>'.$text8.'</strong>
							</td>
							<td>
								 <strong>'.$text7.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 รหัสประจำตัวประชาชน <strong>'.$input36.'</strong>
							</td>
							<td>
								 โทรศัพท์ที่สามารถติดต่อได้ <strong>'.$input37.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ชื่อสกุล มารดา <strong>'.$input38.'</strong>
							</td>
							<td>
								 รายได้ของมารดา <strong>'.$input40.'</strong> บาท/ปี
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 อาชีพของมารดา <strong>'.$text9.'</strong>
							</td>
							<td>
								 <strong>'.$text10.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 รหัสประจำตัวประชาชน <strong>'.$input41.'</strong>
							</td>
							<td>
								 โทรศัพท์ที่สามารถติดต่อได้ <strong>'.$input42.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 <font size="12">สถานะภาพของบิดา-มารดา <strong>'.$text11.'</strong></font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 จำนวนพี่น้องทั้งหมด (รวมตัวเอง) <strong>'.$input43.'</strong> คน
							</td>
							<td>
								 กำลังศึกษาอยู่ จำนวน <strong>'.$input44.'</strong> คน
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr></table>
	<table width="710" border="1"><tr><td>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<font size="16"> ข้อมูลผู้ปกครอง</font>
							</td>
							<td>
								เกี่ยวข้องกับนักเรียนเป็น <strong>'.$text12.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 ชื่อสกุล ผู้ปกครอง <strong>'.$input45.'</strong>
							</td>
							<td>
								 มีความสัมพันธ์กับนักเรียนเป็น <strong>'.$input47.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 รายได้ของผู้ปกครอง <strong>'.$input46.'</strong> บาท/ปี
							</td>
							<td>
								 อาชีพของผู้ปกครอง <strong>'.$text13.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="710">
			<tr>
				<td>
					<table>
						<tr>
							<td>
								 รหัสประจำตัวประชาชน <strong>'.$input48.'</strong>
							</td>
							<td>
								 โทรศัพท์ที่สามารถติดต่อได้ <strong>'.$input49.'</strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr></table>
	'.$text15.'
	<table width="710" border="1"><tr><td>
		<table width="710">
			<tr>
				<td>
					<font size="16"> '.$text71.'</font>
				</td>
			</tr>
			<tr>
				<td>
					 ผลการเรียนเฉลี่ย <strong>'.$text31.'</strong> หรือ ร้อยละ <strong>'.$text32.'</strong>
				</td>
			</tr>
		</table>
	</td>
	<td>
		<table width="710">
			<tr>
				<td>
					<font size="16"> '.$text72.'</font>
				</td>
			</tr>
			<tr>
				<td>
					 ได้คะแนนเฉลี่ย <strong>'.$text33.'</strong> คะแนน คิดเป็นร้อยละ <strong>'.$text34.'</strong>
				</td>
			</tr>
		</table>
	</td></tr></table>
	<table width="710" border="1">
		<tr>
			<td width="410">
				<table>
					<tr>
						<td>
							<font size="16"> หลักฐานการสมัคร</font>
						</td>
					</tr>
					<tr>
						<td>
							 <input type="checkbox" name="checkbox" value="1"> ปพ.1 (ช่วงชั้นที่ 3) 
							 <input type="checkbox" name="checkbox" value="1"> สำเนาสมุดประจำตัว
							 <input type="checkbox" name="checkbox" value="1"> สำเนาทะเบียนบ้าน
							 <br>
							 <input type="checkbox" name="checkbox" value="1"> สำเนาผล O-NET
							 <input type="checkbox" name="checkbox" value="1"> ใบรับรองการเป็นนักเรียน
							 <input type="checkbox" name="checkbox" value="1"> อื่นๆ...................
						</td>
					</tr>
					<tr>
						<td>
							<font size="16"> ตรวจสอบหลักฐาน</font>
							 <input type="checkbox" name="checkbox2" value="1"> ถูกต้อง
							 <input type="checkbox" name="checkbox2" value="1"> ไม่ถูกต้อง
							 ขาด..........................................
						</td>
					</tr>
					<tr>
						<td>
							<table>
								<tr>
									<td></td>
									<td width="50">
										ลงชื่อ
									</td>
									<td></td>
									<td>
									ผู้ตรวจหลักฐาน</td>
								</tr>
								<tr>
									<td></td>
									<td width="5">
										(
									</td>
									<td width="160" style="border-bottom: 1px solid black;"></td>
									<td>
									)</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
			<td width="300">
				<table>
					<tr><td></td></tr>
					<tr>
						<td>
							<table>
								<tr>
									<td width="50"></td>
									<td width="50">
										ลงชื่อ
									</td>
									<td width="120"></td>
									<td>
									นักเรียนผู้สมัคร</td>
								</tr>
								<tr>
									<td width="50"></td>
									<td width="5">
										(
									</td>
									<td width="160" style="border-bottom: 1px solid black;"></td>
									<td>
									)</td>
								</tr>
								<tr>
									<td width="50"></td>
									<td width="50">
										ลงชื่อ
									</td>
									<td width="120"></td>
									<td>
									ผู้ปกครอง</td>
								</tr>
								<tr>
									<td width="50"></td>
									<td width="5">
										(
									</td>
									<td width="160" style="border-bottom: 1px solid black;"></td>
									<td>
									)</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center">
							สมัครวันที่.........เดือน................พ.ศ.2560
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	';
	ob_clean();
}

//create pdf
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('psadmission.pdf', 'I');

?>