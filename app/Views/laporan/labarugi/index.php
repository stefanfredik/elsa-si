<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>
<div class="mt-n10">
    <div class="card card-icon mb-4">
        <div class="row g-0">
            <div class="col-auto card-icon-aside bg-primary"><i class="me-1 text-white-50" data-feather="users"></i></div>
            <div class="col">
                <div class="card-body py-5">
                    <h5 class="card-title"><?= $title; ?></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header"><?= $title ?></div>
        <div id="data" class="card-body">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>