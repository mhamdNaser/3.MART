@extends('layout.navbar')
@section('title')
categories
@endsection

@section('categories_active')
active
@endsection


 


@section('container')
<div class="row m-3">
  <div class="card m-3 col-4">
      <div class="card-body">
          <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <label for="Category_Name">Name</label>
              <br>
              <input type="text" name="Category_Name" id="Category_Name" class="form-control" value="{{ old('Category_Name', $category->Category_Name) }}">
              <br>
              <label for="Category_Description">Description</label>
              <br>
              <textarea type="text" name="Category_Description" id="Category_Description" class="form-control">{{ old('Category_Description', $category->Category_Description) }}</textarea>
              <br>
              <label for="Category_Image">Image</label>
              <br>
              <input type="file" name="Category_Image" id="Category_Image" class="form-control">
              <br>
              <input type="submit" value="Update" name="Update" class="btn btn-success">
              <br>
          </form>
      </div>
  </div>
</div>


@endsection

