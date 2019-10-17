<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
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
		</div>
	</nav>

</header>

<!--===========BODY===========-->
<!--==========================-->
<section id="utama" class="utama">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">LOGIN ADMIN</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<br>
		<div class="form-logadmin">
			<div class="col-md-8">
				<form method="POST" action="logincust.php">
					<div class="form-group">
				    	<label for="username">Username</label>
				    	<input type="text" class="form-control" id="username" name="username">
				  	</div>
				  	<div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" class="form-control" id="password" name="password">
				  	</div>
				  	<br>
					<div class="text-center">
						<input type="submit" name="submit" class="btn btn-general btn-white" value=" Login ">
					</div>
				</form>
			</div>
		</div>
		<br>
		<br>
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