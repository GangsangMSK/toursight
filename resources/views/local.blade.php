<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="#">길라잡이</a>
            <!-- mobile or min-width < 720px -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Item Start -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">홈</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal" href="">로그인</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>

                    <!-- 로그인 해야만 표시됨.-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            즐겨찾기
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">즐겨찾기 1</a></li>
                            <li><a class="dropdown-item" href="#">즐겨찾기 2</a></li>
                            <li><a class="dropdown-item" href="#">즐겨찾기 3</a></li>
                        </ul>
                    </li>
                    <!-- 로그인 해야만 표시됨.-->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal" href="">로그아웃</a>
                    </li>
                </ul>
            </div>
            <!-- Navbar Item End -->
        </div>
    </nav>
    <!-- Navbar End-->
    <div class="nav navbar banner">
        <div class="container-md ">
            <ul class="banner-list">
                <li class="banner-list-item">
                    <a href="">서울</a>
                </li>
                <li class="banner-list-item">
                    <a href="">경기</a>
                </li>
                <li class="banner-list-item">
                    <a href="">강원</a>
                </li>
                <li class="banner-list-item">
                    <a href="">충북</a>
                </li>
                <li class="banner-list-item">
                    <a href="">충남</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Choose Local Button -->
    <div class="navbar">
        <div class="container-md local-button-content">
            <h3>세부지역 선택</h3>
            <div class="local-buttons row">
                <button class="btn btn-secondary">Item 1</button>
                <button class="btn btn-secondary">Item 2</button>
                <button class="btn btn-secondary">Item 3</button>
                <button class="btn btn-secondary">Item 4</button>
                <button class="btn btn-secondary">Item 5</button>
                <button class="btn btn-secondary">Item 6</button>
                <button class="btn btn-secondary">Item 7</button>
                <button class="btn btn-secondary">Item 8</button>
                <button class="btn btn-secondary">Item 9</button>
            </div>
        </div>
    </div>

    <!-- Local List -->
    <div class="navbar">
        <div class="container-md local-list-content">
            <ul>
                <li class="local-list-item" onclick="location.href='detail.html?no=1'">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark is-bookmark"><span>★</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark is-bookmark"><span>★</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark"><span>☆</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark is-bookmark"><span>★</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark"><span>☆</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark"><span>☆</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
                <li class="local-list-item">
                    <img src="../images/carousel3000.jpg">
                    <div class="local-list-item-right">
                        <div class="d-flex justify-content-between">
                            <h5>Title</h5>
                            <a href="" class="btn-bookmark"><span>☆</span></a>
                        </div>
                        <span>Write Date: 2024-04-01</span><br/>
                        <span>Address: </span><br/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a quas ipsum laboriosam, reprehenderit aperiam vitae eveniet rem! Animi assumenda fuga illo accusamus reprehenderit iste nam sapiente deserunt rerum iure!</p>
                    </div>
                </li>
            </ul>
            <div class="paging">
                <button class="btn btn-primary">&lt&lt</button>
                <button class="btn btn-primary">&lt</button>
                <button class="btn btn-primary">1</button>
                <button class="btn btn-primary">2</button>
                <button class="btn btn-primary">3</button>
                <button class="btn btn-primary">4</button>
                <button class="btn btn-primary">5</button>
                <button class="btn btn-primary">&gt</button>
                <button class="btn btn-primary">&gt&gt</button>
            </div>
        </div>
    </div>

    <!-- Login Modal Start -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="login-page">
                    <div class="form">
                        <form class="register-form">
                            <input type="text" placeholder="name" />
                            <input type="password" placeholder="password" />
                            <input type="text" placeholder="email address" />
                            <button>create</button>
                            <p class="message">Already registered? <a href="#">Sign In</a></p>
                        </form>
                        <form class="login-form">
                            <input type="text" placeholder="username" />
                            <input type="password" placeholder="password" />
                            <button>login</button>
                            <p class="message">Not registered? <a href="#">Create an account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Login Modal Start -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">로그아웃</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>정말 로그아웃 하시겠습니까?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Logout</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Footer Start -->
    <div class="container-md">
        <p>made by LeJus</p>
    </div>
    <!-- Footer End -->

    <script>
        $('.message a').click(function () {
            $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
        });
    </script>
</body>

</html>

<!--Copyright (c) 2023 by Aigars Silkalns (https://codepen.io/colorlib/pen/rxddKy)-->