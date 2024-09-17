<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];

    //Relasi ke kamar
    public function kamar(){
        return $this->hasMany(Kamar::class);
    }

    public function KamarIsi(){
        return $this->hasMany(KamarIsi::class,'idPenghuni');
    }
}
