<?php
	include 'config.php';

	$email = $_POST['email'];
	$notelp = $_POST['notelp'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$name = $_POST['nama'];
	$category = $_POST['category'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "UPDATE customer SET nama='$name', company='$company', alamat='$address', kategori='$category', notelp='$notelp', username='$username', password='$password' where email='$email' ";

	mysqli_query($conn, $query);

	header('location:db-customer.php?sort=');

?>