<?php

namespace App\Controllers;
use App\Models\M_produk;

class C_produk extends BaseController
{
    public function __construct(){

        $this->produk = new M_produk();
    }

    public function index()
    {
        $data = [
            'dataproduk' => $this->produk->findAll()
        ];
        return view('produk/V_dataproduk', $data);
    }

    public function tambahdata(){

        return view('produk/V_tambahproduk');
    }
}