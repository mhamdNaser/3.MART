@extends('layout.master')
@section('ContactUs_active', 'active')
@section('title', 'Contact')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 my-5 pb-3">
            <div class="me-3 shadow-lg border-top border-4 border-primary rounded-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 py-3">
                        <form class="form-group mx-sm-3 mb-2" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="ms-3">Contact Us</h3>
                            <hr>
                            <input type="text" class="form-control py-2 mb-3" placeholder="Name" />
                            <input type="text" class="form-control py-2 mb-3" placeholder="Phone Number" />
                            <input type="email" class="form-control py-2 mb-3" placeholder="Email" />
                            <textarea type="text" class="message-box form-control py-2 mb-3" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

