<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exclusion extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'exclusion',
        
    ];

    public function wisata(){
        return $this->hasMany('App\Models\Wisata','exclusion_id','id');
    }
}
