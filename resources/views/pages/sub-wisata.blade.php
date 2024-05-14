@extends('layouts.app')

@section('title')
    Pantai Panjang | SIPARTA
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
                        <li class="breadcrumb-item active">Pantai Panjang</li>
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
                    <h4 class="card-title mb-0 font-size-24" style="color: #1368c3">PANTAI PANJANG</h4>
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
                                <a href="{{ url('siparta/assets/images/wisata/Pantai.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pantai.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pantai-1.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pantai-2.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pantai-3.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pantai-3.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/wisata/Pantai-4.jpg') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/wisata/Pantai-4.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
                                Bicara soal keindahan Pantai Panjang Bengkulu memang tidak aka ada habisnya, dinamakan pantai panjang karena pantai ini memiliki garis pantai yang sangat panjang mencapai 7 km.
                                Hal tersebut terjadi karena di sekitar pantai tidak ada karang jadi saat air laut pasang membuat hamparannya menjangkau sangat jauh ke dalam pantai.
                            </p>
                            <p class="card-text font-size-14 mb-0" style="text-indent: 45px;" align="justify">
                                Pantai Panjang memiliki latar belakang sejarah yang penting yang bermula dari era kolonial di Indonesia. Pada abad ke-18,
                                wilayah Pantai Panjang merupakan bagian dari pos perdagangan British East India Company, yang dikenal dengan Benteng Marlborough.
                                Benteng Marlborough dibangun pada tahun 1713 dan memegang peran penting dalam aktivitas perdagangan Inggris di wilayah Bengkulu yang dekat dengan Pantai Panjang.
                            </p>
                            <p class="card-text font-size-14" style="text-indent: 45px;" align="justify">
                                Pantai Panjang yang berdekatan dengan benteng ini akhirnya dikenal sebagai "Pantai Panjang" karena memiliki garis pantai yang panjang dan indah.
                                Pada masa itu, pantai panjang telah menjadi tempat yang strategis dan yang ramai dikunjungi karena kehadiran benteng dan aktivitas perdagangan di sekitarnya di Bengkulu.
                                Kini, kawasan Pantai Panjang jadi lokasi idola masyarakat untuk berwisata. Karena seiring berjalannya waktu, Pantai Panjang menjadi salah satu tujuan wisata populer di Bengkulu.
                                Pesona pantai yang indah, pasir putihnya, ombaknya yang tenang, serta pemandangan matahari terbenam yang sangat memukau,
                                menjadikan Pantai Panjang sebagai daya tarik wisata yang menarik bagi wisatawan lokal maupun internasional.
                            </p>
                            <p class="card-text font-size-14 mb-5">Alamat : Jl. Pariwisata, Kota Bengkulu</p>

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
        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">PASIR PUTIH</h4>
                    <p class="card-text">Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat.
                        Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                    </p>
                    <a href="{{ route('sub-sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">PASIR PUTIH</h4>
                    <p class="card-text">Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat.
                        Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                    </p>
                    <a href="{{ route('sub-sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">PASIR PUTIH</h4>
                    <p class="card-text">Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat.
                        Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                    </p>
                    <a href="{{ route('sub-sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ url('siparta/assets/images/wisata/Pasir Putih.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">PASIR PUTIH</h4>
                    <p class="card-text">Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat.
                        Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto.
                    </p>
                    <a href="{{ route('sub-sub-wisata') }}" class="btn btn-primary waves-effect waves-light">Lihat Lebih</a>
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
