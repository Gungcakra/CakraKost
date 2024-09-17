<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JatuhTempo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function kamar(){
        return $this->belongsTo(Kamar::class,'idKamar','id');
    }
    public function penghuni(){
        return $this->belongsTo(Penghuni::class,'idPenghuni','id');
    }
}
