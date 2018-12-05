<?php
	session_start();
	if (!isset($_SESSION['user'])) header("Location:login.php");
	$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO: Profil Mahasiswa</title>
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
						<a href="BEVO index.html">BEVO</a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li>
								<a href="viewDonatur.php" >Home</a>
							</li>
							<li class="active">
								<a href="viewPilihPenerima.php?p=viewpp">Donasi</a>
							</li>
							<li>
								<a href="controllerDonatur.php?d=profil">Profil</a>
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
											<li><a href="viewDonatur.php">Home </a></li>
											<li><a href="viewPilihPenerima.php?p=viewpp">Donasi</a>
											</li>
											<li><a href="controllerDonatur.php?d=profil"> Profil </a></li>
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
				<h2>Profil Mahasiswa</h2>
			</div>
			<div class="col-md-3 col-sm-3 hidden-xs"></div>			
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
					  <td> <?php echo $data['nama']; ?> </td>
					</tr>
					<tr>
					  <td> Nim </td>
					  <td> : </td>
					  <td> <?php echo $data['nim']; ?> </td>
					</tr>
					<tr>
					  <td> PTN</td>
					  <td> : </td>
					  <td> <?php echo $data['ptn']; ?> </td>
					</tr>
					<tr>
					  <td> Gaji Orang Tua perbulan</td>
					  <td> : </td>
					  <td> <?php echo $data['gaji']; ?> </td>
					</tr>
					<tr>
					  <td> IPK </td>
					  <td> : </td>
					  <td> <?php echo $data['ipk']; ?> </td>
					</tr>
					<tr>
					  <td> IP Terakhir  </td>
					  <td> : </td>
					  <td> <?php echo $data['ipkt']; ?> </td>
					</tr>					
				  </table>						
				</br>
				<a href="controllerDonatur.php?d=donasi"><button type="submit">Pilih Penerima Beasiswa</button></a>
			</div>
			<div class="col-md-3 col-sm-3 hidden-xs"></div>
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