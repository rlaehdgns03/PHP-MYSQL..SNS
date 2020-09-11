<?php
require("../lib/permission.php");
require("../lib/database.php");
require("../view/top.php");
require("../view/nav.php");
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
              <div class="h6 text-muted">friends</div>
              <div class="h5">200</div>
            </li>
          </ul>
      </div>
    </div>
    <!-- //profile section -->
      
    <div class="col-md-9 gedf-main">

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
                        <img class="rounded-circle" width="45" src="https://search.pstatic.net/common/?src=http%3A%2F%2Fkinimage.naver.net%2F20200818_247%2F1597730197036S5pFh_JPEG%2F1597730196729.jpg&type=sc960_832" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0"><?=$_SESSION['name']?></div>
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
<?php
require("../view/bottom.php");
?>