<script src="{{ asset('/front/') }}/assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="{{ asset('/front/') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="{{ asset('/front/') }}/assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="{{ asset('/front/') }}/assets/js/owl.carousel.min.js"></script>
<!-- Parallax Min JS -->
<script src="{{ asset('/front/') }}/assets/js/parallax.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="{{ asset('/front/') }}/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select Min JS -->
<script src="{{ asset('/front/') }}/assets/js/jquery.nice-select.min.js"></script>
<!-- Mean Menu JS -->
<script src="{{ asset('/front/') }}/assets/js/jquery.meanmenu.js"></script>
<!-- Progress Circle Min JS -->
<script src="{{ asset('/front/') }}/assets/js/progresscircle.min.js"></script>
<!-- WOW Min JS -->
<script src="{{ asset('/front/') }}/assets/js/wow.min.js"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('/front/') }}/assets/js/form-validator.min.js"></script>
<!-- Contact Form Min JS -->
<script src="{{ asset('/front/') }}/assets/js/contact-form-script.js"></script>
<!-- Main JS -->
<script src="{{asset('/asset/')}}/dist/js/validate.js"></script>
<script src="{{asset('/js/toastr.js')}}"></script>
{!! Toastr::message() !!}
  <script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
      closeButton:true,
      progressBar:true,
    });
    @endforeach
    @endif
  </script>
<script src="{{ asset('/front/') }}/assets/js/main.js"></script>
<script src="{{ asset('/front/') }}/assets/js/custom.js"></script>
@stack('js')
<div class="fb-customerchat" page_id="439619546608481"></div>

</body>
</html>