<?php
define('HOST','localhost');
define('USER','root'); //sesuaikan nama user
define('PASS','12345'); //sesuaiakan nama password
define('DB','bevo');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
class test{
	public function register($username,$email,$password,$nmrHP,$alamat,$foto,$jenis){
		if ($this->setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis)) 
		{
			return true;
		}else
		{
			return false;
		}
	}
	public function setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis) {
        global $conn;
        $q = $conn->query("INSERT INTO `user` ( `nama`, `email`, `username`, `password`, `telepon`, `alamat`, `foto`, `jenis`) VALUES ('$username', '$email', '$username', '$password', '$nmrHP', '$alamat', '$foto', '$jenis')");
        if($q) return true;
        else return false;
    }
}
$testObject = new test();
$testObject->register("sasa","sasa","sasa","sasas","sasas",NULL,"donatur");
echo (bool) $testObject;
?>