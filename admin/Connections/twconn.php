<?php
# FileName="Connection_php_mysqli.htm"
# Type="mysqli"
# HTTP="true"
$hostname_twconn = "localhost";
$database_twconn = "trueworshiper";
$username_twconn = "root";
$password_twconn = "";
//What!!!
$twconn = mysqli_connect($hostname_twconn, $username_twconn, $password_twconn, $database_twconn) or trigger_error(mysqli_error(),E_USER_ERROR); 
//PHP has evolved
// $twconn = mysqli_connect($hostname_twconn, $username_twconn, $password_twconn, $database_twconn) or trigger_error(mysqli_error(),E_USER_ERROR); 
$shoogarh_conn = mysqli_connect($hostname_twconn, $username_twconn, $password_twconn, $database_twconn) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>