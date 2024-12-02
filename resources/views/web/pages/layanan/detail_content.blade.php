@extends('web.main_layout')

@section('title', 'Detail Layanan')

@section('content')
    <div class="container mt-4">
        <h2>{{ $layanan->nama_layanan }}</h2>
        <p><strong>Syarat dan Mekanisme:</strong></p>
        <p>{!! nl2br(e($layanan->syarat_mekanisme)) !!}</p>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
