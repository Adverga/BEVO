<?php
require_once('user.php');
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO - Nonprofit & Crowdfunding </title>
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
						<a href="Admin index.html">BEVO</a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li class="active">
								<a href="viewAdmin.php" >Home</a>
							</li>
							<li>
								<a href="index.html?op=viewEditPenerima">Edit Biodata Penerima Beasiswa</a>
							</li>
							<li>
								<a href="Sudah Donasi.html">Verifikasi Pembayaran</a>
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
											<li><a href="viewAdmin.php">Home </a></li>
											<li><a href="Edit Penerima Beasiswa.html">Edit Biodata Penerima Beasiswa</a>
											</li>
											<li><a href="Sudah Donasi.html"> Verifikasi Pembayaran </a></li>
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

	<!-- basic-slider start -->
	<div class="slider-section">
		<div class="slider-active owl-carousel">
			<div class="single-slider slider-screen nrbop bg-black-alfa-40" style="background-image: url(assets/img/slides/Belajar.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="Sudah Donasi.html">Verifikasi Pembayaran</a></div>
					</div>
				</div>				
			</div>
			<div class="single-slider slider-screen nrbop bg-black-alfa-40 " style="background-image: url(assets/img/slides/Belajar2.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="Sudah Donasi.html">Verifikasi Pembayaran</a></div>
					</div>
				</div>				
			</div>

			<div class="single-slider slider-screen nrbop bg-black-alfa-40" style="background-image: url(assets/img/slides/Belajar3.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="Sudah Donasi.html">Verifikasi Pembayaran</a></div>
					</div>
				</div>				
			</div>				
		</div>
	</div>
	<!-- basic-slider end -->	
		
	<!-- team -->
	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Donatur Kami</h2>
				<div class="short-text">
					<h5>Berikut beberapa daftar donatur yang terdaftar</h5>
				</div>
			</div>	
			
			<div class="team-members row">
				<div class="col-md-4 col-sm-6 col-xs-12">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<a href="#" title=""><img src="assets/img/user.png" style="width:270px;height:215px"alt=""></a>
							</div>
							<h2>Jennifier kalvin</h2>
							<p>Email : jennifierkalvin@gmail.com
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<a href="#" title=""><img src="assets/img/user.png" style="width:270px;height:215px" alt=""></a>
							</div>
							<h2>Jennifier kalvin</h2>
							<p>Email : jennifierkalvin@gmail.com</p>
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<img src="assets/img/user.png" style="width:270px;height:215px"alt="">
							</div>
							<h2>Jennifier kalvin</h2>
							<p>Email : jennifierkalvin@gmail.com
						</div>					
					</div>
				</div>	
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
		 var jawab = confirm("Anda yakin ingin keluar?")
		 if (jawab){
		  window.location.href="index.php?op=logout";
		 }
		}		
		</script>       
		
</body>
</html>