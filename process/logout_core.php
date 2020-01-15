<?php 


setcookie("USSD",$username,time()-86400*365,"/");
header("location: ../index.php");

 ?>