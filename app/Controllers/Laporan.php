<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Laporan extends BaseController {
    var $meta = [
        "url" => 'laporan',
        "title" => "Data Laporan",
        "desc"  => "Laporan Neraca, Keuangan, Laba-rugi",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];

    public function index() {
        $data = [
            "title" => "Halaman Laporan",
            "meta"  => $this->meta
        ];


        return view("/laporan/index", $data);
    }

    public function jurnalumum() {
        $data = [
            "title" => "Halaman Laporan Jurnal Umum",
            "meta"  => $this->meta
        ];


        return view("/laporan/jurnalumum/index", $data);
    }

    public function neraca() {
        $data = [
            "title" => "Halaman Laporan Neraca",
            "meta"  => $this->meta
        ];


        return view("/laporan/neraca/index", $data);
    }

    public function labarugi() {
        $data = [
            "title" => "Halaman Laporan Jurnal Umum",
            "meta"  => $this->meta
        ];


        return view("/laporan/labarugi/index", $data);
    }

    public function perubahanmodal() {
        $data = [
            "title" => "Halaman Laporan Perubahan Modal",
            "meta"  => $this->meta
        ];


        return view("/laporan/perubahanmodal/index", $data);
    }
}
