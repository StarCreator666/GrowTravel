@extends('layouts.main')

@section('container')
<div class="container" style="height:100vh"></div>
<div class="container" style="height:100vh">
    <form action="{{ route('add.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="gambar" accept="image/*">
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <input type="text" name="judul" id="judul" placeholder="Masukan Judul">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <input type="text" name="harga_awal" id="harga_awal" placeholder="Rp.">
            @error('harga_awal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="text" name="harga_akhir" id="harga_akhir" placeholder="Rp.">
            @error('harga_akhir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>


@endsection