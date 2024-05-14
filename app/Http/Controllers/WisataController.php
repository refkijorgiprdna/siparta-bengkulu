<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(Request $request)
    {
        $items = Wisata::with(['galeriwisata'])->get();
        return view('pages.wisata', [
            'items' => $items
        ]);
    }

    public function sub_wisata(Request $request)
    {
        return view('pages.sub-wisata');
    }

    public function sub_sub_wisata(Request $request)
    {
        return view('pages.sub-sub-wisata');
    }
}
