<?php
//insert.php
include"config.php";

$email = mysqli_real_escape_string($conn, $_POST["email"]);

 $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
 $comment = mysqli_real_escape_string($conn, $_POST["comment"]);


 $query = "
 INSERT INTO comments(comment_subject, comment_text, email)
 VALUES ('$subject', '$comment','$email');
 ";
 $query.= "INSERT INTO acc_permission SELECT * FROM permission WHERE email='$email';  ";
 $query.= "DELETE FROM permission WHERE email='$email';  ";

 mysqli_multi_query($conn, $query);

?>
