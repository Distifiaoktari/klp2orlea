<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanTransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('transaksi/index');
    }

    public function pdfbulanan()
    {
        //$tanggal = DB::table('pemesanan')
        //->where('status_bayar', '=', 1)
        //->select(DB::raw('CONCAT (MONTHNAME(tanggal_order),"-",YEAR(tanggal_order)) new_date'), DB::raw('count(id)'))
        //->groupby('new_date')
        //->orderBy('tanggal_order')
        //->get()
        //->toArray();

        //return view('transaksi/pdfperbulan', compact('tanggal'));
        
        $tanggal = DB::table('pemesanan')
        ->where('status_bayar', '=', 1)
        ->select(DB::raw('CONCAT (MONTHNAME(pemesanan.tanggal_order),"-",YEAR(pemesanan.tanggal_order)) new_date'),
                DB::raw('count(detailpemesanan.pemesanan_id) AS id'),
                DB::raw('SUM(paketbarber.harga_paket) AS total'))
        ->leftJoin('detailpemesanan', 'detailpemesanan.pemesanan_id', '=', 'pemesanan.id')
        ->leftJoin('paketbarber', 'detailpemesanan.paketbarber_id', '=' , 'paketbarber.id')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')
        ->groupby('new_date')
        ->orderBy('pemesanan.tanggal_order')
        ->get()
        ->toArray();

        $pdf = PDF::loadView('transaksi.pdfperbulan', compact('tanggal'));
        return $pdf->stream();
    }
    
    public function pdfharian()
    {
        $tanggal = DB::table('pemesanan')
        //$tanggal = DB::table('(SELECT detailpemesanan.pemesanan_id AS ID_PESANAN, paketbarber.nama_paket AS NAMA_PAKET, paketbarber.harga_paket AS TOTAL_HARGA FROM detailpemesanan LEFT JOIN paketbarber ON detailpemesanan.paketbarber_id = paketbarber.id GROUP BY detailpemesanan.pemesanan_id) AS urut ')
        ->where('status_bayar', '=', 1)
        //->select('pemesanan.tanggal_order AS tanggal_order', 'pemesanan.id AS id', 'pelanggan.nama_pelanggan AS pelanggan','barberman.nama_barberman AS barberman')        
        //->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        //->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')       
        //->orderBy('tanggal_order')
        //->get()
        //->toArray();


        //->select('pemesanan.tanggal_order AS tanggal_order', 'urut.ID_PESANAN AS id',  'pelanggan.nama_pelanggan AS pelanggan', 'barberman.nama_barberman AS barberman', 'urut.NAMA_PAKET AS paket', 'urut.TOTAL_HARGA AS total')       
        //->from(DB::raw('(SELECT detailpemesanan.pemesanan_id AS ID_PESANAN, paketbarber.nama_paket AS NAMA_PAKET, paketbarber.harga_paket AS TOTAL_HARGA FROM detailpemesanan LEFT JOIN paketbarber ON detailpemesanan.paketbarber_id = paketbarber.id GROUP BY detailpemesanan.pemesanan_id) AS urut ')
        //->leftJoin('detailpemesanan', 'ON', 'urut.ID_PESANAN', '=', 'detailpemesanan.pemesanan_id', 'AND', 'detailpemesanan.pemesanan_id', '=', 'pemesanan.id')
        //->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        //->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')       
        //->orderBy('tanggal_order')
        //->get()
        //->toArray();

        ->select('detailpemesanan.pemesanan_id AS id', 'pemesanan.tanggal_order AS tanggal_order', 'pelanggan.nama_pelanggan AS pelanggan','barberman.nama_barberman AS barberman', 'paketbarber.harga_paket AS total')                
        ->leftJoin('detailpemesanan', 'detailpemesanan.pemesanan_id', '=', 'pemesanan.id')
        ->leftJoin('paketbarber', 'detailpemesanan.paketbarber_id', '=' , 'paketbarber.id')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')       
        ->orderBy('tanggal_order')
        ->get()
        ->toArray();

        //return view('transaksi/pdfperhari', compact('tanggal'));
        
        $pdf = PDF::loadView('transaksi.pdfperhari', compact('tanggal'));
        return $pdf->stream();
    }
}
