<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PemesananModel;
use App\models\DetailPemesananModel;
use App\models\Pelanggan;
use App\models\PaketBarber;
use App\models\Barberman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
    public function bayar(Request $request, $id){
        $affected = DB::table('pemesanan')
        ->where('id', $id)
        ->update(['status_bayar' => '1']);

      return redirect('/pemesanan');
                dd($id);
                
        }

        public function create(){
            $pelanggan = Pelanggan::all();
            $barberman = Barberman::all();
            return view('v_addpemesanan', compact('pelanggan', 'barberman'));
        }

        public function insert(Request $request){
            $request->validate([
                'pelanggan_id' => 'required',
                'barberman_id' => 'required',
                'tanggal_order' => 'required',

             ], [
                'tanggal_order.required' => 'Harus diisi',
                'status_bayar.required' => 'Harus diisi',
            ]);
             
            $data = [
                'pelanggan_id' => request()->pelanggan_id,
                'barberman_id' => request()->barberman_id,
                'tanggal_order' => request()->tanggal_order,
                'status_bayar' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    
                // 'password' => request()->password,
            ];
            $this->PemesananModel->addData($data);
            return redirect()->route('pemesanan')->with('pesan','Data Berhasil Tersimpan');
        }

        public function show ($id){
            $detailpemesanan = DetailPemesananModel::find($id);
            // DB::table('detailpemesanan')->where('id', $id)->allData();
            $paketbarber = PaketBarber::all();
            $detailpemesanan = DetailPemesananModel::allData()->where('id' , $id);


            return view ('show',compact('paketbarber','detailpemesanan') );
        }

        public function edit($id)
    {
        $pemesanan = DB::table('pemesanan')->find($id);
        return view('v_editpemesanan',['pemesanan'=>$pemesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $affected = DB::table('pemesanan')
              ->where('id', $id)
              ->update(['pelanggan_id' => $request->pelanggan_id,
                        'barberman_id' => $request->barberman_id,
                        'tanggal_order' => $request->tanggal_order,
                        'total_harga' => $request->total_harga]);

            return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
