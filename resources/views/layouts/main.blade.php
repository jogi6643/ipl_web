<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
        IPL | @yield('title', '')
        </title>
        <meta name="description" content="Base form control examples">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <!--font style-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,700&display=swap" rel="stylesheet">
        <!--slick slider css link -->
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }} ">


        <!-- add particular css for particular page -->
        @yield('styles')
    </head>
    <body class="js-body-content">
		@include('layouts.header')
        @yield('style')
		@yield('content')
		@include('layouts.footer')
        @yield('script')
    </body>
</html>