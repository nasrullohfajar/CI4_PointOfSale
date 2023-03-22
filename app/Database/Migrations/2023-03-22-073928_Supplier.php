<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'supplier_kode' => [
				'type' => 'int',
				'constraint' => '11',
				'auto_increment' => true,
			],
			'supplier_nama' => [
				'type' => 'varchar',
				'constraint' => '100',
				'null' => false
			],
			'supplier_alamat' => [
				'type' => 'text'
			],
			'supplier_telp' => [
				'type' => 'char', 'constraint' => '20'
			]
		]);

		$this->forge->addKey('supplier_kode', true);
		$this->forge->createTable('supplier');
    }

    public function down()
    {
        $this->forge->dropTable('supplier');
    }
}
