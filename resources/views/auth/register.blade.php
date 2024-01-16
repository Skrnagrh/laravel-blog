@extends('auth.layouts.index')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="/register" method="post">
                @csrf
                <span class="login100-form-title p-b-43">
                    Register to continue
                </span>

                <div class="wrap-input100 validate-input @error('name')is-invalid @enderror" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="name">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Nama Lengkap</span>
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input @error('username')is-invalid @enderror" data-validate="Valid username is required: ex@abc.xyz">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                      @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input @error('email')is-invalid @enderror" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input @error('password')is-invalid @enderror" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                      @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-46">
                    <span class="txt2">
                        Sudah punya akun? <a href="/login">Masuk
                        </a>
                    </span>
                </div>
                <div class="text-center pt-2 p-b-20">
                    <span class="txt2">
                        atau masuk menggunakan
                    </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('/assets/auth/images/bg-01.jpg');">
            </div>
        </div>
    </div>
</div>
@endsection
