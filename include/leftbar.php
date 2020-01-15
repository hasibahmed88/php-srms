  

<div class="col-md-3 col-lg-2 m-0 p-0 d-none d-md-block">
  <div style="height:130vh" class="dash-sidebar p-3">
        
<!-- User profile section -->
<?php 
  
  $getAdminInfo = "SELECT * FROM admin";
  $admin_query = mysqli_query($connect,$getAdminInfo);
  while ($rows = mysqli_fetch_array($admin_query)) {
    $name = $rows['name'];
    $bio = $rows['bio'];
    $dp = $rows['dp'];

    ?>

    <div class="collapse show profileBlock border rounded">
      <div class="user-profile">
        <div class="user-img" style="border: 1px solid #555">
          <img style="width:100%;height: 100%;" src="./admin-img/<?php echo $dp ?>" alt="">
        </div>
        <div class="user-info text-center">
          <h5><?php echo $name ?></h5>
          <h6><?php echo $bio ?></h6>
        </div>
      </div>
    </div>

  <?php }
 ?>
 
        <p class="pt-3 text-muted">MAIN CATEGORY</p>
        <div class="">
          <ul class="p-0">
            <li>
              <a href="dashboard.php"><span><i class="fas fa-tachometer-alt"></i></span>&nbsp;&nbsp;Dashboard</a>
            </li>
          </ul>
        </div>

        <p class="text-muted">APPEARANCE</p>

        <div class="menu-list">
          <ul class="p-0 p-0">
            <li class="">
              <a href="#" data-toggle="collapse" data-target="#departments" ><span><i class="fas fa-file-alt"></i></span>&nbsp;&nbsp;Departments &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="departments">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_department.php"><small><span><i class="fas fa-plus"></i></span>&nbsp;&nbsp;Add Department</small></a></li>
                  <li class="pl-2"><a href="all_department.php"><small><span><i class="fas fa-align-justify"></i></span>&nbsp;&nbsp;All Department</small></a></li>
                </ul>
              </div>
            </li>
            <!--  -->
            <li>
              <a href="#"data-toggle="collapse" data-target="#Students" ><span><i class="fas fa-users-cog"></i></span>&nbsp;&nbsp;Students &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="Students">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_student.php"><small><span><i class="fas fa-user-plus"></i></span>&nbsp;&nbsp;Add Student</small></a></li>
                  <li class="pl-2"><a href="all_student.php"><small><span><i class="fas fa-users"></i></span>&nbsp;&nbsp;All Student</small></a></li>
                </ul>
              </div>
            </li>

            <!--  -->
            <li>
              <a href="#" data-toggle="collapse" data-target="#Result" ><span><i class="fas fa-graduation-cap"></i></span>&nbsp;&nbsp;Result &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="Result">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_result.php"><small><span><i class="fas fa-folder-plus"></i></span>&nbsp; &nbsp;Add Result</small></a></li>
                  <li class="pl-2"><a href="manage_result.php"><small><span><i class="fas fa-user-cog"></i></span>&nbsp; &nbsp;Manage Result</small></a></li>
                </ul>
              </div>
            </li>

            <!--  -->
            <li>
              <a href="admin.php" ><span><i class="fas fa-user-shield"></i></span>&nbsp;&nbsp;Admin</a>
            </li>
          </ul>
        </div>

  </div>
</div>


