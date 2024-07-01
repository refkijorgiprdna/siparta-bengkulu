<!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="bx bx-home-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            {{--  <li>
                                <a href="{{ route('kalender') }}">
                                    <i data-feather="calendar"></i>
                                    <span>Kalender</span>
                                </a>
                            </li>  --}}

                            {{--  <li>
                                <a href="kalender.html">
                                    <i class="bx bx-calendar-event"></i>
                                    <span>Kalender</span>
                                </a>
                            </li>  --}}

                            <li class="menu-title">Apps</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow @if(Request::segment(2) == 'wisata' || Request::segment(2) == 'galeri-wisata') mm-active  @endif">
                                    <i class="bx bx-photo-album"></i>
                                    <span>Wisata</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li class="@if(Request::segment(2) == 'wisata' || Request::segment(2) == 'galeri-wisata') mm-active  @endif"><a href="{{ route('wisata.index') }}">Data Wisata</a></li>
                                    <li class="@if(Request::segment(2) == 'sub-wisata' || Request::segment(2) == 'galeri-sub-wisata') mm-active  @endif"><a href="{{ route('sub-wisata.index') }}">Data Sub Wisata</a></li>
                                    {{--  <li>
                                        <a href="javascript: void(0);" class="has-arrow">Sub Wisata</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="{{ route('sub-wisata.index') }}">Data Sub Wisata</a></li>
                                            <li><a href="{{ route('galeri-sub-wisata.index') }}">Galeri Sub Wisata</a></li>
                                        </ul>
                                    </li>  --}}
                                </ul>
                            </li>
                            <li class="@if(Request::segment(2) == 'hotel' || Request::segment(2) == 'galeri-hotel') mm-active  @endif">
                                <a href="{{ route('hotel.index') }}" >
                                    <i class="bx bx-hotel"></i>
                                    <span>Hotel</span>
                                </a>
                            </li>

                            {{--  <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-hotel"></i>
                                    <span>Hotel</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('hotel.index') }}">Data Hotel</a></li>
                                </ul>
                            </li>  --}}

                            <li class="@if(Request::segment(2) == 'kuliner' || Request::segment(2) == 'galeri-kuliner') mm-active  @endif">
                                <a href="{{ route('kuliner.index') }}">
                                    <i class="bx bx-food-menu"></i>
                                    <span>Kuliner dan Oleh-Oleh</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
