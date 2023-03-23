<?php

namespace App\Controllers;
use App\Models\M_kategori;

class C_kategori extends BaseController
{

    public function __construct(){

        $this->kategori = new M_kategori();
    }

    public function index()
    {
        $data = [
            'datakategori' => $this->kategori->findAll()
        ];
        return view('kategori/V_data', $data);
    }
}