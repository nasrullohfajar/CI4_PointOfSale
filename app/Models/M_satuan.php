<?php

namespace App\Models;
use CodeIgniter\Model;

class M_satuan extends Model
{
    protected $table      = 'satuan';
    protected $primaryKey = 'satuan_id';


    protected $allowedFields = ['satuan_id', 'satuan_nama'];
}