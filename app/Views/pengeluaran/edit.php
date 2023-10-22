<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-9">
        <div id="default">
            <div class="card mb-4">
                <div class="card-header"><?= $title ?></div>
                <div class="card-body">
                    <!-- Component Preview-->
                    <div class="sbp-preview">
                        <div class="sbp-preview-content">
                            <?= form_open("/" . $meta["url"] . "/" . $pengeluaran["id"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Tanggal Transaksi</label>
                                <input required name="tanggal_transaksi" class="form-control" type="date" placeholder="Masukan Tanggal Transaksi" value="<?= $pengeluaran["tanggal_transaksi"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Keterangan</label>
                                <input required name="keterangan" class="form-control" type="text" placeholder="Keterangan" value="<?= $pengeluaran["keterangan"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Jumlah</label>
                                <input required name="jumlah" class="form-control" type="number" placeholder="Masukan Jumlah" value="<?= $pengeluaran["jumlah"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Saldo</label>
                                <input required name="saldo" class="form-control" type="number" placeholder="Masukan Saldo" value="<?= $pengeluaran["saldo"] ?>" />
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="/<?= $meta["url"] ?>" class="btn btn-secondary">Batal</a>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>