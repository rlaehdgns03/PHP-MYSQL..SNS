<?php
require("../lib/database.php");
  $sql = "
  UPDATE topic
    SET
      description = '{$_POST['description']}'
    WHERE 
      no = '{$_POST['no']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: ./main_feed.php');
?>