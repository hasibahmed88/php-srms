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
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <br>
      <h5 class="text-center">Student Login</h5> <br>

      <div class="border border-success rounded p-4" style="box-shadow: 0px 0px 20px 0px #00000050">
          <form action="process/student_login_core.php" method="POST">
            <div class="form-group">
              <label for="email"><strong>Email address</strong></label>
              <input type="email" name="email" id="email" class="form-control form-control-sm" required>
            </div>
            <div class="form-group">
              <label for="pwd"><strong>Password</strong></label>
              <input id="pwd" type="password" name="password" class="form-control form-control-sm"required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit-login" class="btn btn-success btn-sm"required>
            </div>
            <!-- Email varification -->
                <?php 
                  if (isset($_REQUEST['studentloginFailed'])) {
                    echo "<b style='color:red'>Email or password incorrect!</b>".'<br><br>';
                  }
                 ?>
            <div class="form-group">
              <span>Not student yet?</span><br>
              <a href="student_register.php"><b>Register here</b></a>
            </div>
            
          </form>

      </div>

    </div>



    <div class="col-12 col-md-6">
      <br>
      <h5 class="text-center">Admin Login</h5> <br>
      
      <div class="border border-primary rounded p-4" style="box-shadow: 0px 0px 20px 0px #00000050">
        <form action="process/admin_login_core.php" method="POST">
          <div class="form-group">
            <label for="username"><strong>Username</strong></label>
            <input id="username" name="admin_username" type="text" class="form-control form-control-sm" required>
          </div>

          <div class="form-group">
            <label for="password"><strong>Password</strong></label>
            <input id="password" name="admin_pwd" type="password" class="form-control form-control-sm" required>
          </div>
          <div class="form-group">
            <input type="submit" name="admin-btn" value="Login" class="btn btn-primary btn-sm">
          </div>
        </form>
        <?php 
          if (isset($_REQUEST['loginFailed'])) {
            echo "<p class='text-danger'>Username or Password incorrect!</p>";
         }
         ?>
      </div>
       <br>
       <br>

    </div>
  </div>
</div>








        <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>