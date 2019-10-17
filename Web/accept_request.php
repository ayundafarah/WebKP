<!DOCTYPE html>
<html>
 <head>
  <title>Form Terima Request</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <?php
    include "script.html";
  ?>
 </head>

  <?php
  include 'config.php';
  
  $email = $_POST["email"];
  ?>

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
          <li class="nav-item"><a class="nav-link" href="db-permission.php?sort=">Kembali</a></li>
          <li class="nav-item"><a class="nav-link" href="adminlog.php">Keluar</a></li>
        </ul>
      </div>
    </div>
  </nav>

</header>

<!--==========FORM==========-->
<!--============================-->
<section id="form-per" class="form-per">
  <div class="container">
    <div class="row title-bar">
      <div class="col-md-12">
        <h1 class="wow fadeInUp">TERIMA REQUEST KUNJUNGAN</h1>
        <div class="heading-border"></div>
      </div>
    </div>

   <form method="post" id="comment_form" action="insert.php">
    
    <div class="form-group">
     <label>Kepada</label>
     <?php echo "<input name=\"email\" class=\"form-control\" type=\"text\" value=\"$email\">"
        ?>
    </div>

    <div class="form-group">
     <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject" class="form-control" value="Request Diterima">
    </div>

    <div class="form-group">
     <label>Pesan</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    
    <div class="form-group">
     <?php echo "<button type=\"submit\" class=\"btn btn-primary\" name=\"email\" value=$email >Kirim</button>"?>
    </div>

   </form>
 </div>
</section>
<br><br><br><br>
<br><br><br><br><br><br>



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

<script>
$(document).ready(function(){
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
       alert("Pesan Terkirim");
    }
   });
  }
  else
  {
   alert("Pesan Dibutuhkan");
  }
 });
 
});
</script>