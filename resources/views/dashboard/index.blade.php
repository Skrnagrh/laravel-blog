@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mb-5 text-transform">Dashboard By {{ auth()->user()->name }}</h1>
  </div>

  <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
              <h2>Home</h2>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="/">View Details</a>
                <div class="small text-white"><span data-feather="arrow-right"></span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">
            <h2>Dashboard</h2>
          </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="/dashboard">View Details</a>
                <div class="small text-white"><span data-feather="arrow-right"></span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">
            <h2>My Post</h2>
          </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="/dashboard/posts">View Details</a>
                <div class="small text-white"><span data-feather="arrow-right"></span></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">
            <h2>Post Category</h2>
          </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="dashboard/categories">View Details</a>
                <div class="small text-white"><span data-feather="arrow-right"></span></div>
            </div>
        </div>
    </div>
</div>
    
@endsection