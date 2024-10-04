<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Refki Jorgi Pradana">
    <meta name="description" content="Sistem Informasi Pariwisata Kota Bengkulu">
    <meta name="keywords" content="SIPARTA Bengkulu">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.frontend.favicon')

    @stack('before-style')

    @include('includes.frontend.style')

    @stack('after-style')
</head>

<body>

    <!-- [if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif] -->


    <!--********************************
   		Code Start From Here
	******************************** -->

    @include('includes.frontend.navbar')

    @yield('content')

    @include('includes.frontend.footer')

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    @include('includes.frontend.modal')

    @stack('before-script')

    @include('includes.frontend.script')

    @stack('after-script')
</body>

</html>
