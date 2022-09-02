@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron">
    <h1>All Tours</h1>
</div>
<section class="best-sell">

    <h1 class="heading">BEST-SELLERS</h1>
    <h5 class="sub-heading">The most popular packages to explore Mount Bromo & Ijen</h5>

    <div class="box-container">
        @foreach($wisata as $w)
        <div class="box">
            <img src="{{ asset(''.$w->gambar) }}" style="border-radius:0%;" alt="">
            <h3>{{ $w->judul }}</h3>
            <p>Rp.{{ $w->harga_awal }}. - Rp.{{ $w->harga_akhir }}.</p>
            <a href="#" class="btn">Book now</a>
        </div>
        @endforeach
    </div>

</section>

@endsection