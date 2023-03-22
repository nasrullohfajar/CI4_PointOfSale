<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'pelanggan_kode' => [
				'type' => 'int',
				'constraint' => '11',
				'auto_increment' => true,
			],
			'pelanggan_nama' => [
				'type' => 'varchar',
				'constraint' => '100',
				'null' => false
			],
			'pelanggan_alamat' => [
				'type' => 'text'
			],
			'pelanggan_telp' => [
				'type' => 'char', 'constraint' => '20'
			]
		]);

		$this->forge->addKey('pelanggan_kode', true);
		$this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
