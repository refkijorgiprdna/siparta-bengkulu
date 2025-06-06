<!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ url('frontend/assets/img/logo2.png') }}" alt="SIPARTA"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li><a class="{{ request()->routeIs('wisata') ? 'active' : '' }}" href="{{ route('wisata') }}">Wisata</a></li>
                <li><a class="{{ request()->routeIs('hotel') ? 'active' : '' }}" href="{{ route('hotel') }}">Hotel</a></li>
                <li><a class="{{ request()->routeIs('kuliner') ? 'active' : '' }}" href="{{ route('kuliner') }}">Kuliner dan Oleh-oleh</a></li>
                {{--  <li><a class="{{ request()->routeIs('data') ? 'active' : '' }}" href="{{ route('data') }}">Data</a></li>  --}}
                <li class="menu-item-has-children">
                    <a href="#">Data</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('destinasi-wisata') }}">Destinasi Wisata</a></li>
                        <li><a href="{{ route('ekonomi-kreatif') }}">Ekonomi Kreatif</a></li>
                        <li><a href="{{ route('pemasaran-pariwisata') }}">Pemasaran Pariwisata</a></li>
                    </ul>
                </li>
                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About SIPARTA</a></li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Header Area
==============================-->
<header class="th-header header-layout1">

    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{ url('frontend/assets/img/logo.png') }}" alt="SIPARTA"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                                <li><a class="{{ request()->routeIs('wisata') ? 'active' : '' }}" href="{{ route('wisata') }}">Wisata</a></li>
                                <li><a class="{{ request()->routeIs('hotel') ? 'active' : '' }}" href="{{ route('hotel') }}">Hotel</a></li>
                                <li><a class="{{ request()->routeIs('kuliner') ? 'active' : '' }}" href="{{ route('kuliner') }}">Kuliner dan Oleh-oleh</a></li>
                                {{--  <li><a class="{{ request()->routeIs('data') ? 'active' : '' }}" href="{{ route('data') }}">Data</a></li>  --}}
                                <li class="menu-item-has-children">
                                    <a href="#">Data</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('sekretariat') }}">Sekretariat</a></li>
                                        <li><a href="{{ route('destinasi-wisata') }}">Destinasi Wisata</a></li>
                                        <li><a href="{{ route('ekonomi-kreatif') }}">Ekonomi Kreatif</a></li>
                                        <li><a href="{{ route('pemasaran-pariwisata') }}">Pemasaran Pariwisata</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About SIPARTA</a></li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            @if (Auth::user())
                                @if (Auth::user()->roles == 'ADMIN')
                                    <a href="{{ route('dashboard') }}" class="th-btn style3 th-icon">Dashboard</a>
                                @else
                                    <form action="{{ url('logout') }}" method="POST">
                                        @csrf
                                        <button class="th-btn style3 th-icon" type="submit">Logout</button>
                                    </form>
                                @endif
                            @else
                                <a href="#login-form" class="popup-content th-btn style3 th-icon">Sign In</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg" data-mask-src="{{ url('frontend/assets/img/logo_bg_mask.png') }}"></div>
        </div>
    </div>
</header>
