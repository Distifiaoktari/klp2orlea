<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barberman extends Model
{
    protected $table = 'barberman';
    protected $fillable = ['nama_barberman', 'alamat', 'no_hp'];
    public function pemesanan(){
        return $this->hasMany(Pemesanan::class,'id', 'id');
    
    
    // use HasFactory;
}
}