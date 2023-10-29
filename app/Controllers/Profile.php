<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Profile extends BaseController {
    var $meta = [
        "url" => 'hargakamar',
        "title" => "Data Harga Kamar",
        "desc"  => "List Harga Kamar",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];

    public function __construct() {
        $this->userModel = new UsersModel();
    }

    public function index() {
        $data = [
            'meta' => $this->meta,
            "title" => 'Halaman Profile',
            'user' => $this->userModel->find(user_id())
        ];

        return view("profile/index", $data);
    }
}
