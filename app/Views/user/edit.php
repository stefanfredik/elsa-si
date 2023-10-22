<?= $this->extend("/temp/index") ?>
<?= $this->section("content") ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><?= $title ?></div>
            <div class="card-body">
                <?= form_open("/user/" . $user["id"], ['class' => "needs-validation"]); ?>
                <div class="row mt-2">
                    <div class="col-lg-4">
                        Nama User
                    </div>
                    <div class="col-lg-8">
                        <input required name="nama_user" type="text" class="form-control <?= validation_show_error(('nama_user')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama User" value="<?= empty(set_value('nama_user')) ? $user['nama_user'] : set_value('nama_user');  ?>">
                        <div id="" class="invalid-feedback"><?= validation_show_error('nama_user') ?></div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-4">
                        Username
                    </div>
                    <div class="col-lg-8">
                        <input required name="username" type="text" class="form-control <?= validation_show_error('username') ? 'is-invalid' : ''; ?>" placeholder="Masukan Username" value="<?= empty(set_value('username')) ? $user['username'] : set_value('username');  ?>">
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
                                <option <?= $user['jabatan'] == $r['name'] ? 'selected' : ''; ?> value="<?= $r['name']; ?>"><?= $r['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="" class="invalid-feedback"></div>
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