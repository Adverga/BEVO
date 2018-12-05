<?php
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
						<a href="viewDonatur.php">BEVO</a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li class="active">
								<a href="viewDonatur.php" >Home</a>
							</li>
							<li>
								<a href="controllerDonatur.php?d=viewpp">Donasi</a>
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
											<li><a href="viewDonatur">Home </a></li>
											<li><a href="controllerDonatur.php?d=viewpp">Donasi</a>
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

	<!-- basic-slider start -->
	<div class="slider-section">
		<div class="slider-active owl-carousel">
			<div class="single-slider slider-screen nrbop bg-black-alfa-40" style="background-image: url(assets/img/slides/Belajar.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="controllerDonatur.php?d=viewpp">Donasi</a></div>
					</div>
				</div>				
			</div>
			<div class="single-slider slider-screen nrbop bg-black-alfa-40 " style="background-image: url(assets/img/slides/Belajar2.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="controllerDonatur.php?d=viewpp">Donasi</a></div>
					</div>
				</div>				
			</div>

			<div class="single-slider slider-screen nrbop bg-black-alfa-40" style="background-image: url(assets/img/slides/Belajar3.jpg);">
				<div class="container">
					<div class="slider-content text-white">
						<h2 class="b_faddown1 cd-headline clip is-full-width" >BEVO </h2>
						<p class="b_faddown2">Bevo adalah sarana pendanaan yang akan menampung dana dari para volunteer yang akan ditujukan                                    
						<br />kepada mahasiswa  kurang mampu dan tidak bisa memenuhi persyaratan dalam mendaftar beasiswa. </p>
						<div class="slider_button b_faddown3"><a href="controllerDonatur.php?d=viewpp">Donasi</a></div>
					</div>
				</div>				
			</div>				
		</div>
	</div>
	<!-- basic-slider end -->	

	<!-- Features -->
	<div class="features-wrapper one">
		<div class="container">
			<div class="section-name one">
				<h2>Yang Kami Lakukan</h2>
			</div>
			<p style="font-size:16px;">Pendidikan sangat lah penting untuk masa depan yang cerah. Saat ini masih banyak masyarakat terutama yang 
			melanjutkan studi nya ke jenjang yang lebih tinggi terhambat dari  segi materi, financial dan lainnya. Hal itu
			merupakan masalah yang perlu dituntaskan secara perlahan untuk mengembangkan generasi yang lebih baik. Maka dari itu,
			aplikasi ini dapat membantu untuk menyalurkan dana dan menghubungkan dari volunteer ke calon penerima beasiswa yang 
			nantinya dengan aplikasi BEVO. Aplikasi BEVO adalah aplikasi beasiswa dari pendanaan volunteer yang dikumpulkan 
			untuk calon penerima beasiswa dengan target yang kurang mampu dan keterbatasan dalam belajar namun memiliki semangat
			berjuang dilihat dari segi persyaraatan yang nantinya akan di pilih secara ketat. Pendanan itu sendiri dapat 
			diperoleh dari donatur yang bersedia dan suka rela dalam memberi seperti materi maupun financial. Dengan adanya 
			aplikasi BEVO ini donatur dan calon penerima beasiswa akan dapat menghubungkan dengan mudah untuk memberikan dananya
			dengan tujuan untuk meningkatkan generasi yang berkualitas dan handal dalam kehidupan yang lebih baik.
			</p>
		</div>
	</div>

	<!-- work togather -->
	<div class="donation-wrapper-home work_togathers ">
		<div class="parallax-mask"></div>
		<div class="container">
			<div class="work_togather">
				<h2>Mari berikan sebuah perubahan</h2>
				<h1>Dengan Sebuah Gerakan</h1>
			</div>
		</div>
	</div>
		
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
							<p>Email : jennifierkalvin@gmail.com</p>
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
							<p>Email : jennifierkalvin@gmail.com</p>
						</div>					
					</div>
				</div>	
			</div>	
		</div>	
	</div>		
	
	
	<!-- Volunteers -->
	<div class="volunteers-need-wrapper volunteers-wrapper">
		<div class="parallax-mask"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="weneed-volunt info-block">
					<h2>Registrasikan Diri Anda</h2>
					<p>Anda dapat menjadi Pendonasi atau Penerima Donasi dengan cara mendaftarkan diri anda dengan 
					melakukan register terlebih dahulu. Register dapat dilakukan dihalaman register berikut.</p>
					<a href="Register.html" class="btn btn-big"><i class="fa fa-heartbeat"></i>Ke Halaman Register</a>
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
		 var jawab = confirm("Apakah anda yakin untuk Logout?")
		 if (jawab){
		  window.location.href="index.php?op=logout";
		 }
		}		
		</script>       
		
</body>
</html>