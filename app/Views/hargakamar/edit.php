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
                            <?= form_open("/" . $meta["url"] . "/" . $hargaKamar["id"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Harga Kamar</label>
                                <input value="<?= $hargaKamar["jenis_kamar"] ?>" required name="jenis_kamar" class="form-control" type="text" placeholder="Masukan Jenis Kamar" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Harga Kamar</label>
                                <input value="<?= $hargaKamar["harga_kamar"] ?>" required name="harga_kamar" class="form-control" type="number" placeholder="Masukan Harga Kamar" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Rincian Kamar</label>
                                <textarea class="form-control" name="rincian" id="" cols="30" rows="10">
                                    <?= $hargaKamar["rincian"] ?>"
                                </textarea>
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