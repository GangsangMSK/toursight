<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
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
                    <a href="local.html">서울</a>
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


    <!-- Review Start -->
    <div class="navbar">
        <div class="container-md content">
            <h3>BEST 리뷰</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="review">
                        <h3>Title</h3>
                        <span>★★★★★</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur sunt quas accusamus eos temporibus minima et vel quaerat excepturi officiis possimus magni dignissimos rem, a laudantium cumque amet nostrum at!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review">
                        <h3>Title</h3>
                        <span>★★★★★</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur sunt quas accusamus eos temporibus minima et vel quaerat excepturi officiis possimus magni dignissimos rem, a laudantium cumque amet nostrum at!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Review End -->

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