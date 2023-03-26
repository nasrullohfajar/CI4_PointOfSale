<?php

namespace App\Models;
use CodeIgniter\Model;

class M_kategori extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'kategori_id';


    protected $allowedFields = ['kategori_id', 'kategori_nama'];

    public function cariData($cari)
    {
        return $this->table('kategori')->like('kategori_nama', $cari);
    }
}