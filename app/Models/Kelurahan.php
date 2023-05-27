<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $guarded = ['id'];

    // 1 kecamatan_id di kelurahan -> belongsTo kecamatan
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }
    // 1 kelurahan_id -> hasMany di umkm
    public function umkm(){
        return $this->hasMany(Umkm::class);
    }
}
