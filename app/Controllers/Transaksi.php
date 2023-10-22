<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController {
    var $meta = [
        "url" => 'transaksi',
        "title" => "Data Transaksi",
        "desc"  => "Daftar semua data transaksi",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->transaksiModel = new TransaksiModel();
        $this->akunModel       = new AkunModel();
    }

    public function index() {
        $data = [
            "title" => "Data transaksi",
            "dataTransaksi" => $this->transaksiModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/transaksi/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data transaksi Baru",
            "meta"  => $this->meta,
            "dataAkun" => $this->akunModel->findAll(),
        ];


        return view("/transaksi/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $this->transaksiModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->transaksiModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/' . $this->meta["url"]);
    }

    public function edit($id) {
        $transaksi = $this->transaksiModel->find($id);

        $data = [
            "transaksi" => $transaksi,
            "title" => "Edit Data Transaksi",
            "meta"  => $this->meta,
            "dataAkun" => $this->akunModel->findAll(),
        ];

        return view("/transaksi/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->transaksiModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }
}
