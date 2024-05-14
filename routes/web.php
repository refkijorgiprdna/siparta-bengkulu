<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriHotelController;
use App\Http\Controllers\Admin\GaleriWisataController;
use App\Http\Controllers\Admin\HotelController as AdminHotelController;
use App\Http\Controllers\Admin\WisataController as AdminWisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/sub-wisata', [WisataController::class, 'sub_wisata'])->name('sub-wisata');
Route::get('/sub-sub-wisata', [WisataController::class, 'sub_sub_wisata'])->name('sub-sub-wisata');

Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');
Route::get('/sub-hotel', [HotelController::class, 'sub_hotel'])->name('sub-hotel');



Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('wisata', (AdminWisataController::class));
        Route::resource('galeri-wisata', (GaleriWisataController::class));

        Route::resource('hotel', (AdminHotelController::class));
        Route::resource('galeri-hotel', (GaleriHotelController::class));

    });

Auth::routes();
