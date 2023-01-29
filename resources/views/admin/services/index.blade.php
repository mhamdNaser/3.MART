@extends('layout.navbar')
@section('title', 'Services')
@section('service_active', 'active')

@section('button')
    <a href="{{route('Service.create')}}"><button type="button" class="btn btn-dark" >Add New Service</button></a>
@endsection

@section('container')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4 border-top border-4 border-primary">
                <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Service Table</h3>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table align-items-center mb-0 shadow-lg">
                    <thead>
                        <tr>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                service_name
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Category Id
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Service Description
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Service_Image
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Service_Price
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Service_Duration
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td class="align-middle text-center">{{ $service->Service_Name }}</td>
                            <td class="align-middle text-center">{{ $service->Category_id }}</td>
                            <td class="align-middle text-center">{{ $service->Service_Description }}</td>
                            <td class="align-middle text-center">
                                <img src="{{URL::asset("storage/serviceimage/$service->Service_Image")}}" class="avatar avatar-sm me-3 border-radius-lg">
                            </td>
                            <td class="align-middle text-center">{{ $service->Service_Price }}</td>
                            <td class="align-middle text-center">{{ $service->Service_Duration }}</td>
                            <td class="align-middle text-center">
                                <div class="d-flex">
                                    <div class="p-1  border border-0">
                                    <form action="{{ route('Service.destroy',$service->id) }}" method="Post">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                                <div class="p-1  border border-0">
                                    <a class="btn btn-primary" href="{{route('Service.edit',$service->id) }}">Edit</a>
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
@endsection
