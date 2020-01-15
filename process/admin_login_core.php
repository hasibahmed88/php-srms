<?php 
require_once("../include/config.php");


	$username = $_REQUEST['admin_username'];
	$pwd = $_REQUEST['admin_pwd'];
	$encpwd = md5($pwd);

	$adminInfo = "SELECT * FROM admin WHERE username='$username' and pwd='$encpwd' ";
	$run_query = mysqli_query($connect,$adminInfo);
	$num_rows = mysqli_num_rows($run_query);

	if($num_rows==1){
		setcookie("USSD",$username,time()+86400*365,"/");
		header("location: ../dashboard.php?loginSuccess");


	}
	else{
		header("location: ../index.php?loginFailed&$username&And&$pwd&incorrect");
	}
	





 ?>