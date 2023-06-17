@extends('layout.navbar')
@section('title', 'Dashboard')
@section('Dash_active', 'active')

<link rel="stylesheet" href="css/cart.css">

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="py-3 h1 text-primary text-center pb-2 ms-2 fw-bolder">
                            3MART
                        </h2>
                        @auth

                        <hr class="text-dark">
                        <div class="px-2">
                            <div class="py-1">
                                <h5 class="h5 card-title d-inline">ID :</h5>
                                <p class="h6 text-dark d-inline">{{ strtoupper(Auth::user()->id) }}</p>
                            </div>
                            <div class="py-1">
                                <h5 class="h5 card-title d-inline">Name :</h5>
                                <p class="h6 text-dark d-inline">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="py-1">
                                <h5 class="h5 card-title d-inline">Email :</h5>
                                <p class="h6 text-dark d-inline">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="py-1">
                                <h5 class="h5 card-title d-inline">Phone :</h5>
                                <p class="h6 text-dark d-inline">{{ Auth::user()->Phone }}</p>
                            </div>
                            <div class="py-1 text-center">
                                <hr/>
                                <h5 class="h5 card-title d-inline">Create At</h5><br>
                                <p class="h6 text-dark d-inline mt-2">{{ Auth::user()->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xl-9">
                <div class="card">
                    <div class="container">
                        <div class="row p-3">
                            <h3 class="text-center fw-bolder fs-1 py-3 text-primary">Chart</h3>
                            <hr>
                            <div class="col-md-4 col-xl-6">
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h2 class="text-right text-white py-2"><i class="fa fa-users f-left"></i><span class="ms-2">users</span></h2>
                                        <h6 class="m-b-20"><hr></h6>
                                        <p class="m-b-0">3MART Customer<span class="f-right">{{DB::table("users")->count();}}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-6">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h2 class="text-right text-white py-2"><i class="fa fa-gears f-left"></i><span class="ms-2">services</span></h2>
                                        <h6 class="m-b-20"><hr></h6>
                                        <p class="m-b-0">3MART Services<span class="f-right">{{DB::table("services")->count();}}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-6">
                                <div class="card bg-c-yellow order-card">
                                    <div class="card-block">
                                        <h2 class="text-right text-white py-2"><i class="fa fa-th-large f-left"></i><span class="ms-2">categories</span></h2>
                                        <h6 class="m-b-20"><hr></h6>
                                        <p class="m-b-0">Service Category<span class="f-right">{{DB::table("categories")->count();}}</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-6">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h2 class="text-right text-white py-2"><i class="fa fa-opencart f-left"></i><span class="ms-2">orders</span></h2>
                                        <h6 class="m-b-20"><hr></h6>
                                        <p class="m-b-0">Completed Orders<span class="f-right">{{DB::table("reservations")->count();}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth
@endsection
