@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Carousel Start -->

<div class="container-md">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Carousel End -->

    <!-- Top4 Start -->
    <div class="navbar top4">
        <div class="container-md content">
            <h3>인기 있는 여행지 TOP 4</h3>
            <div class="row card-container">
                <a class="content-card" href="./detail.html">
                    <h6>title</h6>
                    <div class="box">
                        <img class="thumbnail" src="../images/carousel1.jpg">
                    </div>
                    <p>description</p>
                    <span class="content-score">★★★★☆ <span><i class="fas fa-comments"></i> 80</span></span>
                </a>
                <a class="content-card" href="./detail.html">
                    <h6>title</h6>
                    <div class="box">
                        <img class="thumbnail" src="{{ asset('images/carousel1000.jpg') }}">
                    </div>
                    <p>description</p>
                    <span class="content-score">★★★★☆ <span><i class="fas fa-comments"></i> 80</span></span>
                </a>
                <a class="content-card" href="./detail.html">
                    <h6>title</h6>
                    <div class="box">
                        <img class="thumbnail" src="{{ asset('images/carousel2.jpg') }}">
                    </div>
                    <p>description</p>
                    <span class="content-score">★★★★☆ <span><i class="fas fa-comments"></i> 80</span></span>
                </a>
                <a class="content-card" href="./detail.html">
                    <h6>title</h6>
                    <div class="box">
                        <img class="thumbnail" src="{{ asset('images/carousel3.jpg') }}">
                    </div>
                    <p>description</p>
                    <span class="content-score">★★★★☆ <span><i class="fas fa-comments"></i> 80</span></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Top4 End-->

    <!-- Circle Start -->
    <div class="navbar">
        <div class="circle-container container-md">
            <h3 class="circle-header">추천 여행지</h3>
            <div class="circle-content row">
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
                <div class="circle">
                    <h4>도시</h4>
                    <span>지역</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Circle End-->

    <!-- Example Tour Guide-->
    <div class="navbar example">
        <div class="content container-md ">
            <h3>BEST 게시글</h3>
            <div class="row">
                <div class="col-md-6">
                    <div id="example" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#example"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#example"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 example-right">
                    <h3>Title</h3>
                    <span>2024-04-01</span><br/>
                    <span>Local Name</span><br/>
                    <br/>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias, in, atque vitae
                        provident ratione, ex nihil repellat similique praesentium suscipit autem quam officiis numquam
                        natus velit iusto? Dolor!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias, in, atque vitae
                        provident ratione, ex nihil repellat similique praesentium suscipit autem quam officiis numquam
                        natus velit iusto? Dolor!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias, in, atque vitae
                        provident ratione, ex nihil repellat similique praesentium suscipit autem quam officiis numquam
                        natus velit iusto? Dolor!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias, in, atque vitae
                        provident ratione, ex nihil repellat similique praesentium suscipit autem quam officiis numquam
                        natus velit iusto? Dolor!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sequi molestias, in, atque vitae
                        provident ratione, ex nihil repellat similique praesentium suscipit autem quam officiis numquam
                        natus velit iusto? Dolor!</p>
                </div>
            </div>
        </div>
        <div class="container-md">
            <div id="map" style="width:100%;height:400px;"></div>
            <script type="text/javascript"
                src="//dapi.kakao.com/v2/maps/sdk.js?appkey=7ae29754d4eb6530c2112120581dbaef"></script>
            <script>
                var container = document.getElementById('map');
                var options = {
                    center: new kakao.maps.LatLng(33.450701, 126.460557),
                    level: 3
                };

                var map = new kakao.maps.Map(container, options);
                map.setZoomable(false);
                map.setDraggable(false);

                var marker = new kakao.maps.Marker({
                    position: new kakao.maps.LatLng(33.450701, 126.460557)
                });
                marker.setMap(map);

                var iwContent = '<div style="padding:5px;">Hello World! <br><a href="https://map.kakao.com/link/map/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">큰지도보기</a> <a href="https://map.kakao.com/link/to/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                    iwPosition = new kakao.maps.LatLng(33.450701, 126.460557); //인포윈도우 표시 위치입니다

                // 인포윈도우를 생성합니다
                var infowindow = new kakao.maps.InfoWindow({
                    position: iwPosition,
                    content: iwContent
                });

                // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
                infowindow.open(map, marker); 
            </script>
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
@endsection