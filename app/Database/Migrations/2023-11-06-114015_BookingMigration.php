<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BookingMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],

            'nama_booking' => [
                'type'  => 'VARCHAR',
                "constraint" => 128
            ],

        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('booking');
    }

    public function down() {
        $this->forge->dropTable('booking');
    }
}
