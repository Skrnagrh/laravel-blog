@extends('dashboard.layouts.main')

@section('content')

<section class="section profile">
    @if($profile)
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    @if ($profile->profile_image)
                    <img src="{{ asset('storage/profile_images/' . $profile->profile_image) }}" class="rounded-circle">
                    @else
                    <img src="/assets/dashboard/img/not-profile.png" alt="Profile" class="rounded-circle">
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
                    <!-- Bordered Tabs -->

                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah
                                Password</button>
                        </li>

                    </ul>

                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            @include('dashboard.profile.show')
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            @include('dashboard.profile.edit')
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            @include('dashboard.profile.password')
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    @endif

    <hr>
    <div class="row">
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
</section>


{{-- <script>
    // Ambil elemen-elemen yang dibutuhkan
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('password-toggle');

        // Tambahkan event listener pada ikon mata untuk menampilkan/menyembunyikan password
        passwordToggle.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.classList.remove('bi-eye-slash');
            passwordToggle.classList.add('bi-eye');
        } else {
            passwordInput.type = 'password';
            passwordToggle.classList.remove('bi-eye');
            passwordToggle.classList.add('bi-eye-slash');
        }
        });
</script>

<script>
    const passwordConfirmationInput = document.getElementById('password_confirmation');
    const passwordConfirmationToggle = document.getElementById('password-confirmation-toggle');

    passwordConfirmationToggle.addEventListener('click', function () {
        const type = passwordConfirmationInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordConfirmationInput.setAttribute('type', type);
        passwordConfirmationToggle.classList.toggle('bi-eye');
        passwordConfirmationToggle.classList.toggle('bi-eye-slash');
    });
</script> --}}

{{-- JS Profile --}}
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("old-password-input");
        var passwordToggle = document.getElementById("password-toggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.classList.remove("bi-eye-slash");
            passwordToggle.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            passwordToggle.classList.remove("bi-eye");
            passwordToggle.classList.add("bi-eye-slash");
        }
    }

    function toggleNewPasswordVisibility() {
        var newPasswordInput = document.getElementById("new-password-input");
        var newPasswordToggle = document.getElementById("new-password-toggle");

        if (newPasswordInput.type === "password") {
            newPasswordInput.type = "text";
            newPasswordToggle.classList.remove("bi-eye-slash");
            newPasswordToggle.classList.add("bi-eye");
        } else {
            newPasswordInput.type = "password";
            newPasswordToggle.classList.remove("bi-eye");
            newPasswordToggle.classList.add("bi-eye-slash");
        }
    }

    function toggleConfirmPasswordVisibility() {
        var confirmPasswordInput = document.getElementById("confirm-password-input");
        var confirmPasswordToggle = document.getElementById("confirm-password-toggle");

        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
            confirmPasswordToggle.classList.remove("bi-eye-slash");
            confirmPasswordToggle.classList.add("bi-eye");
        } else {
            confirmPasswordInput.type = "password";
            confirmPasswordToggle.classList.remove("bi-eye");
            confirmPasswordToggle.classList.add("bi-eye-slash");
        }
    }
</script>

<script>
    document.getElementById('profileImage').addEventListener('change', function () {
        const input = this;
        const previewImage = document.getElementById('previewImage');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    });

    document.getElementById('removeProfileImage').addEventListener('click', function (e) {
        e.preventDefault();
        const profileImage = document.getElementById('profileImage');
        profileImage.value = ''; // Clear the input
        document.getElementById('previewImage').src = '{{ asset('path/to/your/default-image.jpg') }}';
    });
</script>

@endsection