<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HargakamarModel;

class Hargakamar extends BaseController {
    var $meta = [
        "url" => 'hargakamar',
        "title" => "Data Harga Kamar",
        "desc"  => "List Harga Kamar",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->hargakamarModel = new HargakamarModel();
    }

    public function index() {
        $data = [
            "title" => "Data hargakamar",
            "dataHargakamar" => $this->hargakamarModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/hargakamar/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data Harga Kamar Baru",
            "meta"  => $this->meta
        ];


        return view("/hargakamar/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $this->hargakamarModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->hargakamarModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/' . $this->meta["url"]);
    }

    public function edit($id) {
        $hargakamar = $this->hargakamarModel->find($id);

        $data = [
            "hargaKamar" => $hargakamar,
            "title" => "Edit Data Harga Kamar",
            "meta"  => $this->meta
        ];

        return view("/hargakamar/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->hargakamarModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }
}
