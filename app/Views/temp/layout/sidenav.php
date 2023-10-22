<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">

        <div class="sidenav-menu">
            <div class="text-center my-2">
                <img width="80" class="img-fluid my-2" src="/assets/img/logo.png" alt="">
                <p class="fw-bold"><?= APP_SLUG ?></p>
            </div>
            <hr class="mx-3">
            <?php
            echo $this->include("/sidenav/admin");
            // if (logged_in()) {
            //     if (in_groups('admin')) echo view("/sidenavmenu/admin");
            //     if (in_groups('kepala-desa') || in_groups('pendamping'))  echo view("/sidenavmenu/  kepaladesa");
            // }
            ?>
        </div>

        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">User</div>
            </div>
        </div>
    </nav>
</div>