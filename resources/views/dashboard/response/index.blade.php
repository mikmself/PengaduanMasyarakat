@extends('dashboard.main.master')
@section('title','Data User')
@section('content')
    <div class="card">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h5 class="card-header m-0">Data Responses</h5>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Complaint</th>
                    <th>Admin</th>
                    <th>Response</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($responses as $response)
                    <tr>
                        <td>{{ $response->id }}</td>
                        <td>{{ $response->complaint->title }}</td>
                        <td>{{ $response->admin->name }}</td>
                        <td>{{ $response->response }}</td>
                        <td>{{ $response->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
