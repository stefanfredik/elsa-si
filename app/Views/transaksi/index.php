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
        <div class="card-header">Table User</div>
        <div id="data" class="card-body">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 border rounded">
                    <thead>
                        <tr>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">No. Transaksi</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Nama Akun</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Transaksi </th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Jenis Transaksi</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Debet</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Kredit</th>
                            <th width="150px" class="opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;

                        foreach ($dataTransaksi as $dt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt["nomor_transaksi"] ?></td>
                                <td><?= $dt["nama_akun"] ?></td>
                                <td><?= $dt["tanggal_transaksi"] ?></td>
                                <td><?= $dt["keterangan"] ?></td>
                                <td><?= $dt["jenis_transaksi"] ?></td>
                                <td><?= $dt["debet"] ?></td>
                                <td><?= $dt["kredit"] ?></td>
                                <?= view_cell('\App\Libraries\Widget::tombolAksi', [
                                    'url'       => $meta['url'],
                                    'id'        => $dt['id'],
                                ]); ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>