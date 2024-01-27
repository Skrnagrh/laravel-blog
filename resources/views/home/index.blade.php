@extends('home.layouts.main')

@section('title')Beranda @endsection

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
                    <a href="/detail-post/{{ $posts[0]->slug}}" class="display-4 text-dark mb-0 link-hover">{{
                        $posts[0]->title }}</a>
                </div>
                <p>
                    <small class="text-muted text-light">By. <a
                            href="/kategori?author={{ $posts[0]->author->username }} " class="text-decoration-none">{{
                            $posts[0]->author->name }}</a> in <a
                            href="/kategori?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{
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
                                <a href="/detail-post/{{ $post->slug}}" class="h3">{{ $post->title }}</a>
                                <small class="text-muted text-light">By. <a
                                        href="/kategori?author={{ $post->author->username }} "
                                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                        href="/kategori?category={{ $post->category->slug }}"
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
                                <a href="/detail-post/{{ $post->slug}}" class="h3">{{ $post->title }}</a>
                                <small class="text-muted text-light">By. <a
                                        href="/kategori?author={{ $post->author->username }} "
                                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                        href="/kategori?category={{ $post->category->slug }}"
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
                                        {{-- <a href="/detail-post/{{ $post->slug}}" class="h6">{{ $post->title }}</a>
                                        --}}
                                        <a href="/detail-post/{{ $post->slug }}" class="h6">
                                            {{ (str_word_count($post->title) <= 3) ? $post->title : implode(' ',
                                                array_slice(str_word_count($post->title, 2), 0, 3)) . ' ...' }}
                                        </a>


                                        <small class="text-muted">By. <a
                                                href="/kategori?author={{ $post->author->username }} "
                                                class="text-decoration-none">{{ $post->author->name }}</a>
                                            in <a href="/kategori?category={{ $post->category->slug }}"
                                                class="text-decoration-none">{{
                                                $post->category->name }}</a>
                                        </small>
                                        {{-- <small><i class="bi bi-bookmark"> <a
                                                    href="/kategori?category={{ $post->category->slug }}"
                                                    class="text-decoration-none">{{
                                                    $post->category->name }}</a></i></small> --}}
                                        {{-- <small><i class="bi bi-alarm"> {{ $post->created_at->diffForHumans() }}</i>
                                        </small> --}}
                                        <small>
                                            <i class="bi bi-alarm">
                                                <?php
                                                    setlocale(LC_TIME, 'id_ID');
                                                    $created_at = \Carbon\Carbon::parse($post->created_at);
                                                    $now = now();
                                                    $diff = $now->diff($created_at);

                                                    if ($diff->days >= 1) {
                                                        echo $created_at->formatLocalized('%A, %e %B %Y');
                                                    } else {
                                                        echo $created_at->diffForHumans();
                                                    }
                                                ?>
                                            </i>
                                        </small>



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
