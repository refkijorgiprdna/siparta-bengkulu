@extends('layouts.app')

@section('title')
    Grage Hotel | SIPARTA
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
                        <li class="breadcrumb-item"><a href="hotel.html">Hotel</a></li>
                        <li class="breadcrumb-item active">Grage Hotel</li>
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
                    <h4 class="card-title mb-0 font-size-24" style="color: #1368c3">GRAGE HOTEL</h4>
                </div>
                <div class="card-header">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.youtube.com/embed/fWusWDLSuzQ" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/hotel/grage hotel.png') }}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mt-3">
                                <a href="{{ url('siparta/assets/images/hotel/grage hotel_1.png') }}" class="image-popup">
                                    <img src="{{ url('siparta/assets/images/hotel/grage hotel_1.png') }}" class="img-fluid" alt="work-thumbnail">
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
                                Grage Horizon Hotel Bengkulu merupakan hotel bintang 3 dengan kolam renang view pantai.
                                Tarif harga terjangkau dengan kamar yang luas dan nyaman.
                                Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini.
                                Hotel ini berjarak 19 menit berjalan kaki dari pantai terdekat di sepanjang Samudra Hindia,
                                3 km dari Benteng Marlborough yang merupakan peninggalan Inggris abad ke-18,
                                dan 13 km dari Bandara Fatmawati Soekarno.
                            </p>
                            <p class="card-text font-size-14" style="text-indent: 45px;" align="justify">
                                Kamar dilengkapi dengan balkon, TV layar datar, akses Wi-Fi, kulkas mini, pembuat kopi dan teh,
                                serta kamar mandi dalam khusus pancuran. Kamar di kelas yang lebih tinggi memiliki panorama laut,
                                dan suite memiliki ruang keluarga terpisah. Room service tersedia 24 jam.
                                Fasilitas meliputi restoran yang buka 24 jam, kolam renang outdoor dengan kafe di pinggir kolam,
                                dan panorama laut. Ada pula ruang pertemuan dan acara yang berkapasitas hingga 800 tamu.
                                Hotel Horizon Bengkulu menyediakan banyak pilihan kamar dengan berbagai fasilitas terbaik.
                                Tidak kurang dari 50 kamar ditawarkan di penginapan ini. Terdiri dari 5 tipe utama,
                                yaitu Deluxe Twin, Superior Twin, Junior Suite, Business Suite, dan Horizon Suite
                            </p>
                            <p class="card-text font-size-14 mb-5">Alamat : Jl. Nala No.142, Kel. Anggut Bawah, Kec. Ratu Samban, Kota Bengkulu </p>

                            <div class="text-center">
                                <p class="card-text font-size-14">
                                    Ingin menginap di Grage Hotel, anda dapat memesan kamar melalui tombol di bawah ini
                                    <br>
                                    <a class="btn btn-info waves-effect mt-2 waves-light" href="https://www.google.com/travel/hotels/s/brpwU7AGrb4XTg4N6" target="_blank">
                                        <i class="bx bx-hotel me-2"></i>Reservasi
                                    </a>
                                </p>
                                <br>
                                <p class="card-text font-size-14">
                                    Untuk menuju lokasi Grage Hotel, anda dapat menggunakan transportasi yang disediakan oleh partner kami, Maxim
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
                        <!-- <p class="text-end mb-0">Menuju Pasir Putih Pantai Panjang</p> -->
                        <ul class="pagination justify-content-between">
                          <li class="page-item">
                            <a class="page-link btn btn-success waves-effect mt-2 waves-light" href="hotel.html" aria-label="Previous">
                                <i data-feather="arrow-left-circle" class="me-2"></i>Kembali
                            </a>
                          </li>
                          <!-- <li class="page-item">
                            <a class="page-link btn btn-primary waves-effect mt-2 waves-light" href="sub-sub-wisata.html" aria-label="Next">
                                Berikutnya <i data-feather="arrow-right-circle" class="ms-2"></i>

                            </a>
                          </li> -->
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
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Rekomendasi Hotel di Kota Bengkulu</h4>
                </div>
                <div class="card-body">
                    <div id="peta-sub-hotel" style="height: 400px;"></div>
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

<script>
    var mapOptions = {
        center: [-3.8121283301011286, 102.26664999282018],
        zoom: 14,
    };

    var map = new L.map("peta-sub-hotel", mapOptions);

    var layer = new L.TileLayer(
        "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
    );

    map.addLayer(layer);
</script>
@endpush
