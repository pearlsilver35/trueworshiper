<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_twconn = "localhost";
$database_twconn = "trueworshiper";
$username_twconn = "root";
$password_twconn = "";
//What!!!
$twconn = mysql_pconnect($hostname_twconn, $username_twconn, $password_twconn) or trigger_error(mysql_error(),E_USER_ERROR); 
//PHP has evolved
// $twconn = mysqli_connect($hostname_twconn, $username_twconn, $password_twconn, $database_twconn) or trigger_error(mysql_error(),E_USER_ERROR); 
$shoogarh_conn = mysqli_connect($hostname_twconn, $username_twconn, $password_twconn, $database_twconn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>