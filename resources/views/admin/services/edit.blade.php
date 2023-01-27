
@extends('layout.navbar')
@section('title')
Services
@endsection

@section('service_active')
active
@endsection

@section('container')

<body>
   
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Service.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        
        <form action="{{route('Service.update',$service->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card m-3 col-4">
              <div class="card-body">
                <input type="text" class="form-control" placeholder="Name" name="Service_Name"value="{{$service->Service_Name}}">
              </div>
              <div class="card-body">
              <select name="Category_id" id=""  class="form-control"value="{{$service->Category_id}}">
                            
@foreach($Category as $value)
<option value="{{$value->id}}">{{$value->Category_Name}}</option>
@endforeach

              
                
              </select>
            </div>
              <div class="card-body">
                <textarea class="form-control"  placeholder="Desc" name="Service_Description"value="{{$service->Service_Description}}"></textarea>
              </div>
              <div class="card-body">
                <input type="file" class="form-control" placeholder="Input" name="Service_Image"value="{{$service->Service_Image}}">
              </div>
              <div class="card-body">
                <input type="number" class="form-control" placeholder="Input" name="Service_Price"value="{{$service->Service_Price}}">
              </div>
              <div class="card-body">
                <input type="number" class="form-control" placeholder="Input" name="Service_Duration"value="{{$service->Service_Duration}}">
              </div>
              <button type="submit">update</button>
            </div>
          </div>
        </form>

</html> 
@endsection