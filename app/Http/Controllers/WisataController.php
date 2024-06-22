<?php

namespace App\Http\Controllers;

use App\Models\SubWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(Request $request)
    {
        $items = Wisata::with(['galeriwisata'])->get();
        return view('pages.wisata', compact('items'));
    }

    public function wisata_show(string $slug)
    {
        $item = Wisata::with('galeriwisata', 'subwisata')->where('slug', $slug)->first();

        return view('pages.wisata-show', compact('item'));
    }

    public function sub_wisata_show(String $slug)
    {
        $item = SubWisata::with('galerisubwisata')->where('slug', $slug)->first();

        return view('pages.sub-wisata-show', compact('item'));
    }
}
