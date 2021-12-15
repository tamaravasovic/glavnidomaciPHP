<?php
  $con = new mysqli('localhost', 'root', '', 'skiservis');

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }


  function row_count($result){
    return mysqli_num_rows($result);
  }

  function clean($string){
    return htmlentities($string);

  }
  ?>