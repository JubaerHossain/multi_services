@extends('frontend.layout.master')
@section('title','Shipping information')
@push('css')
@endpush
@section('content')
    

<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Shipping information</h1>
                <ul class="crumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li>Shipping information</li>
                    @if (@$data['service'])                                    
                        <li class="sep">/</li>
                        <li>{{@$data['service']}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="custom_cart_info" id="content">
    <div class="container bg-white custom_tab_info">
        <form action="{{ route('cart.information_add')}}" method="POST" >
            @csrf
        <div class="row p-5">
            <div class="col-lg-8">                
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" onclick="allSubmit(1)" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Guest</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" onclick="allSubmit(2)" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New User</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" onclick="allSubmit(3)" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Login</a>
                  </div>
                </nav>
                
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="g_name" class="form-control" id="name" value="{{ old('g_name') }}" placeholder="Enter name">
                                @error('g_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="g_email" class="form-control" id="exampleInputEmail1" value="{{ old('g_email') }}" placeholder="Enter email">
                                @error('g_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="g_mobile" class="form-control" id="mobile" value="{{ old('g_mobile') }}" placeholder="Enter mobile">
                                @error('g_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                <label for="company">Compnay</label>
                                <input type="text" name="g_company" class="form-control" id="company" value="{{ old('g_company') }}" placeholder="Enter company">
                                @error('g_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                <label for="address">Adress</label>
                                <input type="text" name="g_address" class="form-control" id="address" value="{{ old('g_address') }}" placeholder="Enter address">
                                @error('g_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                <label for="note">Note</label>
                                <textarea name="note" name="g_note" class="form-control" cols="10" rows="5" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" onkeyup="emailCheck(this.value)" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" placeholder="Enter email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1"  placeholder="Enter password confirmation">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile" value="{{ old('mobile') }}" placeholder="Enter mobile">
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="company">Compnay</label>
                                    <input type="text" name="company" class="form-control" id="company" value="{{ old('company') }}" placeholder="Enter company">
                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Adress</label>
                                    <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}" placeholder="Enter address">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="note">Gender</label>
                                     <select name="gender" class="form-control">
                                         <option value="0">Male</option>
                                         <option value="1">Female</option>
                                         <option value="2">Others</option>
                                     </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row" id="login">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email"  id="lo_email"  class="form-control" id="email" placeholder="Enter email">
                                    <label for="email" class="error" id="email_check_label"></label>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password"  id="lo_password" class="form-control" id="password" placeholder="Enter password">
                                </div>
                                <div class="form-group text-center">
                                    <a onclick="Login()" class="btn btn-primary ml-auto">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 mt-5">
                <div class="product_info">
                    <h3>Product information</h3>
                    <h4>Total Price : Tk.<b>{{ Cart::subtotal() }}</b></h4>
                </div>
            </div>
            <input type="text" hidden name="_tab_check" id="_tab_check" value="1">
            <div class="col-lg-12">
                <div class="modal-footer">
                    <a href="{{url('/')}}" class="btn btn-secondary">Continue Shopping</a>
                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </div>

            </div>
        </div>
    </form>
    </div>
</div>
@endsection