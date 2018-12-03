<?php
//require_once 'user.php';
require_once 'modelUser.php';

class UserController 
{
	public $us;
	public function UserController(){
		$this->us = new user();
	}
	public function login($username, $password)
	{
		if ($this->us->getAuth($username, $password)) {
			session_start();
			$jenis = $this->us->getJenis($username);
			$_SESSION['user'] = $username;
			$_SESSION['jenis'] = $jenis;
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
	public function logout()
	{
		session_start();
		session_destroy();
	}
	public function register($username,$email,$password,$nmrHP,$alamat,$foto,$jenis){
		if ($this->us->setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis)) 
		{
			return true;
		}else
		{
			return false;
		}
	}
}
?>