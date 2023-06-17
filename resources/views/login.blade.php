@extends('layout.master')
@section('title', 'login')
@section('content')
    <div class="d-flex login_section">
        <div class="col-lg-4">
            <img class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" src="/images/login.png" alt="" srcset="">
        </div>
        <div class="col-lg-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 py-5">
                    <form class="form-group" action="{{ route('go.login') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0s">Login</h3>
                        <hr>
                        <label class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">Email</label>
                        <input type="email" class="form-control py-2 mb-3 wow fadeInRight" data-wow-duration="1.5s"
                            data-wow-delay="0.5s" id="email" name="email" autocomplete="off"
                            placeholder="Please Enter Your E-mail">
                        <label class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.75s">Password</label>
                        <input type="password" class="form-control py-2 mb-3 wow fadeInRight" data-wow-duration="1.5s"
                            data-wow-delay="0.75s" id="password" name="password" autocomplete="off"
                            placeholder="Please Enter Your Password">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
