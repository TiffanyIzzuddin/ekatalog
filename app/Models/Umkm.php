<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkm';
    protected $guarded = ['id'];

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }

    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
