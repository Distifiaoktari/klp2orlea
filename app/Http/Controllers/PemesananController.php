<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PemesananModel;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
    }
    public function index()
    {
        $data = [
            'pemesanan' => $this->PemesananModel->allData(),
        ];
        return view('v_pemesanan', $data);
    }
    public function delete($id){
        $this->PemesananModel->deleteData($id);
        return redirect()->route('pemesanan')->with('pesan','Data Berhasil Terhapus');
    }
}
