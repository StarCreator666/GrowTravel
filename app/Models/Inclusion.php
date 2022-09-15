<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inclusion extends Model
{
    use HasFactory;
    
    protected $fillable = [
       'inclusion',
       'name',
       'level',
    ];

    public function wisata(){
        return $this->hasMany('App\Models\Wisata','inclusion_id','id');
    }
}
