<?php 
require_once("../include/config.php");

if (isset($_REQUEST['add_student_btn'])) {
	
	$fname = mysqli_real_escape_string($connect,$_REQUEST['fname']);
	$lname = mysqli_real_escape_string($connect,$_REQUEST['lname']);
	$Id = mysqli_real_escape_string($connect,$_REQUEST['Id']);
	$roll = mysqli_real_escape_string($connect,$_REQUEST['roll']);
	$reg = mysqli_real_escape_string($connect,$_REQUEST['reg']);
	$department = mysqli_real_escape_string($connect,$_REQUEST['department']);
	$semister = mysqli_real_escape_string($connect,$_REQUEST['semister']);
	$phone = mysqli_real_escape_string($connect,$_REQUEST['phone']);
	$email = mysqli_real_escape_string($connect,$_REQUEST['email']);
	$dob = mysqli_real_escape_string($connect,$_REQUEST['dob']);
	$blood = mysqli_real_escape_string($connect,$_REQUEST['blood']);
	$home = mysqli_real_escape_string($connect,$_REQUEST['home']);
	$dp_name = $_FILES['student_photo']['name'];
	$dp_tmp_name = $_FILES['student_photo']['tmp_name'];
	$dp_location = "../img/";

	$uniqid = uniqid($dp_name).'.jpg';

	move_uploaded_file($dp_tmp_name,$dp_location.$uniqid);


	$insert = "INSERT INTO students(fname,lname,identity,roll,reg,department,semister,phone,email,dob,blood,home,dp) VALUES ('$fname','$lname','$Id','$roll','$reg','$department','$semister','$phone','$email','$dob','$blood','$home','$uniqid') ";
	$query = mysqli_query($connect,$insert);

	if ($query==true) {
		header("location: ../add_student.php?dataInsertedSuccessfully");
		exit();
	}
	else{
		header("location: ../add_student.php?dataInsertedFailed");
		exit();
	}


}


 ?>