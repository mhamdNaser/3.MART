@extends('layout.navbar')
@section('title' ,'Users')
@section('user_active', 'active')

@section('container')
<div class="card m-3 col shadow-lg border-top border-4 border-primary">
    <div class="card-body row justify-content-center align-items-center">
        <h1>Update User</h1>
        <hr>
        <div class="col-lg-10 py-3">
            <form class="form-group mx-sm-3 mb-2" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label>User Name</label>
                <input type="text" class="form-control py-2 mb-3" name="name" value="{{$user->name}}" >
                <label >Email</label>
                <input type="email" class="form-control py-2 mb-3" name="email" value="{{$user->email}}">
                <label >Phone Number</label>
                <input type="text" class="form-control py-2 mb-3" name="phone" value="{{$user->Phone}}" >
                <label >Password</label>
                <input type="password" class="form-control py-2 mb-3" name="password" value="" >
                <label >User Image</label><br>
                <input type="file" class="form-control py-2 mb-3 py-2 mb-3" name="image">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection

