<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'id_akun' => [
                'type'  => 'INT',
            ],

            'nomor_transaksi' => [
                'type'  => 'INT',
            ],
            'tanggal_transaksi' => [
                'type'  => 'DATE',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint'    => 64
            ],
            'jenis_transaksi' => [
                'type'  => 'VARCHAR',
                'constraint'    => 64
            ],
            'debet' => [
                'type'  => 'INT',
            ],
            'kredit' => [
                'type'  => 'INT',
            ],

        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi');
    }

    public function down() {
        $this->forge->dropTable('transaksi');
    }
}
