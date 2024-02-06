@extends('dashboard.layouts.main')

@section('content')

<section class="header-menu my-3">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <a href="/dashboard/all-post/{{ $post->slug }}">
                <div class="card">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top">
                    @else
                    <img src="/assets/not-image-post.png" class="card-img-top">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small class="text-muted text-light">By. <a
                                href="{{ route('dashboard.author.index', ['username' => $post->author->username]) }}" class="text-decoration-none">{{
                                $post->author->name }}</a> in <a href="/kategori?category={{ $post->category->slug }}"
                                class="text-decoration-none">{{
                                $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
                        <p class="card-text text-dark">{{ Str::words($post->excerpt, 5, '...') }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-3 mb-5 mx-3">
        {{ $posts->links() }}
    </div>
</section>


@endsection
