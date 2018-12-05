<?php
include_once 'modelAdmin.php';

class ControllerAdmin
{
	public $var1;
	function __construct($user)
	{
		global $conn;
		$var1 = new modelAdmin();
	}
	public function getFotoPenerima(){
		
	}
}
?>