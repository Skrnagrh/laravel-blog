@extends('home.layouts.main')

@section('content')

<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="">Detail</a></li>
            <li class="breadcrumb-item active text-dark">{{ Str::words($post->title, 2, '...') }}</li>
        </ol>
        <div class="row g-4">
            <div class="col-lg-10">
                <div class="mb-2">
                    <a href="#" class="h1 display-5">{{ $post->title }}</a>
                </div>
                <div class="position-relative rounded overflow-hidden mb-3">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded w-100" alt="">
                    @else
                    <img src="https://source.unsplash.com/1200x400?" class="img-fluid rounded w-100" alt="">
                    @endif
                    <small class="text-muted text-light mt-4">By. <a
                            href="/kategori?author={{ $post->author->username }}" class="text-decoration-none">{{
                            $post->author->name }}</a> in <a href="/kategori?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{
                            $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
                    <a href="/kategori?category={{ $post->category->slug }}"
                        class="position-absolute text-white px-4 py-2 bg-primary rounded"
                        style="top: 20px; right: 20px;">
                        {{ $post->category->name }}
                    </a>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/kategori?author={{ $post->author->username }}" class="text-secondary link-hover me-3"><i
                            class="fa fa-clock"></i> {{ $post->author->name }}</a>
                    <a href="#" class="text-secondary link-hover me-3"><i class="fa fa-clock"></i> {{
                        $post->created_at->diffForHumans() }}</a>
                    <a href="#comment" class="text-secondary link-hover me-3"><i class="fa fa-comment-dots"></i> {{
                        $comment->count() }} Comment</a>
                    <a href="#" class="text-secondary link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                </div>
                <p class="my-4">{!! $post->body !!} </p>

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
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                target="_blank"> <i
                                    class="fab fa-facebook-f link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank">
                                <i
                                    class="bi bi-whatsapp link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank"> <i
                                    class="btn fab bi-twitter link-hover btn btn-square rounded-circle border-primary text-dark me-2">
                                </i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                target="_blank">
                                <i
                                    class="btn fab fa-linkedin-in link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i
                                    class="btn fab fa-instagram link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            </a>
                            <a onclick="copyLink()"><i
                                    class="bi bi-copy link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="bg-light rounded p-4" id="comment">
                    <h4 class="mb-4">Comments {{ $comment->count() }}</h4>
                    <div class="p-4 bg-white rounded mb-4">
                        @if ($comment->count() === 0)
                        <p>Belum ada komentar.</p>
                        @else
                        @foreach ($comment as $comment)
                        <div class="row g-2 mb-4">
                            <div class="col-1">
                                <img src="/assets/home/img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-11">
                                <div class="d-flex justify-content-start">
                                    <h5>{{ $comment->user->username }}</h5>
                                    <small class="my-1 mx-2"> {{ $comment->created_at->diffForHumans()
                                        }}</small>
                                </div>
                                <p class="mb-0">{{ $comment->body }}</p>
                                <a href="javascript:void(0);" style="color: black; font-size: 12px"
                                    onclick="toggleReplyForm({{ $comment->id }})"> Balas
                                </a>
                                @if (auth()->check() && $comment->user_id === auth()->user()->id)
                                <a href="{{ route('comment.delete', ['commentId' => $comment->id]) }}"
                                    onclick="return confirm('Are you sure you want to delete this comment?')"
                                    style="color: black; font-size: 12px">Hapus</a>
                                @endif

                                @foreach ($comment->replies as $reply)
                                <div style="padding-left: 5%; padding-bottom: 10px; padding-top: 10px">
                                    <b>{{ $reply->user->username }}</b> {{ $reply->body }}
                                    <br>
                                    <a href="javascript:void(0);" onclick="toggleReplyForm({{ $comment->id }})"
                                        style="color: black; font-size: 12px">Balas</a>
                                    @if (auth()->check() && $reply->user_id === auth()->user()->id)
                                    <a onclick="return confirm('Are you sure?')"
                                        href="{{ route('replies.delete', ['replyId' => $reply->id]) }}"
                                        style="color: black; font-size: 12px">Hapus</a>
                                    @endif
                                </div>
                                @endforeach

                                <div id="replyForm{{ $comment->id }}"
                                    style="display: none; padding-left: 5%; padding-bottom: 10px; padding-top: 10px">
                                    <form action="{{ route('replies.store', ['commentId' => $comment->id]) }}"
                                        method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <textarea class="form-control" name="textarea"
                                                id="replyTextarea{{ $comment->id }}" cols="7" rows="1"
                                                placeholder="Write Your Reply Here"
                                                oninput="toggleSubmitButton({{ $comment->id }})"></textarea>
                                        </div>
                                        <div class="col-12 mt-2 d-flex">
                                            <button type="submit" id="submitButton{{ $comment->id }}"
                                                class="form-control btn btn-primary"
                                                style="display: none; margin-right: 5px">Submit</button>
                                                <a class="form-control btn btn-secondary"
                                                    onclick="cancelReplyForm({{ $comment->id }})">Cancel</a>
                                            </div>
                                        </form>
                                </div>

                            </div>
                        </div>
                        <hr>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="bg-light rounded p-4 my-4">
                    <h4 class="mb-4">Comment</h4>
                    <form action="{{ route('comments.store', ['postId' => $post->id]) }}" method="post">
                        @csrf
                        <div class="row g-4">
                            <div class="col-12">
                                <textarea class="form-control" name="textarea" id="commentTextarea" cols="30" rows="7"
                                    placeholder="Write Your Comment Here" required
                                    oninput="toggleSubmitButton()"></textarea>
                            </div>
                            <div class="col-12">
                                <button id="submitButton" class="form-control btn btn-primary py-3" type="submit"
                                    style="display: none">Submit</button>
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

{{-- <script>
    function toggleReplyForm(commentId) {
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        replyForm.style.display = 'block';
        submitButton.style.display = 'none';
    }

    function toggleSubmitButton(commentId) {
        var textarea = document.getElementById('replyTextarea' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        submitButton.style.display = textarea.value.trim() !== '' ? 'block' : 'none';
    }

    function submitReplyForm(event, commentId) {
        event.preventDefault();
        // Add your logic to submit the form using AJAX if needed
        // Example: use fetch or jQuery.ajax to send the form data to the server

        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        var textarea = document.getElementById('replyTextarea' + commentId);

        replyForm.style.display = 'none';
        submitButton.style.display = 'none';
        textarea.value = '';
    }

    function cancelReplyForm(commentId) {
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        var textarea = document.getElementById('replyTextarea' + commentId);

        replyForm.style.display = 'none';
        submitButton.style.display = 'none';
        textarea.value = '';
    }
</script> --}}

{{-- <script>
    function toggleReplyForm(commentId) {
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        replyForm.style.display = 'block';
        submitButton.style.display = 'none';
    }

    function toggleSubmitButton(commentId) {
        var textarea = document.getElementById('replyTextarea' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        submitButton.style.display = textarea.value.trim() !== '' ? 'block' : 'none';
        not empty
    }

    function cancelReplyForm(commentId, event) {
        event.preventDefault();
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        var textarea = document.getElementById('replyTextarea' + commentId);

        replyForm.style.display = 'none';
        submitButton.style.display = 'none';

        textarea.value = '';
    }
</script> --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var textarea = document.getElementById('commentTextarea');
        var submitButton = document.getElementById('submitButton');

        textarea.addEventListener('input', function () {
            submitButton.style.display = textarea.value.trim() !== '' ? 'block' : 'none';
        });
    });
</script> --}}

<script>
    function toggleReplyForm(commentId) {
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        replyForm.style.display = 'block';
        submitButton.style.display = 'none';
    }

    function toggleSubmitButton(commentId) {
        var textarea = document.getElementById('replyTextarea' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        submitButton.style.display = textarea.value.trim() !== '' ? 'block' : 'none';
    }

    // function submitReplyForm(event, commentId) {
    //     event.preventDefault();
    //     // Add your logic to submit the form using AJAX if needed
    //     // Example: use fetch or jQuery.ajax to send the form data to the server

    //     var replyForm = document.getElementById('replyForm' + commentId);
    //     var submitButton = document.getElementById('submitButton' + commentId);
    //     var textarea = document.getElementById('replyTextarea' + commentId);

    //     replyForm.style.display = 'none';
    //     submitButton.style.display = 'none';
    //     textarea.value = '';
    // }

    function cancelReplyForm(commentId) {
        var replyForm = document.getElementById('replyForm' + commentId);
        var submitButton = document.getElementById('submitButton' + commentId);
        var textarea = document.getElementById('replyTextarea' + commentId);

        replyForm.style.display = 'none';
        submitButton.style.display = 'none';
        textarea.value = '';
    }

</script>
@endsection
