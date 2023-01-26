@extends('layout.navbar')
@section('title')
categories
@endsection

@section('categories_active')
active
@endsection




@section('container')

<div class="row m-3">
<div class="card m-3 col-4" >
    <img src="assets/img/photos/unsplash-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>


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




</div>

@endsection

