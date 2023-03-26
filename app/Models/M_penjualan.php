<?php

namespace App\Models;
use CodeIgniter\Model;

class M_penjualan extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'jual_faktur';

    protected $allowedFields = ['jual_faktur', 'jual_tgl', 'jual_pelanggankode', 'jual_totalharga'];
}