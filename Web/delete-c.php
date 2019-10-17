<?php 
	include 'config.php';

	$email = $_POST['email'];
	$query = "DELETE FROM customer WHERE email='$email'";
	mysqli_query($conn, $query);


	include 'db-customer.php';
?>