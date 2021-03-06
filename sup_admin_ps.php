<?php 
session_start();

if (empty($_SESSION['id_user']) OR $_SESSION['status'] != 8) {
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

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery.dataTables.min.js"></script>  
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  
</head>
<body style="height: 100vh; width: 100vw;"> 
	<div style="height:50px; width: 100%; background-color:#1c1c86; color:white;">
		<div class="container">
			<div class="col-md-9">
				<img src="image/logops.jpg" width="40px;" style="float:left; margin-top: 5px; border-radius: 50%;">
				<a style="color:white;" href="index.php"><span style="font-size:22px; margin-top:10px; float:left; margin-left:10px;">ระบบบันทึกข้อมูลแจ้งความประสงค์เข้าศึกษาต่อโรงเรียนโพธิสารพิทยากร</span></a>
			</div>
			<div class="col-md-1">
				<a href="sup_admin_ps.php">
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

	<!-- <div class="container">
	 	<div class="col-md-4"><a href="add_student_admin.php"><h2>ระบบเพิ่มข้อมูลนักเรียน</h2></a>
	 	</div>
	 </div> -->

	<div class="container" style="margin-top:20px;">
	 <table id="example" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th><center>ใบสมัครเลขที</center></th>
				<th><center>รหัสประชาชน</center></th>
				<th><center>ชื่อ</center></th>
				<th><center>นามสกุล</center></th>
			</tr>
		</thead>
		<tbody>
		<?php 
		include('config.php');

		$sql = "SELECT * FROM history_ps WHERE status = 1";
		$query = mysql_query($sql);	

		while ($data = mysql_fetch_array($query)) {
		echo "
		<tr style='cursor:pointer;' data-href='groupType_process.php?id_history=".$data['id_history']."'>
		    <td>".$data['input1']."</td>
		    <td>".$data['input2']."</td>
		    <td><center>".$data['input4']."</center></td>
		    <td><center>".$data['input5']."</center></td>		   
		</tr>";
		}
		?>

		</tbody>
	</table>
	</div>

	<div class="container" style="margin-top:30px; border-bottom:5px solid #1c1c86;"></div>	

	<div class="container" style="margin-top:20px;">
	<h2>นักเรียนที่ผ่านการยืนยันแล้ว</h2>
	 <table id="example2" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th><center>เลขประจำตัวผู้สมัคร</center></th>
				<th><center>ห้องสอบ</center></th>
				<th><center>ใบสมัครเลขที</center></th>
				<th><center>รหัสประชาชน</center></th>
				<th><center>ชื่อ</center></th>
				<th><center>นามสกุล</center></th>
			</tr>
		</thead>
		<tbody>
		<?php 
		include('config.php');

		$sql = "SELECT * FROM history_ps INNER JOIN group_type ON history_ps.id_history = group_type.id_group_type WHERE history_ps.status = 2";
		$query = mysql_query($sql);	

		while ($data = mysql_fetch_array($query)) {
		echo "
		<tr style='cursor:pointer;' data-href='groupType_process2.php?id_history=".$data['id_history']."'>
			<td>".$data['id_student_group']."</td>
		    <td>".$data['class_exam']."</td>
		    <td>".$data['input1']."</td>
		    <td>".$data['input2']."</td>
		    <td><center>".$data['input4']."</center></td>
		    <td><center>".$data['input5']."</center></td>		   
		</tr>";
		}
		?>

		</tbody>
	</table>
	</div>

</body>
</html> <script language='javascript'>

// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example').DataTable( {
        "sDom": '<"top"f>rt<"bottom"p><"clear">'
    } );
} );
jQuery(document).ready(function($) {
    $('#example').on( 'click', 'tbody tr', function () {
        window.document.location = $(this).data("href");
    });
});


// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example2').DataTable( {
        "sDom": '<"top"f>rt<"bottom"p><"clear">'
    } );
} );
jQuery(document).ready(function($) {
    $('#example2').on( 'click', 'tbody tr', function () {
        window.document.location = $(this).data("href");
    });
});
</script>