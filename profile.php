<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-primary">
        <a href="main_feed.html" class="navbar-brand">Logo</a>
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

            <!-- Profile Section -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="rounded-circle img-responsive center-block"  width="200" height="200"  src="https://www.gotit.co.kr/wp-content/uploads/2019/03/origin_%EC%88%98%EC%A7%80%EB%AA%85%EB%B6%88%ED%97%88%EC%A0%84%EC%B2%AD%EC%88%9C%EC%97%AC%EC%8B%A0.jpg" alt="user-image">
                        <div class="h5 text-center mt-4">@user_id</div>
                        <div class="h7 text-muted mt-4">name: 김영희</div>
                        <div class="h7 text-muted mt-2">email: xxxxxxx.gmail.com</div>
                        <div class="h7 mt-3">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                            etc.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <div class="h6 text-muted">friends</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">뭐 세부사항 적는 곳...?</li>
                    </ul>
                </div>
            </div>
            <!-- //profile section -->

            <div class="col-md-9 gedf-main">
            <!-- Post Upload Section -->
                <div class="card gedf-card">
                    <div class="card-header">
                        <form action="main_feed.html">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">
                                    게시물 작성    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">
                                    사진
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="게시물을 작성해주세요."></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">업로드할 사진을 선택해 주세요.</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">올리기</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> 전체공개</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i>     친구만</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> 나에게만</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!-- //Post Upload Section -->

            <!-- My Post1 -->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@user_id</div>
                                    <div class="h7 text-muted">여기에는 장소나 뭐.. 아무거나 추가정보(없어도 o)</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">구성</div>
                                        <a class="dropdown-item" href="#">저장</a>
                                        <a class="dropdown-item" href="#">숨기기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">lorem</h5>
                        </a>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum totam cupiditate dolore doloribus tempore voluptatibus vel perspiciatis! Consequuntur, cupiditate debitis hic beatae accusamus corporis aspernatur, veritatis pariatur atque modi eos!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                    </div>
                </div>
            <!-- //My Post1 -->

            <!-- My Post2 -->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@user_id</div>
                                    <div class="h7 text-muted">여기에는 장소나 뭐.. 아무거나 추가정보(없어도 o)</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">구성</div>
                                        <a class="dropdown-item" href="#">저장</a>
                                        <a class="dropdown-item" href="#">숨기기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> 
                                lorem
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis aliquam consectetur voluptas ea veniam perspiciatis suscipit ipsam quam doloribus? Reiciendis.
                        </p>
                        <div>
                            <span class="badge badge-primary">#JavaScript</span>
                            <span class="badge badge-primary">#Android</span>
                            <span class="badge badge-primary">#PHP</span>
                            <span class="badge badge-primary">#Node.js</span>
                            <span class="badge badge-primary">#Ruby</span>
                            <span class="badge badge-primary">#Python</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                    </div>
                </div>
            <!-- My Post2 -->

            <!-- My Post3 -->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@user_id</div>
                                    <div class="h7 text-muted">여기에는 장소나 뭐.. 아무거나 추가정보(없어도 o)</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">구성</div>
                                        <a class="dropdown-item" href="#">저장</a>
                                        <a class="dropdown-item" href="#">숨기기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">
                                lorem
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint animi voluptatibus perspiciatis dolor voluptates obcaecati.
                            <a href="https://youtube.com" target="_blank">https://youtube.com</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                    </div>
                </div>
            <!-- //My Post3 -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>