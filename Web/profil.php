<?php
include('logincust.php');
	$name=$_SESSION['name'];

	$query = "SELECT * FROM customer WHERE nama='$name' ";

	$sql = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_array($sql)) {
	
	$email = $data['email'];
	$name = $data['nama'];
	$category = $data['kategori'];
	$address = $data['alamat'];
	$company = $data['company'];
	$notelp = $data['notelp'];
	$username = $data['username'];}
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

  	<style>
  		table {
  			border-collapse: collapse;
  			width: 70%;
  		}

  		th, td {
  			text-align: left;
  			padding: 8px;
  		}
  	</style>
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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="logout.php">Keluar</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========PROFILE=========-->
<!--==========================-->
<section id="profile" class="profile">
	<div class="container">
		<div class="row title-bar" style="padding-bottom: 20px;">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">PROFIL</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="isi-profile">
			<center>
				<table>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?php echo $name ?></td>
					</tr>
					<tr>
						<td>Nama Perusahaan</td>
						<td>:</td>
						<td><?php echo $company ?></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>:</td>
						<td><?php echo $category ?></td>
					</tr>
					<tr>
						<td>Alamat Perusahaan</td>
						<td>:</td>
						<td><?php echo $address ?></td>
					</tr>
					<tr>
						<td>Telepon/HP</td>
						<td>:</td>
						<td><?php echo $notelp ?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><?php echo $email ?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><?php echo $username ?></td>
					</tr>
				</table>
				<br>
			<?php echo "<form method=POST action='editProfile.php'> ";
			echo " <button type=submit class=\"btn btn-green\" name='name' value=".$name.">Edit</button> </form>"; ?>

			</center>
			<br><br>
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