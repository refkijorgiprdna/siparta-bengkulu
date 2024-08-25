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
                <h4 class="mb-sm-0 font-size-18"></h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile</h4>
                    {{--  <p class="card-title-desc">Form layout options : from inline, horizontal & custom grid implementations</p>  --}}
                </div>
                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-lg-12 ms-lg-auto">
                            <div class="mt-4 mt-lg-0">
                                <form method="POST" action="{{ route('profile.update') }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="nama" name="name" placeholder="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="{{ $user->username }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="password-confirmation" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- container-fluid -->

@endsection


@push('addon-style')
<!-- select2 css -->
<link href="{{ url('siparta/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
