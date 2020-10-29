<?php
$dbServerName = "freedb.tech";
$dbUsername = "freedbtech_samitha";
$dbPassword = "123@Samitha";
$dbName = "freedbtech_samitha";

// create connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno()){
    echo "Database Connection Failed";
  }else{
    //echo "Database Connected";
  }
?>
