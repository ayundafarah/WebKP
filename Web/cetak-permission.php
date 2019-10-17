<!DOCTYPE html>
<html>
<head>
	<title>Data Kunjungan/Pekerjaan</title>
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
				<h1 class="wow fadeInUp">Data Perizinan Kunjungan/Pekerjaan Yang Disetujui</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row" style="overflow-x: auto;">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Perusahaan</th>
						<th>Nama Pegawai</th>
						<th>Alamat Perusahaan</th>
						<th>Telepon/HP</th>
						<th>E-mail</th>
						<th>Jenis Pekerjaan</th>
						<th>Waktu Pelaksanaan</a></th>
						<th>Jam</th>
						<th>Jam Selesai</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/* Get Data from Database */
						include "config.php";
						$no = 1;

						$sql = "SELECT * FROM acc_permission";

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
						<td><?php echo $data['jam_sel'] ?></td>
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
	</div>
</section>
</body>
</html>