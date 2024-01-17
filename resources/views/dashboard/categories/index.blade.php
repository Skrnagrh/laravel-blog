@extends('dashboard.layouts.main')

@section('content')

{{-- <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
</div> --}}

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    {{ session('success') }}
</div>
@endif



<section class="header-menu my-3">
    <div class="card m-0 border shadow-sm p-3">

        <div class="d-flex justify-content-between mx-2">
            <h5 class="mt-3"><i class="bi bi-table"></i> Data Kategori</h5>
            <div class="d-flex align-items-center justify-content-end">
                <button class="btn btn-success btn-sm mt-2 me-2" data-bs-toggle="modal"
                    data-bs-target="#createModal">Tambah
                    Kategori <i class="bi bi-plus-circle"></i></button>
                @include('dashboard.categories.create')
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{-- <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success">
                                <span data-feather="eye"></span>
                            </a> --}}
                            <button type="button" class="btn btn-sm btn-warning me-3 text-light" data-bs-toggle="modal"
                                data-bs-target="#EditModal{{ $category->slug }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#confirmationModal{{ $category->slug }}">
                                <i class="bi bi-trash"></i>
                            </button>
                            {{-- <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form> --}}
                        </td>
                    </tr>
                    @include('dashboard.categories.edit')
                    @include('dashboard.categories.delete')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>

<script>
    const title = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
</script>

@endsection


{{-- <div class="table-responsive col-lg-12">
    <a href="/dashboard/categories/create" class="btn btn-success mb-3"><i class="bi bi-bookmark-plus"></i> Create New
        category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
