@extends('dashboard.main.master')
@section('title', 'Edit Data User')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data User</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update-user', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $user->nik) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="telephone">Telephone</label>
                            <input type="text" id="telephone" class="form-control phone-mask" name="telephone" value="{{ old('telephone', $user->telephone) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('index-user') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
