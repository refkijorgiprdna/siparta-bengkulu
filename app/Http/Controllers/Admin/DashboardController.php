<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data;
use App\Models\Hotel;
use App\Models\Wisata;
use App\Models\Kuliner;
use App\Models\SubWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $wisataCount = Wisata::count();
        $subwisataCount = SubWisata::count();
        $hotelCount = Hotel::count();
        $kulinerCount = Kuliner::count();

        // Debugging
        //dd($wisataCount, $subwisataCount, $hotelCount, $kulinerCount);


        // Hitung jumlah data untuk setiap bidang
        $destinasiCount = Data::where('nama_bidang', 'Destinasi Wisata')->count();
        $ekonomiCount = Data::where('nama_bidang', 'Ekonomi Kreatif')->count();
        $pemasaranCount = Data::where('nama_bidang', 'Pemasaran Pariwisata')->count();

        return view('pages.admin.dashboard',
            compact('wisataCount', 'subwisataCount', 'hotelCount', 'kulinerCount', 'destinasiCount', 'ekonomiCount', 'pemasaranCount'));
    }
}
