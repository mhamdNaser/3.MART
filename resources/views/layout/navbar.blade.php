<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="assets/img/icons/icon-48x48.png" />
        <!-- bootstrap core css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <link rel="canonical" href="https://demo-basic.adminkit.io/" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>@yield('title')</title>

        <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <div class="container-fluid text-center p-3">
                    <a class="sidebar-brand" href="#">
                        @auth
                            <img src="{{ asset('storage/userimage/' . Auth::user()->User_Image) }}" class="rounded-circle"
                                height="100rem" alt="Auth Image">
                        @endauth
                    </a>
                    <h4 class="text-light text-center">{{ strtoupper(Auth::user()->name) }}</h4>
                </div>
                <ul class="sidebar-nav text-center">
                    <li class="sidebar-item @yield('Dash_active')">
                        <a class="sidebar-link" href="index">
                            <span class="align-middle fs-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item @yield('user_active')">
                        <a class="sidebar-link" href="{{ route('user.index') }}">
                            <span class="align-middle fs-4">User</span>
                        </a>
                    </li>
                    <li class="sidebar-item @yield('massage_active')">
                        <a class="sidebar-link" href="{{ route('contact.store') }}">
                            <span class="align-middle fs-4">Massage</span>
                        </a>
                    </li>
                    <hr class="text-light py-2" style="width: 50%; margin: 0 auto">
                    <li class="sidebar-item @yield('service_active') ">
                        <a class="sidebar-link" href="{{ route('Service.index') }}">
                            <span class="align-middle fs-4">service</span>
                        </a>
                    </li>
                    <li class="sidebar-item @yield('categories_active')">
                        <a class="sidebar-link" href="{{ route('categories.index') }}">
                            <span class="align-middle fs-4">category</span>
                        </a>
                    </li>
                    <li class="sidebar-item @yield('Reservation_active') ">
                        <a class="sidebar-link" href="{{ route('Reservation.index') }}">
                            <span class="align-middle fs-4">reservation</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-4">
                    <div class="sidebar-nav text-center mt-5 pt-5">
                        <li class="sidebar-item @yield('Dashboard_active')" style="visibility: hidden;">
                            <a class="sidebar-link p-5" href="/">

                            </a>
                        </li>
                        <li class="sidebar-item @yield('Dashboard_active')">
                            <a class="sidebar-link fs-4" href="/">
                                Back To Site View
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link fs-4" href="{{ route('logout') }}">Log Out</a>
                        </li>
                    </div>
                </div>
                <hr class="text-light">
                <ul class="sidebar-nav navbar-dark d-flex justify-content-center text-light">
                    <li class="sidebar-item">
                        <a class="nav-link ps-3 pe-3 pb-2" href=""><i class="fa fa-facebook"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="nav-link ps-3 pe-3 pb-2" href=""><i class="fa fa-twitter"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="nav-link ps-3 pe-3 pb-2" href=""><i class="fa fa-youtube"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="nav-link ps-3 pe-3 pb-2" href=""><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            @auth
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle">
                        <i class="hamburger align-self-center"></i>
                    </a>
                    <ul class="navbar-nav navbar-align">
                        @yield('button')
                    </ul>
                </nav>
            @endauth
            <main class="content">
                <div class="container-fluid p-0">
                    @yield('container')
                </div>
            </main>
        </div>
    </div>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
</body>

</html>
