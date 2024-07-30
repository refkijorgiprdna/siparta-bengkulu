@extends('layouts.app')

@section('title')
Dashboard | SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Selamat Datang di Sistem Informasi Pariwisata Kota (SIPARTA) Bengkulu</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-22 text-center" style="color: #1368c3;">MARI JELAJAHI KOTA BENGKULU</h4>
                </div>
                <div class="card-body">
                    <div id="peta-wisata" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header mb-0">
            <h4 class="card-title mb-0 font-size-18 text-center" style="color: #1368c3;">WISATA DI KOTA BENGKULU</h4>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach ($wisata as $item)
                    <div class="col-md-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ url('storage/' . $item->galeriwisata->first()->image) }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h4>
                                <div class="" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                    {!! $item->deskripsi !!}
                                </div>
                                <a href="{{ route('user.wisata-show', $item->slug) }}" class="btn btn-primary mt-2 waves-effect waves-light">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header mb-0">
            <h4 class="card-title mb-0 font-size-18 text-center" style="color: #1368c3;">HOTEL DI KOTA BENGKULU</h4>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach ($hotel as $item)
                <div class="col-md-6 col-xl-3">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ url('storage/' . $item->galerihotel->first()->image) }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h4>
                            <div class="text-warning font-size-20">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $item->bintang)
                                        <i class="mdi mdi-star"></i>
                                    @else
                                        <i class="mdi mdi-star-outline"></i>
                                    @endif
                                @endfor
                            </div>
                            <div class="" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                {!! $item->deskripsi !!}
                            </div>
                            <a href="{{ route('user.hotel-show', $item->slug) }}" class="btn btn-primary mt-2 waves-effect waves-light">Lihat Lebih</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('hotel') }}" class="btn btn-primary waves-effect waves-light">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header mb-0">
            <h4 class="card-title mb-0 font-size-18 text-center" style="color: #1368c3;">KULINER DAN OLEH-OLEH KOTA BENGKULU</h4>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach ($kuliner as $item)
                <div class="col-md-6 col-xl-3">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ url('storage/' . $item->galerikuliner->first()->image) }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h4>
                            <div class="" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                {!! $item->deskripsi !!}
                            </div>
                            <a href="{{ route('user.kuliner-show', $item->slug) }}" class="btn btn-primary mt-2 waves-effect waves-light">Lihat Lebih</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('kuliner') }}" class="btn btn-primary waves-effect waves-light">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>


</div>
<!-- container-fluid -->

@endsection

@push('addon-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.74.0/dist/L.Control.Locate.min.css" />
@endpush

@push('addon-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

<script>

    var map = L.map('peta-wisata').setView([-3.826646646243623, 102.2987152614924], 12);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Layer groups untuk wisata, hotel, dan kuliner
    var wisataGroup = L.layerGroup().addTo(map);
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
    var beachIcon = new L.Icon({
        iconUrl: '{{ asset('siparta/assets/images/pin/beach.png') }}',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [33, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });

      // Fungsi untuk menambahkan marker ke layer group yang sesuai
    function addMarkers(data, icon, group, urlPrefix) {
        $.each(data, function (key, value) {
            const coordinates = value.coordinate.split(",");
            L.marker([coordinates[0], coordinates[1]], { icon: icon })
                .addTo(group)
                .bindPopup("<center><br>" + value.nama + "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                    "<a href=/" + urlPrefix + "/" + value.slug + "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail</span></a> " +
                    "<a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" + [coordinates[0], coordinates[1]] + "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>");
        });
    }

    // Memuat data wisata
    $.ajax({
        url: "/api/peta-wisata",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            addMarkers(response.wisata, beachIcon, wisataGroup, "wisata");
        }
    });

    $.ajax({
        url: "/api/peta-sub-wisata",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            addMarkers(response.subwisata, beachIcon, wisataGroup, "wisata/sub-wisata");
        }
    });

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
        "Wisata": wisataGroup,
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
        div.innerHTML += '<img src="{{ asset('siparta/assets/images/pin/beach.png') }}" style="vertical-align:middle; width:25px; height:auto; margin-right:5px;"> Wisata<br>';
        div.innerHTML += '<img src="{{ asset('siparta/assets/images/pin/hotel.png') }}" style="vertical-align:middle; width:25px; height:auto; margin-right:5px;"> Hotel<br>';
        div.innerHTML += '<img src="{{ asset('siparta/assets/images/pin/shopping.png') }}" style="vertical-align:middle; width:25px; height:auto; margin-right:5px;"> Kuliner dan Oleh-Oleh<br>';
        return div;
    };

    legend.addTo(map);


  </script>
@endpush

