<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Wisata;
use App\Models\Kuliner;
use App\Models\SubWisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisata = Wisata::with(['galeriwisata'])->paginate(4);
        $hotel = Hotel::with('galerihotel')->orderBy('bintang', 'desc')->paginate(8);
        $kuliner = Kuliner::with(['galerikuliner'])->paginate(8);

        $wisataCount = Wisata::count() + SubWisata::count(); // Menjumlahkan wisata dan subwisata
        $hotelCount = Hotel::count();
        $kulinerCount = Kuliner::count();

        return view('pages.frontend.home', [
            'wisata' => $wisata,
            'hotel' => $hotel,
            'kuliner' => $kuliner,
            'wisataCount' => $wisataCount,
            'hotelCount' => $hotelCount,
            'kulinerCount' => $kulinerCount
        ]);
    }
}
