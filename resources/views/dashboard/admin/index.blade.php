@extends('dashboard.main.master')
@section('title','Data Admin')
@section('content')
    <div class="card">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h5 class="card-header m-0">Data Admin</h5>
            </div>
            <div class="col-auto">
                <a href="{{route('create-admin')}}" class="btn btn-primary m-3">Create</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->nik}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->telephone}}</td>
                        <td>
                            <a href="{{route('edit-admin',$admin->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('destroy-admin',$admin->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
