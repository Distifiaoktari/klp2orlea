<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanPendapatanModel extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';

    // public function allData()
    // {
    // return DB::table('pemesanan')->get();
    // }
}
