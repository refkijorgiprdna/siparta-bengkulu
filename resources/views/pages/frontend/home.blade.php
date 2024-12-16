@extends('layouts.frontend.app')

@section('title')
    Beranda | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Hero Area
    ==============================-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide d-none d-md-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/1.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;<span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    &nbsp;</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-none d-md-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/2.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">ayo berkunjung ke Kota Bengkulu</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    SIPARTA Bengkulu </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-none d-md-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/3.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">&nbsp;</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-none d-md-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/4.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">&nbsp;</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-md-none d-sm-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/mobile_1.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    &nbsp; </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-md-none d-sm-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/mobile_2.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">ayo berkunjung ke <br> Kota Bengkulu</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    &nbsp; </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-md-none d-sm-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/mobile_3.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    &nbsp; </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-md-none d-sm-block">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ url('frontend/assets/img/hero/mobile_4.png') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">&nbsp;</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    &nbsp; </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                        src="{{ url('frontend/assets/img/icon/right-arrow.svg') }}" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img
                        src="{{ url('frontend/assets/img/icon/left-arrow.svg') }}" alt=""></button>
            </div>  --}}

        </div>
    </div>
    <!--======== / Hero Section ========-->
    <div class="booking-sec">
        <div class="container">
            <form class="booking-form ajax-contact" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
                <div class="input-wrap">
                    <div class="row align-items-center justify-content-center">
                        <div class="form-group text-center col-md-12 col-lg-auto">
                            <div class="search-input ">
                                <span class="sub-title" style="align-items: center;">
                                    <marquee behavior="" direction="left" scrollamount="11">~ Selamat Datang di Sistem
                                        Informasi Pariwisata Kota Bengkulu ~</marquee>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-3">
        <div class="container">
            <div class="text-center button-group">
                <a class="th-btn" href="{{ route('wisata') }}">Wisata</a>
                <a class="th-btn" href="{{ route('hotel') }}">Hotel</a>
                <a class="th-btn" href="{{ route('kuliner') }}">Kuliner dan Oleh-oleh</a>
            </div>
        </div>
    </div>
    <!--==============================
    Kategori
    ==============================-->
    <section class="category-area" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container th-container">
            <div class="title-area text-center">
                <span class="sub-title">Wornderful Place In Bengkulu</span>
                <h2 class="sec-title">Kategori Wisata</h2>

            </div>
            <div class="swiper categorySlider" id="categorySlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/pesona_alam_1.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Pesona Alam</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/sejarah_1.jpeg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Sejarah dan Budaya</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/religi_1.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Religi</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/pesona_alam_2.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Pesona Alam</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/sejarah_2.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Sejarah dan Budaya</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/religi_3.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Religi</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/pesona_alam_3.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Pesona Alam</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/sejarah_3.png') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Sejarah dan Budaya</a></h3>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img">
                                <img src="{{ url('frontend/assets/img/category/religi_2.jpg') }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Religi</a></h3>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--==============================
    Wisata
    ==============================-->
    <div class="destination-area position-relative overflow-hidden" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Top Destination</span>
                <h2 class="sec-title">Destinasi Populer</h2>
            </div>
            <div class="swiper th-slider destination-slider" id="aboutSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/pantai_panjang.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Pantai Panjang</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/cugung_abbas.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Tapan Busik Cugung Abbas</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/benteng.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Benteng Marlborough</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/danau_dendam.jpeg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Danau Dendam Tak Sudah</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/bung_karno.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Rumah Pengasingan Bung Karno</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/berendo.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Berendo Bengkulu</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/pantai_malabero.jpeg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Pantai Malabero</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <img src="{{ url('frontend/assets/img/destination/pulau_tikus.jpg') }}"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            <a>Pulau Tikus</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('wisata') }}" class="popup-content th-btn style3 th-icon">Lihat Semua</a>
            </div>
        </div>
    </div>
    <!--==============================
    Hotel
    ==============================-->
    <section class="position-relative bg-top-center overflow-hidden space" id="service-sec" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center">
                        <span class="sub-title">Best Hotels For You</span>
                        <h3 class="sec-title">Hotel di Kota Bengkulu</h3>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider ">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($hotel as $item)
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="{{ url('storage/' . $item->galerihotel->first()->image) }}" alt="image">
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h3>
                                        <div class="text-warning font-size-23">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $item->bintang)
                                                    <i class="mdi mdi-star"></i>
                                                @else
                                                    <i class="mdi mdi-star-outline"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <div style="color: rgb(0, 0, 0); font-weight: 400; font-size: 14px; text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                            {!! $item->deskripsi !!}
                                        </div>
                                        <div class="tour-action mt-4">
                                            <a href="{{ route('user.hotel-show', $item->slug) }}" class="th-btn style4 th-icon">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('hotel') }}" class="th-btn style3 th-icon">Lihat Semua</a>
            </div>
        </div>

    </section>

    <!--==============================
    Kuliner dan Oleh-Oleh
    ==============================-->
    <section class="position-relative bg-top-center overflow-hidden" id="service-sec" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center">
                        <h3 class="sec-title">Kuliner dan Oleh-Oleh di Kota Bengkulu</h3>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider ">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($kuliner as $item)
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="{{ url('storage/' . $item->galerikuliner->first()->image) }}" alt="image">
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h3>
                                        <div style="color: rgb(0, 0, 0); font-weight: 400; font-size: 14px; text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                            {!! $item->deskripsi !!}
                                        </div>
                                        <div class="tour-action mt-4">
                                            <a href="{{ route('user.kuliner-show', $item->slug) }}" class="th-btn style4 th-icon">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('kuliner') }}" class="th-btn style3 th-icon">Lihat Semua</a>
            </div>
        </div>
    </section>
    <!--==============================
    About Area
    ==============================-->
    <div class="about-area position-relative overflow-hidden space" id="about-sec" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ url('frontend/assets/img/normal/about5.jpeg') }}" alt="About">
                        </div>
                        <div class="img2">
                            <img src="{{ url('frontend/assets/img/normal/about3.jpeg') }}" alt="About">
                        </div>
                        <div class="img3">
                            <img src="{{ url('frontend/assets/img/normal/about1.jpeg') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5">
                            <span class="sub-title style1 ">Welcome to</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">SIPARTA BENGKULU</h2>

                            <p class="sec-text mb-30">
                                Sistem Informasi Pariwisata Kota (SIPARTA) Bengkulu adalah platform digital yang dirancang untuk
                                memudahkan wisatawan dan masyarakat lokal dalam mengakses informasi lengkap mengenai destinasi
                                wisata, hotel, serta kuliner yang ada di Kota Bengkulu.
                            </p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="{{ url('frontend/assets/img/icon/map3.svg') }}"alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Navigasi Interaktif</h5>
                                    <p class="about-item_text">Peta digital yang memudahkan pengguna menemukan lokasi-lokasi wisata.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="{{ url('frontend/assets/img/icon/guide.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Panduan Wisata</h5>
                                    <p class="about-item_text">Menyajikan informasi mendetail tentang berbagai destinasi wisata di Bengkulu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%">
            <img src="{{ url('frontend/assets/img/shape/shape_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%">
            <img src="{{ url('frontend/assets/img/shape/shape_3.png') }}" alt="shape">
        </div>

        <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%">
            <img src="{{ url('frontend/assets/img/normal/about-slide-img.png') }}" alt="shape">
        </div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%">
            <i class="fa-sharp fa-solid fa-star"></i><span>4.9k</span>
        </div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
                src="{{ url('frontend/assets/img/icon/emoji.png') }}" alt="">
        </div>
    </div>

    <!--==============================
    Counter Area
    ==============================-->
    <div class="counter-area space" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title-area text-center">
                    <span class="sub-title">Wisata, Hotel, <br> Kuliner dan Oleh-Oleh</span>
                    <h2 class="sec-title">Data</h2>

                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">{{ $wisataCount }}</span></h3>
                            <h6 class="counter-title">Wisata</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">{{ $hotelCount }}</span></h3>
                            <h6 class="counter-title">Hotel</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">{{ $kulinerCount }}</span></h3>
                            <h6 class="counter-title">Kuliner dan Oleh-Oleh</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="7%">
            <img src="{{ url('frontend/assets/img/shape/shape_3.png') }}" alt="shape">
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-left="3%">
            <img src="{{ url('frontend/assets/img/shape/shape_6.png') }}" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="5%">
            <img src="{{ url('frontend/assets/img/shape/shape_5.png') }}" alt="shape">
        </div>
    </div>
@endsection



