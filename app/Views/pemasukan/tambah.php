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
                                        <label for="exampleFormControlInput1">ID Transaksi</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="id_transaksi" class="form-control" type="text" placeholder="Masukan ID Transaksi" value="<?= $idTransaksi ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row mb-5">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Tanggal Transaksi</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input required name="tanggal_transaksi" class="form-control" type="date" placeholder="Masukan Tanggal Transaksi" value="<?php echo date('Y-m-d'); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row mb-5" id="">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Nama Tamu</label>
                                    </div>

                                    <div class="col-lg-8">
                                        <div id="tamuLamaSelect" class="row mb-5">
                                            <div>Pilih Tamu</div>
                                            <div class="col"><select name="id_tamu" class="select form-control">
                                                    <?php foreach ($dataTamu as $dt) : ?>
                                                        <option value="<?= $dt["id"] ?>"><?= $dt["nama_tamu"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="">
                                            <a href="/tamu/tambah" class="btn btn-primary">Tamu Baru</a>
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
                                        <input value="<?= date('Y-m-d') ?>" id="tanggalCheckin" required name="check_in" class="form-control" type="date" placeholder="Masukan Waktu Check In" />
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Check out</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input value="<?= date('Y-m-d') ?>" id="tanggalCheckout" required name="check_out" class="form-control" type="date" placeholder="Masukan Waktu Check Out" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Room</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="room" class="form-control" id="room-select" required>
                                            <option value="">Pilih Room</option>
                                            <?php foreach ($dataRoom as $dt) :  ?>
                                                <option value="<?= $dt["id"] ?>"><?= $dt["jenis_kamar"] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Booking</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="booking" id="" class="form-control">
                                            <?php foreach ($dataBooking as $dt) :  ?>
                                                <option value="<?= $dt["id"] ?>"><?= $dt["nama_booking"] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="exampleFormControlInput1">Diskon</label>
                                    </div>
                                    <div class="col-lg">
                                        <div class="input-group mb-3">
                                            <input name="diskon" id="inputDiskon" type="text" class="form-control" aria-label="Diskon">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="border rounded p-2 my-2 bg-gray-100">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="exampleFormControlInput1">Harga Kamar</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="fs-3" id="label-harga"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="exampleFormControlInput1">Diskon</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="fs-3" id="labelDiskon"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <label for="exampleFormControlInput1">Total</label>
                                        </div>

                                        <div class="col-lg-8">
                                            <div>
                                                <div class="fs-3" id="labelTotal"></div>
                                            </div>
                                        </div>
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

<script>
    $('.select').select2({
        theme: 'bootstrap-5'
    });
</script>


<script>
    let diskon = 0;
    let hargaKamar = 0;
    let total = 0;
    let durasiBooking = 0;

    $(document).ready(function() {
        const selectElement = $("#room-select");

        selectElement.on("change", function() {
            const roomId = $(this).val();

            $.ajax({
                url: `/<?= $meta["url"] ?>/findRoom/${roomId}`,
                success: function(data) {
                    hargaKamar = data.room.harga_kamar;
                    $("#label-harga").text(rupiah(hargaKamar));
                    hitungTotal();
                }
            });
        });
    });


    $(document).ready(function() {
        var input = $("#inputDiskon");
        var label = $("#labelDiskon");
        input.on("change", function() {
            diskon = input.val();
            label.text(`${diskon} %`);
            hitungTotal();
        });
    });


    function hitungTotal() {
        var hargaPerMalam = hargaKamar;

        if (diskon > 0) {
            var diskonPersen = diskon / 100;
            var diskonNominal = hargaPerMalam * diskonPersen;

            hargaPerMalam -= diskonNominal;
        }
        total = hargaPerMalam * hitungDurasi();
        console.log(total);

        $("#labelTotal").text(rupiah(total));
    }

    function hitungDurasi() {
        var tanggalMulai = document.getElementById("tanggalCheckin").value;
        var tanggalAkhir = document.getElementById("tanggalCheckout").value;

        var date1 = new Date(tanggalMulai);
        var date2 = new Date(tanggalAkhir);

        var diff = date2 - date1;
        if (diff == 0) {
            diff = 1;
        }
        return diff;
    }
</script>

<?= $this->endSection(); ?>