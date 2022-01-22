<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['nama_pelanggan', 'alamat', 'no_hp'];
    public function pemesanan(){
        return $this->hasMany(Pemesanan::class,'id', 'id');
    // use HasFactory;
}
}