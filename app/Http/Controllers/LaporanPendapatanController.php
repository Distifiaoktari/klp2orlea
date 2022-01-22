<?php

namespace App\Http\Controllers;

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
        return view('pendapatan/pdfperbulan');
        // $data = Siswa::orderBy('nama')->get(); //ubah siswa nya dulu
        // $pdf = PDF::loadView('pendapatan.pdfperbulan', compact('data'));
        // return $pdf->stream();
    }
    
    public function pdfharian()
    {
        return view('pendapatan/pdfperhari');
        // $data = Siswa::orderBy('nama')->get(); //ubah siswa nya dulu
        // $pdf = PDF::loadView('pendapatan.pdfperhari', compact('data'));
        // return $pdf->stream();
    }
}
