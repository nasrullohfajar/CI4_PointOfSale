<?php

namespace App\Models;
use CodeIgniter\Model;

class M_pembelian extends Model
{
    protected $table      = 'pembelian';
    protected $primaryKey = 'beli_faktur';

    protected $allowedFields = ['beli_faktur', 'beli_tgl', 'beli_supplierkode', 'beli_totalharga'];
}