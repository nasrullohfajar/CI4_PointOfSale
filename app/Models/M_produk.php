<?php

namespace App\Models;
use CodeIgniter\Model;

class M_produk extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'kodebarcode';


    protected $allowedFields = [
        'kodebarcode',
        'namaproduk', 
        'produk_satuan_id', 
        'produk_kategori_id', 
        'stok_tersedia', 
        'harga_beli', 
        'harga_jual', 
        'gambar'
    ];

    
}