<?php
$hostname="localhost";
$username="root";
$password="YES";
$database="cms";
mysqli_connect($hostname,$username,$password,$database);
mysqli_select_db($database) or die("unable to select");
?>