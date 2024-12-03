@extends('layouts.frontend.app')

@section('title')
    About | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    About Area
    ==============================-->
    <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec" data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{ url('frontend/assets/img/normal/about6.jpeg') }}" alt="About">
                        </div>
                        <div class="img2">
                            <img src="{{ url('frontend/assets/img/normal/about4.jpeg') }}" alt="About">
                        </div>
                        <div class="img3 movingX">
                            <img src="{{ url('frontend/assets/img/normal/about2.jpeg') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="ps-xl-4">
                        <div class="title-area mb-20">
                            <span class="sub-title style1 ">Welcome To</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">SIPARTA BENGKULU</h2>
                        </div>
                        <p class="pe-xl-5">
                            Sistem Informasi Pariwisata Kota (SIPARTA) Bengkulu adalah platform digital
                            yang dirancang untuk memudahkan wisatawan dan masyarakat lokal dalam mengakses
                            informasi lengkap mengenai destinasi wisata di Kota Bengkulu.
                        </p>
                        <p class="mb-30 pe-xl-5">
                            Dengan SIPARTA, pengguna dapat menjelajahi berbagai tempat wisata menarik
                            seperti Pantai Panjang, Benteng Marlborough, dan objek wisata alam lainnya yang memukau.
                            Selain itu, SIPARTA juga menyajikan rekomendasi tempat makan dan penginapan
                            untuk melengkapi pengalaman wisata yang menyenangkan.
                        </p>
                        <p class="mb-30 pe-xl-5">
                            SIPARTA berkomitmen untuk mendukung sektor pariwisata Kota Bengkulu dengan menghadirkan
                            informasi yang akurat, terkini, dan mudah diakses, guna meningkatkan kenyamanan dan pengalaman
                            berwisata.
                        </p>
                        <div class="about-item-wrap">
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="{{ url('frontend/assets/img/icon/about_1_1.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Navigasi Interaktif</h5>
                                    <p class="about-item_text">Peta digital yang memudahkan pengguna menemukan lokasi-lokasi wisata.</p>
                                </div>
                            </div>
                            {{--  <div class="about-item style2">
                                <div class="about-item_img"><img src="{{ url('frontend/assets/img/icon/about_1_2.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Acara dan Festival</h5>
                                    <p class="about-item_text">Kalender acara budaya, festival, dan kegiatan menarik lainnya di Bengkulu.</p>
                                </div>
                            </div>  --}}
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="{{ url('frontend/assets/img/icon/about_1_3.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Panduan Wisata</h5>
                                    <p class="about-item_text">Menyajikan informasi mendetail tentang berbagai destinasi wisata di Bengkulu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="https://www.instagram.com/dinaspariwisatakotabengkulu/" class="th-btn style3 th-icon" target="_blank">Contact With Us</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="4%" data-left="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_2_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="5%">
            <img src="{{ url('frontend/assets/img/shape/shape_2_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_2_3.png') }}" alt="shape">
        </div>
        <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="2%">
            <img src="{{ url('frontend/assets/img/shape/shape_2_4.png') }}" alt="shape">
        </div>
    </div>
    <!--==============================
    elements Area
    ==============================-->
    <div class="elements-sec bg-white overflow-hidden">
        <div class="container-fluid">
            <div class="tags-container relative"></div>
        </div>
    </div>
    <!--==============================
    Team Area
    ==============================-->
    <section class="team-area3 position-relative bg-top-center space" data-bg-src="{{ url('frontend/assets/img/bg/team_bg_2.jpg') }}">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <h2 class="sec-title">DINAS PARIWISATA KOTA BENGKULU</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider3 has-shadow" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="{{ url('frontend/assets/img/team/pantai_malabero.jpeg') }}" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="{{ url('frontend/assets/img/team/team_1_1.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title">Amrullah, SP</h3>
                                        <span class="team-desig">Kepala Dinas</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="{{ url('frontend/assets/img/team/pantai_malabero.jpeg') }}" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="{{ url('frontend/assets/img/team/team_1_2.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title">Nina Nurdin, S.Sos., M.Si</h3>
                                        <span class="team-desig">Sekretaris</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="{{ url('frontend/assets/img/team/pantai_malabero.jpeg') }}" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="{{ url('frontend/assets/img/team/team_1_3.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title">Michel Smith</h3>
                                        <span class="team-desig">Tourist Guide</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="{{ url('frontend/assets/img/team/pantai_malabero.jpeg') }}" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="{{ url('frontend/assets/img/team/team_1_4.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title">Michel Smith</h3>
                                        <span class="team-desig">Tourist Guide</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="{{ url('frontend/assets/img/team/pantai_malabero.jpeg') }}" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="{{ url('frontend/assets/img/team/team_1_5.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title">Michel Smith</h3>
                                        <span class="team-desig">Tourist Guide</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
                <button data-slider-prev="#teamSlider3" class="slider-arrow slider-prev"><img src="{{ url('frontend/assets/img/icon/right-arrow2.svg') }}" alt=""></button>
                <button data-slider-next="#teamSlider3" class="slider-arrow slider-next"><img src="{{ url('frontend/assets/img/icon/left-arrow2.svg') }}" alt=""></button>
            </div>
        </div>
    </section>
@endsection



