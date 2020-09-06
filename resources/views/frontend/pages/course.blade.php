@extends('frontend.layouts.app')
@section('title', 'Course details')
@push('css')

@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Course</li>
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
<div id="content" class="no-top">
    <section class="features-area ptb-110 bg-f1f3f6">
        <div class="container">
            <div class="section-title">
                <h2>Course Details</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="d-flex">
                            <h3>{{ $course->title}}</h3>
                            <a href="{{ route('front.cart',$course->slug)}}" class="btn btn-primary ml-auto">Enroll</a>
                        </div>
                    <hr>
                </div>
                <div class="col-lg-8">
                    
                    <div class="image pb-4">
                        <img src="{{ asset( $course->image )}}" alt="image">
                    </div>
                </div>
                    
                <div class="col-lg-4">
                        <div class="content course_custom">
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
                <div class="col-lg-8">
                    {!! $course->outline !!}
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text">About Trainer</p>
                          </div>
                        <img class="card-img-top" src="{{ asset( $course->trainer->avatar )}}" alt="{{$course->trainer->name}}">
                        <div class="card-body custom-card-body">
                          <p class="card-text">{{$course->trainer->name}}</p>
                        </div>
                      </div> 
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">About Mentor</p>
                          </div>
                        <img class="card-img-top" src="{{ asset( $course->mentor->avatar )}}" alt="{{$course->mentor->name}}">
                        <div class="card-body custom-card-body">
                          <p class="card-text">{{$course->mentor->name}}</p>
                        </div>
                      </div> 
            </div>

            </div>
           
        </div>
    
        <div class="rectangle-shape1"><img src="{{ asset('public/front/') }}/assets/img/rectangle-shape1.png" alt="image"></div>
        <div class="rectangle-shape2"><img src="{{ asset('public/front/') }}/assets/img/rectangle-shape2.png" alt="image"></div>
        <div class="shape1"><img src="{{ asset('public/front/') }}/assets/img/shape/1.svg" alt="image"></div>
        <div class="shape2"><img src="{{ asset('public/front/') }}/assets/img/shape/1.svg" alt="image"></div>
        <div class="shape3"><img src="{{ asset('public/front/') }}/assets/img/shape/1.svg" alt="image"></div>
    </section>



</div>

@endsection
@push('js')
@endpush