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
                </div>
                <div class="card-header">
                    <div class="ratio ratio-21x9">
                        <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-center">
                        @forelse ($item->galeriwisata as $key => $galeri)
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
                            <p class="card-text font-size-14 mb-5">Alamat : {{ $item->alamat }}</p>

                            <div class="text-center">
                                <p class="card-text font-size-14">
                                    Ingin berkunjung wisata Pantai Panjang, anda dapat menggunakan transportasi yang disediakan oleh partner kami, Maxim
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
                        <p class="text-end mb-0">Menuju Pasir Putih Pantai Panjang</p>
                        <ul class="pagination justify-content-between">
                          <li class="page-item">
                            <a class="page-link btn btn-success waves-effect mt-2 waves-light" href="{{ route('wisata') }}" aria-label="Previous">
                                <i data-feather="arrow-left-circle" class="me-2"></i>Kembali
                            </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link btn btn-primary waves-effect mt-2 waves-light" href="{{ route('sub-sub-wisata') }}" aria-label="Next">
                                Berikutnya <i data-feather="arrow-right-circle" class="ms-2"></i>

                            </a>
                          </li>
                        </ul>
                    </nav>

                 </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Tempat Menarik di Pantai Panjang</h4>
                </div>
                <div class="card-body">
                    <div id="peta-sub-wisata" style="height: 400px;"></div>
                    <p><p>* Pin dapat diklik untuk melihat detail wisata</p></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($item->subwisata as $sub_wisata)
        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset('storage/' . $sub_wisata->galerisubwisata->first()->image) }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">{{ $sub_wisata->nama }}</h4>
                    <p class="card-text">Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat.
                        Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                    </p>
                    <a href="{{ route('sub-sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        @empty

        @endforelse
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

<script>
    var mapOptions = {
        center: [-3.8121283301011286, 102.26664999282018],
        zoom: 14,
    };

    var map = new L.map("peta-sub-wisata", mapOptions);

    var layer = new L.TileLayer(
        "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
</script>
@endpush
