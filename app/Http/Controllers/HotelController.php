<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $items = Hotel::with(['galerihotel'])->get();
        return view('pages.hotel',  compact('items'));
    }

    public function hotel_show(string $slug)
    {
        $item = Hotel::with('galerihotel')->where('slug', $slug)->first();

        return view('pages.hotel-show', compact('item'));
    }
}
