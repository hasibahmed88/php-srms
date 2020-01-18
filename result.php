<?php 
require_once("./include/config.php");
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


    <div class="col-md-8 col-12">

      <div class="border rounded p-3 bg-light">

      <h4 class="text-center">Search Result</h4>
          <form action="" method="post">
            <div class="form-group">
              <label for="department">Department</label>
              <select name="" id="department" class="form-control form-control-sm">
                <option value="Computer">Computer</option>
                <option value="Electrical">Electrical</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Civil">Civil</option>
                <option value="Textile">Textile</option>
                <option value="RAC">RAC</option>
                <option value="GDPM">GDPM</option>
                <option value="Marine">Marine</option>
              </select>
            </div>

            <div class="form-group">
              <label for="Semister">Semister</label>
              <select name="" id="Semister" class="form-control form-control-sm">
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
              <label for="roll">Roll No</label>
              <input id="roll" type="number" class="form-control form-control-sm"required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-sm"required>
            </div>
          </form>
      </div>

    </div>







  </div>
</div>


        <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>