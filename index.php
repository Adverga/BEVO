<?php
require_once('userController.php');
require_once('controllerAdmin.php')
require_once('user.php');

@$op = $_REQUEST['op'];

$user_controller = new UserController();
$controllerAdmin = new controllerAdmin();
switch($op){
	case 'login':
		$username = $_POST['user'];
		$password = $_POST['pass'];

		if($user_controller->login($username, $password)){
			if ($user_controller->getJenis($username) == 'admin') {
				header("Location:viewAdmin.php?id=admin");
			}
			if ($user_controller->getJenis($username) == 'donatur') {
				header("Location:viewDonatur.php?id=$username");
			}
			if ($user_controller->getJenis($username) == 'penerima') {
				header("Location:viewPenerima.php?id=$username");
			}
		}else header("Location:login.php?err=1");
		break;
	case 'logout':
		$user_controller->logout();
		header("Location:login.php");
		break;
	case 'register' :
		$$username = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$nmrHP = $_POST['notelp'];
		$alamat = $_POST['Alamat'];
		$foto = addslashes(file_get_contents($_FILES['unggahPP']['tmp_name']));
		$jenis = $_POST['member'];
		$user_controller->register($username,$email,$password,$nmrHP,$alamat,$foto,$jenis);
		header("Location:login.php");
	default:
		header("Location:Login.php");
		break;
}
?>