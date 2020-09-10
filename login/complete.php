<?php
require("../view/top.php");
?>
<body class="login-page">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="card-wrapper">
        <div class="card fat">
          <div class="card-body">
            <h4 class="card-title text-center mt-5 mb-5">
              가입이 정상적으로<br>
              완료되었습니다.
            </h4>

            <div class="form-group m-0">
              <button type="submit" onclick="location.href='login.php'" class="btn btn-primary btn-block">
                로그인하기
              </button>
            </div>
          </div>
        </div>
        <div class="footer">
          Copyright &copy; 2020 &mdash; HCIT 
        </div>
      </div>
    </div>
  </div>
<?php
require("../view/bottom.php");
?>