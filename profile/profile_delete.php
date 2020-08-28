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
      id = '{$_POST['id']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: ./profile.php');
?>