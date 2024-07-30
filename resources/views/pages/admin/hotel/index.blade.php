@extends('layouts.admin.app')

@section('title')
Hotel | Admin SIPARTA
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
                        <li class="breadcrumb-item active">Data Hotel</li>
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
                    <h4 class="card-title mb-0">Data Hotel di Kota Bengkulu</h4>
                    <div class="column">
                        <a href="{{ route('hotel.create') }}" class="btn btn-primary btn-sm">
                            Tambah Hotel
                        </a>
                        <a href="{{ route('galeri-hotel.create') }}" class="btn btn-primary btn-sm">
                            Tambah Galeri
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Hotel</th>
                                    <th>Rating</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $item->bintang)
                                                    <i class="mdi mdi-star text-warning font-size-20"></i>
                                                @else
                                                    <i class="mdi mdi-star-outline text-warning font-size-20"></i>
                                                @endif
                                            @endfor
                                        </td>
                                        <td>{{ $item->alamat }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('galeri-hotel.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa fa-image"></i>
                                            </a>
                                            <a href="{{ route('hotel.edit', $item->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('hotel.destroy', $item->id) }}" method="POST" class="d-inline">
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


@push('addon-script')
<script>
    $(document).ready(function () {
        $('.delete-btn').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endpush
