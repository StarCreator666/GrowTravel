<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
       'day1',
       'day2',
       'day3',
       'day4',
       'day5',
       'kegiatan1',
       'kegiatan2',
       'kegiatan3',
       'kegiatan4',
       'kegiatan5',
    ];

    public function wisata(){
        return $this->belongsTo('App\Models\Wisata');
    }
}
