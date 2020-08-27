<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "
    SELECT
      *
    FROM 
      user
  ";   
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
    if(in_array($_POST['uID'], $row['uID'])){
      if(in_array($_POST['uPW'], $row['uPW'])){
        header('Location: ../main_feed/main_feed.php');
      }else{
        header('Location: /login.php');
      }
    }else{
      header('Location: /login.php');
    }
?>