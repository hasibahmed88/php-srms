<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>Admin Page</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin page</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
			
			<form enctype="multipart/form-data" action="process/admin_info_core.php" method="post">
				<h5>Admin Information</h5>
				<div class="form-group">
					<label for="name">Full Name</label>
					<input id="name" name="admin_name" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="bio">Bio</label>
					<input id="bio" type="text" name="admin_bio" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="dp">Photo</label>
					<input id="dp" type="file" name="admin_photo" class="form-control-file form-control-sm" required>
				</div>
				<div class="form-group">
					<input type="submit" name="admin_info_btn" value="Update" class="btn btn-success btn-sm">
				</div>
			</form>

		</div>

		<!-- change password -->
		<div class="border bounded p-3 rounded mt-4">
			<div class="row justify-content-center">
				<div class="col-12 col-md-5">
			<!-- old password message -->
					<?php 
						if (isset($_REQUEST['OldPasswordInvalid'])) { ?>
							<div class="alert alert-warning">
								<strong>Warning! </strong><span>Old password incorrect!</span>
							</div>
						<?php }
					 ?>
			<!-- Both password not matched message -->
					<?php 
						if (isset($_REQUEST['bothPasswordNotMatch'])) { ?>
							<div class="alert alert-warning">
								<strong>Warning! </strong><span>Both password not matched!</span>
							</div>
						<?php }
					 ?>
			<!-- Short password -->
					<?php 
						if (isset($_REQUEST['passwordTooShort'])) { ?>
							<div class="alert alert-warning">
								<strong>Warning! </strong><span>Password at least 6 characters!</span>
							</div>
						<?php }
					 ?>

				<!-- Password change message -->
					<?php 
						if (isset($_REQUEST['passwordChangeSuccessfully'])) { ?>
							<div class="alert alert-success">
								<strong>Success! </strong><span>Password changed!</span>
							</div>
						<?php }
					 ?>
				</div>
			</div>
			<form action="process/admin_change_pwd_core.php" method="post">
				<h5>Admin change password</h5>
				<div class="form-group">
					<label for="cur-pwd">Current Password</label>
					<input id="cur-pwd" name="admin_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="n-pwd">New Password</label>
					<input id="n-pwd" name="new_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="con-pwd">Confirm Password</label>
					<input id="con-pwd" name="con_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Update" name="admin_pwd_btn" class="btn btn-success btn-sm">
				</div>
			</form>
		</div>
	</div>
</div>

</div>



</div>



 <?php 
require_once("footer.php");

 ?>