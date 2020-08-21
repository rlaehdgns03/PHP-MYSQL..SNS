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
      tid = '{$_POST['tid']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: /main_feed.php');
?>