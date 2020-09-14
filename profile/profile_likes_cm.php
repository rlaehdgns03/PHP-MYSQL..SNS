<?php
session_start();
require("../lib/database.php");
  
  if ($_GET['likes'] === 'unliked') {
    $description_no = $_GET['no'];
    $result = mysqli_query($conn, "SELECT * FROM topic WHERE no='".$description_no."'");
    $row = mysqli_fetch_array($result);
    $n = $row['likes'];

    mysqli_query($conn, "INSERT INTO likes (user_no, description_no) VALUES ('".$_SESSION['no']."', '".$description_no."')");
    mysqli_query($conn, "UPDATE topic SET likes=$n+1 WHERE no='".$description_no."'");
    header('Location: ./profile_comments.php?likes=liked&no='.$_GET['no'].'');
  }
  
  if ($_GET['likes'] === 'liked') {
    $description_no = $_GET['no'];
    $result = mysqli_query($conn, "SELECT * FROM topic WHERE no='".$description_no."'");
    $row = mysqli_fetch_array($result);
    $n = $row['likes'];

    mysqli_query($conn, "DELETE FROM likes WHERE description_no='".$description_no."' AND user_no='".$_SESSION['no']."'");
    mysqli_query($conn, "UPDATE topic SET likes=$n-1 WHERE no='".$description_no."'");
    header('Location: ./profile_comments.php?likes=unliked&no='.$_GET['no'].'');
  }
?>