@extends('layouts.app')

@section('title')
    Pasir Putih | SIPARTA
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
                        <li class="breadcrumb-item"><a href="{{ route('sub-wisata') }}">Pantai Panjang</a></li>
                        <li class="breadcrumb-item active">Pasir Putih</li>
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
                    <h4 class="card-title mb-0 font-size-24" style="color: #1368c3">PASIR PUTIH</h4>
                </div>
                <div class="card-header">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.youtube.com/embed/bkVke1yTNjk" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pasir Putih_1.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pasir Putih_1.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pasir Putih_2.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pasir Putih_2.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <h5 class="text-center">Deskripsi</h5>
                            <p class="card-text font-size-14 mb-0" style="text-indent: 45px;" align="justify">
                                Objek wisata pantai di kota Bengkulu menjadi tempat wisata yang paling banyak dikunjungi oleh masyarakat, baik masyarakat kota Bengkulu sendiri maupun masyarakat yang di luar kota Bengkulu.
                                Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat. Salah satunya seperti pantai pasir putih.
                                Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                                Selain pantai dengan pasir putihnya yang indah, pohon-pohon cemara juga menjadi daya tarik bagi para pengunjung untuk datang berwisata ke pantai pasir putih.
                            </p>
                            <p class="card-text font-size-14" style="text-indent: 45px;" align="justify">
                                Selain menawarkan area pantai berpasir, Pasir Putih juga terdapat berbagai sarana dan ornamen unik. Pada tahun 2019, pantai ini telah direnovasi dan menjadi semakin menarik.
                                Taman pantainya merupakan daya tarik utama bagi kamu yang berkunjung ke sini. Beralih dari bibir pantai, terdapat objek yang menarik di sekitar lahan parkir yaitu teras kayu setinggi beberapa meter dari tanah.
                                Teras ini dilindungi railing atau pagar dari besi. Lantainya terbuat dari papan kayu yang tersusun menyerupai koridor.
                                Sejak kemunculannya, teras ini menjadi spot favorit pengunjung. Dari sini, pengunjung bisa mendapat pemandangan laut lepas tanpa penghalang.
                                Terasnya nyaman untuk duduk-duduk menikmati sunset. Keberadaan teras ini memang mendukung kegiatan menikmati sunset.
                            </p>

                            <p class="card-text font-size-14 mb-5">Alamat : Jl. Pariwisata, Kel. Lempuing, Kec. Ratu Agung, Kota Bengkulu</p>

                            <div class="text-center">
                                <p class="card-text font-size-14">
                                    Ingin berkunjung wisata Pasir Putih, anda dapat menggunakan transportasi yang disediakan oleh partner kami, Maxim
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
                        <p class="text-end mb-0">Menuju Pantai Berkas</p>
                        <ul class="pagination justify-content-between">
                          <li class="page-item">
                            <a class="page-link btn btn-success waves-effect mt-2 waves-light" href="{{ route('sub-wisata') }}" aria-label="Previous">
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Tempat Menarik Lainnya di Pantai Panjang</h4>
                </div>
                <div class="card-body">
                    <div id="peta-sub-sub-wisata" style="height: 400px;"></div>
                    <p><p>* Pin dapat diklik untuk melihat detail wisata</p></p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row justify-content-center">
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
    </div> -->

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

    var map = new L.map("peta-sub-sub-wisata", mapOptions);

    var layer = new L.TileLayer(
        "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
</script>
@endpush
