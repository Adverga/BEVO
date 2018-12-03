<?php
/**
 * 
 */
class User
{
    function __construct()
    {
    }
//login
public function getNamaUser($username) {
    $q = $conn->query("SELECT nama FROM user where username = '$username'");
    $data = mysqli_fetch_assoc($q);
    return $data['nama'];
}

public function getNamaAdmin($username) {
    $q = $conn->query("SELECT nama FROM admin where username = '$username'");
    $data = mysqli_fetch_assoc($q);
    return $data['nama'];
}

public function getIdUser($username) {
    $q = $conn->query("SELECT Id FROM user where nama = '$username'");
    $data = mysqli_fetch_assoc($q);
    return $data['nama'];
}

public function getJenisUser($username) {
    $q = $conn->query("SELECT jenis FROM user where nama = '$username'");
    $data = mysqli_fetch_assoc($q);
    return $data['nama'];
}

//Register
public function setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis) {
    $q = $conn->$conn->query("INSERT INTO 'user'( 'username', 'email', 'telepon', 'alamat','password', 'foto', 'jenis') VALUES ('{$username}','{ $foto }','{$email}','{$password}','{$nmrHP}','{$password},'{$alamat}','{$foto}','{$jenis}') WHERE id_user= $id_user") or die("1");
}

//profile
public function getDataProfile($id_user) {
    $q = $conn->query("SELECT * FROM user where Id = '$id_user'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}

//EditProfile
public function seteditProfile($username,$email,$nmrHP,$alamat,$foto,$jenis) {
    $q = $conn->$conn->query("UPDATE user SET username='$username',email='$email',telepon= '$nmrHP', alamat= '$alamat',jenis='$jenis', foto='$foto' WHERE id_user= $id_user");
}

public function seteditPasswordUser($password) {
    $q = $conn->$conn->query("UPDATE user SET password='$password' WHERE id_user= $id_user");
}

//home
public function getDataDonatur() {
    $q = $conn->query("SELECT * FROM user where jenis = 'Donatur'");
    $data = mysqli_fetch_assoc($q);
    return $data;
}
}

?>