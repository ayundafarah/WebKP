<?php
include('logincust.php');
$username=$_SESSION['username'];
$email = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Request Service Customer</title>
	<script src="scrolling.js"></script>
  	<script type="text/javascript">
    	$(document).on('click','.navbar-collapse.in',function(e) {
      		if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        		$(this).collapse('hide');
      		}
    	});
  	</script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
           <ul class="dropdown-menu"></ul>
          </li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="profil.php">Profil</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="logout.php">Keluar</a></li>
        </ul>
      </div>
    </div>
  </nav>

</header>

<!--==========SERVICES==========-->
<!--============================-->
<section id="services" class="services">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">DASHBOARD</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
				<div class="story-descb">
					<img src="img/p2.jpg" class="img-fluid" alt="...">
					<h5>REQUEST RESTART SERVER</h5>
					<br>
					<a href="request.php">
						<button class="btn btn-general btn-green" role="button">ISI FORM</button>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="story-descb">
					<img src="img/p3.jpg" class="img-fluid" alt="...">
					<h5>KUNJUNGAN/PEKERJAAN</h5>
					<br>
					<a href="permission.php">
						<button class="btn btn-general btn-green" role="button">ISI FORM</button>
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

<script>

$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>