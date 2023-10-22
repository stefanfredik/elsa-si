<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TamuModel;

class Tamu extends BaseController {
    var $meta = [
        "url" => 'tamu',
        "title" => "Data tamu",
        "desc"  => "Daftar semua data tamu",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->tamuModel = new TamuModel();
    }

    public function index() {
        $data = [
            "title" => "Data Tamu",
            "dataTamu" => $this->tamuModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/tamu/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data Tamu Baru",
            "meta"  => $this->meta
        ];


        return view("/tamu/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $this->tamuModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->tamuModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/' . $this->meta["url"]);
    }

    public function edit($id) {
        $tamu = $this->tamuModel->find($id);

        $data = [
            "tamu" => $tamu,
            "title" => "Edit Data tamu",
            "meta"  => $this->meta
        ];

        return view("/tamu/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->tamuModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }
}
