<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(Request $request)
    {
        $items = Kuliner::with(['galerikuliner'])->get();
        return view('pages.kuliner',  compact('items'));
    }

    public function kuliner_show(string $slug)
    {
        $item = Kuliner::with('galerikuliner')->where('slug', $slug)->first();

        return view('pages.kuliner-show', compact('item'));
    }
}
