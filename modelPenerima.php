<?php
class modelPenerima {
    $namahost = "localhost";
    $username = "root";
    $password = "";
    $database = "bevo";
    $conn=mysqli_connect($namahost,$username,$password) or die("Failed");
    mysqli_select_db($conn,$database) or die("Database not exist");
    
//editbiodata
public function setDokumen($ktp,$kk,$kemiskinan,$fotogaji,$gaji,$khs,krs,$nama,$nim,$ipk,$ipkt,$angkatan) {
    $q = $conn->$conn->query("INSERT INTO 'data_penerima'( 'ktp', 'khs', 'krs', 'gaji', 'kartumiskin', 'kk', 'prestasi') VALUES ('{$namaPenerima}','{ $FotoPenerima }','{$email}','{$jenis}','{$nmrHP}','{$alamat}')") or die("1");
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

?>