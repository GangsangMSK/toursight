@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Local List -->
    <div class="navbar">
        <div class="container-md local-list-content content">
            <h3>{Username}의 즐겨찾기</h3>
            <ul>
                <li class="local-list-item" onclick="location.href='detail.html?no=1'">
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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
                    <img src="./images/carousel3000.jpg">
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

@endsection