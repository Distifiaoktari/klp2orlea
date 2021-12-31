<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barberman extends Model
{
    protected $fillable = ['nama_barberman', 'alamat', 'no_hp'];
    use HasFactory;
}
