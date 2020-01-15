<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>Manage Result</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Manage Result</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	

	<div class="row justify-content-center">
	<div class="col-12">

		<div class="row justify-content-between mb-2">
			<div class="col-3">
				<a href="add_result.php" class="btn btn-primary btn-sm">Add Result</a>
			</div>
			<div class="col-2">
				<form action="">
					<div class="input-group">
						<input type="text" name="search_key" class="form-control form-control-sm" >
						<input type="submit" value="Search" name="result_search_btn" class="btn btn-success btn-sm">
					</div>
				</form>
			</div>
		</div>
		<hr>

<!-- Search option -->
	
	<?php 
		if (isset($_REQUEST['result_search_btn'])) {
			$search_key = mysqli_real_escape_string($connect,$_REQUEST['search_key']);
			$search = "SELECT * FROM results WHERE department LIKE '%$search_key%' OR semister LIKE '%$search_key%' OR roll LIKE '%$search_key%' ";
			$query = mysqli_query($connect,$search);
			$countRows = mysqli_num_rows($query);
			$serial = 1;

			?>

		<!-- <div class="row justify-content-between mb-2">
			<div class="col-3">
				<a href="add_result.php" class="btn btn-primary btn-sm">Add Result</a>
			</div>
			<div class="col-2">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="search_key" class="form-control form-control-sm" value="<?php echo $search_key ?>" >
						<input type="submit" value="Search" name="result_search_btn" class="btn btn-success btn-sm">
					</div>
				</form>
			</div>
		</div>
		<hr> -->


			<h6>There are <?php echo "<span class='text-success'><strong>$countRows</strong></span>" ?> result found!</h6>
			<table class="table table-sm table-responsive-sm table-striped table-hover table-bordered">

					<tr class="bg-dark text-light">
						<th>No</th>
						<th>Department</th>
						<th>Semister</th>
						<th>Roll</th>
						<th>Total subject</th>
						<th>Total marks</th>
						<th>Average marks</th>
						<th>CGPA</th>
						<th>Action</th>
					</tr>
		
				<?php 

					while ($searchInfo = mysqli_fetch_array($query)) {
						$id = $searchInfo['id'];
						$department = $searchInfo['department'];
						$semister = $searchInfo['semister'];
						$roll = $searchInfo['roll'];
						$total_subject = $searchInfo['total_subject'];
						$total_marks = $searchInfo['total_marks'];
						$avg_marks = $searchInfo['avg_marks'];
						$gpa = $searchInfo['gpa'];
						?>
							
					<tr>
						<td><?php echo $serial; $serial++ ?></td>
						<td><?php echo $department ?></td>
						<td><?php echo $semister ?></td>
						<td><?php echo $roll ?></td>
						<td><?php echo $total_subject ?></td>
						<td><?php echo $total_marks ?></td>
						<td><?php echo $avg_marks ?></td>
						<td><?php echo $gpa ?></td>
						<td>
							<a href="edit_result.php?id=<?php echo $id ?>" class="btn btn-info btn-sm"><span><i class="fas fa-edit"></i></span></a>
							<a href="process/delete_result_core.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') "><span><i class="fas fa-trash-alt"></i></span></a>
						</td>
					</tr>

					<?php }

					


				 ?>
			 </table>

			 
			 <hr>


			<?php }	

	 ?>




		<div class="border bounded p-3 rounded">
			<table class="table table-sm table-responsive-sm table-striped table-hover table-bordered">
					<tr class="bg-dark text-light">
						<th>No</th>
						<th>Department</th>
						<th>Semister</th>
						<th>Roll</th>
						<th>Total subject</th>
						<th>Total marks</th>
						<th>Average marks</th>
						<th>CGPA</th>
						<th>Action</th>
					</tr>
			<?php 
				
					$getResult = "SELECT * FROM results";
					$query = mysqli_query($connect,$getResult);

					$count = 1;
					while ($rows = mysqli_fetch_array($query)) {
						$id = $rows['id'];
						$department = $rows['department'];
						$semister = $rows['semister'];
						$roll = $rows['roll'];
						$total_subject = $rows['total_subject'];
						$total_marks = $rows['total_marks'];
						$avg_marks = $rows['avg_marks'];
						$gpa = $rows['gpa'];

						?>
						
							<tr>
								<td><?php echo $count; $count++ ?></td>
								<td><?php echo $department ?></td>
								<td><?php echo $semister ?></td>
								<td><?php echo $roll ?></td>
								<td><?php echo $total_subject ?></td>
								<td><?php echo $total_marks ?></td>
								<td><?php echo $avg_marks ?></td>
								<td><?php echo $gpa ?></td>
								<td>
									<a href="edit_result.php?id=<?php echo $id ?>" class="btn btn-info btn-sm"><span><i class="fas fa-edit"></i></span></a>
									<a href="process/delete_result_core.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') "><span><i class="fas fa-trash-alt"></i></span></a>
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