<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>@yield('title')</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('css/style.css') }}"  rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ URL::asset('css/responsive.css') }}"  rel="stylesheet" />

</head>
<body>
  <div class="hero_area bg-light">
    <!-- header section strats -->
    <header class="header_section sticky-top bg-light">
        <div class="header_top">
                @include('layout.authnav')
        </div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg custom_nav-container ps-3 pe-3 pt-2">
            <a class="navbar-brand  pb-2 ms-2" href="/">
                <span>
                3MART
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="nav-item @yield('home_active')">
                    <a class="nav-link pb-3" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @yield('Services_active')">
                    <a class="nav-link pb-3" href="/service">Services</a>
                </li>
                <li class="nav-item @yield('About_active')">
                    <a class="nav-link pb-3" href="/about" > About</a>
                </li>
                <li class="nav-item @yield('ContactUs_active')">
                    <a class="nav-link pb-3" href="{{route('contact.create')}}">Contact Us</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header section -->
