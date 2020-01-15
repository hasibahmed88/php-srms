<?php 
require_once("header.php");

 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
<style>
	body h6{
		font-size:16px;
	}
</style>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 bg-light" style="border-bottom:0.5px solid #ddd">
		<h3>Add Result</h3>
	</div>

<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Result</li>
  </ol>
</div>


<div class="m-md-3 p-3 bg-light rounded">
	

	<div class="row justify-content-center">
		<div class="col col-md-8">
			<div class="border bounded p-3 rounded">

				<?php 
					if (isset($_REQUEST['resultInsertedSuccessfully'])) {
						?>
						<div class="alert alert-success">
							<strong>Success! Result added successfully.</strong>
						</div>
					<?php }

				 ?>
				
				<h5>Add Result</h5><br>

				<form action="process/add_result_core.php" method="post">
					<div class="form-group">
						<label for="department">Department</label>
						<select class="form-control form-control-sm" name="department" id="department">
							<option>Select</option>
							<option value="Computer">Computer</option>
							<option value="Electrical">Electrical</option>
							<option value="Mechanical">Mechanical</option>
							<option value="Civil">Civil</option>
							<option value="RAC">RAC</option>
							<option value="Textile">Textile</option>
							<option value="Marine">Marine</option>
							<option value="GDPM">GDPM</option>
						</select>
					</div>
					<div class="form-group">
						<label for="semister">Semister</label>
						<select class="form-control form-control-sm" name="semister" id="semister">
							<option>Select</option>
							<option value="1st">1st</option>
							<option value="2nd">2nd</option>
							<option value="3rd">3rd</option>
							<option value="4th">4th</option>
							<option value="4th">4th</option>
							<option value="5th">5th</option>
							<option value="6th">6th</option>
							<option value="7th">7th</option>
							<option value="8th">8th</option>
						</select>
					</div>
					<div class="form-group">
						<label for="roll">Board Roll</label>
						<input type="number" id="roll" name="roll" class="form-control-sm form-control">
					</div>
					<div class="form-group">
						<label for="total_marks">Total marks</label>
						<input type="number" name="total_marks" id="total_marks" class="form-control-sm form-control">
					</div>
					<div class="form-group">
						<label for="avg_marks">Total subjects</label>
						<input type="number" name="total_subject" id="avg_marks" class="form-control-sm form-control">
					</div>
					
					<div class="form-group">
						<input type="submit" name="result_btn" class="btn btn-sm btn-success" >
					</div>


				</form>
						
			</div>
		</div>

	</div>

			


</div>


</div>
</div>




 <?php 
require_once("footer.php");

 ?>