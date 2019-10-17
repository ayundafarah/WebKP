<?php
	include('logincust.php'); // Includes Login Script

	if(isset($_SESSION['username'])){
		header("location: indexcustomer.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Request Service Customer</title>
	<?php
		include "script.html";
	?>
	<script src="scrolling.js"></script>
  	<script type="text/javascript">
    	$(document).on('click','.navbar-collapse.in',function(e) {
      		if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        		$(this).collapse('hide');
      		}
    	});
  	</script>
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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="#" data-toggle="modal" data-target="#login-modal">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========HOME==========-->
<!--========================-->
<section id="home">
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!--Carousel Items-->
		<div class="carousel-inner">
			<div class="carousel-item active slides">
				<div class="overlay"></div>
				<div class="slide-1"></div>
				<div class="hero">
					<hgroup class="wow fadeInUp">
						<h1>REQUEST SERVICE DCM BANDUNG</h1>
						<h2><a href="#" class="typewrite" data-period="2000" data-type='["TELKOMSIGMA"]'></a></h2>
					</hgroup>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==========ABOUT==========-->
<!--=========================-->
<section id="about" class="about">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">Telkomsigma Data Center</h1>
				<div class="heading-border"></div>
				<div class="title-but">
					<a href="http://www.telkomsigma.co.id/" target="_blank">
						<button class="btn btn-general btn-green" role="button">Lihat</button>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- 3 Columns -->
	<div class="container-fluid">
        <div class="row"> 
          <div class="col-md-4" style="background-color: #ff6666;">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">
            	<h5>WHY TELKOMSIGMA?</h5>
            	<p class="desc">Telkomsigma is the pioneer in data center managed services in Indonesia. We started our data center and managed services outsourcing since 1997, with over 15 years of international standard experience and trust in the data center industry.</p>
            </div>
          </div> 
          <div class="col-md-4" style="background-color: #595959;">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
            	<h5>ENTERPRISE SOLUTIONS</h5>
            	<p class="desc">Delivering cost effective solutions, so clients can focus on their core business. Our solutions comprises of among others: Colocation, Data Recovery Services, Working Room, Communication Link.</p>
            </div>
          </div> 
          <div class="col-md-4" style="background-color: #990000;">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
            	<h5>STRATEGIC LOCATIONS</h5>
            	<p class="desc">Telkomsigma’s has 3 world class standard data centers in Indonesia; Serpong (BSD) Tangerang, Sentul–West Java and Surabaya–East Java. Dedicated data center facilities for providing premium colocation, cloud solutions and managed services solutions.</p>
            </div>
          </div> 
        </div> 
      </div>
</section>
<br><br><br>

<!--==========SERVICES==========-->
<!--============================-->
<section id="services" class="services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
				<center><h1>REQUEST RESTART SERVER</h1></center>
				<div class="story-descb">
					<img src="img/p2.jpg" class="img-fluid" alt="...">
					<br>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
				<center><h1>KUNJUNGAN/<br>PEKERJAAN</h1></center>
				<div class="story-descb">
					<img src="img/p3.jpg" class="img-fluid" alt="...">
					<br>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============LOGIN===========-->
<!--============================-->
<section id="login">
	<div class="modal fade" id="login-modal" tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="fa fa-times" aria-hidden="true"></span>
					</button>
				</div>
				<div id="div-forms">
					<form id="login-form" method="POST" action="logincust.php">
						<center>
							<img src="img/logo.png" alt="logo" style="width: 160px; height: 45px;">
						</center><br>
						<h5 class="text-center">Login Customer</h5>
						<div class="modal-body">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" required="">
							<label for="username">Password</label>
							<input type="password" name="password" class="form-control" required="">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<br>
							<p>Belum punya akun? Registrasi <a href="register.php">di sini</a>.</p>
						</div>
						<div class="modal-footer text-center">
							<div>
								<input name="submit" type="submit" value=" Login " class="btn btn-general btn-white">
							</div>
						</div>
					</form>
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