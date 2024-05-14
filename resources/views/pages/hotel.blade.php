@extends('layouts.app')

@section('title')
    Hotel | SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Hotel</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Hotel</li>
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
                    <h4 class="card-title mb-0 font-size-22" style="color: #1368c3;">REKOMENDASI HOTEL DI KOTA BENGKULU</h4>
                </div>
                <div class="card-body">
                    <div id="peta-hotel" style="height: 400px;"></div>
                    <p>* Pin dapat diklik untuk melihat detail hotel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">GRAGE HOTEL</h4>
                    <div class="text-warning font-size-20">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-outline""></i>
                        <i class="mdi mdi-star-outline"></i>
                    </div>
                    <p class="card-text">Grage Hotel merupakan hotel bintang 3 dengan kolam renang view pantai. Tarif harga terjangkau dengan kamar yang luas dan nyaman.
                        Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini.</p>
                    <a href="{{ route('sub-hotel') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">GRAGE HOTEL</h4>
                    <div class="text-warning font-size-20">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-outline""></i>
                        <i class="mdi mdi-star-outline"></i>
                    </div>
                    <p class="card-text">Grage Hotel merupakan hotel bintang 3 dengan kolam renang view pantai. Tarif harga terjangkau dengan kamar yang luas dan nyaman.
                        Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini. </p>
                    <a href="sub-hotel.html" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">GRAGE HOTEL</h4>
                    <div class="text-warning font-size-20">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-outline""></i>
                        <i class="mdi mdi-star-outline"></i>
                    </div>
                    <p class="card-text">Grage Hotel merupakan hotel bintang 3 dengan kolam renang view pantai. Tarif harga terjangkau dengan kamar yang luas dan nyaman.
                        Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini. </p>
                    <a href="sub-hotel.html" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">GRAGE HOTEL</h4>
                    <div class="text-warning font-size-20">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-outline""></i>
                        <i class="mdi mdi-star-outline"></i>
                    </div>
                    <p class="card-text">Grage Hotel merupakan hotel bintang 3 dengan kolam renang view pantai. Tarif harga terjangkau dengan kamar yang luas dan nyaman.
                        Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini. </p>
                    <a href="sub-hotel.html" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container-fluid -->
@endsection

@push('addon-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('addon-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    var mapOptions = {
      center: [-3.7973233483994835, 102.26600088555267],
      zoom: 12,
    };

    var map = new L.map("peta-hotel", mapOptions);

    var layer = new L.TileLayer(
      "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
  </script>
@endpush
