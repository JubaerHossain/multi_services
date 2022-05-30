<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{get_setting()->site_name}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{get_setting()->site_name}} is best selling interior design website">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="{{get_setting()->site_name}}">

    <link rel="icon" href="{{asset(get_setting()->favicon)}}" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/animate.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/magnific-popup.css" type="text/css">	
    {{-- <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/jquery.countdown.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/style.css" type="text/css">	
	<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/twentytwenty.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/bg.css" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/colors/green.css" type="text/css" id="colors">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/color.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/fonts/et-line-font/style.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/toastr.css')}}">
    @stack('css')
	
	<!-- custom font -->
	<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/font-style-2.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/custom.css" type="text/css">
    <style>
        #toast-container>.toast-error{
        background-image : red !important; 
     }
    </style>
</head>