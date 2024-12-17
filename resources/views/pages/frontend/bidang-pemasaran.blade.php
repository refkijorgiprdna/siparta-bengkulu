@extends('layouts.frontend.app')

@section('title')
    Data Pemasaran Pariwisata | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Data Bidang Pemasaran Pariwisata </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="#">Pemasaran Pariwisata</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space-extra" data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($pemasaran_pariwisata as $data)
                    <div class="col-xl-6 col-md-6">
                        <div class="price-card ">
                            <div class="price-card_wrapp_video">
                                <div class="ratio ratio-16x9">
                                    <iframe src="{{ $data->link_video }}" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <br>
                        <br>
                        <p class="text-muted">Tidak ada dokumen yang tersedia saat ini.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                @endforelse
                {{--  <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="price-card_wrapp">
                            <div class="ratio ratio-21x9">
                                <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </section>


@endsection

