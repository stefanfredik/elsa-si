<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'pemasukan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "id_transaksi", "tanggal_transaksi", "id_tamu", "check_in", "check_out", "room", "booking", "diskon", "jumlah",];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function findAll(int $limit = 0, int $offset = 0) {
        $this->select("tamu.nama_tamu");
        $this->select("pemasukan.*");
        $this->select("hargakamar.jenis_kamar");
        $this->select("booking.nama_booking");
        $this->join("tamu", "tamu.id = pemasukan.id_tamu");
        $this->join("hargakamar", "hargakamar.id = pemasukan.room");
        $this->join("booking", "booking.id = pemasukan.booking");

        return parent::findAll();
    }


    public function filterdata(string $date = null) {
        $this->select("tamu.nama_tamu");
        $this->select("pemasukan.*");
        $this->join("tamu", "tamu.id = pemasukan.id_tamu");
        $this->where("pemasukan.tanggal_transaksi", $date);

        return parent::findAll();
    }
}
