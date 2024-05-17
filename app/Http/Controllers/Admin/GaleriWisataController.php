<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GaleriWisataRequest;
use App\Models\GaleriWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;

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
    public function create(Request $request)
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
        //$data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/galeri-wisata', 'public'
        // );

        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-wisata/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-wisata/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        GaleriWisata::create([
            'wisata_id' => $request->wisata_id,
            'image' => 'assets/galeri-wisata/' . $imageNames
        ]);
        return redirect()->route('galeri-wisata.show', $request->wisata_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = GaleriWisata::with(['wisata'])->where('wisata_id', $id)->get();

        return view('pages.admin.galeri-wisata.index', [
            'items' => $items
        ]);
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
        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-wisata/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-wisata/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        $item = GaleriWisata::findOrFail($id);

        $item->update([
            'image' => 'assets/galeri-wisata/' . $imageNames
        ]);

        return redirect()->route('galeri-wisata.show', $item->wisata_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriWisata::findOrFail($id);
        $wisata_id = $item->wisata_id;
        $item->delete();

        return redirect()->route('galeri-wisata.show', $wisata_id);
    }
}
