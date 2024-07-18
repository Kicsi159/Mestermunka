<?php

$sname= "localhost";
$unmae= "root";
$password = "mysql";

$db_name = "firstpadlo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}