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
                            <?= form_open("/" . $meta["url"] . "/" . $akun["id"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">No Akun</label>
                                <input required name="no_akun" class="form-control" type="text" placeholder="Masukan Nomor Akun" value="<?= $akun["no_akun"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Nama Akun</label>
                                <input required name="nama_akun" class="form-control" type="text" placeholder="Masukan Nama Akun" value="<?= $akun["nama_akun"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Type Akun</label>
                                <input required name="type_akun" class="form-control" type="text" placeholder="Masukan Type Akun" value="<?= $akun["type_akun"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Jenis Akun</label>
                                <div class="form-check">
                                    <input value="Debit" class="form-check-input" type="radio" name="jenis_akun" id="flexRadioDefault1" <?= $akun["jenis_akun"] == "Kredit" ? "checked" : "" ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Debit
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input value="Kredit" class="form-check-input" type="radio" name="jenis_akun" id="flexRadioDefault2" <?= $akun["jenis_akun"] == "Kredit" ? "checked" : "" ?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Kredit
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Saldo Normal</label>
                                <input required name="saldo_normal" class="form-control" type="text" placeholder="Saldo Akun" value="<?= $akun["saldo_normal"] ?>" />
                            </div>

                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="/akun" class="btn btn-secondary">Batal</a>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>