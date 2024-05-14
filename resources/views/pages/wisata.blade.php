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

    <div class="row">
        @foreach ($items as $item)
            <div class="col-md-6 col-xl-6">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" style="background-image: url('{{ $item->galeriwisata->count() ? Storage::url( $item->galeriwisata->first()->image ) : '' }}')">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $item->nama }}</h4>
                        <a href="{{ route('sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                    </div>
                </div>
            </div>
        @endforeach
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

    var map = new L.map("peta-wisata", mapOptions);

    var layer = new L.TileLayer(
      "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
  </script>
@endpush
