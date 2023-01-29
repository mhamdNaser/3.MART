@extends('layout.master')
@section('title', 'login')
@section('content')
<div class="container-fluid">
    <br><br>
        <h1>LOGIN</h1>
        <br><br>
        <form class="form-group mx-sm-3 mb-2" action="{{route('go.login')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group col-md-4 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your E-mail">
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Please Enter Your Password">
            </div>
            <button type="submit" class="btn btn-dark">Login</button>
          </form>
</div>
<br>
<br>
@endsection
