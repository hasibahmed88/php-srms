<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>All Students</h3>
	</div>
<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Students</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	
	<div class="row justify-content-center">
	<div class="col-12">
		<div class="border bounded p-3 rounded">
<!-- add result -->
		<div>
			<a href="add_student.php" class="btn btn-primary btn-sm mb-2">Add Student</a>
		</div>


			<div class="row justify-content-between">
			
			<div class="col-12 col-md-3">
				<h4>All Students</h4>
			</div>


			<div class="col-12 col-md-3">
	<!-- edit successfully message -->
				<?php 
				if (isset($_REQUEST['dataEditedSuccessfully'])) { ?>
					<div class="alert alert-success">
						<strong>Success! </strong><span>Data edit successfully!</span>
					</div>
				<?php }
			 ?>

	<!-- edit successfully message -->
				<?php 
				if (isset($_REQUEST['dataDeletedSuccessfully'])) { ?>
					<div class="alert alert-danger">
						<strong>Success! </strong><span>Data delete successfully!</span>
					</div>
				<?php }
			 ?>

			</div>
		<!-- search option -->
				<div class="col-md-3 col-12 mb-3">
					<form action="" method="POST">
						<div class="input-group">
							<input type="text" name="search_keyword" class="form-control form-control-sm" >
							<input type="submit" name="submit-search" value="Search" class="btn btn-success btn-sm">
						</div>
					</form>
				</div>
			</div>
			
			<br>


<!-- Search Result here -->


			<div class="row">
				<div class="col-12">
						
				<?php 
				if (isset($_REQUEST['submit-search'])) {
					$search_key = mysqli_real_escape_string($connect,$_REQUEST['search_keyword']);

					$search = "SELECT * FROM students WHERE fname LIKE '%$search_key%' OR lname LIKE '%$search_key%' OR roll LIKE '%$search_key%' OR reg LIKE '%$search_key%' OR department LIKE '%$search_key%' OR email LIKE '%$search_key%' OR phone LIKE '%$search_key%' OR home LIKE '%$search_key%' OR semister LIKE '%$search_key%'  ";
					$query = mysqli_query($connect,$search);
					$count = mysqli_num_rows($query);

					?>
					
					<h6>There are <?php echo "<span class='text-success'><strong>$count</strong></span>" ?> result found!</h6>
					<table class="table table-sm table-bordered table-striped table-responsive-md">
							<tr class="bg-dark text-light ">
								<th>No</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Roll No</th>
								<th>Register No</th>
								<th>Department</th>
								<th>Semister</th>
								<th>Action</th>
							</tr>

					<?php 
					if ($count > 0) {
						$serial = 1;
						while ($rows = mysqli_fetch_array($query)) {
							$id = $rows['id'];
							$fname = $rows['fname'];
							$lname = $rows['lname'];
							$roll = $rows['roll'];
							$reg = $rows['reg'];
							$department = $rows['department'];
							$semister = $rows['semister'];

							?>
							<tr>
								<td><?php echo $serial; $serial++ ?></td>
								<td><?php echo $fname ?></td>
								<td><?php echo $lname ?></td>
								<td><?php echo $roll ?></td>
								<td><?php echo $reg ?></td>
								<td><?php echo $department ?></td>
								<td><?php echo $semister ?></td>
								<td>
									<a title="Edit" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $id ?>"><span><i class="fas fa-edit"></i></span></a>
									<a title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="process/delete_student_core.php?id=<?php echo $id ?>"><span><i class="fas fa-trash-alt"></i></span></a>
									<a title="Info" class="btn btn-info btn-sm" href="student_info.php?id=<?php echo $id ?>"><span><i class="fas fa-info-circle"></i></span></a>
								</td>
								
							</tr>
						<?php }
					}
				}

			 ?>

				</table>

				</div>
			</div>
			<hr>


			
			<table class="table table-sm table-bordered table-striped table-responsive-md">
				<tr class="bg-dark text-light ">
					<th>No</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Roll No</th>
					<th>Register No</th>
					<th>Department</th>
					<th>Semister</th>
					<th>Action</th>
				</tr>
		<?php 
			
			$getData = "SELECT * FROM students ";
			$query = mysqli_query($connect,$getData);
			
			$num = 1;
			while ( $rows = mysqli_fetch_array($query)) {
				$id = $rows['id'];			
				$fname = $rows['fname'];			
				$lname = $rows['lname'];			
				$roll = $rows['roll'];	
				$reg = $rows['reg'];	
				$department = $rows['department'];	
				$semister = $rows['semister'];	
				$phone = $rows['phone'];	
				$dob = $rows['dob'];	
				$home = $rows['home'];	

				?>

				<tr>
					<td><?php echo $num; $num++ ?></td>
					<td><?php echo $fname ?></td>
					<td><?php echo $lname ?></td>
					<td><?php echo $roll ?></td>
					<td><?php echo $reg ?></td>
					<td><?php echo $department ?></td>
					<td><?php echo $semister ?></td>
					<td>
						<a title="Edit" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $id ?>"><span><i class="fas fa-edit"></i></span></a>
						<a title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="process/delete_student_core.php?id=<?php echo $id ?>"><span><i class="fas fa-trash-alt"></i></span></a>
						<a title="Info" class="btn btn-info btn-sm" href="student_info.php?id=<?php echo $id ?>"><span><i class="fas fa-info-circle"></i></span></a>
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