<?php 
require_once("../include/config.php");

if (isset($_REQUEST['update_result_btn'])) {
	$id = $_REQUEST['student_id'];
	$department = $_REQUEST['department'];
	$semister = $_REQUEST['semister'];
	$roll = $_REQUEST['roll'];
	$total_subject = $_REQUEST['total_subject'];
	$total_marks = $_REQUEST['total_marks'];

	$avg_marks = $total_marks/$total_subject;
	$gpa = $total_marks/100;

	$update = "UPDATE results SET department='$department',semister='$semister',roll='$roll',total_subject='$total_subject',total_marks='$total_marks',avg_marks='$avg_marks', gpa='$gpa' WHERE id='$id' ";
	$query = mysqli_query($connect,$update);

	if ($query==true) {
		header("location: ../manage_result.php?resultUpdateSuccessfully");
		exit();
	}
	else{
		header("location: ../manage_result.php?resultUpdateFailed");
		exit();
	}

}


 ?>