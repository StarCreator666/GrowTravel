<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'lokasi',
        'inclusion',
        'exclusion',
        'add_ons',
        'day',
        'keterangan',
        'faq_id',
        'gambar',
        'harga_awal',
        'harga_akhir',
    ];

    public function kegiatan(){
        return $this->hasMany('App\Models\Kegiatan','wisata_id','id');
    }
    
    public function faq(){
        return $this->hasMany('App\Models\Faq','wisata_id','id');
    }
}
