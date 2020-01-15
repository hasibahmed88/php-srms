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
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="manage_result.php">Manage result</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Result</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	

	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
			<?php 
				if (isset($_REQUEST['id'])) {
					$id = $_REQUEST['id'];

					$getData = "SELECT * FROM results WHERE id='$id' ";
					$query = mysqli_query($connect,$getData);
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
				<form action="process/edit_result_core.php" method="POST">
					<div class="form-group">
						<label for="department">Department</label>
						<input type="text" class="form-control form-control-sm" name="department" id="department" value="<?php echo $department ?>">
					</div>
					<div class="form-group">
						<label for="semister">Semister</label>
						<input type="text"class="form-control form-control-sm" name="semister" id="semister" value="<?php echo $semister ?>">
					</div>
					<div class="form-group">
						<label for="roll">Roll No</label>
						<input type="number" value="<?php echo $roll ?>" name="roll" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<label for="roll">Total subject</label>
						<input type="number" name="total_subject" value="<?php echo $total_subject ?>" id="roll" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<label for="total_marks">Total marks</label>
						<input type="number" id="total_marks" name="total_marks" value="<?php echo $total_marks ?>" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<input type="hidden" name="student_id" value="<?php echo $id ?>">
						<input type="submit" value="Update" name="update_result_btn" class="btn btn-success btn-sm">
					</div>
				

					<?php }
				}

			 ?>
			</form>
		</div>
	</div>
</div>

</div>



</div>



 <?php 
require_once("footer.php");

 ?>