@extends('layout.master')
@section('title', 'Contact')
@section('Services_active', 'active')

@section('content')
    <section class="service_section">
        <div class="d-flex justify-content-center">
            <div class="col-lg-3">
                <form class="d-flex" style="margin-top: -2rem" action="{{ route('search') }}" method="POST">
                    @csrf
                    <input class="form-control me-2" type="text" placeholder="Search" name="search" required autocomplete="on">
                </form>
            </div>
        </div>
        <div class="heading_container heading_center p-5">
            <h2> Our Services </h2>
        </div>
        <div class="row justify-content-center align-items-center">
            {{-- ///////////////////////////// --}}
            @foreach ($collection as $item)
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ URL::asset("storage/serviceimage/$item->Service_Image") }}" alt="" />
                        </div>
                        <div class="detail-box" style="min-height: 14em">
                            <h5>
                                {{ $item->Service_Name }}
                            </h5>
                            <h6>
                                Service Price : <span class="text-primary fw-bolder">{{ $item->Service_Price }}
                                    JD</span>
                            </h6>
                            <h6>
                                Service Duration : <span class="text-success fw-bolder">{{ $item->Service_Duration }}
                                    Hours</span>
                            </h6>
                            <hr>
                            <p style="font-size: 14px">
                                {{ $item->Service_Description }}
                            </p>
                        </div>
                        <div class="btn-box">
                            {{-- create ---------edit --}}
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('Reservation.show', $item->id) }}">
                                        Book Now
                                    </a>
                                @else
                                    <a href="/login">
                                        Book Now
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                {{-- /////////////////////////////////////////////////// --}}
            </div>
        </section>
    @endsection
