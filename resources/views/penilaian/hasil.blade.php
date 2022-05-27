@extends('layouts.master')

@section('title')
    Penilaian
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col">
            <h1>{!! $similarityUser->idu !!}</h1>
            <h1>{{ $similarityUser->similarity }}</h1>
        </div>
    </div> --}}
    <div class="row ">
        @foreach ($recom as $item)
            <div class="col-sm mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_tempat }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="{{ route('home') }}" class="btn btn-success btn-lg btn-block mt-5">Home</a>
    </div>
@endsection
