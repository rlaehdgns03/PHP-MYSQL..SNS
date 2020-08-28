<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "
  INSERT INTO topic
    (description, created)
    VALUES(
      '{$_POST['description']}',
      NOW()
    )
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: ./profile.php');
?>