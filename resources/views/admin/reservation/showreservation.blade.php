<script>
    function apper(id) {
        // console.log("good");
        let ele_id = id;
        document.getElementById(ele_id).style.display = "initial"
    }

    function showmessage(state) {
        let st = state
        console.log(state);
        if (st == 'Rejected') {
            document.getElementById('state_reservation').setAttribute("title", "test")
            document.getElementById('message_reason').style.display = "block"
        } else(
            document.getElementById('message_reason').style.display = "none"
        )
    }

    function hidemessage() {
        document.getElementById('message_reason').style.display = "none"
    }

    function hidemessage1(id) {
        let ele_id = id;
        document.getElementById(ele_id).style.display = "none"
    }
</script>
@extends('layout.navbar')
@section('title', 'Reservations')
@section('Reservation_active', 'active')

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
                <div class="card my-4 border-top border-4 border-primary">
                    <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Reservation Table</h3>
                    <table class="table align-items-center mb-0 shadow-lg">
                        <thead>
                            <tr>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Service
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    User
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Location
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Reservation Time
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Total_Price
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Status
                                </th>
                                <th scope="row"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Reservations as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $item['Service'] }}</td>
                                    <td class="align-middle text-center">{{ $item['User'] }}</td>
                                    <td class="align-middle text-center">{{ $item['location'] }}</td>
                                    <td class="align-middle text-center">{{ $item['Time'] }}</td>
                                    <td class="align-middle text-center" id="state_reservation">{{ $item['Total_Price'] }}
                                    </td>
                                    <td class="align-middle text-center"><button class="state_reservation"
                                            onclick="showmessage('{{ $item['Status'] }}')">{{ $item['Status'] }}</button>
                                    </td>
                                    @if ($item['Status'] == 'Pending')
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <div class="p-1  border border-0">
                                                    <a href="{{ route('Reservation.edit', $item['id'] . ' Confirmed') }}"><button
                                                            class="btn btn-primary">Confirm</button></a>
                                                </div>
                                                <div class="p-1  border border-0">
                                                    <button class="btn btn-danger" onclick="apper({{ $item['id'] }})">
                                                        Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                <div class="reject_reason" id="{{ $item['id'] }}">
                                    <div class="canclebutton">
                                        <p class="text-danger p-0 m-0">Reject Reason</p>
                                        <button onclick="hidemessage1({{ $item['id'] }})"><i
                                                class="fa fa-close"></i></button>
                                    </div>
                                    <form action="{{ route('Reservation.destroy', $item['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div colspan="4">
                                            <input type="text" name="resone" id="Category_Name"
                                                class="form-control w-100" placeholder="Reasons for refusal">
                                        </div>
                                        <div>
                                            <input type="hidden" name="id" id="Category_Name" class="form-control"
                                                value="{{ $item['id'] }}">
                                            <button class="btn float-start btn-light text-danger mb-2" type="submit">Reject</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="message_reason" class="message_reason">
                                    <div class="canclebutton">
                                        <p class="text-danger p-0 m-0">Reject Reason Message</p>
                                        <button class="btn btn-light text-danger" onclick="hidemessage()"><i
                                            class="fa fa-close"></i></button>
                                    </div>
                                    <p class="fs-3">{{ $item['Reject_Reason'] }}</p>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
