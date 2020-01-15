<?php 
require_once("../include/config.php");


if (isset($_REQUEST['admin_pwd_btn'])) {
	$admin_pwd = mysqli_real_escape_string($connect,$_REQUEST['admin_pwd']);
	$new_pwd = mysqli_real_escape_string($connect,$_REQUEST['new_pwd']);
	$con_pwd = mysqli_real_escape_string($connect,$_REQUEST['con_pwd']);

	$countPwd = strlen($new_pwd);
	$encryp_pwd = md5($admin_pwd);
	$newEncrypPwd = md5($new_pwd);

	$check_pwd = "SELECT * FROM admin WHERE pwd='$encryp_pwd' ";
	$pwd_query = mysqli_query($connect,$check_pwd);
	$num_rows = mysqli_num_rows($pwd_query);

	if ($num_rows !=1) {
		header("location: ../admin.php?OldPasswordInvalid");
		exit();
	}
	elseif($countPwd<=5){
		header("location: ../admin.php?passwordTooShort");
		exit();
	}
	elseif($new_pwd!=$con_pwd){
		header("location: ../admin.php?bothPasswordNotMatch");
		exit();
	}


	$updatePwd = "UPDATE admin SET pwd = '$newEncrypPwd' WHERE id =1  ";
	$updateQuery = mysqli_query($connect,$updatePwd);

	if ($updateQuery==true) {
		header("location: ../admin.php?passwordChangeSuccessfully");
		exit();
	}
	else{
		header("location: ../admin.php?passwordChangeFailed");
		exit();
	}

}



 ?>