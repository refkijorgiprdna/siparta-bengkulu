@extends('layouts.frontend.app')

@section('title')
    Kuliner dan Oleh-Oleh | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Kuliner dan Oleh-Oleh</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li>Kuliner dan Oleh-Oleh</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Peta
    ==============================-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="tour-page-single">
                    <div class="location-map">
                        <div class="contact-map" id="peta-kuliner" style="height: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Kuliner dan Oleh-Oleh
    ==============================-->
    <section class="space-extra2">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4 ms-auto">
                        <div class="search-form-area text-end">
                            <form class="search-form" action="{{ route('kuliner') }}" method="get">
                                <input id="cari_kuliner" name="nama_kuliner" type="text" class="form-control" value="{{ request()->nama_kuliner }}" placeholder="Cari Kuliner dan Oleh-Oleh">
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-lg-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-30 justify-content-center">
                                @foreach ($items as $item)
                                    <div class="col-xxl-3 col-xl-6">
                                        <div class="tour-box th-ani">
                                            <div class="tour-box_img global-img">
                                                <img src="{{ url('storage/' . $item->galerikuliner->first()->image) }}" alt="image">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h3>
                                                <div style="color: rgb(41, 41, 41); font-size: 14px; text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                                    {!! $item->deskripsi !!}
                                                </div>
                                                <div class="tour-action justify-content-center" style="margin-top: 20px;">
                                                    <a href="{{ route('user.kuliner-show', $item->slug) }}" class="th-btn style4 th-icon">Lihat Detail</a>
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
@endsection

@push('after-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('after-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    var map = L.map('peta-kuliner').setView([-3.785632, 102.297779], 12);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    var id = $('#kulinerId').val();
    $.ajax({
        url: "/api/peta-kuliner",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            $.each(response.kuliner, function (key, value) {
                let data;
                data = value.coordinate;
                const splitted = data.split(",");
                L.marker([splitted[0], splitted[1]]).addTo(markerGroup)
                    .bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/kuliner-dan-oleh-oleh/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Kuliner dan Oleh-Oleh</span></a> <a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });
        }
    });
</script>
@endpush
