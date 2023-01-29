@extends('layout.master')
@section('title', 'submit your booking')

@section('content')
{{-- user masseges --}}
<main class="m-2 p-8 w-full">
  <div>
      @if (session()->has('danger'))
          <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
              role="alert">
              <span class="font-medium">{{ session()->get('danger') }}!</span>
          </div>
      @endif
      @if (session()->has('success'))
          <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
              role="alert">
              <span class="font-medium">{{ session()->get('success') }}!</span>
          </div>
      @endif
      @if (session()->has('warning'))
          <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
              role="alert">
              <span class="font-medium">{{ session()->get('warning') }}!</span>
          </div>
      @endif
  </div>
</main>
  <!-- contact section -->
  <h1>Fill your information to complete your booking</h1>
  <form action="{{route("Reservation.store")}}" method="post" enctype="multipart/form-data" >
    {{-- <h1>{{$serviceid}}</h1> --}}
      @csrf
      <input type="hidden" name="serviceid" id="Category_Name" class="form-control" value={{$serviceid}}><br>
      <label >City</label><br>
      <input type="text" name="City" id="Category_Name" class="form-control"><br>
      <label >Street_Name</label><br>
      <input type="text" name="Street_Name" id="Category_Name" class="form-control"><br>
      <label >Building_Number</label><br>
      <input type="text" name="Building_Number" id="Category_Name" class="form-control"><br>
      {{-- time start --}}
      <label >Start_Time</label><br>
      <input type="datetime-local" name="Start_Time" id="Category_Name" class="form-control"><br>
      <input type="submit" value="submit" class="btn btn-success"><br>
  </form>
  <!-- end contact section -->

  @endsection
