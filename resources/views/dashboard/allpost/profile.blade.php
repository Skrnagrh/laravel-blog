@extends('dashboard.layouts.main')

@section('content')

<section class="section profile">
    @if($user)
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    {{-- @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" class="rounded-circle">
                    @else
                    <img src="/assets/dashboard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    @endif --}}
                    @if ($user->profile_image)
                    <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" class="rounded-circle">
                    @else
                    <img src="/assets/dashboard/img/not-profile.png" alt="Profile" class="rounded-circle">
                    @endif

                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->job }}</h3>
                    <div class="social-links mt-2">
                        <a href="https://www.twitter.com/{{ $user->twitter }}" class="twitter" target="_blank"><i
                                class="bi bi-twitter-x"></i></a>
                        <a href="https://web.facebook.com/{{ $user->facebook }}" class="facebook" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/{{ $user->instagram }}" class="instagram" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/{{ $user->linkedin }}" class="linkedin" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">

                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Profile</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#postingan-overview">Postingan</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Tentang {{ $user->name }}</h5>
                            <p class="small fst-italic">{{ $user->about }}</p>

                            <h5 class="card-title">Profile Detail</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Perusahaan</div>
                                <div class="col-lg-9 col-md-8">{{ $user->company }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                <div class="col-lg-9 col-md-8">{{ $user->job }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Country</div>
                                <div class="col-lg-9 col-md-8">{{ $user->country }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8">{{ $user->address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No. Handphone</div>
                                <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat Email</div>
                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <hr>

        @if($posts->count() > 0)
        @foreach ($posts as $post)
        <div class="col-md-4" id="postingan-overview">
            <a href="/dashboard/all-post/{{ $post->slug }}">
                <div class="card">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top">
                    @else
                    <img src="/assets/not-image-post.png" class="card-img-top">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small class="text-muted text-light">By. <a
                                href="{{ route('dashboard.author.index', ['username' => $post->author->username]) }}"
                                class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                href="/dashboard/category?={{ $post->category->slug }}" class="text-decoration-none">{{
                                $post->category->name }}</a>
                            {{ $post->created_at->diffForHumans() }}</small>
                        <p class="card-text text-dark">{{ Str::words($post->excerpt, 5, '...') }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <p>Belum ada postingan.</p>
        @endif
    </div>
    @endif
</section>

{{-- <script>
    // Add an event listener to the "Postingan" tab button
    document.querySelector('.nav-link[data-bs-target="#postingan-overview"]').addEventListener('click', function() {
        // Scroll to the specified section smoothly
        document.getElementById('postingan-overview').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script> --}}
<script>
    document.querySelector('.nav-link[data-bs-target="#postingan-overview"]').addEventListener('click', function() {
        const postinganSection = document.getElementById('postingan-overview');
        if (postinganSection) {
            const rect = postinganSection.getBoundingClientRect();
            window.scrollTo({
                top: window.pageYOffset + rect.top - 50,
                behavior: 'smooth'
            });
        }
    });
</script>



@endsection