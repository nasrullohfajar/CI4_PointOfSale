<?php

namespace App\Controllers;
use App\Models\M_pembelian;

class C_pembelian extends BaseController
{
    public function __construct(){

      $this->pembelian = new M_pembelian();
    }

    public function index() {
      
      $pager = \Config\Services::pager();
      $data['datapembelian'] = $this->pembelian->paginate(10, 'pembelian');
      $data['pager'] = $this->pembelian->pager;
      $data['nomor'] = nomor($this->request->getVar('page_pembelian'), 10);

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