<?php 
session_start();

if (empty($_SESSION['id_user']) && $_SESSION['status'] != 1) {
	echo "<script language='javascript'>";
	echo "location='login.php';";
	echo "</script>";
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
<body style="height: 100vh; width: 100vw;"> 
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

	<?php 
	include('config.php');
	$id_user = $_SESSION['id_user'];

	$sql = "SELECT * FROM history_ps WHERE id_history = $id_user";
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);	

	if ($data['input3'] == 1) {
		$frontName = "ด.ช.";
		$frontNameEng ='MSTR';
	} elseif ($data['input3'] == 2) {
		$frontName = "ด.ญ.";
		$frontNameEng ='MISS';
	} elseif ($data['input3'] == 3) {
		$frontName = "นาย";
		$frontNameEng ='MR';
	} else{
		$frontName = "น.ส.";
		$frontNameEng ='MS';
	}
	 ?>

	<div class="container" style="color:#1c1c86; background-color:rgba(255,255,255,0.3); margin-top:20vh; padding-bottom:30px;">
		<div class="col-md-12" style="border-bottom:2px solid #1c1c86;">
			<h2>ยินดีต้อนรับ <?php echo $frontName.$data['input4']." ".$data['input5']; ?></h2>
		</div>
		<div class="col-md-12">
			<h3>ข้อมูลพื้นฐาน</h3>
		</div>

		<div class="col-md-2">
			<h4>เลขที่ผู้สมัคร <?php echo $data['input1'];?></h4>
		</div>
		<div class="col-md-4">
			<h4>รหัสประจำตัวประชาชน <?php echo $data['input2'];?></h4>
		</div>
		<div class="col-md-3">
			<h4>ชื่อ <?php echo $frontName.$data['input4']." ".$data['input5']; ?></h4>
		</div>
		<div class="col-md-3">
			<h4><?php echo $frontNameEng." ".$data['input6']." ".$data['input7']; ?></h4>
		</div>

		<div class="col-md-4">
			<h4>ศาสนา <?php echo $data['input8']." สัญชาติ ".$data['input9']." เชื้อชาติ ".$data['input10'] ?></h4>
		</div>
		<div class="col-md-3">
			<h4>วันเดือนปีเกิด <?php echo $data['input11']."/".$data['input12']."/".$data['input13']; ?></h4>
		</div>
		<div class="col-md-4">
			<h4>รหัสประจำบ้าน <?php echo $data['input14'];?></h4>
		</div>

		<div class="col-md-4">
			<h4><?php echo "ที่อยู่ตามทะเบียนบ้าน ".$data['input15']." หมู่ที่ ".$data['input16']; ?></h4>
		</div>
		<div class="col-md-5">
			<h4><?php echo "ถนน ".$data['input17']." ซอย ".$data['input18']; ?></h4>
		</div>
		<div class="col-md-3">
			<?php 
			$province = array('กรุงเทพมหานคร','กระบี่','กาญจนบุรี','กาฬสินธุ์','กำแพงเพชร','ขอนแก่น','จันทบุรี','ฉะเชิงเทรา','ชัยนาท','ชัยภูมิ','ชุมพร','ชลบุรี','เชียงใหม่','เชียงราย','ตรัง','ตราด','ตาก','นครนายก','นครปฐม','นครพนม','นครราชสีมา','นครศรีธรรมราช','นครสวรรค์','นราธิวาส','น่าน','นนทบุรี','บึงกาฬ','บุรีรัมย์','ประจวบคีรีขันธ์','ปทุมธานี','ปราจีนบุรี','ปัตตานี','พะเยา','พระนครศรีอยุธยา','พังงา','พิจิตร','พิษณุโลก','เพชรบุรี','เพชรบูรณ์','แพร่','พัทลุง','ภูเก็ต','มหาสารคาม','มุกดาหาร','แม่ฮ่องสอน','ยโสธร','ยะลา','ร้อยเอ็ด','ระนอง','ระยอง','ราชบุรี','ลพบุรี','ลำปาง','ลำพูน','เลย','ศรีสะเกษ','สกลนคร','สงขลา','สมุทรสาคร','สมุทรปราการ','สมุทรสงคราม','สระแก้ว','สระบุรี','สิงห์บุรี','สุโขทัย','สุพรรณบุรี','สุราษฎร์ธานี','สุรินทร์','สตูล','หนองคาย','หนองบัวลำภู','อำนาจเจริญ','อุดรธานี','อุตรดิตถ์','อุทัยธานี','อุบลราชธานี','อ่างทอง','อื่นๆ');
			
			$number = $data['input19']-1;
			$dataProvince = $province[$number];
			 ?>
			<h4><?php echo "จังหวัด".$dataProvince; ?></h4>
		</div>

		<div class="col-md-6">
			<h4>อำเภอ/เขต <?php echo $data['input20']." ตำบล/แขวง ".$data['input21']." รหัสไปรษณีย์ ".$data['input22']; ?></h4>
		</div>
		<div class="col-md-6">
			<h4>เบอร์โทรศัพท์บ้าน : <?php echo $data['input23']." เบอร์มือถือ : ".$data['input24']; ?></h4>
		</div>

		<?php 
		if ($data['input28'] == 1) {
			$blood = "A";
		} elseif ($data['input28'] == 2) {
			$blood = "B";
		} elseif ($data['input28'] == 3) {
			$blood = "AB";
		} else {
			$blood = "O";
		}
		?>

		<div class="col-md-9" style="border-bottom:2px solid #1c1c86; padding-bottom:30px;">
			<h4>น้ำหนัก : <?php echo $data['input26']." ส่วนสูง ".$data['input27']." หมู่เลือด ".$blood; ?></h4>
		</div>
		<div class="col-md-3" style="border-bottom:2px solid #1c1c86; padding-bottom:30px;">
			<h4>ผลการสอบ : ยังไม่ประกาศ</h4>
		</div>

		<div class="col-md-2" style="margin-top:30px;"></div>
		<div class="col-md-3" style="margin-top:30px;">
			<a href="edit_student.php?id_student=<?php echo $_SESSION['id_user']; ?>">
				<i class="fa fa-pencil-square-o" style="color:#1c1c86; font-size:50px; float:left; margin-top:17px;" aria-hidden="true">
				</i><div style="font-size:20px; margin-top:25px;">แก้ไขข้อมูล</div>
			</a>
		</div>
		<div class="col-md-3" style="margin-top:30px;">
			<a href="report/tcpdf/report/report_student_info.php?id_student=<?php echo $_SESSION['id_user']; ?>" target="_blank">
				<i class="fa fa-file-text-o" style="color:#1c1c86; font-size:50px; float:left; margin-top:17px;" aria-hidden="true">
				</i><div style="font-size:20px; margin-top:25px;">พิมพ์หลักฐาน</div>
			</a>
		</div>
		<div class="col-md-4" style="margin-top:30px;">
			<a href="index.php#calender">
				<i class="fa fa-calendar" style="color:#1c1c86; font-size:50px; float:left; margin-top:17px;" aria-hidden="true">
				</i><div style="font-size:20px; margin-top:25px;">ปฏิทินการรับสมัคร</div>
			</a>
		</div>
	</div>

</body>
</html> 