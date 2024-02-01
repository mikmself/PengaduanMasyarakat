@extends('frontend.main.master')
@section('title','Form Pengaduan')
@section('content')
    <form action="{{route('store-complaint')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2 class="my-4 text-2xl font-semibold text-center text-gray-700">Form Laporan</h2>
                            <div class="mb-3">
                                <label for="category_id" class="form-label text-sm">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label text-sm">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label text-sm">Description</label>
                                <textarea class="form-control" rows="8" id="description" name="description" placeholder="Isi laporan Anda dan sertakan lokasi dengan jelas">{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="complaint_image" class="form-label text-sm">Foto</label>
                                <input type="file" class="form-control" id="complaint_image" name="complaint_image" value="{{ old('image') }}">
                            </div>

                            <button type="submit" class="btn btn-danger btn-block">Laporkan</button>
                            <a href="/" class="btn btn-primary btn-block">Kembali ke halaman utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
