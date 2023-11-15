<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengeluaranMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'tanggal_transaksi' => [
                'type'  => 'DATE',
            ],

            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => 64
            ],
            'total' => [
                'type'  => 'FLOAT',
            ],

        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengeluaran');
    }

    public function down() {
        $this->forge->dropTable('pengeluaran');
    }
}
