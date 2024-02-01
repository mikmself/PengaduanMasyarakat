@extends('dashboard.main.master')
@section('title','Create Data Complaint Category')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Data Complaint Category</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store-category') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{route('index-category')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
