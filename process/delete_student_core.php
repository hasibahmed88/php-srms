<?php 
require_once("../include/config.php");

if (isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$delete = "DELETE FROM students WHERE id='$id' ";
	$query = mysqli_query($connect,$delete);

	if ($query==true) {
		header("location: ../all_student.php?dataDeletedSuccessfully");
		exit();
	}
	else{
		header("location: ../all_student.php?dataDeletedFailed");
		exit();

	}

}


 ?>