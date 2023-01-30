@extends('layout.navbar')
@section('title', 'categories')
@section('categories_active', 'active')

@section('container')
<div class="row m-2">
    <div class="card m-3 col shadow-lg border-top border-4 border-primary">
        <div class="card-body row justify-content-center align-items-center">
            <h1>Add New Category</h1>
            <hr>
            <div class="col-lg-10 py-3">
                <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <label for="Category_Name">Name</label>
                    <input type="text" name="Category_Name" id="Category_Name" class="form-control py-2 mb-3">
                    <label for="Category_Description">Description</label>
                    <textarea type="text" name="Category_Description" id="Category_Description" class="form-control py-2 mb-3"></textarea>
                    <label for="Category_Image">Image</label>
                    <input type="file" name="Category_Image" id="Category_Image" class="form-control py-2 mb-3">
                    <input type="submit" value="Save" name="save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
