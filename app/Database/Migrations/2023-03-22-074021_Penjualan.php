<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'jual_faktur' => [
				'type'		=> 'char',
				'constraint' => '20',
				'null'		=> false
			],
			'jual_tgl' => [
				'type'		=> 'date',
				'null'		=> false
			],
			'jual_pelanggankode' => [
				'type' => 'int',
				'constraint' => '11',
			],
			'jual_totalharga' => [
				'type' => 'int',
				'constraint' => '11',
			]
		]);

		$this->forge->addPrimaryKey('jual_faktur');
		$this->forge->addForeignKey('jual_pelanggankode', 'pelanggan', 'pelanggan_kode', 'cascade');
		$this->forge->createTable('penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('penjualan');
    }
}