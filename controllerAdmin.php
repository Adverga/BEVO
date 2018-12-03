<?php
include_once 'koneksi.php';
include_once 'modelAdmin.php';

class ControllerAdmin
{
	$var1
	function __construct($user)
	{
		global $conn;
		$var1 = new modelAdmin();
		$sql = "SELECT * from user where username = '$user'";
		$query = mysqli_query($conn, $sql);
		$result = MYSQLI_FECTH_ASSOC($query);
		$var1->setFotoPenerima($result['Foto']);
		$var1->setNamaPenerima($result['username'])
	}
	public function getFotoPenerima(){
		
	}
}
?>