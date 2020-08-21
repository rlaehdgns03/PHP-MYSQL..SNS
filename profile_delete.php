<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "
  DELETE 
  FROM topic
  WHERE 
  tid = '{$_POST['tid']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: /profile.php');
?>