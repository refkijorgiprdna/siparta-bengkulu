@extends('layouts.admin.app')

@section('title')
Tambah Data Wisata | Admin SIPARTA
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wisata</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('wisata.index') }}">Data Wisata</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Peta</h4>
                </div>
                <div class="card-body">
                    <div id="map-wisata" style="height: 460px;"></div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Wisata</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('wisata.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Wisata" value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="coordinate">Koordinat</label>
                            <input type="text" class="form-control" name="coordinate" id="coordinate" placeholder="Koordinat" value="{{ old('coordinate') }}">
                        </div>
                        {{--  <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="{{ old('latitude') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="{{ old('longitude') }}">
                                </div>
                            </div>
                        </div>  --}}
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="d-block w-100 form-control">{{ old('deskripsi') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="mb-3">
                            <label for="link_video">Link Video</label>
                            <input type="text" class="form-control" name="link_video" placeholder="Link Video" value="{{ old('link_video') }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- End row -->
</div>
<!-- container-fluid -->
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('addon-script')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var map = L.map('map-wisata', {
            center: [-3.797337353776946, 102.26598621136716],
            zoom: 13,
            layers: [osm]
        })


        var marker = L.marker([-3.797337353776946, 102.26598621136716], {
            draggable: true
        }).addTo(map);

        var baseMaps = {
            'Open Street Map': osm
        }

        L.control.layers(baseMaps).addTo(map)

        // CARA PERTAMA
        function onMapClick(e) {
            var coords = document.querySelector("[name=coordinate]")
            var latitude = document.querySelector("[name=latitude]")
            var longitude = document.querySelector("[name=longitude]")
            var lat = e.latlng.lat
            var lng = e.latlng.lng

            if (!marker) {
                marker = L.marker(e.latlng).addTo(map)
            } else {
                marker.setLatLng(e.latlng)
            }

            coords.value = lat + "," + lng
            latitude.value = lat,
                longitude.value = lng
        }
        map.on('click', onMapClick)
        // CARA PERTAMA

        // CARA KEDUA
        marker.on('dragend', function() {
            var coordinate = marker.getLatLng();
            marker.setLatLng(coordinate, {
                draggable: true
            })
            $('#coordinate').val(coordinate.lat + "," + coordinate.lng).keyup()
            $('#latitude').val(coordinate.lat).keyup()
            $('#longitude').val(coordinate.lng).keyup()
        })
        // CARA KEDUA
    </script>
@endpush

