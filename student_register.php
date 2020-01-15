<?php 
session_start();
session_destroy();
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
      <h5 class="text-center">Student Register</h5><br>

      <div class="border border-info rounded p-4" style="box-shadow: 0px 0px 20px 0px #00000050">
        <div class="row">
          <div class="col-12 text-right">
            <a style="text-decoration: none" class="text-primary" href="index.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;<b>Back to home</b></a>
          </div>
        </div>

          <form action="process/student_register_core.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control-sm form-control" placeholder="Ex: John Doe">
                </div>
                <div class="form-group">
                    <label for="roll">Roll no</label>
                    <input type="number" id="roll" name="roll" class="form-control-sm form-control" placeholder="Ex: 12345">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control-sm form-control" placeholder="Ex: user@domain.com">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control-sm form-control" placeholder="password at least 6 characters">
                </div>
                <div class="form-group">
                  <label for="con_password">Confirm password</label>
                  <input type="password" id="con_password" name="con_password" class="form-control-sm form-control">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit-register" class="btn btn-success btn-sm">
                </div>
            
          <!-- passowrd not match -->
                <?php 
                  if (isset($_REQUEST['bothPasswordnotmatched'])) {
                    echo "<b style='color:red'>Both password not match!</b>".'<br><br>';
                  }
                 ?>
          <!-- Short passowrd -->
                <?php 
                  if (isset($_REQUEST['shortpassword'])) {
                    echo "<b style='color:red'>Password at least 6 characters!</b>".'<br><br>';
                  }
                 ?>
          <!-- Email varification -->
                <?php 
                  if (isset($_REQUEST['emailAlreadyUsed'])) {
                    echo "<b style='color:red'>Email already used!</b>".'<br><br>';
                  }
                 ?>

          <!-- Register success -->
                <?php 
                  if (isset($_REQUEST['RegisterSussess'])) {
                    echo "<b style='color:#28a745'>Register successfull! You can login now!</b>".'<br><br>';
                  }
                 ?>
  

                <div class="form-group">
                    <span>Have an account?</span><br>
                    <a href="index.php"><b>Login here</b></a>
                </div>
          </form>
      </div>

    </div>




        <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>