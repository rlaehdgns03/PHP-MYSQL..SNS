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
      require("../lib/created_time.php");
    ?>
    <div class="h7 text-muted"><?=$result_t?></div>
  </div>

</div>  