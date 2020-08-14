<?php
  file_put_contents('data/'.$_POST['description']);
  header('Location: /main_feed.php');
?>