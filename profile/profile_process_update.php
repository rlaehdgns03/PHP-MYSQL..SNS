<?php
session_start();
require("../lib/database.php");
  $sql = "
  UPDATE topic
    SET
      description = '{$_POST['description']}'
    WHERE 
      no = '{$_POST['no']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: ./profile.php?no='.$_SESSION['no']);
?>