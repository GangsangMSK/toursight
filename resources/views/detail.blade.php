@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Choose Local Button -->
    <div class="navbar">
        <div class="container-md">
            <div class="content detail-content">
                <h3>Title</h3>
                <div class="write-info">
                    <h6>위치 정보</h6>
                    <h6>date</h6>
                </div>
                <div id="carouselExampleControls" class="carousel slide detail-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/carousel1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/carousel2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/carousel3.jpg" class="d-block w-100" alt="...">
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
                <h4>Sub Title</h4>
                <div class="detail-explain">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ea nulla optio accusantium!
                        Sint ad veritatis voluptatibus quas magni, perferendis ipsum obcaecati repudiandae, commodi
                        reiciendis sit cum! Deleniti, consequatur praesentium?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, error dicta quidem, incidunt,
                        doloribus minus odit ex reiciendis debitis assumenda tempora labore consectetur ratione.
                        Voluptatibus nisi aliquid nesciunt nulla. Tempore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi, ullam saepe obcaecati
                        mollitia itaque ea quibusdam ipsa dolorum id architecto necessitatibus ut iusto provident
                        voluptates temporibus sapiente! Non, minima.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore laborum in id qui nemo
                        voluptatibus dolorem odio minima illo commodi similique beatae, labore distinctio et ducimus
                        ipsum ut officiis.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed culpa, aut qui ullam sunt deleniti
                        placeat veniam magnam ad neque unde totam alias similique. Placeat, maxime. Odio veniam officia
                        laudantium.
                    </p>
                </div>
                
            </div>
            <button class="btn btn-secondary w-100" onclick="location.href='/local'">목록으로 가기</button>
        </div>
    </div>

    <div class="navbar">
        <div class="container-md review-content">
            <div class="content">
                <h3>리뷰</h3>
                <div class="review-write">
                    <form>
                        <fieldset class="rate">
                            <input type="radio" id="rating5" name="rating" value="5"><label for="rating5" title="5점"></label>
                            <input type="radio" id="rating4" name="rating" value="4"><label for="rating4" title="4점"></label>
                            <input type="radio" id="rating3" name="rating" value="3"><label for="rating3" title="3점"></label>
                            <input type="radio" id="rating2" name="rating" value="2"><label for="rating2" title="2점"></label>
                            <input type="radio" id="rating1" name="rating" value="1"><label for="rating1" title="1점"></label>
                        </fieldset>
                        <div class="input-group mb-3">
                            <h6>Title</h6>
                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="input-group mb-3">
                            <h6>Content</h6>
                            <input type="text" id="review-content" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button class="btn btn-secondary" type="submit">작성</button>
                    </form>
                    
                </div>
                <ul class="review-list">
                    <li>
                        <h4>Title</h4>
                        <h6>★★★★☆</span>
                        <h6>author</h6>
                        <h6>date</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consequuntur reprehenderit laboriosam fugit a, quaerat error voluptatem non aperiam eos enim, ut debitis libero eaque! Repudiandae voluptas sequi similique reprehenderit.</p>
                    </li>
                    <li>
                        <h4>Title</h4>
                        <h6>★★★★☆</span>
                        <h6>author</h6>
                        <h6>date</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consequuntur reprehenderit laboriosam fugit a, quaerat error voluptatem non aperiam eos enim, ut debitis libero eaque! Repudiandae voluptas sequi similique reprehenderit.</p>
                    </li>
                    <li>
                        <h4>Title</h4>
                        <h6>★★★★☆</span>
                        <h6>author</h6>
                        <h6>date</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consequuntur reprehenderit laboriosam fugit a, quaerat error voluptatem non aperiam eos enim, ut debitis libero eaque! Repudiandae voluptas sequi similique reprehenderit.</p>
                    </li>
                    <li>
                        <h4>Title</h4>
                        <h6>★★★★☆</span>
                        <h6>author</h6>
                        <h6>date</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consequuntur reprehenderit laboriosam fugit a, quaerat error voluptatem non aperiam eos enim, ut debitis libero eaque! Repudiandae voluptas sequi similique reprehenderit.</p>
                    </li>
                    <li>
                        <h4>Title</h4>
                        <h6>★★★★☆</span>
                        <h6>author</h6>
                        <h6>date</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consequuntur reprehenderit laboriosam fugit a, quaerat error voluptatem non aperiam eos enim, ut debitis libero eaque! Repudiandae voluptas sequi similique reprehenderit.</p>
                    </li>

                </ul>
            </div>
            
        </div>
    </div>

@endsection