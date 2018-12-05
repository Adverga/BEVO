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
		return $this->userD->getPData($id);
	}
	function saveDonasi($idP, $idD, $nmrRekening, $jmlDonasi, $fotoBukti){
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
		$_SESSION['data2']=$cd->getDonasi($id);
		header("Location:viewProfilPenerima.php");
		break;
	case 'viewpp':
		session_start();
		$_SESSION['data']=$cd->getPenerima();
		header("Location:viewPilihPenerima.php");
		break;
	case 'viewpd':
		session_start();
		$id = $_SESSION['id'];
		$_SESSION['data']=$cd->getP_Profil($id);
		$
	default:
		header("Location:controllerDonatur.php?d=profil");
		break;
}

?>