<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>Add Department</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="all_department.php">All department</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Department</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	

	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">

	<!-- Add Department message -->
				<?php 
				if (isset($_REQUEST['dataInsertedSuccessfully'])) { ?>
					<div class="alert alert-success">
						<strong>Success! </strong><span>Data edit successfully!</span>
					</div>
				<?php }
			 ?>

			<form action="process/add_department_core.php" method="POST">
				<h5 class="mb-3">Add Department Info</h5>
				<div class="form-group">
					<label for="department">Department Name</label>
					<input id="department" name="dep_name" type="text" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="code">Department Code</label>
					<input id="code" name="dep_code" type="text" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="Semister">Semister</label>
					<select name="dep_semister" id="Semister" class="form-control-sm form-control">
						<option value="">Select</option>
						<option value="1st">1st</option>
						<option value="2nd">2nd</option>
						<option value="3rd">3rd</option>
						<option value="4th">4th</option>
						<option value="5th">5th</option>
						<option value="6th">6th</option>
						<option value="7th">7th</option>
						<option value="8th">8th</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" value="Submit" name="add_dep_btn" class="btn btn-success btn-sm">
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