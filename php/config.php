<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
  }
  else{
    echo "Database connection error".mysqli_connect_error();
  }
?>
