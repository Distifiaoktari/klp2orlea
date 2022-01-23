<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanTransaksiModel extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    public function allData()
    {
        return DB::table('pemesanan')
        ->select('pemesanan.id', 'pelanggan.nama_pelanggan','barberman.nama_barberman', 'pemesanan.tanggal_order', 'pemesanan.status_bayar')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')
        ->get();
    }
}
