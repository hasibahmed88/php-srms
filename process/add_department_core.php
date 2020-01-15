<?php 
require_once("../include/config.php");

if (isset($_REQUEST['add_dep_btn'])) {

	$dep_name = mysqli_real_escape_string($connect,$_REQUEST['dep_name']);
	$dep_code = mysqli_real_escape_string($connect,$_REQUEST['dep_code']);
	$dep_semister = mysqli_real_escape_string($connect,$_REQUEST['dep_semister']);


	$insert = "INSERT INTO department(name,code,semister) VALUES ('$dep_name','$dep_code','$dep_semister') ";
	$query = mysqli_query($connect,$insert);

	if ($query==true) {
		header("location: ../add_department.php?dataInsertedSuccessfully");
		exit();
	}
	else{
		header("location: ../add_department.php?dataInsertedFailed");
		exit();
	}
}



 ?>