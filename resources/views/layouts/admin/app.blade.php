<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('siparta/assets/images/Kota Bengkulu.png') }}">

        @stack('addon-style')

        @include('includes.admin.style')



    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('includes.admin.navbar')

            @include('includes.admin.sidebar')

            <div class="main-content">

                <div class="page-content">

                    @yield('content')

                </div>
                <!-- End Page-content -->

                @include('includes.admin.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('includes.admin.script')

        @stack('addon-script')

    </body>

</html>
