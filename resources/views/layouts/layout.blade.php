<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Career Clinic | @yield('title')</title>
<link rel="icon" href="{{ asset('front_assets/img/favicon.png') }}" sizes="35x35" type="image/png">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/color3.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/new-style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
@yield('style')
</head>
<body>
<main>
@include('layouts.header')        

@yield('content')


@include('layouts.footer')
</main><!-- Main Wrapper -->
<script src="{{ asset('front_assets/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/slick.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script src="{{ asset('front_assets/assets/js/custom-scripts.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/modal.js') }}"></script>
@yield('script')
</body> 
</html>