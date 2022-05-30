<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ @footers()->footer_description }}">
        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/animate.min.css">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/fontawesome.min.css">
        <!-- Box Icons Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/flaticon.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/owl.carousel.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/nice-select.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/meanmenu.css">
        <!-- Progress Circle Min CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/progresscircle.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('/css/toastr.css')}}">
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/responsive.css">
        <title>Honest Traders - @yield('title')</title>
        <meta name="author" content="{{get_setting()->site_name}}">

        <link rel="icon" href="{{asset(get_setting()->favicon)}}" type="image/x-icon"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('/front/') }}/assets/css/custom.css">
        @stack('css')
        <script>

            window.fbAsyncInit = function() {
              FB.init({
                appId            : '343842893310395',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
              });
            };
      
            (function(d, s, id){
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = "https://connect.facebook.net/en_US/sdk.js";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            
          </script>
    </head>