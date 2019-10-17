<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php
		include "script.html";
	?>
	<script type="text/javascript">

  function autofill(){
   		var dropdown1 = document.getElementById('company');
   		var textbox = document.getElementById('address');
   		if(dropdown1.selectedIndex == 1){
     		textbox.value = "Alamat Perusahaan 1";
   		} else if(dropdown1.selectedIndex == 2) {
     		textbox.value = "Alamat Perusahaan 2";
   		}
   		else if(dropdown1.selectedIndex == 3) {
     		textbox.value = "Alamat Perusahaan 3";
   		}
   		else{
   			textbox.value = "Masukan Alamat";	
   		}
   }

 	function preview_image(event) {
		var reader = new FileReader();
 		reader.onload = function(){
	  		var output = document.getElementById('output_image');
  			output.src = reader.result;
  		}
	  	reader.readAsDataURL(event.target.files[0]);
	}

	</script>

	<style>
		.error {color: #FF0000;}
	</style>

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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="index.php">Kembali</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========FORM REGISTRASI=========-->
<!--==================================-->
<?php

	include "config.php";

	$send=0;

	$image = $perusahaan = $kategori = $pegawai = $alamat = $telp = $email = $password = $username = "";
	$imageErr = $perusahaanErr = $kategoriErr = $pegawaiErr = $alamatErr = $telpErr = $emailErr = $passwordErr = $usernameErr = "";

	if (isset($_POST['save'])) {
		if (empty($_POST["nama"])) {
    			$pegawaiErr = "Name is required";
    			$send=0;
  		} else {
    			$pegawai = test_input($_POST["nama"]);
    			if (!preg_match("/^[a-zA-Z ]*$/",$pegawai)) {
      				$pegawaiErr = "Only letters and white space allowed";
      				$send=0; 
    			}
 			$send=1;   	
  		}

  		if (empty($_POST["email"])) {
    		$emailErr = "Email is required";
    		$send=0;
  		} else {
    		$email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format"; 
      			$send=0;
    		}
    		$send=1;
  		}

  		  if (empty($_POST["company"])) {
    		$perusahaanErr = "Company is required";
    		$send=0;
  		} else {
    		$perusahaan = test_input($_POST["company"]);
    		$send=1;
  		}

  		   if (empty($_POST["kategori"])) {
    		$kategoriErr = "Category is required";
    		$send=0;
  		} else {
    		$kategori = test_input($_POST["kategori"]);
    		$send=1;
  		}


  		    if (empty($_POST["notelp"])) {
    		$telpErr = "Phone is required";
    		$send=0;
  		} else {
    		$telp = test_input($_POST["notelp"]);
    		$send=1;
  		}

  		     if (empty($_POST["username"])) {
    		$usernameErr = "Username is required";
    		$send=0;
  		} else {
    		$username = test_input($_POST["username"]);
    		$send=1;
  		}


  		 	 if (empty($_POST["password"])) {
    		$passwordErr = "Password is required";
    		$send=0;
  		} else {
    		$password = test_input($_POST["password"]);
    		$send=1;
  		}

	}

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  return $data;
	}

  if ($send == 1) {
  	session_start();

  	$sql = mysqli_query($conn, "INSERT INTO customer (nama, company, notelp, email, alamat, kategori, username, password, image) VALUES ('".$_POST["nama"]."','".$_POST["company"]."','".$_POST["notelp"]."','".$_POST["email"]."','".$_POST["address"]."','".$_POST["kategori"]."','".$_POST["username"]."','".$_POST["password"]."', '".$_POST["image"]."' )");

  	$username = $_POST["username"];

  	$sql2 = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username'");
  	
  	$row = mysqli_fetch_array($sql2);	
		$_SESSION['name']=$row["nama"];
		$_SESSION['company']=$row["company"];
		$_SESSION['category']=$row["kategori"];
		$_SESSION['notelp']=$row["notelp"];
		$_SESSION['email']=$row["email"];
		$_SESSION['address']=$row["alamat"];
		$_SESSION['username']=$row["username"];
		$_SESSION['image']=$row["image"];
			header("location:indexcustomer.php");
  }

?>

<section id="form-per" class="form-per">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">FORM REGISTRASI</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<form name="regist" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<div class="form-group">
		    	<label for="company">Nama Perusahaan</label><span class="error">* <?php echo $perusahaanErr;?></span>
		      		<select id="company" class="form-control" id="company" name="company" onclick="autofill();">
		        		<option selected>Pilih</option>
		        		<option id="option1" >Perusahaan 1</option>
		        		<option id="option2" >Perusahaan 2 </option>
		        		<option id="option2" >Perusahaan 3 </option>
		      		</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="kategori">Kategori</label><span class="error">* <?php echo $kategoriErr;?></span>
		      		<select id="kategori" class="form-control" id="kategori" name="kategori">
		        		<option selected>Pilih</option>
		        		<option>Customer</option>
		        		<option>Mitra</option>
		      		</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="nama">Nama Pegawai</label><span class="error">* <?php echo $pegawaiErr;?></span>
		      		<select id="nama" class="form-control" id="nama" name="nama">
		        		<option selected>Pilih</option>
		        		<option id="option1" >Agus</option>
		        		<option id="option2" >Budi</option>
		        		<option id="option2" >Caca</option>
		      		</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="address">Alamat Perusahaan</label><span class="error">* <?php echo $perusahaanErr;?></span>
		    	<input type="text" class="form-control" id="address" name="address">
		  	</div>
		  	<div class="form-group">
		    	<label for="notelp">Telepon/HP</label><span class="error">* <?php echo $telpErr;?></span>
		    	<input type="number" class="form-control" id="notelp" name="notelp">
		  	</div>
		  	<div class="form-group">
		    	<label for="email">E-mail</label><span class="error">* <?php echo $emailErr;?></span>
		    	<input type="text" class="form-control" id="email" name="email">
		  	</div>
		  	<div class="form-group">
		    	<label for="username">Username</label><span class="error">* <?php echo $usernameErr;?></span>
		    	<input type="text" class="form-control" id="username" name="username">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password</label><span class="error">* <?php echo $passwordErr;?></span>
		    	<input type="password" class="form-control" id="password" name="password">
		  	</div>

		  	<div class="form-group">
	  			<label for="image">Upload Tanda Tangan Anda</label><span class="error">* <?php echo $imageErr;?></span>		
		  	</div>
		  		<input type="file" id="image" name="image" accept="image/*" onchange="preview_image(event)">
 				<img id="output_image"/>
			<br><br>
		  	<button type="submit" name="save" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</section>

<br>
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