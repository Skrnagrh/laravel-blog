@extends('dashboard.layouts.main')

@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    @if ($profile->profile_image)
                    <img src="{{ asset('storage/' . $profile->profile_image) }}" class="rounded-circle">
                    @else
                    <img src="/assets/dashboard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    @endif
                    <h2>{{ $profile->name }}</h2>
                    <h3>{{ $profile->job }}</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/{{ $profile->instagram }}" class="instagram"
                            target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/{{ $profile->linkedin }}" class="linkedin"
                            target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Tentang {{ $profile->name }}</h5>
                            <p class="small fst-italic">{{ $profile->about }}</p>

                            <h5 class="card-title">Profile Detail</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Perusahaan</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->company }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->job }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Country</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->country }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No. Handphone</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->phone }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat Email</div>
                                <div class="col-lg-9 col-md-8">{{ $profile->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div>
    <h1>{{ $profile->name }}'s Profile</h1>
    <p>Email: {{ $profile->email }}</p>
</div> --}}
@endsection