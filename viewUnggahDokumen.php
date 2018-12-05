<?php?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BEVO: Unggah Dokumen </title>
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

	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Edit Biodata Penerima</h2>
			</div>
	<form action="controllerPenerima.php" method="POST">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<label><b>Unggah KTP</b></label>
				<br />
				<input type="file" name="unggahktp" required>
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Unggah Kartu Keluarga</b></label>
				<br />
				<input type="file" name="unggahkhs" required>
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />						
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				<label><b>Unggah bukti Keterangan Miskin</b></label>
				<br />
				<input type="file" name="unggahbuktiketeranganmiskin" required>
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br />	<br />
				
				<label><b>Unggah Slip Gaji Orang tua</b></label>
				<br />
				<input type="file" name="unggahslipgaji" required>
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >	
				<br />
				<label><b>Gaji Orang tua</b></label>
				<input type="text" name="gaji" required>
				<br /><br />
			</div>
			
			<div class="col-md-7 col-sm-12 col-xs-12">
				<label><b>Unggah KHS</b></label>
				<br />
				<input type="file" name="unggahKHS" >
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				<label><b>Unggah KRS Terakhir</b></label>
				<br />
				<input type="file" name="unggahKRS" required>
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />				
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">			
				<label><b>Nama</b></label>
				<input type="text" name="uname" required>

				<label><b>Nim</b></label>
				<input type="text"  name="Nim" required>
				
				<label><b>IPK</b></label>
				<input type="text" name="IPK" required>
			</div>
			
			<div class="col-md-2 col-sm-12 col-xs-12">
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				<label><b>IP Terakhir</b></label>
				<input type="text"  name="IP">
					
				<label><b>Angkatan</b></label>
				<input type="text" name="angkatan" >

				<label><b>Email</b></label>
				<input type="text"  name="email">
			</div>			
			<div class="col-md-12 col-sm-12 col-xs-12">
			</br></br>
			<h2>Dokumen Keatifan Mahasiswa (Tidak Wajib)
			</br></br></h2>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Prestasi Akademik /non Akademik</b></label>
				<br />
				<input type="file" name="Prestasi">
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Lomba</b></label>
				<input type="text" name="uname" >
				
				<label><b>Tingkat</b></label>
				<input type="text" name="tingkat" >

				<label><b>Juara</b></label>
				<input type="text" name="juara">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="tahun">
			</div>
					
			<div class="col-md-2 col-sm-12 col-xs-12">
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Prestasi Akademik /non Akademik</b></label>
				<br />
				<input type="file" name="Prestasi">
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Lomba</b></label>
				<input type="text" name="namaLomba" >
				
				<label><b>Tingkat</b></label>
				<input type="text" name="Tingkat" >

				<label><b>Juara</b></label>
				<input type="text" name="Juara">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="Tahun">
			</div>
			
			<div class="col-md-12 col-sm-3 col-xs-12">
			</div>

			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Organisasi</b></label>
				<br />
				<input type="file" name="Organisasi">
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Organisasi</b></label>
				<input type="text" name="namaOrganisasi" >

				<label><b>Jabatan</b></label>
				<input type="text" name="jabatan">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="tahun">
			</div>
			
			<div class="col-md-2 col-sm-12 col-xs-12">
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Organisasi</b></label>
				<br />
				<input type="file" name="Kepanitiaan">
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Organisasi</b></label>
				<input type="text" name="namaOrganisasi" >

				<label><b>Jabatan</b></label>
				<input type="text" name="jabatan">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="tahun">
			</div>
			
			<div class="col-md-12 col-sm-3 col-xs-12">
			</div>			
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Kepanitiaan</b></label>
				<br />
				<input type="file" name="Kepanitiaan">
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Kepanitiaan</b></label>
				<input type="text" name="namaKepanitiaan" >

				<label><b>Jabatan</b></label>
				<input type="text" name="jabatan">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="tahun">
			</div>
			
			<div class="col-md-2 col-sm-12 col-xs-12">
			</div>
			
			<div class="col-md-5 col-sm-12 col-xs-12">
				</br>
				<label><b>Sertifikat Kepanitiaan</b></label>
				<br />
				<input type="file" name="Kepanitiaan" >
				<br />	<br />	
				<img id="gmbr" style="width:400px;height:200px" src="../assets/img/<?php echo $data['namaFile'] ?>" >		
				<br /><br />	
				
				<label><b>Nama Kepanitiaan</b></label>
				<input type="text" name="namaKepanitiaan" >

				<label><b>Jabatan</b></label>
				<input type="text" name="jabattan">
				
				<label><b>Tahun</b></label>
				<input type="text"  name="tahun">
			</div>
			
			<div class="col-md-12 col-sm-3 col-xs-12">
			</div>
			<div class="col-md-4">
			</div>			
			
			<div class="col-md-4 col-sm-6 col-xs-12">
			<input type="submit" name="p" value="Simpan">	
<!--				<a href="Profile Mahasiswa.html"><button type="submit">Simpan</button></a>-->
			</div>
		</form>
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
		  window.location = "BEVO index.html";
		 }
		}		
	</script>    

</body>
</html>