@extends('layouts.frontend.app')

@section('title')
    {{ $item->nama }} | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $item->nama }} <br>
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $item->bintang)
                            <i class="mdi mdi-star text-warning"></i>
                        @else
                            <i class="mdi mdi-star-outline text-warning"></i>
                        @endif
                    @endfor
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('hotel') }}">Hotel</a></li>
                    <li>{{ $item->nama }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space-extra" data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9 col-lg-7">
                    <div class="tour-page-single">
                        <div class="slider-area tour-slider1">
                            {{--  <div class="mb-4" >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-21x9">
                                            <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                            <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    @forelse ($item->galerihotel as $key => $galeri)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/' . $galeri->image) }}" alt="Image">
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>

                            <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img src="{{ url('frontend/assets/img/icon/hero-arrow-left.svg') }}" alt=""></button>
                            <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img src="{{ url('frontend/assets/img/icon/hero-arrow-right.svg') }}" alt=""></button>
                        </div>
                        <div class="page-content">
                            <div class="page-meta mb-45"></div>
                            {{--  <h2 class="box-title">Explore the Beauty of Maldives Costal</h2>  --}}
                            <p class="box-text mb-30">
                                {!! $item->deskripsi !!}
                            </p>
                            <div class="tour-snapshot">
                                <h3 class="box-title text">Informasi</h3>
                                <div class="tour-snap-wrapp">
                                    <div class="tour-snap">
                                        <div class="icon">
                                            <img src="{{ url('frontend/assets/img/icon/location-dot.svg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <span class="title">Alamat</span>
                                            <span>{{ $item->alamat }}</span>
                                        </div>
                                    </div>
                                    <div class="tour-snap">
                                        <div class="icon">
                                            <img src="{{ url('frontend/assets/img/icon/tour_icon_2.svg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <span class="title">Booking Hotel</span>
                                            <a href="{{ $item->link_reservasi }}" class="line-btn" target="_blank">Reservasi</a>
                                        </div>
                                    </div>
                                    <div class="tour-snap">
                                        <div class="icon">
                                            <a href="https://id.taximaxim.com/id/5900-bengkulu/order-a-taxi-online" target="_blank">
                                                <img src="{{ url('frontend/assets/img/maxim.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="location-map mb-30">
                            <h3 class="page-title mt-45 mb-30 text-center">Hotel di Kota Bengkulu</h3>
                            <div class="contact-map" id="peta-hotel" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
@endpush

@push('after-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

<script>
    var map = L.map('peta-hotel').setView([-3.785632, 102.297779], 12);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    var id = $('#hotelId').val();
    $.ajax({
        url: "/api/peta-hotel",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            $.each(response.hotel, function (key, value) {
                let data;
                data = value.coordinate;
                /* let foto;
                if (value.foto == null) {
                    foto = '{{ asset('man.png') }}';
                } else {
                    foto = "{{ asset('foto-pribadi') }}" + '/' + value.foto;
                }*/
                const splitted = data.split(",");
                L.marker([splitted[0], splitted[1]]).addTo(markerGroup)
                    /*.bindPopup("<center><img src='" + foto + "' width='60' /><br><br>" + value
                        .nama_lengkap +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/kartu-keluarga/anggota/" + value.id +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Keluarga</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );*/
                    .bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/hotel/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Hotel</span></a> <a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });

        }
    });
  </script>
@endpush
