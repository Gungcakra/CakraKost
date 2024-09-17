<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relasi ke penghuni
    public function penghuni(){
        return $this->belongsTo(User::class,'idPenghuni');
    }

    public function KamarIsi(){
        return $this->hasMany(KamarIsi::class,'idKamar');
    }
}

