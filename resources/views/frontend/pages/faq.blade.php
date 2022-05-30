@extends('frontendlayouts.app')
@section("title", "Faq's")
@push('css')
@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Faq's</li>
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

<section class="faq-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="faq-content">
                    <div class="section-title">
                        <h2>Questions</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="faq-accordion">
                    <ul class="accordion">
                        @if (@faqs())
                        @foreach (faqs() as $item)  
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                {{ $item->question_title }}
                            </a>

                            <p class="accordion-content">{{ $item->question_answer }}</p>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>

          
        </div>

    </div>
</section>
@endsection