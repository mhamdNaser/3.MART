@extends('layout.navbar')
@section('title', 'categories')
@section('categories_active', 'active')


@section('container')
<div class="card m-3 col shadow-lg border-top border-4 border-primary">
    <div class="card-body row justify-content-center align-items-center">
        <h1>Edit Category</h1>
        <hr>
        <div class="col-lg-10 py-3">
            <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data" class="form-group mx-sm-3 mb-2">
                @csrf
                @method('PUT')
                <label for="Category_Name">Name</label>
                <input type="text" name="Category_Name" id="Category_Name" class="form-control py-2 mb-3" value="{{ old('Category_Name', $category->Category_Name) }}">
                <label for="Category_Description">Description</label>
                <textarea type="text" name="Category_Description" id="Category_Description" class="form-control py-2 mb-3">{{ old('Category_Description', $category->Category_Description) }}</textarea>
                <label for="Category_Image">Image</label>
                <input type="file" name="Category_Image" id="Category_Image" class="form-control py-2 mb-3">
                <input type="submit" value="Update" name="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
