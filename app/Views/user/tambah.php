<?= $this->extend("/temp/index") ?>
<?= $this->section("content") ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><?= $title ?></div>
            <div class="card-body">
                <?= form_open("/user", ['class' => "needs-validation"]); ?>
                <div class="row mt-2">
                    <div class="col-lg-4">
                        Nama User
                    </div>
                    <div class="col-lg-8">
                        <input required name="nama_user" type="text" class="form-control <?= validation_show_error(('nama_user')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama User" value="<?= old('nama_user'); ?>">
                        <div id="" class="invalid-feedback"><?= validation_show_error('nama_user') ?></div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-4">
                        Username
                    </div>
                    <div class="col-lg-8">
                        <input required name="username" type="text" class="form-control <?= validation_show_error('username') ? 'is-invalid' : ''; ?>" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                        <div id="" class="invalid-feedback"><?= validation_show_error('username') ?></div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-lg-4">
                        User Role
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control <?= validation_show_error('jabatan') ? 'is-invalid' : ''; ?>" name="jabatan" id="">
                            <?php foreach ($role as $r) : ?>
                                <option <?= set_value('jabatan') == $r['name'] ? 'selected' : ''; ?> value="<?= $r['name']; ?>"><?= $r['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="" class="invalid-feedback"></div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-lg-4">
                        Password
                    </div>
                    <div class="col-lg-8">
                        <input required name="password" type="text" class="form-control <?= validation_show_error('password') ? 'is-invalid' : ''; ?>" placeholder="Masukan Password" value="<?= set_value('password'); ?>">
                        <div id="" class="invalid-feedback"><?= validation_show_error('password') ?></div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-lg-4">
                        Ulangi Password
                    </div>
                    <div class="col-lg-8">
                        <input required name="password2" type="text" class="form-control <?= validation_show_error('password2') ? 'is-invalid' : ''; ?>" placeholder="Masukan Ulang Password" value="<?= set_value('password2'); ?>">
                        <div id="" class="invalid-feedback"><?= validation_show_error("password2") ?></div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-8">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                        <a class="btn btn-info" href="/user">Kembali</a>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>