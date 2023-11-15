<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>

<div class="mt-n10">
    <a href="<?= $meta["url"] . "/tambah" ?>" class="btn btn-white my-3"><i class="bi bi-plus-lg "></i></a>

    <div class="card mb-4">
        <div class="card-header">Table <?= $title ?></div>
        <div id="data" class="card-body">
            <div class="mb-4">
                <form action="/<?= $meta["url"] . "/filter" ?>" method="GET">
                    <div class="d-flex justify-content-start">
                        <div class="mx-2">
                            <input value="<?= @$filterValue ?>" class="form-control" type="date" name="date" id="" placeholder="Masukan Tanggal">
                        </div>

                        <div>
                            <input class="btn btn-primary" type="submit" value="Filter Data">
                            <?php if (url_is("*filter")) : ?>
                                <a href="/<?= $meta["url"] ?>" class="btn btn-secondary">Reset</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 border rounded">
                    <thead>
                        <tr>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Transaksi</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Tamu </th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Check In</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Check Out</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Room</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Booking</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Diskon</th>
                            <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                            <th width="150px" class="opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;

                        foreach ($dataPemasukan as $dt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt["tanggal_transaksi"] ?></td>
                                <td><?= $dt["nama_tamu"] ?></td>
                                <td><?= $dt["check_in"] ?></td>
                                <td><?= $dt["check_out"] ?></td>
                                <td><?= $dt["jenis_kamar"] ?></td>
                                <td><?= $dt["nama_booking"] ?></td>
                                <td><?= $dt["diskon"] . "%" ?> </td>
                                <td><?= rupiah($dt["jumlah"]); ?></td>

                                <?= view_cell('\App\Libraries\Widget::tombolAksi', [
                                    'url'       => $meta['url'],
                                    'id'        => $dt['id'],
                                    'detail'    => true
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