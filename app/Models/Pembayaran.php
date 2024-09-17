<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function kamar(){
        return $this->belongsTo(Kamar::class,'idKamar','id');
    }
    public function penghuni(){
        return $this->belongsTo(Penghuni::class,'idPenghuni','id');
    }
        public function nota(){
            return $this->hasMany(Nota::class);
        }
}
