<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'beli_faktur' => [
				'type'		=> 'char',
				'constraint' => '20',
				'null'		=> false
			],
			'beli_tgl' => [
				'type'		=> 'date',
				'null'		=> false
			],
			'beli_kodebarcode' => [
				'type' => 'char',
				'constraint' => '50',
			],
			'beli_jumlah' => [
				'type' => 'int',
				'constraint' => '11',
			],
			'beli_totalharga' => [
				'type' => 'int',
				'constraint' => '11',
			]
		]);

		$this->forge->addPrimaryKey('beli_faktur');
		$this->forge->addForeignKey('beli_kodebarcode', 'produk', 'kodebarcode', 'cascade');
		$this->forge->createTable('pembelian');
    }

    public function down()
    {
        $this->forge->dropTable('pembelian');
    }
}