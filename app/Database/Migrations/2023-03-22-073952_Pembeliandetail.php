<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembeliandetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'detailbeli_id' => [
				'type'		=> 'bigint',
				'constraint' => '11',
				'auto_increment' => true,
			],
			'detailbeli_faktur' => [
				'type'		=> 'char',
				'constraint' => '20',
			],
			'detailbeli_kodebarcode' => [
				'type'		=> 'char',
				'constraint' => '50',
			],
			'detailbeli_hargabeli' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailbeli_hargajual' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailbeli_jumlah' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			],
			'detailbeli_subtotal' => [
				'type' => 'double',
				'constraint' => '11,2',
				'default' => 0.00
			]
		]);

		$this->forge->addPrimaryKey('detailbeli_id');
		$this->forge->addForeignKey('detailbeli_faktur', 'pembelian', 'beli_faktur', 'cascade');
		$this->forge->addForeignKey('detailbeli_kodebarcode', 'produk', 'kodebarcode', 'cascade');
		$this->forge->createTable('pembelian_detail');
    }

    public function down()
    {
        $this->forge->dropTable('pembelian_detail');
    }
}
