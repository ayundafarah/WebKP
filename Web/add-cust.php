<!DOCTYPE html>
<html>
<head>
	<title>Data Customer</title>
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
					<li class="nav-item"><a class="nav-link" href="admin.php">Kembali</a></li>
					<li class="nav-item"><a class="nav-link" href="adminlog.php">Keluar</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========FORM============-->
<!--==========================-->
<?php

	include "config.php";

	if (isset($_POST['save'])) {
			$sql = mysqli_query($conn, "INSERT INTO customer (nama, company, notelp, email, alamat, kategori, username, password) VALUES ('".$_POST["nama"]."','".$_POST["company"]."','".$_POST["notelp"]."','".$_POST["email"]."','".$_POST["alamat"]."','".$_POST["kategori"]."','".$_POST["username"]."','".$_POST["password"]."')");

			header("location:db-customer.php");
	}

?>

<section class="add-cust" id="add-cust">
	<div class="container">
		<center>
			<h5>TAMBAH DATA CUSTOMER</h5>
		</center>
		<br>
		<div class="col-md-10 form-addcust">
			<form method="POST">
				<div class="form-group">
					<label>Nama Perusahaan</label>
					<input type="text" class="form-control" id="company" name="company">
				</div>
				<div class="form-group">
					<label>Nama Pegawai</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<input type="text" class="form-control" id="kategori" name="kategori">
				</div>
				<div class="form-group">
					<label>Telepon/HP</label>
					<input type="text" class="form-control" id="notelp" name="notelp">
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="mail" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" id="password" name="password">
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-green btn-general" name="save">Tambah</a></button>
				</div>
			</form>
		</div>
	</div>
</section>
<br><br><br>

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
	<a href="#db-permission" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="db-permission" role="button">
		<i class="fa fa-angle-up"></i>
	</a>
</footer>

</body>
</html>