<?php
include 'userController.php';
require_once 'modelPenerima.php';

class controllerPenerima extends UserController
{
	public $userP;
	function __construct()
	{
		parent::__construct();
		$this->userP = new modelPenerima();
	}
	function getData($id){
		return $this->userP->getgetDataProfile($id);
	}
	function getDonasi($id){
		return $this->userP->getArrayDonasi($id);
	}
}

@$p = $_REQUEST['p'];
$cp = new controllerPenerima();

switch ($p) {
	case 'profil':
		session_start();
		$id = $_SESSION['id'];
		$_SESSION['data1']=$cp->getData($id);
		$_SESSION['data2']=$cp->getDonasi($id);
		header("Location:viewProfilPenerima.php");
		break;
	case 'Simpan' :
		session_start();
		header("Location:viewUnggahDokumen.php")
		break;
	default:
		# code...
		break;
}

?>