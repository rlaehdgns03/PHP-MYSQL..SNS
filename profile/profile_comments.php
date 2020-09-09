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
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <!-- My Post -->
    <?php
      $sql = "SELECT topic.no,description,created,user_no,likes,name FROM topic LEFT JOIN user on topic.user_no = user.no";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        if($row['no'] === $_GET['no']){
    ?>
        <div class="card gedf-card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                  <div class="mr-2">
                    <a href="../profile/profile.php?no=<?=$row['user_no']?>">
                      <img class="rounded-circle" width="45" src="https://search.pstatic.net/common/?src=http%3A%2F%2Fkinimage.naver.net%2F20200818_247%2F1597730197036S5pFh_JPEG%2F1597730196729.jpg&type=sc960_832" alt="">
                    </a>
                  </div>
                  <div class="ml-2">
                      <div class="h5 m-0"><?=$row['name']?></div>
                      <?php
                          $diff = time() - strtotime($row['created']);
                          
                          $s = 60; 
                          $h = $s * 60; 
                          $d = $h * 24; 
                          $y = $d * 10; 
                      
                          if ($diff < $s) {
                              $result_t = $diff . '초전';
                          } elseif ($h > $diff && $diff >= $s) {
                              $result_t = round($diff/$s) . '분전';
                          } elseif ($d > $diff && $diff >= $h) {
                              $result_t = round($diff/$h) . '시간전';
                          } elseif ($y > $diff && $diff >= $d) {
                              $result_t = round($diff/$d) . '일전';
                          } else {
                            $result_t = date('Y.m.d.', strtotime($row['created']));
                          }
                        ?>
                        <div class="h7 text-muted"><?=$result_t?></div>
                  </div>
              </div>  
            </div>
          </div>

          <div class="card-body">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                  <div class="form-group">
                    <label class="sr-only" for="message">post</label>
                    <p class="card-text"><?=$row['description']?></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab"></div>
              </div>  
            </div>
            <div class="card-footer">
            <?php 
              $results = mysqli_query($conn, "SELECT * FROM likes WHERE user_no=".$_SESSION['no']." AND description_no=".$row['no']."");
            
              if (mysqli_num_rows($results) === 1 ) { ?>
      
                <a href="./profile_likes_cm.php?likes=liked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart"></i></a>            

              <?php
                }else {
              ?>
        
                <a href="./profile_likes_cm.php?likes=unliked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart-o"></i></a> 

              <?php

                }

              ?>
              <div class="">좋아요 <?=$row['likes']?>개</div><br>
              <form action="./profile_comments_create.php?no=<?=$_GET['no']?>" method="POST">
              <textarea class="form-control" id="message" rows="1" name="comment" placeholder="댓글 달기"></textarea><br>
              <input type="submit" class="btn btn-primary" value="게시"><br><br>
              </form>
              <?php
                $sql = "SELECT topic.no, topic.created, likes, name, comment, comments.user_no AS cun,comments.created, comments.no AS cn FROM topic LEFT JOIN comments ON topic.no = description_no LEFT JOIN user ON comments.user_no = user.no";
                $result_a = mysqli_query($conn, $sql)or die();
                while($row_a = mysqli_fetch_array($result_a)){
                  if($row_a['no'] === $_GET['no']){
              ?> 
              <div style=display:inline class="h5 m-0"><?=$row_a['name']?> </div>
              <div style=display:inline class="h7 m-0"><?=$row_a['comment']?><div><br>
              <?php
                if(isset($row_a['comment'])){
                  if($row_a['cun'] === $_SESSION['no']){
              ?>
              <form action="profile_comments_delete.php?no=<?=$_GET['no']?>" method="post" onsubmit="if(!confirm('삭제하시겠습니까?')){return false;}"> 
                <input type="hidden" name="no" value=<?=$row_a['cn']?>>
                <input type="submit" class="btn btn-primary" value="X">
              </form>
              <br>
              <?php
                    }
                  }
                }
              }
              ?>
            </div>
          </div>
      <?php
          }
        }    
      ?>
    </div>
    </div>
    </div>
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