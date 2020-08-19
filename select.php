<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
    echo $row['description'].'<br>';
  }
?>