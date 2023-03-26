<?php

namespace App\Controllers;
use App\Models\M_penjualan;

class C_penjualan extends BaseController
{
    public function __construct(){

        $this->penjualan = new M_penjualan();
    }
      
    public function index()
    {
        $data = [
            'datapenjualan' => $this->penjualan->findAll()
        ];
        return view('transaksi/V_indexpenjualan', $data);
    }

    # public function buatFaktur(){
#
#        $tgl = $this->request->getPost('tanggal');
#        $query = $this->db->query("SELECT MAX(jual_faktur) AS nofaktur FROM penjualan WHERE DATE_FORMAT(jual_tgl, '%Y-%m-%d') = '$tgl'");
#        $hasil = $query->getRowArray();
#        $data = $hasil['nofaktur'];
        
#        $lastNoUrut = substr($data, -4);
#        $nextNoUrut = intval($lastNoUrut) + 1;

#        $fakturPenjualan = 'P'.date('dmy', strtotime($tgl)).sprintf('%04s', $nextNoUrut);
#        $msg = ['fakturpenjualan' => $fakturPenjualan];
#        echo json_encode($msg);
#    }

  #  public function dataDetail(){

  #     $nofaktur = $this->request->getPost('nofaktur');

  #      $tempPenjualan = $this->db->table('temp_penjualan');
  #      $queryTampil = $tempPenjualan->select('detailjual_id as id', 'detailjual_kodebarcode as kode', 'namaproduk',
  #      'detailjual_hargajual as hargajual', 'detailjual_jml as qty', 'detailjual_subtotal as subtotal')->join('produk',
  #      'detailjual_kodebarcode=kodebarcode')->where('detailjual_faktur', $nofaktur)->orderBy('detailjual_id', 'asc');

  #      $data = [
  #          'datadetail' => $queryTampil->get()
  #      ];

  #      $msg = [
  #          'data' => view('penjualan/V_penjualandetail', $data)
  #      ];

  #      echo json_encode($msg);
  #  }
}