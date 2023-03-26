<?php

namespace App\Models;
use CodeIgniter\Model;

class M_pembelian extends Model
{
    protected $table      = 'pembelian';
    protected $primaryKey = 'beli_faktur';

    protected $allowedFields = ['beli_faktur', 'beli_tgl', 'beli_totalharga'];

    public function postDataPembelian($data){
        $query = $this->db->query("INSERT INTO {$this->table} (beli_faktur, beli_tgl, beli_totalharga) VALUES ('{$data['beli_faktur']}', '{$data['beli_tgl']}', '{$data['beli_totalharga']}')");
        return $query;
    }
}