
<!DOCTYPE html>
<html>
<head>
	<title>Surat Izin Melaksanakan Kunjungan/Pekerjaan</title>
	<?php
		include "script.html";
	?>
</head>
<body>

<!-- INSERT DATA TO DATABASE -->
<?php

	include "config.php";

	if(isset($_POST['submit'])) {
		$sql = mysqli_query($conn, "INSERT INTO permission (company, name1, name2, name3, name4, name5, address, phone, email, job, hari, tanggal, jam) VALUES ('".$_POST["company"]."','".$_POST["name1"]."','".$_POST["name2"]."','".$_POST["name3"]."','".$_POST["name4"]."','".$_POST["name5"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["job"]."','".$_POST["hari"]."','".$_POST["tanggal"]."','".$_POST["jam"]."')");
	}

?>

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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="permission.php">Kembali</a></li>
					<li class="nav-item"><a class="nav-link smooth-scroll" href="indexcustomer.php">Beranda</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>
<br><br><br><br><br><br>

<!--===========FORM===========-->
<!--==========================-->

	<?php
		$company = $_POST["company"];
		$name1 = $_POST["name1"];
		$name2 = $_POST["name2"];
		$name3 = $_POST["name3"];
		$name4 = $_POST["name4"];
		$name5 = $_POST["name5"];
		$name6 = $_POST["name6"];
		$name7 = $_POST["name7"];
		$name8 = $_POST["name8"];
		$name9 = $_POST["name9"];
		$name10 = $_POST["name10"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$job = $_POST["job"];
		$hari = $_POST["hari"];
		$tanggal = $_POST["tanggal"];
		$jam = $_POST["jam"];
	?>

	<div class="container">
		<div class="show-form">
			<center>
				<h5>SURAT PEMBERITAHUAN</h5>
				<h5>IZIN MELAKSANAKAN KUNJUNGAN/PEKERJAAN</h5>
			</center>
			<br>
			<div class="isi-form">
				<table border="0" style="width: 50%;">
					<tr>
						<td>Nama Perusahaan</td>
						<td>: </td>
						<td><?php echo $company ?></td>
					</tr>
					<tr>
						<td>Nama Pegawai</td>
						<td>: </td>
						<td><?php echo $name1 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name2 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name3 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name4 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name5 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name6 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name7 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name8 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name9 ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><?php echo $name10 ?></td>
					</tr>
					<tr>
						<td>Alamat Perusahaan</td>
						<td>: </td>
						<td><?php echo $address ?></td>
					</tr>
					<tr>
						<td>Telepon/HP</td>
						<td>: </td>
						<td><?php echo $phone ?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>: </td>
						<td><?php echo $email ?></td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>: </td>
						<td><?php echo $job ?></td>
					</tr>
				</table>
			</div>
			<br>
			mohon ijin untuk melaksanakan pekerjaan pada hari <?php echo $hari ?> tanggal <?php echo $tanggal ?> jam <?php echo $jam ?> WIB di lokasi Data Center Bandung.
			<br>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<center>
								Bandung, ...................................<br>
								Pemohon izin,<br>
								<br>
								<br>
								______________________
							</center>
						</div>
						<div class="col-md-6">
							<center>
								Mengetahui,<br>
								Data Center Bandung<br>
								<br>
								<br>
								______________________
							</center>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			Note: Selama kunjungan/pekerjaan tetap berpedoman pada Tata Tertib Data Center Bandung dan selalu memperhatikan keamanan K3 (Keselamatan Kesehatan Kerja).
		</div>
		<br>
		<br>
		<br>
		<br>
		<button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()"><a href="indexcustomer.php">Ajukan Permohonan</a></button>
		<script>
			function myFunction() {
				alert("Permohonan telah diajukan. Silakan tunggu notifikasi persetujuan dari Data Center.");
			}
		</script>
	</div>

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