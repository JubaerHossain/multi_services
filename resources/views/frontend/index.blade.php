@extends('frontend.layouts.app')
@section('title','Leading It Company')
@section('content')
 <!-- Start Main Banner Area -->
 <div class="main-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="main-banner-content">
                    <h1>{{ @footers()->title }}</h1>
                    <p>{{ @footers()->header_description }}</p>

                    <div class="btn-box">
                        <a href="{{ @footers()->button_url }}" class="btn btn-primary">{{ @footers()->button_name }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="main-banner-image">
                    <img src="{{ asset(@footers()->banner_img) }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="banner-shape"><img src="{{ asset('/front/') }}/assets/img/banner-shape.png" alt="image"></div>
    <div class="banner-white-shape"><img src="{{ asset('/front/') }}/assets/img/white-shape.png" alt="image"></div>
    <div class="shape3"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
    <div class="shape2"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Services Area -->

<section class="features-area ptb-110 bg-f1f3f6 ">
    <div class="container">
        <div class="section-title">
            <h2>Our services</h2>
        </div>

        <div class="row">
            @foreach (service() as $item)                
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
<!-- End Services Area -->

<!-- Start Features Area -->
<section class="domain_search">
    <div class="forms-main">
         <div class="container">

              <div id="response"></div>
             <div id="continue"> <div class="btn-group"><a href="http://localhost/hostingbilling-14/codecanyon-26531743-hosting-billing-domain-and-hosting-invoicing-system/hosting_billing_v1.4/hostingbilling-new-installation/cart/hosting_packages" class="btn btn-warning">Add Hosting</a><a href="http://localhost/hostingbilling-14/codecanyon-26531743-hosting-billing-domain-and-hosting-invoicing-system/hosting_billing_v1.4/hostingbilling-new-installation/cart/domain_only" class="btn btn-info">Order domain name only</a></div> </div>
     
             <div class="grid grid-column-2">
                  <div class="column">
                      <h3>Search for a domain name</h3>							
                  </div>	 
                  <div class="column">
                      <form action="#" class="search_form" method="post" id="search_form" _lpchecked="1">
                          <input name="domain" type="hidden" id="domain">
                          <input name="price" type="hidden" id="price">
                          <input name="type" type="hidden" id="type">
      
                          <input id="searchBar" type="email" name="email" placeholder="Enter your domain name...">
                          <span class="input-group-btn">

                          <select class="btn btn-default" name="ext" id="ext">
                                                          <option value="info">.info</option>                       
                                                          <option value="in">.in</option>                       
                                                          <option value="com">.com</option>                       
                                                          <option value="vip">.vip</option>                       
                                                          <option value="net">.net</option>                       
                                                          <option value="mobi">.mobi</option>                       
                              
                          </select>

                          </span>
                          <button type="button" id="Transfer">Transfer</button>
                          <button type="button" id="btnSearch">Domain</button>
                          <img id="checking" src="http://localhost/hostingbilling-14/codecanyon-26531743-hosting-billing-domain-and-hosting-invoicing-system/hosting_billing_v1.4/hostingbilling-new-installation/resource/images/checking.gif">
          
                      </form>
                      <p>
                                                  .info<sub>$8.00</sub>                      
                                                  .in<sub>$8.00</sub>                      
                                                  .com<sub>$18.00</sub>                      
                                                  .vip<sub>$12.00</sub>                      
                                                  .net<sub>$19.00</sub>                      
                                                  </p>
                  </div>
              </div>
         </div>
  
     </div>
</section>
<!-- End Features Area -->

<!-- Start How It Works Area -->
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
                            {!! $item->features !!}
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
<!-- End How It Works Area -->

<!-- Start Why Choose Us Area -->
<section class="why-choose-us-area ptb-110">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="section-title">
                    <h2 class="text-center">Why Choose Honest Traders?</h2>
                </div>
            </div>
        </div>
            
        <div class="row align-items-center" id="_choose">
        @foreach (Choose() as $item)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-choose-us-box">
                    <div class="title">
                        <div class="icon">
                            <i class='{{ $item->icon }}'></i>
                        </div>
                        <h3>{{ $item->title }}</h3>
                    </div>

                    <div class="content">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
           </div>
        @endforeach

        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Why Choose Us Area -->

<!-- Start Resources Area -->
<section class="blog-area ptb-110 bg-f1f3f6">
    <div class="container">
        <div class="section-title">
            <h2>Available Courses</h2>
        </div>
    <div class="row">
       @foreach (course() as $item)    
        <div class="col-lg-4 col-md-6">       
                <div class="single-resources-box">
                    <div class="resources-image">
                        <a href="{{ route('pages.course',$item->slug)}}"><img src="{{ asset($item->image) }}" alt="image"></a>
                    </div>

                    <div class="resources-content update_card">
                        <h3><a href="{{ route('pages.course',$item->slug)}}">{{ $item->title }}</a></h3>
                     <p>{{Str::limit($item->desciption, 200, ' ...') }}</p>

                        <div class="card">
                            <div class="card-body">
                                <div class="course-time">
                                    <div class="date mb-2">
                                        <i class="far fa-calendar-alt"></i>
                                        <span class="pl-2">{{ main_date_format($item->created_at) }}</span>
                                    </div>
                                    <div class="hrs mb-2">
                                        <i class="far fa-clock"></i>
                                        <span>Total Hours: {{ $item->total_hour }}</span>
                                    </div>
                                    <div class="hrs">
                                        <i class="far fa-money-bill-alt"></i>
                                        <span>TK. {{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">                        
                                <a href="{{ route('pages.course',$item->slug)}}" class="btn btn-primary w-100"><i class="fa fa-eye"></i> Enroll Now</a>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
       @endforeach
    </div>
</div>

</section>
<!-- End Resources Area -->
 {{-- start portfolio --}}
 <section class="blog-area ptb-110 bg-f1f3f6">
    <div class="container">
        <div class="section-title">
            <h2>Our Portfolio</h2>
        </div>

        <div class="row">
            @foreach (portfolio() as $item)                
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="entry-thumbnail">
                           <a href="{{ @$item->url }}" target="_blank"><img src="{{ asset($item->image) }}" alt="image"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
 {{-- end portfolio --}}
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

<!-- Start Blog Area -->
<section class="blog-area ptb-110 bg-f1f3f6">
    <div class="container">
        <div class="section-title">
            <h2>Our Recent Story</h2>
        </div>

        <div class="row">
            @foreach ($data['blogs'] as $item)                
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="entry-thumbnail">
                            <a href="#"><img src="{{ asset($item->image) }}" alt="image"></a>
                        </div>

                        <div class="entry-post-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">{{ $item->user->name }}</a></li>
                                    <li>{{ main_date_format($item->created_at) }}</li>
                                </ul>
                            </div>

                            <h3><a href="#">{{ \Str::limit($item->title,50) }}</a></h3>
                            <p>{{\Str::limit($item->summary, 120)}}</p>
                            <a href="#" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="resources-area mb-5 mt-5">
    <div class="container">
        <div class="section-title">
            <h2>Our Partner</h2>
        </div>
    </div>
    
    <div class="resources-slides owl-carousel owl-theme custom_partnar">  
        @foreach ($data['clients'] as $item)            
            <div class="single-partnar">
                <a href="#"><img src="{{ asset($item->image)}}" alt="image"></a>
            </div>
        @endforeach     
    </div>
</section>
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