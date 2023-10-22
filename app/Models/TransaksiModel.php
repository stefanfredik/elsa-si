<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["id", "id_akun", "nomor_transaksi", "tanggal_transaksi", 'keterangan', "jenis_transaksi", "debet", "kredit"];

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
        $this->select("akun_keuangan.nama_akun");
        $this->select("transaksi.*");
        $this->join("akun_keuangan", "akun_keuangan.id = transaksi.id_akun");
        return parent::findAll();
    }
}
