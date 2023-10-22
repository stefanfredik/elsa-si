<?= $this->extend("temp/index"); ?>
<?= $this->section("content"); ?>

<div class="mt-n10">
    <div class="border p-3 rounded bg-white shadow">
        <?php
        echo view("/dashboard/dashboard/admin");
        ?>
    </div>
</div>

<?= $this->endSection(); ?>