<?php
require("../lib/database.php");
  $sql = "
    DELETE 
    FROM comments
    WHERE 
      no = '{$_GET['no']}'
  ";
  $result = mysqli_query($conn, $sql); 
  header("Location: ./main_comments.php?no=".$_GET['dn']);
?>