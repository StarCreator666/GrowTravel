<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Wisata};

class WisataController extends Controller
{
    public function index(){
        $wisata = Wisata::limit(4)->get();
        return view('wisata.index')->with(compact('wisata'));
    }

    public function add_form(){
        return view('add');
    }

    public function detail($judul){
        $wisata = Wisata::where('judul',$judul)->firstOrFail();

        return view('wisata.show')->with(compact('wisata'));
    }

    public function add_post(Request $request){
        $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'harga_awal' => 'required|numeric',
            'harga_akhir' => 'required|numeric',
        ],[
            'gambar.required' => 'Gambar harus di isi',
            'judul.required' => 'Judul harus diisi',
            'lokasi.required' => 'Lokasi harus di isi',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'harga_awal.required' => 'Harga harus diisi',
            'harga_awal.numeric' => 'Harga harus diisi angka',
            'harga_akhir.required' => 'Harga harus diisi',
            'harga_akhir.numeric' => 'Harga harus diisi angka',
        ]
    );

        if($request->hasFile('gambar')){
            $file = $request->gambar;
            $fileName = $file->move("image-travel/", date('YmdHis').'.'. $file->getClientOriginalExtension());
        }
        
        $add = new Wisata;
        $add->gambar = $fileName;
        $add->judul = $request->judul;
        $add->lokasi = $request->lokasi;
        $add->deskripsi = $request->deskripsi;
        $add->hari = $request->hari;
        $add->day = implode('+',$request->day);
        $add->keterangan = implode('+',$request->keterangan);
        $add->inclusion = implode(',',$request->inclusion);
        $add->exclusion = implode(',',$request->exclusion);
        $add->add_ons = implode(',',$request->add_ons);
        $add->harga_awal = $request->harga_awal;
        $add->harga_akhir = $request->harga_akhir;
        $add->created_at = now();
        $add->updated_at = now();
        $add->save();

        return redirect('/admin/wisata');
    }
}
