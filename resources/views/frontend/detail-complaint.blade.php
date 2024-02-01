@extends('frontend.main.master')
@section('title', 'Detail Pengaduan Anda')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-4 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-center text-white">
                Detail Pengaduan
            </h2>
            <div class="mb-8 overflow-hidden rounded-lg shadow">
                <div class="px-4 py-4 bg-white rounded-md shadow-md">
                    <div class="font-semibold mb-4">Informasi Pengaduan</div>
                    <p><strong>Nama:</strong> {{ $complaint->user->name }}</p>
                    <p class="mt-2"><strong>NIK:</strong> {{ $complaint->user->nik }}</p>
                    <p class="mt-2"><strong>No Telepon:</strong> {{ $complaint->user->telephone }}</p>
                    <p class="mt-2"><strong>Tanggal:</strong> {{ $complaint->created_at->format('l, d F Y - H:i:s') }}</p>
                    <p class="mt-2"><strong>Status:</strong>
                        @if($complaint->status =='waiting')
                            <span class="badge bg-danger text-white">{{ $complaint->status }}</span>
                        @elseif ($complaint->status =='processed')
                            <span class="badge bg-warning text-dark">{{ $complaint->status }}</span>
                        @else
                            <span class="badge bg-success text-white">{{ $complaint->status }}</span>
                        @endif
                    </p>
                </div>
                <div class="px-4 py-3 mb-8 d-flex flex-column flex-wrap justify-content-center text-white">
                    <div class="me-md-3 mb-3 text-center">
                        <div class="font-semibold mb-4"><h2 class="text-white">Foto</h2></div>
                        <img class="img-fluid" src="{{ $complaint->getFirstMediaUrl('complaint_image', 'thumb') }}" alt="{{ $complaint->title }} Image" loading="lazy" />
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text text-black">{{ $complaint->title }}</p>
                            <h4 class="card-title">{{ $complaint->title }}</h4>
                            <p class="card-text text-black">Description</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="px-4 py-3 mb-2 bg-white rounded-md shadow">
                    <div class="text-center">
                        <h4>Tanggapan</h4>
                        <p class="text-dark">
                            @if(!isset($complaint['response']['response']))
                                <p>Belum ada tanggapan</p>
                            @else
                                <b>{{ $complaint['response']['response'] }}</b>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
