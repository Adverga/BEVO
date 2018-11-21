<?php
include 'user.php';
	class UserController 
	{	
		public $us;	
		function __construct(argument)
		{
			$this->us = new user();
		}
		public function viewHome()
		{
			include 'viewHome.php';
		}
		public function viewLogin()
		{
			include 'viewLogin.php';
		}
		public function login($username, $password)
		{
			if ($us->getAuth($username, $password)) {
				session_start();
				$user = new User($username);
				$_SESSION['user'] = $user;
				return true;
			} else {
				return false;
			}
		}
		public function logout()
		{
			session_start();
			session_destroy();
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