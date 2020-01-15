<?php 
require_once("../include/config.php");

if (isset($_REQUEST['admin_info_btn'])) {
	
	$name = mysqli_real_escape_string($connect,$_REQUEST['admin_name']);
	$bio = mysqli_real_escape_string($connect,$_REQUEST['admin_bio']);

	$dp_name = $_FILES['admin_photo']['name'];
	$dp_tmp_name = $_FILES['admin_photo']['tmp_name'];
	$dp_location = "../admin-img/";

	$unique_id = uniqid($dp_name).'.jpg';

	move_uploaded_file($dp_tmp_name, $dp_location.$unique_id);

	$updateInfo = "UPDATE admin SET name='$name',bio='$bio',dp='$unique_id' WHERE id=1 ";
	$query = mysqli_query($connect,$updateInfo);

	if ($query==true) {
		header("location: ../admin.php?profileUpdatedSuccessfully");
		exit();
	}
	else{
		header("location: ../admin.php?profileUpdatedFailed");
		exit();
	}
	
}




 ?>