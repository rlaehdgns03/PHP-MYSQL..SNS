<?php 
session_start();
$conn = mysqli_connect(
  "localhost", 
  "root", 
  "adsdads1", 
  "post");
session_destroy();
header('Location: ./login.php');
?> 

