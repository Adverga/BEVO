<?php
define('HOST','localhost');
define('USER','root'); //sesuaikan nama user
define('PASS','12345'); //sesuaiakan nama password
define('DB','bevo');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
class test 
{
	public function login($user, $pass)
	{
		if ($this->getAuth($user, $pass)) {
			$id = $this->getIdUser($user);
			$jenis = $this->getJenis($user);
			if ($jenis == 'admin') {
				header("Location:viewAdmin.php?id=admin");
			}
			if ($jenis == 'donatur') {
				header("Location:viewDonatur.php?id=$username");
			}
			if ($jenis == 'Calon penerima beasiswa') {
				header("Location:viewPenerima.php?id=$username");
			}
		}else header("Location:login.php?err=1");
	}
	public function getAuth($user , $pass){
			global $conn;
			$sql = "SELECT * FROM user WHERE username = '$user' and password = '$pass'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			if($count == 1)
				return true;
			else
				return false;
	}
	public function getIdUser($user) {
		global $conn;
        $q = $conn->query("SELECT Id FROM user where nama = '$user'");
        $data = mysqli_fetch_assoc($q);
        return $data['Id'];
    }

    public function getJenis($user) {
		global $conn;
        $q = $conn->query("SELECT `jenis` FROM `user` where `nama` = '$user'");
        $data = mysqli_fetch_assoc($q);
        return $data['jenis'];
    }
}
	$testObject = new test();
	//sesuaikan username dan password di database
	$testObject->login("rizal", "calon");
?>