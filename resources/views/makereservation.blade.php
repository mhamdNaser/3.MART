@extends('layout.master')
@section('title', 'submit your booking')

@section('content')
{{-- user masseges --}}
<main class="row justify-content-center align-items-center">
  <div class="col-lg-6">
    <div class="text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">
            @if (session()->has('danger'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Massege :</strong>{{ session()->get('danger') }}!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Massege :</strong>{{ session()->get('success') }}!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            @endif
            @if (session()->has('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Massege :</strong>{{ session()->get('warning') }}!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </span>
    </div>
  </div>
</main>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 my-5 pb-3">
            <div class="me-3 shadow-lg border-top border-4 border-primary rounded-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 py-3">
                        <form class="form-group mx-sm-3 mb-2" action="{{route("Reservation.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center">Fill your information to complete your booking</h3>
                            <hr>
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
                            <input type="submit" value="submit" class="btn btn-primary"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
