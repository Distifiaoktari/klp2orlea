<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanPendapatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pendapatan/index');
    }

    public function pdfbulanan()
    {
        //$tanggal = DB::table('pemesanan')
        //->where('status_bayar', '=', 1)
        //->select(DB::raw('CONCAT (MONTHNAME(tanggal_order),"-",YEAR(tanggal_order)) new_date'),
        //          DB::raw('count(id)'))
        // ->distinct()
        //->groupby('new_date')
        //->orderBy('tanggal_order')
        //->get()
        //->toArray();

        
        
        // return view('pendapatan/pdfperbulan', compact('tanggal'));

        //---> + total
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

        $pdf = PDF::loadView('pendapatan.pdfperbulan', compact('tanggal'));
        return $pdf->stream();
    }
    
    public function pdfharian()
    {
        //$tanggal = DB::table('pemesanan')
        //->where('status_bayar', '=', 1)
        //->select('tanggal_order', DB::raw('count(id)'))
        //->groupBy('tanggal_order')
        // ->distinct()
        //->get()
        //->toArray();
        
        //---->

        // $banyaktransaksi = DB::table('pemesanan')  
        //     ->where('status_bayar', '=', 1)          
        //     ->select(DB::raw('count(id)'))
        //     ->groupBy('tanggal_order')
        //     ->get()
        //     ->toArray();

        


        // $banyaktransaksi2 = DB::query('SELECT COUNT ( DISTINCT tanggal_order ) FROM pemesanan');

        // return view('pendapatan/pdfperhari', compact('tanggal'));  
        
        //---> + total
        $tanggal = DB::table('pemesanan')
        ->where('status_bayar', '=', 1)       
        ->select(DB::raw('pemesanan.tanggal_order AS tanggal_order'), 
                DB::raw('count(detailpemesanan.pemesanan_id) AS id'), 
                DB::raw('sum(paketbarber.harga_paket) AS total'))
        ->leftJoin('detailpemesanan', 'detailpemesanan.pemesanan_id', '=', 'pemesanan.id')
        ->leftJoin('paketbarber', 'detailpemesanan.paketbarber_id', '=' , 'paketbarber.id')
        ->leftJoin('pelanggan', 'pelanggan.id', '=' , 'pemesanan.pelanggan_id')
        ->leftJoin('barberman', 'barberman.id', '=' , 'pemesanan.barberman_id') 
        ->groupBy('pemesanan.tanggal_order')      
        ->orderBy('pemesanan.tanggal_order')
        ->get()
        ->toArray();

        $pdf = PDF::loadView('pendapatan.pdfperhari', compact('tanggal'));
        return $pdf->stream();
    }
}
