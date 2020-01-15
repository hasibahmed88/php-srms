<?php 
require_once("../include/config.php");

if (isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$delete = "DELETE FROM department WHERE id='$id' ";
	$query = mysqli_query($connect,$delete);

	if ($query==true) {
		header("location: ../all_department.php?dataDeletedSuccessfully");
		exit();
	}
	else{
		header("location: ../all_department.php?dataDeletedFailed");
		exit();

	}

}


 ?>