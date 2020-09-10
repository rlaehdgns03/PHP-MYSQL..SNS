<?php
require("../lib/session.php");
require("../lib/database.php");
require("../view/top.php");
?>
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
                    <a href="../profile/profile.php?no=<?=$row['user_no']?>">
                      <div class="h5 m-0"><?=$row['name']?></div>
                    </a>  
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
      
                <a href="./main_likes_cm.php?likes=liked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart"></i></a>            

              <?php
                }else {
              ?>
        
                <a href="./main_likes_cm.php?likes=unliked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart-o"></i></a> 

              <?php

                }

              ?>
              <div class="">좋아요 <?=$row['likes']?>개</div><br>
              <form action="./main_comments_create.php?no=<?=$_GET['no']?>" method="POST">
              <textarea class="form-control" id="message" rows="1" name="comment" placeholder="댓글 달기"></textarea><br>
              <input type="submit" class="btn btn-primary" value="게시"><br><br>
              </form>
              <?php
                $sql = "SELECT topic.no, topic.created, likes, name, comment, comments.description_no AS dn, comments.user_no AS cun, comments.no AS cn FROM topic LEFT JOIN comments ON topic.no = description_no LEFT JOIN user ON comments.user_no = user.no";
                $result_a = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                while($row_a = mysqli_fetch_array($result_a)){
                  if($row_a['no'] === $_GET['no']){
              ?>
              <a href="../profile/profile.php?no=<?=$row_a['cun']?>">
                <div style=display:inline class="h5 m-0"><?=$row_a['name']?> </div>
              </a>
              <div style=display:inline class="h7 m-0"><?=$row_a['comment']?>
              <?php
                if(isset($row_a['comment'])){
                  if($row_a['cun'] === $_SESSION['no']){
              ?>
              <a href="main_comments_delete.php?no=<?=$row_a['cn']?>&dn=<?=$row_a['dn']?>" class="ml-3" onclick="return confirm('삭제하시겠습니까?')">X</a>
              <?php
                    }
                }  
              ?>
              <br><br>
              </div>
              <?php
                  
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
<?php
require("../view/bottom.php");
?>