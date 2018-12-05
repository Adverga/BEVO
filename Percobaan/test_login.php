<?php
public function login($username, $password)
	{
		if ($this->us->getAuth($username, $password)) {
			session_start();
			$id = $this->us->getIdUser($username);
			$jenis = $this->us->getJenis($username);
			$_SESSION['id'] = $id;
			$_SESSION['user'] = $username;
			$_SESSION['jenis'] = $jenis;
			if ($jenis == 'admin') {
				header("Location:viewAdmin.php?id=admin");
			}
			if ($jenis == 'donatur') {
				header("Location:viewDonatur.php?id=$username");
			}
			if ($jenis == 'Calon penerima beasiswa') {
				header("Location:viewPenerima.php?id=$username");
			}
		}else header("Location:login.php?err=1");
	}




?>