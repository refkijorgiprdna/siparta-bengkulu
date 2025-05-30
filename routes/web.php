<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubWisataController;
use App\Http\Controllers\Admin\GaleriHotelController;
use App\Http\Controllers\Admin\GaleriWisataController;
use App\Http\Controllers\Admin\GaleriKulinerController;
use App\Http\Controllers\Admin\GaleriSubWisataController;
use App\Http\Controllers\Admin\DataController as AdminDataController;
use App\Http\Controllers\Admin\HotelController as AdminHotelController;
use App\Http\Controllers\Admin\WisataController as AdminWisataController;
use App\Http\Controllers\Admin\KulinerController as AdminKulinerController;

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
Route::get('/wisata/{slug}', [WisataController::class, 'wisata_show'])->name('user.wisata-show');
Route::get('/wisata/sub-wisata/{slug}', [WisataController::class, 'sub_wisata_show'])->name('user.sub-wisata-show');

Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');
Route::get('/hotel/{slug}', [HotelController::class, 'hotel_show'])->name('user.hotel-show');

Route::get('/kuliner-dan-oleh-oleh', [KulinerController::class, 'index'])->name('kuliner');
Route::get('/kuliner-dan-oleh-oleh/{slug}', [KulinerController::class, 'kuliner_show'])->name('user.kuliner-show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/sekretariat', [DataController::class, 'sekretariat'])->name('sekretariat');
Route::get('/destinasi-wisata', [DataController::class, 'destinasi_wisata'])->name('destinasi-wisata');
Route::get('/ekonomi-kreatif', [DataController::class, 'ekonomi_kreatif'])->name('ekonomi-kreatif');
Route::get('/pemasaran-pariwisata', [DataController::class, 'pemasaran_pariwisata'])->name('pemasaran-pariwisata');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

        //Route::get('kalender', [KalenderController::class, 'index'])->name('kalender');

        Route::resource('wisata', (AdminWisataController::class));
        Route::resource('galeri-wisata', (GaleriWisataController::class));
        Route::resource('sub-wisata', (SubWisataController::class));
        Route::resource('galeri-sub-wisata', (GaleriSubWisataController::class));

        Route::resource('hotel', (AdminHotelController::class));
        Route::resource('galeri-hotel', (GaleriHotelController::class));

        Route::resource('kuliner', (AdminKulinerController::class));
        Route::resource('galeri-kuliner', (GaleriKulinerController::class));

        Route::resource('data', AdminDataController::class);


    });

Route::prefix('api')
    ->group(function() {
        Route::get('/peta-wisata', [APIController::class, 'peta_wisata']);
        Route::get('/peta-sub-wisata', [APIController::class, 'peta_sub_wisata']);
        Route::get('/peta-wisata/item/{id}', [APIController::class, 'peta_wisata_item']);

        Route::get('/peta-hotel', [APIController::class, 'peta_hotel']);

        Route::get('/peta-kuliner', [APIController::class, 'peta_kuliner']);

    });

Auth::routes();

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('register', [RegisterController::class, 'register'])->name('register');
