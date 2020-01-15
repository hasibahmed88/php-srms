<?php

require_once("../include/config.php");


if (isset($_REQUEST['edit_dep_btn'])) {
	$dep_name = mysqli_real_escape_string($connect,$_REQUEST['dep_name']);
	$dep_code = mysqli_real_escape_string($connect,$_REQUEST['dep_code']);
	$dep_semister = mysqli_real_escape_string($connect,$_REQUEST['dep_semister']);
	$editId = $_REQUEST['editId'];


	$update = "UPDATE department SET name='$dep_name',code='$dep_code',semister='$dep_semister' WHERE id='$editId' ";
	$query = mysqli_query($connect,$update);

	if ($query==true) {
		header("location: ../all_department.php?dataUpdatedSuccessfully");
		exit();
	}
	else{
		header("location: ../all_department.php?dataUpdatedFailed");
		exit();

	}


}





 ?>