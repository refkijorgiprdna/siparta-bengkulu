@extends('layouts.app')

@section('title')
    Wisata | SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Wisata</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Wisata</li>
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
                    <h4 class="card-title mb-0 font-size-22" style="color: #1368c3;">WISATA DI KOTA BENGKULU</h4>
                </div>
                <div class="card-body">
                    <div id="peta-wisata" style="height: 400px;"></div>
                    <p>* Pin dapat diklik untuk melihat detail wisata</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach ($items as $item)
            <div class="col-md-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    {{--  <img class="card-img-top img-fluid" style="background-image: url('{{ $item->galeriwisata->count() ? Storage::url( $item->galeriwisata->first()->image ) : '' }}')">  --}}
                    <img class="card-img-top img-fluid" src="{{ url('storage/' . $item->galeriwisata->first()->image) }}" alt="Card image cap">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $item->nama }}</h4>
                        <a href="{{ route('user.wisata-show', $item->slug) }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div> <!-- container-fluid -->
@endsection

@push('addon-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
@endpush

@push('addon-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

<script>
    {{--  var mapOptions = {
      center: [-3.7973233483994835, 102.26600088555267],
      zoom: 12,
    };

    var map = new L.map("peta-wisata", mapOptions);

    var layer = new L.TileLayer(
      "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);  --}}

    var map = L.map('peta-wisata').setView([-3.785632, 102.297779], 12);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    $.ajax({
        url: "/api/peta-wisata",
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            $.each(response.wisata, function (key, value) {
                let data;
                data = value.coordinate;
                /* let foto;
                if (value.foto == null) {
                    foto = '{{ asset('man.png') }}';
                } else {
                    foto = "{{ asset('foto-pribadi') }}" + '/' + value.foto;
                }*/
                const splitted = data.split(",");
                markerCoordinates.push([splitted[0], splitted[1]]);
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
                        "<a href=/wisata/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Lihat Wisata</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });
            $.each(response.subWisata, function (key, value) {
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
                        "<a href=#" + value.coordinate +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Keluarga</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });
        }
    });
  </script>
@endpush
