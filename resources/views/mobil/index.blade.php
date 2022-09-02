@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron" style="    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url(../images/footer-bg.jpg) no-repeat;
background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../images/bg-cars.jpg) no-repeat;    background-size: cover;
    background-attachment: fixed;">
    <h1>All Cars</h1>
</div>
<section class="best-sell">

    <h1 class="heading">BEST-SELLERS</h1>
    <h5 class="sub-heading">The most popular Cars to around a City</h5>

    <div class="box-container">
        @foreach($mobil as $m)
        <div class="box">
            <img src="{{ asset(''.$m->gambar) }}" style="border-radius: 0%" alt="">
            <h3>{{ $m->nama }}</h3>
            <p>Rp.{{ $m->harga }}</p>
            <a href="#" class="btn">Book Now</a>
        </div>
        @endforeach
    </div>

</section>
@endsection