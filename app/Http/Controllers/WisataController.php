<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Wisata,Inclusion,Exclusion};
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $lokasi = $request->lokasi;
        $durasi = $request->hari;

        $lokasis = DB::table('lokasis')->orderBy('name','asc')->get();
        if($search == '' && $lokasi == '' && $durasi == ''){
            $wisata = Wisata::all();
        }else{
            $wisata = Wisata::where(function($query) use ($search){
                        $query->where('judul', 'LIKE', '%'.$search.'%');
                        })
                        ->where(function($query) use ($lokasi){
                            $query->where('lokasi', 'LIKE', '%'.$lokasi.'%');
                        })
                        ->where(function($query) use ($durasi){
                            $query->where('hari', 'LIKE', '%'.$durasi.'%');
                        })
                        ->get();
        }
        return view('wisata.index')->with(compact('wisata','lokasis','lokasi','search','durasi'));
    }

    public function add_form(){
        $lokasi = DB::table('lokasis')->orderBy('name','asc')->get();
        $exclusion = DB::table('exclusions')->orderBy('name','asc')->get();
        $inclusion = Inclusion::all();
        return view('admin.wisata.tambah')->with(compact('lokasi','exclusion','inclusion'));
    }

    public function detail($judul){
        $wisata = Wisata::where('judul',$judul)->firstOrFail();

        return view('wisata.show')->with(compact('wisata'));
    }

    public function add_post(Request $request){
        $request->validate([
            'gambar' => 'required|mimes:jpeg,jpg,png',
            'judul' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'harga_awal' => 'required|numeric',
            'harga_akhir' => 'required|numeric',
            // 'foto_kegiatan' => 'mimes:jpeg,jpg,png'
        ],[
            'gambar.required' => 'Gambar harus di isi',
            'gambar.mimes' => 'Gambar harus  berupa image',
            // 'foto_kegiatan.mimes' => 'Foto Kegiatan harus berupa image',
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
        if($request->file('foto_kegiatan1')){
            $preview = $request->file('foto_kegiatan1');
            foreach($preview as $p){
                $lokasiPreview = 'tempat-wisata/';
                $Preview = $lokasiPreview . date('YmdHis') . "." . $p->getClientOriginalExtension();
                if($p->getClientOriginalExtension() == 'png' || $p->getClientOriginalExtension() == 'jpeg' || $p->getClientOriginalExtension() == 'jpg' || $p->getClientOriginalExtension() == 'webm' || $p->getClientOriginalExtension() == 'mp4'){
                    $p->move(public_path($lokasiPreview), $Preview);
                    $files[] = $Preview;
                }
            }
            $pa1 = implode(',', $files);
        }else{
            $pa1 = '';
        }

        if($request->file('foto_kegiatan2')){
            $preview2 = $request->file('foto_kegiatan2');
            foreach($preview2 as $p){
                $lokasiPreview = 'tempat-wisata/';
                $Preview2 = $lokasiPreview . date('YmdHis') . "." . $p->getClientOriginalExtension();
                if($p->getClientOriginalExtension() == 'png' || $p->getClientOriginalExtension() == 'jpeg' || $p->getClientOriginalExtension() == 'jpg' || $p->getClientOriginalExtension() == 'webm' || $p->getClientOriginalExtension() == 'mp4'){
                    $p->move(public_path($lokasiPreview), $Preview2);
                    $files2[] = $Preview2;
                }
            }
            $pa2 = implode(',', $files2);
        }else{
            $pa2 = '';
        }

        if($request->file('foto_kegiatan3')){
            $preview3 = $request->file('foto_kegiatan3');
            foreach($preview3 as $p){
                $lokasiPreview = 'tempat-wisata/';
                $Preview3 = $lokasiPreview . date('YmdHis') . "." . $p->getClientOriginalExtension();
                if($p->getClientOriginalExtension() == 'png' || $p->getClientOriginalExtension() == 'jpeg' || $p->getClientOriginalExtension() == 'jpg' || $p->getClientOriginalExtension() == 'webm' || $p->getClientOriginalExtension() == 'mp4'){
                    $p->move(public_path($lokasiPreview), $Preview3);
                    $files3[] = $Preview3;
                }
            }
            $pa3 = implode(',', $files3);
        }else{
            $pa3 = '';
        }

        if($request->file('foto_kegiatan4')){
            $preview4 = $request->file('foto_kegiatan4');
            foreach($preview4 as $p){
                $lokasiPreview = 'tempat-wisata/';
                $Preview4 = $lokasiPreview . date('YmdHis') . "." . $p->getClientOriginalExtension();
                if($p->getClientOriginalExtension() == 'png' || $p->getClientOriginalExtension() == 'jpeg' || $p->getClientOriginalExtension() == 'jpg' || $p->getClientOriginalExtension() == 'webm' || $p->getClientOriginalExtension() == 'mp4'){
                    $p->move(public_path($lokasiPreview), $Preview4);
                    $files4[] = $Preview4;
                }
            }
            $pa4 = implode(',', $files4);
        }else{
            $pa4 = '';
        }
        if($request->file('foto_kegiatan5')){
            $preview5 = $request->file('foto_kegiatan5');
            foreach($preview5 as $p){
                $lokasiPreview = 'tempat-wisata/';
                $Preview5 = $lokasiPreview . date('YmdHis') . "." . $p->getClientOriginalExtension();
                if($p->getClientOriginalExtension() == 'png' || $p->getClientOriginalExtension() == 'jpeg' || $p->getClientOriginalExtension() == 'jpg' || $p->getClientOriginalExtension() == 'webm' || $p->getClientOriginalExtension() == 'mp4'){
                    $p->move(public_path($lokasiPreview), $Preview5);
                    $files5[] = $Preview5;
                }
            }
            $pa5 = implode(',', $files5);
        }else{
            $pa5 = '';
        }

        $add = new Wisata;
        $add->gambar = $fileName;
        $add->judul = $request->judul;
        $add->lokasi = $request->lokasi;
        $add->deskripsi = $request->deskripsi;
        $add->hari = $request->hari;
        $add->day = implode('+',$request->day);
        $add->keterangan = implode('+',$request->keterangan);
        $add->inclusion = implode('=',$request->inclusion);
        $add->foto_kegiatan = ''.$pa1.'+'.$pa2.'+'.$pa3.'+'.$pa4.'+'.$pa5;
        $add->exclusion = $request->exclusion;
        $add->barang = implode(',',$request->barang);
        $add->harga_awal = $request->harga_awal;
        $add->harga_akhir = $request->harga_akhir;
        $add->created_at = now();
        $add->updated_at = now();
        $add->save();

        return redirect('/admin/wisata');
    }

    public function add_lokasi(Request $request){
        DB::table('lokasis')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }

    public function add_inclusion(Request $request){
        DB::table('inclusions')->insert([
            'name' => $request->name,
            'inclusion' => implode(',',$request->inclusion),
            'level' => $request->level,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
        // return redirect('/admin/wisata');
    }
    public function add_exclusion(Request $request){
        DB::table('exclusions')->insert([
            'name' => $request->name,
            'exclusion' => implode(',',$request->exclusion),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
        // return redirect('/admin/wisata');
    }

    public function inclusion_dropdown(Request $request){
        $inclusion = $inclusion = DB::table('inclusions')->where('id',$request->id)->get();

        return response()->json($inclusion);
    }
}
