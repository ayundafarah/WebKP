<?php
include('logincust.php');
	$username=$_SESSION['username'];
	$name = $_SESSION['name'];
	$category = $_SESSION['category'];
	$company = $_SESSION['company'];
	$notelp = $_SESSION['notelp'];
	$email = $_SESSION['email'];
	$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php
		include "script.html";
	?>

	<script type="text/javascript">

    $(document).ready(function () {
    var counter = 2;
     var angka = 1;

    $("#addrow").on("click", function () {
        var newRow = $("<tr class = form-row>");
        var cols = "";
       
        cols += '<td class = form-group col-md-1>' + ++angka + '</td>';
        cols += '<td class = form-group col-md-3><input type="text" class="form-control" name="nper' + counter + '"/></td>';
        cols += '<td class = form-group col-md-2><input type="text" class="form-control" name="merk' + counter + '"/></td>';
        cols += '<td class = form-group col-md-2><input type="text" class="form-control" name="rack' + counter + '"/></td>';
        cols += '<td class = form-group col-md-3><input type="text" class="form-control" name="ket' + counter + '"/></td>';

        cols += '<td class = form-group col-md-1><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        frm.h.value=counter;
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}

</script>
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
					<li class="nav-item"><a class="nav-link smooth-scroll" href="indexcustomer.php">Kembali</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========FORM KUNJUNGAN==========-->
<!--==================================-->
<section id="form-per" class="form-per">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">FORM PERMOHONAN RESTART SERVER</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<form action="show-r.php" method="POST" name="frm" id="frm">
		  	<div class="form-group">
		    	<label for="company">Nama Perusahaan</label>
		    	<input type="text" class="form-control" id="company" name="company" value="<?php echo $company ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="name">Nama Pegawai</label>
		    	<input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="address">Alamat Kantor</label>
		    	<input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">
		    </div>
		  	<div class="form-group">
		  		<label for="phone">Telepon/HP</label>
		  		<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $notelp ?>">
		  	</div>
		  	<div class="form-group">
		  		<label>Tanggal Pekerjaan</label>
		  		<input type="date" class="form-control" id="tanggal" name="tanggal">
		  	</div>
		  	<div class="form-group">
		  		<label for="phone">Jenis Pekerjaan</label>
		  		

		  		<p style="font-size: 20px; color: black;">Permohonan Free Hand Restarts</p>
		  	</div>
			
			<table id="myTable" class=" table order-list">
		  	<thead>
		  	<tr class="form-row">
		  		<td class="form-group col-md-1">
		  			<center>
		    		<label>No.</label>
		    		</center>
		    	</td>
		    	<td class="form-group col-md-3">
		    		<label>Nama Perangkat</label>
		    	</td>
		    	<td class="form-group col-md-2">
		    		<label>Merk/Type</label>
		    	</td>
		    	<td class="form-group col-md-2">
		    		<label>Rack</label>
		    	</td>
		    	<td class="form-group col-md-3">
		    		<label>Keterangan</label>
		    	</td>
		  	</tr>
		  	</thead>
		
			<tbody>
			
			
			<tr class="form-row">
		  		<td class="form-group col-md-1">
		  			<center>1</center>
		    	</td>
		    	<td class="form-group col-md-3">
		    		<input type="text" class="form-control" name="nper1" id="nper1">
		    	</td>
		    	<td class="form-group col-md-2">
		    		<input type="text" class="form-control" name="merk1" id="merk1">
		    	</td>
		    	<td class="form-group col-md-2">
		    		<input type="text" class="form-control" name="rack1" id="rack1">
		    	</td>
		    	<td class="form-group col-md-3">
		    		<input type="text" class="form-control" name="ket1" id="ket1">
		    	</td>
				<td class="col-md-1"><a class="deleteRow"></a>
				 </td>

		  	</tr>

			</tbody>


			<tfoot>
			   <tr>
            	<td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
            	</td>
       		 </tr>
        	<tr>
        	</tr>

			</tfoot>
			  </table>
			<input name="h" type="hidden" id="h" value="1" />
		  			  	<button type="submit" name="submitt" class="btn btn-primary">Selanjutnya</button>
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