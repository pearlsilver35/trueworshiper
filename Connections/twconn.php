<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_twconn = "localhost";
$database_twconn = "trueworshiper";
$username_twconn = "root";
$password_twconn = "";
$twconn = mysql_pconnect($hostname_twconn, $username_twconn, $password_twconn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>