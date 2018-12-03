<?php
require_once('userController.php');
require_once('modelUser.php');
//require_once('controllerAdmin.php');
//require_once('user.php');

@$op = $_REQUEST['op'];

$user_controller = new UserController();
//$controllerAdmin = new controllerAdmin();
switch($op){
	case 'Login':
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$user_controller->login($username, $password);
		break;
	case 'logout':
		$user_controller->logout();
		header("Location:login.php");
		break;
	case 'Register' :
		$username = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$nmrHP = $_POST['notelp'];
		$alamat = $_POST['Alamat'];
		$foto = $_FILES['unggahPP']['name'];
		$tmp = $_FILES['unggahPP']['tmp_name'];
		$jenis = $_POST['member'];
		// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
		// Set path folder tempat menyimpan fotonya
		$path = "images/".$fotobaru;		
		// Proses upload
		if(move_uploaded_file($tmp, $path)){ 
		// Cek apakah gambar berhasil diupload atau tidak
			if ($user_controller->register($username,$email,$password,$nmrHP,$alamat,$fotobaru,$jenis)) {
				header("Location:login.php");
			}else{
				header("Location:register.php?err=save database");
			}
		}else{
			header("Location:register.php?err=foto Gagal diupload");
		}
	default:
		header("Location:Login.php");
		break;
}
?>