<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>
<div class="mt-n10">
    <div class="card card-icon mb-4">
        <div class="row g-0">
            <div class="col-auto card-icon-aside bg-primary"><i class="me-1 text-white-50" data-feather="users"></i></div>
            <div class="col">
                <div class="card-body py-5">
                    <h5 class="card-title"><?= $title; ?></h5>
                </div>
            </div>
        </div>
    </div>

    <a href="<?= $meta["url"] . "/tambah" ?>" class="btn btn-primary my-3"><i class="bi bi-plus-lg "></i></a>

    <div class="card mb-4">
        <div class="card-header">Table <?= $title ?></div>
        <div id="data" class="card-body">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 border rounded">
                    <thead class="align-middle text-center">
                        <tr>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7" rowspan="2">No</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">No. Akun</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">Nama Akun</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">Type Akun</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2" colspan="2">Saldo Normal</th>
                            <th width="150px" class="opacity-7" rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>Debit</th>
                            <th>Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;

                        foreach ($dataAkun as $dt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt["no_akun"] ?></td>
                                <td><?= $dt["nama_akun"] ?></td>
                                <td><?= $dt["type_akun"] ?></td>
                                <td><?= $dt["jenis_akun"] == "Debit" ?  rupiah($dt["saldo_normal"]) : "" ?></td>
                                <td><?= $dt["jenis_akun"] == "Kredit" ?  rupiah($dt["saldo_normal"]) : "" ?></td>
                                <?= view_cell('\App\Libraries\Widget::tombolAksi', [
                                    'url'       => $meta['url'],
                                    'id'        => $dt['id'],
                                    'detail'    => true
                                ]); ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <div class="border p-3 rounded mb-4">
                    <div class="row">
                        <div class="col-lg-4 fw-bold">
                            Total Debit
                        </div>
                        <div class="col-lg-8">
                            <?= rupiah($totalDebit["saldo_normal"]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 fw-bold">
                            Total Kredit
                        </div>
                        <div class="col-lg-8 text-right">
                            <?= rupiah($totalKredit["saldo_normal"]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>