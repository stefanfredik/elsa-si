<div class="nav accordion" id="accordionSidenav">

    <div class="sidenav-menu-heading d-sm-none">Account</div>

    <a class="nav-link d-sm-none" href="#!">
        <div class="nav-link-icon"><i data-feather="bell"></i></div>
        Alerts
        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
    </a>

    <div class="sidenav-menu-heading">Menu Utama</div>

    <a class="nav-link <?= url_is("/dashboard") ? 'active' : '' ?>" href="/dashboard">
        <div class="nav-link-icon"><i data-feather="home"></i></div>
        Dashboard
    </a>

    <a class="nav-link <?= url_is("/profile") ? 'active' : '' ?>" href="/profile">
        <div class="nav-link-icon"><i data-feather="user"></i></div>
        Profile
    </a>


    <div class="sidenav-menu-heading">Front Office</div>



    <a class="nav-link <?= url_is("/akun") ? 'active' : '' ?>" href="/akun">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Data Akun
    </a>

    <a class="nav-link <?= url_is("/tamu") ? 'active' : '' ?>" href="/tamu">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Data Tamu
    </a>

    <a class="nav-link <?= url_is("/transaksi") ? 'active' : '' ?>" href="/transaksi">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Data Transaksi
    </a>

    <a class="nav-link <?= url_is("/pemasukan") ? 'active' : '' ?>" href="/pemasukan">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Transaksi Pemasukan
    </a>

    <a class="nav-link <?= url_is("/pengeluaran") ? 'active' : '' ?>" href="/pengeluaran">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Transaksi Pengeluaran
    </a>

    <a class="nav-link <?= url_is("/jurnalumum") ? 'active' : '' ?>" href="/jurnalumum">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Transaksi Jurnall Umum
    </a>

    <a class="nav-link <?= url_is("/laporan") ? 'active' : '' ?>" href="/laporan">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Laporan
    </a>


    <div class="sidenav-menu-heading">Front Office</div>
    <a class="nav-link <?= url_is("/user") ? 'active' : '' ?>" href="/user">
        <div class="nav-link-icon"><i data-feather="users"></i></div>
        Data User
    </a>


    <a class="nav-link <?= url_is("/hargakamar") ? 'active' : '' ?>" href="/hargakamar">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Harga Kamar
    </a>

    <a class="nav-link <?= url_is("/pemasukan") ? 'active' : '' ?>" href="/pemasukan">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Pemasukan
    </a>

    <a class="nav-link <?= url_is("/laporan") ? 'active' : '' ?>" href="/laporan">
        <div class="nav-link-icon"><i data-feather="layers"></i></div>
        Laporan Keuangan
    </a>

    <div class="sidenav-menu-heading">Front Office</div>

    <a class="nav-link collapsed <?= url_is("/laporan*") ? 'active' : '' ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#laporan" aria-expanded="false" aria-controls="collapseDashboards">
        <div class="nav-link-icon"><i data-feather="activity"></i></div>
        Laporan
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="laporan" data-bs-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link <?= url_is("/laporan/jurnalumum") ? 'active' : '' ?>" href="/laporan/jurnalumum">Jurnal Umum</a>
            <a class="nav-link <?= url_is("/laporan/neraca") ? 'active' : '' ?>" href="/laporan/bukubesar">Buku Besar</a>
            <a class="nav-link <?= url_is("/laporan/neraca") ? 'active' : '' ?>" href="/laporan/neraca">Neraca</a>
            <a class="nav-link <?= url_is("/laporan/labarugi") ? 'active' : '' ?>" href="/laporan/labarugi">Laba-Rugi</a>
            <a class="nav-link <?= url_is("/laporan/perubahanmodal") ? 'active' : '' ?>" href="/laporan/perubahanmodal">Perubahan Modal</a>
        </nav>
    </div>




    <a class="nav-link" href="/logout">
        <div class="nav-link-icon"><i data-feather="log-out"></i></div>
        Logout
    </a>
</div>