<?php
  session_start();
?>
<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");

  if($_POST["id"] == "" || $_POST["password"] == "" || $_POST["repassword"] == "" || $_POST['name'] == ""){ 

    echo '<script> location.href="./sign_up.php"; </script>'; 

  }else {

    if($_POST['password']!=$_POST['repassword']){ 

    echo '<script> alert("패스워드가 일치하지 않습니다."); history.back(); </script>'; 

    }else { 

      $sql = mysqli_query($conn, "SELECT EXISTS (SELECT * from user WHERE id='".$_POST['id']."') as success"); 
      $useridarray = $sql->fetch_array(); 

      if($useridarray['success']==true) { 

        echo ("<script>alert('중복된 아이디입니다!'); history.back();</script>"); 

      }else { 

        $id = $_POST['id']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $name = $_POST['name']; 

        $adduser = "INSERT INTO user (id, password, name) VALUES('".$id."', '".$password."', '".$name."')";
        $result = mysqli_query($conn, $adduser) or die("알수없는 오류".mysqli_error($conn));
        echo ("<script>location.href='./complete.php';</script>"); 

        } 
      } 
    }
?>