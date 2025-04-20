@extends('layouts.admin.app')

@section('title')
Edit Data Bidang | Admin SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Bidang</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('hotel.index') }}">Data Bidang</a></li>
                        <li class="breadcrumb-item active">Edit Data Bidang {{ $item->nama_bidang }}</li>
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
        <!-- end col -->
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Bidang</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('data.update', $item->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="nama_bidang">Nama Bidang</label>
                            <select name="nama_bidang" id="nama_bidang" class="form-select" disabled>
                                <option value="Destinasi Wisata" {{ old('nama_bidang', $item->nama_bidang) == 'Destinasi Wisata' ? 'selected' : '' }}>Destinasi Wisata</option>
                                <option value="Sekretariat" {{ old('nama_bidang', $item->nama_bidang) == 'Sekretariat' ? 'selected' : '' }}>Sekretariat</option>
                                <option value="Ekonomi Kreatif" {{ old('nama_bidang', $item->nama_bidang) == 'Ekonomi Kreatif' ? 'selected' : '' }}>Ekonomi Kreatif</option>
                                <option value="Pemasaran Pariwisata" {{ old('nama_bidang', $item->nama_bidang) == 'Pemasaran Pariwisata' ? 'selected' : '' }}>Pemasaran Pariwisata</option>
                            </select>
                            <small class="form-text text-muted">Bidang ini tidak dapat diubah.</small>
                        </div>

                        <!-- Input untuk file, jika ada -->
                        <div id="file-input" class="mb-3 {{ $item->data ? '' : 'd-none' }}">
                            <label for="data" class="form-label">Data (PDF/Excel)</label>
                            <input type="file" name="data" id="data" class="form-control">
                            @if($item->data)
                                <a href="{{ asset('storage/' . $item->data) }}" target="_blank">Lihat File Lama</a>
                            @endif
                        </div>

                        <!-- Input untuk link video -->
                        <div id="link-input" class="mb-3 {{ !$item->data ? '' : 'd-none' }}">
                            <label for="link_video" class="form-label">Link Video</label>
                            <input type="text" name="link_video" id="link_video" class="form-control" value="{{ old('link_video', $item->link_video) }}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm my-2">Ubah</button>
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

@push('addon-script')
<script>
    function toggleInput() {
        const bidang = document.getElementById('nama_bidang').value;
        const fileInput = document.getElementById('file-input');
        const linkInput = document.getElementById('link-input');

        if (bidang === 'Destinasi Wisata' || bidang === 'Ekonomi Kreatif' || bidang === 'Sekretariat') {
            fileInput.classList.remove('d-none');
            linkInput.classList.add('d-none');
        } else if (bidang === 'Pemasaran Pariwisata') {
            fileInput.classList.add('d-none');
            linkInput.classList.remove('d-none');
        } else {
            fileInput.classList.add('d-none');
            linkInput.classList.add('d-none');
        }
    }

    // Inisialisasi toggleInput berdasarkan nilai bidang yang sudah ada
    document.addEventListener('DOMContentLoaded', function() {
        toggleInput();
    });
</script>
@endpush
