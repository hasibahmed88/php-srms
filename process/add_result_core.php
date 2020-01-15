<?php 
require_once("../include/config.php");

if (isset($_REQUEST['result_btn'])) {
	$department = mysqli_real_escape_string($connect,$_REQUEST['department']);
	$semister = mysqli_real_escape_string($connect,$_REQUEST['semister']);
	$roll = mysqli_real_escape_string($connect,$_REQUEST['roll']);
	$total_marks = mysqli_real_escape_string($connect,$_REQUEST['total_marks']);
	$total_subject = mysqli_real_escape_string($connect,$_REQUEST['total_subject']);

	
	$avg_marks = $total_marks / $total_subject;
	$cgpa = $total_marks/100;

	$insert = "INSERT INTO results(department,semister,roll,total_subject,total_marks,avg_marks,gpa) VALUES ('$department','$semister','$roll','$total_subject','$total_marks','$avg_marks','$cgpa') ";
	$query = mysqli_query($connect,$insert);

	if ($query==true) {
		header("location: ../add_result.php?resultInsertedSuccessfully");
		exit();
	}
	else{
		header("location: ../add_result.php?resultInsertedFailed");
		exit();
	}
}


 ?>