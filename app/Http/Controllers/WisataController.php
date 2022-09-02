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

    public function add_post(Request $request){
        $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'harga_awal' => 'required|numeric',
            'harga_akhir' => 'required|numeric',
        ],[
            'gambar.required' => 'Gambar harus di isi',
            'judul.required' => 'Judul harus diisi',
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
        $add->harga_awal = $request->harga_awal;
        $add->harga_akhir = $request->harga_akhir;
        $add->created_at = now();
        $add->updated_at = now();
        $add->save();

        return redirect('/{locale}/wisata');
    }
}
