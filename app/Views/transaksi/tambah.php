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
                            <?= form_open("/" . $meta["url"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Nomor Transaksi</label>
                                <input required name="nomor_transaksi" class="form-control" type="text" placeholder="Masukan Nomor Transaksi" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Nomor Akun</label>
                                <select name="id_akun" class="form-control">
                                    <?php foreach ($dataAkun as $dt) : ?>
                                        <option value="<?= $dt["id"] ?>"><?= $dt["nama_akun"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Tanggal Transaksi</label>
                                <input required name="tanggal_transaksi" class="form-control" type="date" placeholder="Masukan Tanggal Transaksi" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Keterangan</label>
                                <input required name="keterangan" class="form-control" type="text" placeholder="Masukan Keterangan" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Jenis Transaksi</label>
                                <input required name="jenis_transaksi" class="form-control" type="text" placeholder="Masukan Jenis Transaksi" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Debet</label>
                                <input required name="debet" class="form-control" type="text" placeholder="Masukan Debet" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Kredit</label>
                                <input required name="kredit" class="form-control" type="text" placeholder="Masukan Kreedit" />
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