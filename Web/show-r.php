<!DOCTYPE html>
<html>
<head>
	<title>Permohonan Restart Server</title>
	<?php
		include "script.html";
	?>
</head>
<body>

<style>
	.tabel-request th {
		text-align: center;
	}
</style>

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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="request.php">Kembali</a></li>
					<li class="nav-item"><a class="nav-link smooth-scroll" href="indexcustomer.php">Beranda</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>
<br><br><br><br><br><br>

<?php

include "config.php";
include('logincust.php');
$username=$_SESSION['username'];
	$image=$_SESSION['image'];

	$num =  $_POST['h'];
	$company = $_POST['company'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$tanggal = $_POST['tanggal'];
	$nper = $_POST['nper1'];
	$merk = $_POST['merk1'];
	$rack = $_POST['rack1'];
	$ket = $_POST['ket1'];


	if($num==1)
	{		
		$sql = mysqli_query($conn, "INSERT INTO request (company, name, address, phone, tanggal, nper1, merk1, rack1, ket1) 
			VALUES ('".$_POST["company"]."',
					'".$_POST["name"]."',
					'".$_POST["address"]."','".$_POST["phone"]."','".$_POST["tanggal"]."','".$_POST["nper1"]."','".$_POST["merk1"]."','".$_POST["rack1"]."','".$_POST["ket1"]."')");
	}
	
	else{
		$sql = mysqli_query($conn, "INSERT INTO request (company, name, address, phone, tanggal, nper1, merk1, rack1, ket1) VALUES ('".$_POST["company"]."','".$_POST["name"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["tanggal"]."','".$_POST["nper1"]."','".$_POST["merk1"]."','".$_POST["rack1"]."','".$_POST["ket1"]."')");

		for($i=2;$i<=$num;$i++){
			$sql = mysqli_query($conn, "UPDATE request
				SET nper$i = 
				'".$_POST["nper$i"]."', 
					merk$i = '" .$_POST["merk$i"]."',
					rack$i = '" .$_POST["rack$i"]."',
					ket$i = '".$_POST["ket$i"]."' 
					 WHERE name ='".$_POST["name"]."'");
		}
	}
	echo "
<!--===========FORM===========-->
<!--==========================-->

	<div class='container'>
		<div class='show-form'>
			<center>
				<h5>PERMOHONAN RESTART SERVER</h5>
			</center>
			<br>
			<div class='isi-form'>
				<table border='0' style='width: 50%;'>
					<tr>
						<td>Nama Perusahaan</td>
						<td>: </td>
						<td>"; echo $company; echo "</td>
					</tr>
					<tr>
						<td>Nama Pegawai</td>
						<td>: </td>
						<td>"; echo $name; echo "</td>
					</tr>
					<tr>
						<td>Alamat Kantor</td>
						<td>: </td>
						<td>"; echo $address; echo "</td>
					</tr>
					<tr>
						<td>Telepon/HP</td>
						<td>: </td>
						<td>";echo $phone; echo "</td>
					</tr>
					<tr>
						<td>Tanggal Pekerjaan</td>
						<td>: </td>
						<td>"; echo $tanggal; echo "</td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>: </td>
						<td>Permohonan Free Hand Restats</td>
					</tr>
				</table>
				<br>

				<div class='tabel-request'>
					<table border='1px solid black' style='border-collapse: collapse; width: 60%;'>
						<tr>
							<th>NO.</th>
							<th>NAMA PERANGKAT</th>
							<th>MERK/TYPE</th>
							<th>RACK</th>
							<th>KETERANGAN</th>
						</tr>";
				
							
							for($i =1; $i<=$num; $i++){
								${'nper'.$i} = $_POST["nper$i"];
								${'merk'.$i} = $_POST["merk$i"];
								${'rack'.$i} = $_POST["rack$i"];
								${'ket'.$i} = $_POST["ket$i"];
						    	echo "<tr>
							    		<td>"; echo $i; echo "</td>
    
    		 							<td>"; echo ${'nper'.$i}; echo "</td> 

    		 							<td>"; echo ${'merk'.$i}; echo "</td>
    		 							<td>"; echo ${'rack'.$i}; echo "</td>
    		 							<td>"; echo ${'ket'.$i}; echo "</td>
    		 							</tr>";
        							}		
			echo "		</table>
				</div>
			</div>
			<br>
			<br>
			<div class='row'>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6'>
							<center>
								Bandung, ..................................<br>
								Pemohon izin,<br>";
								echo '<img src="getImage.php?username='.$username.'">';
								echo "
									
								<br> 
								<br>

							______________________
							</center>
						</div>
						<div class='col-md-6'>
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
			Note: Permintaan restart ini telah diketahui dan disetujui oleh Pimpinan Perusahaan pemohon, resiko dan akibat dari pekerjaan ini di luar tanggung jawab Data Center.
		</div>
		<br>";
		?>
		<button type='submit' name='submit' class='btn btn-primary' onclick='myFunction()'><a href="indexcustomer.php">Ajukan Permohonan</a></button>
		<script>
			function myFunction() {
				alert('Permohonan telah diajukan. Silakan tunggu notifikasi persetujuan dari Data Center.');
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