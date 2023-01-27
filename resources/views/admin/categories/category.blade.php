@extends('layout.navbar')
@section('title')
categories
@endsection

@section('categories_active')
active
@endsection


 


@section('container')
<link rel="stylesheet" href="{{ URL::asset('assets/css/category.css') }}">
<div class="row m-2">

  <div class="card m-3 col-11">
    <div class="card-body">
         
      <form action="{{route('categories.index')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="Category_Name">Name</label></br>
        <input type="text" name="Category_Name" id="Category_Name" class="form-control"></br>
        <label for="Category_Description">Description</label></br>
        <textarea type="text" name="Category_Description" id="Category_Description" class="form-control"></textarea></br>
        <label for="Category_Image">Image</label></br>
        <input type="file" name="Category_Image" id="Category_Image" class="form-control"></br>
        <input type="submit" value="Save" name="save" class="btn btn-success"></br>
    </form>
  </div>
</div>
</div>




@foreach ($categories as $category)

<div class="card-grid m-3 col-4">
  <div class="card card-shadow">
    <div class="card-header card-image">
      <img src="{{URL::asset("storage/categoryImg/$category->Category_Image")}}" />
    </div>
    <div class="card-body1">
      <h5 class="card-title"> {{$category->Category_Name}}</h5>
      <p class="card-text">{{$category->Category_Description}}</p>
    </div>
    <div class="card-footer">
      <form action="{{ route('categories.destroy', $category->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">edit </a>
      </form>
    </div>
  </div>
  </div>




@endforeach 



@endsection

