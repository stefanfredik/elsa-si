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
                            <?= form_open("/" . $meta["url"] . "/" . $pemasukan["id"]) ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Tanggal Transaksi</label>
                                <input required name="tanggal_transaksi" class="form-control" type="date" placeholder="Masukan Tanggal Transaksi" value="<?= $pemasukan["tanggal_transaksi"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Nama Tamu</label>
                                <select name="id_tamu" class="form-control">
                                    <?php foreach ($dataTamu as $dt) : ?>
                                        <option <?= $pemasukan["tanggal_transaksi"] == $dt["id"]  ?? "selected"  ?> value="<?= $dt["id"] ?>"><?= $dt["nama_tamu"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Check In</label>
                                <input required name="check_in" class="form-control" type="date" placeholder="Masukan Waktu Check In" value="<?= $pemasukan["check_in"] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Check out</label>
                                <input required name="check_out" class="form-control" type="date" placeholder="Masukan Waktu Check Out" value="<?= $pemasukan["check_out"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Room</label>
                                <input required name="room" class="form-control" type="text" placeholder="Masukan Room" value="<?= $pemasukan["room"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Booking</label>
                                <input required name="booking" class="form-control" type="text" placeholder="Masukan Booking" value="<?= $pemasukan["booking"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Harga</label>
                                <input required name="harga" class="form-control" type="text" placeholder="Masukan Harga" value="<?= $pemasukan["harga"] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Saldo</label>
                                <input required name="saldo" class="form-control" type="number" placeholder="Masukan Saldo" value="<?= $pemasukan["saldo"] ?>" />
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