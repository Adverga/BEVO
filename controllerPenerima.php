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
		return $this->userP->getDataProfile($id);
	}
	function getDonasi($id){
		return $this->userP->getArrayDonasi($id);
	}
	function submitDokumen($id,$ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,$krs,$nama,$nim,$ipk,$ipkt,$angkatan,$ptn){
		$this->userP->setDokumen($id,$ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,$krs,$nama,$nim,$ipk,$ipkt,$angkatan,$ptn);
	}
	function submitDokumen1($id,$fotoprestasi1,$nama1,$tahun1,$tingkat1,$juara1,$fotoprestasi2,$nama2,$tahun2,$tingkat2,$juara2){
		$this->userP->setDokumen1($id,$fotoprestasi1,$nama1,$tahun1,$tingkat1,$juara1,$fotoprestasi2,$nama2,$tahun2,$tingkat2,$juara2);
	}
	function submitDokumen2($id,$fotoorganisasi1,$nama1,$tahun1,$jabatan1,$fotoorganisasi2,$nama2,$tahun2,$jabatan2){
		$this->userP->setDokumen2($id,$fotoorganisasi1,$nama1,$tahun1,$jabatan1,$fotoorganisasi2,$nama2,$tahun2,$jabatan2);
	}
	function submitDokumen3($id,$fotopanitia1,$nama1,$tahun1,$jabatan1,$fotopanitia2,$nama2,$tahun2,$jabatan2){
		$this->userP->setDokumen3($id,$fotopanitia1,$nama1,$tahun1,$jabatan1,$fotopanitia2,$nama2,$tahun2,$jabatan2);
	}
	function getDataProfile($id){
		return $this->userP->getDataProfile($id);
	}
	function updateProfile($username,$email,$nmrHP,$alamat,$foto,$jenis){
		$this->userP->seteditProfile($username,$email,$nmrHP,$alamat,$foto,$jenis);
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
	case 'unggah' :
		session_start();
		header("Location:viewUnggahDokumen.php")
		break;
	case 'Simpan' :
		session_start();
		$id = $_SESSION['id'];
		$tktp = $_FILES['ktp']['name']; $tmp = $_FILES['ktp']['tmp_name']; $ktp = date('dmYHis').$tktp; $path = "images/".$ktp;
		move_uploaded_file($tmp, $path);
		$tkk = $_FILES['kk']['name']; $tmp = $_FILES['kk']['tmp_name']; $kk = date('dmYHis').$tkk; $path = "images/".$kk;
		move_uploaded_file($tmp, $path);
		$tkemiskinan = $_FILES['kemiskinan']['name']; $tmp = $_FILES['kemiskinan']['tmp_name']; $kemiskinan = date('dmYHis').$tkemiskinan; $path = "images/".$kemiskinan;
		move_uploaded_file($tmp, $path);
		$tfotogaji = $_FILES['fotogaji']['name']; $tmp = $_FILES['fotogaji']['tmp_name']; $fotogaji = date('dmYHis').$tfotogaji; $path = "images/".$fotogaji;
		move_uploaded_file($tmp, $path);
		$gaji = $_POST['gaji'];
		$tkhs = $_FILES['khs']['name']; $tmp = $_FILES['khs']['tmp_name']; $khs = date('dmYHis').$tkhs; $path = "images/".$khs;
		move_uploaded_file($tmp, $path);
		$tkrs = $_FILES['krs']['name']; $tmp = $_FILES['krs']['tmp_name']; $krs = date('dmYHis').$tkrs; $path = "images/".$krs;
		move_uploaded_file($tmp, $path);
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$ipk = $_POST['ipk'];
		$ipkt = $_POST['ipkt'];
		$angkatan = $_POST['angkatan'];
		$ptn = $_POST['ptn'];
		$tfotoprestasi1 = $_FILES['fotoprestasi1']['name']; $tmp = $_FILES['fotoprestasi1']['tmp_name']; $fotoprestasi1 = date('dmYHis').$tfotoprestasi1; $path = "images/".$fotoprestasi1;
		move_uploaded_file($tmp, $path);
		$tfotoprestasi2 = $_FILES['fotoprestasi2']['name']; $tmp = $_FILES['fotoprestasi2']['tmp_name']; $fotoprestasi2 = date('dmYHis').$tfotoprestasi2; $path = "images/".$fotoprestasi2;
		move_uploaded_file($tmp, $path);
		$tfotoorganisasi1 = $_FILES['fotoorganisasi1']['name']; $tmp = $_FILES['fotoorganisasi1']['tmp_name']; $fotoorganisasi1 = date('dmYHis').$tfotoorganisasi1; $path = "images/".$fotoorganisasi1;
		move_uploaded_file($tmp, $path);
		$tfotoorganisasi2 = $_FILES['fotoorganisasi2']['name']; $tmp = $_FILES['fotoorganisasi2']['tmp_name']; $fotoorganisasi2 = date('dmYHis').$tfotoorganisasi2; $path = "images/".$fotoorganisasi2;
		move_uploaded_file($tmp, $path);
		$tfotopanitia1 = $_FILES['fotopanitia1']['name']; $tmp = $_FILES['fotopanitia1']['tmp_name']; $fotopanitia1 = date('dmYHis').$tfotopanitia1; $path = "images/".$fotopanitia1;
		move_uploaded_file($tmp, $path);
		$tfotopanitia2 = $_FILES['fotopanitia2']['name']; $tmp = $_FILES['fotopanitia2']['tmp_name']; $fotopanitia2 = date('dmYHis').$tfotopanitia2; $path = "images/".$fotopanitia2;
		move_uploaded_file($tmp, $path);
		$cp->submitDokumen($id,$ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,$krs,$nama,$nim,$ipk,$ipkt,$angkatan,$ptn);
		$cp->submitDokumen1($id,$fotoprestasi1,$nama1,$tahun1,$tingkat1,$juara1,$fotoprestasi2,$nama2,$tahun2,$tingkat2,$juara2);
		$cp->submitDokumen2($id,$fotoorganisasi1,$nama1,$tahun1,$jabatan1,$fotoorganisasi2,$nama2,$tahun2,$jabatan2);
		$cp->submitDokumen3($id,$fotopanitia1,$nama1,$tahun1,$jabatan1,$fotopanitia2,$nama2,$tahun2,$jabatan2);
		header("Location:controllerPenerima.php?p=profil");
		break;
	default:
		header("Location:controllerPenerima.php?p=profil");
		break;
}

?>