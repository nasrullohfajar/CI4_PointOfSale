<?php

namespace App\Controllers;
use App\Models\M_pembelian;

class C_pembelian extends BaseController
{
    public function __construct(){

      $this->pembelian = new M_pembelian();
    }

    public function index() {
      
      $data = [
        'datapembelian' => $this->pembelian->findAll()
      ];
        return view('transaksi/V_indexpembelian',$data);
    }

    public function simpanDataPembelian(){

      $data = [
          'beli_faktur' => $this->request->getPost('beli_faktur'),
          'beli_tgl' => $this->request->getPost('beli_tgl'),
          #'beli_supplierkode' => $this->request->getPost('beli_supplierkode'),
          'beli_totalharga' => $this->request->getPost('beli_totalharga'),
      ];

      $this->pembelian->postDataPembelian($data);
      return redirect()->to('/pembelian');
  }
}