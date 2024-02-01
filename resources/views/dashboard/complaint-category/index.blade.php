@extends('dashboard.main.master')
@section('title','Data Complaint Category')
@section('content')
    <div class="card">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h5 class="card-header m-0">Data Complaint Category</h5>
            </div>
            <div class="col-auto">
                <a href="{{route('create-category')}}" class="btn btn-primary m-3">Create</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($complaintCategories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('edit-category',$category->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('destroy-category',$category->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
