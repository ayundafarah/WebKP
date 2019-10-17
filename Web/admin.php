<?php
include('logincust.php');
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
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
					<li class="nav-item"><a class="nav-link" href="admin.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="adminlog.php">Keluar</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--============HOME============-->
<!--============================-->
<section id="homeadmin" class="homeadmin">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">DASHBOARD ADMIN</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
				<div class="story-descb">
					<img src="img/p2.jpg" class="img-fluid" alt="...">
					<h5>REQUEST RESTART SERVER</h5>
					<br>
					<a href="db-request.php?sort=">
						<button class="btn btn-general btn-green" role="button">Lihat Database</button>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="story-descb">
					<img src="img/p3.jpg" class="img-fluid" alt="...">
					<h5>KUNJUNGAN / PEKERJAAN</h5>
					<br>
					<a href="db-permission.php?sort=">
						<button class="btn btn-general btn-green" role="button">Lihat Database</button>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="story-descb">
					<img src="img/p3.jpg" class="img-fluid" alt="...">
					<h5>DATA CUSTOMER DATA CENTER</h5>
					<br>
					<a href="db-customer.php?sort=">
						<button class="btn btn-general btn-green" role="button">Lihat Database</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

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