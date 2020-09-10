<?php
require("../view/top.php");
?>
<body class="login-page">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="card-wrapper">
        <div class="card fat">
          <div class="card-body">
            <h4 class="card-title text-center">회원가입</h4>
              <form action="user_create.php" method="POST">

                <div class="form-group">
                  <label for="name">이름</label>
                  <input id="name" type="text" class="form-control" name="name" placeholder="이름을 입력하세요">
                </div>

                <div class="form-group">
                    <label for="id">아이디</label>
                    <input id="id" type="text" class="form-control" name="id" placeholder="아이디를 입력하세요">
                </div>

                <div class="form-group">
                    <label for="password">비밀번호</label>
                    <input id="password" type="password" class="form-control" name="password" data-eye placeholder="비밀번호를 입력하세요">
                </div>

                <div class="form-group">
                    <label for="password">비밀번호 확인</label>
                    <input id="password" type="password" class="form-control" name="repassword" data-eye placeholder="비밀번호를 다시 입력하세요">
                </div>

                <div class="form-group m-0">
                    <input type="submit" class="btn btn-primary btn-block" value="회원가입">
                </div>

                <div class="mt-4 text-center">
                    <p class="sign-up">이미 회원이신가요?</p>
                    <a href="./login.php">로그인하기</a>
                </div>
              </form>
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