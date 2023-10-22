<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HargaKamarMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'jenis_kamar' => [
                'type'  => 'VARCHAR',
                'constraint'    => '32',
            ],

            'harga_kamar' => [
                'type'  => 'INT',
            ],

            'rincian' => [
                'type'  => 'VARCHAR',
                'constraint'    => '128'
            ],
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hargakamar');
    }

    public function down() {
        $this->forge->dropTable('hargakamar');
    }
}
