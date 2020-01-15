<?php 
require_once("../include/config.php");

if (isset($_REQUEST['submit-login'])) {
	$email = mysqli_real_escape_string($connect,$_REQUEST['email']);
	$password = mysqli_real_escape_string($connect,$_REQUEST['password']);

	$encPwd = md5($password);

	$loginInfo = "SELECT * FROM users WHERE email = '$email' AND password = '$encPwd' ";
	$query = mysqli_query($connect,$loginInfo);
	$rows = mysqli_num_rows($query);

	if ($rows==1) {
		header("location: ../student_result_page.php?loginSuccess");
		exit();
	}
	else{
		header("location: ../index.php?studentloginFailed&$email&$password&wrong");
		exit();
	}


}


 ?>