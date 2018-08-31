<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

// DESARROLLO
/*
$hostname_conexion='localhost';
$database_conexion="admin_development";
$username_conexion="admin_dvlopmnt";
$password_conexion="devel0pment#";
*/

// PRODUCCION
$hostname_conexion = "oetcapital.com";
$database_conexion = "admin_gatoradedev";
$username_conexion = "admin_gatorade";
$password_conexion = "#i-SexW_[MBE";

$conexion = mysql_pconnect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("$database_conexion");
?>
