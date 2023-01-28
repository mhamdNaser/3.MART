@extends('layout.navbar')
@section('title', 'categories')

@section('categories_active')
active
@endsection
@section('container')
<link rel="stylesheet" href="{{ URL::asset('assets/css/category.css') }}">
<div class="row m-2">
  <div class="card m-3 col">
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
<table class="table  table-bordered">
  <thead>
      <tr>
          <th>Category_Image</th>
          <th>Category_Name</th>
          <th>Category_Description</th> 
          <th width="280px">Action</th>
      </tr>
  </thead>
  <tbody>
@foreach ($categories as $category)
          <tr>
                <td ><img style="width: 100px;" src="{{URL::asset("storage/categoryImg/$category->Category_Image")}}" ></td>
                <td>{{$category->Category_Name}}</td>
                <td>{{$category->Category_Description}}</td>
                <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Delete</button>
                  <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">edit </a>
                </form> 
              </td>
          </tr>
@endforeach
</tbody>
</table>
@endsection

