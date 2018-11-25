<?php
	include('koneksi.php');

	public class User {
		public $id;
		public $nama;
		public $email;
		public $username;
		public $password;
		public $telepon;
		public $alamat;
		public $foto;
		public $jenis;
		public $arr;
		private $i;

		public function __construct(){
		}
		function __construct($user)
		{
			$this->username = $user;
		}
		public function setDataUser($array,$foto){
			$tmp = new stdClass; 
 			$tmp-> id = $array["id"];
			$tmp-> nama = $array["nama"];
			$tmp-> email = $array["email"];
			$tmp-> username = $array["username"];
			$tmp-> password = $array["password"];
			$tmp-> telepon = $array["telepon"];
			$tmp-> alamat = $array["alamat"];
			$tmp-> jenis = $array["jenis"];
			$tmp-> foto = $foto
			$arr[$i++] = $tmp;
		}
		public function getDataUser($id1){
			for ($i=0; $i < $arr.length; $i++) { 
				if ($arr[$i]['id'] == $id1) {
					$tmp = $arr[$i];
					return($arr);
				}else return false;
			}
		}
		public function updateDataUser($array){
			$tmp = new stdClass; 
 			$tmp-> id = $array["id"];
			$tmp-> nama = $array["nama"];
			$tmp-> email = $array["email"];
			$tmp-> username = $array["username"];
			$tmp-> password = $array["password"];
			$tmp-> telepon = $array["telepon"];
			$tmp-> alamat = $array["alamat"];
			$tmp-> jenis = $array["jenis"];
			$tmp-> foto = $foto

		}
	}
?>