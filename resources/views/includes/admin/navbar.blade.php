<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="dashboard.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url('siparta/assets/images/Kota Bengkulu.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url('siparta/assets/images/Kota Bengkulu.png') }}" alt="" height="24"> <span class="logo-txt">SIPARTA</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="">
                <span class="logo">
                    <img src="#" alt="" height="24"> <span class="logo-txt" style="color: white;">SISTEM INFORMASI PARIWISATA KOTA BENGKULU</span>
                </span>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="grid" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="https://pariwisata.bengkulukota.go.id/" target="_blank">
                                    <img src="{{ url('siparta/assets/images/brands/bengkulu.png') }}" alt="">
                                    <span>Dinas Pariwisata</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="https://www.instagram.com/dinaspariwisatakotabengkulu/" target="_blank">
                                    <img src="{{ url('siparta/assets/images/brands/instagram.png') }}" alt="">
                                    <span>Instagram</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="https://www.facebook.com/profile.php?id=100071511889475" target="_blank">
                                    <img src="{{ url('siparta/assets/images/brands/facebook.png') }}" alt="">
                                    <span>Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">
                        {{ Auth::user()->name }}
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
