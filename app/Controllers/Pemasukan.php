<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;
use App\Models\PemasukanModel;
use App\Models\TamuModel;

class Pemasukan extends BaseController {
    var $meta = [
        "url" => 'pemasukan',
        "title" => "Data Transaksi Pemasukan",
        "desc"  => "Daftar semua data transaksi pemasukan",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->pemasukanModel = new PemasukanModel();
        $this->tamuModel = new TamuModel();
    }

    public function index() {
        $data = [
            "title" => "Data Pemasukan",
            "dataPemasukan" => $this->pemasukanModel->findAll(),
            "meta"     => $this->meta
        ];

        return view("/pemasukan/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data pemasukan Baru",
            "meta"  => $this->meta,
            "dataTamu" => $this->tamuModel->findAll(),
        ];
        return view("/pemasukan/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $idTamuBaru = "";

        if ($data["jenis_tamu"] == "tamuBaru") {
            $tamu = [
                "nama_tamu" => $this->request->getPost("nama_tamu"),
                "alamat_tamu" => $this->request->getPost("alamat_tamu"),
                "telepon_tamu" => $this->request->getPost("telepon_tamu"),
            ];

            $this->tamuModel->save($tamu);
            $idTamuBaru = $this->tamuModel->insertID();
            $data["id_tamu"] = $idTamuBaru;
        }

        $this->pemasukanModel->save($data);

        setSwall("Sukses Menambah Data.");
        return redirect()->to($this->meta["url"]);
    }


    public function delete($id) {
        $this->pemasukanModel->delete($id);

        setSwall("Sukses Menghapus Data.");
        return redirect()->to('/' . $this->meta["url"]);
    }

    public function edit($id) {
        $pemasukan = $this->pemasukanModel->find($id);

        $data = [
            "pemasukan" => $pemasukan,
            "title" => "Edit Data pemasukan",
            "meta"  => $this->meta,
            "dataTamu" => $this->tamuModel->findAll(),
        ];

        return view("/pemasukan/edit", $data);
    }


    public function update($id) {
        $data = $this->request->getPost();
        $this->pemasukanModel->update($id, $data);


        setSwall("Sukses Mengupdate Data");
        return redirect()->to($this->meta["url"]);
    }

    public function filter() {
        $date = $this->request->getGet("date");
        $data = [
            "title" => "Data Pemasukan",
            "dataPemasukan" => $this->pemasukanModel->filterdata($date),
            "meta"      => $this->meta,
            "filterValue"   => $date
        ];

        return view("/pemasukan/index", $data);
    }
}
