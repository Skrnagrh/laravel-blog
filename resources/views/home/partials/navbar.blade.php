<div class="container-fluid sticky-top px-0">
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="/" class="navbar-brand">
                    <img src="/assets/logo/logo.png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="/" class="nav-item nav-link {{ Request::is('/') || Request::is('detail-post/*') ? 'active' : '' }}">Home</a>
                        <a href="/about" class="nav-item nav-link {{ Request::is('about') ? ' active' : '' }}">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('kategori') ? ' active' : '' }}"
                                data-bs-toggle="dropdown">Kategori</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                @foreach ($categories as $category)
                                <a href="kategori?category={{ $category->slug }}"
                                    class="dropdown-item{{ Request::get('category') == $category->slug ? ' active' : '' }}">{{
                                    $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        @if (Auth::check())
                        <a href="/dashboard" class="nav-item nav-link">Dashboard</a>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-item nav-link pt-2"
                                style="background: none; border: none; padding: 0; margin: 0; font-size: inherit; color: inherit;"
                                onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                                Logout
                            </button>
                        </form>
                        @else
                        <a href="/login" class="nav-item nav-link">Login</a>
                        @endif

                        {{-- <a href="/login" class="nav-item nav-link">Login</a> --}}
                    </div>
                    <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                        {{-- <div class="d-flex">
                            <img src="/assets/home/img/weather-icon.png" class="img-fluid w-100 me-2" alt="">
                            <div class="d-flex align-items-center">
                                <strong class="fs-4 text-secondary">31°C</strong>
                                <div class="d-flex flex-column ms-2" style="width: 150px;">
                                    <span class="text-body">NEW YORK,</span>
                                    <small>Mon. 10 jun 2024</small>
                                </div>
                            </div>
                        </div> --}}
                        <button
                            class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                class="fas fa-search text-primary"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <form action="/" class="input-group w-75 mx-auto d-flex">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="text-center mx-auto mb-4">
                        <img src="/assets/logo/logo.png">
                    </div>
                    <div class="input-group mb-3">
                        <input type="search" class="form-control p-3" placeholder="Masukan Kata Pencarian"
                            aria-describedby="search-icon-1" name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Search End -->
