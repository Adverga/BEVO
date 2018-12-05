<?php
include 'koneksi.php';
class modelAdmin{

//verifikasi pembayaran profile
public function getDataDonasi() {
    global $conn;
    $q = $conn->query("SELECT * FROM donasi");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//verifikasi pembayaran
public function getDataPembayaran($id_donasi) {
    global $conn;
    $q = $conn->query("SELECT * FROM donasi where id = '$id_donasi'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function setVerifikasiPembayaran($id_donasi) {
    global $conn;
    $q = $conn->query("UPDATE donasi SET status='Status Telah Dibayar' WHERE id= $id_donasi");
}

//EditBiodataProfile
public function getDataPenerima() {
    global $conn;
    $q = $conn->query("SELECT * FROM user where jenis = 'Penerima'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//EditBiodata
public function getarrayData0($id_user) {
    global $conn;
    $q = $conn->query("SELECT * FROM data_penerima where id_user = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function getArrayData1($id_user) {
    global $conn;
    $q = $conn->query("SELECT * FROM data_penerima_1 where id_user = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function getArrayData2($id_user) {
    $q = $conn->query("SELECT * FROM data_pemerima_2 where id_user = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function getArrayData3($id_user) {
    global $conn;
    $q = $conn->query("SELECT * FROM data_penerima3 where id_user = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function setarrayData0($nama1,$tahun1,$tingkat1,$juara1,$nama2,$tahun2,$tingkat2,$juara2){
    global $conn;
    $q = $conn->query("UPDATE data_penerima SET gaji=$gaji, nama=$nama, $nim=$nim, $ipk=$ipk, ipt=$ipt, angkatan=$angkatan WHERE id_user= $id_user");
}
public function setArrayData1($id_user,$nama1,$tahun1,$tingkat1,$juara1,$nama2,$tahun2,$tingkat2,$juara2) {
    global $conn;
    $q = $conn->query("UPDATE data_penerima1 SET nama1=$nama1, , tahun1= $tahun1,tingkat1=$tingkat1, juara1= $juara1, nama2=$nama2, tahun2= $tahun2, tingkat2= $tingkat2, juara2=$juara2 WHERE id_user= $id_user");
}

public function setArrayData2($id_user,$nama1,$tahun1,$jabatan1,$nama2,$tahun2,$jabatan2){
    $q = $conn->query("UPDATE data_penerima2 SET nama1=$nama1 , tahun1= $tahun1,jabatan1=$jabatan1, nama2=$nama2, tahun2= $tahun2, jabatan2= $jabatan2 WHERE id_user= $id_user");
}

public function setArrayData3($id_user,$nama1,$tahun1,$jabatan1,$nama2,$tahun2,$jabatan2) {
    $q = $conn->query("UPDATE data_penerima3 SET nama1=$nama1 , tahun1= $tahun1,jabatan1=$jabatan1, nama2=$nama2, tahun2= $tahun2, jabatan2= $jabatan2 WHERE id_user= $id_user");
}
}
?>