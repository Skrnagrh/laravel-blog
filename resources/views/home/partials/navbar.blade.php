<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                        <p class="mb-0 text-white fs-6 fw-normal">Latest</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="/assets/home/img/features-fashion.jpg"
                                class="img-fluid rounded-circle border border-3 border-primary me-2"
                                style="width: 30px; height: 30px;" alt="">
                            <a href="#">
                                <p class="text-white mb-0 link-hover">Newsan unknown printer took a galley of type
                                    andscrambled Newsan.</p>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="top-link flex-lg-wrap">
                    <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span
                            class="text-body">Tuesday, Sep 12, 2024</span></i>
                    <div class="d-flex icon">
                        <p class="mb-0 text-white me-2">Follow Us:</p>
                        <a href="" class="me-2"><i class="bi bi-facebook-f text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                        <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="index.html" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">Newsers</p>
                    <small class="text-body fw-normal" style="letter-spacing: 12px;">Nespaper</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="/" class="nav-item nav-link {{ Request::is('/*') ? ' active' : '' }}">Home</a>
                        {{-- <a href="/{post:slug}"
                            class="nav-item nav-link {{ Request::is('/{post:slug}') ? ' active' : '' }}">Detail Page</a>
                        --}}
                        <a href="/about" class="nav-item nav-link {{ Request::is('about') ? ' active' : '' }}">About</a>
                        {{-- <a href="404.html" class="nav-item nav-link">404 Page</a> --}}
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
                            {{-- <button type="submit" class="nav-item nav-link bg-none border-0"
                                onclick="return confirm('Apakah and ayakin ingin keluar?')">Logout</button> --}}
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


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">search</button>
            </div> --}}
            <div class="modal-body d-flex align-items-center">
                <form action="/" class="input-group w-75 mx-auto d-flex">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    {{-- <div class="input-group w-75 mx-auto d-flex"> --}}
                        <div class="input-group mb-3">
                            <input type="search" class="form-control p-3" placeholder="keywords"
                                aria-describedby="search-icon-1" name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-dark" type="submit"><i class="fa fa-search"></i></button>
                            {{-- <span id="search-icon-1" class="input-group-text p-3" type="submit"><i
                                    class="fa fa-search"></i></span> --}}
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
