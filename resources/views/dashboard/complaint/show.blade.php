@extends('dashboard.main.master')
@section('title','Detail Data Aduan')
@section('content')
    <div class="bg-white p-3 rounded">
        <div class="form-outline mb-4">
            <label class="form-label" for="title">Title</label>
            <input type="text" id="title" class="form-control" value="{{$complaint->title}}" disabled/>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" id="description" rows="4" disabled>{{$complaint->description}}</textarea>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="image">Image</label>
            <img src="{{ $complaint->getFirstMediaUrl('complaint_image', 'thumb') }}" alt="{{$complaint->title}} Image" id=""/>
        </div>
    </div>

    <form action="{{route('store-response')}}" class="bg-white p-3" method="post">
        @csrf
        <div class="form-outline mb-4">
            <input type="hidden" name="complaint_id" value="{{$complaint->id}}">
            <input type="hidden" name="admin_id" value="{{auth()->user()->id}}">
            <label class="form-label" for="reponse">Response</label>
            <select name="status" class="form-control">
                <option value="waiting" selected>Waiting</option>
                <option value="processed">Processed</option>
            </select>
            <textarea class="form-control" id="reponse" rows="4" name="response"></textarea>
            <button type="submit" class="btn btn-primary mt-3 mb-5">Kirim Tangapan</button>
        </div>
    </form>
@endsection
