<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\DetailPemesananModel;
use App\models\PemesananModel;
use App\models\PaketBarber;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DetailPemesananController extends Controller
{
    public function __construct()
    {
        $this->DetailPemesananModel = new DetailPemesananModel();
    }
    public function index()
    {
        $data = [
            'detailpemesanan' => $this->DetailPemesananModel->allData(),
        ];
        return view('show', $data);
    }
    

        public function create($id){
            $pemesanan = PemesananModel::all();
            $paketbarber = PaketBarber::all();
            $id = $id;
            return view('v_addpaket', compact('pemesanan', 'paketbarber' , 'id'));
        }

        public function insert(Request $request){
            $request->validate([
                'paketbarber_id' => 'required',
             ], [
                'paketbarber_id.required' => 'Harus diisi',
                
            ]);
             
            $data = [
                'pemesanan_id' => request()->id,
                'paketbarber_id' => request()->paketbarber_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $this->DetailPemesananModel->addData($data);
            // return redirect('/show');
            // return redirect()->route('show')->with('pesan','Data Berhasil Tersimpan');
        }

}
