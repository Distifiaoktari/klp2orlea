<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\BarbermanModel;
use Illuminate\Support\Facades\DB;

class BarbermanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberman = DB::table('barberman')->get();
        return view('barberman/index',['barberman'=>$barberman]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('barberman/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('barberman')->insert([
            'nama_barberman' => $request->nama_barberman,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);
        
        return redirect('/barberman');
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
        $barberman = DB::table('barberman')->find($id);
        return view('barberman/edit',['barberman'=>$barberman]);
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
        $affected = DB::table('barberman')
              ->where('id', $id)
              ->update(['nama_barberman' => $request->nama_barberman,
                        'alamat' => $request->alamat,
                        'no_hp' => $request->no_hp]);

            return redirect('/barberman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barberman')->where('id', $id)->delete();
        return redirect('/barberman');
    }
}
