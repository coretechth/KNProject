<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'knconvert';
$dbconfig = mysqli_connect($host,$username,$password,$database);
mysqli_set_charset($dbconfig, "utf8");


?>
