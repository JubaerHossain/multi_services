@extends('layouts.auth')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="text-center mb-4">
    <img src="{{ asset('public/asset/')}}/static/logo.svg" height="36" alt="">
  </div>
  <form class="card card-md" action="{{ route('register') }}" method="post">
      @csrf
    <div class="card-body">
      <h2 class="mb-5 text-center">Create new account</h2>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter name">
        
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror " value="{{ old('phone') }}" required autocomplete="name" autofocus placeholder="Enter phone number">
        
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">
        
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="input-group input-group-flat">
          <input type="password" class="form-control"  placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <div class="input-group input-group-flat">
          <input type="password" class="form-control"  placeholder="Confirm password"  name="password_confirmation" required autocomplete="new-password">
          
        </div>
      </div>
      <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block" id="submit">Create new account</button>
      </div>
    </div>
  </form>
  <div class="text-center text-muted">
    Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
  </div>
<input type="text" id="url" hidden value="{{ url('/') }}">
@endsection
@push('js')
 
@endpush