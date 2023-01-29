@extends('layout.navbar')
@section('title', 'Services')
@section('service_active', 'active')

@section('container')
<div class="card m-3 col shadow-lg border-top border-4 border-primary">
    <div class="card-body row justify-content-center align-items-center">
        <h1>Edit Service</h1>
        <hr>
        <div class="col-lg-10 py-3">
            <form action="{{route('Service.update',$service->id)}}" method="post" enctype="multipart/form-data" class="form-group mx-sm-3 mb-2">
                @csrf
                @method("PUT")

                <input type="text" class="form-control py-2 mb-3" placeholder="Name" name="Service_Name"value="{{$service->Service_Name}}">
                <select name="Category_id" id=""  class="form-control py-2 mb-3"value="{{$service->Category_id}}">
                    @foreach($Category as $value)
                    <option value="{{$value->id}}">{{$value->Category_Name}}</option>
                    @endforeach
                </select>
                <textarea class="form-control py-2 mb-3"  placeholder="Desc" name="Service_Description"value="{{$service->Service_Description}}"></textarea>
                <input type="file" class="form-control py-2 mb-3" placeholder="Input" name="Service_Image"value="{{$service->Service_Image}}">
                <input type="number" class="form-control py-2 mb-3" placeholder="Input" name="Service_Price"value="{{$service->Service_Price}}">
                <input type="number" class="form-control py-2 mb-3" placeholder="Input" name="Service_Duration"value="{{$service->Service_Duration}}">
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection
