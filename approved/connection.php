<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
//$mysql_password = "";
$mysql_database = "list";
$prefix = "";
$bd = mysql_connect("localhost", "root", $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>








