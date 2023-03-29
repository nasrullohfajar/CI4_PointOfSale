<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'kodebarcode'          	=> [
				'type'           	=> 'char',
				'constraint'     	=> '50',
				'null'				=> false,
			],
			'namaproduk'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'stok_tersedia' => [
				'type' => 'int',
				'constraint' => '11',
			],
			'harga' => [
				'type' => 'int',
				'constraint' => '11',
			]
		]);
		$this->forge->addKey('kodebarcode', true);
		$this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}