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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap core css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/animated.css') }}">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- responsive style -->
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- header section strats -->
    <header class="header-area wow slideInDown sticky-top bg-light" data-wow-duration="0.75s" data-wow-delay="0s">
        <nav class="navbar navbar-expand-md bg-dark custom_nav-container navbar-dark py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <span>
                        3MART
                    </span>
                </a>
                <span class="text-light d-none d-sm-block d-md-none">
                    @include('layout.authnav')
                </span>
                <button class="navbar-toggler border-0 outline-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item scroll-to-section">
                            <a class="nav-link pb-3 active" href="/#home">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item scroll-to-section">
                            <a class="nav-link pb-3" href="/#about"> About</a>
                        </li>
                        <li class="nav-item scroll-to-section">
                            <a class="nav-link pb-3" href="/#service">Services</a>
                        </li>
                        <li class="nav-item scroll-to-section">
                            <a class="nav-link pb-3" href="/#contact">Contact</a>
                        </li>
                        <li class="nav-item scroll-to-section">
                            <a class="nav-link pb-3" href="/#reviews">Reviews</a>
                        </li>
                        <li class="dropdown dropdown-center d-none d-md-block d-sm-none">
                            @include('layout.authnav')
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header section -->
