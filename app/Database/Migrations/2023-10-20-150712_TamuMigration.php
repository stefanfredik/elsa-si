<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TamuMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'nama_tamu' => [
                'type'  => 'VARCHAR',
                'constraint'    => '32',
            ],

            'alamat_tamu' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ],

            'telepon_tamu' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ],
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tamu');
    }

    public function down() {
        $this->forge->dropTable('tamu');
    }
}
