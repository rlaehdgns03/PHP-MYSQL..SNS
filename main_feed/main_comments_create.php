<?php
session_start();
require("../lib/database.php");
  $sql = "
  INSERT INTO comments
    (description_no, user_no, comment, created)
    VALUES(
      '{$_GET['no']}',
      '{$_SESSION['no']}',
      '{$_POST['comment']}',
      NOW()
    )
  ";   
  $result = mysqli_query($conn, $sql);
  header("Location: ./main_comments.php?likes=".$_GET['likes']."&no=".$_GET['no']);
?>