<?php
include 'koneksi.php';
class user
{
    //login
    public function getNamaUser($username) {
        global $conn;
        $q = $conn->query("SELECT nama FROM user where username = '$username'");
        $data = mysqli_fetch_assoc($q);
        return $data['nama'];
    }

    public function getNamaAdmin($username) {
        global $conn;
        $q = $conn->query("SELECT nama FROM admin where username = '$username'");
        $data = mysqli_fetch_assoc($q);
        return $data['nama'];
    }

    public function getIdUser($username) {
        global $conn;
        $q = $conn->query("SELECT Id FROM user where nama = '$username'");
        $data = mysqli_fetch_assoc($q);
        return $data['nama'];
    }

    public function getJenis($username) {
        global $conn;
        $q = $conn->query("SELECT `jenis` FROM `user` where `nama` = '$username'");
        $data = mysqli_fetch_assoc($q);
        return $data['jenis'];
    }

    //Register
    public function setRegister($username,$email,$password,$nmrHP,$alamat,$foto,$jenis) {
        global $conn;
        $q = $conn->query("INSERT INTO `user` ( `nama`, `email`, `username`, `password`, `telepon`, `alamat`, `foto`, `jenis`) VALUES ('$username', '$email', '$username', '$password', '$nmrHP', '$alamat', '$foto', '$jenis')");
        if($q) return true;
        else return false;
    }

    //profile
    public function getDataProfile($id_user) {
        global $conn;
        $q = $conn->query("SELECT * FROM user where Id = '$id_user'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }

//EditProfile
    public function seteditProfile($username,$email,$nmrHP,$alamat,$foto,$jenis) {
        global $conn;
        $q = $conn->query("UPDATE user SET username='$username',email='$email',telepon= '$nmrHP', alamat= '$alamat',jenis='$jenis', foto='$foto' WHERE id_user= $id_user");
        if($q) return true;
        else return false;
    }

    public function seteditPasswordUser($password) {
        global $conn;
        $q = $conn->query("UPDATE user SET password='$password' WHERE id_user= $id_user");
    }

    //home
    public function getDataDonatur() {
        global $conn;
        $q = $conn->query("SELECT * FROM user where jenis = 'Donatur'");
        $data = mysqli_fetch_assoc($q);
        return $data;
    }
    public function getAuth($user, $pass)
    {
        global $conn;
        $val = false;
        $q = $conn->query("SELECT * from user where username = '$user' and password = '$pass'");
        $row = mysqli_num_rows($q);
        if ($row == 1) {
            $val = true;
        }
        return $val;
    }
}

?>