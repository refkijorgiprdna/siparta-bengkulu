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
                        <li class="breadcrumb-item"><a href="{{ route('hotel') }}">Hotel</a></li>
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
                    <h4 class="card-title mb-0 font-size-24" style="color: #1368c3">

                        {{ $item->nama }} |


                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $item->bintang)
                                    <i class="mdi mdi-star text-warning"></i>
                                @else
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                @endif
                            @endfor

                    </h4>

                </div>
                <div class="card-header">
                    <div class="ratio ratio-21x9">
                        <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-center">
                        @forelse ($item->galerihotel as $key => $galeri)
                        <div class="col-lg-3 col-sm-6 @if($key > 3) d-none @endif">
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
                            <p class="card-text font-size-13 mb-5">Alamat : {{ $item->alamat }} </p>

                            <div class="text-center">
                                <p class="card-text font-size-14">
                                    Ingin menginap di {{ $item->nama }}, anda dapat memesan kamar melalui tombol di bawah ini
                                    <br>
                                    <a class="btn btn-info waves-effect mt-2 waves-light" href="{{ $item->link_reservasi }}" target="_blank">
                                        <i class="bx bx-hotel me-2"></i>Reservasi
                                    </a>
                                </p>
                                <br>
                                <p class="card-text font-size-14">
                                    Untuk menuju lokasi {{ $item->nama }}, anda dapat menggunakan transportasi yang disediakan oleh partner kami, Maxim
                                    <br>
                                    <a class="btn btn-warning waves-effect mt-2 waves-light" href="https://id.taximaxim.com/id/5900-bengkulu/order-a-taxi-online" target="_blank">
                                        <i class="bx bx-taxi me-2"></i>Maxim
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Rekomendasi Hotel di Kota Bengkulu</h4>
                </div>
                <div class="card-body">
                    <div id="peta-hotel" style="height: 400px;"></div>
                    <p>* Pin dapat diklik untuk melihat detail hotel</p>
                </div>
            </div>
        </div>
    </div>



</div> <!-- container-fluid -->
@endsection

@push('addon-style')
<!-- glightbox css -->
<link rel="stylesheet" href="{{ url('siparta/assets/libs/glightbox/css/glightbox.min.css') }}">

<!-- leaflet css -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('addon-script')
<!-- leaflet js -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- glightbox js -->
<script src="{{ url('siparta/assets/libs/glightbox/js/glightbox.min.js') }}"></script>

<!-- lightbox init -->
<script src="{{ url('siparta/assets/js/pages/lightbox.init.js') }}"></script>

{{--  <script>
    var mapOptions = {
        center: [-3.8121283301011286, 102.26664999282018],
        zoom: 14,
    };

    var map = new L.map("peta-hotel", mapOptions);

    var layer = new L.TileLayer(
        "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
</script>  --}}


<script>
    {{--  var mapOptions = {
      center: [-3.7973233483994835, 102.26600088555267],
      zoom: 12,
    };

    var map = new L.map("peta-hotel", mapOptions);

    var layer = new L.TileLayer(
      "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);  --}}

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
