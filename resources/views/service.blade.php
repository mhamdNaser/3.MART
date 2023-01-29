@extends('layout.master')
@section('title', 'Contact')

@section('Services_active', 'active')

@section('content')
  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        {{-- ///////////////////////////// --}}
        @foreach ($collection as $item)
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box" style="min-height: 30em">
            <div class="img-box">
              <img src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                {{$item->Service_Name}}
              </h5>
              <h6>
                Service Price : {{$item->Service_Price}} JD
              </h6>
              <h6>
                Service Duration : {{$item->Service_Duration}} Hours
              </h6>
              <p>
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
              <a href="{{route('Reservation.show',$item->id)}}">
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
