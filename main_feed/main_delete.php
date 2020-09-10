<?php
require("../lib/database.php");
  $sql = "
    DELETE 
    FROM topic
    WHERE 
      no = '{$_POST['no']}'
  ";
  $result = mysqli_query($conn, $sql);
  header('Location: ./main_feed.php')
?>