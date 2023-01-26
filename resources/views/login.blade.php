@extends('layout.master')

@section('title', 'login')

@section('content')
<div class="container-fluid">
    <br><br>
        <h1>Add User</h1>
        <br><br>
        <form class="form-group mx-sm-3 mb-2" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group col-md-4 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter User E-mail">
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter User Password">
            </div>
            <button type="submit" class="btn btn-dark">Add</button>
          </form>

</div>

@endsection
