@extends('frontend.layouts.app')
@section('title', 'Service Details')
@push('css')
@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Service Details</li>
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
    <section class="services-details-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{ $service->title}}</h3>
                    <hr>
                    {!! $service->description !!}
                </div>

            </div>
        </div>
    </section>


    <section class="how-it-works-area ptb-110">
        <div class="container">
            <div class="section-title mb-5">
                <h2>PRICING PLAN</h2>
            </div>
    
            <div class="row ptb-110">
                @foreach (price_plan() as $item)                
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header text-center">
                                <h3>{{ $item->title }}</h3>
                            </div>
    
                            <div class="price text-center">
                                TK.{{ $item->price }} <span>/m</span>
                            </div>                   
    
                            <ul class="pricing-features">
                                 @php echo $item->features @endphp
                            </ul>
    
                            <div class="buy-btn text-center mt-3 w-100">
                                <a href="#" class="btn btn-primary custom w-100">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</div>

@endsection
@push('js')
<script>
    var i = 0;
        $('.single-pricing-box').each(function(){
            i++;
            if(i == 2)
            {
                $(this).addClass("price-active"); 
            }
        })
</script>
@endpush