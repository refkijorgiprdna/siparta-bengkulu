<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kuliner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\GaleriKulinerRequest;
use App\Models\GaleriKuliner;

class GaleriKulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = GaleriKuliner::with(['kuliner'])->get();

        return view('pages.admin.galeri-kuliner.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kuliner = Kuliner::all();
        return view('pages.admin.galeri-kuliner.create', [
            'kuliner' => $kuliner
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriKulinerRequest $request)
    {
        // $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/galeri-hotel', 'public'
        // );

        // GaleriHotel::create($data);
        // return redirect()->route('galeri-hotel.index');

        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-kuliner/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-kuliner/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        GaleriKuliner::create([
            'kuliner_id' => $request->kuliner_id,
            'image' => 'assets/galeri-kuliner/' . $imageNames
        ]);
        return redirect()->route('galeri-kuliner.show', $request->kuliner_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = GaleriKuliner::with(['kuliner'])->where('kuliner_id', $id)->get();

        return view('pages.admin.galeri-kuliner.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = GaleriKuliner::findOrFail($id);
        $kuliner = Kuliner::all();

        return view('pages.admin.galeri-kuliner.edit', [
            'item' => $item,
            'kuliner' => $kuliner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriKulinerRequest $request, string $id)
    {
        // $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/galeri-hotel', 'public'
        // );

        // $item = GaleriHotel::findOrFail($id);

        // $item->update($data);

        // return redirect()->route('galeri-hotel.index');

        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-kuliner/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-kuliner/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        $item = GaleriKuliner::findOrFail($id);

        $item->update([
            'image' => 'assets/galeri-kuliner/' . $imageNames
        ]);

        return redirect()->route('galeri-kuliner.show', $item->kuliner_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriKuliner::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-kuliner.show', $item->kuliner_id);
    }
}
