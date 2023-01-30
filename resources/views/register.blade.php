@extends('layout.master')
@section('title', 'register')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="m-5 col shadow-lg border-top border-4 border-primary rounded-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 py-3">
                        <form class="form-group mx-sm-3 mb-2" action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="form-group mx-sm-3 mb-2">
                            @csrf
                            <h3 class="ms-3">Register</h3>
                            <hr>
                            <label>User Name</label>
                            <input type="text" class="form-control py-2 mb-3" name="name"  placeholder="Please Enter Your Name">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >phone</label>
                                    <input type="text" class="form-control py-2 mb-3" name="phone" placeholder="Please Enter Your Phone">
                                </div>
                                <div class="col-lg-6">
                                    <label >Email</label>
                                    <input type="email" class="form-control py-2 mb-3" name="email" placeholder="Please Enter Your E-mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Password</label>
                                    <input type="password" class="form-control py-2 mb-3" name="password" placeholder="Please Enter Your Password">
                                </div>
                                <div class="col-lg-6">
                                    <label >Repeat Password</label>
                                    <input type="password" class="form-control py-2 mb-3" name="repassword" placeholder="Please Repeat Your Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign UP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="ms-5" src="/images/register.png" alt="" srcset="" >
        </div>
    </div>
</div>
@endsection


