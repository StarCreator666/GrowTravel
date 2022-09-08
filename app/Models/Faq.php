<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'faq1','faq2','faq3','faq4','faq5','faq6','faq7','faq8','faq9','faq10','faq11','faq12','faq13','faq14','faq15',
        'deskripsi1','deskripsi2','deskripsi3','deskripsi4','deskripsi5','deskripsi6','deskripsi7','deskripsi8','deskripsi9',
        'deskripsi10','deskripsi11','deskripsi12','deskripsi13','deskripsi14','deskripsi15',
     ];
 
     public function wisata(){
         return $this->belongsTo('App\Models\Wisata');
     }
}
