<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Temppenjualan extends Migration
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
			'detailjual_jml' => [
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
		$this->forge->createTable('temp_penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('temp_penjualan');
    }
}
