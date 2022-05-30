
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.7
* @link https://github.com/tabler/tabler
* Copyright 2018-2019 The Tabler Authors
* Copyright 2018-2019 codecalm.net Paweł Kuna
* Licensed under MIT (https://tabler.io/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{get_setting()->site_name}} - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="{{asset(get_setting()->favicon)}}" type="image/x-icon"/>
    <!-- CSS files -->
    <link rel="stylesheet" href="{{asset('/asset/css/font-awesome.min.css')}}"/>
    <link href="{{asset('/asset/')}}/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="{{asset('/asset/')}}/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="{{asset('/asset/')}}/dist/css/tabler-buttons.min.css" rel="stylesheet"/>
    <link href="{{asset('/asset/')}}/dist/css/demo.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/toastr.css')}}">
    <link href="{{ asset('/asset/') }}/dist/libs/selectize/dist/css/selectize.css" rel="stylesheet"/>
    <script src="{{ asset('/asset/js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{asset('/asset/css/gijgo.min.css')}}"/>
    @if (@get_color())
      <link rel="stylesheet" href="{{asset('/asset/css/'.get_color().'.css')}}"/>        
    @else        
      <link rel="stylesheet" href="{{asset('/asset/css/1.css')}}"/>
    @endif

    @stack('css')
    <link rel="stylesheet" href="{{asset('/asset/css/custom.css')}}"/>
    <style>

    </style>
  </head>