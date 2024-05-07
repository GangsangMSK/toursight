@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
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
                @forelse ($blogs as $blog)
                    <li class="local-list-item" onclick="location.href='detail.html?no={{ $blog->id }}'">
                        <img src="../images/carousel3000.jpg">
                        <div class="local-list-item-right">
                            <div class="d-flex justify-content-between">
                                <h5>{{ $blog->title }}</h5>
                                <a href="" class="btn-bookmark {{ $blog->is_bookmarked ? 'is-bookmark' : '' }}"><span>{{ $blog->is_bookmarked ? '★' : '☆' }}</span></a>
                            </div>
                            <span>Write Date: {{ $blog->date }}</span><br/>
                            <span>Address: {{ $blog->address }}</span><br/>
                            <p>{{ $blog->content }}</p>
                        </div>
                    </li>
                @empty
                    <li class="local-list-item">
                        <p>블로그 데이터가 없습니다.</p>
                    </li>
                @endforelse
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