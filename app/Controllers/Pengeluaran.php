<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;
use App\Models\PengeluaranModel;

class Pengeluaran extends BaseController {
    var $meta = [
        "url" => 'pengeluaran',
        "title" => "Data Pengeluaran",
        "desc"  => "Daftar semua data pengeluaran",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->pengeluaranModel = new PengeluaranModel();
        $this->akunModel       = new AkunModel();
    }

    public function index() {
        $data = [
            "title" => "Data pengeluaran",
            "dataPengeluaran" => $this->pengeluaranModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/pengeluaran/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data pengeluaran Baru",
            "meta"  => $this->meta,
            "dataAkun" => $this->akunModel->findAll(),
        ];


        return view("/pengeluaran/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $this->pengeluaranModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->pengeluaranModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/' . $this->meta["url"]);
    }

    public function edit($id) {
        $pengeluaran = $this->pengeluaranModel->find($id);

        $data = [
            "pengeluaran" => $pengeluaran,
            "title" => "Edit Data pengeluaran",
            "meta"  => $this->meta,
            "dataAkun" => $this->akunModel->findAll(),
        ];

        return view("/pengeluaran/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->pengeluaranModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }
}
