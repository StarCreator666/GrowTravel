@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron">
    <h1>{{ $wisata->judul }}</h1>
</div>
@php
    $inclusion = explode(',',$wisata->inclusion);  
    $exclusion = explode(',',$wisata->exclusion);  
    $addons = explode(',',$wisata->add_ons);  
    $noin = 1;
    $noex = 1;
    $noan = 1;
@endphp
<div>
    <img src="{{ asset($wisata->gambar) }}" alt="">
    <h3>{{ $wisata->lokasi }}</h3>
    <p>{{ $wisata->deskripsi }}</p>
    <h1>KEGIATAN</h1>
    <h1>INCLUSION</h1>
    
    @foreach($inclusion as $in)
    @if($in != null)
        <p>{{ $noin++ }}. {{ $in }}</p>
        @endif
    @endforeach
    <h1>EXCLUSION</h1>
    @foreach($exclusion as $ex)
    @if($ex != null)
        <p>{{ $noex++ }}. {{ $ex }}</p>
        @endif
    @endforeach
    <h1>ADD ONS</h1>
    @foreach($addons as $ao)
    @if($ao != null)
        <p>{{ $noan++ }}. {{ $ao }}</p>
        @endif
    @endforeach
</div>

@endsection