<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;

class Akun extends BaseController {
    var $meta = [
        "url" => 'akun',
        "title" => "Data Akun",
        "desc"  => "Daftar semua data akun",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->akunModel = new AkunModel();
    }

    public function index() {
        $data = [
            "title" => "Data Akun",
            "dataAkun" => $this->akunModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/akun/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Akun Baru",
            "meta"  => $this->meta
        ];


        return view("/akun/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $this->akunModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->akunModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/user');
    }

    public function edit($id) {
        $akun = $this->akunModel->find($id);

        $data = [
            "akun" => $akun,
            "title" => "Edit Data Akun",
            "meta"  => $this->meta
        ];

        return view("/akun/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->akunModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }
}
