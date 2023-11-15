<?php

namespace App\Database\Seeds;

use App\Models\BookingModel;
use CodeIgniter\Database\Seeder;

class BookingSeeder extends Seeder {
    public function run() {
        $bookingModel = new BookingModel();

        $data = [
            [
                "nama_booking" => "Traveloka",
            ],
            [
                "nama_booking" => "Agoda",
            ],
            [
                "nama_booking" => "Ticket.com",
            ],
            [
                "nama_booking" => "Derek",
            ],
        ];

        $bookingModel->insertBatch($data);
    }
}
