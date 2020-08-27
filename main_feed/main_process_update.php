<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "
  UPDATE topic
    SET
      description = '{$_POST['description']}',
      created = NOW()
    WHERE 
      id = '{$_POST['id']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: /main_feed.php');
?>