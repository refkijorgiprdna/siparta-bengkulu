<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\Wisata;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $wisataCount = Wisata::count();
        $hotelCount = Hotel::count();
        $kulinerCount = Kuliner::count();

        return view('pages.admin.dashboard', compact('wisataCount', 'hotelCount', 'kulinerCount'));
    }
}
