@extends('dashboard.layouts.main')
{{-- @section('page-title', 'Kriteria')

@section('notification')
@include('layouts.partial.notification')
@endsection --}}

@section('title')My Posts @endsection
@section('title1')Olah Data @endsection
@section('title2')Posts @endsection

@section('content')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<section class="header-menu my-3">
    <div class="card m-0 border shadow-sm p-3">

        <div class="d-flex justify-content-between mx-2">
            <h5 class="mt-3"><i class="bi bi-table"></i> Data Postingan</h5>
            <div class="d-flex align-items-center justify-content-end">
                {{-- <a href="/dashboard/posts/create"> --}}
                    <button class="btn btn-success btn-sm mt-2 me-2" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah
                        Postingan <i class="bi bi-plus-circle"></i></button>
                    @include('dashboard.posts.create')
                    {{-- </a> --}}
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Kategori</th>
                        {{-- @can('is_staff_or_admin') --}}
                        <th class="text-center">Aksi</th>
                        {{-- @endcan --}}
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
                                <a href="/dashboard/posts/{{ $post->slug }}"
                                    class="btn btn-sm btn-success me-3 text-light">
                                    <i class="bi bi-eye"></i>
                                </a>
                                {{-- <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                    class="btn btn-sm btn-warning me-3 text-light">
                                    <i class="bi bi-pencil-square"></i>
                                </a> --}}

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-warning me-3 text-light"
                                    data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->slug }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#confirmationModal{{ $post->slug }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            {{-- <form action="" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form> --}}
                        </td>
                    </tr>
                    @include('dashboard.posts.edit')
                    @include('dashboard.posts.delete')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>


<script>
    const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }
</script>
@endsection
