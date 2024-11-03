@extends('layouts.frontend.app')

@section('title')
    Wisata | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
        Breadcumb
        ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Wisata di Kota Bengkulu</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li>Wisata</li>
                </ul>
            </div>
        </div>
    </div>

<section data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
    <!--==============================
        Peta
        ==============================-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="tour-page-single">
                    <div class="location-map">
                        <div class="contact-map" id="peta-wisata" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Wisata
        ==============================-->
    <section class="space-extra2">
        <div class="container">
            {{--  <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4 ms-auto">
                        <div class="search-form-area text-end">
                            <form class="search-form">
                                <input type="text" placeholder="Cari Wisata">
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <div class="row">
                <div class="col-xxl-12 col-lg-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel"
                            aria-labelledby="tab-destination-grid">
                            <div class="row gy-30 justify-content-center">
                                @foreach ($items as $item)
                                    <div class="col-xxl-3 col-xl-6">
                                        <div class="tour-box th-ani">
                                            <div class="tour-box_img global-img">
                                                <img src="{{ url('storage/' . $item->galeriwisata->first()->image) }}"
                                                    alt="image">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title"
                                                    style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                    {{ $item->nama }}</h3>
                                                <div
                                                    style="color: rgb(0, 0, 0); font-size: 14px; font text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                                    {!! $item->deskripsi !!}
                                                </div>
                                                <div class="tour-action justify-content-center" style="margin-top: 20px;">
                                                    <a href="{{ route('user.wisata-show', $item->slug) }}"
                                                        class="th-btn style4 th-icon">Lihat Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</section>


@endsection

@push('after-style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
@endpush

@push('after-script')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
    <script>
        var map = L.map('peta-wisata').setView([-3.785632, 102.297779], 12);
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var markerGroup = L.layerGroup().addTo(map);
        var id = $('#wisataId').val();
        $.ajax({
            url: "/api/peta-wisata",
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                $.each(response.wisata, function (key, value) {
                    let data;
                    data = value.coordinate;
                    const splitted = data.split(",");
                    console.log(value.slug);
                    L.marker([splitted[0], splitted[1]]).addTo(markerGroup).bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/wisata/" + value.slug +
                        "><span class='text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail " + value
                        .nama +
                        "</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><br><span class='text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Maps</span></a></center>");
                });
            }
        });
      </script>
    @endpush

