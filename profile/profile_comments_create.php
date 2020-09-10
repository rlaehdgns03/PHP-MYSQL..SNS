<?php
  session_start();
?>
<?php
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
  header("Location: ./profile_comments.php?no=".$_GET['no']);
?>