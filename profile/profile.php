<?php
require("../lib/permission.php");
require("../lib/database.php");
require("../view/top.php");
?>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-dark bg-primary">
    <a href="../main_feed/main_feed.php" class="navbar-brand">SNS</a>
    <form class="form-inline">
        <ul class="navbar-nav mr-2">
          <li class="nav-item">
            <a class="nav-link" href="../login/logout.php">Logout</a>
          </li>
        </ul>
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
    <?php
      $sql = "SELECT topic.no, description, created, name, likes FROM topic LEFT JOIN user ON topic.user_no = user.no WHERE user.no = ".$_GET['no']." ORDER BY created DESC";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result)
    ?>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <img class="rounded-circle img-responsive center-block"  width="200" height="200"  src="https://search.pstatic.net/common/?src=http%3A%2F%2Fkinimage.naver.net%2F20200818_247%2F1597730197036S5pFh_JPEG%2F1597730196729.jpg&type=sc960_832" alt="user-image">
          <div class="h5 text-center mt-4"><?=$row['name']?></div>       
        </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">
              
            </li>
          </ul>
      </div>
    </div>
    <!-- //profile section -->
      
    <!-- Post Upload Section -->
    <div class="col-md-9 gedf-main">
    <?php

    if($row['name'] === $_SESSION['name']){

    ?>
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
        <form action="profile_create.php" method='post'>
        <input type="hidden" name="no" value=<?=$_SESSION['no']?>>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <div class="form-group">
                  <label class="sr-only" for="message">post</label>
                  <textarea class="form-control" id="message" rows="3" name="description" placeholder="게시물을 작성해주세요."></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
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
      <?php
        }
      ?>
    <!-- //Post Upload Section -->

    <!-- My Post -->
    <?php
      $sql = "SELECT topic.no, description, created, user_no,name, likes FROM topic LEFT JOIN user ON topic.user_no = user.no WHERE user.no = ".$_GET['no']." ORDER BY created DESC";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
    ?>
          <div class="card gedf-card">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
                <?php
                  require("../view/post_header.php");
                ?>
                <div class="btn-group">
                <?php

                if($row['name'] === $_SESSION['name']){

                ?>
                <a href="profile_update.php?no=<?=$row['no']?>" class="btn btn-primary">수정</a> 
                <?php
                }
                ?>
                </div>
              </div>
            </div>

            <div class="card-body">
              <p class="card-text"><?=$row['description']?></p>
            </div>

            <div class="card-footer">
            <?php 
              $results = mysqli_query($conn, "SELECT * FROM likes WHERE user_no=".$_SESSION['no']." AND description_no=".$row['no']."");
            
              if (mysqli_num_rows($results) === 1 ) { ?>
      
                <a href="./profile_likes.php?likes=liked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart"></i></a>
                <a href="./profile_comments.php?likes=liked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-comment-o"></i></a>

              <?php
                }else {
              ?>
        
                <a href="./profile_likes.php?likes=unliked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-heart-o"></i></a> 
                <a href="./profile_comments.php?likes=unliked&no=<?=$row['no']?>" class="card-link"><i class="fa fa-comment-o"></i></a>

              <?php
                }

              ?>
              
              <div class="">좋아요 <?=$row['likes']?>개</div>
                
            </div>
          </div>
          <?php
            }
          ?>
        
    <!-- //My Post -->
            </div>
        </div>
    </div>
  <!-- //Page Section -->  
<?php
require("../view/bottom.php");
?>