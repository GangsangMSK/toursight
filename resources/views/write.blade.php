@extends('layouts.app')

@section('title', 'Welcome')

@section('content')


    <!-- File Append Start -->
    <div class="navbar">
        <div class="container-md content flex-column">
            <h3>글 작성</h3>
            <div class="content-write">
                <form id="file-append-form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">지역 선택</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">서울</a></li>
                          <li><a class="dropdown-item" href="#">강원</a></li>
                          <li><a class="dropdown-item" href="#">경기</a></li>
                          <li><a class="dropdown-item" href="#">충북</a></li>
                        </ul>
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">세부지역 선택</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">고양시</a></li>
                          <li><a class="dropdown-item" href="#">남양주시</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="상세 주소">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Content</span>
                        <textarea class="form-control" aria-label="With textarea" style="resize: none"></textarea>
                    </div>
                    <button class="btn btn-primary" id="image-file-append-btn">이미지 추가</button>
                    <div id="image-group">
                    </div>
                    
                    <button id="send-write-btn" class="btn btn-secondary">작성완료</button>
                </form>
            </div>
        </div>
    </div>
    <!-- File Append End -->

    <script>
        $(document).ready(function () {
            makeButton();
            $('#image-file-append-btn').on('click', function (e) {
                e.preventDefault();
                makeButton();
            });
        })
        
        function makeButton () {
            var con = document.createElement('div');
            var inputfile = document.createElement('input');
            var delBtn = document.createElement('input');
            delBtn.setAttribute('type', 'button');
            delBtn.setAttribute('onclick', 'deleteFile(this)');
            delBtn.setAttribute('class', 'btn btn-secondary');
            delBtn.setAttribute('value', '삭제');
            inputfile.setAttribute('type', 'file');
            con.appendChild(inputfile);
            con.appendChild(delBtn);
            $('#image-group').append(con);
        }

        function deleteFile(btn) {
            btn.parentElement.remove();
        }
    </script>

@endsection