@extends('layouts.app')

@section('title')
    {{ $item->nama }} | SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18"></h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item"><a href="{{ route('wisata') }}">Wisata</a></li>
                        <li class="breadcrumb-item active">{{ $item->nama }}</li>
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
                    <h4 class="card-title mb-0 font-size-24" style="color: #1368c3">{{ $item->nama }}</h4>
                    <input type="hidden" name="wisataId" id="wisataId" value="{{ $item->wisata_id }}">
                </div>
                <div class="card-header">
                    <div class="ratio ratio-21x9">
                        <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-center">
                        @forelse ($item->galerisubwisata as $key => $galeri)
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ asset('storage/' . $galeri->image) }}" class="image-popup">
                                    <img src="{{ asset('storage/' . $galeri->image) }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <h5 class="text-center">Deskripsi</h5>
                            {!! $item->deskripsi !!}

                            <p class="card-text font-size-13 mb-5">Alamat : {{ $item->alamat }}</p>

                            <div class="text-center">
                                <p class="card-text font-size-14">
                                    Ingin berkunjung wisata {{ $item->nama }}, anda dapat menggunakan transportasi yang disediakan oleh partner kami, Maxim
                                    <br>
                                    <a class="btn btn-warning waves-effect mt-2 waves-light" href="https://id.taximaxim.com/id/5900-bengkulu/order-a-taxi-online" target="_blank">
                                        <i class="bx bx-taxi me-2"></i>Maxim
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation">
                        @if (getMaxIdSubWisata($item->wisata_id) != $item->id)
                        <p class="text-end mb-0">Menuju {{ namaNextSubWisata($item->slug) }}</p>
                        @endif
                        <ul class="pagination justify-content-between">
                          <li class="page-item">
                            @if (getMinIdSubWisata($item->wisata_id) != $item->id)
                            <a class="page-link btn btn-success waves-effect mt-2 waves-light" href="{{ route('user.sub-wisata-show', backSubWisata($item->slug)) }}" aria-label="Previous">
                                <i data-feather="arrow-left-circle" class="me-2"></i>Kembali
                            </a>
                            @endif
                          </li>
                          <li class="page-item">
                            @if (getMaxIdSubWisata($item->wisata_id) != $item->id)
                            <a class="page-link btn btn-primary waves-effect mt-2 waves-light" href="{{ route('user.sub-wisata-show', nextSubWisata($item->slug)) }}" aria-label="Next">
                                Berikutnya <i data-feather="arrow-right-circle" class="ms-2"></i>
                            </a>
                            @endif
                          </li>
                        </ul>
                    </nav>

                 </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Hotel dan Kuliner di Sekitar {{ $item->wisata->nama }}</h4>
                </div>
                <div class="card-body">
                    <div id="peta-sub-wisata" style="height: 400px;"></div>
                    <p><p>* Pin dapat diklik untuk melihat detail wisata</p></p>
                </div>
            </div>
        </div>
    </div>

    {{--  <!-- <div class="row justify-content-center">
        <div class="col-md-6 col-xl-3">

            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/mall/Bencoolen Mall.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">Bencoolen Mall</h4>
                    <p class="card-text">Resmi dibuka pada tahun 2007, Bencoolen Mall telah Sejak menjadi pusat bisnis, pariwisata dan Ikon di Provinsi Bengkulu.
                        Dengan luas 9,2 hektar, pengembangannya terdiri dari 3 (tiga) lantai utama terbuka Pengalaman belanja,
                        kompleks ruko dan bersantap di tempat terbuka dengan pemandangan tepi laut dan atraksi rekreasi.
                    </p>
                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/mall/Bencoolen Mall.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">Bencoolen Mall</h4>
                    <p class="card-text">Resmi dibuka pada tahun 2007, Bencoolen Mall telah Sejak menjadi pusat bisnis, pariwisata dan Ikon di Provinsi Bengkulu.
                        Dengan luas 9,2 hektar, pengembangannya terdiri dari 3 (tiga) lantai utama terbuka Pengalaman belanja,
                        kompleks ruko dan bersantap di tempat terbuka dengan pemandangan tepi laut dan atraksi rekreasi.
                    </p>
                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/mall/Bencoolen Mall.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">Bencoolen Mall</h4>
                    <p class="card-text">Resmi dibuka pada tahun 2007, Bencoolen Mall telah Sejak menjadi pusat bisnis, pariwisata dan Ikon di Provinsi Bengkulu.
                        Dengan luas 9,2 hektar, pengembangannya terdiri dari 3 (tiga) lantai utama terbuka Pengalaman belanja,
                        kompleks ruko dan bersantap di tempat terbuka dengan pemandangan tepi laut dan atraksi rekreasi.
                    </p>
                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/mall/Bencoolen Mall.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">Bencoolen Mall</h4>
                    <p class="card-text">Resmi dibuka pada tahun 2007, Bencoolen Mall telah Sejak menjadi pusat bisnis, pariwisata dan Ikon di Provinsi Bengkulu.
                        Dengan luas 9,2 hektar, pengembangannya terdiri dari 3 (tiga) lantai utama terbuka Pengalaman belanja,
                        kompleks ruko dan bersantap di tempat terbuka dengan pemandangan tepi laut dan atraksi rekreasi.
                    </p>
                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>
    </div> -->  --}}

</div> <!-- container-fluid -->
@endsection

@push('addon-style')
<!-- glightbox css -->
<link rel="stylesheet" href="{{ url('siparta/assets/libs/glightbox/css/glightbox.min.css') }}">

<!-- leaflet css -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.74.0/dist/L.Control.Locate.min.css" />
@endpush

@push('addon-script')
<!-- leaflet js -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

<!-- glightbox js -->
<script src="{{ url('siparta/assets/libs/glightbox/js/glightbox.min.js') }}"></script>

<!-- lightbox init -->
<script src="{{ url('siparta/assets/js/pages/lightbox.init.js') }}"></script>

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
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Wisata</span></a> <a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
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
                    "<a href=/" + urlPrefix + "/" + value.slug + "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail</span></a> " +
                    "<a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" + [coordinates[0], coordinates[1]] + "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>");
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
