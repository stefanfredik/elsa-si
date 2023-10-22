<?php

namespace App\Libraries;

class Widget {
    public function tombolAksi(array $data) {
        return view("/temp/cell/aksi", $data);
    }
}
