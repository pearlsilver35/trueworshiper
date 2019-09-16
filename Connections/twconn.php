<?php

$hostname_twconn = "localhost";
$database_twconn = "trueworshiper";
$username_twconn = "root";
$password_twconn = "";

$twconn = mysqli_connect($hostname_twconn,$username_twconn,$password_twconn,$database_twconn);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>