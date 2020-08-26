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
                    <h3>{{ $course->title}}</h3>
                    <hr>
                    {!! $course->desciption !!}
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