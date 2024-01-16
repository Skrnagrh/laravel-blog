@extends('home.layouts.main')

@section('content')


<!-- Features Start -->
<div class="container-fluid features mb-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-2">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="/assets/home/img/features-sports-1.jpg"
                                    class="img-zoomin img-fluid rounded-circle w-100">
                            </div>
                            {{-- <span
                                class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                style="top: 10%; right: -10px;">3</span> --}}
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="">
                            @auth
                            <a href="#" class="h6">
                                Selamat Datang {{ Auth()->user()->name }}
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{
                                Auth()->user()->name }}</small>
                            @else
                            <p>Selamat datang! Silahkan login dan buat blog pertama Anda <a
                                    href="{{ route('login') }}">di sini</a>.</p>
                            @endauth
                        </div>

                        {{-- <div class="features-content d-flex flex-column">
                            <a href="#" class="h6">
                                Selamat Datang
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{
                                Auth()->user()->name }}</small>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="img/features-technology.jpg" class="img-zoomin img-fluid rounded-circle w-100"
                                    alt="">
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
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="img/features-fashion.jpg" class="img-zoomin img-fluid rounded-circle w-100"
                                    alt="">
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
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100"
                                    alt="">
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
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Features End -->

@if ($posts->count())

<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded">
                    @if ($posts[0]->image)
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid rounded img-zoomin w-100"
                        alt="" style="min-width: 650px; min-height: 430px">
                    @else
                    <img src="https://source.unsplash.com/650x430?{{ $posts[0]->category->name }}"
                        class="img-fluid rounded img-zoomin w-100" alt="">
                    @endif
                    <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                        style="bottom: 10px; left: 0;">
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute
                            read</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05
                            Comment</a>
                        <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                    </div>
                </div>
                <div class="border-bottom py-3">
                    <a href="/posts/{{ $posts[0]->slug}}" class="display-4 text-dark mb-0 link-hover">{{
                        $posts[0]->title }}</a>
                </div>
                <p>
                    <small class="text-muted text-light">By. <a href="/posts?author={{ $posts[0]->author->username }} "
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{
                            $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="mt-3 mb-4">{{ $posts[0]->excerpt }}.... <a href="detail-post/{{ $posts[0]->slug}}">read
                        more</a>
                </p>
                @foreach ($posts->skip(1) as $post)
                <div class="bg-light p-4 rounded">
                    <div class="news-2">
                        <h3 class="mb-4">Top Story</h3>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="rounded overflow-hidden">
                                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    class="img-fluid rounded img-zoomin w-100" alt="">
                                @else
                                <img src="https://source.unsplash.com/650x430?{{ $post->category->name }}"
                                    class="img-fluid rounded img-zoomin w-100" alt="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <a href="/posts/{{ $post->slug}}" class="h3">{{ $post->title }}</a>
                                <small class="text-muted text-light">By. <a
                                        href="/posts?author={{ $post->author->username }} "
                                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none">{{
                                        $post->category->name }}</a>
                                </small>
                                <p class="mb-0 fs-5"><i class="fa fa-clock"> {{ $post->created_at->diffForHumans()
                                        }}</i> </p>
                                <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                @break
                @endforeach
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4">
                        @foreach ($posts->skip(2) as $post)
                        <div class="col-12">
                            <div class="rounded overflow-hidden">
                                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    class="img-fluid rounded img-zoomin w-100" alt="">
                                @else
                                <img src="https://source.unsplash.com/650x430?{{ $post->category->name }}"
                                    class="img-fluid rounded img-zoomin w-100" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <a href="/posts/{{ $post->slug}}" class="h3">{{ $post->title }}</a>
                                <small class="text-muted text-light">By. <a
                                        href="/posts?author={{ $post->author->username }} "
                                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none">{{
                                        $post->category->name }}</a>
                                </small>
                                <p class="mb-0 fs-5"><i class="fa fa-clock"> {{ $post->created_at->diffForHumans()
                                        }}</i> </p>
                                <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                            </div>
                        </div>
                        @break
                        @endforeach
                        @foreach ($posts->skip(3) as $post)
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        @if ($post->image)
                                        <img src="/assets/home/img/news-3.jpg"
                                            class="img-zoomin img-fluid rounded w-100"
                                            alt="{{ $post->category->name }}">
                                        @else
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                            class="img-zoomin img-fluid rounded w-100"
                                            alt="{{ $post->category->name }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="/posts/{{ $post->slug}}" class="h6">{{ $post->title }}</a>
                                        <small class="text-muted">By. <a
                                                href="/posts?author={{ $post->author->username }} "
                                                class="text-decoration-none">{{ $post->author->name }}</a>
                                        </small>
                                        <small><i class="fa fa-clock"> {{ $post->created_at->diffForHumans() }}</i>
                                        </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Post Section End -->


<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">What’s New</h1>
                        <ul class="nav nav-pills d-inline-flex text-center">
                            @foreach ($categories as $category)
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill"
                                    href="#tab?category={{ $category->slug }}">
                                    <span class="text-dark" style="width: 100px;">{{ $category->name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach ($postsbawah as $postsbawah)
                    <div class="tab-content mb-4">
                        <div id="tab?category={{ $category->slug }}" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            {{ $category->title }}
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <a href="#" class="h4">{{ $post->title }}</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>




            </div>
        </div>
    </div>
</div>
<!-- Most Populer News End -->

@else
@include('home.404')
@endif

@endsection

{{-- <div class="border-bottom mb-4">
    <h2 class="my-4">{{ $category->name }}</h2>
</div>
<div class="whats-carousel owl-carousel">
    <div class="latest-news-item">
        <div class="bg-light rounded">
            <div class="rounded-top overflow-hidden">
                <img src="https://source.unsplash.com/500x400?{{ $category->name }}"" class=" img-zoomin img-fluid
                    rounded-top w-100" alt="">
            </div>
            <div class="d-flex flex-column p-4">
                <a href="#" class="h4">There are many variations of passages of Lorem Ipsum
                    available,</a>
                <div class="d-flex justify-content-between">
                    <a href="#" class="small text-body link-hover">by Willium Smith</a>
                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                        Dec 9, 2024</small>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="col-lg-4 col-xl-3">
    <div class="row g-4">
        <div class="col-12">
            <div class="p-3 rounded border">
                <h4 class="mb-4">Stay Connected</h4>
                <div class="row g-4">
                    <div class="col-12">
                        <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                            <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                            <span class="text-white">13,977 Fans</span>
                        </a>
                        <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                            <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                            <span class="text-white">21,798 Follower</span>
                        </a>
                        <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                            <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                            <span class="text-white">7,999 Subscriber</span>
                        </a>
                        <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                            <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                            <span class="text-white">19,764 Follower</span>
                        </a>
                        <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                            <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                            <span class="text-white">31,999 Subscriber</span>
                        </a>
                        <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
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
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December
                                        9,
                                        2024</small>
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
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December
                                        9,
                                        2024</small>
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
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December
                                        9,
                                        2024</small>
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
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December
                                        9,
                                        2024</small>
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
                        <div class="position-relative banner-2">
                            <img src="/assets/home/img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
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
{{-- <div class="mt-5 lifestyle">
    <div class="border-bottom mb-4">
        <h1 class="mb-4">Life Style</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="lifestyle-item rounded">
                <img src="/assets/home/img/lifestyle-1.jpg" class="img-fluid w-100 rounded" alt="">
                <div class="lifestyle-content">
                    <div class="mt-auto">
                        <a href="#" class="h4 text-white link-hover">There are many variations
                            of passages of Lorem Ipsum available,</a>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#" class="small text-white link-hover">By Willium Smith</a>
                            <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="lifestyle-item rounded">
                <img src="/assets/home/img/lifestyle-2.jpg" class="img-fluid w-100 rounded" alt="">
                <div class="lifestyle-content">
                    <div class="mt-auto">
                        <a href="#" class="h4 text-white link-hover">There are many variations
                            of passages of Lorem Ipsum available,</a>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#" class="small text-white link-hover">By Willium Smith</a>
                            <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}