<?php 
require_once("../include/config.php");

if (isset($_REQUEST['edit_student_btn'])) {

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
	$home = mysqli_real_escape_string($connect,$_REQUEST['home']);
	$editId = $_REQUEST['editId']; 
	$dp_name = $_FILES['student_photo']['name'];
	$dp_tmp = $_FILES['student_photo']['tmp_name'];
	$dp_loc = "../img/";

	$uniqid = uniqid($dp_name).'.jpg';

	move_uploaded_file($dp_tmp, $dp_loc.$uniqid);

	if ($dp_name="") {
		$updateDp = "UPDATE students SET dp='image.png' WHERE id='$editId' ";
		$runQuery = mysqli_query($connect,$updateDp);
	}

	
	$update = "UPDATE students SET fname='$fname',lname='$lname',identity='$Id',roll='$roll',reg='$reg',department='$department',semister='$semister',phone='$phone',email='$email',dob='$dob',home='$home',dp='$uniqid' WHERE id='$editId' ";
	$query = mysqli_query($connect,$update);

	if ($dp_name="") {
		$updateDp = "UPDATE students SET dp='image.png' WHERE id='$editId' ";
		$runQuery = mysqli_query($connect,$updateDp);
	}

	if ($query==true) {
		header("location: ../all_student.php?dataEditedSuccessfully");
		exit();
	}
	else{
		header("location: ../all_student.php?dataEditedFailed");
		exit();
	}



}


 ?>