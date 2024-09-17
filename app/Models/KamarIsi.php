<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarIsi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['idKamar', 'idPenghuni']; // tambahkan idKamar jika belum ada


    //relasi ke kamar dan penghuni
    public function kamar(){
        return $this->belongsTo(Kamar::class,'idKamar','id');
    }
    public function penghuni(){
        return $this->belongsTo(Penghuni::class,'idPenghuni','id');
    }
}
