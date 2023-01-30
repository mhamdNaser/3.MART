@extends('layout.master')
@section('title', 'Contact')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-4">
            <h3>profile</h3>
          </nav>
        </div>
      </div>
      @auth
      <div class="row mb-5">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ asset('storage/userimage/'.Auth::user()->User_Image) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;height:150px">
              <h5 class="my-3">{{ Auth::user()->name }}</h5>
              {{-- <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div> --}}
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->Phone }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->Phone }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Created At</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->created_at }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
                <div class="col-lg-8 p-4">
                        <div class="row">
                            Show Reservation
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  @endauth
@endsection
