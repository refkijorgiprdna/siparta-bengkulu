<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GaleriWisataRequest;
use App\Models\GaleriWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = GaleriWisata::with(['wisata'])->get();

        return view('pages.admin.galeri-wisata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wisata = Wisata::all();
        return view('pages.admin.galeri-wisata.create', [
            'wisata' => $wisata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriWisataRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeri-wisata', 'public'
        );

        GaleriWisata::create($data);
        return redirect()->route('galeri-wisata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = GaleriWisata::findOrFail($id);
        $wisata = Wisata::all();

        return view('pages.admin.galeri-wisata.edit', [
            'item' => $item,
            'wisata' => $wisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriWisataRequest $request, string $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeri-wisata', 'public'
        );

        $item = GaleriWisata::findOrFail($id);

        $item->update($data);

        return redirect()->route('galeri-wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriWisata::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-wisata.index');
    }
}
