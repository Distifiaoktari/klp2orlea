<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\DataAdminModel;

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
}
