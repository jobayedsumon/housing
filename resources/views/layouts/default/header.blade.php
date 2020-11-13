<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="National Housing and Finance">
    <meta name="keywords" content="National Housing and Finance">
    <title>{{ config('sximo.cnf_appname') }} | @yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('uploads/images/backend-logo.png') }}" type="image/x-icon">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
{{--    <link href="{{ asset('theme') }}/css/bootstrap.min.css" rel="stylesheet">--}}
{{--        <link href="{{ asset('frontend/menukit/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('theme') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('theme') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('theme') }}/css/fontello.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="{{ asset('theme') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('theme') }}/css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/css/jquery.jConveyorTicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/css/simple-slider.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
{{--    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}
{{--    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>--}}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('frontend/menukit/jquery-2.2.4.min.js') }}"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('theme') }}/css/custom.css" rel="stylesheet">
    <link href="{{ asset('theme') }}/css/responsive.css" rel="stylesheet">


    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->

{{--    <script src="{{ asset('frontend/menukit/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>--}}

    <!-- Menukit CSS JS - add this style to your project -->
{{--    <link href="{{ asset('frontend/menukit/menukit.css') }}" rel="stylesheet" type="text/css"/>--}}
{{--    <script src="{{ asset('frontend/menukit/menukit.js') }}"></script>--}}
</head>


<body>





   @include('layouts.default.navigation_new')


