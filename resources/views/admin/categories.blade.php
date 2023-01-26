@extends('layout.navbar')
@section('title')
categories
@endsection

@section('categories_active')
active
@endsection




<<<<<<< HEAD
@section('contenar')
=======
@section('container')
>>>>>>> 35064157c8bcdcc9d83cdde08e1cfaf108881c38

<div class="row m-3">
<div class="card m-3 col-4" >
    <img src="assets/img/photos/unsplash-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

<<<<<<< HEAD
  @foreach($Category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td></td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
  <div class="card m-3 col-4" >
    <img src="assets/img/photos/unsplash-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card m-3 col-4">
    <div class="card-body">
      <input type="text" class="form-control" placeholder="Name">
    </div>
    <div class="card-body">
      <textarea class="form-control"  placeholder="Desc"></textarea>
    </div>
    <div class="card-body">
      <input type="file" class="form-control" placeholder="Input">
    </div>
  </div>
=======

  <div class="card m-3 col-4" >
    <img src="assets/img/photos/unsplash-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">RTBRTYBYTRBYBT</h5>
      <p class="card-text">BRYBRTTB</p>
      <a href="#" class="btn btn-primary ">Go</a>
      <a href="#" class="btn btn-primary">Go </a>
    </div>
  </div>


  <div class="card m-3 col-4">
  <div class="card-body">

    <form action="categories" method="post" enctype="multipart/form-data" >
      @csrf
      <label for="Category_Name">Name</label></br>
      <input type="text" name="Category_Name" id="Category_Name" class="form-control"></br>
      <label for="Category_Description">Description</label></br>
      <textarea type="text" name="Category_Description" id="Category_Description" class="form-control"></textarea></br>
      <label for="Category_Image">Image</label></br>
      <input type="file" name="Category_Image" id="Category_Image" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
  </form>

</div>
</div>




>>>>>>> 35064157c8bcdcc9d83cdde08e1cfaf108881c38
</div>

@endsection

