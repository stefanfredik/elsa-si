<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\HargakamarModel;
use App\Models\PemasukanModel;
use App\Models\TamuModel;
use CodeIgniter\API\ResponseTrait;
use DateTime;

class Pemasukan extends BaseController {
    use ResponseTrait;
    var $meta = [
        "url" => 'pemasukan',
        "title" => "Data Transaksi Pemasukan",
        "desc"  => "Daftar semua data transaksi pemasukan",
        "icon"  => '<i class="bi bi-person-badge-fill"></i>'
    ];


    public function __construct() {
        $this->pemasukanModel = new PemasukanModel();
        $this->tamuModel = new TamuModel();
        $this->roomModel = new HargakamarModel();
        $this->bookingModel = new BookingModel();
    }

    public function index() {
        $data = [
            "title" => "Data Pemasukan",
            "dataPemasukan" => $this->pemasukanModel->findAll(),
            "meta"     => $this->meta,
            "room"      => $this->roomModel->findAll(),
        ];
        return view("/pemasukan/index", $data);
    }

    public function tambah() {
        $data = [
            "title" => "Tambah Data pemasukan Baru",
            "meta"  => $this->meta,
            "dataTamu" => $this->tamuModel->findAll(),
            "dataRoom"  => $this->roomModel->findAll(),
            "dataBooking" => $this->bookingModel->findAll(),
            "dataBookingJson" => json_encode($this->bookingModel->findAll())
        ];
        return view("/pemasukan/tambah", $data);
    }

    public function store() {
        $data = $this->request->getPost();

        $diskon = $data["diskon"];
        $idKamar = $data["room"];

        $hargaKamar = $this->roomModel->select("harga_kamar")->first($idKamar)["harga_kamar"];
        // dd($hargaKamar); s

        $durasi = $this->hitungDurasi($data["check_in"], $data["check_out"]);

        // dd($durasi);
        $total = $this->hitungTotal($diskon, $hargaKamar, $durasi);
        // dd($total);

        $data["jumlah"] = $total;
        $data["id_transaksi"] = $this->pemasukanModel->insertId();


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


    function findRoom($id) {
        return $this->respond([
            "room" => $this->roomModel->find($id)
        ]);
    }


    // private function

    private function hitungTotal(float $diskon, float $hargaKamar, float $durasi) {
        $hargaPerMalam = $hargaKamar;

        if ($diskon > 0) {
            $diskonPersen = $diskon / 100;
            $diskonNominal = $hargaPerMalam * $diskonPersen;
            $hargaPerMalam -= $diskonNominal;
        }

        return $hargaPerMalam * $durasi;
    }



    private function hitungDurasi(string $startDate, string $endDate) {
        $date1 = new DateTime($startDate);
        $date2 = new DateTime($endDate);

        $durasi = 0;

        $diff = $date2->diff($date1);
        if ($diff->days == 0) {
            $durasi = $diff->days = 1;
        }

        return $durasi = 1;
    }
}
