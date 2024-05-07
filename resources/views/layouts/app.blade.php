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
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="{{route('home')}}">길라잡이</a>
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
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">홈</a>
                    </li>
                    <!-- 로그인 상태에 따라 메뉴를 표시 또는 숨김 -->
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/write">글 작성하기</a>
                    </li>
                    <!-- 로그인 상태인 경우 즐겨찾기 메뉴 표시 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            즐겨찾기
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/bookmark">즐겨찾기 1</a></li>
                            <li><a class="dropdown-item" href="/bookmark">즐겨찾기 2</a></li>
                            <li><a class="dropdown-item" href="/bookmark">즐겨찾기 3</a></li>
                        </ul>
                    </li>
                    <!-- 로그인 상태인 경우 로그아웃 메뉴 표시 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal" href="">로그아웃</a>
                    </li>
                    @else
                    <!-- 로그인 상태가 아닌 경우 로그인 메뉴 표시 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal" href="">로그인</a>
                    </li>
                    @endauth
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
                    <a href="{{route('tourism.region', '서울')}}">서울</a>
                </li>
                <li class="banner-list-item">
                    <a href="{{route('tourism.region', '경기')}}">경기</a>
                </li>
                <li class="banner-list-item">
                    <a href="{{route('tourism.region', '강원')}}">강원</a>
                </li>
                <li class="banner-list-item">
                    <a href="{{route('tourism.region', '충북')}}">충북</a>
                </li>
                <li class="banner-list-item">
                    <a href="{{route('tourism.region', '충남')}}">충남</a>
                </li>
            </ul>
        </div>
    </div>

    @yield('content')

    <!-- Login Modal Start -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="login-page">
                    <div class="form">
                        <form id="registerForm" action="{{ route('register') }}" method="POST" class="register-form">
                            @csrf
                            <input type="text" name="id" placeholder="ID" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="text" name="nickname" placeholder="Nickname" />
                            <button type="submit">Create</button>
                            <p class="message">Already registered? <a href="#" id="showLoginForm">Sign In</a></p>
                        </form>
                        <form id="loginForm" action="{{ route('login') }}" method="POST" class="login-form">
                            @csrf
                            <input type="text" name="id" placeholder="ID" />
                            <input type="password" name="password" placeholder="Password" />
                            <button type="submit">Login</button>
                            <p class="message">Not registered? <a href="#" id="showRegisterForm">Create an account</a></p>
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
                    <!-- 로그아웃 버튼에 해당하는 부분 -->
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                    <!-- 닫기 버튼 -->
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

        $(document).ready(function () {
            $('#showRegisterForm').click(function () {
                $('#loginForm').hide();
                $('#registerForm').show();
            });

            $('#showLoginForm').click(function () {
                $('#registerForm').hide();
                $('#loginForm').show();
            });
        });

        $(document).ready(function () {
        // 모달 내의 로그아웃 버튼 클릭 시 폼 제출
            $('#logoutModal').on('click', 'form#logoutForm button[type="submit"]', function () {
                $('#logoutForm').submit();
            });
        });

    </script>
</body>

</html>

<!--Copyright (c) 2023 by Aigars Silkalns (https://codepen.io/colorlib/pen/rxddKy)-->