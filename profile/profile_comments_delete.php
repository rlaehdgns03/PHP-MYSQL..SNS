<?php
require("../lib/database.php");
  $sql = "
    DELETE 
    FROM comments
    WHERE 
      no = '{$_GET['no']}'
  ";
  $result = mysqli_query($conn, $sql);
  header("Location: ./profile_comments.php?no=".$_GET['dn']);
?>