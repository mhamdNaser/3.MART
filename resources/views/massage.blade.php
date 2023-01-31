@extends('layout.navbar')
@section('title', 'Massage')
@section('massage_active', 'active')

@section('button')
@endsection

@section('container')
 <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4 border-top border-4 border-primary">
                <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Message Table</h3>
                <table class="table align-items-center mb-0 shadow-lg">
                    <thead>
                        <tr>
                            <th  scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                user name
                            </th>
                            <th  scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                phone Number
                            </th>
                            <th  scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                e-mail
                            </th>
                            <th  scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                message
                            </th>
                            <th  scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                        <tr>
                            <td>
                                <p class="text-xs text-secondary mb-0 text-center">{{$message->Name}}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0 text-center">{{$message->phone_number}}</p>  
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0 text-center">{{$message->email}}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0 text-center">{{$message->message}}</p>
                            </td>
                            <td  class="text-xs text-secondary mb-0 text-center">
                                <form action="{{ route('contact.destroy',$message->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
