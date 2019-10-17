<?php

session_start();

include "config.php";

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {

		if (($_POST['username'] == 'admin'))
		{
			$sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
			$result = mysqli_num_rows($sql);
			if ($result) {
				header("location:admin.php");
			} else {
				header("location:adminlog.php");
			}
		}

		else{

			$sql = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username' AND password='$password'");
			$result = mysqli_num_rows($sql);
			if ($result) {
				$row = mysqli_fetch_array($sql);	
					$_SESSION['name']=$row["nama"];
					$_SESSION['company']=$row["company"];
					$_SESSION['category']=$row["kategori"];
					$_SESSION['notelp']=$row["notelp"];
					$_SESSION['email']=$row["email"];
					$_SESSION['address']=$row["alamat"];
					$_SESSION['username']=$row["username"];
					header("location:indexcustomer.php");
			} 
			else {
				header("location:index.php");
			}
		}

	}

	else {
		header("location:index.php");
	}

}

?>