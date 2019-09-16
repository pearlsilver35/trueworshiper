<?php
# FileName="Connection_php_mysqli.htm"
# Type="mysqli"
# HTTP="true"
$hostname_twconn = "localhost";
$database_twconn = "trueworshiper";
$username_twconn = "root";
$password_twconn = "";
$twconn = mysqli_pconnect($hostname_twconn, $username_twconn, $password_twconn) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>