<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<body class="login-page">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title text-center">회원가입</h4>
                                <form action="complete.html" method="POST">

                                    <div class="form-group">
                                        <label for="name">이름</label>
                                        <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="이름을 입력하세요">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="id">아이디</label>
                                        <input id="id" type="text" class="form-control" name="user_id" required placeholder="아이디를 입력하세요">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="password">비밀번호</label>
                                        <input id="password" type="password" class="form-control" name="user_psw" required data-eye placeholder="비밀번호를 입력하세요">
                                    </div>
    
                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                            <label for="agree" class="custom-control-label">개인 정보 수집 및 이용에 동의합니다.<a href="#" class="agree">이용약관</a></label>
                                        </div>
                                    </div>
    
                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            회원가입
                                        </button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="sign-up">이미 회원이신가요?</p>
                                        <a href="login.html">로그인하기</a>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>