<?php
require("../lib/database.php");
  $sql = "
    DELETE 
    FROM comments
    WHERE 
      no = '{$_GET['no']}'
  ";
  $result = mysqli_query($conn, $sql);
  header("Location: ./profile_comments.php?likes=".$_GET['likes']."&no=".$_GET['dn']);
?>