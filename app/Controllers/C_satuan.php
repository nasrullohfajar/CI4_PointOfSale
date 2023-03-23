<?php

namespace App\Controllers;
use App\Models\M_satuan;

class C_satuan extends BaseController
{

    public function __construct(){

        $this->satuan = new M_satuan();
    }

    public function index()
    {
        $data = [
            'datasatuan' => $this->satuan->findAll()
        ];
        return view('satuan/V_datasatuan', $data);
    }
}