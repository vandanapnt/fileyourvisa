<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>    
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    <!--<link rel="stylesheet" href="{{ mix('css/frontend.css') }}">-->
     <!-- Bootstrap CSS -->
     <link href="{{ 'frontcss/bootstrap.min.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/jquery.mCustomScrollbar.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/slick.css'}}" rel="stylesheet" />
    <link href="{{ 'frontcss/slick.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/font-awesome.min.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/common.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/style.css' }}" rel="stylesheet" />
    <link href="{{ 'frontcss/responsive.css' }}" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"/>

    @stack('after-styles')

    <x-google-analytics />
</head>

<body>

    @include('frontend.includes.header')

    <!--<x-preloader />-->

    
        @yield('content')
    

    @include('frontend.includes.footer')

</body>

<!-- Scripts -->
@stack('before-scripts')

<<!--script src="{{ mix('js/frontend.js') }}"></script>-->

@stack('after-scripts')

</html>