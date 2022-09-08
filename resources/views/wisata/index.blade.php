@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron">
    <h1>All Tours</h1>
</div>
<section class="best-sell" style="padding:20px 50px 50px 50px">

    <h1 class="heading">BEST-SELLERS</h1>
    <h5 class="sub-heading">The most popular packages to explore Mount Bromo & Ijen</h5>

    <div class="box-container">
        @foreach($wisata as $w)
        <div class="box" style="background: yellow; padding:0;">
            <img src="{{ asset(''.$w->gambar) }}" style="border-radius:0%; width:300px; height:200px; border-radius:5px 5px 0 0" alt="">
            <h3>{{ $w->judul }}</h3>
            <p>Rp.{{ $w->harga_awal }}. - Rp.{{ $w->harga_akhir }}.</p>
            <a href="{{ url('show/'.$w->judul) }}" class="btn">Book now</a>
        </div>
        @endforeach
    </div>

</section>

@endsection