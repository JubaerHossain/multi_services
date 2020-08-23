
            <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ url('/') }}"><img src="{{ asset(get_setting()->logo) }}" class="logo-small" alt=""></a>
                            <br> {{ @footers()->footer_description }}
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_recent_post">
                                <h3>Footer Menu</h3>
                                <ul>
                                    <li><a href="{{ route('front.about_us') }}">About Us</a></li>
                                    <li><a href="{{ route('front.contact_us') }}">Contact Us</a></li>
                                    <li><a href="{{ route('front.faq') }}">Faq's</a></li>
                                    <li><a href="{{ route('front.Term_Conditions') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('front.privacy_policy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3>Contact Us</h3>
                            <div class="widget widget-address">
                                <address>
                                    <span>{{  @get_setting()->address }}</span>
                                    <span><strong>Phone:</strong>{{  @get_setting()->phone }}</span>
                                    <span><strong>Fax:</strong>{{  @get_setting()->fax }}</span>
                                    <span><strong>Email:</strong><a href="mailto:c{{  @get_setting()->email }}">c{{  @get_setting()->email }}</a></span>
                                    <span><strong>Web:</strong><a href="#">{{  url('/') }}</a></span>
                                </address>
                                <h4 class="text-white">Connect with</h4>
                                <div class="social-icons">
                                    @foreach (social_icons() as $item)                                        
                                       <a href="{{ @$item->url }}"><i class="fa {{ @$item->icon }} fa-lg"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                {!! get_setting()->copyright_text !!}
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('public/frontend/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/jpreLoader.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/jquery.isotope.min.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/easing.js"></script>
    {{-- <script src="{{ asset('public/frontend/') }}/js/jquery.flexslider-min.js"></script> --}}
    <script src="{{ asset('public/frontend/') }}/js/jquery.scrollto.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/owl.carousel.js"></script>
    {{-- <script src="{{ asset('public/frontend/') }}/js/jquery.countTo.js"></script> --}}
    <script src="{{ asset('public/frontend/') }}/js/classie.js"></script>
    {{-- <script src="{{ asset('public/frontend/') }}/js/video.resize.js"></script> --}}
    {{-- <script src="{{ asset('public/frontend/') }}/js/validation.js"></script> --}}
    <script src="{{ asset('public/frontend/') }}/js/wow.min.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/jquery.stellar.min.js"></script>
	<script src="{{ asset('public/frontend/') }}/js/enquire.min.js"></script>	
    {{-- <script src="{{ asset('public/frontend/') }}/js/jquery.plugin.js"></script> --}}
	{{-- <script src="{{ asset('public/frontend/') }}/js/jquery.countdown.js"></script>	 --}}
    {{-- <script src="{{ asset('public/frontend/') }}/js/countdown-custom.js"></script> --}}
    <script src="{{ asset('public/frontend/') }}/js/designesia.js"></script>	
	<script src="{{ asset('public/frontend/') }}/js/jquery.event.move.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/jquery.twentytwenty.js"></script>	
    <script src="{{asset('public/asset/')}}/dist/js/validate.js"></script>
    <script src="{{ asset('public/frontend/') }}/js/custom.js"></script>    
    <script src="{{asset('public/js/sweet-alert.js')}}"></script>

    @stack('js')
    <script src="{{asset('public/js/toastr.js')}}"></script>
    {!! Toastr::message() !!}
     <script>
             function addToCart(){
                   
                    $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                        console.log(data);
                        if (data.error) {
                            setTimeout(function () {
                                toastr.error(data.error, 'Error!', {
                                    timeOut: 2000
                                });
                            }, 500);
                        } else {
                            setTimeout(function () {
                                toastr.success(data.success, 'Success!', {
                                    timeOut: 2000
                                });
                            }, 500);
                            
                        }
                        $('#staticBackdrop').modal('hide');
                        $("#head_qty").text(data.cart);
                    }
                });
                }
     </script>

	<script>

    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>

</body>
</html>