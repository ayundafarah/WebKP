 <!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Customer</title>
	<?php
		include "script.html";
	?>
</head>
<body>
<!--==========TABEL===========-->
<!--==========================-->
<section class="db-cust" id="db-cust">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">Data Customer</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row" style="overflow-x: auto;">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Nama Perusahaan</th>
						<th>Telepon/HP</th>
						<th>E-mail</th>
						<th>Alamat</th>
						<th>Kategori</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/* Get Data from Database */
						include "config.php";
						$no = 1;

						$sql = "SELECT * FROM customer";

						$sql2 = mysqli_query($conn, $sql);
			
						/* Show Data */
						while ($data = mysqli_fetch_array($sql2)) {
					?>

					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['company'] ?></td>
						<td><?php echo $data['notelp'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['alamat'] ?></td>
						<td><?php echo $data['kategori'] ?></td>
					</tr>

					<?php

						}

					?>
				</tbody>
			</table>

			<p align='center'>
		<a href="cetak-cust.php" cls='btn' onClick="window.print();return false"> <i class='icon-print'></i>Cetak </a>
			</p>
		</div>
	</body>
</html>
