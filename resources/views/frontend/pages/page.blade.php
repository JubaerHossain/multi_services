@extends('frontend.layouts.app')
@section('title', $data->title)
@push('css')
@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{$data->title}}</li>
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
            <div class="col-lg-12">
                {!! $data->content !!}
            </div>
        </div>
    </div>
</section>

@endsection