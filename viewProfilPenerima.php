<?php
	session_start();
	if (!isset($_SESSION['user'])) header("Location:login.php");

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO: Halaman Profil </title>
	<link rel="shortcut icon" href="assets/img/BEVO.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/owl-carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/css/nivo-lightbox.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/BEVO.css">
</head>
<body>

	<!-- header -->
	<header>
		<div id="search-bar">
			<div class="container">
				<div class="row">
					<form action="#" name="search" class="col-xs-12">
						<input type="text" name="search" placeholder="Type and Hit Enter"><i id="search-close" class="fa fa-close"></i>
					</form>
				</div>
			</div>
		</div>
		<nav  class="navigation">
			<div class="container">
				<div class="row">
					<div class="logo-wrap col-md-3 col-xs-6">
						<a href="Mahasiswa index.html">BEVO</a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li>
								<a href="Mahasiswa index.html" >Home</a>
							</li>
							<li class="active">
								<a href="Profile Mahasiswa.html">Profil</a>
							</li>
							<li>
								<a href="#" onclick="return Konfirmasi()">Logout</a>
							</li>
						</ul>	
					</div>			        
				</div>
			</div>
			
			<!--[ MOBILE-MENU-AREA START ]--> 
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="mobile-area">
								<div class="mobile-menu">
									<nav id="mobile-nav">
										<ul>
											<li><a href="Mahasiswa index.html">Home </a></li>
											<li><a href="Profile Mahasiswa"> Profil </a></li>
											<li><a href="#" onclick="return Konfirmasi()">Logout</a></li>
										</ul>
									</nav>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--[ MOBILE-MENU-AREA END  ]-->	
		</nav>

	</header>
	
	<!-- about wrapper -->
	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Halaman Profile</h2>
			</div>
						
			<div class="col-md-6 col-sm-6 col-xs-12">							    
				<table>
					<tr>
					  <div class="imgcontainer">
						  <img src="assets/img/user.png" alt="Avatar" class="avatar">
						</div>
					</tr>
					<tr>
					  <td> Nama </td>
					  <td> : </td>
					  <td> Ahsan </td>
					</tr>
					<tr>
					  <td> Email </td>
					  <td> : </td>
					  <td> Ahsan@gmail.com </td>
					</tr>
					<tr>
					  <td> Jenis Member </td>
					  <td> : </td>
					  <td> Penerima Beasiswa </td>
					</tr>
					<tr>
					  <td> Nomor Telephone </td>
					  <td> : </td>
					  <td> 0812345678</td>
					</tr>
					<tr>
					  <td> Alamat  </td>
					  <td> : </td>
					  <td> Jl.Dieng no.32</td>
					</tr>					
				  </table>						
				</br>
				<a href="Edit Profile.html"><button type="submit">Edit Profil</button></a>
				</br>
				<a href="Unggah Dokumen.html"><button type="submit">Unggah Dokumen</button></a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">			
				<br/><h2><b>Daftar beasiswa yang diterima</b></h2><br/>		
				<table border="1" cellspacing="5">
					<tr>
					  <td> No. </td><td> Nama Donatur</td><td> Jumlah Donasi</td><td>Tanggal Donasi</td>
					</tr>
					<tr>
					  <td> 1 </td><td> Ahmad Hasan</td><td> Rp.300.000</td><td>01/01/2018</td>
					</tr>		
					<tr>
					  <td> 2 </td><td> Ahmad Hasan</td><td> Rp.300.000</td><td>02/01/2018</td>
					</tr>		
					<tr>
					  <td> 3 </td><td> Ahmad Hasan</td><td> Rp.300.000</td><td>03/01/2018</td>
					</tr>		
				  </table>			
			</div>
        </div>
	</div>

	<!-- Foter -->
	<footer>
			<div class="footer-bar">
				<div class=contact>
					<b>Kontak:</b>
					<br>Phone: 0812345678
					<br>Email: BEVO@gmail.com				
				</div>					
			<hr>
			<h5>Copyright ©2018 Kelompok 3 RPL-F</h5>
		</div>
	</footer>

	<!-- Scripts -->
	<script type="text/javascript" src="assets/js/jquery2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.meanmenu.js"></script>
	<script type="text/javascript" src="assets/js/progress-bar-appear.js"></script>
	<script type="text/javascript" src="assets/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="assets/js/isotope.min.js"></script>
	<script type="text/javascript" src="assets/js/countdown.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEypW1XtGLWpikFPcityAok8rhJzzWRw "></script>
	<script type="text/javascript" src="assets/js/gmaps.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/js.js"></script>
	<script type="text/javascript">
	function Konfirmasi() {
		 var jawab = confirm("Apakah anda yakin untuk Logout?")
		 if (jawab){
		  window.location.href="index.php?op=logout";
		 }
		}		
	</script>   

</body>
</html>