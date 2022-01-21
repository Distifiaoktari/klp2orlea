<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    public function allData()
    {
        return DB::table('pemesanan')
        ->select('pemesanan.id', 'pelanggan.nama_pelanggan','barberman.nama_barberman', 'pemesanan.tanggal_order', 'pemesanan.status_bayar')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')
        ->get();
    }
    public function deleteData($id)
    {
        DB::table('pemesanan')->where('id', $id)->delete();
    }
    public function addData($data)
    {
        DB::table('pemesanan')->insert($data);
    }
    public function pelanggan(){
        return $this->belongsTo('App\Pelanggan');
    }
    public function barberman(){
        return $this->belongsTo('App\Barberman');
    }

}
