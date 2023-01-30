@extends('layout.navbar')
@section('title', 'Users')
@section('user_active', 'active')

@section('container')
<div class="card m-3 col shadow-lg border-top border-4 border-primary">
    <div class="card-body row justify-content-center align-items-center">
        <h1>Add New User</h1>
        <hr>
        <div class="col-lg-10 py-3">
            <form class="form-group mx-sm-3 mb-2" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Status</label>
                <select name="Role" id="Role"   class="form-control py-2 mb-3">
                    <option value="user" disabled>USER TYPE</option>
                    <option value="user">User</option>
                    <option value="Admin">admin</option>
                </select>
                <label>User Name</label>
                <input type="text" class="form-control py-2 mb-3" name="name"  placeholder="Enter User Name">
                <label >Email</label>
                <input type="email" class="form-control py-2 mb-3" name="email" placeholder="Enter User E-mail">
                <label >Phone Number</label>
                <input type="text" class="form-control py-2 mb-3" name="phone" placeholder="Enter User Phone Number">
                <label >Password</label>
                <input type="password" class="form-control py-2 mb-3" name="password" placeholder="Enter User Password">
                <label >User Image</label><br>
                <input type="file"  class="form-control py-2 mb-3" name="image">
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection

