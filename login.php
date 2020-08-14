<?php
  if($_POST['user_id'] == 'rlaehdgns03'){
    if($_POST['user_pw'] == 'adsdads1'){
      header('Location: /main_feed.php');
    }else{
      header('Location: /login_form.html');
    }
  }else{
    header('Location: /login_form.html');
  }
?>