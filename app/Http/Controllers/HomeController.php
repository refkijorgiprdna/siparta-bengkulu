<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kuliner;
use App\Models\Wisata;
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
        $hotel = Hotel::with(['galerihotel'])->paginate(4);
        $kuliner = Kuliner::with(['galerikuliner'])->paginate(4);

        return view('pages.home', [
            'wisata' => $wisata,
            'hotel' => $hotel,
            'kuliner' => $kuliner
        ]);
    }
}
