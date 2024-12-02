@extends('web.main_layout')

@section('title', 'Berita')

@section('content')
<div class="container mt-5 mb-5 bg-white">
    <div class="container-sm-xl ms-4 rounded row d-flex text center" style="background-color: rgba(250, 245, 245, 1);">
        <div class="col-md-6">
            <div class="mt-4 mb-4 ms-4">
                <img class="img-thumbnail rounded" style="width: 500px; height: 500px" src='{{ Storage::url($berita->gambar) }}'>
            </div>
        </div>
        <div class="col">
            <div class="mt-4 mb-4">
                <figure class="text-center">
                    <blockquote class="blockquote">
                      <p>{{ $berita->judul  }}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Kelurahan Kedung Mundu <cite title="Source Title"> Kota Semarang {{ $berita->created_at }}</cite>
                    </figcaption>
                  </figure>
                <div class="mt-4 ms-4">
                    <p>{!! nl2br(e($berita->deskripsi)) !!}</p>
                </div>
                <div class="mt-4 ms-4">
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ url()->previous() }}" class="btn btn-primary" type="button">Back</a>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection