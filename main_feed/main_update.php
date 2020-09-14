<?php
require("../lib/permission.php");
require("../lib/database.php");
require("../view/top.php");
require("../view/main_nav.php");
?>

  <!-- Page Section -->
  <div class="container-fluid gedf-wrapper">
    <div class="row">

    <!-- Profile Section -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <img class="rounded-circle img-responsive center-block"  width="200" height="200"  src="https://search.pstatic.net/common/?src=http%3A%2F%2Fkinimage.naver.net%2F20200818_247%2F1597730197036S5pFh_JPEG%2F1597730196729.jpg&type=sc960_832" alt="user-image">
          <div class="h5 text-center mt-4"><?=$_SESSION['name']?></div>         
        </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">
              
            </li>
          </ul>
      </div>
    </div>
    <!-- //profile section -->

    <div class="col-md-9 gedf-main">

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
          $site="main_delete.php";
          require("../view/post_header.php");
          require("../view/delete_btn.php");
          ?>
        </div>
      </div>

      <form action="main_process_update.php" method="post">
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
<?php
require("../view/bottom.php");
?>