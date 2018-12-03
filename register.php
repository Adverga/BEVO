<?php

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO: Register </title>
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
						<a href="Bevo index.html">BEVO</a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li>
								<a href="BEVO index.html" >Home</a>
							</li>
							<li>
								<a href="Pilih Calon Penerima.html">Donasi</a>
							</li>
							<li>
								<a href="Profile.html">Profil</a>
							</li>
							<li class="active">
								<a href="Login.html">Login</a>
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
											<li><a href="Pilih Calon Penerima.html">Donasi</a></li>
											<li><a href="Profile.html">Profil</a></li>
											<li><a href="Login.html">Login</a></li>
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

	<h2 class=LoginText>Form Register </h2>

	<form action="index.php" method="POST">
	
		<label><b>Username</b></label>
		<input type="text" placeholder="Masukkan Username" name="uname" required 
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		<br/>
		<label><b>Email</b></label><br/>
		<input type="text" placeholder="Masukkan Email" name="email" required 
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		<br/>
		<label><b>Password</b></label>
		<input type="password" placeholder="Masukkan Password" name="psw" required
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		<br/>
		<label><b>Jenis Member</b></label>
		<br />
		<input type="radio" name="member" value="Donatur" required
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		<label for="f-option">Donatur</label>
		<br />
		<input type="radio" name="member" value="Calon penerima beasiswa" required
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		<label for="f-option">Calon penerima beasiswa</label>
		<br /><br />
		
		<label><b>Nomor Telepon</b></label>
		<input type="text" placeholder="Masukkan Nomor Telephone" name="notelp" required
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		
		<label><b>Alamat</b></label>
		<textarea name="Alamat" style="resize: none; width:496px; height:130px;" required 
		oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		</textarea>			
		
		<label><b>Unggah Foto Profile</b></label>
			<br />
			<input type="file" name="unggahPP" required
			oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
			<br />	<br />	
			<img id="gmbr" style="width:200px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
			<br /><br />
		
		<a><button type="submit" name="op" value="register">Register</button></a>
		
	</form>
	<br />

	
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

</body>
</html>