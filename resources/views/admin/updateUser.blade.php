@extends('layout.navbar')
@section('title')
Users
@endsection

@section('user_active')
active
@endsection


@section('container')

<div class="container-fluid">
    <br><br>
        <h1>Update User</h1>
        <br><br>
        <form class="form-group mx-sm-3 mb-2" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group col-md-4 mb-3">
              <label>User Name</label>
              <input type="text" class="form-control" name="name" value="{{$user->name}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Phone Number</label>
              <input type="text" class="form-control" name="phone" value="{{$user->Phone}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" name="password" value="" >
            </div>
            <div class="form-group col-md-4 mb-3">
                <label >User Image</label><br>
                <input type="file" class="block w-full text-sm text-gray-500     file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm    file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"  name="image">
              </div>
            <button type="submit" class="btn btn-dark">Update</button>
          </form>

</div>

@endsection
