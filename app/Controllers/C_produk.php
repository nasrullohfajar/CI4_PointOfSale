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
        $pager = \Config\Services::pager();
        $data['dataproduk'] = $this->produk->paginate(5, 'produk');
        $data['pager'] = $this->produk->pager;
        $data['nomor'] = nomor($this->request->getVar('page_produk'), 5);
        
        return view('produk/V_dataproduk', $data);
    }

    public function tambahdata(){

        return view('produk/V_tambahproduk');
    }
}