<?php include("includes/header.php") ?>
<?php
  Confirm_Login();
 ?>
<?php
  $_SESSION["User_ID"] = null;
  $_SESSION["User_Name"] = null;
  setcookie("user", "", time() - 3600, '/' );
  session_destroy();
  redirect("./login.php");
 ?>
