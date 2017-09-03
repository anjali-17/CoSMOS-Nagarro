<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysl_database = "turyst";

$conn = mysql_connect($mysql_host, $mysql_user, $mysql_pass);
mysql_select_db($mysl_database, $conn);
?>