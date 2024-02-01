@extends('dashboard.main.master')
@section('title','Data User')
@section('content')
    <div class="card">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h5 class="card-header m-0">Data User</h5>
            </div>
            <div class="col-auto">
                <a href="{{route('create-user')}}" class="btn btn-primary m-3">Create</a>
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
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nik}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>
                            <a href="{{route('edit-user',$user->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('destroy-user',$user->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
