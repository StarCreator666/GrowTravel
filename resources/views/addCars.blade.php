@extends('layouts.main')

@section('container')
<div class="container" style="height:100vh"></div>
<div class="container" style="height:100vh">
    <form action="{{ route('add.mobil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="gambar" accept="image/*">
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <input type="text" name="nama" id="nama" placeholder="Masukan nama">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <input type="text" name="harga" id="harga" placeholder="Rp.">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>


@endsection