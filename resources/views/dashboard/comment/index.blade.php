@extends('dashboard.layouts.main')

@section('content')
halaman comment

@foreach ($allComments as $commentData)
    {{-- <h1>{{ $commentData['post']->title }}</h1> --}}
    <div>
        <h2>Comments</h2>
        @foreach ($commentData['comments'] as $comment)
            <p><a href="/dashboard/profile/{{ $comment->user->name }}">{{ $comment->user->name }}</a> telah komentar ke postingan <a href="/dashboard/posts/{{ $commentData['post']->slug }}">{{ $commentData['post']->title }}</a></p>
        @endforeach
    </div>
@endforeach

@endsection
