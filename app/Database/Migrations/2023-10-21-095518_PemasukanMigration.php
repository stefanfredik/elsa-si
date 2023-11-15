<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PemasukanMigration extends Migration {
    public function up() {
        $data = [
            'id'    => [
                "type" => "INT",
                "auto_increment" => true
            ],

            'id_transaksi' => [
                'type'  => 'VARCHAR',
                'constraint' => 64
            ],

            'tanggal_transaksi' => [
                'type'  => 'DATE',
            ],

            'id_tamu' => [
                'type'  => 'INT',
            ],
            'check_in' => [
                'type'  => 'DATE',
            ],
            'check_out' => [
                'type'  => 'DATE',
            ],
            'room' => [
                'type'  => 'VARCHAR',
                'constraint' => 64
            ],
            'booking' => [
                'type'  => 'VARCHAR',
                'constraint' => 64
            ],
            'diskon' => [
                'type'  => 'FLOAT',
            ],
            'jumlah' => [
                'type'  => 'FLOAT',
            ],

        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pemasukan');
    }

    public function down() {
        $this->forge->dropTable('pemasukan');
    }
}
