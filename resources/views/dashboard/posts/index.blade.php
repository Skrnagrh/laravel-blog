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
                <a href="/dashboard/posts/create"><button class="btn btn-success btn-sm mt-2 me-2">Tambah
                        Postingan <i class="bi bi-plus-circle"></i></button></a>
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
                                <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                    class="btn btn-sm btn-warning me-3 text-light">
                                    <i class="bi bi-pencil-square"></i>
                                </a>


                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#confirmationModal{{ $post->slug }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <!-- Modal Konfirmasi -->
                                    <div>
                                        <div class="modal fade" id="confirmationModal{{ $post->slug }}" tabindex="-1"
                                            aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmationModalLabel">Hapus
                                                            Kriteria
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus kriteria ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="modal"><i class="bi bi-x-lg"></i>
                                                            Batal</button>
                                                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="bi bi-trash"></i> Ya, Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            {{-- <form action="" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>
@endsection
