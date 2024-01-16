@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Category</h1>
    </div>
    
    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}" placeholder="Name Category">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" placeholder="Nama Slug (Category versi huruf kecil semua)">
                @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <a href="/dashboard/categories" class="btn btn-danger">
              <span data-feather="arrow-left"></span> Back
            </a>
            <button type="submit" class="btn btn-primary"><span data-feather="save"></span> Save Category</button>
          </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection