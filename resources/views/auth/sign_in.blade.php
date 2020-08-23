@extends('layouts.auth')
@section('content')
<div class="text-center mb-4">
  <img src="{{ asset(get_setting()->logo) }}" height="36" alt="">
</div>
       
       
<form class="card card-md" method="POST" action="{{ route('login') }}">
  @csrf
  <div class="card-body">
    <h2 class="mb-5 text-center">Login to your account</h2>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-2">
      <label class="form-label">
        Password
        <span class="form-label-description">
          <a href="{{ route('password.request') }}">I forgot password</a>
        </span>
      </label>
      <div class="input-group input-group-flat">
        <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">
                
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="mb-2">
      <label class="form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
        <span class="form-check-label">Remember me on this device</span>
      </label>
    </div>
    <div class="form-footer">
      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </div>
  </div>
</form>

@endsection