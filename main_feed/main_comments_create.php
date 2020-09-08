<?php
  session_start();
?>
<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
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
  header("Location: ./main_comments.php?no=".$_GET['no']);
?>