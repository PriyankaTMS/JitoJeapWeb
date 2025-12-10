@extends('layouts.app')
@section('content')
    <!--=============================Section================================-->
    <style>
        @font-face {
            font-family: 'A750-Sans-Cd';
            src: url('{{ asset(' fonts/A750-Sans-Cd.woff2') }}') format('woff2'),
                url('{{ asset(' fonts/A750-Sans-Cd.woff') }}') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        .image-container {
            overflow: hidden;
            margin-top: -12px;
            /* Adjust this value to move the image upward */
        }

        .image-container img {
            width: 100%;
            height: auto;
            min-height: 100%;
            object-fit: cover;
            margin-top: -30px;
            /* Additional upward shift for the image */
        }

        .custom-margin {
            margin-top: -300px;
        }

        @media (max-width: 768px) {

            /* For devices smaller than 768px (like tablets and mobile phones) */
            .custom-margin {
                margin-top: 0;
            }
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <section class="text-center text-lg-start vh-100">
        <div class="card h-100" style="border: none; margin-bottom: 0;" >
            <div class="row g-0 h-100 d-flex align-items-center" style="margin-top: -13px !important;">
                <div class="col-lg-6 d-flex align-items-center custom-margin " style="background-color: white !important;">
                    <div class="card-body px-md-5 w-100" style="background-color: white;">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="d-flex justify-content-center mb-4 " style="margin-top:70px;">
                                    <img src="{{ asset('roaster/regilogo_2.png') }}" alt="bni logo"
                                        style="width: 40%; height: auto;">
                                </div>
                                <div class="d-flex justify-content-center mb-2 " style="margin-top:50px;">
                                    <h1
                                        style="text-transform: uppercase; font-size: 32px; font-weight: 300; font-family: 'A750-Sans-Cd-Medium-Regular'; text-align: center;">
                                        <b>Welcome back! Please log in to proceed..</b>
                                    </h1>
                                </div>
                                {{-- <div class="d-flex justify-content-center mb-4" style="size: 16px;">
                                    <h5 style="font-family: 'Poppins';"><b>New Here?
                                            <a href="{{ route('register') }}"
                                                style="color: red; text-decoration: none;">Register</a>
                                        </b></h5>
                                </div> --}}
                            </div>
                            <div class="row mb-3" style="margin-top:40px;"> <x-session-message />
                                {{--  <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>  --}}

                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="&nbsp;&nbsp;&nbsp;Enter Your Email ID*"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"
                                        style="background: #F0F0F0;font-size:20px; padding:13px 10px;border-radius:25px; height: 75px;"
                                        required autocomplete="email" style="background: #F7F7F7;" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                {{--  <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>  --}}

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="&nbsp;&nbsp;&nbsp;Enter Your Password*"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        style="background: #F0F0F0;font-size:20px; padding:13px 10px;border-radius:25px; height: 75px;"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{--  <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>  --}}

                            {{--  <div class="row mb-0">
                                <div class="col-md-8 offset-md-4 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('LOGIN') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>  --}}
                            <div class="row mb-0" style="margin-top:100px;">
                                <div class="col-md-12  text-center">
                                    <button type="submit" class="btn" style="width: 250px; background-color:#393186;height:70px; color: white;font-size:20px; border-radius: 35px; ">
                                        {{ __('LOGIN') }}
                                    </button>

                                    {{--  @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif  --}}
                                </div>
                                <div class="col-md-12  text-center">
                                    <div class="d-flex justify-content-center mb-4" style="margin-top: 20px;">
                                        <h5 style="color: #393186;font-family: 'Poppins';font-size: 25px;"><b>Don’t have an account,
                                                <a href="{{ route('register') }}"
                                                    style="color: #393186; text-decoration: none;font-size: 25px;">Register Now!</a>
                                            </b></h5>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch image-container">
                    <img src="{{ asset('roaster/Mask group.png') }}" alt="Trendy Pants and Shoes" class="" />
                </div>
            </div>
        </div>
    </section>
    <!--=============================Section================================-->
@endsection
