<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Feed</title>
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
      <a class="navbar-brand" href="main_feed.html">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item">
              <a class="user-image" href="profile.html">
              <img src="https://www.gotit.co.kr/wp-content/uploads/2019/03/origin_%EC%88%98%EC%A7%80%EB%AA%85%EB%B6%88%ED%97%88%EC%A0%84%EC%B2%AD%EC%88%9C%EC%97%AC%EC%8B%A0.jpg" alt="user-img" class="rounded-circle mt-1 ml-3 mr-2" width="30" height="30">
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- //Navigation -->

  <!-- Page Section -->
  <div class="container-fluid gedf-wrapper">
    <div class="row">

        <div class="col-md-3"></div>
        <!-- Post Section -->
        <div class="col-md-6 gedf-main">
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
                            <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> 전체공개</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-users"></i> 친구만</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> 나에게만</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- //Post Upload Section -->

        <!-- Post1 -->
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" height="45" src="https://www.gotit.co.kr/wp-content/uploads/2019/03/origin_%EC%88%98%EC%A7%80%EB%AA%85%EB%B6%88%ED%97%88%EC%A0%84%EC%B2%AD%EC%88%9C%EC%97%AC%EC%8B%A0.jpg" alt="user-image">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">user_id</div>
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
                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>  10 min ago</div>
                    <a class="card-link" href="#">
                        <h5 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, recusandae?</h5>
                    </a>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur expedita id nesciunt aperiam ipsa. Expedita, ut! Laboriosam, sint! Et, optio.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                </div>
            </div>
        <!-- //Post1-->

        <!-- Post2 -->
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">이철수</div>
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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, recusandae?
                        </h5>
                    </a>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur expedita id nesciunt aperiam ipsa. Expedita, ut! Laboriosam, sint! Et, optio.
                    </p>
                    <div>
                        <span class="badge badge-primary">#피씨방</span>
                        <span class="badge badge-primary">#부산</span>
                        <span class="badge badge-primary">#배그</span>
                        <span class="badge badge-primary">#카트</span>
                        <span class="badge badge-primary">#핫도그</span>
                        <span class="badge badge-primary">#라면</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                </div>
            </div>
        <!-- //Post2 -->

        <!-- Post3 -->
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">이철수</div>
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
                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>  40 min ago</div>
                    <a class="card-link" href="#">
                        <h5 class="card-title">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus?
                        </h5>
                    </a>
                    <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aperiam repellendus unde assumenda facilis laborum sapiente voluptatibus sint, ex consequuntur.
                        <a href="https://youtube.com" target="_blank">https://youtube.com</a>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> 좋아요</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> 댓글</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> 공유</a>
                </div>
            </div>
        <!-- //Post3 -->
        </div>
    <!-- //Post Section -->

    <!-- banner Section -->
        <div class="col-md-3">
          <div class="card gedf-card">
              <div class="card-body">
                  <h5 class="card-title">lorem</h5>
                  <h6 class="card-subtitle mb-2 text-muted">lorem</h6>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deleniti earum nesciunt voluptatum unde ratione, ex voluptatibus a nulla enim?
                  </p>
                  <a href="#" class="card-link">link</a>
                  <a href="#" class="card-link">other link</a>
              </div>
          </div>
          <div class="card gedf-card">
                <div class="card-body">
                    <h5 class="card-title">lorem</h5>
                    <h6 class="card-subtitle mb-2 text-muted">lorem</h6>
                    <p class="card-text">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem obcaecati quaerat explicabo illo ut, eligendi exercitationem quos? Ducimus aut rerum officiis inventore. Voluptates quidem quae tempore perferendis eveniet fuga laudantium!
                    </p>
                    <a href="#" class="card-link">link</a>
                    <a href="#" class="card-link">other link</a>
                </div>
            </div>
        </div>
    <!-- //banner Section -->
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>