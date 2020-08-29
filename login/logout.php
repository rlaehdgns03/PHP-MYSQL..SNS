<?php 
session_start();
$conn = mysqli_connect(
  "localhost", 
  "root", 
  "adsdads1", 
  "post");
session_destroy(); 
?> 
<meta http-equiv="refresh" content="0; url=./login.php">
