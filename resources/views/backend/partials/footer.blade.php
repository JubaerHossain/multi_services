<footer class="footer footer-transparent">
    <div class="container">
      <div class="row text-center align-items-center flex-row-reverse">
        <div class="col-lg-auto ml-lg-auto">
          <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item"><a href="{{asset('/asset/')}}/docs/index.html" class="link-secondary">Documentation</a></li>
            <li class="list-inline-item"><a href="{{asset('/asset/')}}/faq.html" class="link-secondary">FAQ</a></li>
            <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
          {!! get_setting()->copyright_text !!}
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- Libs JS -->
@include('backend.partials.view_modal')

<script src="{{asset('/asset/')}}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/asset/')}}/dist/js/popper.min.js"></script>
{{-- <script src="{{asset('/asset/')}}/dist/libs/jquery/dist/jquery.slim.min.js"></script>
<script src="{{asset('/asset/')}}/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{asset('/asset/')}}/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('/asset/')}}/dist/libs/peity/jquery.peity.min.js"></script> --}}

<script src="{{ asset('/asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('/asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/asset/js/multi_image.js') }}"></script>
<script src="{{ asset('/asset/js/gijgo.min.js') }}"></script>
<script src="{{ asset('/asset/') }}/dist/libs/selectize/dist/js/standalone/selectize.min.js"></script>
<!-- Tabler Core -->
<script src="{{asset('/asset/')}}/dist/js/tabler.min.js"></script>
<script src="{{asset('/asset/')}}/dist/js/validate.js"></script>
<script src="{{asset('/js/sweet-alert.js')}}"></script>
<script src="{{asset('/asset/')}}/dist/js/main.js"></script>
@stack('js')
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
  {{-- <script>
    $(document).ready(function () {
        CKEDITOR.replace('textarea');
        CKEDITOR.replace('side');
    });
    </script> --}}
  <script>
    document.body.style.display = "block"
  </script>

</body>
</html>
