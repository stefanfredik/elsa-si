<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'no_akun' => [
                'type'  => 'VARCHAR',
                'constraint'    => '32',
            ],

            'nama_akun' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ],

            'type_akun' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ],
            'saldo_normal' => [
                'type'       => 'INT',
            ],
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('akun_keuangan');
    }

    public function down() {
        $this->forge->dropTable('akun_keuangan');
    }
}
