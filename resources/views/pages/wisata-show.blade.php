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
                    <input type="hidden" name="wisataId" id="wisataId" value="{{ $item->id }}">
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
                        @if (getMaxIdWisata() != $item->id)
                        <p class="text-end mb-0">Menuju {{ namaNextWisata($item->slug) }}</p>
                        @endif
                        <ul class="pagination justify-content-between">
                          <li class="page-item">
                            @if (getMinIdWisata() != $item->id)
                            <a class="page-link btn btn-success waves-effect mt-2 waves-light" href="{{ route('user.wisata-show', backWisata($item->slug)) }}" aria-label="Previous">
                                <i data-feather="arrow-left-circle" class="me-2"></i>Kembali
                            </a>
                            @endif
                          </li>
                          <li class="page-item">
                            @if (getMaxIdWisata() != $item->id)
                            <a class="page-link btn btn-primary waves-effect mt-2 waves-light" href="{{ route('user.wisata-show', nextWisata($item->slug)) }}" aria-label="Next">
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

    @if ($item->subwisata->count() > 0)
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-0">
                    <h4 class="card-title mb-0 font-size-18" style="color: #000000">Tempat Menarik di {{ $item->nama }}</h4>
                </div>
                <div class="card-body">
                    <div id="peta-sub-wisata" style="height: 400px;"></div>
                    <p><p>* Pin dapat diklik untuk melihat detail wisata</p></p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="row justify-content-center">
        @forelse ($item->subwisata as $sub_wisata)
        <div class="col-md-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset('storage/' . $sub_wisata->galerisubwisata->first()->image) }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $sub_wisata->nama }}</h4>
                    <div class="" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                        {!! $sub_wisata->deskripsi !!}
                    </div>
                    <a href="{{ route('user.sub-wisata-show', $sub_wisata->slug) }}" class="btn btn-primary mt-2 waves-effect waves-light">Lihat Lebih</a>
                </div>
            </div>
        </div>
        @empty

        @endforelse

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
    const map = L.map('peta-sub-wisata').setView([{{ $item->coordinate }}], 13);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    var id = $('#wisataId').val();
    $.ajax({
        url: "/api/peta-wisata/item/" + id,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            /*$.each(response.wisata, function (key, value) {
                let data;
                data = value.coordinate;
                /* let foto;
                if (value.foto == null) {
                    foto = '{{ asset('man.png') }}';
                } else {
                    foto = "{{ asset('foto-pribadi') }}" + '/' + value.foto;
                }*/
                /*const splitted = data.split(",");
                L.marker([splitted[0], splitted[1]]).addTo(markerGroup)
                    /*.bindPopup("<center><img src='" + foto + "' width='60' /><br><br>" + value
                        .nama_lengkap +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/kartu-keluarga/anggota/" + value.id +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Keluarga</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );*/
                    /*.bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/wisata/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Wisata</span></a> <a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });*/
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
                        "<a href=/wisata/sub-wisata/" + value.slug +
                        "><span class='badge rounded-pill text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail Wisata</span></a> <a target='_blank' href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><span class='badge rounded-pill text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Map</span></a></center>"
                    );
            });
        }
    });
</script>
@endpush
