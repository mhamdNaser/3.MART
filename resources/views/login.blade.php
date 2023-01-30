@extends('layout.master')
@section('title', 'login')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
            <img src="/images/register.png" alt="" srcset="" >
        </div>
        <div class="col-lg-6">
            <div class="me-3 shadow-lg border-top border-4 border-primary rounded-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 py-3">
                        <form class="form-group mx-sm-3 mb-2" action="{{route('go.login')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="ms-3">Login</h3>
                            <hr>
                            <label >Email</label>
                            <input type="email" class="form-control py-2 mb-3" id="email" name="email" placeholder="Please Enter Your E-mail">
                            <label >Password</label>
                            <input type="password" class="form-control py-2 mb-3" id="password" name="password" placeholder="Please Enter Your Password">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
