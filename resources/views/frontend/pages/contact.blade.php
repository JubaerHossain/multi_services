@extends('frontendlayouts.app')
@section('title', 'Contact Us')
@push('css')
@endpush
@section('content')
    
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
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
   <!-- Start Contact Area -->
   <section class="contact-area ptb-110">
    <div class="container">
        <div class="section-title">
            <span>Message Us</span>
            <h2>Drop us Message for any Query</h2>
        </div>

        <div class="contact-form">
            <form id="contact_form" action="{{ route('front.contact_info') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" data-error="Please enter your name" placeholder="Name">
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" data-error="Please enter your email" placeholder="Email">
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone_number" data-error="Please enter your number" class="form-control" placeholder="Phone">
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="msg_subject" class="form-control" data-error="Please enter your subject" placeholder="Subject">
                            
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" data-error="Write your message" placeholder="Your Message"></textarea>
                            
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="contact-info">
            <div class="contact-info-content">
                <h3>Contact us by Phone Number or Email Address</h3>
                <h2>
                    <a href="tel:{{  @get_setting()->phone }}">{{  @get_setting()->phone }}</a>
                    <span>OR</span>
                    <a href="mailto:{{  @get_setting()->email }}">{{  @get_setting()->email }}</a>
                </h2>

                <ul class="social">
                    @foreach (social_icons() as $item)                                        
                    <li> <a href="{{ @$item->url }}"><i class="fab {{ @$item->icon }} fa-lg"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
@push('js')
@endpush