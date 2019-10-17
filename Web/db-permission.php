<!DOCTYPE html>
<html>
<head>
	<title>Data Kunjungan/Pekerjaan</title>
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

<!--==========TABEL===========-->
<!--==========================-->
<section class="db-permission" id="db-permission">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">Data Perizinan Kunjungan/Pekerjaan</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row" style="overflow-x: auto;">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th><a href="db-permission.php?sort=company">Nama Perusahaan</a></th>
						<th>Nama Pegawai</th>
						<th>Alamat Perusahaan</th>
						<th>Telepon/HP</th>
						<th>E-mail</th>
						<th>Jenis Pekerjaan</th>
						<th><a href="db-permission.php?sort=tanggal">Waktu Pelaksanaan</a></th>
						<th>Jam Mulai</th>
						<th>Jam Selesai</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/* Get Data from Database */
						include "config.php";
						$no = 1;

						$sql = "SELECT * FROM permission";

						if ($_GET['sort'] == 'company')
						{
    						$sql .= " ORDER BY company";
						}
						elseif ($_GET['sort'] == 'tanggal')
						{
    						$sql .= " ORDER BY tanggal";
						}

						$sql2 = mysqli_query($conn, $sql);
			
						/* Show Data */
						while ($data = mysqli_fetch_array($sql2)) {

					?>

					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['company'] ?></td>
						<td><?php echo $data['name1'] ?><br><?php echo $data['name2'] ?><br><?php echo $data['name3'] ?><br><?php echo $data['name4'] ?><br><?php echo $data['name5'] ?></td>
						<td><?php echo $data['address'] ?></td>
						<td><?php echo $data['phone'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['job'] ?></td>
						<td><?php echo $data['hari'] ?>, <?php echo $data['tanggal'] ?></td>
						<td><?php echo $data['jam'] ?></td>
						<td><?php echo $data['jam_sel'] ?>
						<?php echo "<form method=POST action='update_jam.php'> ";
						echo "<input type='time' class='form-control' name='jam' id='jam'>";
						echo " <button type=submit class=\"btn btn-green\" name='email' value=".$data["email"].">Edit Waktu Selesai</button> </form>"; ?>
						</td>
						<td>
						<?php echo "<form method=POST action='accept_request.php'>";
						echo " <button type=submit class=\"btn btn-green fa fa-check\" name='email' value=".$data["email"]."></button> </form>"; ?>
							<?php echo "<form method=POST action='decline_request.php'>";
						echo " <button type=submit class=\"btn btn-green fa fa-close\" name='email' value=".$data["email"]."></button> </form>"; ?></td>
					</tr>

					<?php

						}

					?>
				</tbody>
			</table>

			<button type="button" class="btn btn-green"><a href='cetak-permission.php'	target='_blank'>Data Diterima</a></button>

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