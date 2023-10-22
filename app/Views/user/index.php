<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>
<div class="mt-n10">
    <div class="card card-icon mb-4">
        <div class="row g-0">
            <div class="col-auto card-icon-aside bg-primary"><i class="me-1 text-white-50" data-feather="users"></i></div>
            <div class="col">
                <div class="card-body py-5">
                    <h5 class="card-title"><?= $title; ?></h5>
                    <p class="card-text">Jumlah User : <?= $userCount; ?></p>
                </div>
            </div>
        </div>
    </div>

    <a href="<?= $meta["url"] . "/tambah" ?>" class="btn btn-primary my-3"><i class="bi bi-plus-lg "></i></a>
    <div class="card mb-4">
        <div class="card-header">Table User</div>
        <div id="data" class="card-body">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 border rounded">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-7">Nama User</th>
                            <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                            <th width="150px" class="text-secondary opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataUser as $dt) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <i class="text-primary fa-lg bi bi-person-circle mx-3"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?= $dt['nama_user']; ?></h6>
                                            <p class="text-xs text-secondary mb-0">Username : <?= $dt['username']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= @ucwords($dt['jabatan']); ?></p>
                                    <p class="text-xs text-secondary mb-0">Created At : <?= $dt['created_at']; ?></p>
                                </td>

                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="/user/password/<?= $dt['id']; ?>" class="btn btn-sm btn-secondary"><i class="bi bi-key"></i></a>
                                        <a href="/user/edit/<?= $dt['id']; ?>" class="btn btn-sm btn-primary"><i class="bi bi-pen"></i></a>
                                        <button onclick="confirmDelete('/user/delete/<?= $dt['id']; ?>')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>