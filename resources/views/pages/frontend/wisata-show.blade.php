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
                <h1 class="breadcumb-title">{{ $item->nama }}</h1>
                <input type="hidden" name="wisataId" id="wisataId" value="{{ $item->id }}">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('wisata') }}">Wisata</a></li>
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
                            <div class="mb-4" >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-21x9">
                                            <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    @forelse ($item->galeriwisata as $key => $galeri)
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
                                            <a href="https://id.taximaxim.com/id/5900-bengkulu/order-a-taxi-online" target="_blank">
                                                <img src="{{ url('frontend/assets/img/maxim.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($item->subwisata->count() > 0)
                            <div class="location-map">
                                <h3 class="page-title mt-45 mb-30 text-center">Wisata Menarik di {{ $item->nama }}</h3>
                                <div class="contact-map" id="peta-sub-wisata" style="height: 400px;"></div>
                            </div>
                        @endif
                    </div>
                    <div class="slider-area tour-slider mt-5">
                        <div class="swiper th-slider has-shadow"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                            <div class="swiper-wrapper justify-content-between">
                                @forelse ($item->subwisata as $sub_wisata)
                                <div class="swiper-slide">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <img src="{{ asset('storage/' . $sub_wisata->galerisubwisata->first()->image) }}" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $sub_wisata->nama }}</h3>
                                            <div style="color: rgb(0, 0, 0); font-weight: 400; font-size: 14px; text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                                {!! $sub_wisata->deskripsi !!}
                                            </div>
                                            <div class="tour-action mt-4">
                                                <a href="{{ route('user.sub-wisata-show', $sub_wisata->slug) }}" class="th-btn style4 th-icon">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div> 
                        <div class="text-center mt-5">
                            <h3 class="page-title mt-45 mb-30 text-center">Rekomendasi Wisata Lainnya</h3>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-between">
                                  <li class="page-item">
                                    @if (getMinIdWisata() != $item->id)
                                    <a class="th-btn" href="{{ route('user.wisata-show', backWisata($item->slug)) }}" aria-label="Previous">
                                       <img src="{{ url('frontend/assets/img/icon/arrow-left.svg') }}" alt=""> {{ namaBackWisata($item->slug) }}
                                    </a>
                                    @endif
                                  </li>
                                  <li class="page-item">
                                    @if (getMaxIdWisata() != $item->id)
                                    <a class="th-btn th-icon" href="{{ route('user.wisata-show', nextWisata($item->slug)) }}" aria-label="Next">
                                        {{ namaNextWisata($item->slug) }}
                                    </a>
                                    @endif
                                  </li>
                                </ul>
                            </nav>
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
    var map = L.map('peta-sub-wisata').setView([{{ $item->coordinate }}], 13);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    var id = $('#wisataId').val();
    $.ajax({
        url: "/api/peta-wisata/item/" + id,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            $.each(response.subWisata, function (key, value) {
                let data;
                data = value.coordinate;
                const splitted = data.split(",");
                L.marker([splitted[0], splitted[1]]).addTo(markerGroup)
                    .bindPopup("<center><br>" + value.nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/wisata/sub-wisata/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Wisata</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });
        }
    });
</script>
@endpush
