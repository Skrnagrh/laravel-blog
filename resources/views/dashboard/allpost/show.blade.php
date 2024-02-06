@extends('dashboard.layouts.main')

@section('content')

{{-- <div class="container">
    <div class="col-lg-10">
        <div class="card">
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;" class="mt-3">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?" class="" alt="">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <small class="text-muted text-light">By. <a href="/kategori?author={{ $post->author->username }} "
                        class="text-decoration-none">{{
                        $post->author->name }}</a> in <a href="/kategori?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{
                        $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                </small>
                <p class="card-text mt-3">{!! $post->body !!}</p>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="col-lg-10">
        <div class="card">
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;" class="mt-3">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="">
            </div>
            @else
            <img src="/assets/not-image-post.png" class="card-img-top">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <small class="text-muted text-light">By. <a
                                href="{{ route('dashboard.author.index', ['username' => $post->author->username]) }}"
                                {{-- href="/dashboard/author?author={{ $post->author->username }}" --}}
                                class="text-decoration-none">{{
                                $post->author->name }}</a> in <a href="/kategori?category={{ $post->category->slug }}"
                                class="text-decoration-none">{{
                                $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
                            class="btn btn-primary btn-sm me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="btn btn-danger btn-sm me-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank"
                            class="btn btn-success btn-sm me-2">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank"
                            class="btn btn-info btn-sm me-2">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <button onclick="copyLink()" class="btn btn-secondary btn-sm">
                            <i class="bi bi-copy"></i>
                        </button>
                    </div>
                </div>
                <p class="card-text mt-3">{!! $post->body !!}</p>
            </div>

        </div>
    </div>
</div>

<script>
    // Function to copy the current page URL to the clipboard
    function copyLink() {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = window.location.href;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Link copied to clipboard!");
    }
</script>

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