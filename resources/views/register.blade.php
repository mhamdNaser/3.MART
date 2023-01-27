@extends('layout.master')

@section('title', 'register')

@section('content')
    <div class="row m-5">
        <div class="col-lg-8 p-5 bg-white">
            <form class="form-group mx-sm-3 mb-2" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="ms-3">Register</h2>
                <div class="form-group col-lg-10 mb-3">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter User Name">
                </div>
                <div class="form-group col-lg-10 mb-3">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter User E-mail">
                </div>
                <div class="form-group col-lg-10 mb-3">
                    <label >phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter User Phone">
                </div>
                <div class="form-group col-lg-10 mb-3">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter User Password">
                </div>
                <div class="form-group col-lg-10 mb-3">
                    <label >Repeate Password</label>
                    <input type="password" class="form-control" name="repassword" placeholder="Enter User Password">
                    </div>
                <div class="form-group col-lg-10 mb-3">
                    <button type="submit" class="btn btn-dark ms-3">Add</button>
                </div>

            </form>
        </div>
    </div>
@endsection
