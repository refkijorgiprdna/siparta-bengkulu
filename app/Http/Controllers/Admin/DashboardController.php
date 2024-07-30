<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\Wisata;
use App\Models\SubWisata;
use App\Models\Kuliner;
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

        return view('pages.admin.dashboard', compact('wisataCount', 'subwisataCount', 'hotelCount', 'kulinerCount'));
    }
}
