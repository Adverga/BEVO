<?php 
$namahost = "localhost";
$username = "admin";
$password = "12";
$database = "bevo";
$conn = mysqli_connect($namahost, $username, $password) or die("Failed");
mysqli_select_db($conn, $database) or die("Failed");
?>