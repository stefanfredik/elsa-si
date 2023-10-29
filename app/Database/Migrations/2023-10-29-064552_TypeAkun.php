<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TypeAkun extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'type_akun' => [
                'type'  => 'VARCHAR',
                "constraint" => 128
            ],

        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('type_akun');
    }

    public function down() {
        $this->forge->dropTable('type_akun');
    }
}
