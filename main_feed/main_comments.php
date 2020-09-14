<?php
require("../lib/permission.php");
require("../lib/database.php");
require("../view/top.php");
require("../view/main_nav.php");
?>

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
    <?php
      require("../view/post_header.php");
    ?>
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
      
      if ($_GET['likes'] === "liked") { ?>
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