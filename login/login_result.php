<?php
  session_start();
?>
<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");

  if($_POST["id"] == "" || $_POST["password"] == ""){ 

    echo '<script>alert("아이디, 비밀번호를 입력해주세요."); location.href="./login.php"; </script>'; 

  } else { 

    $id = $_POST['id']; 
    $pwd = $_POST['password']; 
    $sql = mysqli_query($conn,"select * from user where id='".$id."'") or die ("알수없는 오류"); 
    $member = $sql->fetch_array(); 
    $hash_pwd = $member['password']; 

      if(password_verify($pwd, $hash_pwd)) { 

        $_SESSION['id'] = $member["id"]; 
        $_SESSION['name'] = $member["name"]; 
        $_SESSION['is_login'] = true;
        $_SESSION['no'] = $member["no"];
        echo "<script>location.href='../main_feed/main_feed.php';</script>"; 

      } else{ 

        echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>"; 

      } 
    }
?>