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
                    <h2>Service</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('Service.create') }}"> Add New Service</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th>S.No</th> --}}
                    <th>service_name</th>
                    <th>categoryid</th>
                    <th>Service_Description</th>
                    <th>Service_Image</th> 
                    <th>Service_Price</th> 
                    <th>Service_Duration</th> 
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                      {{-- <td>{{ $service->id }}</td> --}}
                      <td>{{ $service->Service_Name }}</td>
                      <td>{{ $service->Category_id }}</td>
                      <td>{{ $service->Service_Description }}</td>
                        <td><img src="{{URL::asset("storage/serviceimage/$service->Service_Image")}}" alt="" srcset="" style="width:100px;"></td>
                        <td>{{ $service->Service_Price }}</td>
                        <td>{{ $service->Service_Duration }}</td>
                        <td>
                            <form action="{{ route('Service.destroy',$service->id) }}" method="Post">
                              <a class="btn btn-primary" href="{{route('Service.edit',$service->id) }}">Edit</a>
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
</body>
</html>
@endsection

