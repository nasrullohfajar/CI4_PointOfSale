<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        
        for ($i = 1; $i <= 1000; $i++) {
            $data = [
                'pelanggan_kode' => $i,
                'pelanggan_nama' => $faker->name()
            ];
            $this->db->table('pelanggan')->insert($data);
        }
    }
}