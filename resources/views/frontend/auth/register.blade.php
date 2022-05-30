@extends('frontend.layouts.app')
@section('title','Sign Up')
@section('content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>{{__('Sign up')}}</h2>
            <ul>
                <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                <li>{{__('Sign up')}}</li>
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
                <div class="register-thumbnail mb-50"><img src="{{ asset('/front/assets/img/hero-3.png')}}" alt=""></div>
                <div class="col-12 col-lg-6">
                <div class="register-thumbnail mb-50"><img src="{{ asset('/front/assets/img/hero-3.png')}}" alt=""></div>
                </div>
            </div>
            <!-- Register Card-->
            <div class="col-12 col-lg-6">
                <div class="card register-card bg-gray p-1 p-sm-4 mb-50">
                <div class="card-body">
                    <h4>{{ __('Sign up') }}</h4>
                    <!-- Register Form-->
                    <div class="register-form my-5">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="label-psswd" for="username">{{__('Username')}}</label>
                                <input id="username" type="text" class="form-control rounded-0 @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" required placeholder="Username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="label-psswd" for="email">{{__('E-Mail Address')}}</label>
                            <input class="form-control rounded-0 @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Email Address" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="label-psswd" for="phone">{{__('Phone Number')}}</label>
                            <input class="form-control rounded-0 @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" placeholder="Phone" required="">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                           <label class="label-psswd" for="password">{{__('password')}}</label>
                            <input class="input-psswd form-control rounded-0 @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Password" psswd-shown="false" required="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                           <label class="label-psswd" for="password_confirmation">{{__('Confirm Password')}}</label>
                            <input class="input-psswd form-control rounded-0 @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" psswd-shown="false" required="">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary custom_btn w-100" type="submit"><i class="lni-unlock mr-2"></i> {{ __('Sign up') }}</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
</section>
@endsection