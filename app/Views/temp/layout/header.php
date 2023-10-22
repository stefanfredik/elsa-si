<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <div class="page-header-title">
                        <?php if (!empty($meta["icon"])) : ?>
                            <?= $meta["icon"] ?>
                        <?php else : ?>
                            <i class="bi bi-file-earmark fa-sm"></i>
                        <?php endif; ?>
                        <div><?= @$meta["title"] ?></div>
                    </div>
                    <div class="page-header-subtitle"><?= @$meta["desc"] ?></div>
                </div>
                <!-- <div class="col-12 col-xl-auto mt-4">Optional page header content</div> -->
            </div>
        </div>
    </div>
</header>