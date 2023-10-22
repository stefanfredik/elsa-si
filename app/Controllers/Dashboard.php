<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController {
    var $meta = [
        "url" => 'dashboard',
        "title" => "Halaman Dashboard",
        // "desc"  => "List Harga Kamar",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];

    public function index() {
        $data = [
            "title" => "Halaman Dashboard",
            "meta"  => $this->meta
        ];

        return view("/dashboard/index", $data);
    }
}
