<!DOCTYPE html>
<html>
<head>
	<title>Data Restart Server</title>
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
				<h1 class="wow fadeInUp">Data Permohonan Restart Server Yang Diterima</h1>
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
						<th>Tanggal Pelaksanaan</a></th>
						<th>Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/* Get Data from Database */
						include "config.php";
						$no = 1;						
						$sql = "SELECT * FROM acc_request";

						$sql2 = mysqli_query($conn, $sql);
			
						/* Show Data */
						while ($data = mysqli_fetch_array($sql2)) {

					?>

					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['company'] ?></td>
						<td><?php echo $data['name'] ?></td>
						<td><?php echo $data['address'] ?></td>
						<td><?php echo $data['phone'] ?></td>
						<td><?php echo $data['tanggal'] ?></td>
						<td>
							<table border="0">
								<tr>
									<th>Perangkat</th>
									<th>Merk/Type</th>
									<th>Rack</th>
									<th>Ket</th>
								</tr>
								<tr>
									<td><?php echo $data['nper1'] ?></td>
									<td><?php echo $data['merk1'] ?></td>
									<td><?php echo $data['rack1'] ?></td>
									<td><?php echo $data['ket1'] ?></td>
								</tr>
								<tr>
									<td><?php echo $data['nper2'] ?></td>
									<td><?php echo $data['merk2'] ?></td>
									<td><?php echo $data['rack2'] ?></td>
									<td><?php echo $data['ket2'] ?></td>
								</tr>
								<tr>
									<td><?php echo $data['nper3'] ?></td>
									<td><?php echo $data['merk3'] ?></td>
									<td><?php echo $data['rack3'] ?></td>
									<td><?php echo $data['ket3'] ?></td>
								</tr>
								<tr>
									<td><?php echo $data['nper4'] ?></td>
									<td><?php echo $data['merk4'] ?></td>
									<td><?php echo $data['rack4'] ?></td>
									<td><?php echo $data['ket4'] ?></td>
								</tr>
								<tr>
									<td><?php echo $data['nper5'] ?></td>
									<td><?php echo $data['merk5'] ?></td>
									<td><?php echo $data['rack5'] ?></td>
									<td><?php echo $data['ket5'] ?></td>
								</tr>
							</table>
						</td>
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