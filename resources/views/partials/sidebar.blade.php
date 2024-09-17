<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('template/dist/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/dist/images/logo-dark.png') }}" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('template/dist/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/dist/images/logo-light.png') }}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                {{-- NAV MENU --}}
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link " href="#sidebarData" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarData">
                        <i class="fa-solid fa-database"></i> <span data-key="t-dashboards">Data</span>
                    </a>
                    <div class="collapse menu-dropdown {{ $title === 'Data Kamar' || $title==='Data Penghuni' ? 'show' : '' }}" id="sidebarData">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/adminkamar" class="nav-link {{ $title ==='Data Kamar' ? 'active' : '' }}" data-key="t-analytics"> Kamar </a>
                            </li>
                            <li class="nav-item">
                                <a href="/adminpenghuni" class="nav-link {{ $title ==='Data Penghuni' ? 'active' : '' }}" data-key="t-analytics"> Penghuni </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link " href="#sidebarManajemen" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarManajemen">
                        <i class="fa-solid fa-bars-progress"></i></i> <span data-key="t-dashboards">Manajemen</span>
                    </a>
                    <div class="collapse menu-dropdown {{ $title === 'Manajemen Kamar' || $title==='Manajemen Pembayaran' || $title === 'Scan Barcode' || $title ==='Manajemen Jatuh Tempo' ? 'show' : '' }}" id="sidebarManajemen">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/manajemenkamar" class="nav-link {{ $title ==='Manajemen Kamar' ? 'active' : '' }}" data-key="t-analytics"> Kamar </a>
                            </li>
                            <li class="nav-item">
                                <a href="/manajemenjatuhtempo" class="nav-link {{ $title ==='Manajemen Jatuh Tempo' ? 'active' : '' }}" data-key="t-analytics"> Jatuh Tempo </a>
                            </li>
                            <li class="nav-item">
                                <a href="/adminpembayaran" class="nav-link {{ $title ==='Manajemen Pembayaran' ? 'active' : '' }}" data-key="t-analytics"> Pembayaran </a>
                            </li>
                            <li class="nav-item">
                                <a href="/scanbarcodekamarisi" class="nav-link {{ $title ==='Scan Barcode' ? 'active' : '' }}" data-key="t-analytics"> Scan Barcode </a>
                            </li>
                        </ul>
                    </div>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>