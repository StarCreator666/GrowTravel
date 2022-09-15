@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron">
    <h1>All Tours</h1>
</div>
<main>

    <section class="filter">
        <div class="text-filter">
            <form action="">
            <h1>Filter</h1>
            <h3>Location</h3>
            <div class="checkbox-rect">
                <input type="checkbox" id="checkbox-rect1" name="check">
                <label for="checkbox-rect1">All</label>
              </div>
              <div class="checkbox-rect">
                <input type="checkbox" id="checkbox-rect2" name="check">
                <label for="checkbox-rect2">Surabaya</label>
              </div>

              <br>
              <h3>Duration</h3>
              <div class="checkbox-rect">
                  <input type="checkbox" id="checkbox-rect3" name="check">
                  <label for="checkbox-rect3">All</label>
                </div>
                <div class="checkbox-rect">
                  <input type="checkbox" id="checkbox-rect4" name="check">
                  <label for="checkbox-rect4">2 days</label>
                </div>

                <br><br>
                <button type="submit" style="border: 1px solid blue; background:white; ">Search</button>
            </form>
              {{-- <div class="page__toggle">
                <label class="toggle">
                  <input class="toggle__input" type="checkbox">
                  <span class="toggle__label">
                    <span class="toggle__text">Check Me!</span>
                  </span>
                </label>
              </div> --}}

        </div>
    </section>
<section class="best-sell" style="padding:20px 50px 50px 50px">

    <h1 class="heading">BEST-SELLERS</h1>
    <h5 class="sub-heading" style="padding-bottom:10px;">The most popular packages to explore Mount Bromo & Ijen</h5>

        <div class="box-container">
            @foreach($wisata as $w)
            <div class="box" style="padding:0;">
                <img src="{{ asset(''.$w->gambar) }}" style="border-radius:0%; width:300px; height:200px; border-radius:5px 5px 0 0" alt="">
                <h3>{{ $w->judul }}</h3>
                <p>Rp.{{ $w->harga_awal }}. - Rp.{{ $w->harga_akhir }}.</p>
                <p>{{ $w->lokasi }}</p>
                <p>{{ $w->hari}} Days</p>
                <a href="{{ url('show/'.$w->judul) }}" class="btn">Book now</a>
            </div>
            @endforeach
        </div>
        <div></div>



</section>
</main>

@endsection