@extends('layout.navbar')
@section('title', 'categories')
@section('categories_active', 'active')

@section('button')
    <a href="{{route('categories.create')}}"><button type="button" class="btn btn-dark" >Add New Category</button></a>
@endsection

@section('container')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4 border-top border-4 border-primary">
                <h3 class="p-3 text-capitalize text-dark text-center fw-bold">Categories Table</h3>
                <table class="table align-items-center mb-0 shadow-lg">
                    <thead>
                        <tr>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                Category_Image
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                Category Name
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                Category Description
                            </th>
                            <th scope="row" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td class="align-middle text-center">
                                <img src="{{URL::asset("storage/categoryImg/$category->Category_Image")}}" class="avatar avatar-sm me-3 border-radius-lg">
                            </td>
                            <td class="align-middle text-center">{{$category->Category_Name}}</td>
                            <td class="align-middle text-center">{{$category->Category_Description}}</td>
                            <td class="align-middle text-center">
                                <div class="d-flex">
                                    <div class="p-1  border border-0">
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                    </div>
                                    <div class="p-1  border border-0">
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">edit </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

