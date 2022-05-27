@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row ">
        @foreach ($wisatas as $item)
            <div class="col-sm mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_tempat }}</h5>
                        <form action="{{ route('penilaian.show', $item->id) }}">
                            <input type="text" value="{{ $item->id }}" hidden>
                            <button class="btn btn-primary" type="submit">Pilih</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
