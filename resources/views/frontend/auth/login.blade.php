@extends('Frontend.layouts.app')
@section('title','Login')
@section('content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Login</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Login</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<div class="shape3">
    <img src="{{ asset('/public/front/assets/img/shape/1.svg') }}" alt="image"></div>
</div>
<section class="featured-services-area ptb-110">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Register Thumbnail-->
            <div class="col-12 col-lg-6">
                <div class="register-thumbnail mb-50"><img src="{{ asset('public/front/assets/img/hero-3.png')}}" alt=""></div>
                <div class="col-12 col-lg-6">
                <div class="register-thumbnail mb-50"><img src="{{ asset('public/front/assets/img/hero-3.png')}}" alt=""></div>
                </div>
            </div>
            <!-- Register Card-->
            <div class="col-12 col-lg-6">
                <div class="card register-card bg-gray p-1 p-sm-4 mb-50">
                <div class="card-body">
                    <h4>Login</h4>
                    <p class="d-inline">Didn't have an account?<a class="ml-2 d-inline" href="{{ route('front.register')}}">Sign Up</a></p>
                    <!-- Register Form-->
                    <div class="register-form my-5">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="label-psswd" for="email">{{('E-Mail Address')}}</label>
                            <input class="form-control rounded-0" type="email" name="email" id="email" placeholder="Email Address" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                           <label class="label-psswd" for="password">{{('password')}}</label>
                            <input class="input-psswd form-control rounded-0" id="password" name="password" type="password" placeholder="Password" psswd-shown="false" required="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary custom_btn w-100" type="submit"><i class="lni-unlock mr-2"></i> {{ ('Login') }}</button>
                    </form>
                    <div class="login-meta-data d-flex align-items-center justify-content-between">
                        <div class="form-check mt-3">
                        <input class="form-check-input" id="rememberMe" type="checkbox" value="" checked="">
                        <label class="form-check-label" name="remember" id="remember" for="rememberMe">{{ ('Remember Me') }}</label>
                        </div><a class="forgot-password mt-3" href="{{ route('password.request') }}">{{ ('Forgot Your Password?') }}</a>
                    </div>
                    </div>
                    <!-- Sign in via others-->
                    <div class="signin-via-others text-center">
                    <p class="mb-3">Or Sign in with</p>
                    <div class="single-footer-widget">
                        <ul class="social custom_icon_social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
</section>
@endsection