@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">

<div class="jumbotron">
    <h1>All Tours</h1>
</div>
<main>

    <section class="filter">
        <div class="text-filter">
            <form action="{{ route('user.wisata') }}">
              <h1>Filter</h1>
                <h3>Search</h3>
                <div>
                    <input type="text" name="search" class="form-control" value="{{ $search }}">
                </div>
                <h3>Location</h3>
                <div>
                  <select class="form-control" name="lokasi">
                    <option value="">ALL</option>
                    @foreach($lokasis as $l)
                    <option value="{{ $l->name }}" @if($lokasi == $l->name) selected @endif>{{ $l->name }}</option>
                    @endforeach
                  </select>
                </div>

              <br>
                <h3>Duration</h3>
                  <div>
                    <select class="form-control" name="hari">
                      <option value="" @if($durasi == '') selected @endif>ALL</option>
                      <option value="1" @if($durasi == '1') selected @endif>1 hari</option>
                      <option value="2" @if($durasi == '2') selected @endif>2 hari</option>
                      <option value="3" @if($durasi == '3') selected @endif>3 hari</option>
                      <option value="4" @if($durasi == '4') selected @endif>4 hari</option>
                      <option value="5" @if($durasi == '5') selected @endif>5 hari</option>
                    </select>
                  </div>
                <br><br>
                <button type="submit" style="border: 1px solid blue; background:white; ">Search</button>
            </form>

        </div>
    </section>
    <section class="best-sell" style="padding:20px 50px 50px 50px">

        <h1 class="heading">BEST-SELLERS</h1>
        <h5 class="sub-heading" style="padding-bottom:10px;">The most popular packages to explore Mount Bromo & Ijen</h5>
            <div class="box-container">

                @foreach($wisata as $w)
                <div class="boxs" style="padding:0;">
                  <div class="item" style="text-align:right; padding:1rem;">
                    <img src="{{ asset(''.$w->gambar) }}" style="border-radius:0%; width:200px; height:133px; border-radius:5px 5px 0 0" alt="">
                  </div>
                  <div class="item" style="text-align:left; padding:1rem; margin-left:1rem;">
                    <h3 style="margin: 10px">{{ $w->judul }}</h3>
                    <p style="margin:10px; font-size:13px;"><i class="fas fa-map-marker-alt" style="padding-right: 2px;"></i> {{ $w->lokasi }} <i class="fas fa-stopwatch" style="padding-left: 7px;"></i> {{ $w->hari}} Days</p>
                  </div>
                  <div class="item"  style="padding:1rem;">
                    <p style="margin-top: 3%;"><span class="heading" style="font-weight:600; font-size:2.3rem;">{{ $w->harga_awal }}$</span><span style=" font-size:1.3rem; font-weight:600; color:rgb(104, 113, 118);">/pax</span> {{-- .{{ $w->harga_akhir }}--}}.</p> 
                    <a href="{{ url('show/'.$w->judul) }}" class="btn" style="margin-top: 5px;">Book now</a>
                  </div>


                </div>
                @endforeach
            </div>
            <div></div>
    </section>
</main>

@endsection