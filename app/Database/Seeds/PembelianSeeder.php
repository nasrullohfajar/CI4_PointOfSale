<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\M_produk;

class PembelianSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $produk = new M_produk();
        $data_produk = $produk->findAll();

        for ($i = 1; $i <= 1000; $i++) {
            $barcode_rand = rand(0, 9);
            $data = [
                'beli_faktur' => $faker->unique()->numberBetween(1000000000, 3000000000),
                'beli_tgl' => date("Y/m/d"),
                'beli_kodebarcode' => $data_produk[$barcode_rand]['kodebarcode'],
                'beli_jumlah' => $faker->numberBetween(3, 14),
                'beli_totalharga' => $faker->numberBetween(60, 630)*1000
            ];
            $this->db->table('pembelian')->insert($data);
        }
    }
}