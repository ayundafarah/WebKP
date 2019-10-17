<?php
include('logincust.php');
	$username=$_SESSION['username'];
	$name = $_SESSION['name'];
	$category = $_SESSION['category'];
	$company = $_SESSION['company'];
	$notelp = $_SESSION['notelp'];
	$email = $_SESSION['email'];
	$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php
		include "script.html";
	?>
</head>
<body>

<!--==========HEADER==========-->
<!--==========================-->
<header>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" data-toggle="affix">
		<div class="container">
			<a class="navbar-brand smooth-scroll" href="index.php">
				<img src="img/logo.png" alt="logo" style="width: 160px; height: 45px;">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link smooth-scroll" href="indexcustomer.php">Kembali</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========FORM KUNJUNGAN==========-->
<!--==================================-->
<section id="form-per" class="form-per">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">FORM IZIN MELAKSANAKAN KUNJUNGAN/PEKERJAAN</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<form action="show-p.php" method="POST">
		  	<div class="form-group">
		    	<label for="company">Nama Perusahaan</label>
		    	<input type="text" class="form-control" id="company" name="company" value="<?php echo $company ?>">
		  	</div>
			<label for="name">Nama Pegawai</label>
		  	<div class="form-row">
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name1" name="name1" value="<?php echo $name ?>">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name2" name="name2" placeholder="Nama Pegawai 2">
			  	</div>
			</div>
			<div class="form-row">
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name3" name="name3" placeholder="Nama Pegawai 3">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name4" name="name4" placeholder="Nama Pegawai 4">
			  	</div>
			</div>
			<div class="form-row">
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name5" name="name5" placeholder="Nama Pegawai 5">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name6" name="name6" placeholder="Nama Pegawai 6">
			  	</div>
			</div>
			<div class="form-row">
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name7" name="name7" placeholder="Nama Pegawai 7">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name8" name="name8" placeholder="Nama Pegawai 8">
			  	</div>
			</div>
			<div class="form-row">
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name9" name="name9" placeholder="Nama Pegawai 9">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="text" class="form-control" id="name10" name="name10" placeholder="Nama Pegawai 10">
			  	</div>
			</div>
		  	<div class="form-group">
		    	<label for="address">Alamat Perusahaan</label>
		    	<input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">
		  	</div>
		  	<div class="form-row">
		  		<div class="form-group col-md-6">
		  			<label for="phone">Telepon/HP</label>
		  			<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $notelp ?>">
		  		</div>
		  		<div class="form-group col-md-6">
		  			<label for="phone">E-mail</label>
		  			<input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
		  		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="job">Jenis Pekerjaan</label>
		      		<select id="job" class="form-control" id="job" name="job">
		        		<option selected>Pilih</option>
		        		<option>Maintenance</option>
		        		<option>Installasi</option>
		        		<option>Site Visit</option>
		        		<option>Dismantle</option>
		      		</select>
		  	</div>
		  	<div class="form-group">
		  		<label>Waktu Pelaksanaan</label>
		  	</div>
		  	<div class="form-row">
		    	<div class="form-group col-md-4">
		    		<label>Hari</label>
		    		<select id="hari" class="form-control" id="hari" name="hari">
		        		<option selected>Pilih</option>
		        		<option>Senin</option>
		        		<option>Selasa</option>
		        		<option>Rabu</option>
		        		<option>Kamis</option>
		        		<option>Jumat</option>
		        		<option>Sabtu</option>
		        		<option>Minggu</option>
		      		</select>
		    	</div>
		    	<div class="form-group col-md-4">
		    		<label>Tanggal</label>
		    		<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="ex: 1 Januari 2018">
		    	</div>
		    	<div class="form-group col-md-4">
		    		<label>Pukul</label>
		    		<input type="time" class="form-control" name="jam" id="jam">
		    	</div>
		  	</div>
		  	<button type="submit" name="submit" class="btn btn-primary">Selanjutnya</button>
		</form>
	</div>
</section>

<br>
<br>
<br>

<!--==========FOOTER==========-->
<!--==========================-->
<footer>
	<div id="footer-s1" class="footer-s1">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<center>
							<img src="img/logo.png" alt="" class="img-fluid" style="width: 210px; height: 60px;">
						</center>
					</div>
					<div class="col-md-6 col-sm-6">
						<center>
							<address class="address-details-f">
								CONTACT<br>
								UD. Data Center Bandung<br>
								Jl. Lembong No. 11, Braga, Sumur<br>
								Bandung, Jawa Barat<br>
								Phone: (022) 000000<br>
								E-mail: <a href="mailto:haha@hahaha.com" class="">haha@hahaha.com</a>
							</address>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="footer-copyrights">
						<p>Copyrights &copy; 2018 All Rights Reserved by PT. Sigma Cipta Caraka</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
		<i class="fa fa-angle-up"></i>
	</a>
</footer>

</body>
</html>