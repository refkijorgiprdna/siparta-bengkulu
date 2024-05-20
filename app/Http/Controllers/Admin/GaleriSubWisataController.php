<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubWisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GaleriSubWisata;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\GaleriSubWisataRequest;
use Intervention\Image\ImageManager;

class GaleriSubWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = GaleriSubWisata::with(['subwisata'])->get();

        return view('pages.admin.galeri-sub-wisata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subwisata = SubWisata::all();
        return view('pages.admin.galeri-sub-wisata.create', [
            'subwisata' => $subwisata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriSubWisataRequest $request)
    {
        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-sub-wisata/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-sub-wisata/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        GaleriSubWisata::create([
            'subwisata_id' => $request->subwisata_id,
            'image' => 'assets/galeri-sub-wisata/' . $imageNames
        ]);

        return redirect()->route('galeri-sub-wisata.show', $request->subwisata_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = GaleriSubWisata::with(['subwisata'])->where('subwisata_id', $id)->get();

        return view('pages.admin.galeri-sub-wisata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = GaleriSubWisata::findOrFail($id);
        $subwisata = SubWisata::all();

        return view('pages.admin.galeri-sub-wisata.edit', [
            'item' => $item,
            'subwisata' => $subwisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriSubWisataRequest $request, string $id)
    {
        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-sub-wisata/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-sub-wisata/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        $item = GaleriSubWisata::findOrFail($id);

        $item->update([
            'image' => 'assets/galeri-sub-wisata/' . $imageNames
        ]);

        return redirect()->route('galeri-sub-wisata.show', $item->subwisata_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriSubWisata::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-sub-wisata.show', $item->subwisata_id);
    }
}
