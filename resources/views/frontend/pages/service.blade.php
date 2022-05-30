@extends('frontend.layouts.app')
@section('title', 'Service')
@push('css')
@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Service</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<div class="shape3"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
</div>
<div id="content" class="no-top">
    <section class="features-area ptb-110 bg-f1f3f6 ">
        <div class="container">
            <div class="section-title">
                <h2>Our services</h2>
            </div>
    
            <div class="row">
                @foreach ($service as $item)                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{ route('front.service',$item->slug) }}">
                    <div class="service single-services-box">
                        <div class="icon">
                            <img src="{{ asset($item->image)}}" alt="image">
                        </div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    
        <div class="rectangle-shape1"><img src="{{ asset('/front/') }}/assets/img/rectangle-shape1.png" alt="image"></div>
        <div class="rectangle-shape2"><img src="{{ asset('/front/') }}/assets/img/rectangle-shape2.png" alt="image"></div>
        <div class="shape1"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
        <div class="shape2"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
        <div class="shape3"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
    </section>




</div>

@endsection
@push('js')
@endpush