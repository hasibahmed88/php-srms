<?php 

require_once("../include/config.php");

if (isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$delete = "DELETE FROM results WHERE id='$id' ";
	$query= mysqli_query($connect,$delete);

	if ($query==true) {
		header("location: ../manage_result.php?resultDeletedSuccessfully");
		exit();
	}
	else{
		header("location: ../manage_result.php?resultDeletedFailed");
		exit();
	}
}

 ?>