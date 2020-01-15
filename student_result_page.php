<?php 
require_once("./include/config.php");


if (isset($_COOKIE["USSD"])) {
  header("location: dashboard.php");
}
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

<div class="my-4">
    <h2 class="text-center text-dark">National Institute of Engineering & Technology</h2>
</div>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <h5 class="text-center">Search Result</h5><br>

      <div class="border border-info rounded p-4" style="box-shadow: 0px 0px 20px 0px #00000050">
        <div class="row">
          <!-- <div class="col-12 text-right">
            <a style="text-decoration: none" class="text-primary" href="index.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;<b>Back to home</b></a>
          </div> -->
        </div>

          <form action="result_page.php" method="POST">
                <div class="form-group">
                    <label for="department">Department</label>
                    <select name="department" id="department" class="form-control-sm form-control" required>
                      <option value="">Select</option>
                      <option value="Computer">Computer</option>
                      <option value="Electrical">Electrical</option>
                      <option value="Civil">Civil</option>
                      <option value="Mechanical">Mechanical</option>
                      <option value="Textile">Textile</option>
                      <option value="RAC">RAC</option>
                      <option value="Marine">Marine</option>
                      <option value="GDPM">GDPM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roll">Roll no</label>
                    <input type="number" id="roll" name="roll" class="form-control-sm form-control" required>
                </div>

                <div class="form-group">
                  <input type="submit" value="Search" name="submit-search-result" class="btn btn-success btn-sm">
                </div>
                <?php 
                  if (isset($_REQUEST['resultNotfound'])) {
                    echo "<strong class='text-danger'>Result not found!</strong>";
                     }
                 ?>
          </form>
      </div>

    </div>

        <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>