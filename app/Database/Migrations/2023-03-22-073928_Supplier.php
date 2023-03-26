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
				'constraint' => '50',
				'null' => false
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