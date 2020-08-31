<?php
session_start();
if(!isset($_SESSION['is_login'])){
  
  echo "<script>alert('로그인이 필요합니다.'); location.href='../login/login.php';</script>";

}
?>
<?php
  $conn = mysqli_connect(
    "localhost", 
    "root", 
    "adsdads1", 
    "post");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <!-- style -->
  <link rel="stylesheet" href="../css/style.css">
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-dark bg-primary">
    <a href="../main_feed/main_feed.php" class="navbar-brand">SNS</a>
    <form class="form-inline">
      <div class="input-group">
        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-light" type="button" id="button-addon2">
              <i class="fa fa-search"></i>
            </button>
          </div>
      </div>
    </form>
  </nav>
  <!-- Navigation -->

  <!-- Page Section -->
  <div class="container-fluid gedf-wrapper">
    <div class="row">

    <!-- Profile Section -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <img class="rounded-circle img-responsive center-block"  width="200" height="200"  src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/92250598_1063915177321734_748581756498782108_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=106&_nc_ohc=JN52q2w3T64AX_Q4qvV&oh=8035593b9ff284f4ccdc0bef999fc345&oe=5F64C329" alt="user-image">
          <div class="h5 text-center mt-4"><?=$_SESSION['name']?></div>     
        </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">
              <div class="h6 text-muted">friends</div>
              <div class="h5">200</div>
            </li>
          </ul>
      </div>
    </div>
    <!-- //profile section -->
      
    <!-- Post Upload Section -->
    <div class="col-md-9 gedf-main">
      <div class="card gedf-card">
        <div class="card-header">
        </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
              </div>
              <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
            </div>
          </div>
          <div class="btn-toolbar justify-content-between">
          </div>
        </div>
      </div>
    <!-- //Post Upload Section -->

    <!-- My Post -->
    <?php
      $sql = "SELECT * FROM topic";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        if($row['no'] === $_GET['no']){
    ?>
        <div class="card gedf-card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/92250598_1063915177321734_748581756498782108_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=106&_nc_ohc=JN52q2w3T64AX_Q4qvV&oh=8035593b9ff284f4ccdc0bef999fc345&oe=5F64C329" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0"><?=$_SESSION['name']?></div>
                        <div class="h7 text-muted"><?=$row['created']?></div>
                    </div>
                </div>
                <div class="btn-group">
                  <form action="profile_delete.php" method="post" onsubmit="if(!confirm('삭제하시겠습니까?')){return false;}"> 
                    <input type="hidden" name="no" value=<?=$_GET['no']?>>
                    <input type="submit" class="btn btn-primary" value="삭제">
                  </form>
                </div>
            </div>
          </div>
          <form action="profile_process_update.php" method="post">
          <input type="hidden" name="no" value=<?=$_GET['no']?>>
          <div class="card-body">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                  <div class="form-group">
                    <label class="sr-only" for="message">post</label>
                    <textarea class="form-control" id="message" rows="3" name="description"><?=$row['description']?></textarea>
                  </div>
                </div>
                <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="업로드">
          </div>
          </form>
          <div class="card-footer">
          </div>
      </div>
      <?php
          }
        }    
      ?>
        
    <!-- //My Post -->
            </div>
        </div>
    </div>
  <!-- //Page Section -->  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>