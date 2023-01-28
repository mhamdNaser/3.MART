@extends('layout.master')

@section('title', 'Contact')

@section('content')

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        {{-- ///////////////////////////// --}}
        @foreach ($collection as $item)
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                {{$item->Service_Name}}
              </h5>
              <h6>
                {{$item->Service_Price}} JD
              </h6>
              <h6>
                {{$item->Service_Duration}} Hours
              </h6>
              <p>
                {{$item->Service_Description}}
              </p>
            </div>
            <div class="btn-box">
              {{-- create ---------edit --}}
              <a href="{{route('Reservation.show',$item->id)}}">
                Book Now
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Electrical
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
            <div class="btn-box">
              <a href="">
                View More
              </a>
            </div>
          </div>
        </div>
{{-- /////////////////////////////////////////////////// --}}
    </div>
  </section>

  <!-- end service section -->

@endsection
