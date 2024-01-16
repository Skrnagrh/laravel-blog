
@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">

            @if (session()->has('success'))   
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('loginError'))   
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="card">
                <main class="form-signin w-100 m-auto">
                    <h1 class="card-header h3 mb-5 text-light text-center bg-success">Form Login</h1>
                    <form action="/login" method="post">
                    @csrf
                    <div class="form-floating m-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
            
                    <div class="d-grid m-3">
                        <button class="btn btn-lg btn-success" type="submit">Login</button>
                    </div>

                    </form>
                    <small class="d-block text-center m-3">
                         <a href="/register" class="text-decoration-none">Create new Account</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
@endsection