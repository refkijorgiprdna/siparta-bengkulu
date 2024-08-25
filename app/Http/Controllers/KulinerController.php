<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->nama_kuliner) {
            $search = $request->nama_kuliner;
            $items = Kuliner::with(['galerikuliner'])->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%");
            })->get();
        } else {
            $items = Kuliner::with(['galerikuliner'])->get();
        }

        return view('pages.kuliner', compact('items'));
    }

    public function kuliner_show(string $slug)
    {
        $item = Kuliner::with('galerikuliner')->where('slug', $slug)->first();

        return view('pages.kuliner-show', compact('item'));
    }
}
