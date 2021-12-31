<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketBarber extends Model
{
    protected $fillable = ['nama_paket', 'harga_paket', 'keterangan'];
    use HasFactory;
}
