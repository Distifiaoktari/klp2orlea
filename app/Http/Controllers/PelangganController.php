<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PelangganModel;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = DB::table('pelanggan')->get();
        // dump($pelanggan);
        return view('pelanggan/index',['pelanggan'=>$pelanggan]);
        // return 'apaaaa';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'apaaaa';
        return view('pelanggan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);
        
        return redirect('/pelanggan');
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
        $pelanggan = DB::table('pelanggan')->find($id);
        //dump($pelanggan);
        return view('pelanggan/edit',['pelanggan'=>$pelanggan]);

        // return view('pelanggan/edit');
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
        // DB::table('pelanggan')
        //     ->updateOrInsert(
        //         ['nama_pelanggan' => $request->nama_pelanggan,
        //          'alamat' => $request->alamat,
        //          'no_hp' => $request->no_hp]
        //     );

        $affected = DB::table('pelanggan')
              ->where('id', $id)
              ->update(['nama_pelanggan' => $request->nama_pelanggan,
                        'alamat' => $request->alamat,
                        'no_hp' => $request->no_hp]);

            return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pelanggan')->where('id', $id)->delete();
        return redirect('/pelanggan');
    }
}
