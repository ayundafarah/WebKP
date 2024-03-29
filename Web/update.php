<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php
		include "script.html";
	?>
</head>
<?php
	include 'config.php';
	
	$email = $_POST["email"];

	$query = "SELECT nama,company,alamat,kategori,notelp,username,password,email FROM customer WHERE email='$email' ";

	$sql = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_array($sql)) {
		
	$name = $data['nama'];
	$category = $data['kategori'];
	$address = $data['alamat'];
	$company = $data['company'];
	$notelp = $data['notelp'];
	$email = $data['email'];
	$username = $data['username'];
	$password = $data['password'];
						
	}
?>
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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="db-customer.php">Kembali</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<section id="form-per" class="form-per">
	<div class="container">
	<div class="row title-bar">
		<div class="col-md-12">
			<h1 class="wow fadeInUp">EDIT DATA</h1>
			<div class="heading-border"></div>
			</div>
	</div>
	
	<form name="update" action=edit-c.php method=POST>
		<div class="form-group">
			<label for="email">Email</label>
		  	<input type="text"  class="form-control" id="nama" name="nama" value='<?php echo $email; ?>'>
		</div>
		<div class="form-group">
		    <label for="nama">Nama Pegawai</label>
		    <input type="text"  class="form-control" id="nama" name="nama" value='<?php echo $name; ?>'>
		</div>
		<div class="form-group">
		   	<label for="address">Alamat Perusahaan</label>
		    <input type="text" class="form-control" id="address" name="address" value='<?php echo $address; ?>'>
		</div>
		<div class="form-group">
		    <label for="company">Nama Perusahaan</label>
		    <input type="text" class="form-control" id="company" name="company" value='<?php echo $company; ?>'>
		</div>
		<div class="form-group">
		   	<label for="category">Kategori</label>
		    <input type="text" class="form-control" id="category" name="category" value='<?php echo $category; ?>'>
		</div>
		<div class="form-group">
		   	<label for="category">Telepon</label>
		    <input type="text" class="form-control" id="notelp" name="notelp" value='<?php echo $notelp; ?>'>
		</div>
		<div class="form-group">
		   	<label for="category">Username</label>
		    <input type="text" class="form-control" id="username" name="username" value='<?php echo $username; ?>'>
		</div>
		<div class="form-group">
		   	<label for="category">Password</label>
		    <input type="text" class="form-control" id="password" name="password" value='<?php echo $password; ?>'>
		</div>


		<div align="center" class="form-group">
			<?php echo "<button type=\"submit\" class=\"btn btn-primary\" name=\"email\" value=$email >Simpan</button> 
			<input type=reset class=\"btn btn-danger\" value=\"Reset\">"
			?>			
		</div>
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