@extends('dashboard.main.master')
@section('title','Create Data Admin')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Data Admin</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store-admin') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="email" class="form-control" name="email" >
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="telephone">Telephone</label>
                            <input type="text" id="telephone" class="form-control phone-mask" name="telephone">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{route('index-admin')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
