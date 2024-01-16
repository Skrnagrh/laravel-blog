@extends('home.layouts.main')

@section('content')

<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-dark">Single Page</li>
        </ol>
        <div class="row g-4">
            <div class="col-lg-10">
                <div class="mb-4">
                    <a href="#" class="h1 display-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</a>
                </div>
                <div class="position-relative rounded overflow-hidden mb-3">
                    <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                    <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                        style="top: 20px; right: 20px;">
                        Busimess
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                    <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                </div>
                <p class="my-4">{!! $post->body !!} </p>
                {{--<div class="bg-light p-4 mb-4 rounded border-start border-3 border-primary">
                    <h1 class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                </div>
                <div class="row g-4">
                    <div class="col-6">
                        <div class="rounded overflow-hidden">
                            <img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rounded overflow-hidden">
                            <img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy
                </p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                    took It has survived not only five centuries, but also the leap into electronic
                </p>
                <div class="d-flex">
                    <div class="me-2">
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                    </div>
                    <div class="ms-2">
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                        <span class="fas fa-check-circle mb-3 fs-5"> Lorem Ipsum is simply dummy text of</span>
                    </div>
                </div>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                    took It has survived not only five centuries, but also the leap into electronic
                </p> --}}
                <div class="tab-class">
                    <div class="d-flex justify-content-between border-bottom mb-4">
                        <ul class="nav nav-pills d-inline-flex text-center">
                            <li class="nav-item mb-3">
                                <h5 class="mt-2 me-3 mb-0">Tags:</h5>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill"
                                    href="#tab-1">
                                    <span class="text-dark" style="width: 100px;">Sports</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 100px;">Magazine</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 100px;">Politics</span>
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 me-3">Share:</h5>
                            <i
                                class="fab fa-facebook-f link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i
                                class="btn fab bi-twitter link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i
                                class="btn fab fa-instagram link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i
                                class="btn fab fa-linkedin-in link-hover btn btn-square rounded-circle border-primary text-dark"></i>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show active">
                            <div class="row g-4 align-items-center">
                                <div class="col-3">
                                    <img src="img/footer-4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-9">
                                    <h3>Amelia Alex</h3>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        but also the leap into electronic.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show">
                            <div class="row g-4 align-items-center">
                                <div class="col-3">
                                    <img src="img/footer-5.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-9">
                                    <h3>Amelia Alex</h3>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        but also the leap into electronic.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show">
                            <div class="row g-4 align-items-center">
                                <div class="col-3">
                                    <img src="img/footer-6.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-9">
                                    <h3>Amelia Alex</h3>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        but also the leap into electronic.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded my-4 p-4">
                    <h4 class="mb-4">You Might Also Like</h4>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded">
                                <img src="img/chatGPT.jpg" class="img-fluid rounded" alt="">
                                <div class="ms-3">
                                    <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                    <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded">
                                <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                <div class="ms-3">
                                    <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                    <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded p-4">
                    <h4 class="mb-4">Comments</h4>
                    <div class="p-4 bg-white rounded mb-4">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>James Boreego</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i
                                            class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                    2024</small>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been
                                    the industry's standard dummy type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded mb-0">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>James Boreego</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i
                                            class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                    2024</small>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been
                                    the industry's standard dummy type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded p-4 my-4">
                    <h4 class="mb-4">Leave A Comment</h4>
                    <form action="#">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="form-control py-3" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control py-3" placeholder="Email Address">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="textarea" id="" cols="30" rows="7"
                                    placeholder="Write Your Comment Here"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="form-control btn btn-primary py-3" type="button">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-3 rounded border">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i
                                        class="fa fa-search text-white"></i></span>
                            </div>
                            <h4 class="mb-4">Popular Categories</h4>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Life Style
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Fashion
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Relationship
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Art & Culture
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Self Development
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#"
                                        class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3 mb-4">
                                        travel & tourism
                                    </a>
                                </div>
                            </div>
                            <h4 class="my-4">Stay Connected</h4>
                            <div class="row g-4">
                                <div class="col-12">
                                    <a href="#"
                                        class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">13,977 Fans</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">21,798 Follower</span>
                                    </a>
                                    <a href="#"
                                        class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">7,999 Subscriber</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">19,764 Follower</span>
                                    </a>
                                    <a href="#"
                                        class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                        <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">31,999 Subscriber</span>
                                    </a>
                                    <a href="#"
                                        class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                        <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">37,999 Subscriber</span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="my-4">Popular News</h4>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-sports-1.jpg"
                                                        class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span
                                                    class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                    style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Sports</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-technology.jpg"
                                                        class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span
                                                    class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                    style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Technology</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-fashion.jpg"
                                                        class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span
                                                    class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                    style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Fashion</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-life-style.jpg"
                                                        class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span
                                                    class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                    style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Life Style</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#"
                                        class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View
                                        More</a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom my-3 pb-3">
                                        <h4 class="mb-0">Trending Tags</h4>
                                    </div>
                                    <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Sports</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Politics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Magazine</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Travel</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">World</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative banner-2">
                                        <img src="img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="text-center banner-content-2">
                                            <h6 class="mb-2">The Most Populer</h6>
                                            <p class="text-white mb-2">News & Magazine WP Theme</p>
                                            <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection
