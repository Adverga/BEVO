<?php 
$namahost = "localhost";
$username = "admin";
$password = "12";
$database = "bevo";
$link = mysqli_connect($namahost, $username, $password) or die("Failed");
mysqli_select_db($link, $database) or die("Failed");
?>