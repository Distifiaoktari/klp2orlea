<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DetailPemesananModel extends Model
{
    protected $table = 'detailpemesanan';

    public function allData()
    {
        return DB::table('detailpemesanan')
        ->select('detailpemesanan.id', 'pemesanan.pelanggan_id','paketbarber.nama_paket', 'paketbarber.harga_paket')
        ->leftJoin('pemesanan', 'pemesanan.id', '=' , 'detailpemesanan.pemesanan_id')
        ->leftJoin('paketbarber', 'paketbarber.id', '=' , 'detailpemesanan.paketbarber_id')
        ->get();
    }
    public function deleteData($id)
    {
        DB::table('detailpemesanan')->where('id', $id)->delete();
    }
    public function addData($data)
    {
        DB::table('detailpemesanan')->insert($data);
    }
    public function paketbarber(){
        return $this->belongsTo('App\PaketBarber');
    }

}
