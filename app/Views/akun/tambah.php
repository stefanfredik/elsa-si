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
                            <?= form_open("/akun") ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">No Akun</label>
                                <input required name="no_akun" class="form-control" type="text" placeholder="Masukan Nomor Akun" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Nama Akun</label>
                                <input required name="nama_akun" class="form-control" type="text" placeholder="Masukan Nama Akun" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Type Akun</label>
                                <input required name="type_akun" class="form-control" type="text" placeholder="Masukan Type Akun" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Saldo Normal</label>
                                <input required name="saldo_normal" class="form-control" type="text" placeholder="Masukan Nomor Akun" />
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