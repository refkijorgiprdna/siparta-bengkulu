<!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="bx bx-home-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            {{--  <li>
                                <a href="#">
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

                            <li class="menu-title" data-key="t-apps">Apps</li>

                            <li class="@if(Request::segment(1) == 'wisata') mm-active  @endif">
                                <a href="{{ route('wisata') }}">
                                    <i class="bx bx-photo-album"></i>
                                    <span>Wisata</span>
                                </a>
                            </li>

                            <li class="@if(Request::segment(1) == 'hotel') mm-active  @endif">
                                <a href="{{ route('hotel') }}">
                                    <i class="bx bx-hotel"></i>
                                    <span>Hotel</span>
                                </a>
                            </li>

                            <li class="@if(Request::segment(1) == 'kuliner-dan-oleh-oleh') mm-active  @endif">
                                <a href="{{ route('kuliner') }}">
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
