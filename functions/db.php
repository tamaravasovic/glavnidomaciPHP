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
  function query($query){
    global $con;
    return mysqli_query($con, $query);
  }

  function fetch_array($result){
    global $con;
    return mysqli_fetch_array($result);
  }
  function get_last_id(){
    global $con;
    $last_id = $con->insert_id;
    return $last_id;
  }
  function confirm($result){
    global $con;
    if(!$result){
      die("QUERY FAILED" . mysqli_error($con));
    }
  }
  ?>