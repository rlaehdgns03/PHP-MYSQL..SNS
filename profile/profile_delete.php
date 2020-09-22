<?php
session_start();
require("../lib/database.php");
  $sql = "
    DELETE 
    FROM topic
    WHERE 
      no = '{$_POST['no']}'
  ";   
  $result = mysqli_query($conn, $sql);
  header('Location: ./profile.php?no='.$_SESSION['no']);
?>