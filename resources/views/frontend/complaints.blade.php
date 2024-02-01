@extends('frontend.main.master')
@section('title','Data Pengaduan Anda')
@section('content')
    <div class="card" style="margin-top: 1cm">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h5 class="card-header m-0">Data Complaints</h5>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->id }}</td>
                        <td>{{ $complaint->user->name }}</td>
                        <td>{{ $complaint->category->name }}</td>
                        <td>{{ $complaint->title }}</td>
                        <td>{{ $complaint->description }}</td>
                        <td>{{ $complaint->status }}</td>
                        <td>{{ $complaint->created_at }}</td>
                        <td>
                            <a href="{{route('detailComplaint',$complaint->id)}}" class="btn btn-primary">Lihat Progres</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
