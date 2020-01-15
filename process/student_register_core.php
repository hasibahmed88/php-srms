<?php 

require_once('../include/config.php');

if (isset($_REQUEST['submit-register'])) {
	
	$name = mysqli_real_escape_string($connect,$_REQUEST['name']);
	$roll = mysqli_real_escape_string($connect,$_REQUEST['roll']);
	$email = mysqli_real_escape_string($connect,$_REQUEST['email']);
	$password = mysqli_real_escape_string($connect,$_REQUEST['password']);
	$con_password = mysqli_real_escape_string($connect,$_REQUEST['con_password']);

	$encPwd = md5($password);

	if ($password!=$con_password) {
		header("location: ../student_register.php?bothPasswordnotmatched");
		exit();
	}

	$countPwd = strlen($password);
	if ($countPwd<=5) {
		header("location: ../student_register.php?shortpassword");
		exit();
	}

	// check email
		
	$getMail = "SELECT * FROM users WHERE email = '$email' ";
	$mailQuery = mysqli_query($connect,$getMail);
	$count_rows = mysqli_num_rows($mailQuery);

	if ($count_rows===1) {
		header("location: ../student_register.php?emailAlreadyUsed");
		exit();
	}
	else{
		$insert = "INSERT INTO users (name,roll,email,password) VALUES ('$name','$roll','$email','$encPwd') ";
		$insertQuery = mysqli_query($connect,$insert);

		if ($insertQuery==true) {
			header("location: ../student_register.php?RegisterSussess");
			exit();
		}
		
	}

}



 ?>