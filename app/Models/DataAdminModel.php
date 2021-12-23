<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAdminModel extends Model
{
    public function allData()
    {
        return
        [
            [
                'nama' => 'disti' 
            ],
            [
                'nama' => 'fegeeh' 
            ]
        ];
    }
}
