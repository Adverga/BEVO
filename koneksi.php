<?php 
	define('HOST','localhost');
	define('USER','root'); //sesuaikan nama user
	define('PASS',''); //sesuaiakan nama password
	define('DB','bevo');//sesuaiakan naman database
	$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>