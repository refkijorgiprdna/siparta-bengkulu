@extends('layouts.admin.app')

@section('title')
Dashboard | Admin SIPARTA
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">WISATA</span>
                            <h4 class="mb-3">
                                <span>{{ $wisataCount }}</span>
                            </h4>
                        </div>

                        <div class="flex-shrink-0 text-end">
                           <i class="bx bx-photo-album" style="font-size: 35px; color:red"></i>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">SUB WISATA</span>
                            <h4 class="mb-3">
                                <span>{{ $subwisataCount }}</span>
                            </h4>
                        </div>

                        <div class="flex-shrink-0 text-end">
                           <i class="bx bx-photo-album" style="font-size: 35px; color:orange"></i>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">HOTEL</span>
                            <h4 class="mb-3">
                                <span>{{ $hotelCount }}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <i class="bx bx-hotel" style="font-size: 35px; color:green"></i>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">KULINER DAN OLEH-OLEH</span>
                            <h4 class="mb-3">
                                <span>{{ $kulinerCount }}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <i class="bx bx-food-menu" style="font-size: 35px; color:#1C84EE"></i>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->


</div>
<!-- container-fluid -->

@endsection

