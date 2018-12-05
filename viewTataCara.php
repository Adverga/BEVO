<?php
	session_start();
	if (!isset($_SESSION['user'])) header("Location:login.php");
	$data = $_SESSION['data'];
	$tmp = $_SESSION['tmp'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO: Tata Cara Pembayaran </title>
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
								<a href="BEVO index.html" >Home</a>
							</li>
							<li class="active">
								<a href="Pilih Calon Penerima.html">Donasi</a>
							</li>
							<li>
								<a href="Profile.html">Profil</a>
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
											<li><a href="BEVO index.html">Home </a></li>
											<li><a href="Pilih Calon Penerima.html">Donasi</a>
											</li>
											<li><a href="Profile.html"> Profil </a></li>
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

	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Tata Cara Pembayaran</h2>
			</div>											
			
			<span align="Center" class="col-md-12 col-sm-12 col-xs-12">
			Donasi yang anda akan bayarkan sebesar :</br>
			</span>
			<span align="Center" class="col-md-12 col-sm-12 col-xs-12">
			</br><b><h2>Rp.500.000,00</h2></b>
			</span>
			<span align="Center" class="col-md-12 col-sm-12 col-xs-12">
			</br></br>Pada Donatur terhormat bernama <b><?php echo $_SESSION['user']?></b> dengan nomor rekening <b><?php echo $tmp['nmrRekening']?></b>
			pada pembayaran donasi kami hanya bisa menerima pembayaran melalui transfer.Silahkan lakukan 
			pembayaran sebesar <b><?php echo $tmp['jmlDonasi']?></b> ke salah satu nomor rekenig berikut:</br></br>
			</span>
			<span align="Center" class="col-md-4 col-sm-6 col-xs-12">
			</br><b>Bank BCA,Jakarta</b></br>a/n BEVO Crowdfunding</br>No.Rekening 0xxxxxxxxx</br>
			</span>
			<span align="Center" class="col-md-4 col-sm-6 col-xs-12">
			</br><b>Bank Mandiri,Jakarta</b></br>a/n BEVO Crowdfunding</br>No.Rekening 0xxxxxxxxx</br>
			</span>
			<span align="Center" class="col-md-4 col-sm-6 col-xs-12">
			</br><b>Bank BRI,Jakarta</b></br>a/n BEVO Crowdfunding</br>No.Rekening 0xxxxxxxxx</br>
			</span>
			<div class="col-md-12" ;>
			</br>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				</br></br><a href="unggah bukti pembayaran.html"><button type="submit">Unggah Bukti Pembayaran</button></a>
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
		  window.location = "BEVO index.html";
		 }
		}		
	</script>      

</body>
</html>