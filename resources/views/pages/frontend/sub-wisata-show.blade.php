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
                                    @forelse ($item->galerisubwisata as $key => $galeri)
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
                            <p class="box-text mb-45">
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
                        <div class="location-map">
                            <h3 class="page-title mt-45 mb-30 text-center">Hotel dan Kuliner di Sekitar {{ $item->wisata->nama }}</h3>
                            <div class="contact-map" id="peta-sub-wisata" style="height: 500px;"></div>
                        </div>
                        <div class="text-center mt-5">
                            <h3 class="page-title mt-45 mb-30 text-center">Rekomendasi Wisata Selanjutnya</h3>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-between">
                                  <li class="page-item">
                                    @if (getMinIdSubWisata($item->wisata_id) != $item->id)
                                    <a class="th-btn" href="{{ route('user.sub-wisata-show', backSubWisata($item->slug)) }}" aria-label="Previous">
                                       <img src="{{ url('frontend/assets/img/icon/arrow-left.svg') }}" alt=""> Kembali
                                    </a>
                                    @endif
                                  </li>
                                  <li class="page-item">
                                    @if (getMaxIdSubWisata($item->wisata_id) != $item->id)
                                    <a class="th-btn th-icon" href="{{ route('user.sub-wisata-show', nextSubWisata($item->slug)) }}" aria-label="Next">
                                        {{ namaNextSubWisata($item->slug) }}
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
<!-- leaflet css -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.74.0/dist/L.Control.Locate.min.css" />
@endpush

@push('after-script')
<!-- leaflet js -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

<script>
    const map = L.map('peta-sub-wisata').setView([{{ $item->coordinate }}], 15);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    // Layer groups untuk wisata, hotel, dan kuliner
    var hotelGroup = L.layerGroup().addTo(map);
    var kulinerGroup = L.layerGroup().addTo(map);


    var restaurantIcon = new L.Icon({
        iconUrl: '{{ asset('siparta/assets/images/pin/shopping.png') }}',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [33, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });
    var hotelIcon = new L.Icon({
        iconUrl: '{{ asset('siparta/assets/images/pin/hotel.png') }}',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [33, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });

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
                    .bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/wisata/sub-wisata/" + value.slug +
                        "><span class='text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail " + value
                        .nama +
                        "</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><br><span class='text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Maps</span></a></center>");
            });
        }
    });

      // Fungsi untuk menambahkan marker ke layer group yang sesuai
    function addMarkers(data, icon, group, urlPrefix) {
        $.each(data, function (key, value) {
            const coordinates = value.coordinate.split(",");
            L.marker([coordinates[0], coordinates[1]], { icon: icon })
                .addTo(group)
                .bindPopup("<center><br>" + value.nama + "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                    "<a href=/" + urlPrefix + "/" + value.slug + "><span class='text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i>Detail " + value.nama + "</span></a> " +
                    "<a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" + [coordinates[0], coordinates[1]] + "'><br><span class='text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i>Rute Google Maps</span></a></center>");
        });
    }

    // Memuat data hotel
    $.ajax({
        url: "/api/peta-hotel",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            addMarkers(response.hotel, hotelIcon, hotelGroup, "hotel");
        }
    });

    // Memuat data kuliner
    $.ajax({
        url: "/api/peta-kuliner",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            addMarkers(response.kuliner, restaurantIcon, kulinerGroup, "kuliner-dan-oleh-oleh");
        }
    });

    // Kontrol layer
    var overlayMaps = {
        "Hotel": hotelGroup,
        "Kuliner": kulinerGroup
    };

    L.control.layers(null, overlayMaps).addTo(map);

    L.control.locate().addTo(map);

    // Menambahkan kontrol legenda
    var legend = L.control({ position: 'bottomleft'});

    legend.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'info legend');
        div.style.background = 'white';
        div.style.padding = '10px';
        div.style.borderRadius = '10px'; // Membuat sudut melengkung
        div.style.border = '1px solid #ccc'; // Menambahkan outline
        div.innerHTML += '<strong>Kategori:</strong><br>';
        div.innerHTML += '<img src="{{ asset('siparta/assets/images/pin/hotel.png') }}" style="vertical-align:middle; width:25px; height:auto; margin-right:5px;"> Hotel<br>';
        div.innerHTML += '<img src="{{ asset('siparta/assets/images/pin/shopping.png') }}" style="vertical-align:middle; width:25px; height:auto; margin-right:5px;"> Kuliner dan Oleh-Oleh<br>';
        return div;
    };

    legend.addTo(map);
</script>
@endpush
