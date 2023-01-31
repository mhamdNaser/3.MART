@extends('layout.master')
@section('title', 'Contact')

@section('Services_active', 'active')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-lg-3">
        <form class="d-flex" style="margin-top: -2rem" action="{{ route('search') }}" method="POST">
          @csrf
            <input class="form-control me-2" type="text" placeholder="Search" name="search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
  </div>
<section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        {{-- ///////////////////////////// --}}

        @foreach ($collection as $item)
        <div class="col-sm-6 col-md-4 mx-auto" >
          <div class="box">
            <div class="img-box">
              <img src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" alt=""/>
            </div>
            <div class="detail-box" style="min-height: 14em">
              <h5>
                {{$item->Service_Name}}
              </h5>
              <h6>
                Service Price : <span class="text-primary fw-bolder">{{$item->Service_Price}} JD</span>
              </h6>
              <h6>
                Service Duration : <span class="text-success fw-bolder">{{$item->Service_Duration}} Hours</span>
              </h6>
              <hr>
              <p style="font-size: 14px">
                {{$item->Service_Description}}
              </p>
            </div>
            <div class="btn-box" >
              {{-- create ---------edit --}}
              @if (Route::has('login'))
              @auth
              <a href="{{route('Reservation.show',$item->id)}}">
                Book Now
              </a>
              @else
              <a href="/login">
                Book Now
              </a>
              @endif
              @endif
            </div>
          </div>
        </div>
        @endforeach
{{-- /////////////////////////////////////////////////// --}}
    </div>
  </div>
</section>
@endsection
{{-- <section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                    class="w-100" />
                <a href="#!">
                    <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                    </div>
                    <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                </a>
                </div>
                <div class="card-body">
                <a href="" class="text-reset">
                    <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                    <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
  </section> --}}

