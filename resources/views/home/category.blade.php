@extends('home.layouts.main')

@section('title'){{ $title }} @endsection


@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mt-5 lifestyle">
            <div class="border-bottom mb-4">
                <h1 class="mb-4">{{ $title }}</h1>
            </div>
            <div class="row g-4 my-3">
                @foreach ($posts as $post)
                <div class="col-lg-4">
                    <div class="lifestyle-item rounded">
                        @if ($post->image)
                        <img src="/assets/home/img/news-3.jpg" class="img-fluid w-100 rounded"
                            alt="{{ $post->category->name }}">
                        @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                            class="img-fluid w-100 rounded" alt="{{ $post->category->name }}">
                        @endif
                        <div class="lifestyle-content">
                            <div class="mt-auto">
                                <a href="/{{ $post->slug}}" class="h4 text-white link-hover">{{ $post->title }}</a>
                                <div class="d-flex justify-content-between mt-4">
                                    <a href="kategori/?author={{ $post->author->username }} "
                                        class="small text-white link-hover">By {{ $post->author->name }}</a>
                                    <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i>{{
                                        $post->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
