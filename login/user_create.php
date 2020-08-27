<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
  $sql = "INSERT INTO user
  (name, uID, uPW)
  VALUES(
    '{$_POST['name']}',
    '{$_POST['uID']}',
    '{$_POST['uPW']}'
  )
";
  $result = mysqli_query($conn, $sql);
  header('Location: /complete.php');
?>