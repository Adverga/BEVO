<?php
//include 'modelUser.php';
require_once 'koneksi.php';
class modelPenerima 
{    
    public function getDataProfile($id_user) {
        global $conn;
        $q = $conn->query("SELECT * FROM user where Id = '$id_user'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }
    //Register
    public function setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis) {
        global $conn;
        $q = $conn->query("INSERT INTO `user` ( `nama`, `email`, `username`, `password`, `telepon`, `alamat`, `foto`, `jenis`) VALUES ('$username', '$email', '$username', '$password', '$nmrHP', '$alamat', '$foto', '$jenis')");
        if($q) return true;
        else return false;
    }
//editbiodata
public function setDokumen($ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,$krs,$nama,$nim,$ipk,$ipkt,$angkatan) {
        global $conn;
    $q = $conn->query("INSERT INTO 'data_penerima'( 'ktp', 'khs', 'krs', 'gaji', 'kartumiskin', 'kk', 'prestasi') VALUES ('$namaPenerima','$FotoPenerima','$email','$jenis','$nmrHP','$alamat')") or die("1");
}

public function setDokumen1($fotoprestasi1,$nama1,$tahun1,$tingkat1,$juara1,$fotoprestasi2,$nama2,$tahun2,$tingkat2,$juara2) {
        global $conn;
    $q = $conn->query("INSERT INTO 'data_penerima_1'( 'fotoPrestasi1','nama_op1', 'tahun1', 'tingkat1' , 'juara1','fotoPrestasi2','nama_op2', 'tahun2', 'tingkat2', 'juara2') VALUES ('$fotoprestasi1','$nama_op1','$tahun1','$tingkat1','$juara1','$fotoprestasi2','$nama_op2','$tahun2','$tingkat2','$juara2')") or die("1");
}

public function setDokumen2($fotoorganisasi1,$nama1,$tahun1,$jabatan1,$fotoorganisasi2,$nama2,$tahun2,$jabatan2) {
        global $conn;
    $q = $conn->query("INSERT INTO 'data_penerima_2'( 'fotoOrganisasi1','nama_op1', 'tahun1', 'jabatan1','fotoOrganisasi2','nama_op2', 'tahun2', 'jabatan2') VALUES ('$fotoorganisasi1','$nama1','$tahun1','$jabatan1','$fotoorganisasi2','$nama2','$tahun2','$jabatan2')") or die("1");
}

public function setDokumen3 ($fotopanitia1,$nama1,$tahun1,$jabatan1,$fotopanitia2,$nama2,$tahun2,$jabatan2) {
        global $conn;
    $q = $conn->query("INSERT INTO 'data_penerima_3'( 'fotoPanitia1','nama_op1', 'tahun1', 'jabatan1','fotoPanitia2','nama_op2', 'tahun2', 'jabatan2') VALUES ('$fotopanitia1','$nama1','$tahun1','$jabatan1','$fotopanitia2','$nama2','$tahun2','$jabatan2')") or die("1");
}

//profile tabel donasi
public function getArrayDonasi($id_user) {
        global $conn;
    $q = $conn->query("SELECT * FROM donasi where id_penerima = '$id_user' AND status ='Sudah Di Terima'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function getNamaDonatur($id_user) {
        global $conn;
    $q = $conn->query("SELECT nama FROM user where Id = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}
}
?>