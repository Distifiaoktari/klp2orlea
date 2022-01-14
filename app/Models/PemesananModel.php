<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PemesananModel extends Model
{
    public function allData()
    {
        return DB::table('pemesanan')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')
        ->get();
    }
    public function deleteData($id)
    {
        DB::table('pemesanan')->where('id', $id)->delete();
    }
}
