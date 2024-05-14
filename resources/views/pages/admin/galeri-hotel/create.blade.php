@extends('layouts.admin.app')

@section('title')
Tambah Galeri Hotel | Admin SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Hotel</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hotel</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('galeri-hotel.index') }}">Galeri Hotel</a></li>
                        <li class="breadcrumb-item active">Tambah Gambar</li>
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
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Data Hotel</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('galeri-hotel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="hotel_id">Wisata</label>
                        <select name="hotel_id" required class="form-control">
                            <option value="">Pilih Hotel</option>
                            @foreach ($hotel as $hotell)
                                <option value="{{ $hotell->id }}">
                                    {{ $hotell->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" placeholder="Gambar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm my-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- container-fluid -->
@endsection

