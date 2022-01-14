<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PaketBarberModel;
use Illuminate\Support\Facades\DB;

class PaketBarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketbarber = DB::table('paketbarber')->get();
        return view('paketbarber/index',['paketbarber'=>$paketbarber]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('paketbarber/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('paketbarber')->insert([
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
            'keterangan' => $request->keterangan
        ]);
        
        return redirect('/paketbarber');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paketbarber = DB::table('paketbarber')->find($id);
        return view('paketbarber/edit',['paketbarber'=>$paketbarber]);
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
        $affected = DB::table('paketbarber')
              ->where('id', $id)
              ->update(['nama_paket' => $request->nama_paket,
                        'harga_paket' => $request->harga_paket,
                        'keterangan' => $request->keterangan]);

            return redirect('/paketbarber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('paketbarber')->where('id', $id)->delete();
        return redirect('/paketbarber');
    }
}
