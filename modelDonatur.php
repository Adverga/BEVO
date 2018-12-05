<?php
include 'koneksi.php';

class modelDonatur {

    public function getDataProfile($id_user) {
        global $conn;
        $q = $conn->query("SELECT * FROM user where Id = '$id_user'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }
    public function getDataDonasi($id){
    	global $conn;
    	$q = $conn->query("SELECT * from donasi where id_donatur = '$id'");
    	$data = mysqli_fetch_assoc($q);
    	return $data;
    }
    //daftar profile penerima
public function getPenerima() {
    global $conn;
    $q = $conn->query("SELECT * FROM user where jenis = 'Calon penerima beasiswa'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//profile penerima
public function getfotoPenerima($id_penerima) {
    global $conn;
    $q = $conn->query("SELECT foto FROM user WHERE id_user=$id_penerima");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

public function getDataPenerima($id_penerima) {
    global $conn;
    $q = $conn->query("SELECT * FROM data_penerima where id_penerima = '$id_penerima'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//Donasi
public function setDonasi($noRek,$jumlah) {
    global $conn;
    $q = $conn->query("INSERT INTO `donasi`( 'noRekening','jumlah','status') VALUES ('$noRek','$jumlah','Belum Transfer')") or die("1");
}


//Tatacarapembayaran
public function getDataPembayaran($id_user) {
    global $conn;
    $q = $conn->query("SELECT * FROM donasi WHERE id_donatur = '$id_penerima' ORDER BY transasksi_id DESC LIMIT 1");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//UnggahBuktiPembayaran
public function setBuktiPembayaran($jumlah,$bukti, $status, $id_user) {
    global $conn;
    $q = $conn->query("UPDATE donasi SET jumlah='$jumlah',buktiTransfer='$bukti',statusTransfer= 'Sudah Transfer' WHERE id_user='$id_user'  ORDER BY transasksi_id DESC LIMIT 1" );
}
}
?>
