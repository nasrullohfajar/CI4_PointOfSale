<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'kodebarcode'          => [
				'type'           => 'char',
				'constraint'     => '50',
			],
			'namaproduk'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'produk_kategori_id' => [
				'type' => 'int',
				'constraint' => '11'
			],
			'stok_tersedia' => [
				'type' => 'int',
				'constraint' => '11',
			],
			'harga_beli' => [
				'type' => 'int',
				'constraint' => '11',
			],
			'harga_jual' => [
				'type' => 'int',
				'constraint' => '11',
			]
		]);
		$this->forge->addKey('kodebarcode', true);
		$this->forge->addForeignKey('produk_kategori_id', 'kategori', 'kategori_id', 'cascade');
		$this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}