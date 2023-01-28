@extends('layout.navbar')
@section('title')
Users
@endsection
@section('user_active')
active
@endsection
@section('button')
<br><br><br>
<a href="{{route('user.create')}}"><button type="button" class="btn btn-dark" >Add User</button></a>
@endsection
@section('container')
 <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Users Table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th  scope="row"
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Details
                                    </th>
                                    <th  scope="row"
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Role
                                    </th>
                                    <th  scope="row"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone Number
                                    </th>
                                    <th class="text-secondary  text-center"  scope="row">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{URL::asset("storage/userimage/$user->User_Image")}}"
                                                    class="avatar avatar-sm me-3 border-radius-lg">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                                <p class="text-xs text-secondary mb-0">{{$user->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">User</p>
                                        
                                    </td>
                                    
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{$user->Phone}}</span>
                                    </td>
                                 
                                    <td class="align-middle row">
                                        <div class="col-sm-4 me-5">
                                            <form action="{{route('user.destroy', $user->id)}}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="{{route('user.edit', $user->id)}}"><button type="submit" class="btn btn-warning">Edit</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
