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
        ->select('tanggal_order','id','pelanggan_id','barberman_id')
        ->get()
        ->toArray();

        return view('transaksi/pdfperhari', compact('tanggal'));
    }
}
