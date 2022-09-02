<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index(){
        $mobil = Mobil::limit(4)->get();
        return view('mobil.index')->with(compact('mobil'));
    }

    public function add_form(){
        return view('addCars');
    }

    public function add_post(Request $request){
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'harga' => 'required|numeric',
        ],[
            'gambar.required' => 'Gambar harus di isi',
            'nama.required' => 'Nama harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus diisi angka',
        ]
    );

        if($request->hasFile('gambar')){
            $file = $request->gambar;
            $fileName = $file->move("image-mobil/", date('YmdHis').'.'. $file->getClientOriginalExtension());

        }
        
        $add = new Mobil;
        $add->gambar = $fileName;
        $add->nama = $request->nama;
        $add->harga = $request->harga;
        $add->created_at = now();
        $add->updated_at = now();
        $add->save();

        return redirect('cars');
    }
}
