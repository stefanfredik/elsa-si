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
                                <div class="row mb-5">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Tanggal Transaksi</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="tanggal_transaksi" class="form-control" type="date" placeholder="Masukan Tanggal Transaksi" <input type="date" value="<?php echo date('Y-m-d'); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row mb-5" id="">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Nama Tamu</label>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="d-flex gap-5 mb-3">
                                            <div class="">
                                                <input value="tamuLama" class="form-check-input" type="radio" name="jenis_tamu" id="tamuLama">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pilih Tamu
                                                </label>
                                            </div>
                                            <div class="">
                                                <input value="tamuBaru" class="form-check-input" type="radio" name="jenis_tamu" id="tamuBaru" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tamu Baru
                                                </label>
                                            </div>
                                        </div>

                                        <div id="tamuLamaSelect" style="display: none;" class="row mb-5">
                                            <div>Pilih Tamu</div>
                                            <div class="col"><select name="id_tamu" class="form-control">
                                                    <?php foreach ($dataTamu as $dt) : ?>
                                                        <option value="<?= $dt["id"] ?>"><?= $dt["nama_tamu"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button onclick="tamuBaru()" class="btn btn-primary">Tamu Baru</button>
                                            </div>
                                        </div>


                                        <div style="display: none;" id="tamuBaruSelect" class="border p-3 rounded">
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
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Check In</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="check_in" class="form-control" type="date" placeholder="Masukan Waktu Check In" />
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Check out</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="check_out" class="form-control" type="date" placeholder="Masukan Waktu Check Out" />
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Room</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="room" class="form-control" type="text" placeholder="Masukan Room" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Booking</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="booking" class="form-control" type="text" placeholder="Masukan Booking" />
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Harga</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="harga" class="form-control" type="text" placeholder="Masukan Harga" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Saldo</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="saldo" class="form-control" type="number" placeholder="Masukan Saldo" />
                                    </div>
                                </div>


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

<?= $this->section("script") ?>
<script>
    const radioButton = $("input[type='radio'][name='jenis_tamu']");

    radioButton.on("change", function() {
        const radioButtonValue = $(this).val();

        if (radioButtonValue == "tamuBaru") {
            $("#tamuBaruSelect").show();
            $("#tamuLamaSelect").hide();
        } else {
            $("#tamuBaruSelect").hide();
            $("#tamuLamaSelect").show();
        }
    });
</script>
<?= $this->endSection() ?>