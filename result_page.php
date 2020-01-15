<?php 
require_once("include/config.php");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,600i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>NIET</title>
  </head>
  <body>


<div class="container">
	<div class="row">
		<div class="col-12 m-0 p-0 border bg-light p-5">

	<div class="mb-4">
    	<h2 class="text-center text-dark">National Institute of Engineering & Technology</h2>
	</div>	

<?php

if (isset($_REQUEST['submit-search-result'])) {  // main if statement

	$department = mysqli_real_escape_string($connect,$_REQUEST['department']);
	$roll = mysqli_real_escape_string($connect,$_REQUEST['roll']);

	$resultInfo = "SELECT * FROM results WHERE roll='$roll' AND department = '$department' ";
	$query = mysqli_query($connect,$resultInfo);
	$countResult = mysqli_num_rows($query);

	if ($countResult>0) {   // second if statement

		while ($result_row = mysqli_fetch_array($query)) {
			$total_marks = $result_row['total_marks'];
			$avg_marks = $result_row['avg_marks'];
			$total_subject = $result_row['total_subject'];
			$gpa = $result_row['gpa'];

			?>

<?php 
	$getData = "SELECT * FROM students WHERE roll='$roll' ";
	$run_query = mysqli_query($connect,$getData);

	while ($rows = mysqli_fetch_array($run_query)) {

		$fname = $rows['fname'];
		$lname = $rows['lname'];
		$identity = $rows['identity'];
		$roll = $rows['roll'];
		$reg = $rows['reg'];
		$department = $rows['department'];
		$semister = $rows['semister'];
		$phone = $rows['phone'];
		$email = $rows['email'];
		$dob = $rows['dob'];
		$blood = $rows['blood'];
		$home = $rows['home'];
		$dp = $rows['dp'];

		?>

<div class="m-md-3 p-3 bg-light rounded">

	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
		
			<div class="row justify-content-between">
				<div class="col-10">
					<h5>Student name: <strong><?php echo $fname.' '.$lname ?></strong></h5>
				</div>
				<div class="col-2">
					<a style="font-size:12px" href="student_result_page.php" class="btn btn-dark btn-sm">Back</a>
				</div>
				
			</div>
			<hr>
			<div class="row justify-content-center">
				<div class="col-12 col-md-4 mb-4">
					<center>
						<div style="width:150px;min-height: 150px;" class="border rounded">
						<img style="width:100%" class="border roudned" src="img/<?php echo $dp ?>" alt="Student photo">
					</div>
					</center>
				</div>
			</div>

			<div class="row justify-content-around">
				<div class="col-12 ">
					<h6 class="text-center"><big class="text-center mb-3">Result</big></h6>
					<table class="table table-bordered">
			<!-- result -->
						<tr>
							<td class="p-2 text-right">Total marks :</td>
							<td class="p-2"><?php echo $total_marks ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Average marks :</td>
							<td class="p-2"><?php echo $avg_marks ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Total subjects :</td>
							<td class="p-2"><?php echo $total_subject ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">GPA :</td>
							<td class="p-2"><?php echo $gpa ?></td>
						</tr>
						<tr class="text-center">
							<td colspan="2" >
								<h6 class="text-center"><big class="text-center mb-3">Information</big></h6>
							</td>
						</tr>


			<!-- Information -->
						<tr>
							<td class="p-2 text-right">First Name :</td>
							<td class="p-2"><?php echo $fname ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Last Name :</td>
							<td class="p-2"><?php echo $lname ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">ID :</td>
							<td class="p-2"><?php echo $identity ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Roll No :</td>
							<td class="p-2"><?php echo $roll ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Register No :</td>
							<td class="p-2"><?php echo $reg ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Department :</td>
							<td class="p-2"><?php echo $department ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Semister :</td>
							<td class="p-2"><?php echo $semister ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Phone :</td>
							<td class="p-2"><?php echo $phone ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Email :</td>
							<td class="p-2"><?php echo $email ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Date of Birth :</td>
							<td class="p-2"><?php echo $dob ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Blood group :</td>
							<td class="p-2"><?php echo $blood ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Address :</td>
							<td class="p-2"><?php echo $home ?></td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>

	<?php }

	?>


	


		<?php }


	} // second if statement
	else{
		header("location: student_result_page.php?resultNotfound");
		exit();
	}

} // main if statement

 ?>


</div>
	</div>
</div>





    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>