@extends('layout.navbar')
@section('title', 'Users')
@section('user_active', 'active')

@section('button')

    <a href="{{ route('user.create') }}"><button type="button" class="btn btn-dark">Add New User</button></a>

@endsection

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4 border-top border-4 border-primary">
                    <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Users Table</h3>
                    <table class="table align-items-center mb-0 shadow-lg">
                        <thead>
                            <tr>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Details
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">
                                    Role
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">
                                    Phone Number
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  text-center">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ URL::asset("storage/userimage/$user->User_Image") }}"
                                                    class="avatar avatar-sm me-3 border-radius-lg rounded-circle">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0 text-center">{{ $user->Role }}</p>

                                    </td>

                                    <td class="align-middle text-center">
                                        <p class="text-xs text-secondary mb-0 text-center">{{ $user->Phone }}</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1  border border-0">
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger show-alert-delete-box">Delete</button>
                                                </form>

                                            </div>
                                            <div class="p-1  border border-0">
                                                <a href="{{ route('user.edit', $user->id) }}"><button type="submit"
                                                        class="btn btn-primary">Edit</button></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
