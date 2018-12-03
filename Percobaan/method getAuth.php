<?php
include "koneksi.php";

		function getAuth($user , $pass){
			$val = false;
			$sql = "SELECT * from customer where username = '$user' and password = '$pass'";
			$result = mysqli_query($link, $sql);
			$row = mysqli_bum_rows($result);
			if ($row == 1) {
				$val = true;
			}
			return $val;
		}
	echo getAuth("admin", "admin");
?>
