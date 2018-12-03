<?php
session_start();
include 'headerPenerima.php';
?>
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
						  <img src="images/03122018093322birdmage" alt="Avatar" class="avatar">
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
<?php
include 'footer';
?>