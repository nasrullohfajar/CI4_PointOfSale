<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualandetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'detailjual_id' => [
				'type'		=> 'bigint',
				'constraint' => '11',
				'auto_increment' => true,
			],
			'detailjual_faktur' => [
				'type'		=> 'char',
				'constraint' => '20',
			],
			'detailjual_kodebarcode' => [
				'type'		=> 'char',
				'constraint' => '50',
			],
			'detailjual_hargabeli' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailjual_hargajual' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailjual_jumlah' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailjual_subtotal' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			]
		]);

		$this->forge->addPrimaryKey('detailjual_id');
		$this->forge->addForeignKey('detailjual_faktur', 'penjualan', 'jual_faktur', 'cascade');
		$this->forge->addForeignKey('detailjual_kodebarcode', 'produk', 'kodebarcode', 'cascade');
		$this->forge->createTable('penjualan_detail');
    }

    public function down()
    {
        $this->forge->dropTable('penjualan_detail');
    }
}
