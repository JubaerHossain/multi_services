@extends('frontend.layouts.app')
@section('title', 'About Us')
@push('css')
@endpush
@section('content')
    
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
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

<section class="about-area ptb-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{ asset( @about_company()->image) }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <h2>{{ @about_company()->title }}</h2>
                    <p>{!! @about_company()->description !!}</p>
                </div>
            </div>
        </div>

        
    </div>
</section>
 <!-- Start Team Area -->
 <section class="team-area ptb-110">
    <div class="container">
        <div class="section-title">
            <h2>Our Team</h2>
        </div>
        <div class="row" id="_team_add_page">
        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Feedback Area -->
<section class="feedback-area ptb-110">
    <div class="container">
        <div class="section-title">
            <h2>Clients Feedback</h2>
        </div>
    </div>

    <div class="feedback-slides owl-carousel owl-theme">
        @foreach ($data['testmonial'] as $item)            
            <div class="single-feedback-item">
                <div class="feedback-desc">
                   <p>{{ $item->description }}</p>
                </div>

                <div class="client-info">
                    <img src="{{ asset($item->image) }}" alt="image">
                    <h3>{{ $item->name }}</h3>
                    <span>{{ $item->designation }}</span>
                </div>
            </div>
        @endforeach

    </div>
</section>
<!-- End Feedback Area -->



@endsection
@push('js')
<script src="{{ asset('public/frontend/js/index.js') }}"></script>
@endpush