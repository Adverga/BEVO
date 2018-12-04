<?php
include 'modelUser.php';
require_once 'koneksi.php';
class modelPenerima extends user
{    
    //Register
    public function setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis) {
        global $conn;
        $q = $conn->query("INSERT INTO `user` ( `nama`, `email`, `username`, `password`, `telepon`, `alamat`, `foto`, `jenis`) VALUES ('$username', '$email', '$username', '$password', '$nmrHP', '$alamat', '$foto', '$jenis')");
        if($q) return true;
        else return false;
    }

    //editbiodata
    public function setDokumen($ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,$krs,$nama,$nim,$ipk,$ipkt,$angkatan,$ptn) {
        $q = $conn->$conn->query("INSERT INTO `data_penerima`( `ktp`, `khs`, `krs`, `gaji`, `kartumiskin`, `kk`, `prestasi`) VALUES ('$ktp', '$kk','$kemiskinan','$fotogaji','$gaji','$khs','$krs','$nama','$nim','$ipk','$ipkt','$angkatan','$ptn'") or die("1");
    }

    public function setDokumen1($fotoprestasi1,$nama1,$tahun1,$tingkat1,$juara1,$fotoprestasi2,$nama2,$tahun2,$tingkat2,$juara2) {
        $q = $conn->$conn->query("INSERT INTO 'data_penerima_1'( 'nama_op', 'tahun', 'tingkat', 'juara') VALUES ('{$nama_op}','{$tahun}','{$tingkat}','{$juara}')") or die("1");
    }

    public function setDokumen2($fotoorganisasi1,$nama1,$tahun1,$jabatan1,$fotoorganisasi2,$nama2,$tahun2,$jabatan2) {
        $q = $conn->$conn->query("INSERT INTO 'data_penerima_2'( 'nama_op', 'tahun', 'jabatan') VALUES ('{$nama_op}','{$tahun}','{$jabatan}')") or die("1");
    }

    public function setDokumen3 ($fotopanitia1,$nama1,$tahun1,$jabatan1,$fotopanitia2,$nama2,$tahun2,$jabatan2) {
        $q = $conn->$conn->query("INSERT INTO 'data_penerima_3'( 'nama_op', 'tahun', 'jabatan') VALUES ('{$nama_op}','{$tahun}','{$jabatan}')") or die("1");
    }

    //profile tabel donasi
    public function getArrayDonasi($id_user) {
        $q = $conn->query("SELECT * FROM donasi where id_penerima = '$id_user' AND status ='Sudah Di Terima'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }

    public function getNamaDonatur($id_user) {
        $q = $conn->query("SELECT nama FROM user where Id = '$id_user'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }
}
?>