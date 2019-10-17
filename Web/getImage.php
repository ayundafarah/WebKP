<?php
//koneksi ke database
include('config.php');
 
//ambil id dari $_GET id
$id = addslashes($_GET['id']);
 
//query ke database
$query = mysql_query("SELECT * FROM images WHERE id='$id'");
$row = mysql_fetch_assoc($query);
$image_db = $row['image'];
 
header("Content-type: image/jpeg");
 
echo $image_db;
?>