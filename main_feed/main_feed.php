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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Feed</title>
  <!-- style -->
  <link rel="stylesheet" href="../css/style.css">
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
      <a class="navbar-brand" href="main_feed.php">SNS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item">
              <a class="user-image" href="../profile/profile.php">
              <img src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/92250598_1063915177321734_748581756498782108_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=106&_nc_ohc=JN52q2w3T64AX_Q4qvV&oh=8035593b9ff284f4ccdc0bef999fc345&oe=5F64C329" alt="user-img" class="rounded-circle mt-1 ml-3 mr-2" width="30" height="30">
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/logout.php">Logout</a>
          </li>
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- //Navigation -->

  <!-- Page Section -->
  <div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3"></div>
        <!-- Post Section -->
        <div class="col-md-6 gedf-main">
            <!-- Post Upload Section -->
            <div class="card gedf-card">             
              <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">
                            게시물 작성    
                          </a>
                      </li>
                  </ul>
              </div>
              <form action="main_create.php" method="post">
              <input type="hidden" name="no" value=<?=$_SESSION['no']?>>
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                      <div class="form-group">
                        <label class="sr-only" for="message">post</label>                                
                        <textarea class="form-control" id="message" rows="3" name="description" placeholder="게시물을 작성해주세요."></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                            <input type="submit" class="btn btn-primary" value="업로드">
                        </div>
                    </div>
              </form>
            </div>
          </div>
            <!-- //Post Upload Section -->

        <!-- Post -->
        <?php
          $sql = "SELECT topic.no, description, created, user_no, name, likes FROM topic LEFT JOIN user ON topic.user_no = user.no ORDER BY created DESC";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
        ?> 
        <div class="card gedf-card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/92250598_1063915177321734_748581756498782108_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=106&_nc_ohc=JN52q2w3T64AX_Q4qvV&oh=8035593b9ff284f4ccdc0bef999fc345&oe=5F64C329" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0"><?=$row['name']?></div>
                        <div class="h7 text-muted"><?=$row['created']?></div>
                    </div>
                </div>
                <div class="btn-group">
                  <?php

                    if($row['name'] === $_SESSION['name']){

                  ?>
                  <a href="main_update.php?no=<?=$row['no']?>" class="btn btn-primary">수정</a> 
                  <?php
                    }
                  ?>
                </div>
            </div>
          </div>

          <div class="card-body">
              <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>작성 후 시간</div>
                <p class="card-text"><?=$row['description']?></p>
          </div>

          <div class="card-footer">
          
          <?php 
					$results = mysqli_query($conn, "SELECT * FROM likes WHERE user_no=".$_SESSION['no']." AND description_no=".$row['no']."");
        
					if (mysqli_num_rows($results) === 1 ) { ?>
	
            <a href="./main_likes.php?likes=liked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart"></i></a>
            <a href="./main_comments.php?no=<?=$row['no']?>" class="card-link"><i class="fa fa-comment-o"></i></a>

          <?php
            }else {
          ?>
    
            <a href="./main_likes.php?likes=unliked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart-o"></i></a> 
            <a href="./main_comments.php?no=<?=$row['no']?>" class="card-link"><i class="fa fa-comment-o"></i></a>

          <?php
            }
          ?>
          
					<div class="">좋아요 <?=$row['likes']?>개</div>
            
          </div>
        </div>
        <?php
          }
        ?>
        <!-- //Post-->
        </div>
        <!-- //Post Section -->
      </div>
    </div>
  <!-- //Page Section -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>