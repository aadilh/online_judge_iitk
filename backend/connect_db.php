<?php

$conn_error = "Unable to connect.";

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$db = "onj";

if (!@mysql_connect($mysql_host,$mysql_user,$mysql_password) || !@mysql_select_db($db))
	die("Could not connect"); 
?>