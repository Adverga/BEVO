<?php
include 'userController.php';
require_once 'modelDonatur.php';
class controllerDonatur extends UserController {
	public $userD;
	function __construct(){
	 	parent::__construct();
	 	$this->userD = new modelDonatur;
	}
	function getData($id){
		return $this->userD->getDataProfile($id);
	}
	function getDataDonasi($id){
		return $this->userD->getDataDonasi($id);
	}
	function getPenerima(){
		return $this->userD->getPenerima();
	}
	function getP_Profil($id){
		return $this->userD->getDataPenerima($id);
	}
	function setDonasi($idP, $idD, $nmrRekening, $jmlDonasi, $fotoBukti){
		$this->userD->saveDonasi($idP, $idD, $nmrRekening, $jmlDonasi, $fotoBukti);
	}
}

@$d = $_REQUEST['d'];
$cd = new controllerDonatur();
switch ($d) {
	case 'profil':
		session_start();
		$id = $_SESSION['id'];
		$_SESSION['data1']=$cd->getData($id);
		$_SESSION['data2']=$cd->getDataDonasi($id);
		header("Location:viewProfilDonatur.php");
		break;
	case 'viewpp':
		session_start();
		$_SESSION['data']=$cd->getPenerima();
		header("Location:viewPilihPenerima.php");
		break;
	case 'viewpd':
		session_start();
		$max = $_REQUEST['i'];
		$data = $_SESSION['data'];
		$idp;
		for ($i=0; $i <= $max; $i++) { 
			$idp = $data['id'];
		}
		$idp = $_SESSION['idp'];
		$_SESSION['data']=$cd->getP_Profil($idp);
		header("Location:viewPenerimaDipilih.php");
		break;
	case 'donasi':
		header("Location:viewDonasi.php");
		break;
	case 'Donate':
		$_SESSION['tmp'] = array('nmrRekening' => $_POST['norek'],'jmlDonasi' => $_POST['donate'] );
		header("Location:viewTataCara.php");
		break;
	case 'submit':
		session_start();
		$tmp = $_SESSION['tmp'];
		$idP = $_SESSION['idp'];
		$idD = $_SESSION['id'];
		$nmrRekening = $tmp['nmrRekening'];
		$jmlDonasi = $tmp['jmlDonasi'];
		$tgl = date("Y/m/d");
		$tktp = $_FILES['ktp']['name']; 
		$tmp = $_FILES['ktp']['tmp_name']; 
		$ktp = date('dmYHis').$tktp; 
		$path = "images/".$ktp;
		move_uploaded_file($tmp, $path);		
		$fotoBukti = 
		$cd->setDonasi($idP, $idD, $nmrRekening, $jmlDonasi, $fotoBukti);
		unset($_SESSION['tmp']);
		header("Location:controllerDonatur.php?d=profil");
		break;
	default:
		header("Location:controllerDonatur.php?d=profil");
		break;
}

?>