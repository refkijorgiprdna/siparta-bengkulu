<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // public function index(Request $request)
    // {
    //     $items = Hotel::with(['galerihotel'])->get();
    //     return view('pages.hotel',  compact('items'));
    // }

    public function index(Request $request)
    {
        if ($request->nama_hotel) {
            $search = $request->nama_hotel;
            $items = Hotel::with('galerihotel')->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%");
            })->orderBy('bintang', 'desc')->get();
        } elseif ($request->bintang) {
            $search = $request->bintang;
            $items = Hotel::with('galerihotel')->where('bintang', $search)->get();
        } else {
            // Mengambil data hotel dan mengurutkannya berdasarkan bintang tertinggi
            $items = Hotel::with('galerihotel')->orderBy('bintang', 'desc')->get();
        }

        return view('pages.hotel', compact('items'));
    }

    public function hotel_show(string $slug)
    {
        $item = Hotel::with('galerihotel')->where('slug', $slug)->first();

        return view('pages.hotel-show', compact('item'));
    }
}
