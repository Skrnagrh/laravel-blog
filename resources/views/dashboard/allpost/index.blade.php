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
                    <img src="https://source.unsplash.com/650x430?{{ $post->category->name }}" class="card-img-top"
                        alt="...">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small class="text-muted text-light">By. <a
                                href="/kategori?author={{ $post->author->username }}" class="text-decoration-none">{{
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

{{-- <div class="card m-0 border shadow-sm p-3">

    <div class="d-flex justify-content-between mx-2">
        <h5 class="mt-3"><i class="bi bi-table"></i> Data Postingan</h5>
    </div>
    <hr class="dropdown-divider">

    <div class="table-responsive">
        <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/dashboard/all-post/{{ $post->slug }}"
                                class="btn btn-sm btn-success me-3 text-light">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-warning me-3 text-light"
                                data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->slug }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#confirmationModal{{ $post->slug }}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div> --}}
