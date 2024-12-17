@extends('layouts.frontend.app')

@section('title')
    Data Ekonomi Kreatif | SIPARTA Bengkulu
@endsection

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ url('frontend/assets/img/bg/category_bg_1.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Data Bidang Ekonomi Kreatif </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="#">Ekonomi Kreatif</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space-extra" data-bg-src="{{ url('frontend/assets/img/batik-besurek.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($ekonomi_kreatif as $data)
                    <div class="col-xl-6 col-md-6">
                        <div class="price-card ">
                            <div class="price-card_wrapp">
                                <div class="price-card_icon">
                                    <img src="{{ url('frontend/assets/img/icon/document.svg') }}" alt="img">
                                </div>
                                <h3 class="box-title">{{ basename($data->data) }}</h3>
                            </div>
                            <div class="price-btn">
                                <a href="{{ url('storage/' . $data->data) }}" class="th-btn style3 w-100" target="_blank">
                                    Lihat Dokumen
                                </a>
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
            </div>
        </div>
    </section>


@endsection

