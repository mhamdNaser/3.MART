@extends('layout.master')
@section('title', 'Contact')

@section('Services_active', 'active')

@section('content')
<div class="container py-5">
    @foreach ($collection as $item)
    <div class="row justify-content-center mb-3">
        <div class="col-md-12 col-xl-10">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-2 col-xl-2 mb-4 mb-lg-0">
                            <div>
                                <img style="height: 120px; width: 120px" src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" />
                                <a href="#!">
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 ">
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
                            <div class="mt-1 mb-0 text-muted small">
                                <span></span>
                            </div>
                            <div class="mb-2 text-muted small">
                                <span></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                {{$item->Service_Description}}
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">{{$item->Service_Price}} JD</h4>
                                {{-- <span class="text-danger"><s>$20.99</s></span> --}}
                            </div>
                            <h6 class="text-success">{{$item->Service_Duration}} Hours</h6>
                            <div class="d-flex flex-column mt-4">
                                <button type="button" style="visibility: hidden"></button>
                                    {{-- create ---------edit --}}
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
@endsection




