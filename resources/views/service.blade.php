@extends('layout.master')
@section('title', 'Contact')

@section('Services_active', 'active')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-lg-3">
        <form class="d-flex" style="margin-top: -2rem">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
    </div>
</div>
<div class="container py-5">
    <div class="row justify-content-center">
        @foreach ($collection as $item)
        <div class="col-lg-4 justify-content-center mb-3">
            <div class="col-md-12 col-xl-12">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <img class="p-4" style="height: 220px; width: 320px" src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" />
                            <a href="#!">
                            <div class="justify-content-center text-dark px-3">
                                <h5>{{$item->Service_Name}}</h5>
                                <div class="d-flex flex-row">
                                    <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    </div>
                                    <span></span>
                                </div>
                                <p class="text-dark mb-4 mb-md-0">
                                    {{$item->Service_Description}}
                                </p>
                            </div>
                            </a>
                            <div class="row border-sm-start-none">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mb-1 me-1">{{$item->Service_Price}} JD</h4>
                                </div>
                                <h6 class="text-success">{{$item->Service_Duration}} Hours</h6>
                                <div class="d-flex flex-column mt-1">
                                        @if (Route::has('login'))
                                        @auth
                                        <a class="btn btn-primary btn-sm" href="{{route('Reservation.show',$item->id)}}">Book Now</a>
                                        @else
                                        <a class="btn btn-primary btn-sm" href="{{route('Reservation.show',$item->id)}}">
                                        Book Now
                                        </a>
                                        @endif
                                        @endif
                                    {{-- <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                    Add to wishlist
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection




