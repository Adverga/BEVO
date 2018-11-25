<?php
require_once('userController.php');
require_once('user.php');

@$op = $_REQUEST['op'];

$user_controller = new UserController();

switch($op){
	case 'login':
		$username = $_POST['user'];
		$password = $_POST['pass'];

		if($user_controller->login($username, $password)){
			if ($user_controller->jenis == 'admin') {
				header("Location:viewAdmin.php");
			}
			if ($user_controller->jenis == 'donatur') {
				header("Location:viewDonatur.php");
			}
			if ($user_controller->jenis == 'penerima') {
				header("Location:viewPenerima.php");
			}
		}else header("Location:login.php?err=1");
		break;
	case 'logout':
		$user_controller->logout();
		header("Location:login.php");
		break;
	default:
		header("Location:Login.php");
		break;

}
?>