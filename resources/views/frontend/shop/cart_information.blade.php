@extends('frontendlayouts.app')
@section('title','Shipping information')
@push('css')
@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="shape3"><img src="{{ asset('public/front/') }}/assets/img/shape/1.svg" alt="image"></div>
</div>

<div class="custom_cart_info" id="content">
    <div class="container bg-white custom_tab_info">
        <form action="{{ route('cart.information_add',$course->id)}}" method="POST" >
            @csrf
        <div class="row p-5">
            <div class="col-lg-8">
                
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
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                        <label for="note">Note</label>
                        <textarea name="note" name="note" class="form-control" cols="10" rows="5" id="note"></textarea>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 mt-5">
                <div class="content course_custom">
                    <h3 class="text-white text-center">Product information</h3><hr>
                    <ul class="features-list">
                        <li class="w-100"><span> <strong>Date :</strong> {{ main_date_format(@$course->date) }} - {{ main_date_format(@$course->last_date) }}</span></li>
                        <li class="w-100"><span> <strong>Duration :</strong> {{ @$course->duration }}</span></li>
                        <li class="w-100"><span> <strong>Sessions :</strong>  {{ @$course->no_of_class }}</span></li>
                        <li class="w-100"><span> <strong>Schedule :</strong>  {{ @$course->class_schedule }}</span></li>
                        <li class="w-100"><span> <strong>Hours :</strong>  {{ @$course->total_hour }}</span></li>
                        <li class="w-100"><span> <strong>Venue :</strong>  {{ @$course->venue }}</span></li><hr>
                        <p class="pl-5 text-white"> Tk.{{@$course->price}}  </p>
                    </ul>
                </div> 
            </div>
            <div class="col-lg-12">
                <div class="modal-footer">
                    <a href="{{url('/')}}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </div>

            </div>
        </div>
    </form>
    </div>
</div>
@endsection