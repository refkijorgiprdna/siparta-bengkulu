@extends('layouts.admin.app')

@section('title')
Data Bidang | Admin SIPARTA
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Bidang</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                {{--  <div class="card-header">
                    <a href="{{ route('hotel.create') }}" class="btn btn-primary btn-sm float-end">
                        Tambah Hotel
                    </a>
                    <h4 class="card-title mb-0">Daftar Hotel di Kota Bengkulu</h4>
                </div>  --}}
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title mb-0">Data Bidang di Dinas Pariwisata Kota Bengkulu</h4>
                    <div class="column">
                        <a href="{{ route('data.create') }}" class="btn btn-primary btn-sm">
                            Tambah Data Bidang
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bidang</th>
                                    <th>Data</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_bidang }}</td>
                                        <td>
                                            @if ($item->data)
                                            <a href="{{ asset('storage/' . $item->data) }}" target="_blank">
                                                {{ basename($item->data) }} <!-- Menampilkan nama file asli -->
                                            </a>
                                            @elseif ($item->link_video)
                                                <a href="{{ $item->link_video }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $item->link_video }}
                                                </a>
                                            @else

                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{--  <a href="{{ route('data.edit', $item->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>  --}}
                                            <form action="{{ route('data.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger delete-btn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- container-fluid -->

@endsection
