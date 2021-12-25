<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\DataAdminModel;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DataAdminController extends Controller
{
    public function __construct()
    {
        $this->DataAdminModel = new DataAdminModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'dataadmin' => $this->DataAdminModel->allData(),
        ];
        return view('v_dataadmin', $data);
    }
    public function add(){
        return view('v_addadmin');
    }

    public function insert(){
       // dd(request()->password);
         request()->validate([
            'email' => 'required|unique:users,email|min:8|max:100',
            'name' => 'required',
            'password' => 'required|min:8',
         ], [
            'email.unique' => 'email sudah ada',
            'email.max' => 'email max 100 karakter',
            'email.min' => 'email min 8 karakter',
            'password.min' => 'password min 8 karakter',
        ]);
         
        $data = [
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            // 'password' => request()->password,
        ];
        $this->DataAdminModel->addData($data);
        return redirect()->route('dataadmin')->with('pesan','Data Berhasil Tersimpan');
    }
    public function detail($id){
        if (!$this->DataAdminModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'dataadmin' => $this->DataAdminModel->detailData($id),
        ];
        return view('v_editadmin', $data);
    }
    public function edit($id){
        if (!$this->DataAdminModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'dataadmin' => $this->DataAdminModel->detailData($id),
        ];
        return view('v_editadmin', $data);
    }
    public function update($id){
        request()->validate([
           'email' => 'required|min:8|max:100',
           'name' => 'required',
           'password' => 'required|min:8',
        ], [
           'email.unique' => 'email sudah ada',
           'email.max' => 'email max 100 karakter',
           'email.min' => 'email min 8 karakter',
           'password.min' => 'password min 8 karakter',
       ]);
        
       $data = [
           'name' => request()->name,
           'email' => request()->email,
           'password' => request()->password,
           'updated_at' => Carbon::now(),
       ];
       $this->DataAdminModel->editData($id, $data);
       return redirect()->route('dataadmin')->with('pesan','Data Berhasil Terupdate');
   }

   public function delete($id){
       $this->DataAdminModel->deleteData($id);
       return redirect()->route('dataadmin')->with('pesan','Data Berhasil Terhapus');
   }
}
