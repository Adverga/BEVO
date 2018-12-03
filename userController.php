<?php
require_once 'koneksi.php';
//require_once 'user.php';
require_once 'modelUser.php';

class UserController 
{
	$user;
	function __construct()
	{
		$this->user = new User();
	}
	public function login($username, $password)
	{
		if ($username == $user->getIdUser($username)) {
			# code...
		}
/*		if ($this->getAuth($username, $password)) {
			session_start();
			$user = new User($username, $this->getJenis($username));
			$_SESSION['user'] = $user;
			return true;
		} else {
			return false;
		}*/
	}
	public function getAuth($user, $pass)
	{
		global $conn;
		$val = false;
		$sql = "SELECT * from user where username = '$user' and password = '$pass'";
		$result = MYSQLI_QUERY($conn, $sql);
		$row = mysqli_num_rows($result);
		if ($row == 1) {
			$val = true;
		}
		return $val;
	}
	public function logout()
	{
		session_start();
		session_destroy();
	}
	public function getJenis($user){
		global $conn;
		$QUERY = MYSQLI_QUERY($conn,"SELECT * FROM user where username = '$user'");
 		$ROW = MYSQLI_FETCH_ASSOC($QUERY);
 		$tmp = $ROW["jenis"];
 		return $tmp;
	}public function register($username,$email,$password,$nmrHP,$alamat,$foto,$jenis){
		
	}
}
?>