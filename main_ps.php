<?php 
session_start();

if (empty($_SESSION['id_user'])) {
	echo "<script language='javascript'>";
	echo "location='login.php';";
	echo "</script>";
}

 ?>