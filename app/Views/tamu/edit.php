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
                            <?= form_open("/" . $meta["url"] . "/" . $tamu["id"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">No tamu</label>
                                <input required name="nama_tamu" class="form-control" type="text" placeholder="Masukan Nama tamu" value="<?= $tamu["nama_tamu"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Alamat Tamu</label>
                                <input required name="alamat_tamu" class="form-control" type="text" placeholder="Masukan Alamat Tamu" value="<?= $tamu["alamat_tamu"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Type tamu</label>
                                <input required name="telepon_tamu" class="form-control" type="text" placeholder="Masukan Type tamu" value="<?= $tamu["telepon_tamu"] ?>" />
                            </div>

                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="/tamu" class="btn btn-secondary">Batal</a>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>