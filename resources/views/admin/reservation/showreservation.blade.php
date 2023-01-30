<script>
    function apper(id){
        // console.log("good");
        var ele_id = id;
        if (document.getElementById(ele_id).style.display === "initial"){
            document.getElementById(ele_id).style.display = "none";
        }else {
            document.getElementById(ele_id).style.display = "initial";
        }
    }
</script>
@extends('layout.navbar')
@section('title', 'Reservations')
@section('Reservation_active', 'active')

{{-- @section('button')
    <a href="{{route('Reservation.create')}}"><button type="button" class="btn btn-dark" >Add New Reservation</button></a>
@endsection --}}

@section('container')

    <main class="m-2 p-8 w-full">
        <div>
            @if (session()->has('danger'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('danger') }}!</span>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('success') }}!</span>
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('warning') }}!</span>
                </div>
            @endif
        </div>
    </main>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Reservation Table</h3>
                <table class="table align-items-center mb-0 shadow-lg">
                    <thead>
                        <tr>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Service
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                User
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Location
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Reservation Time
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Total_Price
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Reject_Reason
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Reservations as $item)
                        <tr>
                            <td class="align-middle text-center">{{$item["Service"]}}</td>
                            <td class="align-middle text-center">{{$item["User"]}}</td>
                            <td class="align-middle text-center">{{$item["location"]}}</td>
                            <td class="align-middle text-center">{{$item["Time"]}}</td>
                            <td class="align-middle text-center">{{$item["Total_Price"]}}</td>
                            <td class="align-middle text-center">{{$item["Status"]}}</td>
                            <td class="align-middle text-center">{{$item["Reject_Reason"]}}</td>
                            <td class="align-middle text-center">
                                {{-- <div class="d-flex"> --}}
                                    {{-- <div class="p-1  border border-0">
                                        <form action="{{route('Reservation.destroy',$item["id"])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <tr>
                                            <td colspan="4">
                                            <input type="text" name="City" id="Category_Name" class="form-control">
                                            </td>
                                            </tr>
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div> --}}
                                    <div class="p-1  border border-0">
                                        <a href="{{route('Reservation.edit',$item["id"]." Confirmed")}}"><button class="btn btn-primary">Confirm</button></a>
                                    </div>
                                    <div class="p-1  border border-0" >
                                        <button class="btn btn-danger" onclick="apper({{$item['id']}})"> Reject </button>
                                    </div>
                                {{-- </div> --}}
                            </td>
                        </tr>
                        <tr id="{{$item["id"]}}" style="display: none">
                        <form action="{{route('Reservation.destroy',$item['id'])}}" method="post">
                            @csrf
                            @method('DELETE')

                            <td colspan="4">
                            <input type="text" name="resone" id="Category_Name" class="form-control" style="width: 200px" placeholder="Reasons for refusal">
                            </td>
                            <td>
                            <input type="hidden" name="id" id="Category_Name" class="form-control" value="{{$item['id']}}">
                            <button class="btn btn-danger" type="submit">Reject</button>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
