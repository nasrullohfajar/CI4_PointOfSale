<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
        
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'kodebarcode' => $faker->unique()->ean13(),
                'namaproduk' => $faker->unique()->foodName(),
                'stok_tersedia' => $faker->numberBetween(15, 40),
                'harga' => $faker->numberBetween(20, 45)*1000,
            ];
            $this->db->table('produk')->insert($data);
        }
    }
}