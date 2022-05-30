 <!-- Start Footer Area -->
 <footer class="footer-area">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img src="{{ asset(get_setting()->logo) }}" alt="image"></a>
                        <p>{{ @footers()->footer_description }}</p>
                    </div>

                    <ul class="social">
                        @foreach (social_icons() as $item)                                        
                        <li> <a href="{{ @$item->url }}" target="_blank"><i class="fab {{ @$item->icon }} fa-lg"></i></a> </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Service</h3>

                    <ul class="quick-links-list">
                        @foreach (category() as $item)                            
                           <li><a href="{{ route('front.service',$item->slug) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>

                    <ul class="quick-links-list">
                        <li><a href="{{ route('front.about_us') }}">About Us</a></li>
                        <li><a href="{{ route('front.contact_us') }}">Contact Us</a></li>
                        <li><a href="{{ route('front.faq') }}">Faq's</a></li>
                        <li><a href="{{ route('front.Term_Conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('front.privacy_policy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contacts</h3>

                    <ul class="footer-contact-list">
                        <li><span>Address:</span> {{  @get_setting()->address }}</li>
                        <li><span>Email:</span> <a href="mailto:{{  @get_setting()->email }}"">{{  @get_setting()->email }}</a></li>
                        <li><span>Phone:</span> <a href="javascript:;">{{  @get_setting()->phone }}</a></li>
                        <li><span>Fax:</span> <a href="javascript:;">{{  @get_setting()->fax }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p> {!! get_setting()->copyright_text !!}</p>
                </div>

            </div>
        </div>
    </div>

    <div class="circle-map"><img src="{{ asset('/front/') }}/assets/img/circle-map.png" alt="image"></div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>