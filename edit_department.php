<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>Edit Department</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="all_department.php">All Department</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Department</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">

		<?php 
			if (isset($_REQUEST['id'])) {
				$id = $_REQUEST['id'];

				$getUserInfo = "SELECT * FROM department WHERE id='$id' ";
				$query = mysqli_query($connect,$getUserInfo);

				while ($rows = mysqli_fetch_array($query)) {
					$id = $rows['id'];
					$name = $rows['name'];
					$code = $rows['code'];
					$semister = $rows['semister'];

					?>

				<form action="process/edit_department_core.php" method="POST">
					<h5 class="mb-3">Add Department Info</h5>
					<div class="form-group">
						<label for="department">Department Name</label>
						<input id="department" name="dep_name" type="text" class="form-control form-control-sm" value="<?php echo $name ?>">
					</div>
					<div class="form-group">
						<label for="code">Department Code</label>
						<input id="code" name="dep_code" type="number" class="form-control form-control-sm" value="<?php echo $code ?>">
					</div>
					<div class="form-group">
						<label for="Semister">Semister</label>
						<input type="text"name="dep_semister" id="Semister" class="form-control-sm form-control" value="<?php echo $semister ?>">
					</div>
					<div>
						<input type="hidden" name="editId" value="<?php echo $id ?>"> 
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" name="edit_dep_btn" class="btn btn-success btn-sm">
					</div>
				
				</form>


			<?php	}
			}


		 ?>

			
		</div>
	</div>
</div>

</div>



</div>



 <?php 
require_once("footer.php");

 ?>