@extends('layouts.frontend.app')

@section('title')
    Hotel | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hotel di Kota Bengkulu</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Beranda</a></li>
                    <li>Hotel</li>
                </ul>
            </div>
        </div>
    </div>


    <section data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
        <!--==============================
            Peta
            ==============================-->
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tour-page-single">
                            <div class="location-map">
                                <div class="contact-map" id="peta-hotel" style="height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================
            Hotel
            ==============================-->
            <section class="space-extra2">
                <div class="container">
                    {{--  <div class="th-sort-bar">  --}}
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-9 mb-3 mb-sm-0">
                                <div class="search-form-area">
                                    <form class="search-form" action="{{ route('hotel') }}" method="get">
                                        <input id="cari_hotel" name="nama_hotel" type="text" class="form-control" value="{{ request()->nama_hotel }}" placeholder="Cari Hotel">
                                        <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-3 mt-3 mt-sm-0">
                                <select class="form-control select2" id="kategoriSelect" onchange="redirectToHotel(this.value)">
                                    <option value="">-- Pilih Bintang --</option>
                                    <option value="1" @if (request()->bintang == 1)
                                        selected
                                    @endif>Bintang 1</option>
                                    <option value="2" @if (request()->bintang == 2)
                                        selected
                                    @endif>Bintang 2</option>
                                    <option value="3" @if (request()->bintang == 3)
                                        selected
                                    @endif>Bintang 3</option>
                                    <option value="4" @if (request()->bintang == 4)
                                        selected
                                    @endif>Bintang 4</option>
                                    <option value="5" @if (request()->bintang == 5)
                                        selected
                                    @endif>Bintang 5</option>
                                </select>
                            </div>
                        </div>
                    {{--  </div>  --}}
                    <div class="row mt-5">
                        <div class="col-xxl-12 col-lg-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                                    <div class="row gy-30 justify-content-center">
                                        @foreach ($items as $item)
                                            <div class="col-xxl-3 col-xl-6">
                                                <div class="tour-box th-ani">
                                                    <div class="tour-box_img global-img">
                                                        <img src="{{ url('storage/' . $item->galerihotel->first()->image) }}" alt="image">
                                                    </div>
                                                    <div class="tour-content">
                                                        <h3 class="box-title" style="font-weight: 600; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h3>
                                                        <div class="text-warning" style="font-size: 23px">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $item->bintang)
                                                                    <i class="mdi mdi-star"></i>
                                                                @else
                                                                    <i class="mdi mdi-star-outline"></i>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <div style="color: rgb(41, 41, 41); font-size: 14px; text-align: justify; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; text-overflow: ellipsis;">
                                                            {!! $item->deskripsi !!}
                                                        </div>
                                                        <div class="tour-action justify-content-center" style="margin-top: 20px;">
                                                            <a href="{{ route('user.hotel-show', $item->slug) }}" class="th-btn style4 th-icon">Lihat Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>

@endsection

@push('before-style')
<link href="{{ asset('siparta/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('after-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('after-script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="{{ asset('siparta/assets/libs/select2/js/select2.min.js') }}"></script>
<script>
    $(".select2").select2();
</script>
<script>
    function redirectToHotel(value) {
        if (value) {
            window.location.href = "/hotel?bintang=" + value;
        }
    }
</script>
<script>
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
                const splitted = data.split(",");
                L.marker([splitted[0], splitted[1]]).addTo(markerGroup)
                    .bindPopup("<center><br>" + value
                        .nama +
                        "</br><br><b class='mb-5' style='margin-bottom:100px;'></b>" +
                        "<a href=/hotel/" + value.slug +
                        "><span class='text-bg-primary'><i class='fa fa-address-card' aria-hidden='true'></i> Detail " + value
                        .nama +
                        "</span></a> <a href='https://www.google.com/maps?saddr=My+Location&daddr=" +
                        [splitted[0], splitted[1]] +
                        "'><br><span class='text-bg-danger'><i class='fa fa-location-arrow' aria-hidden='true'></i> Rute Google Maps</span></a></center>");
        });

    }
});
</script>
@endpush
