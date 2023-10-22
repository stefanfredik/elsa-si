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
                                <label for="exampleFormControlInput1">Nama Tamu</label>
                                <input required name="nama_tamu" class="form-control" type="text" placeholder="Masukan Nama Tamu" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Alamat Tamu</label>
                                <input required name="alamat_tamu" class="form-control" type="text" placeholder="Masukan Alamat Tamu" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Telepon</label>
                                <input required name="telepon_tamu" class="form-control" type="text" placeholder="Masukan Nomor Telepon" />
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