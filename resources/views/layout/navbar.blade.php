<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="assets/img/icons/icon-48x48.png" />
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

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
                        <img src="{{ asset('storage/userimage/'.Auth::user()->User_Image) }}" class="rounded-circle" height="100rem" width="100rem" alt="Auth Image">
                    @endauth
                </a>
                <hr class="text-light">
                <h4 class="text-light text-center">{{ strtoupper(Auth::user()->name) }}</h4>
            </div>
            <ul class="sidebar-nav text-center">
                <li class="sidebar-item @yield('Dash_active')">
                    <a class="sidebar-link" href="index">
                        <span class="align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('user_active')">
                    <a class="sidebar-link" href="{{route('user.index')}}">
                        <span class="align-middle">User</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('massage_active')">
                    <a class="sidebar-link" href="{{route('contact.index')}}">
                        <span class="align-middle">Massage</span>
                    </a>
                </li>
                <hr class="text-light py-2" style="width: 50%; margin: 0 auto">
                <li class="sidebar-item @yield('service_active') ">
                    <a class="sidebar-link" href="{{route('Service.index')}}">
                        <span class="align-middle">service</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('categories_active')">
                    <a class="sidebar-link" href="{{route('categories.index')}}">
                        <span class="align-middle">category</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('Reservation_active') ">
                    <a class="sidebar-link" href="{{route('Reservation.index')}}">
                        <span class="align-middle">reservation</span>
                    </a>
                </li>
            </ul>
            <div class="mt-4">
                <div class="sidebar-nav text-center mt-5">
                    <li class="sidebar-item @yield('Dashboard_active')">
                        <a class="sidebar-link" href="/">
                            Back To Site View
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="logout">Log Out</a>
                    </li>
                </div>
            </div>
            <hr class="text-light">
            <ul class="sidebar-nav navbar-dark d-flex justify-content-center">
                <li class="sidebar-item">
                    <a class="nav-link ps-3 pe-3 pb-2" href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link ps-3 pe-3 pb-2" href="" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link ps-3 pe-3 pb-2" href="" ><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link ps-3 pe-3 pb-2" href="" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
        var gradient = ctx.createLinearGradient(0, 0, 0, 225);
        gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales ($)",
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: window.theme.primary,
                    data: [
                        2115,
                        1562,
                        1584,
                        1892,
                        1587,
                        1923,
                        2566,
                        2448,
                        2805,
                        3438,
                        2917,
                        3327
                    ]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 1000
                        },
                        display: true,
                        borderDash: [3, 3],
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Chrome", "Firefox", "IE"],
                datasets: [{
                    data: [4306, 3801, 1689],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 75
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "This year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var markers = [{
                coords: [31.230391, 121.473701],
                name: "Shanghai"
            },
            {
                coords: [28.704060, 77.102493],
                name: "Delhi"
            },
            {
                coords: [6.524379, 3.379206],
                name: "Lagos"
            },
            {
                coords: [35.689487, 139.691711],
                name: "Tokyo"
            },
            {
                coords: [23.129110, 113.264381],
                name: "Guangzhou"
            },
            {
                coords: [40.7127837, -74.0059413],
                name: "New York"
            },
            {
                coords: [34.052235, -118.243683],
                name: "Los Angeles"
            },
            {
                coords: [41.878113, -87.629799],
                name: "Chicago"
            },
            {
                coords: [51.507351, -0.127758],
                name: "London"
            },
            {
                coords: [40.416775, -3.703790],
                name: "Madrid "
            }
        ];
        var map = new jsVectorMap({
            map: "world",
            selector: "#world_map",
            zoomButtons: true,
            markers: markers,
            markerStyle: {
                initial: {
                    r: 9,
                    strokeWidth: 7,
                    stokeOpacity: .4,
                    fill: window.theme.primary
                },
                hover: {
                    fill: window.theme.primary,
                    stroke: window.theme.primary
                }
            },
            zoomOnScroll: false
        });
        window.addEventListener("resize", () => {
            map.updateSize();
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
</script>
</body>
</html>
