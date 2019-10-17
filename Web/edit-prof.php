<?php
	include 'config.php';

	$name = $_POST['name'];
	

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$notelp = $_POST['notelp'];

	$query = "UPDATE customer SET username='$username', password='$password', notelp='$notelp',email='$email' where nama='$name' ";

	mysqli_query($conn, $query);

	header("location:profil.php");

?>