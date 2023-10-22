<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="nav-link-icon"><i data-feather="home"></i></div>
                    Dashboard
                </a>

                <a class="nav-link" href="/dashboard">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Profile
                </a>

                <!-- Sidenav Heading (Custom)-->
                <div class="sidenav-menu-heading">Custom</div>
                <!-- Sidenav Accordion (Flows)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Flows
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                        <a class="nav-link" href="wizard.html">Wizard</a>
                    </nav>
                </div>

                <a class="nav-link bold" href="/dashboard">
                    <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Nama User</div>
            </div>
        </div>
    </nav>
</div>