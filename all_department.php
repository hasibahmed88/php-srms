<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>All Department</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Department</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	

	<div class="row justify-content-center">
	<div class="col-12">
		<div class="border bounded p-3 rounded">
			<div class="row justify-content-between">
				<div class="col-12 col-md-3">
					<h5 class="mb-3">All Department</h5>
				</div>

				<div class="col-12 col-md-5">
			<!-- Edit Department message -->
				<?php 

				if (isset($_REQUEST['dataUpdatedSuccessfully'])) { ?>
						<div class="alert alert-success">
							<strong>Success! </strong><span>Department edit successfully!</span>
						</div>
					<?php }
				 ?>

			<!-- Delete Department message -->
				<?php 

				if (isset($_REQUEST['dataDeletedSuccessfully'])) { ?>
						<div class="alert alert-danger">
							<strong>Success! </strong><span>Department delete successfully!</span>
						</div>
					<?php }
				 ?>


				</div>
				<div class="col-md-2">
					<a href="add_department.php" class="btn btn-primary btn-sm">Add Department</a>
				</div>
			</div>
			
			<table class="table table-sm table-bordered table-striped table-responsive-md table-hover">
				<tr class="bg-dark text-light text-center">
					<th>No</th>
					<th>Name</th>
					<th>Code</th>
					<th>Semister</th>
					<th>Action</th>
				</tr>
		<?php 
			
			$getData = "SELECT * FROM department ";
			$query = mysqli_query($connect,$getData);
			
			$num = 1;
			while ( $rows = mysqli_fetch_array($query)) {
				$id = $rows['id'];			
				$name = $rows['name'];			
				$code = $rows['code'];			
				$semister = $rows['semister'];	

				?>

				<tr class="text-center">
					<td><?php echo $num; $num++ ?></td>
					<td><?php echo $name ?></td>
					<td><?php echo $code ?></td>
					<td><?php echo $semister ?></td>
					<td>
						<a class="btn btn-primary btn-sm" href="edit_department.php?id=<?php echo $id ?>"><span><i class="fas fa-edit"></i></span></a>
						<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="process/delete_department_core.php?id=<?php echo $id ?>"><span><i class="fas fa-trash-alt"></i></span></a>
					</td>
					
				</tr>

				<?php }		

		 ?>
				
			</table>

		</div>
	</div>
</div>

</div>



</div>



 <?php 
require_once("footer.php");

 ?>