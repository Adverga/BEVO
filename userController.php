<?php
require 'koneksi.php';
include 'user.php';
	class UserController 
	{	
		public $us;
		public $arr;
		function __construct()
		{
			$this->us = new user();
			$QUERY = MYSQLI_QUERY($conn,"SELECT * FROM bevo;"   ); 
 			$arr = array(); 
 			$i = 0;
 			while ($ROW = MYSQLI_FETCH_ASSOC($QUERY)) {
 				$tmp = new stdClass; 
 				$tmp-> id = $QUERY["id"];
				$tmp-> nama = $QUERY["nama"];
				$tmp-> email = $QUERY["email"];
				$tmp-> username = $QUERY["username"];
				$tmp-> password = $QUERY["password"];
				$tmp-> telepon = $QUERY["telepon"];
				$tmp-> alamat = $QUERY["alamat"];
				$tmp-> jenis = $QUERY["jenis"];
				$arr[$i++] = $mhs;
 			}
		}
		public function login($username, $password)
		{
			if ($this->getAuth($username, $password)) {
				session_start();
				$user = new User($username);
				$_SESSION['user'] = $user;
				return true;
			} else {
				return false;
			}
		}
		public function getAut($user, $pass){
			boolean $val = false;
			for ($i=0; $i < count($arr); $i++) { 
				if ($arr[$i]['username'] == $user && $arr[$i]['password'] == $pass) {
					$val = true;
				}
			}
			return $val;
		}
		public function logout()
		{
			session_start();
			session_destroy();
		}
		public function viewHome()
		{
			include 'viewHome.php';
		}
		public function viewLogin()
		{
			include 'viewLogin.php';
		}
		public function getJenis($user){
			for ($i=0; $i < count($arr); $i++) { 
				if ($arr[$i]['username'] == $user) {
					return $arr[$i]['jenis'];
					break;
				}
			}
		}
		public function viewRegister()
		{
			include 'viewRegister.php';
		}
		public function register($data[])
		{
			$this->us.setDataUser();
		}
		public function viewProfile($id)
		{
			include 'viewProfile.php';
		}
		public function viewEditProfile()
		{
			include 'viewEditProfile.php';
		}
		public function editProfile($data[])
		{
			$this->us.updateDataUser($data);
		}

	}
?>