<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\models\PemesananModel;
use App\models\DetailPemesananModel;
use App\models\Pelanggan;
use App\models\PaketBarber;
use App\models\Barberman;

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
        $tanggal = DB::table('pemesanan')
        ->where('status_bayar', '=', 1)
        ->select(DB::raw('CONCAT (MONTHNAME(tanggal_order),"-",YEAR(tanggal_order)) new_date'), DB::raw('count(id)'))
        ->groupby('new_date')
        ->orderBy('tanggal_order')
        ->get()
        ->toArray();

        return view('transaksi/pdfperbulan', compact('tanggal'));
    }
    
    public function pdfharian()
    {
        $tanggal = DB::table('pemesanan')
        ->where('status_bayar', '=', 1)
        ->select('pemesanan.tanggal_order AS tanggal_order', 'pemesanan.id AS id', 'pelanggan.nama_pelanggan AS pelanggan','barberman.nama_barberman AS barberman')        
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id')       
        ->orderBy('tanggal_order')
        ->get()
        ->toArray();

        return view('transaksi/pdfperhari', compact('tanggal'));
    }
}
