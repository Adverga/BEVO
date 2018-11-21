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
			$QUERY = MYSQLI_QUERY($conn,"SELECT * FROM bevo;"   ); 
 			$arr = array(); 
 			$i = 0;
 			while ($ROW = MYSQLI_FETCH_ASSOC($QUERY)) {
 				$tmp = new stdClass; 
 				$tmp-> id = $QUERY["id"];
				$tmp-> nama = $QUERY["nama"];
				$tmp-> email = $QUERY["email"];
				$tmp-> username = $QUERY["username"];
				$tmp-> password = $QUERY["password"];
				$tmp-> telepon = $QUERY["telepon"];
				$tmp-> alamat = $QUERY["alamat"];
				$tmp-> jenis = $QUERY["jenis"];
				$arr[$i++] = $mhs;
 			}
		}
		function __construct($user)
		{
			$QUERY = MYSQLI_QUERY($conn,"SELECT * FROM bevo;"   ); 
 			$arr = array(); 
 			$i = 0;
 			while ($ROW = MYSQLI_FETCH_ASSOC($QUERY)) {
 				$tmp = new stdClass; 
 				$tmp-> id = $QUERY["id"];
				$tmp-> nama = $QUERY["nama"];
				$tmp-> email = $QUERY["email"];
				$tmp-> username = $QUERY["username"];
				$tmp-> password = $QUERY["password"];
				$tmp-> telepon = $QUERY["telepon"];
				$tmp-> alamat = $QUERY["alamat"];
				$tmp-> jenis = $QUERY["jenis"];
				$arr[$i++] = $mhs;
 			}
			$this->username = $user;
		}
		public boolean function getAut($user, $pass){
			boolean $val = false;
			for ($i=0; $i < $arr.length; $i++) { 
				if ($arr[$i]['username'] == $user && $arr[$i]['password'] == $pass) {
					$val = true;
				}
			}
			return $val;
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