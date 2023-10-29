<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TypeAkun extends Seeder {
    public function run() {
        $db      = \Config\Database::connect();
        $builder = $db->table('type_akun');

        $data = [
            [
                "type_akun" => "Aktiva Lancar"
            ],
            [
                "type_akun" => "Aktiva Tetap"
            ],
            [
                "type_akun" => "Hutang"
            ],
            [
                "type_akun" => "Modal"
            ],
            [
                "type_akun" => "Pendapatan"
            ],
            [
                "type_akun" => "Beban"
            ],
        ];

        $builder->insertBatch($data);
    }
}
