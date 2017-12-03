<?php

$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="bayanihan";

$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS);
mysqli_select_db($con,$DB_NAME)or die("unable to select database");

?>
